# Laravel POS — Database and Eloquent Activity

This project is the database-backed continuation of the earlier static-array POS exercise. It uses Laravel migrations and seeders plus Eloquent models to load the customer and user account pages.

## Schema

- `customers`: `id`, `full_name`, `email`, `phone`, timestamps
- `users`: `id`, unique `username`, `full_name`, timestamps

The customer and user pages retrieve rows through `Customer::query()->orderBy('id')->get()` and `User::query()->orderBy('id')->get()`. The Blade views render those Eloquent models with `@foreach`.

## Run locally

Requirements: PHP 8.3+ with PDO SQLite, and Composer.

```sh
composer install
cp .env.example .env
php artisan key:generate
```

Create the SQLite file if needed:

```sh
# macOS / Linux
touch database/database.sqlite

# Windows PowerShell
New-Item -ItemType File -Force database/database.sqlite
```

Migrate, add the sample records, and start Laravel:

```sh
php artisan migrate --seed
php artisan serve
```

Open `http://127.0.0.1:8000`. The customer and user pages are `/customers` and `/users`.

To rebuild the local database and repopulate it from scratch, run `php artisan migrate:fresh --seed`. This deletes existing local database tables and their data.

## GitHub and hosting

Keep this project folder in the same GitHub repository as the other laboratory activities. When hosting this app, use a Laravel-compatible host with PHP 8.3+ and set the document root to this folder's `public` directory. Configure the production database and `APP_KEY` in the host settings, then run migrations and seeders as appropriate.

The project source was prepared in the workspace, but could not be launched here because PHP and Composer are unavailable.
