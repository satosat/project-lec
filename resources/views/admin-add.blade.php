@extends('templates.master')

@section('title', 'admin')

@section('content')
    <div class="title-admin text-center my-3">
        <h4>Add Book</h4>
    </div>

    <form action="{{ route('addBook') }}" method="POST" enctype="multipart/form-data"
        class="d-flex justify-content-around my-5 ">
        @csrf
        {{-- <div class="form-group align-self-start mt-2">
            <div class="custom-file">
              <input type="file" class="custom-file-input" id="">
            </div>
        </div> --}}

        <div class="form-group p-2">
            <div class="row m-2 p-2">
                <div class="col-sm-3 align-self-start mt-2">
                    <label for="">Book Title</label>
                </div>
                <div class="col-md-9">
                    <input type="text" name="title" class="form-control" id="" placeholder="Book Title">
                    @error('title')
                        <p class="text-danger mb-0"><small>{{ $message }}</small></p>
                    @enderror
                </div>
            </div>

            <div class="row m-2 p-2">
                <div class="col-sm-3 align-self-start mt-2">
                    <label for="">Publisher</label>
                </div>
                <div class="col-md-9">
                    <input type="text" name="publisher" class="form-control" id="" placeholder="Publisher">
                    @error('publisher')
                        <p class="text-danger mb-0"><small>{{ $message }}</small></p>
                    @enderror
                </div>
            </div>
            <div class="row m-2 p-2">
                <div class="col-sm-3 align-self-start mt-2">
                    <label for="">ISBN</label>
                </div>
                <div class="col-md-9">
                    <input type="text" name="isbn" class="form-control" id="" placeholder="ISBN">
                    @error('isbn')
                        <p class="text-danger mb-0"><small>{{ $message }}</small></p>
                    @enderror
                </div>
            </div>

            <div class="row m-2 p-2">
                <div class="col-sm-3 align-self-start mt-2">
                    <label for="">Length</label>
                </div>
                <div class="col-md-9">
                    <input type="number" name="length" class="form-control" id="" placeholder="Length">
                    @error('length')
                        <p class="text-danger mb-0"><small>{{ $message }}</small></p>
                    @enderror
                </div>
            </div>

            <div class="row m-2 p-2">
                <div class="col-sm-3 align-self-start mt-2">
                    <label for="">Stock</label>
                </div>
                <div class="col-md-9">
                    <input type="number" name="stock" class="form-control" id="" placeholder="Stock">
                    @error('stock')
                        <p class="text-danger mb-0"><small>{{ $message }}</small></p>
                    @enderror
                </div>
            </div>

            <div class="row m-2 p-2">
                <div class="col-sm-3 align-self-start mt-2">
                    <label for="">Price</label>
                </div>
                <div class="col-md-9">
                    <input type="number" name="price" class="form-control" id="" placeholder="Rp ">
                    @error('price')
                        <p class="text-danger mb-0"><small>{{ $message }}</small></p>
                    @enderror
                </div>
            </div>

            <div class="row m-2 p-2">
                <div class="col-sm-3 align-self-start mt-2">
                    <label for="">Description</label>
                </div>
                <div class="col-md-9">
                    <textarea class="form-control" name="description" id="" cols="30" rows="5"></textarea>
                    @error('description')
                        <p class="text-danger mb-0"><small>{{ $message }}</small></p>
                    @enderror
                </div>
            </div>

            <div class="row m-2 p-2">
                <div class="col-sm-3 align-self-start mt-2">
                    <label for="">Book Cover</label>
                </div>
                <div class="col-md-9">
                    <input type="file" name="book cover" class="form-control" id="" placeholder="Rp ">
                    @error('book cover')
                        <p class="text-danger mb-0"><small>{{ $message }}</small></p>
                    @enderror
                    <p>
                        <small class="text-muted">
                            Book cover should have a resoultion of 600 x 600 pixels for the best result
                        </small>
                    </p>

                </div>
            </div>

            <button type="submit" class="col-10 mx-5 mt-sm-4 mb-sm-4 btn btn-primary">Submit</button>
        </div>
    </form>
@endsection
