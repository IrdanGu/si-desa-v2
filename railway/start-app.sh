#!/bin/sh
set -eu

case "${APP_URL:-}" in
  ""|http://|https://)
    export APP_URL="http://localhost"
    ;;
esac

if [ -z "${APP_KEY:-}" ] || [ "${APP_KEY}" = "base64:replace-with-php-artisan-key-generate-show" ]; then
  echo "APP_KEY is missing or still set to the placeholder value." >&2
  exit 1
fi

exec php artisan serve --host=0.0.0.0 --port="${PORT:-8080}"
