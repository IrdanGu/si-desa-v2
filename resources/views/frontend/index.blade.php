@extends('constra_template.master')

@section('content')
    <!-- Carousel -->
<div id="main-slide" class="carousel slide" data-ride="carousel">

    <!-- Indicators -->
    <ol class="carousel-indicators visible-lg visible-md">
        <li data-target="#main-slide" data-slide-to="0" class="active"></li>
        <li data-target="#main-slide" data-slide-to="1"></li>
        <li data-target="#main-slide" data-slide-to="2"></li>
    </ol>
    <!--/ Indicators end-->

    <!-- Carousel inner -->
    <div class="carousel-inner">

    <div class="item active" style="background-image:url({{asset('constra/images/slider-main/desa.jpg')}})">
            <div class="slider-content">
                <div class="col-md-12 text-center" style="margin-top: 300px;">
                    <h3 class="slide-sub-title animated5 ">selamat datang di desa mancagar</h3>
                </div>
            </div>
        </div>
        <!--/ Carousel item 1 end -->

        <div class="item" style="background-image:url({{asset('constra/images/slider-main/foto_mancagar_sekolah.jpg')}})">
            <div class="slider-content">
                <div class=" col-md-12 text-center" style="margin-top: 300px;">
                    <h3 class="slide-sub-title animated5 ">menuju desa modern </h3>
                </div>
            </div>
        </div>
        <!--/ Carousel item 2 end -->

        <div class="item" style="background-image:url({{asset('constra/images/slider-main/masjid.jpg')}})">
            <div class="slider-content ">
                <div class="col-md-12 text-center" style="margin-top: 300px;">
                    <h3 class="slide-sub-title animated7">dengan sistem digital</h3>
                </div>
            </div>
        </div>
        <!--/ Carousel item 3 end -->

    </div><!-- Carousel inner end-->

    <!-- Controllers -->
    <a class="left carousel-control" href="#main-slide" data-slide="prev">
        <span><i class="fa fa-angle-left"></i></span>
    </a>
    <a class="right carousel-control" href="#main-slide" data-slide="next">
        <span><i class="fa fa-angle-right"></i></span>
    </a>
</div>
<!--/ Carousel end -->


<section id="carousel slide" class="facts-area dark-bg">
    <div class="container">
        <div class="row">
            <div class="facts-wrapper">
                <div class="col-sm-3 ts-facts">
                    <div class="ts-facts-img">
                        <img src="{{asset('constra/images/icon-image/fact1.png')}}" alt="" />
                    </div>
                    <div class="ts-facts-content">
                    <h2 class="ts-facts-num"><span class="counterUp" data-count="{{$Kpl}}">0</span></h2>
                        <h3 class="ts-facts-title">Kepala keluarga</h3>
                    </div>
                </div><!-- Col end -->

                <div class="col-sm-3 ts-facts">
                    <div class="ts-facts-img">
                        <img src="{{asset('constra/images/icon-image/satu.png')}}" alt="" style="width: 60px; height: 60px;">
                    </div>
                    <div class="ts-facts-content">
                    <h2 class="ts-facts-num"><span class="counterUp" data-count="{{$jmlpenduduk}}">0</span></h2>
                        <h3 class="ts-facts-title">Masyarakat</h3>
                    </div>
                </div><!-- Col end -->

                <div class="col-sm-3 ts-facts">
                    <div class="ts-facts-img">
                        <img src="{{asset('constra/images/icon-image/dua.png')}}" alt="" />
                    </div>
                    <div class="ts-facts-content">
                    <h2 class="ts-facts-num"><span class="counterUp" data-count="{{$P}}">0</span></h2>
                        <h3 class="ts-facts-title">Perempuan</h3>
                    </div>
                </div><!-- Col end -->

                <div class="col-sm-3 ts-facts">
                    <div class="ts-facts-img">
                        <img src="{{asset('constra/images/icon-image/tiga.png')}}" alt="" />
                    </div>
                    <div class="ts-facts-content">
                    <h2 class="ts-facts-num"><span class="counterUp" data-count="{{$LK}}">0</span></h2>
                        <h3 class="ts-facts-title">laki-laki</h3>
                    </div>
                </div><!-- Col end -->
            </div> <!-- Facts end -->
        </div>
        <!--/ Content row end -->
    </div>
    <!--/ Container end -->
</section><!-- Facts end -->

<section id="desas" class="dodo">
<div class="container text-center">
    <div class="row">
      <div class="col-sm-8">
        <div class="card_index w-50">
            <section id="desas" class="sambutan-container">
                <h4 class="sambutan-header">SAMBUTAN KEPALA DESA</h4>
                <img src="{{asset('storage/gambar/contohkepaladesa.png')}}" alt="Kepala Desa" class="sambutan-image" width="200">
                <p class="sambutan-text">
                    Desa Mancagar adalah salah satu desa di Kecamatan Garawangi, Kabupaten Kuningan. Berjarak Kurang lebih 30 KM dari Kota Kuningan. Penghasilan Sumber Alam yang berlimpah terdiri dari Pertanian.
                </p>
              </div>
            </div>




      <div class="col-sm-4">
      <h4 class="orange-text">Agenda <span class="font-weight-bold">Kegiatan</span></h4>
            <ul class="list-group">
                @foreach($agenda as $agendas)
                    <li class="list-group-item d-flex align-items-start border-0 p-2 mb-3 ">
                        <div class="date-box text-center mr-3 p-2" style="background-color: orange; color: white;">
                            <span class="date d-block font-weight-bold">{{ \Carbon\Carbon::parse($agendas->tanggal)->format('M d') }}</span>
                            <span class="year">{{ \Carbon\Carbon::parse($agendas->tanggal)->format('Y') }}</span>
                        </div>
                        <div class="agenda-text-dashboard">
                            <a href="{{ route('agenda_detail', $agendas->judul) }}" class="font-weight-bold">{{ $agendas->judul }}</a>
                            <p class="mb-0 text-dark">Lokasi: {{ $agendas->tempat }}</p>
                        </div>
                    </li>
                    @endforeach
            </ul>

        </div>


        <!-- Sidebar end -->


        <div class="col-md-4b">
            <br>
            <h4 class="orange-text">Agenda <span class="font-weight-bold">Kegiatan Karang taruna</span></h4>
            <ul class="list-group">
                @foreach($agenda_karangtaruna as $agenda_karangtarunas)
                    <li class="list-group-item d-flex align-items-start border-0 p-2 mb-3 ">
                        <div class="date-box text-center mr-3 p-2" style="background-color: orange; color: white;">
                            <span class="date d-block font-weight-bold">{{ \Carbon\Carbon::parse($agenda_karangtarunas->tanggal)->format('M d') }}</span>
                            <span class="year">{{ \Carbon\Carbon::parse($agenda_karangtarunas->tanggal)->format('Y') }}</span>
                        </div>

                        <div class="agenda-text-karangtaruna">
                            <a href="{{ route('agenda_karangtaruna_detail', $agenda_karangtarunas->judul) }}" class="font-weight-bold text-orange">{{ $agenda_karangtarunas->judul }}</a>
                            <p class="mb-0 text-dark">Lokasi: {{ $agenda_karangtarunas->tempat }}</p>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>

            </div>
        </div>
    </div>
  </div>
</section>


  <section id="news" class="news">
    <div class="container">
        <div class="row text-center">
            <h3 class="section-sub-title">Baca Berita terbaru</h3>
        </div>

        <!--/ Title row end -->
        <div class="row">
            @foreach ($berita as $beritas)
            <div class="col-md-4 col-xs-12 ">
                <div class="latest-post">
                    <div class="latest-post-media">
                        <a href="#" class="latest-post-img">
                            <img class="img-responsive" src="{{asset('storage/' . $beritas->gambar)}}" height="1000px" alt="img">
                        </a>
                    </div>
                    <div class="post-body">
                        <h4 class="post-title">
                        <a href="{{route('berita_detail',$beritas->slug)}}">{{$beritas->judul}}</a>
                        </h4>
                        <div class="post-meta-index">
                            <span class="post-author">
                            <i class="fa fa-user"></i><a href="#"> {{$beritas->user->level}}</a>
                             </span>
                             |
                            <span class="post-item-date">
                                <i class="fa fa-clock-o"></i> {{\Carbon\Carbon::parse($beritas['created_at'])->isoFormat('D MMMM, Y')}}
                            </span>
                        </div>
                    </div>
                </div><!-- Latest post end -->
            </div><!-- 3rd post col end -->
        @endforeach
        </div>
        <!--/ Content row end -->

        <div class="general-btn text-center">
            {{$berita->links()}}
        </div>

    </div>
    <!--/ Container end -->


</section>

@endsection

@push('styles')
    	<!-- Animation -->
	<link rel="stylesheet" href="{{asset('constra/css/animate.css')}}">
	<!-- Owl Carousel -->
	<link rel="stylesheet" href="{{asset('constra/css/owl.carousel.min.css')}}">
	<link rel="stylesheet" href="{{asset('constra/css/owl.theme.default.min.css')}}">
@endpush

@push('script')
<!-- Owl Carousel -->
<script type="text/javascript" src="{{asset('constra/js/owl.carousel.min.js')}}"></script>
@endpush

