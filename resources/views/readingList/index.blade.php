@extends('templates.master')

@yield('title', 'books')

@section('content')
    <div>
        @foreach ($bookmarks as $b)
            <div class="card" style="width: 18rem;">
                <img src="{{ url(images/img.jpg) }}" class="card-img-top" alt="...">
                <div class="card-body">
                <h5 class="card-title">{{ $b->title }}</h5>
                <p class="card-text">{{ $b->description }}</p>
                <a href="#" class="btn btn-primary">Details</a>
                </div>
            </div>
        @endforeach
    </div>

@endsection
