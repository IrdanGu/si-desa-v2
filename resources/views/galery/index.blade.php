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
        <a class="btn btn-primary" href="{{route('galerycreate')}}">Tambah Data</a>
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
            <th>No</th>
            <th>Name</th>
            <th>Gambar</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($galery as $no => $galerys)
              <tr>
              <td>{{$no+1}}</td>
              <td>{{$galerys->nama}}</td>
              <td><img src="{{asset('storage/' . $galerys->gambar)}}" width="48px"></td>
              <td>
              <a  href="{{route('galeryedit', $galerys->id_galery)}}"><button style="padding-right:26px" type="submit"  class="btn btn-info"><i class="fas fa-edit"></i> Edit</button> </a>
                <form style="margin-top:2px;" action="{{route('galerydelete',$galerys->id_galery)}}" method="post" >
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

