@extends('master')
@section('content')
    <h1>Watches</h1>

    <style>

        body, h1, h2, p, ul, li {
            margin: 0;
            padding: 0;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
        }

        .hero {
            text-align: center;
            padding: 100px 0;
            background-image: url('hero-background.jpg'); /* Replace with your background image */
            background-size: cover;
            color: #fff;
        }

        .hero h1 {
            font-size: 36px;
            color: #333;

        }

        .hero p {
            font-size: 18px;
            margin-top: 20px;
            color: #333;
        }

        .cta-button {
            display: inline-block;
            padding: 10px 20px;
            background-color: #f5a623;
            color: #fff;
            text-decoration: none;
            font-weight: bold;
            border-radius: 5px;
            margin-top: 20px;
        }

        .cta-button:hover {
            background-color: #e09600;
        }

        .products {
            text-align: center;
            padding: 40px 0;
        }

        .product {
            display: inline-block;
            margin: 20px;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 300px;
        }

        .product img {
            max-width: 100%;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        .product h3 {
            font-size: 24px;
            margin-top: 10px;
        }

        .product p {
            font-size: 18px;
            margin-top: 10px;
        }

        .product a {
            display: inline-block;
            padding: 10px 20px;
            background-color: #333;
            color: #fff;
            text-decoration: none;
            font-weight: bold;
            border-radius: 5px;
            margin-top: 20px;
        }

        .product a:hover {
            background-color: #555;
        }

        footer {
            position: absolute;
            bottom: 0;
            width: 100%;
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 10px 0;
        }

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
    <div class="row mx-5 justify-content-center">
        @foreach ($watches as $watch)
            <div class="card mx-2 bg-dark text-white watch-card" style="width: 300px;">
                <a href="/watches/{{$watch->id}}">
                    @if ($watch->image)
                        <div style="width: 100%; height: 300px; margin: 10px 0; position: relative;">
                            <img src="{{ asset('storage/' . $watch->image) }}" alt="watch photo" style="width: 100%; height: 100%; object-fit: cover;">
                            <div class="text-center" style="position: absolute; bottom: 0; width: 100%; padding: 10px; background-color: rgba(0, 0, 0, 0.6);">
                                <h5 class="mb-0 watch-brand">{{$watch->brand}}</h5>
                                <p class="mb-0 watch-model">{{$watch->model}}</p>
                                <p class="mb-0 watch-release">{{$watch->release}}</p>
                                <p class="mb-0 watch-price">${{number_format($watch->price, 2)}}</p>
                            </div>
                        </div>
                    @else
                        <i class='fas fa-clock' style='font-size:180px'></i>
                    @endif
                </a>
            </div>
        @endforeach
    </div>
    <div class="d-flex mx-5 my-5 justify-content-center">
        @auth
        <a href="/watches/create" class="btn btn-orange btn-info mx-5" style="width: 300px;">+Add Watches</a>
        @endauth
    </div>
@endsection
