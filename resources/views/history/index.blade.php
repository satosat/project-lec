@extends('templates.master')

@yield('title', 'history')

@section('content')
    <div>
        <table class="table">
            <thead>
                <th scope="col">User ID</th>
                <th scope="col">Book ID</th>
                <th scope="col">Price</th>
            </thead>
            <tbody>
                <tr>
                    @foreach ($transactions as $t)
                    <tr>
                        <td>{{ $t->user_id }}</td>
                        <td>{{ $t->book_id }}</td>
                        <td>{{ $t->price }}</td>
                    </tr>
                    @endforeach

                </tr>
            </tbody>
        </table>
    </div>

@endsection
