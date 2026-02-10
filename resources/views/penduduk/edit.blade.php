
@extends('adminlte.master')
@section('title')
    Penduduk
@endsection
@section('content')
<div class="col-md-10 mx-auto">
<form role="form" action="{{route(('pendudukupdate'),$penduduk->nik)}}" method="POST">
      <div class="card-body">
        @csrf
        @method('PUT')
          <div class="form-group">
              <label for="nik">Nomor KK</label>
              <input type="text" readonly name="no_kk" class="form-control {{$errors->first('no_kk') ? "is-invalid": ""}}" id="no_kk" value="{{$penduduk->no_kk}}">
          <div class="invalid-feedback">
            {{$errors->first('no_kk')}}
          </div>
        </div>
          <div class="form-group">
              <label for="nik">Nomor NIK</label>
              <input type="text" readonly name="nik" class="form-control {{$errors->first('nik') ? "is-invalid": ""}}" id="nik" value="{{$penduduk->nik}}">
              <div class="invalid-feedback">
                {{$errors->first('nik')}}
              </div>
            </div>
          <div class="form-group">
              <label for="nama_lengkap">Nama Lengkap</label>
              <input type="text" name="nama_lengkap" class="form-control {{$errors->first('nama_lengkap') ? "is-invalid": ""}} " id="nama_lengkap" value="{{$penduduk->nama_lengkap}}">
              <div class="invalid-feedback">
                {{$errors->first('nama_lengkap')}}
              </div>
            </div>

            <label for="level">Jenis Kelamin</label>
            <div class="form-group">
              <div class="form-check form-check-inline">
                <input  class="form-check-input" type="radio" {{$penduduk->jenis_kelamin == "laki" ? "checked" : ""}} name="jenis_kelamin" value="laki" >
                <label class="form-check-label">Laki-Laki</label>
              </div>
              <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" {{$penduduk->jenis_kelamin == "perempuan" ? "checked" : ""}} name="jenis_kelamin" value="perempuan">
                  <label class="form-check-label {{$errors->first('jenis_kelamin') ? "is-invalid": ""}}">Perempuan</label>
                  <div class="invalid-feedback">
                    &emsp;{{$errors->first('jenis_kelamin')}}
                  </div>
                </div>
            </div>

            <div class="form-group">
                <label for="hubungan">Hubungan</label>
                <input type="text" name="hubungan" class="form-control {{$errors->first('hubungan') ? "is-invalid": ""}} " id="hubungan" value="{{$penduduk->hubungan}}">
                <div class="invalid-feedback">
                  {{$errors->first('hubungan')}}
                </div>
              </div>

          <div class="form-group">
              <label for="tempat_lahir">Tempat Lahir</label>
              <input type="text" name="tempat_lahir" class="form-control {{$errors->first('tempat_lahir') ? "is-invalid": ""}} " id="tempat_lahir" value="{{$penduduk->tempat_lahir}}">
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
                  <input name="tanggal_lahir" type="text" class="form-control datetimepicker-input {{$errors->first('tanggal_lahir') ? "is-invalid": ""}}  " data-target="#reservationdate" value="{{date('d-m-Y',strtotime($penduduk->tanggal_lahir))}}">
                  <div class="invalid-feedback">
                    {{$errors->first('tanggal_lahir')}}
                  </div>
                </div>
            </div>

            <div class="form-group">
                <label for="status">Status</label>
                <input type="text" name="status" class="form-control {{$errors->first('status') ? "is-invalid": ""}}" id="status" value="{{$penduduk->status}}">
                <div class="invalid-feedback">
                  {{$errors->first('status')}}
                </div>
              </div>

            <div class="form-group">
              <label for="pendidikan">Pendidikan</label>
              <input type="text" name="pendidikan" class="form-control {{$errors->first('pendidikan') ? "is-invalid": ""}}" id="pendidikan" value="{{$penduduk->pendidikan}}">
              <div class="invalid-feedback">
                {{$errors->first('pendidikan')}}
              </div>
            </div>

            <div class="form-group">
              <label for="pekerjaan">Pekerjaan</label>
              <input type="text" name="pekerjaan" class="form-control {{$errors->first('pekerjaan') ? "is-invalid": ""}} " id="pekerjaan" value="{{$penduduk->pekerjaan}}">
              <div class="invalid-feedback">
                {{$errors->first('pekerjaan')}}
              </div>
            </div>
            <div class="form-group">
              <label for="dusun">Dusun</label>
              <input type="text" name="dusun" class="form-control {{$errors->first('dusun') ? "is-invalid": ""}} " id="dusun" value="{{$penduduk->dusun}}">
              <div class="invalid-feedback">
                {{$errors->first('dusun')}}
              </div>
            </div>
            <div class="form-group">
              <label for="rt">Rt</label>
              <input type="text" name="rt" class="form-control  {{$errors->first('rt') ? "is-invalid": ""}}" id="rt" value="{{$penduduk->rt}}">
              <div class="invalid-feedback">
                {{$errors->first('rt')}}
              </div>
            </div>

            <div class="form-group">
                <label for="rw">Rw</label>
                <input type="text" name="rw" class="form-control  {{$errors->first('rw') ? "is-invalid": ""}}" id="rw" value="{{$penduduk->rw}}">
                <div class="invalid-feedback">
                  {{$errors->first('rw')}}
                </div>
              </div>

              <div class="form-group">
                <label for="desa">Desa</label>
                <input type="text" name="desa" class="form-control  {{$errors->first('desa') ? "is-invalid": ""}}" id="desa" value="{{$penduduk->desa}}">
                <div class="invalid-feedback">
                  {{$errors->first('desa')}}
                </div>
              </div>

        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
      </form>
  </div>

@endsection

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
