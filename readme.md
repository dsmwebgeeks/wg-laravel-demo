# Web Geeks Laravel Demo

We're going to make a meal planning app.

## Setup

- Clone the repository to your local machine
- Create a MySQL database for this project
- Copy `.env.example` to `.env` and fill in the MySQL database details (you can ignore the Redis stuff)
- Install [Composer](https://getcomposer.org/) and run `composer install`
- Run `php artisan migrate`
- Run `php artisan key:generate`
- Either run Apache in the working directory, or run `php -S localhost:8000 server.php` and visit http://localhost:8000

## Cloud9 Setup Instructions

- Clone from Web Geeks repo or an existing workspace
- Follow the instructions above, using your __C9 username__ as the database user, __`c9`__ as the database, and `''` as the password.
- Click "Run Project" to start the Apache server
- Click "Share" in the top right, and click the link next to __Application:__

# MVP

The user should be able to:

- Create meals and assign them to dates

## Other Things To Try

The user should be able to:

- "Copy" existing meals to dates
- Pull previously-used foods or recipes into a new meal
- Share access to meals with a team member/family member
- Pull images/data about common meals from an API to autocomplete things or provide other context
