@extends('adminlte.master')
@section('title')
    Data Berita
@endsection

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Data Potensi Desa</h3>
    </div>
    <div class="card-header">
        <a class="btn btn-primary" href="{{route('potensi_desacreate')}}">Tambah Data</a>
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
            <th>Judul</th>
            <th>Slug</th>
            <th>Content</th>
            <th>Gambar</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($potensi_desa as $no => $potensi_desas)
              <tr>
              <td>{{$no+1}}</td>
              <td>{{$potensi_desas->judul}}</td>
              <td>{{$potensi_desas->slug}}</td>
              <td>{{ Str::limit(strip_tags($potensi_desas->content), 100) }}</td>
              <td><img src="{{asset('storage/' . $potensi_desas->gambar)}}" width="48px"></td>
              <td>
              <a  href="{{route('potensi_desaedit',$potensi_desas->slug)}}"><button style="padding-right:26px" type="submit"  class="btn btn-info"><i class="fas fa-edit"></i> Edit</button> </a>
                <form style="margin-top:2px;" action="{{route('potensi_desadelete',$potensi_desas->slug)}}" method="post" >
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
    <!-- /.card-body -->
    <div class="card-footer clearfix">
      <ul class="pagination pagination-sm m-0 float-right">
        {{$potensi_desa->links()}}
      </ul>
    </div>
  </div>
@endsection

