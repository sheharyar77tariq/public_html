# Local Setup Guide

This project is a Laravel app with the web entrypoint at the repository root.

- Project root: `public_html`
- Laravel source folder: `core`
- Database SQL file: `install/database.sql`

## Requirements

Install these before you begin:

- PHP 8+
- Composer
- Node.js + npm
- MySQL or MariaDB
- Optional: XAMPP for Windows users

## 1) Install Dependencies

From the `core` folder:

```bash
cd core
composer install
npm install
```

If `composer install` fails, make sure Composer is installed and available in your PATH.

## 2) Create the Database

Create a database named `lottery_local`.

Import `install/database.sql` into the database.

If you use phpMyAdmin, import the file there.

If you use the command line:

```bash
mysql -u root -p lottery_local < "../install/database.sql"
```

If your local MySQL root user has no password, use:

```bash
mysql -u root lottery_local < "../install/database.sql"
```

## 3) Configure `.env`

Open `core/.env` and set:

```env
APP_ENV=local
APP_DEBUG=true
APP_URL=http://127.0.0.1:8080

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=lottery_local
DB_USERNAME=root
DB_PASSWORD=
```

> If your MySQL root user has a password, set `DB_PASSWORD` to that password.

## 4) Generate the Application Key

From `core`:

```bash
php artisan key:generate
```

## 5) Clear Laravel Cache

From `core`:

```bash
php artisan config:clear
php artisan cache:clear
```

## 6) Run the Project

From the `public_html` root folder:

```bash
php -S 127.0.0.1:8080
```

Open in your browser:

- http://127.0.0.1:8080

## Admin Login

- Admin URL: `http://127.0.0.1:8080/admin`
- Username: `admin`
- Password: `admin`

## Notes

- `public_html/index.php` is the application entrypoint.
- It loads the Laravel app from `core`.
- If you prefer, you can also start Laravel from `core`:

```bash
php artisan serve --host=127.0.0.1 --port=8000
```

## Troubleshooting

### Database access denied

If you see `SQLSTATE[HY000] [1045]`, update `core/.env` with the correct MySQL credentials and then run:

```bash
php artisan config:clear
php artisan cache:clear
```

### Missing dependencies

If `vendor` is missing, run:

```bash
cd core
composer install
```

If `node_modules` is missing, run:

```bash
cd core
npm install
```