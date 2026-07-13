#!/usr/bin/env bash
# Runtime-смоук против работающего сервера (дополняет статический bin/rebuild.sh).
# Использование:
#   bash bin/smoke-test.sh                    # против http://localhost:8000
#   bash bin/smoke-test.sh https://kaznaexpert.ru   # против прода (после деплоя)
set -uo pipefail
BASE="${1:-http://localhost:8000}"
PASS=0; FAIL=0

check() { # check <ожидаемый_код> <метод> <путь> [json-тело] [описание]
  local want="$1" method="$2" path="$3" body="${4:-}" desc="${5:-$3}"
  local got
  if [ -n "$body" ]; then
    got=$(curl -s -o /dev/null -w '%{http_code}' -X "$method" "$BASE$path" \
          -H 'Content-Type: application/json' --data "$body" --max-time 15)
  else
    got=$(curl -s -o /dev/null -w '%{http_code}' -X "$method" "$BASE$path" --max-time 15)
  fi
  if [ "$got" = "$want" ]; then
    printf '  ✅ %-52s %s\n' "$desc" "$got"; PASS=$((PASS+1))
  else
    printf '  ❌ %-52s хотели %s, получили %s\n' "$desc" "$want" "$got"; FAIL=$((FAIL+1))
  fi
}

contains() { # contains <путь> <подстрока> [описание]
  local path="$1" needle="$2" desc="${3:-$1 содержит «$2»}"
  # bash-подстрока вместо grep -q: под pipefail грепу хватает раннего
  # совпадения, он выходит, printf ловит SIGPIPE → ложный фейл пайплайна
  local body; body=$(curl -s "$BASE$path" --max-time 15)
  if [[ "$body" == *"$needle"* ]]; then
    printf '  ✅ %s\n' "$desc"; PASS=$((PASS+1))
  else
    printf '  ❌ %s\n' "$desc"; FAIL=$((FAIL+1))
  fi
}

echo "══ Смоук против $BASE ══"

echo "── Ключевые страницы"
for p in / /baza-znaniy/ /faq/ /materialy/ /spasibo/ /komanda/mihailov-yaroslav/ \
         /uslugi/kaznacheyskoe-soprovozhdenie/ /regiony/moskva/ \
         /baza-znaniy/kalkulyator-ks/ /baza-znaniy/glossary/; do
  check 200 GET "$p"
done
check 200 GET /llms.txt "" "llms.txt"
check 200 GET /feed.xml "" "RSS-фид"
check 200 GET /sitemap.xml "" "sitemap"

echo "── 404"
if [[ "$BASE" == *localhost* ]]; then
  echo "  ⏭  404-проверка пропущена: встроенный PHP-сервер не знает ErrorDocument (.htaccess) — валидно только на проде"
else
  check 404 GET /net-takoy-stranicy/ "" "несуществующий URL → 404"
fi

echo "── Формы: lead.php"
check 200 POST /php/lead.php '{"phone":"+79991234567","hp":"bot","consent_pd":true}' "honeypot hp → фейковый успех"
check 200 POST /php/lead.php '{"phone":"+79991234567","company_extra":"bot","consent_pd":true}' "honeypot company_extra → фейковый успех"
check 400 POST /php/lead.php '{"phone":"123","consent_pd":true}' "кривой телефон → 400"
check 400 POST /php/lead.php '{"phone":"+79991234567","consent_pd":false}' "без согласия → 400"
check 405 GET  /php/lead.php "" "GET к lead.php → 405"

echo "── Удалённые легаси-эндпоинты"
for p in /php/mail.php /php/get-chat.php /php/likeonload.php /php/likeandsubscribe.php; do
  code=$(curl -s -o /dev/null -w '%{http_code}' "$BASE$p" --max-time 15)
  if [ "$code" = "404" ] || [ "$code" = "410" ]; then
    printf '  ✅ %-52s %s\n' "$p недоступен" "$code"; PASS=$((PASS+1))
  else
    printf '  ❌ %-52s ожидали 404/410, получили %s\n' "$p" "$code"; FAIL=$((FAIL+1))
  fi
done

echo "── Контент-инварианты"
contains / 'kaznaexpert.ru/#organization' "главная: entity-граф"
contains /baza-znaniy/ 'рубриках' "хаб: рубрикация"
contains /faq/ 'FAQPage' "faq: schema"
contains /baza-znaniy/chto-takoe-kaznacheyskoe-soprovozhdenie/ 'artFb' "статья: виджет фидбэка"
contains /baza-znaniy/chto-takoe-kaznacheyskoe-soprovozhdenie/ '"citation"' "статья: citation"

echo ""
if [ "$FAIL" -eq 0 ]; then
  echo "════ ✅ SMOKE OK: $PASS проверок ════"
else
  echo "════ ❌ SMOKE FAIL: $FAIL из $((PASS+FAIL)) ════"
  exit 1
fi
