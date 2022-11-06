@extends('templates.master')

@section('title', $book->title)

@section('content')
    <div class="container pt-5 d-flex justify-between">
        <div class="me-5">
            <img src="{{ url('images/img.jpg') }}" alt="Book Cover" class="rounded" style="height: 30rem; width: 30rem;">
        </div>

        <div class="d-flex flex-column justify-between">
            <h1>{{ $book->title }}</h1>
            <h3>{{ $book->author }}</h3>
            <p>{{ $book->detail->description }}</p>
            <h3>Rp{{ number_format($book->detail->price, 2, ',', '.') }}</h3>
        </div>
    </div>
@endsection
