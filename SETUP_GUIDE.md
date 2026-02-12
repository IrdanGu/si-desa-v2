# KPSIDESA Setup Guide

Panduan ini melengkapi `README.md` dengan langkah setup lokal yang lebih operasional.

## 1. Kebutuhan Sistem

- PHP >= 8.2
- Composer
- Node.js + npm
- MySQL/MariaDB

## 2. Install Dependency

```bash
composer install
npm install
```

## 3. Konfigurasi Environment

Linux/macOS:

```bash
cp .env.example .env
php artisan key:generate
```

PowerShell:

```powershell
Copy-Item .env.example .env
php artisan key:generate
```

Edit `.env`:

```env
APP_NAME=KPSIDESA
APP_ENV=local
APP_DEBUG=true
APP_URL=http://127.0.0.1:8000

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=db_sidesa
DB_USERNAME=root
DB_PASSWORD=
```

## 4. Setup Database

Pilih salah satu pendekatan:

1. Import dump SQL yang tersedia (`db_sidesa` atau `db_sidesa (6).sql`) ke database MySQL.
2. Jalankan migrasi:

```bash
php artisan migrate --seed
```

Catatan: import dump biasanya lebih aman untuk mendapatkan data awal yang sesuai kondisi aplikasi saat ini.

## 5. Jalankan Aplikasi

Terminal 1 (backend):

```bash
php artisan storage:link
php artisan serve
```

Terminal 2 (frontend asset):

```bash
npm run dev
```

Buka: `http://127.0.0.1:8000`

## 6. Fundamental Cara Kerja Website

### 6.1 Alur request utama

1. Semua request web masuk lewat `routes/web.php`.
2. Halaman publik diproses oleh `TampilanuserController` (homepage, berita, agenda, galeri, potensi desa, produk).
3. Login memakai Laravel Auth (`Auth::routes(['register' => false])`) plus register user di `/register/user`.
4. Route admin diproteksi middleware `auth` + `admin`.
5. Route internal lain diproteksi `auth` + `checkuser` (level `admin`, `karangtaruna`, `user`).

### 6.2 Role dan middleware

Middleware role terdaftar di `app/Http/Kernel.php`:

- `admin` -> `App\Http\Middleware\Admin`
- `checkuser` -> `App\Http\Middleware\checkuser`
- `karangtaruna` -> `App\Http\Middleware\Karangtaruna`

Prinsipnya, field `users.level` dipakai sebagai kontrol akses.

### 6.3 Modul inti

- Publik: profil desa, berita, agenda, galeri, e-learning, katalog produk.
- Admin: CRUD penduduk, aparatur, berita, agenda, galeri, potensi desa, user, produk.
- Surat: pengajuan dari sisi user lalu diproses admin, termasuk cetak dokumen.

### 6.4 Rendering dan asset

- View server-side memakai Blade (`resources/views`).
- Asset frontend dibangun via Vite (`npm run dev` untuk development, `npm run build` untuk production).

## 7. Route Penting

Publik:

- `/` -> homepage
- `/berita/{slug}` -> detail berita
- `/useragenda` -> daftar agenda
- `/galery` -> galeri
- `/produk` -> katalog produk
- `/login` -> login
- `/register/user` -> registrasi user

Admin/internal:

- `/dashboard`
- `/penduduk/index`
- `/berita/index`
- `/agenda/index`
- `/surat/index`
- `/products/index`

Cek route aktual kapan pun dengan:

```bash
php artisan route:list
```

## 8. Konfigurasi Email (Opsional)

Jika fitur email dipakai, atur `.env`:

```env
MAIL_MAILER=smtp
MAIL_HOST=smtp.gmail.com
MAIL_PORT=587
MAIL_USERNAME=your-email@gmail.com
MAIL_PASSWORD=your-app-password
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS=your-email@gmail.com
MAIL_FROM_NAME="${APP_NAME}"
```

## 9. Troubleshooting Cepat

1. Error 500:
- Jalankan `php artisan key:generate`
- Cek `.env` dan `storage/logs/laravel.log`

2. Database gagal konek:
- Pastikan service MySQL aktif
- Verifikasi `DB_*` di `.env`

3. Class/autoload error:
- Jalankan `composer dump-autoload`

4. Asset tidak muncul:
- Pastikan `npm run dev` berjalan
- Atau build production: `npm run build`

5. Cache config lama:
- Jalankan:

```bash
php artisan optimize:clear
```

## 10. Referensi File Penting

- `routes/web.php`
- `app/Http/Kernel.php`
- `app/Http/Controllers/`
- `app/Models/`
- `resources/views/`
- `database/migrations/`
