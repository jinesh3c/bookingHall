## Requirements
- Laravel version used in the project is 5.6.33
- PHP >= 7.1.3
- Composer for dependecy management
- Apache / nginx 
- Supervisor

## BookingHall 

- Make copy of `.env.example` and create `.env` file
- Change the database name , database username and database password in `.env` file
- Run `composer install` command
- Run `key:generate` command
- Run `php artisan migrate` command
- Run `php artisan db:seed` command to seed admin 
- if seeding cause an eror run 
	`composer dump-autoload -o`
	`php artisan config:cache`
