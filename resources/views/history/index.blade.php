@extends('templates.master')

@section('title', 'History')

@section('content')
    <div class="container">
        <table class="table">
            <thead>
                <th class="col">No.</th>
                <th scope="col">Transaction Date</th>
                <th scope="col">Book ID</th>
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
@endsection
