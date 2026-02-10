@extends('constra_template.master')

@section('title')
    pengajuan surat
@endsection

@section('content')
<div id="banner-area" class="banner-area" style="background-image:url({{asset('constra/images/banner/satu.jpg')}})">
    <div class="banner-text">
       <div class="container">
          <div class="row">
             <div class="col-xs-12">
                <div class="banner-heading">
                   <h1 class="banner-title">Surat</h1>
                   <ol class="breadcrumb">
                      <li></li>
                   </ol>
                </div>
             </div>
          </div>
       </div>
    </div>
</div>

<section id="main-container" class="main-container test">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h3 style="margin-top:-40px;" class="column-title text-center">Pelayanan Surat Online</h3>
                @if(session('status'))
                    <div class="alert alert-success">
                        {{session('status')}}
                    </div>
                @endif
                <form style="margin-top:40px" action="{{route('suratsimpan')}}" method="POST" role="form" enctype="multipart/form-data">
                    @csrf
                    <div class="error-container"></div>
                    <div style="margin-top:-20px;" class="row">
                        <div class="col-md-12">
                            <div class="form-group {{$errors->has('nik') ? 'has-error' : ''}}">
                                <label for="nik">Nomor NIK</label>
                                <input type="text" onkeyup="isi_otomatis()" name="nik" class="form-control" id="nik" value="{{old('nik')}}">
                                @if ($errors->has('nik'))
                                    <span class="help-block">{{$errors->first('nik')}}</span>
                                @endif
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="no_kk">Nomor KK</label>
                                <input type="text" readonly name="no_kk" class="form-control" id="no_kk" value="{{old('no_kk')}}">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" readonly name="nama" class="form-control" id="nama" value="{{old('nama')}}">
                    </div>

                    <div class="form-group">
                        <label for="jenis_kelamin">Jenis_kelamin</label>
                        <input type="text" readonly name="jenis_kelamin" class="form-control" id="jenis_kelamin" value="{{old('jenis_kelamin')}}">
                    </div>

                    <div class="form-group">
                        <label for="tempat_lahir">Tempat lahir</label>
                        <input type="text" readonly name="tempat_lahir" class="form-control" id="tempat_lahir" value="{{old('tempat_lahir')}}">
                    </div>

                    <div class="form-group">
                        <label for="tanggal_lahir">Tanggal lahir</label>
                        <input type="text" readonly name="tanggal_lahir" class="form-control" id="tanggal_lahir" value="{{old('tanggal_lahir')}}">
                    </div>

                    <div class="form-group">
                        <label for="status_penduduk">status</label>
                        <input type="text" readonly name="status_penduduk" class="form-control" id="status_penduduk" value="{{old('status_penduduk')}}">
                    </div>

                    <div class="form-group">
                        <label for="pekerjaan">Pekerjaan</label>
                        <input type="text" readonly name="pekerjaan" class="form-control" id="pekerjaan" value="{{old('pekerjaan')}}">
                    </div>

                    <div class="form-group">
                        <label for="dusun">Dusun</label>
                        <input type="text" readonly name="dusun" class="form-control" id="dusun" value="{{old('dusun')}}">
                    </div>
                    <div class="form-group">
                        <label for="rt">Rt</label>
                        <input type="text" readonly name="rt" class="form-control" id="rt" value="{{old('rt')}}">
                    </div>

                    <div class="form-group">
                        <label for="rw">Rw</label>
                        <input type="text" readonly name="rw" class="form-control" id="rw" value="{{old('rw')}}">
                    </div>

                    <div class="form-group">
                        <label for="pilihsurat">Jenis Surat</label>
                        <select name="pilihsurat" class="form-control {{ $errors->first('pilihsurat') ? 'is-invalid' : '' }}" id="pilihsurat">
                            <option value="">Pilih Surat</option>
                            <option value="Surat Keterangan Tidak Mampu" {{ old('pilihsurat') == 'Surat Keterangan Tidak Mampu' ? 'selected' : '' }}>Surat Keterangan Tidak Mampu</option>
                            <option value="Surat Keterangan Usaha" {{ old('pilihsurat') == 'Surat Keterangan Usaha' ? 'selected' : '' }}>Surat Keterangan Usaha</option>
                            <option value="Surat Keterangan Domisili" {{ old('pilihsurat') == 'Surat Keterangan Domisili' ? 'selected' : '' }}>Surat Keterangan Domisili</option>
                        </select>
                        <div class="invalid-feedback">
                            {{ $errors->first('pilihsurat') }}
                        </div>
                    </div>

                    <div id="syaratSKTM" style="display:none;">
                        {{-- <div class="form-group">
                            <label for="foto_ktp">Foto KTP</label>
                            <input type="file" class="form-control {{$errors->first('foto_ktp') ? 'is-invalid' : ''}}" id="foto_ktp" name="foto_ktp">
                            <div class="invalid-feedback">
                                {{$errors->first('foto_ktp')}}
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="foto_kk">Foto KK</label>
                            <input type="file" class="form-control {{$errors->first('foto_kk') ? 'is-invalid' : ''}}" id="foto_kk" name="foto_kk">
                            <div class="invalid-feedback">
                                {{$errors->first('foto_kk')}}
                            </div>
                        </div> --}}
                    </div>

                    <div id="syaratSKU" style="display:none;">
                        <div class="form-group">
                        <label for="bidang_usaha">Bidang usaha</label>
                        <p>Contoh: Pertanian (bidang bawang-bawangan)</p>
                        <input type="text" name="bidang_usaha" class="form-control {{$errors->first('bidang_usaha') ? 'is-invalid' : ''}}" id="bidang_usaha" value="{{old('bidang_usaha')}}">
                        <div class="invalid-feedback">
                            {{$errors->first('bidang_usaha')}}

                        </div>
                    </div>

                    </div>

                    <div id="syaratSKD" style="display:none;">
                        {{-- <div class="form-group">
                            <label for="fotoktp_domisili">Foto KTP</label>
                            <input type="file" class="form-control {{$errors->first('fotoktp_domisili') ? 'is-invalid' : ''}}" id="fotoktp_domisili" name="fotoktp_domisili">
                            <div class="invalid-feedback">
                                {{$errors->first('fotoktp_domisili')}}
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="fotokk_domisili">Foto KK</label>
                            <input type="file" class="form-control {{$errors->first('fotokk_domisili') ? 'is-invalid' : ''}}" id="fotokk_domisili" name="fotokk_domisili">
                            <div class="invalid-feedback">
                                {{$errors->first('fotokk_domisili')}}
                            </div>
                        </div> --}}
                    </div>

                    <div class="form-group">
                        <label for="permohonan">Deskripsi Keperluan</label>
                        <input type="text" name="permohonan" class="form-control {{$errors->first('permohonan') ? 'is-invalid' : ''}}" id="permohonan" value="{{old('permohonan')}}">
                        <div class="invalid-feedback">
                            {{$errors->first('permohonan')}}
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="no_hp">Nomor HP</label>
                        <input type="text" name="no_hp" class="form-control {{$errors->first('no_hp') ? 'is-invalid' : ''}}" id="no_hp" value="{{old('no_hp')}}">
                        <div class="invalid-feedback">
                            {{$errors->first('no_hp')}}
                        </div>
                    </div>

                    <div class="text-right"><br>
                        <button class="btn btn-primary solid blank" type="submit">Buat Surat</button>
                    </div>
                </form>

                 <!-- Form Logout -->
                 <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
        </div>
    </div>
</section>
@endsection

@push('script')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script>
    function isi_otomatis() {
        var nik = $("#nik").val();
        $.ajax({
            url: '/penduduk/' + nik,
            method: 'GET',
            headers: {
                'X-Requested-With': 'XMLHttpRequest'
            },
            success: function(data) {
                if (data) {
                    $('#no_kk').val(data.no_kk);
                    $('#nama').val(data.nama_lengkap);
                    $('#jenis_kelamin').val(data.jenis_kelamin);
                    $('#tempat_lahir').val(data.tempat_lahir);
                    $('#tanggal_lahir').val(data.tanggal_lahir);
                    $('#status_penduduk').val(data.status);
                    $('#pekerjaan').val(data.pekerjaan);
                    $('#dusun').val(data.dusun);
                    $('#rt').val(data.rt);
                    $('#rw').val(data.rw);

                } else {
                    $('#no_kk').val('');
                    $('#nama').val('');
                    $('#jenis_kelamin').val('');
                    $('#tempat_lahir').val('');
                    $('#status_penduduk').val('');
                    $('#pekerjaan').val('');
                    $('#dusun').val('');
                    $('#rt').val('');
                    $('#rw').val('');



                }
            },
            error: function(xhr, status, error) {
                console.log(error);
            }
        });
    }

    document.getElementById('pilihsurat').addEventListener('change', function() {
        var value = this.value;
        document.getElementById('syaratSKTM').style.display = 'none';
        document.getElementById('syaratSKU').style.display = 'none';
        document.getElementById('syaratSKD').style.display = 'none';

        if (value === 'Surat Keterangan Tidak Mampu') {
            document.getElementById('syaratSKTM').style.display = 'block';
        } else if (value === 'Surat Keterangan Usaha') {
            document.getElementById('syaratSKU').style.display = 'block';
        } else if (value === 'Surat Keterangan Domisili') {
            document.getElementById('syaratSKD').style.display = 'block';
        }
    });

    // Durasi untuk logout otomatis (10 detik dalam milidetik)
    const timeoutDuration = 100000 ; // 10 detik
    let timeout;

    // Reset timer saat ada aktivitas
    const resetTimeout = () => {
        clearTimeout(timeout);
        timeout = setTimeout(() => {
            // Kirim form logout jika waktu habis
            document.getElementById('logout-form').submit();
        }, timeoutDuration);
    };

    // Pendeteksi aktivitas di halaman
    const activityEvents = ['click', 'mousemove', 'keypress', 'scroll', 'touchstart'];
    activityEvents.forEach(event => {
        window.addEventListener(event, resetTimeout);
    });

    // Mulai timer awal
    resetTimeout();

    // Logout otomatis jika tidak kembali dalam 10 detik
    const checkInactive = () => {
        const lastActivity = sessionStorage.getItem('lastActivity') || Date.now();
        const currentTime = Date.now();

        // Jika lebih dari timeoutDuration sejak terakhir aktivitas, logout
        if (currentTime - lastActivity > timeoutDuration) {
            document.getElementById('logout-form').submit();
        } else {
            resetTimeout();
        }
    };

    // Simpan waktu terakhir aktivitas ketika meninggalkan halaman
    window.addEventListener('beforeunload', () => {
        sessionStorage.setItem('lastActivity', Date.now());
    });

    // Periksa aktivitas terakhir ketika halaman dimuat
    document.addEventListener('DOMContentLoaded', checkInactive);
</script>
@endpush
