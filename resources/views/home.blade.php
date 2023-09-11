@extends('layouts.app')
@section('content')
    <div class="container text-center">
        {{-- quello che vede l'utente non registrato e non autenticato --}}
        @guest
            <div class="my-3">
                <h1>
                    Benvenuto/a..
                </h1>
                <p> se hai già un tuo ristorante fai il Login, altrimenti registrati con la tua email.</p>
            </div>

            <div class="card d-inline-block">
                <div class="card-header">
                    <div class="my-4 d-flex justify-content-center gap-4">
                        <a class="btn btn-secondary" href="{{ route('register') }}" class="btn btn-light col-2">
                            Registrazione
                        </a>
                        <a class="btn btn-secondary" href="{{ route('login') }}" class="btn btn-light col-2">
                            Login
                        </a>
                    </div>
                    <div>

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
                        <h3 class="text-center">
                            qui visualizzerai le statistiche suoi tuoi piatti
                        </h3>
                    </div>
                </div>
            @endif
        @endauth



    </div>
@endsection
