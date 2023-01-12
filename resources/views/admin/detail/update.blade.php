@extends('templates.master')

@section('title', 'admin')

@section('content')
    <div class="title-admin text-center my-3">
        <h4>Edit Book</h4>
    </div>
 
    <form enctype="multipart/form-data" action="/updateDetail/{{ $p->id }}" method="POST" class="my-1 mx-1">
        @method('PUT')
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
        </div>
        
        <div class="row m-2 p-2">
            <div class="col-sm-2 align-self-center">
                <label for="">Publisher</label>
            </div>
            <div class="col-md-5">
                <input type="text" name="publisher" class="form-control" id="" value="{{ $p->publisher }}">
            </div>
        </div>

        <div class="row m-2 p-2">
            <div class="col-sm-2 align-self-center">
                <label for="">Length</label>
            </div>
            <div class="col-md-5">
                <input type="number" name="length" class="form-control" id="" value="{{ $p->length }}">
            </div>
        </div>

        <div class="row m-2 p-2">
            <div class="col-sm-2 align-self-center">
                <label for="">Stock</label>
            </div>
            <div class="col-md-5">
                <input type="number" name="stock" class="form-control" id="" value="{{ $p->stock }}">
            </div>
        </div>

        <div class="row m-2 p-2">
            <div class="col-sm-2 align-self-center">
                <label for="">Price</label>
            </div>
            <div class="col-md-5">
                <input type="number" name="price" class="form-control" id="" value="{{ $p->price }}">
            </div>
        </div>

        <div class="row m-2 p-2">
            <div class="col-sm-2 align-self-start">
                <label for="">Description</label>
            </div>
            <div class="col-md-5">
               <textarea class="form-control" name="description" id="" cols="30" rows="5"></textarea>
            </div>
        </div>

        <div class="row m-2 p-2">
            <div class="col-2 align-self-start">
                <label for="">Image</label>
            </div>
            <div class="col-4">
                <input type="file" class="form-control" id="" name="images" value="{{ $p->images }}"> 
            </div>
        </div>
        
        <button type="submit" class="btn btn-primary mx-4 my-4">Save</button>>
    </form>
@endsection
