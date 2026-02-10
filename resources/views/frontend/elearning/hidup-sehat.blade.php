@extends('constra_template.master')

@section('title', 'PHBS - Perilaku Hidup Bersih dan Sehat')

@section('content')
    <section id="main-container" class="main-container">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="article-header"
                        style="background: linear-gradient(135deg, #6fa8dc, #76d7c4); padding: 30px 20px; border-radius: 10px; text-align: center; margin-bottom: 40px; color: #fff;">
                        <img src="{{ asset('constra/images/icon/healthcare.png') }}" alt="PHBS Icon"
                            style="width: 60px; margin-bottom: 10px; background-color: #ffb6b9; padding: 10px; border-radius: 10px;">
                        <h2 class="title">Perilaku Hidup Bersih dan Sehat (PHBS)</h2>
                        <p style="font-size: 18px;">Workshop Kesehatan dan Kebersihan untuk Keluarga</p>
                    </div>
                </div>
            </div>

            <!-- Article Navigation -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="article-nav" style="margin-bottom: 30px;">
                        <a href="{{ url('/e-learning') }}" class="btn btn-primary" style="margin-right: 10px;">
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
                        <p>Perilaku Hidup Bersih dan Sehat (PHBS) adalah sekumpulan perilaku yang dipraktikkan atas dasar
                            kesadaran sebagai hasil pembelajaran, yang menjadikan seseorang, keluarga, kelompok atau
                            masyarakat mampu menolong dirinya sendiri (mandiri) di bidang kesehatan dan berperan aktif dalam
                            mewujudkan kesehatan masyarakat.</p>
                        <p>Dengan menerapkan PHBS, kita dapat mencegah berbagai penyakit dan meningkatkan kualitas hidup
                            seluruh anggota keluarga.</p>
                    </div>
                </div>
            </div>

            <!-- Main Content -->
            <div class="row">
                <!-- Left Column -->
                <div class="col-md-6">
                    <div class="ts-service-box">

                        <div class="ts-service-box-info">
                            <h3 class="service-box-title">Pola Makan Sehat</h3>
                            <p>Pola makan yang seimbang sangat penting untuk menjaga kesehatan tubuh. Konsumsilah makanan
                                yang mengandung karbohidrat, protein, lemak, vitamin, dan mineral sesuai dengan kebutuhan
                                tubuh.</p>
                            <h4>Prinsip Pola Makan Sehat:</h4>
                            <ul class="list-arrow">
                                <li>Konsumsi sayuran dan buah-buahan setiap hari</li>
                                <li>Batasi konsumsi gula, garam, dan lemak</li>
                                <li>Minum air putih minimal 8 gelas per hari</li>
                                <li>Makan secara teratur dengan porsi yang sesuai</li>
                            </ul>
                            <p>Pola makan sehat juga mencakup cara pengolahan makanan yang benar dan higienis. Pastikan
                                makanan dimasak hingga matang sempurna dan disimpan dengan tepat untuk menghindari
                                kontaminasi bakteri.</p>
                        </div>
                    </div>

                    <div class="gap-30"></div>

                    <div class="ts-service-box">

                        <div class="ts-service-box-info">
                            <h3 class="service-box-title">Aktivitas Fisik</h3>
                            <p>Aktivitas fisik secara teratur penting untuk menjaga kesehatan tubuh dan mencegah berbagai
                                penyakit.</p>
                            <h4>Manfaat Aktivitas Fisik:</h4>
                            <ul class="list-arrow">
                                <li>Menjaga berat badan ideal</li>
                                <li>Menguatkan jantung dan paru-paru</li>
                                <li>Mencegah penyakit degeneratif seperti diabetes dan hipertensi</li>
                                <li>Meningkatkan mood dan mengurangi stres</li>
                            </ul>
                            <p>Lakukan aktivitas fisik minimal 30 menit setiap hari. Aktivitas ini bisa berupa olahraga,
                                berkebun, membersihkan rumah, atau sekadar berjalan kaki.</p>
                        </div>
                    </div>
                </div>

                <!-- Right Column -->
                <div class="col-md-6">
                    <div class="ts-service-box">
                        <div class="ts-service-box-info">
                            <h3 class="service-box-title">Kebersihan Diri dan Lingkungan</h3>
                            <p>Menjaga kebersihan diri dan lingkungan adalah kunci untuk mencegah penyebaran penyakit dan
                                infeksi.</p>
                            <h4>Praktik Kebersihan Diri:</h4>
                            <ul class="list-arrow">
                                <li>Cuci tangan dengan sabun dan air mengalir selama 20 detik, terutama sebelum makan,
                                    setelah menggunakan toilet, dan setelah beraktivitas di luar rumah</li>
                                <li>Mandi dua kali sehari dengan sabun</li>
                                <li>Menjaga kebersihan gigi dan mulut dengan menyikat gigi minimal dua kali sehari</li>
                                <li>Membersihkan rumah dan halaman secara teratur</li>
                                <li>Membuang sampah pada tempatnya dan memilah sampah</li>
                            </ul>
                            <p>Lingkungan yang bersih dan sehat akan mencegah berkembangbiaknya vektor penyakit seperti
                                nyamuk, lalat, dan tikus.</p>
                        </div>
                    </div>

                    <div class="gap-30"></div>

                    <div class="ts-service-box">
                        <div class="ts-service-box-info">
                            <h3 class="service-box-title">Stop Merokok dan Menghindari Asap Rokok</h3>
                            <p>Merokok tidak hanya membahayakan perokok tetapi juga orang-orang di sekitarnya melalui
                                paparan asap rokok (perokok pasif).</p>
                            <h4>Bahaya Merokok:</h4>
                            <ul class="list-arrow">
                                <li>Meningkatkan risiko penyakit jantung dan pembuluh darah</li>
                                <li>Menyebabkan berbagai jenis kanker, terutama kanker paru-paru</li>
                                <li>Menyebabkan gangguan pernapasan dan penyakit paru obstruktif kronik (PPOK)</li>
                                <li>Menurunkan daya tahan tubuh</li>
                            </ul>
                            <p>Berhenti merokok akan meningkatkan kualitas hidup dan memberikan manfaat kesehatan yang
                                signifikan dalam jangka pendek maupun jangka panjang.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="gap-40"></div>

            <!-- Pendahuluan: Pentingnya Kebiasaan Mencuci Tangan -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="article-intro"
                        style="background-color: #f8f9fa; border-radius: 10px; padding: 25px; margin-bottom: 30px;">
                        <h3>Pentingnya Kebiasaan Mencuci Tangan</h3>
                        <p>Warga Desa Mancagar yang saya hormati, seringkali kita tidak sadar bahwa banyak penyakit menular
                            berasal dari tangan kita sendiri. Tangan yang terlihat bersih pun bisa menjadi sarang kuman.
                            Membiasakan mencuci tangan adalah cara paling sederhana, efektif, dan murah untuk menjaga
                            kesehatan keluarga kita. Ini bukan sekadar kebiasaan, tetapi investasi besar untuk masa depan
                            yang lebih sehat.</p>
                        <div class="row text-center mt-4">
                            <div class="col-md-4">
                                <h5><i class="fa fa-bug"></i> Awal Penyakit Menular</h5>
                                <p>Banyak penyakit menular berasal dari tangan yang kotor.</p>
                            </div>
                            <div class="col-md-4">
                                <h5><i class="fa fa-hand-paper-o"></i> Sering Lupa</h5>
                                <p>Anak-anak dan orang dewasa sering lupa cuci tangan sebelum makan.</p>
                            </div>
                            <div class="col-md-4">
                                <h5><i class="fa fa-users"></i> Jaga Kesehatan Keluarga</h5>
                                <p>Membiasakan cuci tangan adalah cara sederhana menjaga kesehatan.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Tujuan Program -->
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="border-bottom-title">Tujuan Program Kita Bersama</h3>
                </div>
                <div class="col-md-3">
                    <div class="ts-service-box text-center">
                        <span class="ts-service-icon icon-round"><i class="fa fa-bullhorn"></i></span>
                        <div class="ts-service-box-content">
                            <h4>Tingkatkan Kesadaran</h4>
                            <p>Meningkatkan kesadaran akan pentingnya cuci tangan bagi kesehatan.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="ts-service-box text-center">
                        <span class="ts-service-icon icon-round"><i class="fa fa-heartbeat"></i></span>
                        <div class="ts-service-box-content">
                            <h4>Bentuk Kebiasaan Sehat</h4>
                            <p>Membentuk kebiasaan sehat di setiap keluarga untuk diterapkan sehari-hari.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="ts-service-box text-center">
                        <span class="ts-service-icon icon-round"><i class="fa fa-shield"></i></span>
                        <div class="ts-service-box-content">
                            <h4>Cegah Penyakit Menular</h4>
                            <p>Mencegah penyebaran penyakit seperti diare, flu, dan batuk.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="ts-service-box text-center">
                        <span class="ts-service-icon icon-round"><i class="fa fa-child"></i></span>
                        <div class="ts-service-box-content">
                            <h4>Edukasi Anak Sejak Dini</h4>
                            <p>Membiasakan anak-anak untuk rajin mencuci tangan sejak usia dini.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="gap-40"></div>

            <!-- Waktu Penting & 7 Langkah Cuci Tangan -->
            <div class="row">
                <!-- Kiri: Waktu Penting -->
                <div class="col-md-6">
                    <h3 class="border-bottom-title">Kapan Waktu Penting Cuci Tangan?</h3>
                    <ul class="list-arrow">
                        <li><strong>Sebelum & Sesudah Makan:</strong> Pastikan tangan bersih saat makanan masuk ke mulut.
                        </li>
                        <li><strong>Setelah dari Toilet:</strong> Ini adalah aturan dasar kebersihan pribadi yang wajib.
                        </li>
                        <li><strong>Setelah Bermain/Bekerja:</strong> Terutama jika menyentuh benda kotor atau hewan.</li>
                        <li><strong>Setelah Batuk atau Bersin:</strong> Cegah penyebaran kuman dari diri kita.</li>
                        <li><strong>Sebelum Menyentuh Bayi/Orang Sakit:</strong> Lindungi mereka yang rentan dari kuman.
                        </li>
                    </ul>
                    <div class="quote-item quote-border" style="margin-top: 50px;">
                        <div class="quote-text-border">
                            Dengan mencuci tangan menggunakan sabun, kita dapat menurunkan risiko diare hingga
                            <strong>40%</strong>.
                        </div>
                        <div class="quote-item-footer">
                            <div class="quote-item-info">
                                <h3 class="quote-author">Fakta Kesehatan</h3>
                                <span class="quote-subtext">Penelitian Ilmiah</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Kanan: 7 Langkah Cuci Tangan -->
                <div class="col-md-6">
                    <h3 class="border-bottom-title">7 Langkah Cuci Tangan yang Benar</h3>
                    <p>Ikuti 7 langkah mudah ini agar kuman benar-benar hilang dari tangan kita.</p>
                    <ol>
                        <li>Basahi tangan dengan air bersih mengalir.</li>
                        <li>Gunakan sabun secukupnya dan gosok kedua telapak tangan.</li>
                        <li>Gosok punggung tangan secara bergantian.</li>
                        <li>Bersihkan sela-sela jari dengan baik.</li>
                        <li>Bersihkan kuku dan ujung jari secara menyeluruh.</li>
                        <li>Bilas tangan hingga bersih dari sabun.</li>
                        <li>Keringkan tangan dengan handuk bersih atau diangin-anginkan.</li>
                    </ol>
                    <!-- Anda bisa mengganti placeholder ini dengan gambar 7 langkah cuci tangan -->
                    <img src="{{ asset('constra/images/konten/7-langkah-cuci-tangan.png') }}" alt="7 Langkah Cuci Tangan"
                        class="img-responsive" style="border-radius: 10px;">
                </div>
            </div>

            <div class="gap-40"></div>

            <!-- Tantangan & Solusi -->
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="border-bottom-title">Tantangan & Solusi di Desa Kita</h3>
                </div>
                <div class="col-md-6">
                    <div class="panel panel-danger">
                        <div class="panel-heading">
                            <h3 class="panel-title"><i class="fa fa-exclamation-triangle"></i> Tantangan</h3>
                        </div>
                        <div class="panel-body">
                            <ul class="list-arrow">
                                <li>Masih ada warga yang menganggap cuci tangan itu "ribet" atau merepotkan.</li>
                                <li>Ketersediaan air bersih dan sabun kadang menjadi kendala di beberapa wilayah.</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="panel panel-success">
                        <div class="panel-heading">
                            <h3 class="panel-title"><i class="fa fa-lightbulb-o"></i> Solusi</h3>
                        </div>
                        <div class="panel-body">
                            <ul class="list-arrow">
                                <li>Terus lakukan edukasi yang menyenangkan dan mudah dimengerti.</li>
                                <li>Ayo berkreasi! Sediakan sabun sederhana atau buat sendiri dari bahan alami.</li>
                                <li>Bangun tempat cuci tangan bersama di lingkungan RT atau tempat umum.</li>
                            </ul>
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
                            <h3 class="panel-title">Quiz PHBS - Tes Pengetahuan Anda!</h3>
                        </div>
                        <div class="panel-body">
                            <p>Uji pemahaman Anda tentang Perilaku Hidup Bersih dan Sehat dengan menjawab
                                pertanyaan-pertanyaan berikut:</p>

                            <form id="phbsQuiz">
                                <!-- Question 1 -->
                                <div class="quiz-question">
                                    <h4>1. Berapa gelas air putih minimal yang harus diminum setiap hari?</h4>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="question1" value="a">
                                            a) 4 gelas
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="question1" value="b">
                                            b) 6 gelas
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="question1" value="c">
                                            c) 8 gelas
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="question1" value="d">
                                            d) 10 gelas
                                        </label>
                                    </div>
                                </div>

                                <!-- Question 2 -->
                                <div class="quiz-question">
                                    <h4>2. Berapa lama waktu minimal yang direkomendasikan untuk mencuci tangan dengan
                                        sabun?</h4>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="question2" value="a">
                                            a) 10 detik
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="question2" value="b">
                                            b) 20 detik
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="question2" value="c">
                                            c) 30 detik
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="question2" value="d">
                                            d) 1 menit
                                        </label>
                                    </div>
                                </div>

                                <!-- Question 3 -->
                                <div class="quiz-question">
                                    <h4>3. Salah satu prinsip pola makan sehat adalah:</h4>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="question3" value="a">
                                            a) Makan dalam porsi besar sekali sehari
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="question3" value="b">
                                            b) Konsumsi makanan cepat saji untuk efisiensi
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="question3" value="c">
                                            c) Konsumsi sayuran dan buah-buahan setiap hari
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="question3" value="d">
                                            d) Hindari sarapan untuk menghemat energi
                                        </label>
                                    </div>
                                </div>

                                <!-- Question 4 -->
                                <div class="quiz-question">
                                    <h4>4. Kapan waktu terbaik untuk menyikat gigi?</h4>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="question4" value="a">
                                            a) Setelah bangun tidur dan sebelum tidur
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="question4" value="b">
                                            b) Saat mandi pagi dan sore
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="question4" value="c">
                                            c) Sebelum sarapan dan setelah makan siang
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="question4" value="d">
                                            d) Cukup sekali sehari di pagi hari
                                        </label>
                                    </div>
                                </div>

                                <!-- Question 5 -->
                                <div class="quiz-question">
                                    <h4>5. Berapa lama minimal aktivitas fisik yang direkomendasikan setiap hari?</h4>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="question5" value="a">
                                            a) 10 menit
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="question5" value="b">
                                            b) 20 menit
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="question5" value="c">
                                            c) 30 menit
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="question5" value="d">
                                            d) 60 menit
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
                                        question1: "c",
                                        question2: "b",
                                        question3: "c",
                                        question4: "a",
                                        question5: "c"
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
                                                <br>Anda memiliki pemahaman yang sangat baik tentang PHBS!
                                            </div>`;
                                        } else if (percentage >= 60) {
                                            resultHTML = `<div class="alert alert-info">
                                                <strong>Cukup Baik!</strong> Anda menjawab ${score} dari ${total} pertanyaan dengan benar (${percentage}%).
                                                <br>Anda memiliki pemahaman dasar yang baik tentang PHBS, namun masih ada yang perlu dipelajari.
                                            </div>`;
                                        } else {
                                            resultHTML = `<div class="alert alert-warning">
                                                <strong>Terus Belajar!</strong> Anda menjawab ${score} dari ${total} pertanyaan dengan benar (${percentage}%).
                                                <br>Anda perlu mempelajari lebih lanjut tentang PHBS. Silakan baca kembali materinya.
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
                                        document.getElementById('phbsQuiz').reset();
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
                    <div class="article-footer text-center" style="margin-top: 30px;">
                        <a href="{{ url('/e-learning') }}" class="btn btn-primary">Kembali ke E-Learning</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
