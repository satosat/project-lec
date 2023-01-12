@extends('templates.master')

@section('title', 'books')

@section('content')
    <div class="container px-4 px-lg-5 mt-5">
        <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-evenly">

            {{-- Individual book card --}}
            @foreach ($books as $book)
                <div class="card mb-5" style="width: 18rem; padding: 0">
                    <img src="{{ url('images/'.rand(1,6).'.png') }}" class="card-img-top" alt="">
                    <div class="card-body" style="margin-left: 1rem; margin-right: 1rem">
                        <h5 class="card-title" style="height: 3rem">{{ $book->title }}</h5>
                        <p class="card-text">By {{ $book->author }}</p>
                        <a href="{{ route('show book', ['id' => $book->id]) }}" class="btn btn-primary w-100">Details</a>
                    </div>
                </div>
            @endforeach

        </div>

        {{-- Pagination --}}
        {{ $books->links() }}
    </div>
@endsection
