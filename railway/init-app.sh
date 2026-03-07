#!/bin/sh
set -eu

case "${APP_URL:-}" in
  ""|http://|https://)
    export APP_URL="http://localhost"
    ;;
esac

php artisan optimize:clear
php artisan migrate --force
