@extends('adminlte.master')
@section('title')
    Data Berita
@endsection

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Struktur desa</h3>
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
            <th>Gambar</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($aparatur_desas as $no => $aparatur)
              <tr>
              <td>{{$no+1}}</td>
              <td><img src="{{asset('storage/' . $aparatur->gambar_struktur)}}" width="48px"></td>
              <td>
              <a  href="{{route('aparaturedit', $aparatur->id)}}"><button style="padding-right:26px" type="submit"  class="btn btn-info"><i class="fas fa-edit"></i> Edit</button> </a>
                <form style="margin-top:2px;" action="{{route('aparaturdelete',$aparatur->id)}}" method="post" >
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

      </ul>
    </div>
  </div>
@endsection

