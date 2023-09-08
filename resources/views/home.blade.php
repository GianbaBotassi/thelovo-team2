@extends('layouts.app')
@section('content')
    <div class="container text-center">
        <h1>
            Benvenuto!!
        </h1>
        <div class="card my-4">
            <div class="my-4 d-flex justify-content-around">
                <a href="{{ route('register') }}" class="btn btn-light col-2">
                    registrati
                </a>
                <a href="{{ route('login') }}" class="btn btn-light col-2">

                    log in
                </a>
            </div>
        </div>


    </div>
@endsection
