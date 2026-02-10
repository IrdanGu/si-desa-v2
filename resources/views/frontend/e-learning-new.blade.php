@extends('constra_template.master')

@section('title', 'E-Learning - Desa Mancagar')

@section('content')
    <section id="main-container" class="main-container">
        <div class="container">
            <!-- Header Section with Gradient Background -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="e-learning-header"
                        style="background: linear-gradient(135deg, #6fa8dc, #76d7c4); padding: 30px 20px; border-radius: 10px; text-align: center; margin-bottom: 40px; color: #fff;">
                        <img src="{{ asset('constra/images/icon/graduation-cap.png') }}" alt="E-Learning"
                            style="width: 60px; margin-bottom: 10px;">
                        <h2 class="title">E-Learning Workshop Pengabdian</h2>
                        <p style="font-size: 18px;">Platform Pembelajaran Gratis untuk Masyarakat</p>
                    </div>
                </div>
            </div>

            <!-- Welcome Banner -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="welcome-banner"
                        style="background-color: #f8f9fa; border-radius: 10px; padding: 20px; margin-bottom: 40px; display: flex; align-items: center;">
                        <div style="flex: 0 0 80px;">
                            <img src="{{ asset('constra/images/icon/book.png') }}" alt="Book Icon" style="width: 70px;">
                        </div>
                        <div style="padding-left: 20px;">
                            <h3 style="margin-top: 0;">Selamat Datang di Platform Kami</h3>
                            <p>Dapatkan akses gratis ke berbagai materi pembelajaran berkualitas untuk meningkatkan kualitas
                                hidup. Ikuti materi, workshop, dan pelatihan kapan saja dan dimana saja.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Workshop Cards Section -->
            <div class="row">
                <!-- Workshop Card 1 -->
                <div class="col-md-4">
                    <div class="workshop-card"
                        style="background-color: #fff; border-radius: 10px; box-shadow: 0 0 15px rgba(0,0,0,0.1); overflow: hidden; margin-bottom: 30px; height: 100%;">
                        <div style="padding: 20px;">
                            <div
                                style="background-color: #ffb6b9; width: 60px; height: 60px; border-radius: 10px; display: flex; justify-content: center; align-items: center; margin-bottom: 15px;">
                                <img src="{{ asset('constra/images/icon/mother.png') }}" alt="PHBS Icon"
                                    style="width: 35px;">
                            </div>
                            <h3 style="font-size: 20px; margin-bottom: 15px;">Workshop PHBS (Perilaku Hidup Bersih dan
                                Sehat)</h3>
                            <p style="color: #666; margin-bottom: 20px;">Belajar praktik hidup bersih dan sehat untuk
                                meningkatkan kualitas hidup keluarga dan mencegah berbagai penyakit.</p>
                            <div style="display: flex; align-items: center; margin-bottom: 15px;">
                                <img src="{{ asset('constra/images/icon/clock.png') }}" alt="Duration"
                                    style="width: 20px; margin-right: 10px;">
                                <span style="color: #777;">1-2 jam</span>
                            </div>
                            <button onclick="showContent('hidup-sehat')" class="btn btn-primary"
                                style="background-color: #6878df; border: none; padding: 8px 20px; border-radius: 5px;">Mulai
                                Belajar</button>
                        </div>
                    </div>
                </div>

                <!-- Workshop Card 2 -->
                <div class="col-md-4">
                    <div class="workshop-card"
                        style="background-color: #fff; border-radius: 10px; box-shadow: 0 0 15px rgba(0,0,0,0.1); overflow: hidden; margin-bottom: 30px; height: 100%;">
                        <div style="padding: 20px;">
                            <div
                                style="background-color: #61c0bf; width: 60px; height: 60px; border-radius: 10px; display: flex; justify-content: center; align-items: center; margin-bottom: 15px;">
                                <img src="{{ asset('constra/images/icon/recycle.png') }}" alt="Waste Management Icon"
                                    style="width: 35px;">
                            </div>
                            <h3 style="font-size: 20px; margin-bottom: 15px;">Pengelolaan Sampah Limbah Rumah Tangga</h3>
                            <p style="color: #666; margin-bottom: 20px;">Teknik praktis mengelola sampah rumah tangga untuk
                                lingkungan yang lebih bersih dan berkelanjutan.</p>
                            <div style="display: flex; align-items: center; margin-bottom: 15px;">
                                <img src="{{ asset('constra/images/icon/clock.png') }}" alt="Duration"
                                    style="width: 20px; margin-right: 10px;">
                                <span style="color: #777;">1-2 jam</span>
                            </div>
                            <button onclick="showContent('pengolahan-sampah')" class="btn btn-success"
                                style="background-color: #42b883; border: none; padding: 8px 20px; border-radius: 5px;">Pelajari
                                Sekarang</button>
                        </div>
                    </div>
                </div>

                <!-- Workshop Card 3 -->
                <div class="col-md-4">
                    <div class="workshop-card"
                        style="background-color: #fff; border-radius: 10px; box-shadow: 0 0 15px rgba(0,0,0,0.1); overflow: hidden; margin-bottom: 30px; height: 100%;">
                        <div style="padding: 20px;">
                            <div
                                style="background-color: #ffd66b; width: 60px; height: 60px; border-radius: 10px; display: flex; justify-content: center; align-items: center; margin-bottom: 15px;">
                                <img src="{{ asset('constra/images/icon/money-management.png') }}"
                                    alt="Money Management Icon" style="width: 35px;">
                            </div>
                            <h3 style="font-size: 20px; margin-bottom: 15px;">Manajemen Keuangan Rumah Tangga</h3>
                            <p style="color: #666; margin-bottom: 20px;">Belajar mengelola keuangan keluarga, investasi
                                bijak, mulai dari tabungan hingga investasi sederhana.</p>
                            <div style="display: flex; align-items: center; margin-bottom: 15px;">
                                <img src="{{ asset('constra/images/icon/clock.png') }}" alt="Duration"
                                    style="width: 20px; margin-right: 10px;">
                                <span style="color: #777;">1-2 jam</span>
                            </div>
                            <button class="btn btn-success"
                                style="background-color: #42b883; border: none; padding: 8px 20px; border-radius: 5px;"
                                disabled>Segera Hadir</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="gap-40"></div>

            <!-- Content Sections (Hidden initially, shown when buttons are clicked) -->
            <div class="row">
                <div class="col-lg-12">
                    <!-- Hidup Sehat Content Section -->
                    <div id="hidup-sehat-content" class="content-section" style="display: none;">
                        <div class="content-header"
                            style="background-color: #f1f8ff; padding: 15px; border-radius: 10px; margin-bottom: 20px;">
                            <h3><i class="fa fa-chevron-left" onclick="hideContent('hidup-sehat')"
                                    style="cursor: pointer; margin-right: 10px;"></i> Perilaku Hidup Bersih dan Sehat (PHBS)
                            </h3>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="ts-service-box">
                                            <div class="ts-service-image-wrapper">
                                                <img class="img-responsive" src="https://via.placeholder.com/650x400"
                                                    alt="Pola Makan Sehat">
                                            </div>
                                            <div class="ts-service-box-info">
                                                <h3 class="service-box-title">Pola Makan Sehat</h3>
                                                <p>Pola makan yang seimbang sangat penting untuk menjaga kesehatan tubuh.
                                                    Konsumsilah makanan yang mengandung karbohidrat, protein, lemak,
                                                    vitamin, dan mineral sesuai dengan kebutuhan tubuh.</p>
                                                <ul class="list-arrow">
                                                    <li>Konsumsi sayuran dan buah-buahan setiap hari</li>
                                                    <li>Batasi konsumsi gula, garam, dan lemak</li>
                                                    <li>Minum air putih minimal 8 gelas per hari</li>
                                                    <li>Makan secara teratur dengan porsi yang sesuai</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="ts-service-box">
                                            <div class="ts-service-image-wrapper">
                                                <img class="img-responsive" src="https://via.placeholder.com/650x400"
                                                    alt="Kebersihan Diri">
                                            </div>
                                            <div class="ts-service-box-info">
                                                <h3 class="service-box-title">Kebersihan Diri dan Lingkungan</h3>
                                                <p>Menjaga kebersihan diri dan lingkungan adalah kunci untuk mencegah
                                                    penyebaran penyakit dan infeksi.</p>
                                                <ul class="list-arrow">
                                                    <li>Cuci tangan dengan sabun secara teratur</li>
                                                    <li>Mandi dua kali sehari</li>
                                                    <li>Menjaga kebersihan gigi dan mulut</li>
                                                    <li>Membersihkan rumah dan halaman secara teratur</li>
                                                    <li>Membuang sampah pada tempatnya</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="gap-30"></div>

                                <div class="text-center">
                                    <button onclick="hideContent('hidup-sehat')" class="btn btn-primary">Kembali ke
                                        Workshop</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Pengolahan Sampah Content Section -->
                    <div id="pengolahan-sampah-content" class="content-section" style="display: none;">
                        <div class="content-header"
                            style="background-color: #f1f8ff; padding: 15px; border-radius: 10px; margin-bottom: 20px;">
                            <h3><i class="fa fa-chevron-left" onclick="hideContent('pengolahan-sampah')"
                                    style="cursor: pointer; margin-right: 10px;"></i> Pengolahan Limbah Sampah</h3>
                        </div>

                        <!-- Materi Pengolahan Sampah -->
                        <div class="row">
                            <div class="col-md-6">
                                <div class="ts-service-box">
                                    <div class="ts-service-image-wrapper">
                                        <img class="img-responsive" src="https://via.placeholder.com/650x400"
                                            alt="Pemilahan Sampah">
                                    </div>
                                    <div class="ts-service-box-info">
                                        <h3 class="service-box-title">Pemilahan Sampah</h3>
                                        <p>Pemilahan sampah adalah langkah awal yang penting dalam pengelolaan sampah.
                                            Dengan memilah sampah, kita dapat memaksimalkan daur ulang dan mengurangi
                                            jumlah sampah yang berakhir di TPA.</p>
                                        <p>Jenis-jenis sampah yang perlu dipisahkan:</p>
                                        <ul class="list-arrow">
                                            <li>Sampah organik (sisa makanan, daun, dll)</li>
                                            <li>Sampah anorganik (plastik, kertas, kaca, logam)</li>
                                            <li>Sampah B3 (baterai, lampu, elektronik)</li>
                                        </ul>
                                        <p>Siapkan tempat sampah terpisah untuk setiap jenis sampah di rumah Anda.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="ts-service-box">
                                    <div class="ts-service-image-wrapper">
                                        <img class="img-responsive" src="https://via.placeholder.com/650x400"
                                            alt="Komposting">
                                    </div>
                                    <div class="ts-service-box-info">
                                        <h3 class="service-box-title">Pembuatan Kompos</h3>
                                        <p>Komposting adalah cara alami untuk mengolah sampah organik menjadi pupuk yang
                                            bermanfaat untuk tanaman.</p>
                                        <p>Langkah-langkah membuat kompos:</p>
                                        <ul class="list-arrow">
                                            <li>Siapkan wadah kompos (bisa dari ember bekas atau peti kayu)</li>
                                            <li>Masukkan sampah organik seperti sisa sayuran, buah, dan daun kering</li>
                                            <li>Tambahkan sedikit tanah atau kompos jadi sebagai aktivator</li>
                                            <li>Aduk secara berkala dan jaga kelembapannya</li>
                                            <li>Setelah 2-3 bulan, kompos siap digunakan</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="gap-40"></div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="ts-service-box">
                                    <div class="ts-service-image-wrapper">
                                        <img class="img-responsive" src="https://via.placeholder.com/650x400"
                                            alt="Kerajinan Daur Ulang">
                                    </div>
                                    <div class="ts-service-box-info">
                                        <h3 class="service-box-title">Kerajinan Daur Ulang</h3>
                                        <p>Sampah anorganik seperti plastik, kertas, dan kain bekas dapat diubah menjadi
                                            berbagai kerajinan yang bernilai dan bermanfaat.</p>
                                        <p>Contoh kerajinan dari bahan daur ulang:</p>
                                        <ul class="list-arrow">
                                            <li>Pot tanaman dari botol plastik bekas</li>
                                            <li>Tempat pensil dari kaleng bekas</li>
                                            <li>Tas dari bungkus kopi atau kemasan plastik</li>
                                            <li>Hiasan dinding dari kardus bekas</li>
                                            <li>Keset dari kain perca</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="ts-service-box">
                                    <div class="ts-service-image-wrapper">
                                        <img class="img-responsive" src="https://via.placeholder.com/650x400"
                                            alt="Bank Sampah">
                                    </div>
                                    <div class="ts-service-box-info">
                                        <h3 class="service-box-title">Bank Sampah</h3>
                                        <p>Bank sampah adalah sistem pengelolaan sampah yang mendorong masyarakat untuk
                                            aktif dalam pengolahan sampah dengan prinsip ekonomi.</p>
                                        <p>Manfaat bank sampah:</p>
                                        <ul class="list-arrow">
                                            <li>Mengurangi sampah yang dibuang ke TPA</li>
                                            <li>Menghasilkan pendapatan tambahan dari sampah yang dapat didaur ulang
                                            </li>
                                            <li>Meningkatkan kesadaran masyarakat tentang pengelolaan sampah</li>
                                            <li>Menciptakan lingkungan yang lebih bersih dan sehat</li>
                                        </ul>
                                        <p>Mari berpartisipasi dalam program bank sampah di desa kita!</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="gap-30"></div>

                        <div class="text-center">
                            <button onclick="hideContent('pengolahan-sampah')" class="btn btn-success">Kembali ke
                                Workshop</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="gap-40"></div>

            <!-- Call to Action -->
            <div class="row">
                <div class="col-md-12">
                    <div class="call-to-action text-center">
                        <h3>Mari Bersama Wujudkan Desa Mancagar yang Sehat dan Bersih!</h3>
                        <p>Terapkan pola hidup sehat dan kelola sampah dengan bijak untuk masa depan yang lebih baik.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- JavaScript for Content Toggle -->
    <script>
        function showContent(contentId) {
            // Hide all content sections first
            document.querySelectorAll('.content-section').forEach(function(section) {
                section.style.display = 'none';
            });

            // Show the selected content section
            document.getElementById(contentId + '-content').style.display = 'block';

            // Scroll to content
            document.getElementById(contentId + '-content').scrollIntoView({
                behavior: 'smooth'
            });
        }

        function hideContent(contentId) {
            // Hide the content section
            document.getElementById(contentId + '-content').style.display = 'none';

            // Scroll back to cards
            document.querySelector('.workshop-card').scrollIntoView({
                behavior: 'smooth'
            });
        }
    </script>
@endsection
