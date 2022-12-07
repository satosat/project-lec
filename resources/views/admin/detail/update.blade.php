@extends('templates.master')

@yield('title', 'admin')

@section('content')
    <div class="title-admin text-center my-3">
        <h4>Edit Book</h4>
    </div>

    <form action="" method="POST" class="my-1 mx-1">
        @csrf
        <div class="row m-2 p-2">
            <div class="col-sm-2 align-self-center">
                <label for="">Publisher</label>
            </div>
            <div class="col-md-5">
                <input type="text" name="publisher" class="form-control" id="" placeholder="Publisher">
            </div>
        </div>

        <div class="row m-2 p-2">
            <div class="col-sm-2 align-self-center">
                <label for="">Length</label>
            </div>
            <div class="col-md-5">
                <input type="number" name="length" class="form-control" id="" placeholder="Length">
            </div>
        </div>

        <div class="row m-2 p-2">
            <div class="col-sm-2 align-self-center">
                <label for="">Stock</label>
            </div>
            <div class="col-md-5">
                <input type="number" name="stock" class="form-control" id="" placeholder="Stock">
            </div>
        </div>

        <div class="row m-2 p-2">
            <div class="col-sm-2 align-self-center">
                <label for="">Price</label>
            </div>
            <div class="col-md-5">
                <input type="number" name="price" class="form-control" id="" placeholder="Rp ">
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
        
        <button type="submit" class="btn btn-primary mx-4 my-4">Save</button>>
    </form>
@endsection
