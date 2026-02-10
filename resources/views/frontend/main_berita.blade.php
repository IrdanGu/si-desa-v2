@extends('constra_template.master')



@section('title')
    main berita
@endsection

@section('content')
<div id="mainberita" class="berita">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
            <H3 class="orange-text">Berita</H3>
            @foreach ( $berita as $beritas)
            <div class="card mb-4">
                <img  src="{{asset('storage/' . $beritas->gambar)}}" class="img-responsive " alt="">
                <div class="post-meta-berita">
                    <span class="post-author">
                       <i class="fa fa-user"></i><a href="#"> {{$beritas->user->level}}</a>
                    </span>
                    |

                    <span class="post-meta-date"><i class="fa fa-calendar"></i> {{\Carbon\Carbon::parse($beritas['created_at'])->isoFormat('D MMMM, Y')}}</span>
                 </div>
                <div class="card-body">
                    <h5 class="card-title">{{ $beritas->judul }}</h5>
                    {{ Str::limit(strip_tags(html_entity_decode($beritas->content)), 150) }}
                <br>
                    <a href="{{route('berita_detail',$beritas->slug)}}" class="btn btn-primary">Read More</a>
                </div>
            </div>

            @endforeach
            </div>



            <!--/ Top info end -->

            <div class="col-md-4">
                <br>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    </button>
                </form>
                <br>
                <h4 class="orange-text">Popular <span class="font-weight-bold">Post</span></h4>
                <ul class="list-group">
                    @foreach($berita as $beritas)
                        <li class="list-group-item d-flex align-items-start border-0 p-2 mb-10 ">
                            <div class="date-box-berita text-center mr-10 p-2">
                                <img  src="{{asset('storage/' . $beritas->gambar)}}" class="card-img-main" alt="">

                            </div>

                            <div class="berita-text">
                                <span class="post-meta-date"><i class="fa fa-calendar"></i> {{\Carbon\Carbon::parse($beritas->tanggal)->isoFormat('D MMMM, Y')}}</span>
                                <br>
                                <a href="{{ route('agenda_detail', $beritas->judul) }}" class="judul-main">{{ $beritas->judul }}</a>
                                <p class="">by {{ $beritas->user->name }}</p>
                            </div>
                        </li>
                    @endforeach
                </ul>

                  <!-- Galeri Foto -->
              <div class="iklan-galeri">
                <h4 class="orange-text-galery">
                    <i class="fa-solid fa-camera"></i> <!-- Ganti ikon sesuai kebutuhan -->
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
          </div>
            </div>


        </div>
    </div>
</div>
<br></br>
@endsection

