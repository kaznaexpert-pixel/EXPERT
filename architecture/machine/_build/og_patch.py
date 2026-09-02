#!/usr/bin/env python3
# -*- coding: utf-8 -*-
"""og_patch.py — шаг пайплайна: уникальная картинка сниппета для собранной страницы.

Что делает с готовым index.php:
  1. берёт H1 и категорию (articleSection из Article → хлебные крошки → раздел URL);
  2. генерирует через og_build.py три файла img/og/<slug>-16x9.jpg, -4x3.webp, -1x1.webp
     (slug = путь страницы, «/» → «__»: /regiony/kazan/ → regiony__kazan);
  3. правит разметку: og:image (+width/height/type), twitter:image, массив image в основном
     узле JSON-LD (Article / CollectionPage / Service / Product / ProfilePage / WebPage),
     author.image и Person.image у экспертов → /img/team/<фамилия>-photo.jpg.
  dateModified не трогает — это правка разметки, не содержания.

Использование из генератора (после сборки html, до записи/публикации):
    from og_patch import og_patch
    html, files = og_patch(html, "baza-znaniy/<slug>/", out_img_dir="/tmp/og")   # files → img/og/<name>
    # files — список локальных путей; публиковать по пути "img/og/" + basename

CLI:
    python3 og_patch.py <index.php> <url-path> [--h1 "…"] [--cat "…"] [--img-dir /tmp/og]
      правит файл на месте, картинки кладёт в --img-dir (по умолчанию /tmp/og).
    python3 og_patch.py --check <index.php> [...]  — только проверка: exit 1, если на странице заглушка.

Требования: og_build.py, Playfair.ttf, Inter.ttf рядом; герб — OG_LOGO (по умолчанию img/LogoWhite.png
из репозитория; если файла нет локально — тянется с raw.githubusercontent).
"""
import os, re, sys, json, html as htmlmod

HERE = os.path.dirname(os.path.abspath(__file__))
sys.path.insert(0, HERE)
SITE = "https://kaznaexpert.ru"
STUB = "og-image.png"
MAIN_TYPES = ("Article", "CollectionPage", "Service", "Product", "ProfilePage", "WebPage")
TEAM = {"mihailov-yaroslav": "mihailov-photo.jpg", "bogdanova-anna": "bogdanova-photo.jpg"}
SEC = {  # раздел URL → (категория, подпись)
    "baza-znaniy": ("База знаний", "База знаний по казначейскому сопровождению"),
    "uslugi": ("Услуга КазнаЭксперт", "Казначейское сопровождение под ключ · фиксированные цены"),
    "regiony": ("Регионы · казначейское сопровождение", "Казначейское сопровождение госконтрактов по всей России"),
    "komanda": ("Команда КазнаЭксперт", "Эксперты по казначейскому сопровождению"),
}
DEFAULT = ("КазнаЭксперт", "База знаний по казначейскому сопровождению")


def _logo():
    p = os.environ.get("OG_LOGO") or os.path.join(HERE, "LogoWhite.png")
    if not os.path.exists(p):
        import requests
        r = requests.get("https://raw.githubusercontent.com/kaznaexpert-pixel/EXPERT/main/img/LogoWhite.png", timeout=60)
        r.raise_for_status()
        open(p, "wb").write(r.content)
    return p


def _text(s):
    s = re.sub(r"<[^>]+>", " ", s)
    return re.sub(r"\s+", " ", htmlmod.unescape(s)).strip()


def _blocks(html):
    """[(raw, obj|None)] — все ld+json; obj=None, если внутри PHP или битый JSON."""
    out = []
    for m in re.finditer(r'(<script type="application/ld\+json">)(.*?)(</script>)', html, re.S):
        raw = m.group(2)
        obj = None
        if "<?" not in raw:
            try:
                obj = json.loads(raw)
            except Exception:
                obj = None
        out.append((m, obj))
    return out


def _types(n):
    t = n.get("@type") if isinstance(n, dict) else None
    return t if isinstance(t, list) else ([t] if t else [])


def _walk(obj):
    if isinstance(obj, dict):
        yield obj
        for v in obj.values():
            yield from _walk(v)
    elif isinstance(obj, list):
        for v in obj:
            yield from _walk(v)


def infer(html, url_path):
    """H1, категория, подпись, slug из страницы."""
    sec = url_path.strip("/").split("/")[0] if url_path.strip("/") else ""
    slug = url_path.strip("/").replace("/", "__") or "index"
    cat, sub = SEC.get(sec, DEFAULT)
    m = re.search(r"<h1[^>]*>(.*?)</h1>", html, re.S)
    h1 = _text(m.group(1)) if m and "<?" not in m.group(1) else ""
    section = None
    for _, obj in _blocks(html):
        if obj is None:
            continue
        for n in _walk(obj):
            if "Article" in _types(n) and n.get("articleSection"):
                section = n["articleSection"]
                break
            if "BreadcrumbList" in _types(n) and section is None:
                items = n.get("itemListElement") or []
                if sec == "baza-znaniy" and len(items) >= 3:
                    section = items[1].get("name") if items[1].get("name") != "База знаний" else None
        if section:
            break
    if sec == "baza-znaniy" and section and section not in ("База знаний",):
        cat = f"База знаний · {section}"
    if not h1:
        t = re.search(r"<title>(.*?)</title>", html, re.S)
        h1 = _text(t.group(1)).split(" — ")[0] if t else slug
    return h1, cat, sub, slug


def patch_markup(html, slug, url_path):
    base = f"{SITE}/img/og/{slug}"
    imgs = [f"{base}-16x9.jpg", f"{base}-4x3.webp", f"{base}-1x1.webp"]
    # og / twitter
    html = re.sub(r'(<meta property="og:image" content=")[^"]*(")', rf"\g<1>{imgs[0]}\2", html)
    html = re.sub(r'(<meta property="og:image:width" content=")[^"]*(")', r"\g<1>1200\2", html)
    html = re.sub(r'(<meta property="og:image:height" content=")[^"]*(")', r"\g<1>675\2", html)
    html = re.sub(r'(<meta property="og:image:type" content=")[^"]*(")', r"\g<1>image/jpeg\2", html)
    html = re.sub(r'(<meta name="twitter:image" content=")[^"]*(")', rf"\g<1>{imgs[0]}\2", html)
    if 'property="og:image"' not in html:
        html = html.replace("</head>", f'<meta property="og:image" content="{imgs[0]}">\n<meta property="og:image:width" content="1200">\n<meta property="og:image:height" content="675">\n</head>', 1)
    # JSON-LD
    blocks = _blocks(html)
    # WebPage получает image только если на странице нет более сильного узла (Article/Service/…)
    strong = {t for _, o in blocks if o is not None
              for n in (o.get("@graph", [o]) if isinstance(o, dict) else o)
              for t in _types(n) if t in MAIN_TYPES and t != "WebPage"}
    out, last = [], 0
    for m, obj in blocks:
        if obj is None:
            continue
        changed = False
        # основной узел — только верхнего уровня (сам блок, @graph или список), не вложенные WebPage/mainEntityOfPage
        top = obj.get("@graph", [obj]) if isinstance(obj, dict) else obj
        for n in top:
            ts = _types(n)
            if "WebPage" in ts and strong and not (set(ts) & strong):
                continue
            if any(t in MAIN_TYPES for t in ts) and n.get("image") != imgs:
                n["image"] = imgs
                changed = True
        for n in _walk(obj):
            ts = _types(n)
            if "Person" in ts:
                url = str(n.get("url", "")) + str(n.get("@id", ""))
                for k, f in TEAM.items():
                    if k in url and n.get("image") != f"{SITE}/img/team/{f}":
                        n["image"] = f"{SITE}/img/team/{f}"
                        changed = True
        if changed:
            out.append(html[last:m.start(2)])
            out.append("\n" + json.dumps(obj, ensure_ascii=False) + "\n")
            last = m.end(2)
    out.append(html[last:])
    return "".join(out), imgs


def og_patch(html, url_path, out_img_dir="/tmp/og", h1=None, cat=None, sub=None):
    """→ (html, [локальные пути трёх картинок])."""
    from og_build import render
    ih1, icat, isub, slug = infer(html, url_path)
    files = render(HERE, out_img_dir, slug, h1 or ih1, cat or icat, _logo(), sub or isub)
    html, _ = patch_markup(html, slug, url_path)
    return html, files


def check(html, url_path):
    """True, если заглушки нет (главная исключение)."""
    if url_path.strip("/") == "":
        return True
    m = re.search(r'<meta property="og:image" content="([^"]*)"', html)
    return STUB not in html and bool(m) and "/img/og/" in m.group(1)


if __name__ == "__main__":
    a = sys.argv[1:]
    if a and a[0] == "--check":
        bad = [p for p in a[1:] if not check(open(p, encoding="utf-8").read(), p)]
        for p in bad:
            print("ЗАГЛУШКА og-image.png:", p)
        sys.exit(1 if bad else 0)
    if len(a) < 2:
        print(__doc__); sys.exit(1)
    path, url_path = a[0], a[1]
    kw = {"out_img_dir": "/tmp/og"}
    for flag, key in (("--h1", "h1"), ("--cat", "cat"), ("--img-dir", "out_img_dir")):
        if flag in a:
            kw[key] = a[a.index(flag) + 1]
    html = open(path, encoding="utf-8").read()
    html, files = og_patch(html, url_path, **kw)
    open(path, "w", encoding="utf-8").write(html)
    for f in files:
        print(f)
    print("og: ок" if check(html, url_path) else "og: заглушка осталась")
