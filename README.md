# TPRS: Pascal Reporting System

A Laravel back-office dashboard for a field operations and customer support team. Staff log calls and tasks, manage SIM cards, plate numbers and vouchers, track lost devices and attendance, and see summary charts.

## Modules

- **Calls**: log incoming support calls, tag them by query type, edit and close them.
- **Tasks / jobs**: create, assign and update work items.
- **SIM cards**: register and edit SIM cards, and track inactive ones.
- **Plate numbers and riders**: register motorcycle plate numbers and riders (motari).
- **Vouchers**: generate and list vouchers.
- **Lost devices**: record and review lost devices.
- **Attendance**: staff attendance management.
- **Notifications and messages**: in-app notifications, with Firebase integration.
- **Users**: admin user management.
- **Charts**: dashboard summaries.

## Stack

- PHP 7.2+/8, Laravel 7, MySQL
- kreait/firebase-php
- Laravel UI, Laravel Mix

## Setup

```bash
composer install
cp .env.example .env
php artisan key:generate
# set DB_* and Firebase credentials in .env
php artisan migrate
php artisan serve
```

The admin dashboard is at `/v1/admin/dashboard/home` after signing in at `/signin`.
