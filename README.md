# KPSIDESA (Sistem Informasi Desa)

Aplikasi website administrasi desa berbasis **Laravel 11** untuk publikasi informasi desa dan pengelolaan data internal (penduduk, surat, berita, agenda, galeri, dan produk/potensi desa).

## Fitur Utama

- Halaman publik desa: profil, berita, agenda, galeri, potensi desa, e-learning, katalog produk.
- Autentikasi pengguna (login/register user).
- Manajemen data admin: penduduk, aparatur, berita, agenda, galeri, produk, dan user.
- Pengelolaan surat: SKTM, Surat Keterangan Usaha, Surat Keterangan Domisili.
- Cetak surat (PDF) menggunakan `barryvdh/laravel-dompdf`.
- Import/export data penduduk (Excel/PDF).

## Teknologi

- Backend: PHP 8.2+, Laravel 11
- Frontend build: Vite, Bootstrap, Vue (sebagian komponen)
- Database: MySQL
- Template admin: AdminLTE

## Panduan Instalasi

### 1. Prasyarat

- PHP >= 8.2
- Composer
- Node.js + npm
- MySQL/MariaDB

### 2. Install dependency

```bash
composer install
npm install
```

### 3. Siapkan file environment

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

Lalu ubah konfigurasi database di `.env`:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=db_sidesa
DB_USERNAME=root
DB_PASSWORD=
```

### 4. Siapkan database

Pilih salah satu:

1. Import dump SQL yang sudah tersedia (`db_sidesa` atau `db_sidesa (6).sql`) ke MySQL.
2. Atau jalankan migrasi fresh:

```bash
php artisan migrate --seed
```

### 5. Link storage dan jalankan aplikasi

```bash
php artisan storage:link
php artisan serve
npm run dev
```

Akses website di `http://127.0.0.1:8000`.

## Fundamental Cara Website Bekerja

1. Request masuk melalui `routes/web.php`.
2. Halaman publik dilayani oleh `TampilanuserController` (berita, agenda, aparatur, galeri, potensi desa, produk).
3. Autentikasi menggunakan Laravel Auth (`Auth::routes` + register user khusus di `/register/user`).
4. Otorisasi role dikontrol middleware:
   - `admin`: hanya `users.level = admin`.
   - `checkuser`: akses untuk `admin`, `karangtaruna`, dan `user`.
5. Setelah login, pengguna masuk ke dashboard sesuai akses route.
6. Modul admin melakukan CRUD data inti desa (penduduk, berita, agenda, galeri, aparatur, surat, produk).
7. Modul surat menerima data pengajuan, lalu admin dapat validasi dan cetak dokumen.
8. Asset frontend dikompilasi oleh Vite (`npm run dev` / `npm run build`).

## Struktur Penting Project

- `routes/web.php`: definisi seluruh endpoint publik dan admin.
- `app/Http/Controllers/`: logika tiap modul.
- `app/Models/`: representasi tabel database.
- `resources/views/`: Blade template frontend dan admin.
- `database/migrations/`: skema tabel.

## Catatan

- Untuk memastikan route homepage sudah benar, jalankan `php artisan route:list` dan pastikan `/` mengarah ke `TampilanuserController@index`.
