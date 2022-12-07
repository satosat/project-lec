@extends('templates.master')

@yield('title', 'admin')

@section('content')
    <div class="title-admin text-center my-3">
        <h4>Add Book</h4>
    </div>

    <form action={{ route('addBook') }} method="post">
        <div class="row m-2 p-2">
            <div class="col-sm-2 align-self-center">
                <label for="">Title</label>
            </div>
            <div class="col-md-5">
                <input type="text" name="title" class="form-control" id="" placeholder="Title">
            </div>
        </div>

        <div class="row m-2 p-2">
            <div class="col-sm-2 align-self-center">
                <label for="">Author</label>
            </div>
            <div class="col-md-5">
                <input type="text" name="author" class="form-control" id="" placeholder="Author">
            </div>
        </div>

        <button type="" class="btn btn-primary mx-4 my-4">Add Book</button>
    </form>
     
@endsection
