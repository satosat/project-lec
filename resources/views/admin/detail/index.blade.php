@extends('templates.master')

@section('title', 'admin')

@section('content')
    <div class="m-4 mb-3">
        <h4>Add Detail Book</h4>
    </div>

    <form enctype="multipart/form-data" action="{{ route('addBookDetail') }}" method="POST" class="my-1 mx-1">
        @csrf

        <div class="row m-2 p-2">
            <div class="col-2 align-self-center">
                <label for="">Title</label>
            </div>
            <div class="col-4">
                <input type="text" name="title" class="form-control" id="" placeholder="Title">
            </div>
        </div>

        <div class="row m-2 p-2">
            <div class="col-2 align-self-center">
                <label for="">Author</label>
            </div>
            <div class="col-4">
                <input type="text" name="author" class="form-control" id="" placeholder="Author">
            </div>
        </div>
        
        <div class="row m-2 p-2">
            <div class="col-2 align-self-center">
                <label for="">Publisher</label>
            </div>
            <div class="col-4">
                <input type="text" name="publisher" class="form-control" id="" placeholder="Publisher">
            </div>
        </div>

        <div class="row m-2 p-2">
            <div class="col-2 align-self-center">
                <label for="">Length</label>
            </div>
            <div class="col-4">
                <input type="number" name="length" class="form-control" id="" placeholder="Length">
            </div>
        </div>

        <div class="row m-2 p-2">
            <div class="col-2 align-self-center">
                <label for="">Stock</label>
            </div>
            <div class="col-4">
                <input type="number" name="stock" class="form-control" id="" placeholder="Stock">
            </div>
        </div>

        <div class="row m-2 p-2">
            <div class="col-2 align-self-center">
                <label for="">Price</label>
            </div>
            <div class="col-4">
                <input type="number" name="price" class="form-control" id="" placeholder="Rp ">
            </div>
        </div>

        <div class="row m-2 p-2">
            <div class="col-2 align-self-start">
                <label for="">Description</label>
            </div>
            <div class="col-4"> 
               <textarea class="form-control" name="description" id="" cols="30" rows="5"></textarea>
            </div>
        </div>

        <div class="row m-2 p-2">
            <div class="col-2 align-self-start">
                <label for="">Image</label>
            </div>
            <div class="col-4">
                <input type="file" class="form-control" name="images">
            </div>
        </div>
        
        <button type="submit" class="btn btn-primary mx-4 my-4 col-6">Submit</button>
    </form>
    
@endsection
