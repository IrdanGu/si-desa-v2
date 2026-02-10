@extends('constra_template.master')

@section('title')
    Kontak
@endsection

@section('content')

<div id="mainberita" class="berita">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
            <H3 class="orange-text">Panduan</H3>
            <!-- Elemen Video -->
            <video id="panduanVideo" width="600" controls>
                <source src="{{asset('storage/dokumen/tampilan.mp4' )}}" type="video/mp4">
                Browser Anda tidak mendukung pemutar video.
            </video>
            <!-- Tautan untuk Mengunduh Video -->
            <a id="downloadLink" href="{{asset('storage/dokumen/tampilan.mp4' )}}" download="Panduan.mp4">

                <!-- Tambahan untuk Menaruh Link File -->
                <div id="fileLinks" style="margin-top: 20px;">
                    <h4>Untuk buku panduan bisa download dibawah ini</h4>
                    <ul>
                        <li><a href="{{asset('storage/dokumen/invoice_hosting.pdf' )}}" download="Panduan.pdf">Unduh Panduan PDF</a></li>

                        <!-- Tambahkan tautan file lainnya di sini -->
                    </ul>
                </div>


            </div>
        </div>
    </div>




@endsection
