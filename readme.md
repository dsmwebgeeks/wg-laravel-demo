# Web Geeks Laravel Demo

We're going to make a meal planning app.

## Setup

You can set up this project locally or use Cloud9 (see instructions below).

- Clone the repository to your local machine
- Create a MySQL database for this project
- Copy `.env.example` to `.env` and fill in the MySQL database details (you can ignore the Redis stuff)
- Install [Composer](https://getcomposer.org/) and run `composer install`
- Run `php artisan migrate`
- Run `php artisan key:generate`
- Either run Apache in the `./public` directory, or run `php -S localhost:8000 server.php` and visit http://localhost:8000

## Cloud9 Setup Instructions

[Cloud9](http://c9.io) is an IDE in the cloud which reduces setup time.

- Visit https://ide.c9.io/jplhomer/wg-laravel-demo and sign in/create an account

__OR__

- Sign into [C9](http://c9.io) and create a new workspace by cloning from this Web Geeks Github repository
- Follow the instructions above, using your __C9 username__ as the database user, __`c9`__ as the database, and `''` as the password.
- In the C9 terminal, type `sudo nano /etc/apache2/sites-enabled/001-cloud9.conf` and change:
 ```
 /home/ubuntu/workspace
 ```
 to
 ```
 /home/ubuntu/workspace/public
 ```
 Hit `Ctrl+X` and then `Y` to save your changes.
- Click "Run Project" to start the Apache server
- Click "Share" in the top right, and click the link next to __Application:__ to see your project running in a browser

# MVP

The user should be able to:

- Create meals and assign them to dates

## Other Things To Try

The user should be able to:

- "Copy" existing meals to dates
- Pull previously-used foods or recipes into a new meal
- Share access to meals with a team member/family member
- Pull images/data about common meals from an API to autocomplete things or provide other context
