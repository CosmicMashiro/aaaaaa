# IT0049 Laravel POS Activities

This repository groups the POS laboratory exercises in separate, self-contained Laravel projects. Run each project from its own folder.

| Folder | Activity | Data source |
|---|---|---|
| `01-laravel-static-arrays` | Laravel MVC pages | Static PHP arrays in controllers |
| `02-laravel-database-eloquent` | Database and Eloquent | Migrations, seeders, and Eloquent models |

For either project, open its folder and follow its `README.md`. Each app uses Laravel 13 and requires PHP 8.3+.

The second activity uses the requested schema: customers have `full_name`, `email`, and `phone`; users have a unique `username` and `full_name`. Its account controllers query Eloquent models, and its seeders insert five sample records per table.

## GitHub submission

Put the contents of this folder in the chosen GitHub repository. The repository link can be shared for both activities; add later activities as additional numbered folders so each submission stays identifiable.
