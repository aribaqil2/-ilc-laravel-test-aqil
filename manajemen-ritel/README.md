# Sistem Manajemen Ritel

Aplikasi web Laravel untuk mengelola data kategori, item barang, dan pengguna dengan role admin/user.

## Fitur Utama

- Login dan logout
- CRUD kategori
- CRUD item barang
- Daftar pengguna (khusus admin)
- Middleware role untuk pembatasan akses


## Langkah Instalasi

### 1. Clone Repository

```bash
git clone <URL_REPOSITORY>
cd manajemen-ritel
```

### 2. Install Dependensi PHP

```bash
composer install
```

### 3. Install Dependensi Frontend

```bash
npm install
```

### 4. Siapkan File Environment

Salin file `.env.example` menjadi `.env`:

```bash
cp .env.example .env
```

### 5. Konfigurasi Database

Buka file `.env`, lalu atur konfigurasi database sesuai environment Anda:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=manajemen_ritel
DB_USERNAME=root
DB_PASSWORD=
```

### 6. Generate Application Key

```bash
php artisan key:generate
```

### 7. Jalankan Migrasi dan Seeder

```bash
php artisan migrate --seed
```

### 8. Jalankan Aplikasi

Untuk menjalankan backend:

```bash
php artisan serve
```

Untuk menjalankan frontend assets:

```bash
npm run dev
```

## Akses Aplikasi

Setelah server berjalan, buka:

```text
http://localhost:8000
```

## Akun Default

Jika Anda menggunakan seeder, Anda dapat login dengan akun yang tersedia pada data seed.

