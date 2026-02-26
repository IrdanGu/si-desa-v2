# Panduan Pengembangan Fitur E-Learning

> Dokumentasi ini ditujukan untuk developer yang ingin menambahkan atau mengembangkan fitur e-learning dalam codebase KPSIDESA.

---

## 📋 Daftar Isi

1. [Gambaran Umum](#-gambaran-umum)
2. [Struktur E-Learning yang Ada](#-struktur-e-learning-yang-ada)
3. [Pola Kode yang Digunakan](#-pola-kode-yang-digunakan)
4. [Cara Menambahkan Modul E-Learning Baru](#-cara-menambahkan-modul-e-learning-baru)
5. [Skenario Pengembangan](#-skenario-pengembangan)
6. [Referensi Cepat](#-referensi-cepat)

---

## 🎯 Gambaran Umum

### Apa itu E-Learning di KPSIDESA?

E-Learning adalah fitur yang menyediakan konten edukatif untuk masyarakat desa berupa:
- **Workshop/Modul pembelajaran**: Materi pembelajaran statis (PHBS, Pengelolaan Sampah, dll)
- **Quiz/Evaluasi**: Tes pengetahuan interaktif di akhir materi

### Teknologi yang Digunakan

| Komponen | Teknologi |
|----------|-----------|
| Backend | Laravel 11 (PHP 8.2+) |
| Frontend | Blade Template + Bootstrap |
| Database | MySQL |
| Template Frontend | Constra Theme |
| Template Admin | AdminLTE 3 |

---

## 🗂️ Struktur E-Learning yang Ada

### File yang Terkait E-Learning

```
app/
├── Http/
│   └── Controllers/
│       └── ELearningController.php      ← Controller utama e-learning

resources/
└── views/
    ├── frontend/
    │   ├── e-learning.blade.php         ← Halaman landing e-learning
    │   └── elearning/                   ← Folder konten materi
    │       ├── hidup-sehat.blade.php    ← Materi PHBS
    │       ├── pengolahan-sampah.blade.php
    │       └── manajemen-keuangan.blade.php

routes/
└── web.php                              ← Definisi route e-learning
```

### Route yang Ada

```php
// routes/web.php (lines 45-48)
Route::get('/e-learning', [App\Http\Controllers\ELearningController::class, 'index'])->name('elearning.index');
Route::get('/e-learning/hidup-sehat', [App\Http\Controllers\ELearningController::class, 'hidupSehat'])->name('elearning.hidup-sehat');
Route::get('/e-learning/pengolahan-sampah', [App\Http\Controllers\ELearningController::class, 'pengolahanSampah'])->name('elearning.pengolahan-sampah');
Route::get('/e-learning/manajemen-keuangan', [App\Http\Controllers\ELearningController::class, 'manajemenKeuangan'])->name('elearning.manajemen-keuangan');
```

---

## 📐 Pola Kode yang Digunakan

### 1. Controller Pattern

```php
<?php

namespace App\Http\Controllers;

class ELearningController extends Controller
{
    // Method sederhana yang hanya mengembalikan view
    public function index()
    {
        return view('frontend.e-learning', [
            'title' => 'E-Learning',
        ]);
    }

    // Method untuk halaman materi spesifik
    public function hidupSehat()
    {
        return view('frontend.elearning.hidup-sehat', [
            'title' => 'PHBS - Perilaku Hidup Bersih dan Sehat',
        ]);
    }
}
```

### 2. View Pattern (Blade Template)

```blade
@extends('constra_template.master')

@section('title', 'Judul Halaman - Desa Mancagar')

@section('content')
    <section id="main-container" class="main-container">
        <div class="container">
            <!-- Header Section -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="article-header" style="background: linear-gradient(...); ...">
                        <h2 class="title">Judul Materi</h2>
                    </div>
                </div>
            </div>

            <!-- Navigation -->
            <div class="row">
                <div class="col-lg-12">
                    <a href="{{ route('elearning.index') }}" class="btn btn-primary">
                        <i class="fa fa-chevron-left"></i> Kembali
                    </a>
                </div>
            </div>

            <!-- Content -->
            <div class="row">
                <div class="col-md-6">...</div>
                <div class="col-md-6">...</div>
            </div>
        </div>
    </section>
@endsection
```

### 3. Asset Pattern

```blade
<!-- Gambar dari folder public/constra/images/ -->
<img src="{{ asset('constra/images/icon/healthcare.png') }}" alt="Icon">

<!-- Gambar konten -->
<img src="{{ asset('constra/images/konten/nama-gambar.png') }}" alt="Konten">
```

### 4. Icon yang Tersedia

Lokasi: `public/constra/images/icon/`

| Icon | File | Kegunaan |
|------|------|----------|
| 🎓 | `graduation-cap.png` | Header e-learning |
| 📚 | `book.png` | Banner selamat datang |
| 🏥 | `healthcare.png` | Materi kesehatan (PHBS) |
| ♻️ | `recycle-sign.png` | Materi pengolahan sampah |
| 💰 | `money.png` | Materi keuangan |
| ⏰ | `clock.png` | Durasi belajar |

---

## 🚀 Cara Menambahkan Modul E-Learning Baru

### Langkah 1: Tambahkan Method di Controller

File: `app/Http/Controllers/ELearningController.php`

```php
public function namaModulBaru()
{
    return view('frontend.elearning.nama-modul', [
        'title' => 'Judul Modul Baru',
    ]);
}
```

### Langkah 2: Tambahkan Route

File: `routes/web.php`

Tambahkan di bagian e-learning (sekitar line 48):

```php
Route::get('/e-learning/nama-modul-baru', [App\Http\Controllers\ELearningController::class, 'namaModulBaru'])->name('elearning.nama-modul-baru');
```

### Langkah 3: Buat View Baru

File: `resources/views/frontend/elearning/nama-modul.blade.php`

```blade
@extends('constra_template.master')

@section('title', 'Judul Modul - Desa Mancagar')

@section('content')
    <section id="main-container" class="main-container">
        <div class="container">
            <!-- Header -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="article-header" style="background: linear-gradient(135deg, #6fa8dc, #76d7c4); padding: 30px 20px; border-radius: 10px; text-align: center; margin-bottom: 40px; color: #fff;">
                        <img src="{{ asset('constra/images/icon/healthcare.png') }}" alt="Icon" style="width: 60px; margin-bottom: 10px; background-color: #ffb6b9; padding: 10px; border-radius: 10px;">
                        <h2 class="title">Judul Materi</h2>
                    </div>
                </div>
            </div>

            <!-- Back Button -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="article-nav" style="margin-bottom: 30px;">
                        <a href="{{ route('elearning.index') }}" class="btn btn-primary">
                            <i class="fa fa-chevron-left"></i> Kembali ke E-Learning
                        </a>
                    </div>
                </div>
            </div>

            <!-- Konten Materi -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="article-intro" style="background-color: #f8f9fa; border-radius: 10px; padding: 20px; margin-bottom: 30px;">
                        <h3>Pendahuluan</h3>
                        <p>Isi pendahuluan materi di sini...</p>
                    </div>
                </div>
            </div>

            <!-- Footer -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="article-footer text-center" style="margin-top: 30px;">
                        <a href="{{ route('elearning.index') }}" class="btn btn-primary">Kembali ke E-Learning</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
```

### Langkah 4: Tambahkan Card di Halaman Landing

File: `resources/views/frontend/e-learning.blade.php`

Tambahkan card baru di dalam row workshop cards (setelah card ke-3):

```blade
<!-- Workshop Card 4 -->
<div class="col-md-4">
    <div class="workshop-card" style="background-color: #fff; border-radius: 10px; box-shadow: 0 0 15px rgba(0,0,0,0.1); overflow: hidden; margin-bottom: 30px; height: 100%;">
        <div style="padding: 20px;">
            <div style="background-color: #ff9f43; width: 60px; height: 60px; border-radius: 10px; display: flex; justify-content: center; align-items: center; margin-bottom: 15px;">
                <img src="{{ asset('constra/images/icon/nama-icon.png') }}" alt="Icon" style="width: 35px;">
            </div>
            <h3 style="font-size: 20px; margin-bottom: 15px;">Judul Modul Baru</h3>
            <p style="color: #666; margin-bottom: 20px;">Deskripsi singkat modul...</p>
            <div style="display: flex; align-items: center; margin-bottom: 15px;">
                <img src="{{ asset('constra/images/icon/clock.png') }}" alt="Duration" style="width: 20px; margin-right: 10px;">
                <span style="color: #777;">1-2 jam</span>
            </div>
            <a href="{{ route('elearning.nama-modul-baru') }}" class="btn btn-warning" style="background-color: #ff9f43; border: none; padding: 8px 20px; border-radius: 5px; color: #fff;">
                Pelajari Sekarang
            </a>
        </div>
    </div>
</div>
```

### Langkah 5: Verifikasi

1. Jalankan server: `php artisan serve`
2. Buka: `http://127.0.0.1:8000/e-learning`
3. Klik card baru
4. Pastikan halaman modul muncul dengan benar

---

## 📚 Skenario Pengembangan

### Skenario 1: Menambahkan Quiz ke Modul Baru

Copy struktur quiz dari `hidup-sehat.blade.php` (lines 296-533):

```blade
<!-- Quiz Section -->
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">Quiz - Tes Pengetahuan Anda!</h3>
            </div>
            <div class="panel-body">
                <form id="myQuiz">
                    <!-- Question 1 -->
                    <div class="quiz-question">
                        <h4>1. Pertanyaan pertama?</h4>
                        <div class="radio"><label><input type="radio" name="question1" value="a"> a) Jawaban A</label></div>
                        <div class="radio"><label><input type="radio" name="question1" value="b"> b) Jawaban B</label></div>
                    </div>
                    
                    <!-- Tambahkan pertanyaan lainnya... -->
                    
                    <div class="text-center" style="margin-top: 30px;">
                        <button type="button" id="submitQuiz" class="btn btn-success">Periksa Jawaban</button>
                    </div>
                </form>
                <div id="quizResult" class="alert" style="margin-top: 20px; display: none;"></div>
            </div>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const correctAnswers = {
        question1: "b",
        // ... tambahkan jawaban benar lainnya
    };
    
    document.getElementById('submitQuiz').addEventListener('click', function() {
        let score = 0;
        let total = Object.keys(correctAnswers).length;
        
        for (let question in correctAnswers) {
            const selected = document.querySelector(`input[name=${question}]:checked`);
            if (!selected) { alert('Jawab semua pertanyaan!'); return; }
            if (selected.value === correctAnswers[question]) score++;
        }
        
        const percentage = (score / total) * 100;
        // Tampilkan hasil...
    });
});
</script>
```

### Skenario 2: Membuat Materi dengan Database (Dynamic Content)

Jika ingin konten yang bisa diedit via admin panel:

#### Step 1: Buat Migration

```bash
php artisan make:migration create_elearning_modules_table
```

```php
// database/migrations/xxxx_create_elearning_modules_table.php
Schema::create('elearning_modules', function (Blueprint $table) {
    $table->bigIncrements('id');
    $table->string('judul');
    $table->string('slug')->unique();
    $table->text('deskripsi');
    $table->longText('konten');
    $table->string('icon')->nullable();
    $table->string('warna_tema')->default('#6fa8dc');
    $table->enum('status', ['draft', 'published'])->default('draft');
    $table->timestamps();
});
```

#### Step 2: Buat Model

```bash
php artisan make:model ElearningModule
```

```php
<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ElearningModule extends Model
{
    protected $table = 'elearning_modules';
    protected $guarded = [];
}
```

#### Step 3: Update Controller

```php
use App\Models\ElearningModule;

class ELearningController extends Controller
{
    public function index()
    {
        $modules = ElearningModule::where('status', 'published')->get();
        return view('frontend.e-learning', compact('modules'));
    }
    
    public function show($slug)
    {
        $module = ElearningModule::where('slug', $slug)->firstOrFail();
        return view('frontend.elearning.show', compact('module'));
    }
}
```

#### Step 4: Buat Route Dynamic

```php
Route::get('/e-learning/{slug}', [ELearningController::class, 'show'])->name('elearning.show');
```

### Skenario 3: Menambahkan Video ke Materi

```blade
<!-- Video Section -->
<div class="row">
    <div class="col-lg-12">
        <div class="video-container" style="position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden; border-radius: 10px;">
            <!-- YouTube Embed -->
            <iframe 
                src="https://www.youtube.com/embed/VIDEO_ID" 
                style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; border: none;"
                allowfullscreen>
            </iframe>
        </div>
    </div>
</div>

<!-- Atau Video Lokal -->
<video controls style="width: 100%; border-radius: 10px;">
    <source src="{{ asset('videos/nama-video.mp4') }}" type="video/mp4">
    Browser Anda tidak mendukung video.
</video>
```

### Skenario 4: Tracking Progress Belajar

Tambahkan tabel untuk tracking:

```php
Schema::create('elearning_progress', function (Blueprint $table) {
    $table->bigIncrements('id');
    $table->foreignId('user_id')->constrained()->onDelete('cascade');
    $table->foreignId('module_id')->constrained('elearning_modules')->onDelete('cascade');
    $table->enum('status', ['started', 'completed'])->default('started');
    $table->integer('quiz_score')->nullable();
    $table->timestamp('completed_at')->nullable();
    $table->timestamps();
});
```

---

## 📖 Referensi Cepat

### Color Palette yang Digunakan

| Warna | Hex Code | Penggunaan |
|-------|----------|------------|
| Soft Blue | `#6fa8dc` | Header gradient |
| Soft Green | `#76d7c4` | Header gradient |
| Pink | `#ffb6b9` | Card icon background (PHBS) |
| Teal | `#61c0bf` | Card icon background (Sampah) |
| Yellow | `#ffd66b` | Card icon background (Keuangan) |
| Orange | `#ff9f43` | Card icon background (opsional) |
| Light Gray | `#f8f9fa` | Section background |

### Struktur Folder Assets

```
public/
├── constra/
│   ├── images/
│   │   ├── icon/              ← Icon e-learning
│   │   └── konten/            ← Gambar konten materi
│   └── videos/                ← Video materi (jika ada)
└── storage/                   ← Upload file user
```

### Checklist Menambah Modul Baru

- [ ] Tambah method di `ELearningController.php`
- [ ] Tambah route di `routes/web.php`
- [ ] Buat view di `resources/views/frontend/elearning/`
- [ ] Tambah card di `e-learning.blade.php`
- [ ] Siapkan icon (jika perlu icon baru)
- [ ] Siapkan gambar konten (jika diperlukan)
- [ ] Test route: `php artisan route:list | findstr e-learning`
- [ ] Verifikasi tampilan di browser

### Command yang Berguna

```bash
# Lihat semua route
php artisan route:list

# Filter route e-learning
php artisan route:list | findstr e-learning

# Clear cache view
php artisan view:clear

# Clear cache route
php artisan route:clear

# Jalankan server
php artisan serve
```

### Troubleshooting

| Masalah | Solusi |
|---------|--------|
| Route tidak ditemukan (404) | Cek `php artisan route:list`, pastikan nama route benar |
| View tidak muncul | Cek nama file view, pastikan ada di folder yang benar |
| Asset (gambar) tidak load | Cek path di `asset()`, pastikan file ada di `public/constra/images/` |
| Style tidak sesuai | Cek apakah extend `constra_template.master` dengan benar |
| Cache lama | Jalankan `php artisan view:clear` dan `php artisan cache:clear` |

---

## 💡 Tips & Best Practices

1. **Gunakan CSS Inline untuk Style Spesifik**: Proyek ini menggunakan style inline untuk kemudahan override, tapi pertimbangkan menambahkan class CSS kustom jika akan digunakan berulang.

2. **Konsisten dengan Icon**: Gunakan icon yang sudah tersedia di `public/constra/images/icon/`. Jika perlu icon baru, tambahkan dengan ukuran 60x60px (untuk header) atau 35x35px (untuk card).

3. **Gambar Konten**: Simpan gambar konten di `public/constra/images/konten/` dengan format PNG atau JPG, ukuran optimal 800px lebar.

4. **Quiz**: Copy struktur quiz dari file yang sudah ada (`hidup-sehat.blade.php`), lalu modifikasi pertanyaan dan jawabannya.

5. **Responsif**: Gunakan class Bootstrap seperti `col-md-6`, `col-lg-12` untuk memastikan tampilan bagus di mobile.

6. **Testing**: Selalu test di berbagai ukuran layar (desktop, tablet, mobile).

---

## 📞 Butuh Bantuan?

Jika ada pertanyaan atau masalah:
1. Cek file-file yang sudah ada sebagai referensi
2. Periksa log error di `storage/logs/laravel.log`
3. Gunakan `dd()` atau `dump()` untuk debugging
4. Pastikan mengikuti pola yang sudah ada di codebase

---

**Selamat ngoding! 🚀**
