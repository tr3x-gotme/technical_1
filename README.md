# Tasks for Today Management System

Created by Rex Evangelista for the CodeIgniter laboratory exercise.

## Requirements

- XAMPP with Apache, MySQL, and PHP
- Composer
- CodeIgniter 4

## Setup

1. Put this folder inside `C:\xampp\htdocs`.
2. Start Apache and MySQL in XAMPP.
3. Open phpMyAdmin at `http://localhost/phpmyadmin`.
4. Create/import the database using `database/tasks_for_today.sql`.
5. Copy `.env.example` to `.env`.
6. Open Command Prompt in the project folder and run `composer install`.
7. If Composer reports missing starter files, create a fresh CodeIgniter 4 app with `composer create-project codeigniter4/appstarter temp-app`, then copy this project's `app`, `database`, `public`, `.env.example`, `composer.json`, and `README.md` into that app folder.
8. Open `http://localhost/tasks-for-today/public/`.

The database name is `Technical Summative 1`. If the space causes a problem in a local setup, use `Technical_Summative_1` in both phpMyAdmin and `.env`.

## Pages

- `/` shows tasks for today's date only.
- `/tasks` shows every task ordered by date.
- `/profile` shows the one demo user.
- `/about` identifies the developer.
