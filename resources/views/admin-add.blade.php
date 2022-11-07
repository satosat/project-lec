@extends('templates.master')

@yield('title', 'admin')

@section('content')
    <div class="title-admin text-center my-3">
        <h4>Add Book</h4>
    </div>

    <form action="" method="POST" class="d-flex justify-content-around my-5 ">
        <div class="form-group align-self-center">
            <div class="custom-file">
              <input type="file" class="custom-file-input" id="">
            </div>
        </div>

        <div class="form-group p-2">
            <div class="row m-2 p-2">
                <div class="col-sm-3 align-self-center">
                    <label for="">Book Title</label>
                </div>
                <div class="col-md-9">
                    <input type="text" class="form-control" id="" placeholder="Book Title">
                </div>
            </div>

            <div class="row m-2 p-2">
                <div class="col-sm-3 align-self-center">
                    <label for="">Publisher</label>
                </div>
                <div class="col-md-9">
                    <input type="text" class="form-control" id="" placeholder="Publisher">
                </div>
            </div>

            <div class="row m-2 p-2">
                <div class="col-sm-3 align-self-center">
                    <label for="">Length</label>
                </div>
                <div class="col-md-9">
                    <input type="number" class="form-control" id="" placeholder="Length">
                </div>
            </div>

            <div class="row m-2 p-2">
                <div class="col-sm-3 align-self-center">
                    <label for="">Stock</label>
                </div>
                <div class="col-md-9">
                    <input type="number" class="form-control" id="" placeholder="Stock">
                </div>
            </div>

            <div class="row m-2 p-2">
                <div class="col-sm-3 align-self-start">
                    <label for="">Description</label>
                </div>
                <div class="col-md-9">
                   <textarea class="form-control" id="" cols="30" rows="5"></textarea>
                </div>
            </div>
            
            <button type="submit" class="col-4 mx-4 mt-sm-4 mb-sm-4 btn btn-primary">Submit</button>
        </div>
    </form>
@endsection
