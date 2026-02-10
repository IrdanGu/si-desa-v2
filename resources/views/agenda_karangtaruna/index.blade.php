@extends('adminlte.master')
@section('title')
    Data Berita
@endsection

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Data Agenda Karangtaruna</h3>
    </div>
    <div class="card-header">
        <a class="btn btn-primary" href="{{route('agenda_karangtarunacreate')}}">Tambah Data</a>
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
            <th>tanggal</th>
            <th>jam</th>
            <th>acara</th>
            <th>tempat</th>
            <th>content</th>
            <th>pembuat</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($agenda_karangtaruna as $no => $agenda_karangtarunas)
              <tr>
              <td>{{$no+1}}</td>
              <td>{{$agenda_karangtarunas->judul}}</td>
              <td>{{date('d-m-Y',strtotime($agenda_karangtarunas->tanggal))}}</td>
              <td>{{$agenda_karangtarunas->jam}}</td>
              <td>{{$agenda_karangtarunas->acara}}</td>
              <td>{{$agenda_karangtarunas->tempat}}</td>
              <td>{{ Str::limit(strip_tags($agenda_karangtarunas->content), 100) }}</td>
              <td>{{$agenda_karangtarunas->user->level}}</td>
              <td>
              <a  href="{{route('agenda_karangtarunaedit',$agenda_karangtarunas->id)}}"><button style="padding-right:26px" type="submit"  class="btn btn-info"><i class="fas fa-edit"></i> Edit</button> </a>
                <form style="margin-top:2px;" action="{{route('agenda_karangtarunadelete',$agenda_karangtarunas->id)}}" method="post" >
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
        {{ $agenda_karangtaruna->links('pagination::bootstrap-4') }}
    </div>
</div>


@endsection

