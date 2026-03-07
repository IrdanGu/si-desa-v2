#!/bin/sh
set -eu

case "${APP_URL:-}" in
  ""|http://|https://)
    export APP_URL="http://localhost"
    ;;
esac

exec php artisan queue:work --verbose --tries=3 --timeout=90 --sleep=3 --max-time=3600
