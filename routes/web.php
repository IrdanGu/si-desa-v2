<?php

use App\Http\Controllers\AgendaController;
use App\Http\Controllers\AgendaKarangtarunaController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\UserRegisterController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GaleryController;
use App\Http\Controllers\KepaladesaControler;
use App\Http\Controllers\Navbar_Controller;
use App\Http\Controllers\PendudukController;
use App\Http\Controllers\PotensiDesaController;
use App\Http\Controllers\ProductCatalogController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\StrukturDesaController;
use App\Http\Controllers\Surat_KeteranganDomisiliController;
use App\Http\Controllers\Surat_KeteranganUsahaController;
use App\Http\Controllers\SuratController;
use App\Http\Controllers\TampilanuserController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    mail::to('agungrizki640@gmail.com')
        ->send(new \App\Mail\PostMail('Mengirim Email Menggunakan Gmail SMTP Laravel 8', 'Anugrah Sandi'));

    return 'Terkirim';
});

Route::get('/kontak', function () {
    return view('frontend/kontak', [
        'title' => 'Kontak kami',
    ]);
});

Route::get('/panduan', function () {
    return view('frontend/panduan', [
        'title' => 'Panduan kami',
    ]);
});

Route::get('/e-learning', [App\Http\Controllers\ELearningController::class, 'index'])->name('elearning.index');
Route::get('/e-learning/hidup-sehat', [App\Http\Controllers\ELearningController::class, 'hidupSehat'])->name('elearning.hidup-sehat');
Route::get('/e-learning/pengolahan-sampah', [App\Http\Controllers\ELearningController::class, 'pengolahanSampah'])->name('elearning.pengolahan-sampah');
Route::get('/e-learning/manajemen-keuangan', [App\Http\Controllers\ELearningController::class, 'manajemenKeuangan'])->name('elearning.manajemen-keuangan');

Route::get('/visimisi', function () {
    return view('frontend/visimisi', [
        'title' => 'Visi dan Misi',
    ]);
});

Route::get('/potensidesa', function () {
    return view('frontend/potensidesa', [
        'title' => 'potensidesa',
    ]);
});

Route::get('/login', function () {
    return view('auth/login', [
        'title' => 'login',
    ]);
});

// Route::get('/dashboard', function () {
//     return view('dashboard', [
//         "title" => "dashboard"
//     ]);
// });

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//umport data peduduk

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

// web.php
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Auth::routes(['register' => false]);

// Register User Only
Route::get('/register/user', [UserRegisterController::class, 'showRegisterForm'])->name('register.user');
Route::post('/register/user', [UserRegisterController::class, 'register'])->name('register.user.submit');

Route::group([
    'prefix' => 'agenda_karangtaruna',
], function () {
    Route::get('index', [AgendaKarangtarunaController::class, 'index'])->name('agenda_karangtarunaindex');
    Route::get('create', [AgendaKarangtarunaController::class, 'create'])->name('agenda_karangtarunacreate');
    Route::post('store', [AgendaKarangtarunaController::class, 'store'])->name('agenda_karangtarunastore');
    Route::get('edit/{judul}', [AgendaKarangtarunaController::class, 'edit'])->name('agenda_karangtarunaedit');
    Route::put('store/{judul}', [AgendaKarangtarunaController::class, 'update'])->name('agenda_karangtarunaupdate');
    Route::delete('delete/{judul}', [AgendaKarangtarunaController::class, 'destroy'])->name('agenda_karangtarunadelete');
});

Route::group([
    'prefix' => 'agenda',
], function () {
    Route::get('index', [AgendaController::class, 'index'])->name('agendaindex');
    Route::get('create', [AgendaController::class, 'create'])->name('agendacreate');
    Route::post('store', [AgendaController::class, 'store'])->name('agendastore');
    Route::get('edit/{judul}', [AgendaController::class, 'edit'])->name('agendaedit');
    Route::put('store/{judul}', [AgendaController::class, 'update'])->name('agendaupdate');
    Route::delete('delete/{judul}', [AgendaController::class, 'destroy'])->name('agendadelete');
});

Route::group([
    'prefix' => 'berita',
], function () {
    Route::get('index', [BeritaController::class, 'index'])->name('beritaindex');
    Route::get('create', [BeritaController::class, 'create'])->name('beritacreate');
    Route::post('store', [BeritaController::class, 'store'])->name('beritastore');
    Route::get('edit/{slug}', [BeritaController::class, 'edit'])->name('beritaedit');
    Route::put('store/{slug}', [BeritaController::class, 'update'])->name('beritaupdate');
    Route::delete('delete/{slug}', [BeritaController::class, 'destroy'])->name('beritadelete');
});

// route untuk surat  di halaman user
Route::get('surat', [TampilanuserController::class, 'surat'])->name('surat');
Route::post('store', [TampilanuserController::class, 'store'])->name('suratsimpan');
Route::put('store/update/{id}', [TampilanuserController::class, 'update'])->name('surattupdate');
Route::put('store/updateSKU/{id}', [TampilanuserController::class, 'updateSKU'])->name('suratupdateSKU');
Route::put('store/updateSKD/{id}', [TampilanuserController::class, 'updateSKD'])->name('suratupdateSKD');

//navbar admin
Route::get('/navbar-data', [Navbar_Controller::class, 'getSuratCount'])->name('navbar.data');
Route::get('/navbar', [Navbar_Controller::class, 'navbar'])->name('navbar');
Route::post('/notification/read', [Navbar_Controller::class, 'markNotificationAsRead'])->name('notification.read');

// ini route untuk halaman user frontend
Route::get('/', [TampilanuserController::class, 'index'])->name('indexuser');
Route::get('berita/{slug}', [TampilanuserController::class, 'detail_berita'])->name('berita_detail');
Route::get('/userberita', [TampilanuserController::class, 'main_berita'])->name('berita_main');
Route::get('/aparatur', [TampilanuserController::class, 'aparatur'])->name('aparatur');
Route::get('/useragenda', [TampilanuserController::class, 'main_agenda'])->name('agenda_main');
Route::get('agenda/{judul}', [TampilanuserController::class, 'detail_agenda'])->name('agenda_detail');
Route::get('/useragenda_karangtaruna', [TampilanuserController::class, 'main_agenda_karangtaruna'])->name('agenda_karangtaruna_main');
Route::get('agenda_karangtaruna/{judul}', [TampilanuserController::class, 'detail_agenda_karangtaruna'])->name('agenda_karangtaruna_detail');
Route::get('/galery', [TampilanuserController::class, 'main_galery'])->name('galery_main');
Route::get('/potensidesa', [TampilanuserController::class, 'potensi_desa'])->name('potensi_desa');
Route::get('/infografis', [TampilanuserController::class, 'infografis'])->name('penduduk');
Route::get('/produk', [ProductCatalogController::class, 'index'])->name('produk.index');
Route::get('/produk/{slug}', [ProductCatalogController::class, 'show'])->name('produk.show');

//midleware login admin dan karangtaruna

//admin
Route::group(['middleware' => ['auth', 'admin']], function () {

    // halaman dashboard admin
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::group([
        'prefix' => 'dataaparatur',
    ], function () {
        Route::get('index', [StrukturDesaController::class, 'index'])->name('aparaturindex');
        Route::get('create', [StrukturDesaController::class, 'create'])->name('aparaturcreate');
        Route::post('store', [StrukturDesaController::class, 'store'])->name('aparaturstore');
        Route::get('edit/{id}', [StrukturDesaController::class, 'edit'])->name('aparaturedit');
        Route::put('store/{id}', [StrukturDesaController::class, 'update'])->name('aparaturupdate');
        Route::delete('delete/{id}', [StrukturDesaController::class, 'destroy'])->name('aparaturdelete');
    });

    Route::group([
        'prefix' => 'penduduk',
    ], function () {
        Route::get('index', [PendudukController::class, 'index'])->name('pendudukindex');
        Route::get('create', [PendudukController::class, 'create'])->name('pendudukcreate');
        Route::post('store', [PendudukController::class, 'store'])->name('pendudukstore');
        Route::get('edit/{id}', [PendudukController::class, 'edit'])->name('pendudukedit');
        Route::put('store/{id}', [PendudukController::class, 'update'])->name('pendudukupdate');
        Route::delete('delete/{id}', [PendudukController::class, 'destroy'])->name('pendudukdelete');
        Route::get('detail/{id}', [PendudukController::class, 'show'])->name('pendudukshow');
        Route::get('export_excel', [PendudukController::class, 'export_excel'])->name('pendudukexport');
        Route::get('export_pdf', [PendudukController::class, 'export_pdf'])->name('pendudukexportpdf');
        Route::post('import_excel', [PendudukController::class, 'import_excel'])->name('pendudukimport');
    });

    // ajax
    Route::get('penduduk/{nik}', [PendudukController::class, 'ajax']);

    Route::group([
        'prefix' => 'berita',
    ], function () {
        Route::get('index', [BeritaController::class, 'index'])->name('beritaindex');
        Route::get('create', [BeritaController::class, 'create'])->name('beritacreate');
        Route::post('store', [BeritaController::class, 'store'])->name('beritastore');
        Route::get('edit/{slug}', [BeritaController::class, 'edit'])->name('beritaedit');
        Route::put('store/{slug}', [BeritaController::class, 'update'])->name('beritaupdate');
        Route::delete('delete/{slug}', [BeritaController::class, 'destroy'])->name('beritadelete');
    });

    Route::group([
        'prefix' => 'agenda',
    ], function () {
        Route::get('index', [AgendaController::class, 'index'])->name('agendaindex');
        Route::get('create', [AgendaController::class, 'create'])->name('agendacreate');
        Route::post('store', [AgendaController::class, 'store'])->name('agendastore');
        Route::get('edit/{id}', [AgendaController::class, 'edit'])->name('agendaedit');
        Route::put('store/{id}', [AgendaController::class, 'update'])->name('agendaupdate');
        Route::delete('delete/{id}', [AgendaController::class, 'destroy'])->name('agendadelete');
    });

    Route::group([
        'prefix' => 'agenda_karangtaruna',
    ], function () {
        Route::get('index', [AgendaKarangtarunaController::class, 'index'])->name('agenda_karangtarunaindex');
        Route::get('create', [AgendaKarangtarunaController::class, 'create'])->name('agenda_karangtarunacreate');
        Route::post('store', [AgendaKarangtarunaController::class, 'store'])->name('agenda_karangtarunastore');
        Route::get('edit/{id}', [AgendaKarangtarunaController::class, 'edit'])->name('agenda_karangtarunaedit');
        Route::put('store/{id}', [AgendaKarangtarunaController::class, 'update'])->name('agenda_karangtarunaupdate');
        Route::delete('delete/{id}', [AgendaKarangtarunaController::class, 'destroy'])->name('agenda_karangtarunadelete');
    });

    Route::group([
        'prefix' => 'potensi_desa',
    ], function () {
        Route::get('index', [PotensiDesaController::class, 'index'])->name('potensi_desaindex');
        Route::get('create', [PotensiDesaController::class, 'create'])->name('potensi_desacreate');
        Route::post('store', [PotensiDesaController::class, 'store'])->name('potensi_desastore');
        Route::get('edit/{judul}', [PotensiDesaController::class, 'edit'])->name('potensi_desaedit');
        Route::put('store/{judul}', [PotensiDesaController::class, 'update'])->name('potensi_desaupdate');
        Route::delete('delete/{judul}', [PotensiDesaController::class, 'destroy'])->name('potensi_desadelete');
    });

    Route::group([
        'prefix' => 'galery',
    ], function () {
        Route::get('index', [GaleryController::class, 'index'])->name('galeryindex');
        Route::get('create', [GaleryController::class, 'create'])->name('galerycreate');
        Route::post('store', [GaleryController::class, 'store'])->name('galerystore');
        Route::get('edit/{nama}', [GaleryController::class, 'edit'])->name('galeryedit');
        Route::put('store/{nama}', [GaleryController::class, 'update'])->name('galeryupdate');
        Route::delete('delete/{nama}', [GaleryController::class, 'destroy'])->name('galerydelete');
    });

    Route::group([
        'prefix' => 'kepaladesa',
    ], function () {
        Route::get('index', [KepaladesaControler::class, 'index'])->name('kepaladesaindex');
        Route::get('create', [KepaladesaControler::class, 'create'])->name('kepaladesacreate');
        Route::post('store', [KepaladesaControler::class, 'store'])->name('kepaladesastore');
        Route::get('edit/{id}', [KepaladesaControler::class, 'edit'])->name('kepaladesaedit');
        Route::put('store/{id}', [KepaladesaControler::class, 'update'])->name('kepaladesaupdate');
        Route::delete('delete/{id}', [KepaladesaControler::class, 'destroy'])->name('kepaladesadelete');
    });

    //surat Keterangan Tidak Mampu

    Route::group([
        'prefix' => 'surat',
    ], function () {
        Route::get('index', [SuratController::class, 'index'])->name('suratindex');
        Route::get('create', [SuratController::class, 'create'])->name('suratcreate');
        Route::post('store', [SuratController::class, 'store'])->name('suratstore');
        Route::get('edit/{id}', [SuratController::class, 'edit'])->name('suratedit');
        Route::put('store/{id}', [SuratController::class, 'update'])->name('suratupdate');
        Route::delete('delete/{id}', [SuratController::class, 'destroy'])->name('suratdelete');
        Route::get('cetak_surat/{id}', [SuratController::class, 'cetak_surat'])->name('suratcetak');
    });

    Route::group([
        'prefix' => 'user',
    ], function () {
        Route::get('index', [UserController::class, 'index'])->name('userindex');
        Route::get('create', [UserController::class, 'create'])->name('usercreate');
        Route::post('store', [UserController::class, 'store'])->name('userstore');
    });

    Route::group([
        'prefix' => 'products',
    ], function () {
        Route::get('index', [ProductController::class, 'index'])->name('products.index');
        Route::get('create', [ProductController::class, 'create'])->name('products.create');
        Route::post('store', [ProductController::class, 'store'])->name('products.store');
        Route::get('edit/{id}', [ProductController::class, 'edit'])->name('products.edit');
        Route::put('store/{id}', [ProductController::class, 'update'])->name('products.update');
        Route::delete('delete/{id}', [ProductController::class, 'destroy'])->name('products.delete');
    });

    Route::group([
        'prefix' => 'surat_keteranganusaha',
    ], function () {
        Route::get('index', [Surat_KeteranganUsahaController::class, 'index'])->name('surat_keteranganusahaindex');
        Route::get('cetak_surat/{id}', [Surat_KeteranganUsahaController::class, 'cetak_surat'])->name('surat_keteranganusahacetak');
    });

    Route::group([
        'prefix' => 'surat_keterangandomisili',
    ], function () {
        Route::get('index', [Surat_KeteranganDomisiliController::class, 'index'])->name('surat_keterangandomisiliindex');
        Route::delete('delete/{id}', [Surat_KeteranganDomisiliController::class, 'destroy'])->name('surat_keterangandomisilidelete');
        Route::get('cetak_surat/{id}', [Surat_KeteranganDomisiliController::class, 'cetak_surat'])->name('surat_keterangandomisilicetak');
    });

    // ini route untuk halaman user frontend
    // Route::get('/', [TampilanuserController::class, 'index'])->name('indexuser');
    // Route::get('berita/{slug}', [TampilanuserController::class, 'detail_berita'])->name('berita_detail');
    // Route::get('/userberita', [TampilanuserController::class, 'main_berita'])->name('berita_main');
    // Route::get('/aparatur', [TampilanuserController::class, 'aparatur'])->name('aparatur');
    // Route::get('/useragenda', [TampilanuserController::class, 'main_agenda'])->name('agenda_main');
    // Route::get('agenda/{judul}', [TampilanuserController::class, 'detail_agenda'])->name('agenda_detail');
    // Route::get('/useragenda_karangtaruna', [TampilanuserController::class, 'main_agenda_karangtaruna'])->name('agenda_karangtaruna_main');
    // Route::get('agenda_karangtaruna/{judul}', [TampilanuserController::class, 'detail_agenda_karangtaruna'])->name('agenda_karangtaruna_detail');
    // Route::get('/galery', [TampilanuserController::class, 'main_galery'])->name('galery_main');
    // Route::get('/potensidesa', [TampilanuserController::class, 'potensi_desa'])->name('potensi_desa');

});

//karangtaruna
Route::group(['middleware' => ['auth', 'checkuser']], function () {

    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::group([
        'prefix' => 'agenda_karangtaruna',
    ], function () {
        Route::get('index', [AgendaKarangtarunaController::class, 'index'])->name('agenda_karangtarunaindex');
        Route::get('create', [AgendaKarangtarunaController::class, 'create'])->name('agenda_karangtarunacreate');
        Route::post('store', [AgendaKarangtarunaController::class, 'store'])->name('agenda_karangtarunastore');
        Route::get('edit/{judul}', [AgendaKarangtarunaController::class, 'edit'])->name('agenda_karangtarunaedit');
        Route::put('store/{judul}', [AgendaKarangtarunaController::class, 'update'])->name('agenda_karangtarunaupdate');
        Route::delete('delete/{judul}', [AgendaKarangtarunaController::class, 'destroy'])->name('agenda_karangtarunadelete');
    });

    Route::group([
        'prefix' => 'berita',
    ], function () {
        Route::get('index', [BeritaController::class, 'index'])->name('beritaindex');
        Route::get('create', [BeritaController::class, 'create'])->name('beritacreate');
        Route::post('store', [BeritaController::class, 'store'])->name('beritastore');
        Route::get('edit/{slug}', [BeritaController::class, 'edit'])->name('beritaedit');
        Route::put('store/{slug}', [BeritaController::class, 'update'])->name('beritaupdate');
        Route::delete('delete/{slug}', [BeritaController::class, 'destroy'])->name('beritadelete');
    });

    Route::get('penduduk/{nik}', [PendudukController::class, 'ajax']);
});
