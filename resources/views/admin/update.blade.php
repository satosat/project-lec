@extends('templates.master')

@yield('title', 'admin')

@section('content')
    <div class="title-admin text-center my-3">
        <h4>Edit Book</h4>
    </div>

    <form action="" method="POST" class="my-5 mx-4 ">
        @csrf
        <div class="form-group p-2 ">
            <div class="row m-2 p-2 ">
                <div class="col-sm-2 align-self-center">
                    <label for="">Title</label>
                </div>
                <div class="col-md-5">
                    <input type="text" name="title" class="form-control" placeholder="Title">
                </div>
            </div>

            <div class="row m-2 p-2">
                <div class="col-sm-2 align-self-center">
                    <label for="">Author</label>
                </div>
                <div class="col-md-5">
                    <input type="text" name="author" class="form-control" placeholder="Author">
                </div>
            </div>
    </form>
@endsection
