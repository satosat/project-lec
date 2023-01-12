@extends('templates.master')

@section('title', 'Bookmarks')

@section('content')
    @if (count($bookmarks) > 0)
        <div class="container px-4 px-lg-5 mt-5">
            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-evenly">

                @foreach ($bookmarks as $bookmark)
                    <div class="card mb-5" style="width: 18rem; padding: 0">
                        <img src="{{ asset('storage/book_images/' . $bookmark->images) }}" class="card-img-top" alt="">
                        <div class="card-body" style="margin-left: 1rem; margin-right: 1rem">
                            <h5 class="card-title" style="height: 3rem">{{ $bookmark->title }}</h5>
                            <p class="card-text">By {{ $bookmark->author }}</p>
                            <a href="{{ route('show book', ['id' => $bookmark->id]) }}"
                                class="btn btn-primary w-100">Details</a>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    @else
        <div class="w-100 mt-5 d-flex justify-content-center">
            <p class="display-5 my-auto">Bookmark is empty</p>
        </div>
    @endif

@endsection
