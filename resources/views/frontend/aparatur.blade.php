@extends('constra_template.master')



@section('title')
    Aparatur
@endsection

@section('content')
<div id="banner-area" class="banner-area" style="background-image:url({{asset('constra/images/banner/satu.jpg')}})">
    <div class="banner-text">
       <div class="container">
          <div class="row">
             <div class="col-xs-12">
                <div class="banner-heading">
                   <h1 class="banner-title">Struktur Desa</h1>
                   <ol class="breadcrumb">
                      <li</li>
                   </ol>
                </div>
             </div><!-- Col end -->
          </div><!-- Row end -->
       </div><!-- Container end -->
    </div><!-- Banner text end -->
 </div><!-- Banner area end -->

 <section id="text-aparat" class="aparat">
   <div class="container text-center">
       <div class="row">
         <h4>STRUCTUR</h4>
         <H2>DESA/KELURAHAN</H2>

       </div>
    @foreach ($aparatur_desas as $aparatur)


       <figure class="figure">
         <img src="{{asset('storage/' .$aparatur->gambar_struktur )}}" class="figure-img img-fluid rounded" alt="...">

       </figure>
       @endforeach
   </div>


       </section>










 @endsection
