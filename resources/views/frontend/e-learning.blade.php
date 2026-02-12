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
                        <img src="{{ asset('constra/images/icon/graduation-cap.png') }}" alt="graduasi"
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
                                <img src="{{ asset('constra/images/icon/healthcare.png') }}" alt="PHBS Icon"
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
                            <a href="{{ route('elearning.hidup-sehat') }}" class="btn btn-primary"
                                style="background-color: #6878df; border: none; padding: 8px 20px; border-radius: 5px;">Mulai
                                Belajar</a>
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
                                <img src="{{ asset('constra/images/icon/recycle-sign.png') }}" alt="Waste Management Icon"
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
                            <a href="{{ route('elearning.pengolahan-sampah') }}" class="btn btn-success"
                                style="background-color: #42b883; border: none; padding: 8px 20px; border-radius: 5px;">Pelajari
                                Sekarang</a>
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
                                <img src="{{ asset('constra/images/icon/money.png') }}" alt="Money Management Icon"
                                    style="width: 35px;">
                            </div>
                            <h3 style="font-size: 20px; margin-bottom: 15px;">Manajemen Keuangan Rumah Tangga</h3>
                            <p style="color: #666; margin-bottom: 20px;">Belajar mengelola keuangan keluarga, investasi
                                bijak, mulai dari tabungan hingga investasi sederhana.</p>
                            <div style="display: flex; align-items: center; margin-bottom: 15px;">
                                <img src="{{ asset('constra/images/icon/clock.png') }}" alt="Duration"
                                    style="width: 20px; margin-right: 10px;">
                                <span style="color: #777;">1-2 jam</span>
                            </div>
                            <a href="{{ route('elearning.manajemen-keuangan') }}" class="btn btn-warning"
                                style="background-color: #ffd66b; border: none; padding: 8px 20px; border-radius: 5px; color: #333;">Pelajari
                                Sekarang</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="gap-40"></div>

            <div class="gap-40"></div>

            <!-- Call to Action -->
            <div class="row">
                <div class="col-md-12">
                    <div class="call-to-action text-center" style="border-radius: 10px">
                        <h3 style="color: white">Mari Bersama Wujudkan Desa Mancagar yang Sehat dan Bersih!</h3>
                        <p style="color: white">Terapkan pola hidup sehat dan kelola sampah dengan bijak untuk masa depan
                            yang lebih baik.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection
