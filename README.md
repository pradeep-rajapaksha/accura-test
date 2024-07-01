## Requirements

1.  PHP 8.2
2.  Any of MariaDB 10.3+, MySQL 5.7+, PostgreSQL 10.0+, or SQLite (Used SQLite in dev environment)
3.  Node v20+
4.  Composer

## Installation Guide

Please follow the below steps to set up the application carefully.

- Download the source code;
- Open the terminal (command line interface) from the app root or move to the app root.
- Run `composer install` to install the laravel packages.
- Run `npm install` to install the node modules.
- Run `php artisan config:cache` to recache the laravel configs
- Run `php artisan route:cache` to recache the laravel route configs
- Run `php artisan migrate –seed` to generate the DB tables and seed predefined data and fake members for test purposes; run `php artisan migrate:refresh –seed` if you want to re-run the migration.
- Finally, run `php artisan serve` and it will start the server on [http://127.0.0.1:8000] or with a similar port; This also can be accessed normally as `localhost/root-dir-name` –-> [http://localhost/pradeep-rajapaksha]
- Please use admin credentials to login in: 
	Email: `admin@example.com`
	Password: `password`
