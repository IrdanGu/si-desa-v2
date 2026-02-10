@extends('adminlte.master')

@section('title')
    User
@endsection

@section('content')
<div class="col-md-10 mx-auto">
<form role="form" action="{{route('userstore')}}" method="POST">
      <div class="card-body">
        @csrf

        <div class="form-group">
            <label for="name">Nama</label>
            <input type="text" name="name" class="form-control {{$errors->first('name') ? "is-invalid": ""}}" id="name" placeholder="Nama" value="{{old('name')}}">
            <div class="invalid-feedback">
              {{$errors->first('name')}}
            </div>
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" name="email" class="form-control {{$errors->first('email') ? "is-invalid": ""}}" id="email" placeholder="Nama" value="{{old('email')}}">
            <div class="invalid-feedback">
              {{$errors->first('email')}}
            </div>
        </div>

        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" class="form-control {{$errors->first('password') ? "is-invalid": ""}}" id="password" placeholder="Password" value="{{old('password')}}">
            <div class="invalid-feedback">
              {{$errors->first('password')}}
            </div>
          </div>

          <label for="level">Level</label>
          <div class="form-group">
            <div class="form-check form-check-inline">
                <input id="level" class="form-check-input" type="radio" name="level" value="admin" {{(old('level') == 'admin') ? 'checked' : ''}}>
                <label class="form-check-label">Admin</label>
            </div>
            <div class="form-check form-check-inline">
                <input id="level" class="form-check-input" type="radio" name="level" value="karangtaruna"  {{(old('level') == 'karangtaruna') ? 'checked' : ''}}>
                <label class="form-check-label">Karangtaruna</label>
            </div>
            <div class="form-check form-check-inline">
                <input id="level" class="form-check-input" type="radio" name="level" value="user"  {{(old('level') == 'user') ? 'checked' : ''}}>
                <label class="form-check-label">User</label>
            </div>

                <div class="invalid-feedback">
                 &emsp;{{$errors->first('level')}}
                </div>
              </div>
          </div>

        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
      </form>
  </div>
@endsection

