# Leadership Quiz

## Deskripsi
Aplikasi **Leadership Quiz** dengan **Laravel 11** dan **PostgreSQL** untuk menyimpan hasil kuis.

## Persyaratan
- PHP >= 8.2
- Composer
- PostgreSQL
- Node.js dan npm

## Instalasi

```bash
# 1. Clone repository
git clone https://github.com/rzkiypratama/leadership-quiz.git
cd leadership-quiz

# 2. Install dependencies
composer install
npm install && npm run build

# 3. Setup .env
cp .env.example .env
# Edit .env dan sesuaikan DB_CONNECTION, DB_HOST, DB_DATABASE, DB_USERNAME, DB_PASSWORD

# 4. Generate app key
php artisan key:generate

# 5. Migrasi database
php artisan migrate

# 6. Jalankan server
php artisan serve
