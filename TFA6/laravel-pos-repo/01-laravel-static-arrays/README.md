# Laravel POS Foundations

A four-page point-of-sale account directory built with Laravel 13. It demonstrates how routes, controllers, and Blade views work together in an MVC application.

## Pages

- `/` — landing page
- `/about` — short explanation of the MVC flow
- `/customers` — five customer records from a static PHP array in `CustomerController`
- `/users` — five user records from a static PHP array in `UserController`

Both account views use Blade `@foreach` loops. The pages read their list data from controller arrays, as required by the activity. Database migrations and seeders are included as a separate setup example for the submission requirement; they do not replace the static arrays used by these pages.

## Requirements

- PHP 8.3 or newer with Laravel's required PHP extensions
- Composer
- SQLite PDO support for the local database setup

## Run locally

From this project directory:

```sh
composer install
cp .env.example .env
php artisan key:generate
```

Create the SQLite database file if it does not already exist:

```sh
# macOS / Linux
touch database/database.sqlite

# Windows PowerShell
New-Item -ItemType File -Force database/database.sqlite
```

Then migrate, seed, and start the development server:

```sh
php artisan migrate --seed
php artisan serve
```

Open `http://127.0.0.1:8000`. Use `php artisan route:list` to inspect the four page routes and `php artisan about-pos` to see the exercise summary.

## GitHub submission

Create an empty repository on GitHub, then run these commands from this folder and replace the remote URL with your own repository URL:

```sh
git init
git add .
git commit -m "Build Laravel POS foundations"
git branch -M main
git remote add origin <your-repository-url>
git push -u origin main
```

The repository includes the raw application source, a migration, and seeders. Do not commit `.env`, `vendor`, or real credentials.

## Hosting notes

Choose a host that supports PHP 8.3+ and Laravel. Set the web document root to this project's `public` directory, configure a production `APP_KEY` and database credentials in the host's environment settings, then run `composer install --no-dev --optimize-autoloader` and `php artisan migrate --seed` as part of deployment. Add your actual live application URL to your submission after deployment.

This workspace does not have PHP or Composer installed, so the project source could not be launched here. Run the local setup above on a machine with the listed requirements before submitting a hosted URL.
