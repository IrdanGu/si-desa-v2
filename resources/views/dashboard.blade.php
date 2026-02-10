@extends('adminlte.master')

@section('title')
    Dashboard
@endsection

@section('content')
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark "><b>DATA DESA MANCAGAR</b></h1>
      </div><!-- /.col -->
    </div><!-- /.row -->
    <div class="row mt-4">
      <div class="col-12 col-sm-6 col-md-3">
        <div class="info-box">
          <span class="info-box-icon bg-info elevation-1"><i class="fas fa-home"></i></span>

          <div class="info-box-content">
            <span class="info-box-text">Kepala Keluarga</span>
            <span class="info-box-number">
                {{$Kpl}}
            </span>
          </div>
          <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
      </div>
      <!-- /.col -->
      <div class="col-12 col-sm-6 col-md-3">
        <div class="info-box mb-3">
          <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-users"></i></span>

          <div class="info-box-content">
            <span class="info-box-text">Penduduk</span>
          <span class="info-box-number">{{$jmlpenduduk}}</span>
          </div>
          <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
      </div>
      <!-- /.col -->

      <!-- fix for small devices only -->
      <div class="clearfix hidden-md-up"></div>

      <div class="col-12 col-sm-6 col-md-3">
        <div class="info-box mb-3">
          <span class="info-box-icon bg-success elevation-1"><i class="fas fa-venus"></i></span>

          <div class="info-box-content">
            <span class="info-box-text">Perempuan</span>
          <span class="info-box-number">{{$P}}</span>
          </div>
          <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
      </div>
      <!-- /.col -->
      <div class="col-12 col-sm-6 col-md-3">
        <div class="info-box mb-3">
          <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-mars"></i></span>

          <div class="info-box-content">
            <span class="info-box-text">Laki-Laki</span>
          <span class="info-box-number">{{ $LK }}</span>
          </div>
          <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
      </div>
      <div class="col-12 col-sm-6 col-md-3">
        <div class="info-box mb-3">
          <span class="info-box-icon  bg-success elevation-1"><i class="fas fa-user-alt"></i></span>

          <div class="info-box-content">
            <span class="info-box-text">User</span>
          <span class="info-box-number">{{ $user}}</span>
          </div>
          <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
      </div>
      <div class="col-12 col-sm-6 col-md-3">
        <div class="info-box mb-3">
          <span class="info-box-icon bg-secondary elevation-1"><i class="fas fa-newspaper"></i></span>

          <div class="info-box-content">
            <span class="info-box-text">Berita</span>
          <span class="info-box-number">{{ $berita}}</span>
          </div>
          <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
      </div>

      <div class="col-12 col-sm-6 col-md-3">
        <div class="info-box mb-3">
          <span class="info-box-icon bg-primary elevation-1"><i class="fas fa-mail-bulk"></i></span>

          <div class="info-box-content">
            <span class="info-box-text">Surat-surat</span>
          <span class="info-box-number">{{$all_surat}}</span>
          </div>
          <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
      </div>
      <!-- /.col -->

    </div>
  </div>
</div>

<!-- /.info-box -->

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
      <!-- /.card-body -->
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

    </div>

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













</section>
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
@endpush
