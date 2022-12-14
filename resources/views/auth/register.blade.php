@extends('layouts.authentication')

@section('title', 'Register')

@section('content')
    <main class="form-signin col-6 m-auto">
        <form action="/register" method="POST" autocomplete="chrome-off">
            @csrf
            <h1 class="h1 mb-3 fw-medium">Register</h1>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control @error('email') is-invalid @enderror" id="email"
                    name="email" value="{{ old('email') }}" placeholder="example@gmail.com" autofocus>
                @error('email')
                    <div class="invalid-feedback">
                       {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">Full Name</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name"
                    name="name" value="{{ old('name') }}" placeholder="John Doe">
                @error('name')
                    <div class="invalid-feedback">
                       {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control @error('username') is-invalid @enderror" id="username"
                    name="username" value="{{ old('username') }}" placeholder="john123">
                @error('username')
                    <div class="invalid-feedback">
                       {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control @error('password') is-invalid @enderror" id="password"
                    name="password" value="" placeholder="*************">
                @error('password')
                    <div class="invalid-feedback">
                       {{ $message }}
                    </div>
                @enderror
            </div>
            <button class="h5 w-100 btn p-2 btn-primary mt-4" type="submit">Register</button>
            <small class="d-block text-center mt-3">Already registered? <a href="/login">Login</a></small>
        </form>
    </main>

@endsection
