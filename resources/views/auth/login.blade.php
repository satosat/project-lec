@extends('layouts.authentication')

@section('title', 'Login')

@section('content')
    <main class="form-signin col-6 m-auto">
        <form>
            <h1 class="h1 mb-3 fw-medium">Login</h1>

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
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control @error('password') is-invalid @enderror" id="password"
                    name="password" value="{{ old('password') }}" placeholder="*************" autofocus>
                @error('email')
                    <div class="invalid-feedback">
                       {{ $message }}
                    </div>
                @enderror
            </div>
            <button class="h5 w-100 btn p-2 btn-primary mt-4" type="submit">Login</button>
            <p class="text-center">Don't have an account? <a href="/register">Register</a></p>
        </form>
    </main>

@endsection
