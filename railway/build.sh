#!/bin/sh
set -eu

case "${APP_URL:-}" in
  ""|http://|https://)
    export APP_URL="http://localhost"
    ;;
esac

php artisan config:cache
php artisan event:cache
php artisan view:cache
npm run build
