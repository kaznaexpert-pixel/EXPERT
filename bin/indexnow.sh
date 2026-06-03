#!/bin/sh
# IndexNow submitter — kaznaexpert.ru
# Уведомляет IndexNow (Яндекс, Bing, Seznam…) об изменённых URL.
# Ключ берётся из файла <key>.txt в корне сайта (единый источник правды).
#
# Использование:
#   bin/indexnow.sh                 — отправить все URL из sitemap.xml
#   bin/indexnow.sh URL [URL...]    — отправить конкретные URL
set -e
HOST="kaznaexpert.ru"
ROOT="$(cd "$(dirname "$0")/.." && pwd)"

KEYFILE=$(ls "$ROOT"/*.txt 2>/dev/null | grep -E '[0-9a-fA-F]{16,}\.txt$' | head -1)
if [ -z "$KEYFILE" ]; then echo "IndexNow: key file (<key>.txt) not found in root"; exit 1; fi
KEY=$(basename "$KEYFILE" .txt)
KEYLOC="https://$HOST/$KEY.txt"

if [ "$#" -gt 0 ]; then
  URLLIST=$(printf '%s\n' "$@")
else
  URLLIST=$(grep -oE 'https://[^<[:space:]]+' "$ROOT/sitemap.xml")
fi

JSON=$(printf '%s\n' "$URLLIST" | sed '/^$/d' | sed 's/.*/"&"/' | paste -sd, -)
if [ -z "$JSON" ]; then echo "IndexNow: no URLs to submit"; exit 0; fi

BODY="{\"host\":\"$HOST\",\"key\":\"$KEY\",\"keyLocation\":\"$KEYLOC\",\"urlList\":[$JSON]}"
echo "IndexNow: submitting -> api.indexnow.org"
curl -s -X POST "https://api.indexnow.org/indexnow" \
  -H "Content-Type: application/json; charset=utf-8" \
  --data "$BODY" -w "\nIndexNow HTTP %{http_code}\n"
