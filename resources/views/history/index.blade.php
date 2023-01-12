@extends('templates.master')

@section('title', 'History')

@section('content')
    @if (count($transactions) > 0)
        <div class="container">
            <table class="table">
                <thead>
                    <th class="col">No.</th>
                    <th scope="col">Transaction Date</th>
                    <th scope="col">Book Title</th>
                    <th scope="col">Price</th>
                </thead>
                <tbody>
                    @foreach ($transactions as $transaction)
                        <tr>
                            <td>{{ $loop->index + 1 }}</td>
                            <td>{{ date('j M Y', strtotime($transaction->created_at)) }}</td>
                            <td>{{ $transaction->book->title }}</td>
                            <td>Rp{{ number_format($transaction->price, 2, ',', '.') }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @else
        <div class="w-100 mt-5 d-flex justify-content-center">
            <p class="display-5 my-auto">History is empty</p>
        </div>
    @endif
@endsection
