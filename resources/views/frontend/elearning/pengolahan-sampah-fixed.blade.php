@extends('constra_template.master')

@section('title', 'Pengelolaan Sampah Limbah Rumah Tangga')

@section('content')
    <section id="main-container" class="main-container">
        <div class="container">
            <!-- Header Halaman -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="article-header"
                        style="background: linear-gradient(135deg, #6fa8dc, #76d7c4); padding: 30px 20px; border-radius: 10px; text-align: center; margin-bottom: 40px; color: #fff;">
                        <img src="{{ asset('constra/images/icon/recycle-sign.png') }}" alt="Waste Management Icon"
                            style="width: 60px; margin-bottom: 10px; background-color: #61c0bf; padding: 10px; border-radius: 10px;">
                        <h2 class="title">Pengelolaan Sampah Limbah Rumah Tangga</h2>
                        <p style="font-size: 18px;">Teknik Praktis Mengelola Sampah untuk Lingkungan yang Bersih</p>
                    </div>
                </div>
            </div>

            <!-- Article Navigation -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="article-nav" style="margin-bottom: 30px;">
                        <a href="{{ route('elearning.index') }}" class="btn btn-primary" style="margin-right: 10px;">
                            <i class="fa fa-chevron-left"></i> Kembali ke E-Learning
                        </a>
                    </div>
                </div>
            </div>

            <!-- Article Introduction -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="article-intro"
                        style="background-color: #f8f9fa; border-radius: 10px; padding: 20px; margin-bottom: 30px;">
                        <h3>Pendahuluan</h3>
                        <p>Sampah merupakan salah satu permasalahan utama yang dihadapi oleh masyarakat Indonesia. Setiap
                            harinya, satu orang dapat menghasilkan sekitar 0,5 - 0,8 kg sampah. Jika tidak dikelola dengan
                            baik, sampah dapat mencemari lingkungan dan menimbulkan berbagai masalah kesehatan.</p>
                        <p>Dengan menerapkan pengelolaan sampah yang tepat di rumah tangga, kita dapat berkontribusi secara
                            signifikan dalam mengurangi dampak negatif sampah terhadap lingkungan dan kesehatan masyarakat.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Main Content -->
            <div class="row">
                <!-- Left Column -->
                <div class="col-md-6">
                    <div class="ts-service-box">
                        <div class="ts-service-image-wrapper">
                            <img class="img-responsive" src="{{ asset('constra/images/konten/pemilahan-sampah.png') }}"
                                alt="Pemilahan Sampah">
                        </div>
                        <div class="ts-service-box-info">
                            <h3 class="service-box-title">Pemilahan Sampah</h3>
                            <p>Pemilahan sampah adalah langkah awal yang penting dalam pengelolaan sampah. Dengan memilah
                                sampah, kita dapat memaksimalkan daur ulang dan mengurangi jumlah sampah yang berakhir di
                                TPA.</p>
                            <h4>Jenis-jenis sampah yang perlu dipisahkan:</h4>
                            <ul class="list-arrow">
                                <li><strong>Sampah organik</strong> - sisa makanan, daun, ranting, kulit buah, dll</li>
                                <li><strong>Sampah anorganik</strong> - plastik, kertas, kaca, logam</li>
                                <li><strong>Sampah B3 (Bahan Berbahaya dan Beracun)</strong> - baterai, lampu, elektronik,
                                    kemasan produk pembersih</li>
                            </ul>
                            <p>Siapkan tempat sampah terpisah untuk setiap jenis sampah di rumah Anda. Sampah organik bisa
                                dikomposkan, sampah anorganik bisa didaur ulang, dan sampah B3 harus ditangani secara
                                khusus.</p>
                        </div>
                    </div>

                    <div class="gap-30"></div>

                    <div class="ts-service-box">
                        <div class="ts-service-image-wrapper">
                            <img class="img-responsive" src="{{ asset('constra/images/konten/kerajinan.png') }}"
                                alt="Kerajinan Daur Ulang">
                        </div>
                        <div class="ts-service-box-info">
                            <h3 class="service-box-title">Kerajinan Daur Ulang</h3>
                            <p>Sampah anorganik seperti plastik, kertas, dan kain bekas dapat diubah menjadi berbagai
                                kerajinan yang bernilai dan bermanfaat.</p>
                            <h4>Contoh kerajinan dari bahan daur ulang:</h4>
                            <ul class="list-arrow">
                                <li>Pot tanaman dari botol plastik bekas</li>
                                <li>Tempat pensil dari kaleng bekas</li>
                                <li>Tas dari bungkus kopi atau kemasan plastik</li>
                                <li>Hiasan dinding dari kardus bekas</li>
                                <li>Keset dari kain perca</li>
                            </ul>
                            <p>Dengan kreativitas, sampah anorganik yang tadinya tidak berharga bisa diubah menjadi produk
                                yang berguna dan bahkan bernilai ekonomis.</p>
                        </div>
                    </div>
                </div>

                <!-- Right Column -->
                <div class="col-md-6">
                    <div class="ts-service-box">
                        <div class="ts-service-image-wrapper">
                            <img class="img-responsive" src="{{ asset('constra/images/konten/kompos.png') }}"
                                alt="Komposting">
                        </div>
                        <div class="ts-service-box-info">
                            <h3 class="service-box-title">Pembuatan Kompos</h3>
                            <p>Komposting adalah cara alami untuk mengolah sampah organik menjadi pupuk yang bermanfaat
                                untuk tanaman.</p>
                            <h4>Langkah-langkah membuat kompos:</h4>
                            <ul class="list-arrow">
                                <li>Siapkan wadah kompos (bisa dari ember bekas atau peti kayu)</li>
                                <li>Masukkan sampah organik seperti sisa sayuran, buah, dan daun kering</li>
                                <li>Tambahkan sedikit tanah atau kompos jadi sebagai aktivator</li>
                                <li>Aduk secara berkala dan jaga kelembapannya</li>
                                <li>Setelah 2-3 bulan, kompos siap digunakan</li>
                            </ul>
                            <p>Kompos yang dihasilkan dapat digunakan untuk menyuburkan tanaman di halaman rumah atau kebun,
                                sehingga menciptakan siklus alami yang bermanfaat.</p>
                        </div>
                    </div>

                    <div class="gap-30"></div>

                    <div class="ts-service-box">
                        <div class="ts-service-image-wrapper">
                            <img class="img-responsive" src="{{ asset('constra/images/konten/bank-sampah.png') }}"
                                alt="Bank Sampah">
                        </div>
                        <div class="ts-service-box-info">
                            <h3 class="service-box-title">Bank Sampah</h3>
                            <p>Bank sampah adalah sistem pengelolaan sampah yang mendorong masyarakat untuk aktif dalam
                                pengolahan sampah dengan prinsip ekonomi.</p>
                            <h4>Manfaat bank sampah:</h4>
                            <ul class="list-arrow">
                                <li>Mengurangi sampah yang dibuang ke TPA</li>
                                <li>Menghasilkan pendapatan tambahan dari sampah yang dapat didaur ulang</li>
                                <li>Meningkatkan kesadaran masyarakat tentang pengelolaan sampah</li>
                                <li>Menciptakan lingkungan yang lebih bersih dan sehat</li>
                            </ul>
                            <p>Cara kerja bank sampah mirip dengan bank konvensional, di mana masyarakat dapat menabung
                                sampah mereka dan mendapatkan nilai ekonomi sebagai imbalannya. Mari berpartisipasi dalam
                                program bank sampah di desa kita!</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="gap-40"></div>

            <!-- Additional Information -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Prinsip 3R (Reduce, Reuse, Recycle)</h3>
                        </div>
                        <div class="panel-body">
                            <p>Prinsip 3R adalah pendekatan dasar dalam pengelolaan sampah yang dapat diterapkan oleh setiap
                                rumah tangga:</p>

                            <h4><strong>1. Reduce (Mengurangi)</strong></h4>
                            <p>Mengurangi penggunaan barang-barang yang berpotensi menjadi sampah. Contoh:</p>
                            <ul>
                                <li>Membawa tas belanja sendiri saat berbelanja</li>
                                <li>Menghindari penggunaan produk sekali pakai</li>
                                <li>Membeli produk dengan kemasan yang minimal</li>
                            </ul>

                            <h4><strong>2. Reuse (Menggunakan Kembali)</strong></h4>
                            <p>Menggunakan kembali barang-barang yang masih bisa digunakan. Contoh:</p>
                            <ul>
                                <li>Menggunakan kembali botol plastik untuk wadah</li>
                                <li>Menggunakan kain bekas sebagai lap</li>
                                <li>Menjadikan kaleng bekas sebagai pot tanaman</li>
                            </ul>

                            <h4><strong>3. Recycle (Mendaur Ulang)</strong></h4>
                            <p>Mengolah kembali sampah menjadi bahan atau produk baru. Contoh:</p>
                            <ul>
                                <li>Membuat kompos dari sampah organik</li>
                                <li>Membuat kerajinan dari sampah anorganik</li>
                                <li>Mengumpulkan sampah yang bisa didaur ulang dan menjualnya ke pengepul</li>
                            </ul>

                            <p>Dengan menerapkan prinsip 3R dalam kehidupan sehari-hari, kita dapat berkontribusi dalam
                                mengurangi jumlah sampah yang dihasilkan dan meningkatkan kualitas lingkungan hidup.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Header Halaman -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="article-header"
                        style="background: linear-gradient(135deg, #f5a623, #f8d030); padding: 30px 20px; border-radius: 10px; text-align: center; margin-bottom: 40px; color: #fff;">
                        <img src="{{ asset('constra/images/icon/oil.png') }}" alt="Recycle Oil Icon"
                            style="width: 60px; margin-bottom: 10px; background-color: #ffffff; padding: 10px; border-radius: 50%;">
                        <h2 class="title">Panduan Lengkap Pemanfaatan Minyak Jelantah</h2>
                        <p style="font-size: 18px;">Mengubah Limbah Dapur Menjadi Produk Bernilai Guna</p>
                    </div>
                </div>
            </div>

            <!-- Video Tutorial Section -->
            <div class="row">
                <div class="col-lg-12 mb-4">
                    <h3 class="border-bottom-title">Video Tutorial Lengkap</h3>
                    @php
                        $videoPath = public_path('vidio/Tutorial.mp4');
                    @endphp
                    @if (file_exists($videoPath))
                        <div class="video-container"
                            style="border-radius: 10px; overflow: hidden; box-shadow: 0 4px 8px rgba(0,0,0,0.1); width: 50%; margin: 0 auto;">
                            <video controls width="100%">
                                <source src="{{ asset('vidio/Tutorial.mp4') }}" type="video/mp4">
                                Browser Anda tidak mendukung tag video.
                            </video>
                        </div>
                    @else
                        <div class="alert alert-warning text-center" style="width: 60%; margin: 0 auto;">
                            Video tutorial belum tersedia. Silakan cek kembali nanti.
                        </div>
                    @endif
                </div>
            </div>

            <!-- Navigasi Tab -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="tab-interface">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#sabunBatang" role="tab">
                                    <i class="fa fa-cubes"></i> Sabun Batang
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#sabunCair" role="tab">
                                    <i class="fa fa-tint"></i> Sabun Cair
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#lilinAromaterapi" role="tab">
                                    <i class="fa fa-fire"></i> Lilin Aromaterapi
                                </a>
                            </li>
                        </ul>

                        <div class="tab-content" role="tablist">
                            <!-- Konten Tab: Sabun Batang -->
                            <div class="tab-pane active" id="sabunBatang" role="tabpanel">
                                <h3 class="border-bottom-title mt-4">Panduan Membuat Sabun Batang dari Minyak Jelantah</h3>

                                <div class="panel panel-danger">
                                    <div class="panel-heading">
                                        <h3 class="panel-title"><i class="fa fa-exclamation-triangle"></i> KESELAMATAN
                                            ADALAH UTAMA!</h3>
                                    </div>
                                    <div class="panel-body">
                                        <ul class="list-arrow">
                                            <li>Selalu Gunakan Pelindung: Kenakan sarung tangan dan masker selama proses,
                                                terutama saat menangani soda api (NaOH).</li>
                                            <li>Jauhkan dari jangkauan anak-anak.</li>
                                            <li>Lakukan proses di ruangan dengan sirkulasi udara yang baik atau di area
                                                terbuka.</li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <h4><i class="fa fa-cogs"></i> Alat-alat:</h4>
                                        <ul class="list-arrow">
                                            <li>Wadah Tahan Panas (2 buah)</li>
                                            <li>Mixer Tangan / Hand Blender</li>
                                            <li>Pengaduk / Spatula</li>
                                            <li>Cetakan Sabun</li>
                                            <li>Sarung Tangan dan Masker</li>
                                            <li>Timbangan Digital</li>
                                        </ul>
                                    </div>
                                    <div class="col-md-6">
                                        <h4><i class="fa fa-flask"></i> Bahan-bahan:</h4>
                                        <ul class="list-arrow">
                                            <li>Minyak Jelantah Bersih (sudah disaring): 250 gram</li>
                                            <li>Soda Api / NaOH: 36 gram</li>
                                            <li>Air Bersih: 90 gram</li>
                                            <li>Pewangi (Essential Oil): 5-10 ml</li>
                                            <li>Pewarna (opsional)</li>
                                        </ul>
                                    </div>
                                </div>
                                <hr>
                                <h4><i class="fa fa-arrow-circle-right"></i> Langkah-Langkah Pembuatan:</h4>
                                <ol>
                                    <li><strong>Membuat Larutan Soda Api:</strong>
                                        <ul>
                                            <li>Di wadah tahan panas, tuangkan 36 gr Soda Api (NaOH) secara perlahan ke
                                                dalam 90 gr air. <strong>INGAT:</strong> Selalu tuang soda api ke dalam air,
                                                BUKAN sebaliknya.</li>
                                            <li>Aduk hingga larut sempurna. Larutan akan menjadi sangat panas. Diamkan di
                                                tempat aman hingga dingin sepenuhnya (1-2 jam).</li>
                                        </ul>
                                    </li>
                                    <li><strong>Proses Pencampuran (Saponifikasi):</strong>
                                        <ul>
                                            <li>Timbang 250 gr minyak jelantah bersih di wadah utama.</li>
                                            <li>Setelah larutan soda api benar-benar dingin, tuangkan ke dalam minyak.</li>
                                            <li>Gunakan mixer tangan untuk mengaduk hingga adonan mengental seperti puding
                                                (fase 'trace').</li>
                                            <li>Jika sudah kental, masukkan pewangi atau pewarna, aduk sebentar hingga rata.
                                            </li>
                                        </ul>
                                    </li>
                                    <li><strong>Pencetakan dan Pematangan (Curing):</strong>
                                        <ul>
                                            <li>Segera tuang adonan ke dalam cetakan, tutup dengan kain, dan biarkan
                                                mengeras selama 24-48 jam.</li>
                                            <li>Setelah keras, keluarkan sabun dari cetakan.</li>
                                            <li><strong>PROSES CURING (WAJIB):</strong> Simpan sabun di tempat sejuk dan
                                                kering dengan sirkulasi udara baik selama <strong>4 hingga 6
                                                    minggu</strong>. Proses ini penting agar sabun aman digunakan.</li>
                                        </ul>
                                    </li>
                                </ol>
                            </div>
                            <!-- / Konten Tab: Sabun Batang -->

                            <!-- Konten Tab: Sabun Cair -->
                            <div class="tab-pane" id="sabunCair" role="tabpanel">
                                <h3 class="border-bottom-title mt-4">Panduan Membuat Sabun Cair Serbaguna dari Minyak
                                    Jelantah</h3>

                                <div class="panel panel-danger">
                                    <div class="panel-heading">
                                        <h3 class="panel-title"><i class="fa fa-exclamation-triangle"></i> PERINGATAN
                                            KESELAMATAN!</h3>
                                    </div>
                                    <div class="panel-body">
                                        <ul class="list-arrow">
                                            <li>Gunakan Alat Pelindung Diri (APD) lengkap: sarung tangan dan masker.</li>
                                            <li>Jauhkan dari jangkauan anak-anak.</li>
                                            <li>Lakukan proses di ruangan dengan sirkulasi udara yang baik.</li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <h4><i class="fa fa-cogs"></i> Alat-alat:</h4>
                                        <ul class="list-arrow">
                                            <li>Wadah Tahan Panas (2 buah)</li>
                                            <li>Mixer Tangan</li>
                                            <li>Pengaduk / Spatula</li>
                                            <li>Wadah Sabun / Botol</li>
                                            <li>Sarung Tangan dan Masker</li>
                                            <li>Timbangan Digital</li>
                                            <li>Panci</li>
                                        </ul>
                                    </div>
                                    <div class="col-md-6">
                                        <h4><i class="fa fa-flask"></i> Bahan-bahan:</h4>
                                        <ul class="list-arrow">
                                            <li>Minyak Jelantah Bersih: 150 gram</li>
                                            <li>Kalium Hidroksida (KOH): 32,5 gram</li>
                                            <li>Air Bersih (untuk larutan KOH): 80 gram</li>
                                            <li>Air Panas (untuk pengenceran): 825 ml</li>
                                            <li>Garam Meja (NaCl): 5 gram</li>
                                            <li>Pewangi (Essential Oil): 5-10 ml & Pewarna</li>
                                        </ul>
                                    </div>
                                </div>
                                <hr>
                                <h4><i class="fa fa-arrow-circle-right"></i> Langkah-Langkah Pembuatan:</h4>
                                <ol>
                                    <li><strong>Membuat Larutan KOH:</strong> Tuangkan 32,5 gr KOH perlahan ke dalam 80 gr
                                        air di wadah tahan panas, aduk hingga larut. Dinginkan hingga suhu ruang.</li>
                                    <li><strong>Membuat Pasta Sabun:</strong> Tuang larutan KOH yang sudah dingin ke dalam
                                        150 gr minyak jelantah. Aduk terus (bisa 20-40 menit) hingga adonan berubah menjadi
                                        pasta kental seperti lem.</li>
                                    <li><strong>Pengenceran dan Finishing:</strong>
                                        <ul>
                                            <li>Tuangkan 825 ml air panas secara bertahap ke dalam pasta sambil diaduk
                                                hingga semua larut.</li>
                                            <li>Masukkan pewangi dan pewarna, aduk rata.</li>
                                            <li>Buat larutan pengental: larutkan 5 gr garam dengan 2-3 sdm air biasa.</li>
                                            <li>Tuang larutan garam ke dalam sabun sambil diaduk perlahan hingga mengental.
                                            </li>
                                            <li>Diamkan beberapa jam atau semalaman, lalu sabun cair siap dikemas.</li>
                                        </ul>
                                    </li>
                                </ol>
                            </div>
                            <!-- / Konten Tab: Sabun Cair -->

                            <!-- Konten Tab: Lilin Aromaterapi -->
                            <div class="tab-pane" id="lilinAromaterapi" role="tabpanel">
                                <h3 class="border-bottom-title mt-4">Panduan Membuat Lilin Aromaterapi dari Minyak Jelantah
                                </h3>

                                <div class="panel panel-danger">
                                    <div class="panel-heading">
                                        <h3 class="panel-title"><i class="fa fa-exclamation-triangle"></i> PERINGATAN
                                            KESELAMATAN!</h3>
                                    </div>
                                    <div class="panel-body">
                                        <ul class="list-arrow">
                                            <li>Gunakan api yang sangat kecil saat melelehkan bahan untuk menghindari lilin
                                                berasap atau terbakar.</li>
                                            <li>Pastikan area kerja aman dari jangkauan anak-anak.</li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <h4><i class="fa fa-cogs"></i> Alat-alat:</h4>
                                        <ul class="list-arrow">
                                            <li>Timbangan Digital</li>
                                            <li>Panci Kecil</li>
                                            <li>Wadah atau Cetakan Lilin (kaca, kaleng, dll)</li>
                                            <li>Pengaduk</li>
                                            <li>Penjepit atau Stik (untuk menahan sumbu)</li>
                                            <li>Sumbu Lilin</li>
                                        </ul>
                                    </div>
                                    <div class="col-md-6">
                                        <h4><i class="fa fa-flask"></i> Bahan-bahan:</h4>
                                        <ul class="list-arrow">
                                            <li>Minyak Jelantah Bersih: 100 gram</li>
                                            <li>Palm Wax: 100 gram</li>
                                            <li>Essential Oil (untuk aroma)</li>
                                            <li>Pewarna Khusus Lilin (opsional)</li>
                                        </ul>
                                    </div>
                                </div>
                                <hr>
                                <h4><i class="fa fa-arrow-circle-right"></i> Langkah-Langkah Pembuatan:</h4>
                                <ol>
                                    <li><strong>Persiapan Wadah dan Sumbu:</strong>
                                        <ul>
                                            <li>Siapkan wadah lilin yang bersih dan kering.</li>
                                            <li>Letakkan ujung logam sumbu di tengah dasar wadah.</li>
                                            <li>Jepit bagian atas sumbu dengan penjepit atau lilitkan pada stik agar tetap
                                                lurus di tengah.</li>
                                        </ul>
                                    </li>
                                    <li><strong>Melelehkan Bahan:</strong>
                                        <ul>
                                            <li>Masukkan 100 gr palm wax dan 100 gr minyak jelantah ke dalam panci.</li>
                                            <li>Panaskan dengan api sangat kecil, aduk hingga semua bahan meleleh sempurna.
                                            </li>
                                            <li>Matikan api, masukkan pewarna (jika pakai) dan aduk rata. Diamkan 1-2 menit,
                                                lalu tambahkan essential oil dan aduk kembali.</li>
                                        </ul>
                                    </li>
                                    <li><strong>Pencetakan dan Pendinginan:</strong>
                                        <ul>
                                            <li>Tuangkan campuran lilin cair dengan hati-hati ke dalam wadah yang sudah
                                                disiapkan.</li>
                                            <li>Biarkan lilin mengeras pada suhu ruang selama beberapa jam hingga
                                                benar-benar padat.</li>
                                        </ul>
                                    </li>
                                </ol>
                            </div>
                            <!-- / Konten Tab: Lilin Aromaterapi -->
                        </div>
                    </div>
                </div>
            </div>

            <div class="gap-40"></div>

            <!-- Quiz Section -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">Quiz Pengolahan Sampah - Tes Pengetahuan Anda!</h3>
                        </div>
                        <div class="panel-body">
                            <p>Uji pemahaman Anda tentang pengolahan sampah dengan menjawab pertanyaan-pertanyaan
                                berikut:</p>

                            <form id="sampahQuiz">
                                <!-- Question 1 -->
                                <div class="quiz-question">
                                    <h4>1. Apa yang dimaksud dengan konsep 3R dalam pengolahan sampah?</h4>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="question1" value="a">
                                            a) Recover, Recycle, Reuse
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="question1" value="b">
                                            b) Reduce, Reuse, Recycle
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="question1" value="c">
                                            c) Reuse, Remake, Reduce
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="question1" value="d">
                                            d) Reduce, Remake, Recollect
                                        </label>
                                    </div>
                                </div>

                                <!-- Question 2 -->
                                <div class="quiz-question">
                                    <h4>2. Sampah organik paling baik diproses menjadi:</h4>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="question2" value="a">
                                            a) Bahan bakar
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="question2" value="b">
                                            b) Kompos
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="question2" value="c">
                                            c) Plastik daur ulang
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="question2" value="d">
                                            d) Bahan bangunan
                                        </label>
                                    </div>
                                </div>

                                <!-- Question 3 -->
                                <div class="quiz-question">
                                    <h4>3. Manakah berikut ini termasuk sampah anorganik?</h4>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="question3" value="a">
                                            a) Kulit buah
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="question3" value="b">
                                            b) Daun-daunan
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="question3" value="c">
                                            c) Botol plastik
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="question3" value="d">
                                            d) Sisa sayuran
                                        </label>
                                    </div>
                                </div>

                                <!-- Question 4 -->
                                <div class="quiz-question">
                                    <h4>4. Salah satu cara mendaur ulang kertas adalah:</h4>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="question4" value="a">
                                            a) Membakarnya
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="question4" value="b">
                                            b) Mengubahnya menjadi kompos
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="question4" value="c">
                                            c) Membuat kerajinan dari kertas bekas
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="question4" value="d">
                                            d) Menguburnya di tanah
                                        </label>
                                    </div>
                                </div>

                                <!-- Question 5 -->
                                <div class="quiz-question">
                                    <h4>5. Apa manfaat dari Bank Sampah?</h4>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="question5" value="a">
                                            a) Menambah volume sampah di TPA
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="question5" value="b">
                                            b) Mengubah sampah menjadi bernilai ekonomis
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="question5" value="c">
                                            c) Menyimpan sampah untuk jangka panjang
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="question5" value="d">
                                            d) Membuat tempat penyimpanan sampah yang baru
                                        </label>
                                    </div>
                                </div>

                                <div class="text-center" style="margin-top: 30px;">
                                    <button type="button" id="submitQuiz" class="btn btn-success">Periksa
                                        Jawaban</button>
                                    <button type="button" id="resetQuiz" class="btn btn-warning"
                                        style="margin-left: 10px;">Reset</button>
                                </div>
                            </form>

                            <div id="quizResult" class="alert" style="margin-top: 20px; display: none;"></div>

                            <script>
                                document.addEventListener('DOMContentLoaded', function() {
                                    const correctAnswers = {
                                        question1: "b",
                                        question2: "b",
                                        question3: "c",
                                        question4: "c",
                                        question5: "b"
                                    };

                                    document.getElementById('submitQuiz').addEventListener('click', function() {
                                        let score = 0;
                                        let total = Object.keys(correctAnswers).length;
                                        let resultHTML = '';

                                        // Check each question
                                        for (let question in correctAnswers) {
                                            const selectedOption = document.querySelector(`input[name=${question}]:checked`);
                                            if (!selectedOption) {
                                                alert('Silakan jawab semua pertanyaan!');
                                                return;
                                            }

                                            if (selectedOption.value === correctAnswers[question]) {
                                                score++;
                                            }
                                        }

                                        // Calculate percentage
                                        const percentage = (score / total) * 100;

                                        // Prepare result message
                                        if (percentage >= 80) {
                                            resultHTML = `<div class="alert alert-success">
                                                <strong>Bagus Sekali!</strong> Anda menjawab ${score} dari ${total} pertanyaan dengan benar (${percentage}%).
                                                <br>Anda memiliki pemahaman yang sangat baik tentang pengolahan sampah!
                                            </div>`;
                                        } else if (percentage >= 60) {
                                            resultHTML = `<div class="alert alert-info">
                                                <strong>Cukup Baik!</strong> Anda menjawab ${score} dari ${total} pertanyaan dengan benar (${percentage}%).
                                                <br>Anda memiliki pemahaman dasar yang baik tentang pengolahan sampah, namun masih ada yang perlu dipelajari.
                                            </div>`;
                                        } else {
                                            resultHTML = `<div class="alert alert-warning">
                                                <strong>Terus Belajar!</strong> Anda menjawab ${score} dari ${total} pertanyaan dengan benar (${percentage}%).
                                                <br>Anda perlu mempelajari lebih lanjut tentang pengolahan sampah. Silakan baca kembali materinya.
                                            </div>`;
                                        }

                                        // Display result
                                        const resultDiv = document.getElementById('quizResult');
                                        resultDiv.innerHTML = resultHTML;
                                        resultDiv.style.display = 'block';

                                        // Scroll to result
                                        resultDiv.scrollIntoView({
                                            behavior: 'smooth'
                                        });
                                    });

                                    document.getElementById('resetQuiz').addEventListener('click', function() {
                                        document.getElementById('sampahQuiz').reset();
                                        document.getElementById('quizResult').style.display = 'none';
                                    });
                                });
                            </script>
                        </div>
                    </div>
                </div>
            </div>

            <div class="gap-30"></div>

            <!-- Article Footer -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="article-footer text-center">
                        <a href="{{ route('elearning.index') }}" class="btn btn-primary">Kembali ke E-Learning</a>
                    </div>
                </div>
            </div>
        </div><!-- Container end -->
    </section><!-- Main container end -->
@endsection
