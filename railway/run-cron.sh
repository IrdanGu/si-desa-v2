#!/bin/sh
set -eu

case "${APP_URL:-}" in
  ""|http://|https://)
    export APP_URL="http://localhost"
    ;;
esac

trap 'exit 0' TERM INT

while true; do
  php artisan schedule:run --verbose --no-interaction
  sleep 60
done
