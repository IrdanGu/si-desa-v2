@extends('adminlte.master')

@section('title')
    Surat Keterangan Usaha
@endsection

@section('content')
<div class="col-md-10 mx-auto">
    <form role="form" action="{{route('suratupdate', $surat->id) }}" method="POST">
        <div class="card-body">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="pilihsurat">Pilih Surat</label>
                <select class="form-control" id="pilihsurat" name="pilihsurat" required>
                    <option value="Surat Keterangan Tidak Mampu" {{ old('pilihsurat', $surat->pilihsurat) == 'Surat Keterangan Tidak Mampu' ? 'selected' : '' }}>Surat Keterangan Tidak Mampu</option>
                    <option value="Surat Keterangan Usaha" {{ old('pilihsurat', $surat->pilihsurat) == 'Surat Keterangan Usaha' ? 'selected' : '' }}>Surat Keterangan Usaha</option>
                </select>
            </div>

            <div class="form-group">
                <label for="no_hp">No Handphone</label>
                <input type="text" name="no_hp" class="form-control {{$errors->first('no_hp') ? "is-invalid": ""}} " id="no_hp" value="{{$surat->no_hp}}">
                <div class="invalid-feedback">
                  {{$errors->first('no_hp')}}
                </div>
              </div>


            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>
@endsection

