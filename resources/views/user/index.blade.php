@extends('adminlte.master')
@section('title')
    Data User
@endsection

@section('content')
<div class="card">
    @if(session('success'))
        <div class="alert alert-success m-3 mb-0">
            {{ session('success') }}
        </div>
    @endif

    @if(session('error'))
        <div class="alert alert-danger m-3 mb-0">
            {{ session('error') }}
        </div>
    @endif

    <div class="card-header">
        <h3 class="card-title">Data User</h3>
    </div>
    <div class="card-header">
        <a class="btn btn-primary" href="{{route('usercreate')}}">Tambah Data</a>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <table class="table table-bordered table-hover ">
        <thead class="table-secondary">
          <tr>
            <th>Nama</th>
            <th>Email</th>
            <th>Level</th>
            <th>Action</th>

          </tr>
        </thead>
        <tbody>
        @foreach ($user as $users)
          <tr>
          <td>{{$users->name}}</td>
          <td>{{$users->email}}</td>
          <td>{{$users->level}}</td>
          <td>
          <a href="{{ route('useredit', $users->id) }}" class="btn btn-info"><i class="fas fa-edit"></i> Edit</a>
            <form action="{{ route('userdelete', $users->id) }}" method="post" style="display: inline" class="form-check-inline">
              @csrf
              @method('DELETE')
              <button onclick="return confirm('Yakin Hapus Data Ini?')" class="btn btn-danger" type="submit"><i class="fas fa-trash"></i> Hapus</button>
            </form>
          </td>
          </tr>
        @endforeach
        </tbody>
      </table>
    </div>
  </div>
@endsection
