#!/bin/sh
set -eu

case "${APP_URL:-}" in
  ""|http://|https://)
    export APP_URL="http://localhost"
    ;;
esac

# Avoid `optimize:clear` here because this app uses `CACHE_STORE=database`.
# On the first deploy the `cache` table does not exist until migrations run.
find bootstrap/cache -maxdepth 1 -type f -name '*.php' -delete
php artisan migrate --force
php artisan config:cache
php artisan event:cache
