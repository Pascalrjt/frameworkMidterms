@extends('master')
@section('content')
    <h1>{{$watch->brand}} {{$watch->model}}'s Profile</h1>
    <div class="d-flex justify-content-center my-5">
        <div class="card col-sm-6 mx-3 w-50 p-5 bg-dark text-white">
            <div class="card-body d-flex justify-content-center">
                @if ($watch->image)
                    <style>
                        .resize {
                            width: 40%;
                            height: 360px;
                        }
                        img {
                            width: 100%;
                            height: 100%;
                            object-fit: cover;
                        }
                    </style>
                    <div class="resize">
                        <img src="{{ asset('storage/' . $watch->image) }}" alt="watch photo">
                    </div>
                @else
                    <i class='fas fa-clock' style='font-size:180px' class="mx-5"></i>
                @endif
                <div class="data m-4 align-items-center">
                    <h5>Brand: {{$watch->brand}}</h5>
                    <h5>Model: {{$watch->model}}</h5>
                    <h5>Price: ${{number_format($watch->price, 2)}}</h5>
                    <h5>Description: <br>
                        <h6>{{ $watch->desc}}</h6>
                    </h5>
                </div>
            </div>

            <form action="/watches/{{$watch->id}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('delete')
                <div class="d-flex justify-content-between">
                    <a href="/watches" class="btn btn-dark mt-4 mx-2"><< Back</a>
                        <div class="d-flex justify-content-end">
                            <a href="/watches/{{$watch->id}}/edit" class="btn btn-orange btn-info mt-4 mx-2">Edit</a>
                            <input type="submit" class="btn btn-danger mt-4 mx-2" value="Delete">
                        </div>
                    @endif
                </div>
            </form>
        </div>
    </div>
@endsection
