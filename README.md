# Laravel Project

This is a Laravel-based challenge web application.

To set up the project,

first clone the repository and navigate into the project directory,

then run `composer install` to install all dependencies.

Copy `.env.example` to `.env` and configure your database credentials,

then generate the application key using `php artisan key:generate`.

After that, run `php artisan migrate:fresh --seed` to create and seed the database.

A test user will be created automatically with the following credentials:
email `test@challenge.test` and password `password`

run `php artisan test` for running the simple test
