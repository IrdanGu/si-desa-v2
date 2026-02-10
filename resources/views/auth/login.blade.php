@extends('layouts.auth.app')

@section('content')
    <div class="brand">
        <img src="{{asset('storage/gambar/logos.png')}}" alt="logo">
    </div>
    <div class="card fat">
        <div class="card-body">
            <h4 class="card-title">{{ __('Login') }}</h4>
            <form method="POST" class="my-login-validation" action="{{ route('login') }}">
                @csrf
                <div class="form-group">
                    <label for="email">E-Mail Address</label>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                        name="email" value="{{ old('email') }}" required autofocus>
                    @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="password">Password
                        {{-- <a href="forgot.blade.php" class="float-right">
                            Forgot Password?
                        </a> --}}
                    </label>
                    <input id="password" type="password"
                        class="form-control @error('password')
                    is-invalid @enderror"
                        name="password" required data-eye>
                    <div class="invalid-feedback">
                        Password is required
                    </div>
                </div>

                <div class="form-group">
                    <label for="level">Role</label>
                    <select id="level" name="level" class="form-control @error('level') is-invalid @enderror" required>
                        <option value="">Select Role</option>
                        <option value="admin">Admin</option>
                        <option value="karangtaruna">Karang Taruna</option>
                        <option value="user">User</option>
                    </select>
                    @error('level')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                {{-- <div class="form-group">
                    <div class="custom-checkbox custom-control">
                        <input type="checkbox" name="remember" id="remember" class="custom-control-input">
                        <label for="remember" class="custom-control-label">Remember Me</label>
                    </div>
                </div> --}}

                <div class="form-group m-0">
                    <button type="submit" class="btn btn-primary btn-block">
                        Login
                    </button>
                </div>
                {{-- <div class="mt-4 text-center">
                    <a href="{{ route('register.user') }}">Buat Akun Baru</a>
                </div> --}}
            </form>
        </div>
    </div>
@endsection
