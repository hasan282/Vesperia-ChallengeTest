
## Running di Localhost

1. Clone Repository.
2. Jalankan Terminal dan Install Package.
```bash
composer install
```
3. Extract AdminLTE plugin di folder `public/`.
4. Buatlah Database MySQL dengan nama `vesperia_test` atau sesuaikan nama Database pada file `.env.local`.
```bash
DB_DATABASE=vesperia_test
```
5. Rename File `.env.localhost` menjadi `.env`.
6. Generate App Key dengan Terminal.
```bash
php artisan key:generate
```
7. Jalankan Database Migration dan Seeder.
```bash
php artisan migrate

php artisan db:seed AllSeeder
```
8. Jalankan Server Localhost.
```bash
php artisan serve
```
## System Requirements
- PHP 8.2.0 or greater.
- Composer
