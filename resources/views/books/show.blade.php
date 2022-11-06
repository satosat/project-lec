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

            <p>Stock: {{ $book->detail->stock }}</p>

            <div class="d-flex justify-content-between">
                <form action="" method="POST" id="bookmarkForm" class="w-100 me-3">
                    <button type="submit" class="btn btn-primary w-100" id="bookmarkBtn">
                        Remove from Bookmark
                    </button>
                </form>

                @if ($book->detail->stock != 0)
                    <button type="button" class="btn btn-success w-100">
                        <a href="{{ route('checkout', ['id' => $book->id]) }}" class="text-decoration-none text-white">
                            Checkout
                        </a>
                    </button>
                @else
                    <button type="button" class="btn btn-danger" disabled>Checkout</button>
                @endif
            </div>

            {{-- Admin only --}}
            <form action="{{ route('delete book', ['id' => $book->id]) }}" method="POST" class="mt-5">
                @csrf
                @method('delete')

                <input type="text" name="book_id" id="book_id" hidden value="{{ $book->id }}">
                <label for="">((pake middleware nanti))</label>
                <button type="submit" class="btn btn-danger w-100">Delete Book</button>
            </form>

        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            bookmarkBtn = document.getElementById('bookmarkBtn')

            bookmarkBtn.addEventListener('click', () => {
                if (bookmarkBtn.value === "Add to Bookmark") {
                    bookmarkBtn.value = "Remove from Bookmark"
                } else {
                    bookmarkBtn.value = "Add to Bookmark"
                }
            })
        })
    </script>

@endsection
