@extends('layouts.authentication')

@section('title', 'Login')

@section('content')
    <main class="form-signin col-6 m-auto">
        <form action="/login" method="POST" autocomplete="chrome-off">
            @csrf
            <h1 class="h1 mb-3 fw-medium">Login</h1>

            @if (session()->has('registerSuccess'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <small>
                    {{ session('registerSuccess') }}
                </small>
            </div>
        @endif
            @if (session()->has('loginError'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <small>
                        {{ session('loginError') }}
                    </small>
                </div>
            @endif

            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}"
                    placeholder="example@gmail.com" autofocus required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" value="{{ old('password') }}"
                    placeholder="*************" required>
            </div>
            <button class="h5 w-100 btn p-2 btn-primary mt-4" type="submit">Login</button>
            <small class="d-block text-center mt-3">Not registered? <a href="/register">Register</a></small>

        </form>
    </main>

@endsection
