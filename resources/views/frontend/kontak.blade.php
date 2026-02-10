@extends('constra_template.master')

@section('title')
    Kontak
@endsection

@section('content')
<div id="banner-area" class="banner-area" style="background-image:url({{asset('constra/images/banner/satu.jpg')}})">
    <div class="banner-text">
       <div class="container">
          <div class="row">
             <div class="col-xs-12">
                <div class="banner-heading">
                   <h1 class="banner-title">KONTAK</h1>
                   <ol class="breadcrumb">
                      <li></li>
                   </ol>
                </div>
             </div><!-- Col end -->
          </div><!-- Row end -->
       </div><!-- Container end -->
    </div><!-- Banner text end -->
 </div><!-- Banner area end -->

 <section id="main-container" class="main-container">
    <div class="container">
        <div class="row text-center">
            <h3 class="section-sub-title">Hubungi Kami</h3>
        </div>
        <!--/ Title row end -->

        <div class="row">
            <div class="col-md-4">
                <div class="ts-service-box-bg text-center">
                    <span class="ts-service-icon icon-round">
                        <i class="fa fa-map-marker"></i>
                    </span>
                    <div class="ts-service-box-content">
                        <h4>Alamat</h4>
                        <p>92654, Desa Mancagar</p>
                    </div>
                </div>
            </div><!-- Col 1 end -->

            <div class="col-md-4">
                <div class="ts-service-box-bg text-center">
                    <span class="ts-service-icon icon-round">
                        <i class="fa fa-envelope"></i>
                    </span>
                    <div class="ts-service-box-content">
                        <h4>Email</h4>
                        <p>mancagar123@gmail.com</p>
                    </div>
                </div>
            </div><!-- Col 2 end -->

            <div class="col-md-4">
                <div class="ts-service-box-bg text-center">
                    <span class="ts-service-icon icon-round">
                        <i class="fa fa-phone-square"></i>
                    </span>
                    <div class="ts-service-box-content">
                        <h4>Telepon</h4>
                        <p>08235803445</p>
                    </div>
                </div>
            </div><!-- Col 3 end -->
        </div><!-- 1st row end -->
        </div><!-- Content row -->
    </div><!-- Conatiner end -->
</section><!-- Main container end -->
<iframe style="width:100%; margin-top:-60px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7919.89585120423!2d108.58955445!3d-7.015407049999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6f12f5b455026f%3A0xf3690d634fbc2c2d!2sMancagar%2C%20Kec.%20Lebakwangi%2C%20Kabupaten%20Kuningan%2C%20Jawa%20Barat!5e0!3m2!1sid!2sid!4v1716710325284!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen=" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
@endsection
