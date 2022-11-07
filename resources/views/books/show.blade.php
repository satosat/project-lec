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
                <form action="{{ route('addBookmark') }}" method="POST" id="bookmarkForm" class="w-100 me-3">
                    @csrf
                    <input type="hidden" name="book_id" id="book_id" value="{{ $book->id }}">
                    <input type="submit" class="btn btn-primary w-100" id="bookmarkBtn"
                        value="{{ $bookmarked }}"></input>
                </form>

                @if ($book->detail->stock != 0)
                    <button type="button" class="btn btn-success w-100" data-bs-toggle="modal"
                        data-bs-target="#checkoutModal">
                        Checkout
                    </button>
                @else
                    <button type="button" class="btn btn-danger w-100" disabled>Checkout</button>
                @endif
            </div>

            {{-- Admin only --}}
            @can('admin')
                <form action="{{ route('delete book', ['id' => $book->id]) }}" method="POST" class="mt-5">
                    @csrf
                    @method('delete')

                    <input type="text" name="book_id" id="book_id" hidden value="{{ $book->id }}">
                    <button type="submit" class="btn btn-danger w-100">Delete Book</button>
                </form>
            @endcan

        </div>

        <!-- Modal -->
        <div class="modal fade" id="checkoutModal" tabindex="-1" aria-labelledby="checkoutModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="checkoutModalLabel">Confirm Checkout</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        Are you sure you want to checkout?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <form action="{{ route('checkout') }}" method="POST">
                            @csrf
                            <input type="hidden" name="book_id" id="book_id" value="{{ $book->id }}">
                            <input type="submit" class="btn btn-primary" value="Checkout">
                        </form>
                    </div>
                </div>
            </div>
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
