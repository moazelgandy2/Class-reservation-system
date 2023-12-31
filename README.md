<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About this project 
This project is a simple class reservation system designed to facilitate class enrollments for users. Users can visit the website and reserve class seats, while administrators can access an admin dashboard at <http://127.0.0.1:8000/dash> to view a list of enrolled students.

## Installation
1-Download the project files

```bash
git clone https://github.com/moazelgandy2/Class-reservation-system.git
```
2-Change into the project directory:
```bash
cd Class-reservation-system
```
3-Run Composer to install the project dependencies:
```bash
composer install
```
4-Edit .env file and add your DataBase connectiondetails.

5-Run the following command to apply the database migrations:
```bash
php artisan migrate
```
This command will create or update the database tables according to the defined migrations in the database/migrations directory.

6-To seed the database with initial data, run:
```bash
php artisan db:seed
```
This command will populate the database with initial records.

7-Compile your project's assets for development, use the following command:
```bash
npm install
npm run dev
```
The npm run dev command compiles and bundles your CSS and JavaScript assets for use in your application.

## Usage
```bash
php artisan serve
```
You can now access the project by visiting <http://127.0.0.1:8000> in your web browser, and the admin dashboard is available at <http://127.0.0.1:8000/dash>.
