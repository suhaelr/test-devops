# Laravel CRUD Produk + Login

Project Laravel sederhana dengan fitur login dan CRUD (Create, Read, Update, Delete) data produk. Menggunakan **MySQL** (XAMPP).

## Fitur

- Form login dengan session authentication
- CRUD produk (nama, deskripsi, harga, stok)
- Database MySQL terisi data dummy via seeder
- File SQL siap import (`database/laravel_crud.sql`)

## Login Demo

| Email | Password |
|-------|----------|
| admin@example.com | password |

## Cara Menjalankan

### 1. Start XAMPP

Nyalakan **Apache** dan **MySQL** di XAMPP Control Panel.

### 2. Install & setup

```bash
composer install
php artisan key:generate
```

Pastikan `.env` sudah memakai MySQL:

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel_crud
DB_USERNAME=root
DB_PASSWORD=
```

### 3. Buat database & isi data

```bash
php artisan migrate:fresh --seed
```

Atau import lewat phpMyAdmin: `database/laravel_crud.sql`

### 4. Jalankan server

```bash
php artisan serve
```

Buka: http://127.0.0.1:8000

**Via XAMPP Apache:** http://localhost/Test/public

## Struktur Utama

```
app/Http/Controllers/
  AuthController.php      # Login & logout
  ProductController.php   # CRUD produk
app/Models/Product.php
database/seeders/         # Data dummy
database/laravel_crud.sql # Dump MySQL
resources/views/          # Blade templates
routes/web.php
```
