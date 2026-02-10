@extends('adminlte.master')

@section('title')
    Agenda
@endsection

@section('content')
<div class="col-md-10 mx-auto">
<form role="form" action="{{route('agendastore')}}" method="POST" enctype="multipart/form-data">
        <div class="card-body">
            @csrf
                <div class="form-group">
                    <label for="judul">Judul</label>
                    <input type="text" name="judul" class="form-control {{$errors->first('judul') ? "is-invalid": ""}}" id="judul" placeholder="judul" value="{{old('judul')}}">
                    <div class="invalid-feedback">
                      {{$errors->first('judul')}}
                    </div>
                  </div>

                  <div class="form-group">
                    <label>Tanggal</label>
                      <div class="input-group date" id="reservationdate" data-target-input="nearest">
                        <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                        </div>
                          <input name="tanggal" type="date" class="form-control datetimepicker-input {{$errors->first('tanggal') ? "is-invalid": ""}} " data-target="#reservationdate" value="{{old('tanggal')}}">
                          <div class="invalid-feedback">
                            {{$errors->first('tanggal')}}
                          </div>
                      </div>
                  </div>

                  <div class="form-group">
                    <label for="jam">Jam</label>
                    <input type="text" name="jam" class="form-control {{$errors->first('jam') ? "is-invalid": ""}}" id="jam" placeholder="jam" value="{{old('jam')}}">
                    <div class="invalid-feedback">
                      {{$errors->first('jam')}}
                    </div>

                    <div class="form-group">
                        <label for="acara">Acara</label>
                        <input type="text" name="acara" class="form-control {{$errors->first('acara') ? "is-invalid": ""}}" id="acara" placeholder="acara" value="{{old('acara')}}">
                        <div class="invalid-feedback">
                          {{$errors->first('acara')}}
                        </div>


                    <div class="form-group">
                        <label for="tempat">Tempat</label>
                        <input type="text" name="tempat" class="form-control {{$errors->first('tempat') ? "is-invalid": ""}}" id="tempat" placeholder="tempat" value="{{old('tempat')}}">
                        <div class="invalid-feedback">
                          {{$errors->first('tempat')}}
                        </div>


                        <div class="form-group">
                            <label for="judul">Content</label>
                            <textarea class="textarea {{$errors->first('content') ? "is-invalid": ""}}" name="content" placeholder="Content" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{old('content')}}</textarea>
                            <div class="invalid-feedback">
                              {{$errors->first('content')}}
                            </div>
                        </div>

                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>

@endsection


@push('styles')
<link rel="stylesheet" href="{{asset('adminlte/plugins/summernote/summernote-bs4.min.css')}}">
@endpush

@push('script')
<script src="{{asset('adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('adminlte/plugins/bs-custom-file-input/bs-custom-file-input.min.js')}}"></script>
<script src="{{asset('adminlte/plugins/summernote/summernote-bs4.min.js')}}"></script>
<script>
  $(function () {
    $('.textarea').summernote()
  })
</script>
<script type="text/javascript">
    $(document).ready(function () {
      bsCustomFileInput.init();
    });
    </script>
@endpush


