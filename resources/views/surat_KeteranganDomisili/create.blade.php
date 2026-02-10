@extends('adminlte.master')
@section('title')
    Surat Kurang Mampu
@endsection

@section('content')
<div class="col-md-10 mx-auto">
    <form role="form" action="{{ route('suratstore') }}" method="POST">
          <div class="card-body">
            @csrf
            <div class="form-group">
                <label for="nik">Nomor NIK</label>
                <input type="text" name="nik" onkeyup="isi_otomatis()" class="form-control {{ $errors->first('nik') ? 'is-invalid' : '' }}" id="nik" placeholder="No NIK">
                <div class="invalid-feedback">
                    {{ $errors->first('nik') }}
                </div>
            </div>
            <div class="form-group">
                <label for="no_kk">Nomor KK</label>
                <input type="text" readonly name="no_kk" class="form-control" id="no_kk" placeholder="No KK">
            </div>
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" readonly name="nama" class="form-control" id="nama" placeholder="Nama">
            </div>
            <div class="form-group">
                <label for="pilihsurat">Jenis Surat</label>
                <select name="pilihsurat" class="form-control {{ $errors->first('jenis_surat') ? 'is-invalid' : '' }}" id="pilihsurat">
                    <option value="">Pilih Surat</option>
                    <option value="Surat Keterangan Tidak Mampu">Surat Keterangan Tidak Mampu</option>
                    <option value="Surat Keterangan Usaha">Surat Keterangan Usaha</option>
                </select>
                <div class="invalid-feedback">
                    {{ $errors->first('pilihsurat') }}
                </div>
            </div>

            <div class="form-group">
                <label for="no_hp">Nomor HP</label>
                <input type="text" name="no_hp" class="form-control {{$errors->first('no_hp') ? "is-invalid": ""}}" id="no_hp" value="{{old('no_hp')}}">
                <div class="invalid-feedback">
                  {{$errors->first('no_hp')}}
                </div>
              </div>

            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
    </form>
</div>
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

                } else {
                    $('#no_kk').val('');
                    $('#nama').val('');
                }
            },
            error: function(xhr, status, error) {
                console.log(error);
            }
        });
    }
</script>
@endpush
