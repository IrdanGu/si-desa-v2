#!/bin/sh
set -eu

exec php artisan queue:work --verbose --tries=3 --timeout=90 --sleep=3 --max-time=3600
