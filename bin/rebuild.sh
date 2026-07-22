#!/usr/bin/env bash
# Единый пересборочный прогон + контроль качества. Запуск из корня:
#   bash bin/rebuild.sh
# Запускать после добавления/изменения статей, услуг, регионов — перед пушем.
set -uo pipefail
cd "$(dirname "$0")/.."
FAIL=0

step() { printf '\n══ %s ══\n' "$1"; }

step "1/5 Генераторы"
php bin/generate-llms.php            || FAIL=1
php bin/generate-reference-data.php  || FAIL=1
php bin/generate-rss.php             || FAIL=1
python3 bin/update-sitemap-lastmod.py || FAIL=1

step "2/5 Валидация XML (sitemap, feed)"
python3 - <<'EOF' || FAIL=1
import xml.dom.minidom, sys
for f in ('sitemap.xml', 'feed.xml'):
    try:
        xml.dom.minidom.parse(f)
        print(f'  ✅ {f}')
    except Exception as e:
        print(f'  ❌ {f}: {e}'); sys.exit(1)
EOF

step "3/5 Внутренние ссылки (все страницы, по ФС + 301 из .htaccess)"
python3 - <<'EOF' || FAIL=1
import re, pathlib, sys
root = pathlib.Path('.')
ht = pathlib.Path('.htaccess').read_text()
pages = [p for p in root.rglob('index.php') if not any(s in str(p) for s in ('222/','cms/','build/'))]
pages += list(root.glob('blog/*.html')) + [root/'404.php']
broken, total = {}, 0
for p in pages:
    h = p.read_text(errors='ignore')
    for m in re.finditer(r'href="(/[a-zA-Z0-9/_.\-]*?)(#[^"]*)?"', h):
        u = m.group(1); total += 1
        if u == '/': continue
        t = root / u.lstrip('/')
        ok = (t.exists() or (t/'index.php').exists() or (t/'index.html').exists()
              or u.strip('/') in ht or u in ht)
        if not ok:
            broken.setdefault(u, []).append(str(p))
print(f'  ссылок проверено: {total}')
if broken:
    for u, srcs in list(broken.items())[:10]:
        print(f'  ❌ {u}  ← {srcs[0]}' + (f' (+{len(srcs)-1})' if len(srcs) > 1 else ''))
    sys.exit(1)
print('  ✅ битых нет')
EOF

step "4/5 JSON-LD на всех страницах"
php -r '
$bad=0;$ok=0;
$rii=new RecursiveIteratorIterator(new RecursiveDirectoryIterator("."));
foreach($rii as $f){
  $p=$f->getPathname();
  if(!preg_match("#index\.php$#",$p)||preg_match("#/(222|cms|build)/#",$p))continue;
  preg_match_all("#<script type=\"application/ld\+json\">(.*?)</script>#s",file_get_contents($p),$m);
  foreach($m[1] as $b){
    // пропускаем блоки с PHP внутри (генерируются runtime)
    if(strpos($b,"<?php")!==false)continue;
    json_decode(trim($b));
    if(json_last_error()===JSON_ERROR_NONE)$ok++;else{$bad++;echo "  ❌ $p: ".json_last_error_msg()."\n";}
  }
}
echo "  блоков валидных: $ok, битых: $bad\n";
exit($bad?1:0);' || FAIL=1

step "5/5 Sitemap ↔ файловая система"
python3 - <<'EOF' || FAIL=1
import re, pathlib, sys
sm = pathlib.Path('sitemap.xml').read_text()
sm_urls = set(re.findall(r'<loc>https://kaznaexpert\.ru(/[^<]*)</loc>', sm))
missing_fs, noindex_in_sm = [], []
for u in sm_urls:
    if u == '/': continue
    p = pathlib.Path(u.lstrip('/'))
    if u.endswith(('.html', '.php', '.xml', '.txt', '.pdf')):
        target = p if p.exists() else None
    else:
        target = next((c for c in (p / 'index.php', p / 'index.html') if c.exists()), None)
    if target is None:
        missing_fs.append(u); continue
    if re.search(r'name="robots"[^>]*noindex', target.read_text(errors='ignore')):
        noindex_in_sm.append(u)
err = False
if missing_fs:
    print('  ❌ в sitemap, но нет на диске:', missing_fs[:5]); err = True
if noindex_in_sm:
    print('  ❌ noindex-страницы в sitemap:', noindex_in_sm[:5]); err = True
if err: sys.exit(1)
print(f'  ✅ {len(sm_urls)} URL: все существуют, noindex в sitemap нет')
EOF

step "6/6 Свежесть годов в тайтлах (предупреждение, не блокирует)"
python3 - <<'EOF'
import re, pathlib, datetime
year = datetime.date.today().year
stale = []
for p in pathlib.Path('.').rglob('index.php'):
    s = str(p)
    if any(x in s for x in ('222/','cms/','build/')): continue
    h = p.read_text(errors='ignore')
    m = re.search(r'<title>([^<]*)</title>', h)
    if not m: continue
    # только реальные годы 2020+: не номера НПА («№ 2024») и не коды («2000»)
    years = [int(y) for y in re.findall(r'(?<!№ )(?<!№)\b(202\d)\b(?!\s*»)', m.group(1))]
    years = [y for y in years if 2020 <= y]
    if years and max(years) < year:
        stale.append(f'{max(years)} {s}')
if stale:
    print(f'  ⚠️  тайтлов с устаревшим годом (<{year}): {len(stale)}')
    for x in stale[:8]: print('     ', x)
else:
    print(f'  ✅ устаревших годов в тайтлах нет (текущий: {year})')
EOF

echo ""
if [ "$FAIL" -eq 0 ]; then
  echo "════ ✅ REBUILD OK — можно коммитить и пушить ════"
else
  echo "════ ❌ ЕСТЬ ОШИБКИ — смотри вывод выше ════"
  exit 1
fi
