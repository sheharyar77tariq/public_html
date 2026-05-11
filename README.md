# Local Setup Guide

This project is a Laravel app.

- Project root: `public_html`
- Laravel folder: `core`
- Database file: `install/database.sql`

## Personal Local Credentials

Use these credentials for your own local DVD copy:

- MySQL host: `127.0.0.1`
- MySQL port: `3306`
- MySQL database: `lottery_local`
- MySQL username: `root`
- MySQL password: `Qwerty26`

Admin panel login:

- URL: `http://127.0.0.1:8080/admin`
- Username: `admin`
- Password: `admin`

## 1) Install Requirements

Make sure these are installed:

- PHP 8+
- Composer
- Node.js + npm
- MySQL (or MariaDB)

## 2) Install Project Dependencies

Run in terminal:

```bash
cd core
composer install
npm install
```

## 3) Setup Database

1. Create a database (example: `lottery_local`)
2. Import `install/database.sql` into that database

## 4) Update `.env`

Edit `core/.env`:

```env
APP_ENV=local
APP_DEBUG=true
APP_URL=http://127.0.0.1:8080

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=lottery_local
DB_USERNAME=root
DB_PASSWORD=Qwerty26
```

If app key is missing:

```bash
php artisan key:generate
```

## 5) Clear Cache

Run inside `core`:

```bash
php artisan config:clear
php artisan cache:clear
```

## 6) Run Project

From `public_html` root:

```bash
php -S 127.0.0.1:8080
```

Open:

- http://127.0.0.1:8080

## Optional: Use Laravel Server

From `core`:

```bash
php artisan serve --host=127.0.0.1 --port=8000
```

Open:

- http://127.0.0.1:8000

## Troubleshooting

If you get `SQLSTATE[HY000] [2002]`:

- Start MySQL service
- Check DB credentials in `core/.env`
- Make sure `install/database.sql` was imported
