@extends('adminlte.master')

@section('title')
    Berita
@endsection

@section('content')
<div class="col-md-10 mx-auto">
<form role="form" action="{{ route('aparaturupdate', ['id' => $aparatur_desas->id]) }}" method="POST" enctype="multipart/form-data">
        <div class="card-body">
            @csrf
            @method('PUT')
                <div class="form-group">
                    <label for="exampleInputFile">Gambar Saat Ini</label> <br>
                    <img style="margin-top:9px;" src="{{asset('storage/' . $aparatur_desas->gambar_struktur)}}" width="80px">
                    <br> <br>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile" name="gambar_struktur">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
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


