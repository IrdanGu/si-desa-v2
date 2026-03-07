# Deploying KPSIDESA to Railway

This guide is specific to this repository.

## Current deploy findings

- The app is Laravel 11 on PHP 8.2 with Vite assets.
- `bootstrap/app.php` already exposes a healthy HTTP endpoint at `/up`, which is a good Railway healthcheck path.
- The app uses `SESSION_DRIVER=database`, `CACHE_STORE=database`, and `QUEUE_CONNECTION=database`.
- `maatwebsite/excel` pulls in `phpoffice/phpspreadsheet`, so the Railway build needs PHP `gd` and `zip` extensions available before `composer install`.
- This repository was missing the `sessions` migration. That is now added in `database/migrations/2026_03_07_000001_create_sessions_table.php`.
- The app stores uploads in `public/storage` because `config/filesystems.php` points the `public` disk there.
- `public/storage` is gitignored, so a GitHub deploy will not include your local media files.
- `php artisan route:cache` currently fails because there are duplicate named routes in `routes/web.php`, so Railway should use the custom build script in `railway/build.sh` instead of the default Laravel route cache optimization.

## Recommended Railway layout

Start with 2 Railway resources:

1. `app` service for the Laravel web app.
2. `MySQL` service for the database.

Add these later only if needed:

1. `worker` service for queued jobs.
2. `cron` service for Laravel scheduler.
3. A Volume mounted to `/app/public/storage` for persistent uploaded files.

The volume mount path above is inferred from Railway's `/app` app root and this repository's `public/storage` write path.

## Minimum app service settings

Use Railway's normal Laravel detection for the web service.

- Build command: `chmod +x ./railway/build.sh && sh ./railway/build.sh`
- Pre-Deploy Command: `chmod +x ./railway/init-app.sh && sh ./railway/init-app.sh`
- Start command: leave empty so Railway can run the Laravel app through its PHP runtime
- Healthcheck path: `/up`

Railpack will still handle install detection for Composer and npm. The custom build command is only there to avoid the default Laravel `route:cache` step, which currently breaks on this repository.

## Environment variables

Copy `.env.railway.example` into Railway's Raw Editor and adjust values as needed.

Important notes:

- `APP_KEY` must come from `php artisan key:generate --show`
- `APP_URL` should become `https://${{RAILWAY_PUBLIC_DOMAIN}}` after you generate a Railway public domain
- If your database service is not literally named `MySQL`, change the variable references accordingly
- `RAILPACK_PHP_EXTENSIONS=gd,zip` is included to make sure Railpack installs the spreadsheet-related PHP extensions before Composer runs
- `RAILPACK_SKIP_MIGRATIONS=true` is intentional here so Railway startup does not also run seeding in production

## Database setup

Create a Railway MySQL service and map these variables into the app service:

- `DB_HOST=${{MySQL.MYSQLHOST}}`
- `DB_PORT=${{MySQL.MYSQLPORT}}`
- `DB_DATABASE=${{MySQL.MYSQLDATABASE}}`
- `DB_USERNAME=${{MySQL.MYSQLUSER}}`
- `DB_PASSWORD=${{MySQL.MYSQLPASSWORD}}`

Because this app uses database-backed sessions, cache, and queues, the database must be available before the app deployment completes.

## Storage setup

This repo depends heavily on `public/storage/...` URLs for:

- logos and site chrome
- article images
- gallery images
- product images
- uploaded request documents

Without persistent storage, these files will disappear on redeploy or restart. Railway documents that service filesystems are ephemeral and that persistent data should go into a Volume.

For this app, attach a Volume to the app service and mount it at:

`/app/public/storage`

Important Railway behavior:

- Volumes are mounted only at runtime, not during build
- Volumes are not available during pre-deploy commands
- Volumes are not mounted as overlays

That means existing local files from `public/storage` must be moved into the mounted volume separately. If you want, we can do that as a second step after the first successful deployment.

## Optional worker service

Only add this if you really use background jobs.

- Source repo: same repository
- Build command: `chmod +x ./railway/build.sh && sh ./railway/build.sh`
- Start command: `chmod +x ./railway/run-worker.sh && sh ./railway/run-worker.sh`
- Public domain: none

## Optional cron service

Only add this if you use scheduled tasks.

- Source repo: same repository
- Build command: `chmod +x ./railway/build.sh && sh ./railway/build.sh`
- Start command: `chmod +x ./railway/run-cron.sh && sh ./railway/run-cron.sh`
- Public domain: none

## First deployment checklist

1. Push this repository to GitHub.
2. In Railway, create a new project.
3. Add a `MySQL` service.
4. Add the app service from your GitHub repo.
5. Paste `.env.railway.example` into the app service variables and set the real `APP_KEY`.
6. Set the app service Build, Pre-Deploy, and Healthcheck values listed above.
7. Deploy the app service.
8. Generate a public domain for the app service.
9. Set `APP_URL=https://${{RAILWAY_PUBLIC_DOMAIN}}`.
10. Redeploy the app service.
11. Attach a Volume to `/app/public/storage`.
12. Move existing local `public/storage` files into that volume if you need current media in production.

## How we can work together

I can do these parts in the codebase:

- add or adjust Railway scripts
- prepare env templates
- fix deployment blockers from build logs
- review runtime errors from Railway logs
- help design the storage migration plan for `public/storage`
- prepare worker/cron setup if you decide to enable them

You need to do these Railway-account actions:

- create the Railway project
- connect the GitHub repository
- add the MySQL service
- paste secrets and environment variables
- generate the public domain
- attach the persistent volume

Best working loop:

1. You do one deploy attempt on Railway.
2. You send me the build log or the failing runtime log.
3. I patch the repo or tell you the exact setting to change.
4. You redeploy.

## Notes for this repository

- `routes/web.php` contains a lot of upload-driven content. Production without persistent file storage will look incomplete.
- The app currently has no `sessions` table migration in the older history. That has been fixed here for Railway and any other production deployment.
- `routes/web.php` also contains duplicate named routes and duplicate `/` route definitions. The custom Railway build script works around the route-cache failure for now, but cleaning up route names is still recommended.
