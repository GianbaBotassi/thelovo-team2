@extends('layouts.app')
@section('content')
    <div class="container text-center">
        <h1>
            Benvenuto!!
        </h1>
        <div class="card">
            <div class="card-header">
                <div class="my-4 d-flex justify-content-around">
                    <a href="{{ route('register') }}" class="btn btn-light col-2">
                        registrati
                    </a>
                    <a href="{{ route('login') }}" class="btn btn-light col-2">

                        log in
                    </a>
                </div>
            </div>

            <div class="card-body">
                <div class="row">

                    @foreach ($restaurants as $restaurant)
                        <div class="card my-2 py-3 col-md-">
                            <a href="{{ route('restaurant.restaurant', $restaurant->id) }}">{{ $restaurant->nome }}</a>

                        </div>
                    @endforeach
                </div>
            </div>
        </div>



    </div>
@endsection
