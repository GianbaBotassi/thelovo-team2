@extends('layouts.app')
@section('content')
    <div class="container text-center">
        {{-- quello che vede l'utente non registrato e non autenticato --}}
        @guest
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
                    <div>
                        {{-- show dei ristoranti in base alla tipologia --}}
                        {{-- <form action="">
                            <select name="typology" id="typology">
                                @foreach ($restaurant as )

                                @endforeach
                                <option value="">
                                    {{ $typology->nome }}
                                </option>
                            </select>
                        </form> --}}
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
        @endguest

        {{-- quello che vede l'utente autenticato --}}
        @auth
            <h1>

                Ciao {{ Auth::user()->name }}
            </h1>

            <hr>
            @if (!auth()->user()->restaurant)
                <p class="text-center offset-4 col-4">
                    Sembra che tu non abbia ancora un ristorante collegato al tuo utente
                    registralo e inizia
                </p>
                <div class="container d-flex justify-content-around py-4">
                    <a class="btn btn-info text-light" style="font-size: 2rem" href="{{ route('create-restaurant') }}">
                        Crea Ristorante
                    </a>

                </div>
            @else
                <div class="card">
                    <div class="card-header">
                        {{ Auth::user()->restaurant->nome }}
                    </div>

                    <div class="card-body">

                    </div>
                </div>
            @endif
        @endauth



    </div>
@endsection
