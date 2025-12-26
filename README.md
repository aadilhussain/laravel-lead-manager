# Laravel Lead Manager

A simple Lead Management system built with Laravel.  
This project demonstrates authentication, CRUD operations, user-based authorization, and clean UI using Tailwind CSS.

---

## Features

- User authentication (login, register)
- Lead CRUD (Create, Read, Update, Delete)
- Leads scoped per user
- Clean dashboard UI
- Status management (New, Qualified, etc.)
- Secure routes with middleware

---

## Tech Stack

- Laravel 10+
- PHP 8+
- MySQL
- Tailwind CSS
- Docker (setup included)

---

## Screenshots

> Leads Listing  
![Leads](screenshots/leads.png)

---

## Local Setup (Without Docker)

```bash
git clone https://github.com/YOUR_USERNAME/laravel-lead-manager.git
cd laravel-lead-manager
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate
php artisan serve