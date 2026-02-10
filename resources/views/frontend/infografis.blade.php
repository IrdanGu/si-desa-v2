
@extends('constra_template.master')


@section('title')
    Kontak
@endsection
{{-- <!-- Theme style -->
<link rel="stylesheet" href="{{asset('adminlte/dist/css/adminlte.min.css')}}"> --}}
<!-- Font Awesome -->
<link rel="stylesheet" href="{{asset('adminlte/plugins/fontawesome-free/css/all.min.css')}}">
<!-- Ionicons -->
<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

<!-- Google Font: Source Sans Pro -->
<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">


@section('content')


<div id="banner-area" class="banner-area" style="background-image:url({{asset('constra/images/banner/satu.jpg')}})">
    <div class="banner-text">
       <div class="container">
          <div class="row">
             <div class="col-xs-12">
                <div class="banner-heading">
                   <h1 class="banner-title">Infografis</h1>
                   <ol class="breadcrumb">
                      <li></li>
                   </ol>
                </div>
             </div><!-- Col end -->
          </div><!-- Row end -->
       </div><!-- Container end -->
    </div><!-- Banner text end -->
 </div><!-- Banner area end -->


 <div class="card">
    <div class="card-header">
      <h3 class="card-title">Data penduduk desa mancagar</h3>

      <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse">
          <i class="fas fa-minus"></i>
        </button>
        <button type="button" class="btn btn-tool" data-card-widget="remove">
          <i class="fas fa-times"></i>
        </button>
      </div>
    </div>

    <!-- /.card-header -->
    <div class="card-body">
        <div class="row">
          <div class="col-md-8">
            <div class="chart-responsive">
              <canvas id="pieChart" height="200"></canvas>
            </div>
            <!-- ./chart-responsive -->
          </div>
          <!-- /.col -->
          <div class="col-md-4">
            <ul class="chart-legend clearfix">
              <li><i class="far fa-circle text-danger"></i> RT 01</li>
              <li><i class="far fa-circle text-primary"></i> RT 02 </li>
              <li><i class="far fa-circle text-warning"></i> RT 03</li>
              <li><i class="far fa-circle text" style="color:#4BC0C0"></i> RT 04 </li>
              <li><i class= "far fa-circle --purple" style="color:#9966FF"></i> RT 05 </li>
              <li><i class="far fa-circle " style="color:#FF9F40"></i> RT 06 </li>
              <li><i class="far fa-circle " style="color:#7FFF00"></i> RT 07 </li>
            </ul>
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      {{-- <!-- /.card-body -->
      <div class="card-footer p-0">
        <ul class="nav nav-pills flex-column">
          <li class="nav-item">
            <a href="#" class="nav-link">
              RT 01-LAKI-LAKI
              <span class="float-right text-danger">
                <i class="fas fa-arrow-down text-sm"></i>
                {{ $rt01LK }}</span>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              RT 01-PEREMPUAN
              <span class="float-right text-success">
                <i class="fas fa-arrow-up text-sm"></i>{{ $rt01P }}
              </span>
            </a>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              RT 02-LAKI-LAKI
              <span class="float-right text-danger">
                <i class="fas fa-arrow-down text-sm"></i>
                {{ $rt02LK }}</span>
            </a>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              RT 02-PEREMPUAN
              <span class="float-right text-success">
                <i class="fas fa-arrow-up text-sm"></i>{{ $rt02P }}
              </span>
            </a>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              RT 03-LAKI-LAKI
              <span class="float-right text-danger">
                <i class="fas fa-arrow-down text-sm"></i>
                {{ $rt03LK }}</span>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              RT 03-PEREMPUAN
              <span class="float-right text-success">
                <i class="fas fa-arrow-up text-sm"></i>{{ $rt03P }}
              </span>
            </a>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              RT 04-LAKI-LAKI
              <span class="float-right text-danger">
                <i class="fas fa-arrow-down text-sm"></i>
                {{ $rt04LK }}</span>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              RT 04-PEREMPUAN
              <span class="float-right text-success">
                <i class="fas fa-arrow-up text-sm"></i>{{ $rt04P }}
              </span>
            </a>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              RT 05-LAKI-LAKI
              <span class="float-right text-danger">
                <i class="fas fa-arrow-down text-sm"></i>
                {{ $rt05LK }}</span>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              RT 05-PEREMPUAN
              <span class="float-right text-success">
                <i class="fas fa-arrow-up text-sm"></i>{{ $rt05P }}
              </span>
            </a>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              RT 06-LAKI-LAKI
              <span class="float-right text-danger">
                <i class="fas fa-arrow-down text-sm"></i>
                {{ $rt06LK }}</span>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              RT 06-PEREMPUAN
              <span class="float-right text-success">
                <i class="fas fa-arrow-up text-sm"></i>{{ $rt06P }}
              </span>
            </a>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              RT 07-LAKI-LAKI
              <span class="float-right text-danger">
                <i class="fas fa-arrow-down text-sm"></i>
                {{ $rt07LK }}</span>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              RT 07-PEREMPUAN
              <span class="float-right text-success">
                <i class="fas fa-arrow-up text-sm"></i>{{ $rt07P }}
              </span>
            </a>
          </li>

        </ul>
      </div>
      <!-- /.footer -->

    </div> --}}

    <!-- /.card -->

    <div class="card">
        <div class="card-header">
          <h3 class="card-title">Data Pendidikan desa mancagar</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>

        <!-- /.card-header -->

        <div class="card-body">
            <div class="row">
              <div class="col-md-8">
                <div class="chart-responsive">
                  <canvas id="pieCharts" height="230"></canvas>
                </div>
                <!-- ./chart-responsive -->
              </div>
              <!-- /.col -->
              <div class="col-md-4">
                <ul class="chart-legend clearfix">
                  <li><i class="far fa-circle text-danger"></i> Belum Sekolah</li>
                  <li><i class="far fa-circle text-primary"></i> Tidak pernah sekolah </li>
                  <li><i class="far fa-circle text-warning"></i> Belum tamat SD</li>
                  <li><i class="far fa-circle text-info"></i>Tamat SD</li>
                  <li><i class="far fa-circle " style="color:#9966FF"></i>Tamat SLTP</li>
                  <li><i class="far fa-circle " style="color:#FF9F40"></i>Tamat SLTA</li>
                  <li><i class="far fa-circle " style="color:#7FFFD4"></i>Tamat S1</li>
                </ul>
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->
          </div>
          <!-- /.card-body -->
          </div>
          <!-- /.footer -->

          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Data pekerjaan penduduk desa mancagar</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                  <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>

            <!-- /.card-header -->
            <div class="card-body">
                <div class="row">
                  <div class="col-md-8">
                    <div class="chart-responsive">
                      <canvas id="pieChartss" height="200"></canvas>
                    </div>
                    <!-- ./chart-responsive -->
                  </div>
                  <!-- /.col -->
                  <div class="col-md-4">
                    <ul class="chart-legend clearfix">
                      <li><i class="far fa-circle text-danger"></i> Buruh Harian Lepas</li>
                      <li><i class="far fa-circle text-primary"></i> pelajar </li>
                      <li><i class="far fa-circle text-warning"></i>Wiraswasta</li>
                      <li><i class="far fa-circle text" style="color:#4BC0C0"></i>Mengrs Rmh Tangga</li>
                      <li><i class= "far fa-circle --purple" style="color:#9966FF"></i>Buruh Harian Lepas</li>
                      <li><i class="far fa-circle " style="color:#FF9F40"></i> Perangkat Desa </li>
                      <li><i class="far fa-circle " style="color:#7FFF00"></i> Belum Bekerja </li>
                      <li><i class="far fa-circle " style="color:#808000"></i> Karyawan Swasta </li>
                    </ul>
                  </div>
                  <!-- /.col -->
                </div>
                <!-- /.row -->
              </div>
              <!-- /.card-body -->

              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Data Status penduduk desa mancagar</h3>

                  <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                      <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove">
                      <i class="fas fa-times"></i>
                    </button>
                  </div>
                </div>

                <!-- /.card-header -->
                <div class="card-body">
                    <div class="row">
                      <div class="col-md-8">
                        <div class="chart-responsive">
                          <canvas id="pieChartsss" height="200"></canvas>
                        </div>
                        <!-- ./chart-responsive -->
                      </div>
                      <!-- /.col -->
                      <div class="col-md-4">
                        <ul class="chart-legend clearfix">
                          <li><i class="far fa-circle text-danger"></i> Kawin</li>
                          <li><i class="far fa-circle text-primary"></i> Blm Kawin </li>
                          <li><i class="far fa-circle text-warning"></i>Janda/Duda</li>
                        </ul>
                      </div>
                      <!-- /.col -->
                    </div>
                    <!-- /.row -->
                  </div>
                  <!-- /.card-body -->

        </div>



 @endsection

 @push('script')
<script>
document.addEventListener('DOMContentLoaded', function() {
    var ctx = document.getElementById('pieChart').getContext('2d');
    var data = {
        labels: ['RT 01', 'RT 02','RT 03','RT 04','RT 05','RT 06','RT 07'],
        datasets: [{
            data: [{{$rt01}}, {{$rt02}},{{$rt03}},{{ $rt04}},
                {{ $rt05 }},{{ $rt06 }},{{$rt07}}
            ],
            backgroundColor: ['#FF6384', '#36A2EB', '#FFCE56', '#4BC0C0', '#9966FF', '#FF9F40','#7FFF00'],
            hoverBackgroundColor: ['#FF6384', '#36A2EB', '#FFCE56', '#4BC0C0', '#9966FF', '#FF9F40','#7FFF00']
        }]
    };
    var options = {
        responsive: true,
        maintainAspectRatio: false
    };
    new Chart(ctx, {
        type: 'pie',
        data: data,
        options: options
    });
});


document.addEventListener('DOMContentLoaded', function() {
    var ctx = document.getElementById('pieCharts').getContext('2d');
    var data = {
        labels: ['Belum sekolah', 'Tidak pernah sekolah', 'Belum tamat SD', 'Tamat SD', 'Tamat SLTP', 'Tamat SLTA', 'Tamat S1'],
        datasets: [{
            data: [{{ $blm_sklh }}, {{  $tdk_prnh_sklh }},{{  $blm_tamat_sd }},{{ $tamat_sd }}, {{ $tamat_sltp }}, {{ $tamat_slta }},{{ $tamat_s1 }}],
            backgroundColor: ['#FF6384', '#36A2EB', '#FFCE56', '#4BC0C0', '#9966FF', '#FF9F40', '#7FFFD4'],
            hoverBackgroundColor: ['#FF6384', '#36A2EB', '#FFCE56', '#4BC0C0', '#9966FF', '#FF9F40', '#7FFFD4']
        }]
    };
    var options = {
        responsive: true,
        maintainAspectRatio: false
    };
    new Chart(ctx, {
        type: 'pie',
        data: data,
        options: options
    });
});

document.addEventListener('DOMContentLoaded', function() {
    var ctx = document.getElementById('pieChartss').getContext('2d');
    var data = {
        labels: ['Buruh Harian Lepas', 'pelajar','Wiraswasta','Mengrs Rmh Tangga','Buruh Harian Lepas','Perangkat Desa','Belum Bekerja','Karyawan Swasta'],
        datasets: [{
            data: [{{$brh_h_lepas}}, {{$pelajar }},{{$wiraswasta }},{{  $m_rmh_tangga}},
                {{  $b_harian_lepas }},{{ $perangkat_desa }},{{$belum_bekerja}},{{ $karyawan_swasta}}
            ],
            backgroundColor: ['#FF6384', '#36A2EB', '#FFCE56', '#4BC0C0', '#9966FF', '#FF9F40','#7FFF00','#808000'],
            hoverBackgroundColor: ['#FF6384', '#36A2EB', '#FFCE56', '#4BC0C0', '#9966FF', '#FF9F40','#7FFF00','#808000']
        }]
    };
    var options = {
        responsive: true,
        maintainAspectRatio: false
    };
    new Chart(ctx, {
        type: 'pie',
        data: data,
        options: options
    });
});


document.addEventListener('DOMContentLoaded', function() {
    var ctx = document.getElementById('pieChartsss').getContext('2d');
    var data = {
        labels: ['Kawin', 'Blm Kawin','Janda/Duda'],
        datasets: [{
            data: [{{$kawin}}, {{$blm_kawin }},{{$jandud }}
            ],
            backgroundColor: ['#FF6384', '#36A2EB', '#FFCE56'],
            hoverBackgroundColor: ['#FF6384', '#36A2EB', '#FFCE56']
        }]
    };
    var options = {
        responsive: true,
        maintainAspectRatio: false
    };
    new Chart(ctx, {
        type: 'pie',
        data: data,
        options: options
    });
});

</script>

<!-- jQuery -->
<script src="{{asset('adminlte/plugins/jquery/jquery.min.js')}}"></script>

<!-- overlayScrollbars -->
<script src="{{asset('adminlte/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('adminlte/dist/js/adminlte.min.js')}}"></script>
{{-- <!-- AdminLTE for demo purposes -->
<script src="{{asset('adminlte/dist/js/demo.js')}}"></script> --}}

<!-- ChartJS -->
<script src="{{asset('adminlte/plugins/chart.js/Chart.min.js')}}"></script>
{{-- <script src="{{asset('adminlte/dist/js/pages/dashboard2.js')}}"></script> --}}

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="{{asset('adminlte/plugins/jquery-mousewheel/jquery.mousewheel.js')}}"></script>
<script src="{{asset('adminlte/plugins/raphael/raphael.min.js')}}"></script>
<script src="{{asset('adminlte/plugins/jquery-mapael/jquery.mapael.min.js')}}"></script>
<script src="{{asset('adminlte/plugins/jquery-mapael/maps/usa_states.min.js')}}"></script>

<!-- perbaikan  -->
<!-- jQuery -->
<script src="{{asset('adminlte')}}/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{asset('adminlte')}}/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{asset('adminlte')}}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="{{asset('adminlte')}}/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="{{asset('adminlte')}}/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="{{asset('adminlte')}}/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="{{asset('adminlte')}}/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="{{asset('adminlte')}}/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="{{asset('adminlte')}}/plugins/moment/moment.min.js"></script>
<script src="{{asset('adminlte')}}/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{asset('adminlte')}}/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="{{asset('adminlte')}}/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="{{asset('adminlte')}}/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="{{asset('adminlte')}}/dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('adminlte')}}/dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{asset('adminlte')}}/dist/js/pages/dashboard.js"></script>
@endpush

