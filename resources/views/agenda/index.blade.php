@extends('adminlte.master')
@section('title')
    Agenda
@endsection

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Data Agenda</h3>
    </div>
    <div class="card-header">
        <a class="btn btn-primary" href="{{route('agendacreate')}}">Tambah Data</a>
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
            @foreach ($agenda as $no => $agendas)
              <tr>
              <td>{{$no+1}}</td>
              <td>{{$agendas->judul}}</td>
              <td>{{date('d-m-Y',strtotime($agendas->tanggal))}}</td>
              <td>{{$agendas->jam}}</td>
              <td>{{$agendas->acara}}</td>
              <td>{{$agendas->tempat}}</td>
              <td>{{ Str::limit(strip_tags($agendas->content), 100) }}</td>
              <td>{{$agendas->user->level}}</td>
              <td>
              <a  href="{{route('agendaedit',$agendas->id)}}"><button style="padding-right:26px" type="submit"  class="btn btn-info"><i class="fas fa-edit"></i> Edit</button> </a>
                <form style="margin-top:2px;" action="{{route('agendadelete',$agendas->id)}}" method="post" >
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
        {{ $agenda->links('pagination::bootstrap-4') }}
    </div>
</div>



@endsection

