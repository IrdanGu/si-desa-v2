@extends('constra_template.master')

@section('title', 'Manajemen Keuangan Cerdas untuk Keluarga')

@section('content')
    <section id="main-container" class="main-container">
        <div class="container">
            <!-- Header Halaman -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="article-header"
                        style="background: linear-gradient(135deg, #5dade2, #58d68d); padding: 30px 20px; border-radius: 10px; text-align: center; margin-bottom: 40px; color: #fff;">
                        <img src="{{ asset('constra/images/icon/money.png') }}" alt="Financial Icon"
                            style="width: 60px; margin-bottom: 10px; background-color: #ffffff; padding: 10px; border-radius: 50%;">
                        <h2 class="title">Manajemen Keuangan Cerdas untuk Rumah Tangga</h2>
                        <p style="font-size: 18px;">Kunci Kesejahteraan dan Keberlanjutan Ekonomi Keluarga</p>
                    </div>
                </div>
            </div>

            <!-- Tombol Navigasi Kembali -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="article-nav" style="margin-bottom: 30px;">
                        <a href="{{ route('elearning.index') }}" class="btn btn-primary" style="margin-right: 10px;">
                            <i class="fa fa-chevron-left"></i> Kembali ke E-Learning
                        </a>
                    </div>
                </div>
            </div>

            <!-- Latar Belakang Masalah -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="article-intro"
                        style="background-color: #f8f9fa; border-radius: 10px; padding: 25px; margin-bottom: 30px;">
                        <h3>Tantangan Keuangan Keluarga</h3>
                        <p>Banyak keluarga menghadapi tantangan besar dalam mengelola keuangan. Hal yang umum terjadi adalah
                            tercampurnya keuangan untuk kebutuhan rumah tangga dengan keuangan usaha (jika ada), yang
                            menyebabkan kebingungan dan arus kas yang tidak jelas. Ditambah lagi, minimnya pencatatan
                            membuat kita sulit mengetahui kondisi keuangan secara akurat dan merencanakan masa depan dengan
                            baik.</p>
                        <p>Materi ini bertujuan agar kita dapat mengelola keuangan dengan lebih sehat, terukur, dan
                            berkelanjutan untuk kesejahteraan keluarga.</p>
                    </div>
                </div>
            </div>

            <!-- Tiga Prinsip Dasar -->
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="border-bottom-title">Tiga Prinsip Dasar Manajemen Keuangan</h3>
                </div>
                <div class="col-md-4">
                    <div class="ts-service-box text-center">
                        <span class="ts-service-icon icon-round"><i class="fa fa-exchange"></i></span>
                        <div class="ts-service-box-content">
                            <h4>1. Pemisahan Keuangan</h4>
                            <p>Pisahkan rekening atau dompet untuk kebutuhan rumah tangga dengan keuangan usaha. Ini membuat
                                arus kas lebih jelas dan pengelolaan lebih mudah.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="ts-service-box text-center">
                        <span class="ts-service-icon icon-round"><i class="fa fa-book"></i></span>
                        <div class="ts-service-box-content">
                            <h4>2. Pencatatan Sederhana</h4>
                            <p>Catat semua pemasukan dan pengeluaran secara rutin, bisa menggunakan buku kas sederhana atau
                                aplikasi digital, agar tidak ada uang yang hilang tanpa jejak.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="ts-service-box text-center">
                        <span class="ts-service-icon icon-round"><i class="fa fa-bank"></i></span>
                        <div class="ts-service-box-content">
                            <h4>3. Disiplin Menabung</h4>
                            <p>Sisihkan sebagian pendapatan di awal untuk tabungan. Ini penting untuk dana cadangan,
                                kebutuhan darurat, dan mencapai tujuan jangka panjang.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="gap-40"></div>

            <!-- Strategi Praktis -->
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="border-bottom-title">Strategi Praktis untuk Keluarga</h3>

                    <!-- Accordion -->
                    <div class="panel-group" id="accordion">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                        <i class="fa fa-calculator"></i> Perencanaan Anggaran Bulanan
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseOne" class="panel-collapse collapse in">
                                <div class="panel-body">
                                    <p>Perencanaan adalah kunci. Sebelum bulan dimulai, buatlah daftar:</p>
                                    <ul>
                                        <li><strong>Sumber Pemasukan:</strong> Catat semua sumber pendapatan (gaji, hasil
                                            usaha, dll).</li>
                                        <li><strong>Pengeluaran Wajib:</strong> Alokasikan dana untuk kebutuhan pokok
                                            seperti makan, listrik, air, cicilan, dan biaya sekolah.</li>
                                        <li><strong>Tabungan & Dana Darurat:</strong> Sisihkan minimal 10% dari pendapatan
                                            untuk pos ini.</li>
                                        <li><strong>Pengeluaran Sekunder:</strong> Sisa dana bisa dialokasikan untuk hiburan
                                            atau keinginan, namun tetap terkontrol.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo"
                                        class="collapsed">
                                        <i class="fa fa-money"></i> Pengelolaan Laba Usaha (Jika Ada)
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseTwo" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <p>Jika keluarga memiliki usaha sampingan, kelola keuntungannya dengan bijak:</p>
                                    <ul>
                                        <li><strong>Setorkan untuk Tabungan Modal:</strong> Sisihkan sebagian laba secara
                                            rutin untuk pengembangan usaha di masa depan tanpa harus berutang.</li>
                                        <li><strong>Reinvestasikan ke Dalam Usaha:</strong> Gunakan sebagian keuntungan
                                            untuk menambah kapasitas produksi atau meningkatkan kualitas produk.</li>
                                        <li><strong>Sediakan Dana Cadangan:</strong> Dana ini penting untuk menghadapi
                                            risiko tak terduga seperti penurunan penjualan atau kerusakan alat.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree"
                                        class="collapsed">
                                        <i class="fa fa-shield"></i> Strategi Mengendalikan Biaya
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseThree" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <p>Mengelola pengeluaran sama pentingnya dengan mencari pemasukan:</p>
                                    <ul>
                                        <li><strong>Tekan Biaya Tidak Perlu:</strong> Evaluasi pengeluaran bulanan dan
                                            kurangi pos-pos yang tidak esensial.</li>
                                        <li><strong>Belanja Cerdas:</strong> Manfaatkan diskon, beli barang dalam jumlah
                                            besar untuk harga lebih murah, dan bandingkan harga sebelum membeli.</li>
                                        <li><strong>Manfaatkan Sumber Daya:</strong> Olah bahan sisa menjadi sesuatu yang
                                            bernilai, contohnya mengubah minyak jelantah menjadi sabun atau lilin untuk
                                            mengurangi limbah sekaligus potensi pengeluaran.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div><!--/ Accordion end -->
                </div>
            </div>



            <!-- Quiz Section -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">Quiz Manajemen Keuangan - Tes Pengetahuan Anda!</h3>
                        </div>
                        <div class="panel-body">
                            <p>Uji pemahaman Anda tentang manajemen keuangan dengan menjawab pertanyaan-pertanyaan berikut:
                            </p>

                            <form id="keuanganQuiz">
                                <!-- Question 1 -->
                                <div class="quiz-question">
                                    <h4>1. Apa yang dimaksud dengan anggaran keuangan?</h4>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="question1" value="a">
                                            a) Jumlah uang yang Anda miliki
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="question1" value="b">
                                            b) Rencana pengelolaan pendapatan dan pengeluaran dalam periode tertentu
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="question1" value="c">
                                            c) Laporan keuangan tahunan
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="question1" value="d">
                                            d) Uang yang diinvestasikan
                                        </label>
                                    </div>
                                </div>

                                <!-- Question 2 -->
                                <div class="quiz-question">
                                    <h4>2. Apa yang dimaksud dengan dana darurat?</h4>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="question2" value="a">
                                            a) Dana untuk keperluan liburan
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="question2" value="b">
                                            b) Dana untuk belanja bulanan
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="question2" value="c">
                                            c) Dana yang disisihkan untuk kebutuhan mendesak dan tidak terduga
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="question2" value="d">
                                            d) Dana untuk investasi jangka panjang
                                        </label>
                                    </div>
                                </div>

                                <!-- Question 3 -->
                                <div class="quiz-question">
                                    <h4>3. Manakah pernyataan berikut yang paling benar tentang menabung?</h4>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="question3" value="a">
                                            a) Menabung hanya diperlukan saat memiliki kelebihan uang
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="question3" value="b">
                                            b) Menabung sebaiknya dilakukan secara rutin dari pendapatan yang diterima
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="question3" value="c">
                                            c) Menabung hanya perlu dilakukan oleh orang dewasa
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="question3" value="d">
                                            d) Menabung tidak perlu jika pendapatan sudah tinggi
                                        </label>
                                    </div>
                                </div>

                                <!-- Question 4 -->
                                <div class="quiz-question">
                                    <h4>4. Cara terbaik untuk mengelola utang adalah:</h4>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="question4" value="a">
                                            a) Meminjam sebanyak mungkin selagi masih diberikan kredit
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="question4" value="b">
                                            b) Membayar tagihan minimum saja
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="question4" value="c">
                                            c) Membayar utang dengan utang baru
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="question4" value="d">
                                            d) Memprioritaskan pelunasan utang dengan bunga tertinggi
                                        </label>
                                    </div>
                                </div>

                                <!-- Question 5 -->
                                <div class="quiz-question">
                                    <h4>5. Apa itu literasi keuangan?</h4>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="question5" value="a">
                                            a) Kemampuan untuk membaca laporan keuangan perusahaan
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="question5" value="b">
                                            b) Kemampuan memahami dan mengelola keuangan secara efektif
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="question5" value="c">
                                            c) Kemampuan untuk mendapatkan pinjaman dengan mudah
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="question5" value="d">
                                            d) Kemampuan untuk mendapatkan keuntungan dari investasi
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
                                        question2: "c",
                                        question3: "b",
                                        question4: "d",
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
                                                <br>Anda memiliki pemahaman yang sangat baik tentang manajemen keuangan!
                                            </div>`;
                                        } else if (percentage >= 60) {
                                            resultHTML = `<div class="alert alert-info">
                                                <strong>Cukup Baik!</strong> Anda menjawab ${score} dari ${total} pertanyaan dengan benar (${percentage}%).
                                                <br>Anda memiliki pemahaman dasar yang baik tentang manajemen keuangan, namun masih ada yang perlu dipelajari.
                                            </div>`;
                                        } else {
                                            resultHTML = `<div class="alert alert-warning">
                                                <strong>Terus Belajar!</strong> Anda menjawab ${score} dari ${total} pertanyaan dengan benar (${percentage}%).
                                                <br>Anda perlu mempelajari lebih lanjut tentang manajemen keuangan. Silakan baca kembali materinya.
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
                                        document.getElementById('keuanganQuiz').reset();
                                        document.getElementById('quizResult').style.display = 'none';
                                    });
                                });
                            </script>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Footer Artikel -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="article-footer text-center" style="margin-top: 30px;">
                        <a href="{{ route('elearning.index') }}" class="btn btn-primary">Kembali ke E-Learning</a>
                    </div>
                </div>
            </div>

        </div><!-- Conatiner end -->
    </section><!-- Main container end -->
@endsection
