@extends('master')
@section('content')

    <style>
    .navbar {
        display: flex;
        justify-content: flex-end; /* Align buttons to the right */
        align-items: center;
        background-color: #333;
        color: #fff;
        padding: 10px 0;
    }

    .navbar a {
        text-decoration: none;
        color: #fff;
        font-weight: bold;
        padding: 10px 20px; /* Add padding here */
        transition: color 0.3s;
    }

    .navbar a:hover {
        color: #f5a623;
    }

    </style>

    <h1>Add Watch</h1>
    <form action="/watches" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-12">
                <div class="card bg-dark text-white">
                    <div class="card-body bg-dark text-white">
                        <div class="form-group form-dark bg-dark color-dark text-white">
                            <label>Brand</label>
                            <input type="text" class="form-control form-dark bg-dark color-dark text-white" name="brand" placeholder="Enter Brand">
                            @error('brand')
                                <div class="alert alert-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Model</label>
                            <input type="text" class="form-control form-dark bg-dark color-dark text-white" name="model" placeholder="Enter Model">
                            @error('model')
                                <div class="alert alert-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>


                        <div class="form-group">
                            <label>Release</label>
                            <input type="date" class="form-control form-dark bg-dark color-dark text-white" name="features" placeholder="Enter Features">
                            @error('features')
                                <div class="alert alert-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Price</label>
                            <input type="number" class="form-control form-dark bg-dark color-dark text-white" name="price" placeholder="Enter Price">
                            @error('price')
                                <div class="alert alert-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>desc</label>
                            <textarea class="form-control form-dark bg-dark color-dark text-white" name="desc" placeholder="Enter description"></textarea>
                            @error('desc')
                                <div class="alert alert-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="watch_image" class="form-label form-dark bg-dark color-dark text-white">Upload Watch Image</label>
                            <input class="btn-dark form-control form-dark bg-dark color-dark text-white" type="file" id="watch_image" name="watch_image">
                            @error('watch_image')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                        @enderror
                        </div>

                        <div class="d-flex justify-content-between">
                            <a href="./" class="btn btn-dark bg-dark text-white"><< Back</a>
                            <button type="submit" class="btn btn-dark bg-dark" style="border-radius: 3px">
                                <i class="nav-icon fas fa-plus-circle"></i>
                                Add Watch
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
