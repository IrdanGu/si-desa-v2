@extends('adminlte.master')

@section('title')
    Struktur desa
@endsection

@section('content')
<div class="col-md-10 mx-auto">
<form role="form" action="{{route('kepaladesastore')}}" method="POST" enctype="multipart/form-data">
        <div class="card-body">
            @csrf

            <div class="form-group">
                <label for="nama_ttd">Nama</label>
                <input type="text" name="nama_ttd" class="form-control {{$errors->first('nama_ttd') ? "is-invalid": ""}}" id="nama_ttd" placeholder="nama_ttd" value="{{old('nama_ttd')}}">
                <div class="invalid-feedback">
                  {{$errors->first('nama_ttd')}}
                </div>
              </div>

                <div class="form-group">
                    <label for="exampleInputFile">Gambar</label>
                    <input type="file" class="form-control {{ $errors->first('ttd') ? 'is-invalid' : '' }}" id="exampleInputFile" name="ttd">
                        <div class="invalid-feedback">
                          {{$errors->first('ttd')}}
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


