@extends('master')
@section('content')
    <h1>Add Watch</h1>
    <form action="/watches" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-12">
                <div class="card bg-dark text-white">
                    <div class="card-body bg-dark text-white">
                        <div class="form-group">
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
                            <label>Price</label>
                            <input type="number" class="form-control form-dark bg-dark color-dark text-white" name="price" placeholder="Enter Price">
                            @error('price')
                                <div class="alert alert-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Release Date</label>
                            <input type="date" class="form-control form-dark bg-dark color-dark text-white" name="release" placeholder="Enter Release Date">
                            @error('release')
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
