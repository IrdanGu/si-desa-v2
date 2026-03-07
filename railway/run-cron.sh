#!/bin/sh
set -eu

trap 'exit 0' TERM INT

while true; do
  php artisan schedule:run --verbose --no-interaction
  sleep 60
done
