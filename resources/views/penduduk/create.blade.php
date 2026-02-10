@extends('adminlte.master')
@section('title')
    Penduduk
@endsection
@section('content')
<div class="col-md-10 mx-auto">
<form role="form" action="{{route('pendudukstore')}}" method="POST">
      <div class="card-body">
        @csrf
          <div class="form-group">
            <label for="no_kk">Nomor KK</label>
            <input type="text" name="no_kk" class="form-control {{$errors->first('no_kk') ? "is-invalid": ""}}" id="no_kk" placeholder="No KK" value="{{old('no_kk')}}">
            <div class="invalid-feedback">
              {{$errors->first('no_kk')}}
            </div>
          </div>
          <div class="form-group">
              <label for="nik">Nomor NIK</label>
              <input type="text" name="nik" class="form-control {{$errors->first('nik') ? "is-invalid": ""}}" id="nik" placeholder="No NIK" value="{{old('nik')}}">
              <div class="invalid-feedback">
                {{$errors->first('nik')}}
              </div>
          </div>
          <div class="form-group">
              <label for="nama_lengkap">Nama Lengkap</label>
              <input type="text" name="nama_lengkap" class="form-control {{$errors->first('nama_lengkap') ? "is-invalid": ""}} " id="nama_lengkap" placeholder="Nama Lengkap" value="{{old('nama_lengkap')}}">
              <div class="invalid-feedback">
                {{$errors->first('nama_lengkap')}}
              </div>
            </div>

            <label for="level">Jenis Kelamin</label>
            <div class="form-group">
              <div class="form-check form-check-inline">
                <input  class="form-check-input" type="radio" name="jenis_kelamin" value="laki" {{(old('jenis_kelamin') == 'laki') ? 'checked' : ''}}>
                <label class="form-check-label inline-block">Laki-Laki</label>
            </div>
              <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="jenis_kelamin" value="perempuan" {{(old('jenis_kelamin') == 'perempuan') ? 'checked' : ''}}>
                  <label class="form-check-label {{$errors->first('jenis_kelamin') ? "is-invalid": ""}}">Perempuan</label>
                  <div class="invalid-feedback">
                    &emsp;{{$errors->first('jenis_kelamin')}}
                  </div>
              </div>
            </div>

            <div class="form-group">
                <label for="tempat_lahir">Hubungan</label>
                <input type="text" name="hubungan" class="form-control {{$errors->first('hubungan') ? "is-invalid": ""}} " id="hubungan" placeholder="hubungan" value="{{old('hubungan')}}" >
                <div class="invalid-feedback">
                  {{$errors->first('hubungan')}}
                </div>

          <div class="form-group">
              <label for="tempat_lahir">Tempat Lahir</label>
              <input type="text" name="tempat_lahir" class="form-control {{$errors->first('tempat_lahir') ? "is-invalid": ""}} " id="tempat_lahir" placeholder="Tempat Lahir" value="{{old('tempat_lahir')}}" >
              <div class="invalid-feedback">
                {{$errors->first('tempat_lahir')}}
              </div>
            </div>
          <div class="form-group">
            <label>Tanggal lahir</label>
              <div class="input-group date" id="reservationdate" data-target-input="nearest">
                <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                    <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                </div>
                  <input name="tanggal_lahir" type="text" class="form-control datetimepicker-input {{$errors->first('tanggal_lahir') ? "is-invalid": ""}} " data-target="#reservationdate" value="{{old('tanggal_lahir')}}">
                  <div class="invalid-feedback">
                    {{$errors->first('tanggal_lahir')}}
                  </div>
              </div>
          </div>

          <div class="form-group">
            <label for="status">Status</label>
            <input type="text" name="status" class="form-control {{$errors->first('status') ? "is-invalid": ""}}" id="status" placeholder="status" value="{{old('status')}}">
            <div class="invalid-feedback">
              {{$errors->first('status')}}
            </div>

            <div class="form-group">
              <label for="pendidikan">Pendidikan</label>
              <input type="text" name="pendidikan" class="form-control {{$errors->first('pendidikan') ? "is-invalid": ""}}" id="pendidikan" placeholder="pendidikan" value="{{old('pendidikan')}}">
              <div class="invalid-feedback">
                {{$errors->first('pendidikan')}}
              </div>
            </div>
            <div class="form-group">
              <label for="pekerjaan">Pekerjaan</label>
              <input type="text" name="pekerjaan" class="form-control {{$errors->first('pekerjaan') ? "is-invalid": ""}}" id="pekerjaan" placeholder="pekerjaan" value="{{old('pekerjaan')}}">
              <div class="invalid-feedback">
                {{$errors->first('pekerjaan')}}
              </div>
            </div>
            <div class="form-group">
              <label for="dusun">Dusun</label>
              <input type="text" name="dusun" class="form-control {{$errors->first('dusun') ? "is-invalid": ""}}" id="dusun" placeholder="dusun" value="{{old('dusun')}}">
              <div class="invalid-feedback">
                {{$errors->first('dusun')}}
              </div>
            </div>
            <div class="form-group">
              <label for="rt">Rt</label>
              <input type="text" name="rt" class="form-control {{$errors->first('rt') ? "is-invalid": ""}}" id="rt" placeholder="rt" value="{{old('rt')}}">
              <div class="invalid-feedback">
                {{$errors->first('rt')}}
              </div>
            </div>

            <div class="form-group">
                <label for="rw">Rw</label>
                <input type="text" name="rw" class="form-control {{$errors->first('rw') ? "is-invalid": ""}}" id="rw" placeholder="rw" value="{{old('rw')}}">
                <div class="invalid-feedback">
                  {{$errors->first('rw')}}
                </div>
              </div>

              <div class="form-group">
                <label for="desa">Desa</label>
                <input type="text" name="desa" class="form-control {{$errors->first('desa') ? "is-invalid": ""}}" id="desa" placeholder="desa" value="{{old('desa')}}">
                <div class="invalid-feedback">
                  {{$errors->first('desa')}}
                </div>
              </div>

        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
      </form>
  </div>
@endsection

@push('styles')
<link rel="stylesheet" href="{{asset('adminlte/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
@endpush

@push('script')
    <script src="{{asset('adminlte/plugins/moment/moment.min.js')}}"></script>
    <script src="{{asset('adminlte/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
    <script>
    $('#reservationdate').datetimepicker({
        format: 'L',
        format: 'DD-MM-YYYY',
    });
    </script>
@endpush
