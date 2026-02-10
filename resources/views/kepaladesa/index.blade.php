@extends('adminlte.master')
@section('title')
    Data Galery
@endsection

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Galery</h3>
    </div>

    <div class="card-header">
        <a class="btn btn-primary" href="{{route('kepaladesacreate')}}">Tambah Data</a>
    </div>
        <div class="card-header">
      <form action="">
        <div class="row">
              <div class="col-md-7">
                <input value="{{Request::get('keyword')}}" name="keyword" class="form-control"type="text" placeholder="Masukan Judul untuk pencarian.....">
              </div>
              <button type="submit" class="btn btn-primary"> <i class="fas fa-search" ></i> Cari </button>
        </div>
      </form>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <table class="table table-bordered table-hover ">
        <thead class="table-secondary">
          <tr>
            <th>no</th>
            <th>Nama Kepala desa</th>
            <th>ttd</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($kepaladesa as $no => $kepaladesas )
              <tr>
                <td>{{$no+1}}</td>
              <td>{{$kepaladesas->nama_ttd}}</td>
              <td><img src="{{asset('storage/' . $kepaladesas->ttd)}}" width="48px"></td>
              <td>
              <a  href="{{route('kepaladesaedit', $kepaladesas->id)}}"><button style="padding-right:26px" type="submit"  class="btn btn-info"><i class="fas fa-edit"></i> Edit</button> </a>
                <form style="margin-top:2px;" action="{{route('kepaladesadelete',$kepaladesas->id)}}" method="post" >
                  @csrf
                  @method('DELETE')
                  <button onclick="return confirm('Yakin Hapus Data Ini?')" class="btn  btn-danger" type="submit "><i class="fas fa-trash"></i> Hapus</button>
                </form>
              </td>
              </tr>
            @endforeach
            </tbody>

      </table>
    </div>
    <div class="d-flex justify-content-center">
        {{-- {{ $galery->links('pagination::bootstrap-4') }} --}}
    </div>
</div>
@endsection

