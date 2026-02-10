@extends('constra_template.master')



@section('title')
    potensi_desa
@endsection

@section('content')
<div class="coba">
    <section id="main-container" class="main-container" >
       <div class="container ">
          <div class="row" >
             <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 ">
                @foreach ( $potensi_desa as $potensi_desas)
                <div class="post-content post-single">
                   <div class="post-media post-image image-angle">
                      <img  src="{{asset('storage/' . $potensi_desas->gambar)}}" class="img-responsive " alt="">
                   </div>

                   <div class="post-body">
                      <div class="entry-header">
                         <h2 class="entry-title">
                           {{$potensi_desas->judul}}
                         </h2>
                      </div><!-- header end -->

                      <div class="entry-content">
                         {!!$potensi_desas->content!!}
                      </div>
                   </div><!-- post-body end -->

                </div><!-- post content end -->
             </div><!-- Content Col end -->
          </div><!-- Main row end -->
       </div>
    </div>
</div>
</div>
       @endforeach

    </section>
   </div>
   @endsection


@push('script')
    <script type="text/javascript" src="{{asset('constra/js/owl.carousel.min.js')}}"></script>
@endpush



