@extends('layouts.app')
@section('content')
    <div class="container text-center">
        <h1>Ecco i ristoranti in cui puoi mangiare:</h1>
        <ul class="list-unstyled">
            @foreach ($restaurants as $restaurant)
                <li>
                    <a class="text-dark text-decoration-none" href="{{ route('show-restaurant', $restaurant->id) }}">
                        {{ $restaurant->nome }}
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
@endsection
