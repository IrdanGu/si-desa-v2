@extends('constra_template.master')



@section('title')
    main agenda karangtaruna
@endsection

@section('content')
<div id="mainberita" class="berita">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
            <H3 class="orange-text">Agenda Karangtaruna</H3>
            @foreach ( $agenda_karangtaruna as $agenda_karangtarunas
            )
            <div class="card mb-4">
                <div class="post-metamain">
                    <h4 class="card-title">{{ $agenda_karangtarunas
                    ->judul }}</h4>
                    <div class="post-date"></div>
                    <span class="post-author">
                       <i class="fa fa-user"></i><a href="#">{{$agenda_karangtarunas
                       ->user->level}}</a>
                    </span>

                    <span class="post-meta-date"><i class="fa fa-calendar mr-2"></i>{{\Carbon\Carbon::parse($agenda_karangtarunas
                    ['created_at'])->isoFormat('D MMMM, Y')}}</span>
                 </div>
                <div class="card-body">

                    <article>
                        <p>tanggal :{{ $agenda_karangtarunas
                        ->tanggal }}, jam :{{$agenda_karangtarunas
                        ->jam}}, acara :{{$agenda_karangtarunas
                        ->acara}}, tempat :{{ $agenda_karangtarunas
                        ->tempat }}, {{ Str::limit(strip_tags(html_entity_decode($agenda_karangtarunas
                        ->content)), 30) }},<a href="{{route('agenda_karangtaruna_detail',$agenda_karangtarunas
                        ->judul)}}" class="orange-text">...selengkapnya</a> </p>
                    </article>
                </div>
            </div>

            @endforeach
            </div>


          <!-- Sidebar start -->
          <div class="col-md-4">
            <br>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                </button>
            </form>
            <br>
            <h4 class="orange-text">Agenda <span class="font-weight-bold">Kegiatan Karangtaruna</span></h4>
            <ul class="list-group">
                @foreach($agenda_karangtaruna as $agenda_karangtarunas)
                    <li class="list-group-item d-flex align-items-start border-0 p-2 mb-3 ">
                        <div class="date-box text-center mr-3 p-2" style="background-color: orange; color: white;">
                            <span class="date d-block font-weight-bold">{{ \Carbon\Carbon::parse($agenda_karangtarunas->tanggal)->format('M d') }}</span>
                            <span class="year">{{ \Carbon\Carbon::parse($agenda_karangtarunas->tanggal)->format('Y') }}</span>
                        </div>

                        <div class="agenda-text">
                            <a href="{{ route('agenda_detail', $agenda_karangtarunas->judul) }}" class="font-weight-bold text-orange">{{ $agenda_karangtarunas->judul }}</a>
                            <p class="mb-0 text-dark">Lokasi: {{ $agenda_karangtarunas->tempat }}</p>
                        </div>
                    </li>
                @endforeach
            </ul>

             <!-- Galeri Foto -->
             <div class="iklan-galeri">
                <h4 class="orange-text-galery">
                    <i class="fas fa-camera icon"></i> <!-- Ganti ikon sesuai kebutuhan -->
                    Galeri Foto
                </h4>

              <div class="gallery-main">
                  @foreach ($galery->take(4) as $galerys)
                      <div class="gallery-item-main">
                          <img src="{{ asset('storage/' . $galerys->gambar) }}" alt="Gallery Image">
                      </div>
                  @endforeach
              </div>
          </div>
          <!-- Sidebar end -->
        </div>

        <!-- Sidebar end -->

            </div>
        </div>
    </div>
    <br></br>
@endsection

