@extends('layouts.app')

@section('content')
    <div class="container">
        <h2 class="fs-4 text-secondary my-4">
            {{ __('Dashboard') }}
        </h2>
        <div class="row justify-content-center">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        Benvenuto/a {{ ucfirst(auth()->user()->name) }}!
                    </div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif



                        @if (!auth()->user()->restaurant)
                            <p class="text-center offset-4 col-4">
                                Questo è il tuo pannello di amministrazione, <br>
                                sembra che tu non abbia ancora registrato un ristorante <br>
                                da qua potrai inserire un ristorante.
                            </p>
                            <div class="container d-flex justify-content-around py-4">
                                <a class="btn btn-warning text-light" style="font-size: 2rem"
                                    href="{{ route('create-restaurant') }}">
                                    Crea Ristorante
                                </a>

                            </div>
                        @else
                            <div class="d-flex justify-content-around">
                                <div>
                                    {{-- collegamento alla pagina index dei prodotti --}}
                                    <a class="btn btn-warning" href="{{ route('products.index') }}">
                                        Menu
                                    </a>
                                </div>
                                <div>
                                    {{-- collegamento alla pagina index degli ordini --}}
                                    <a class="btn btn-warning" href="{{ route('orders.index') }}">
                                        Ordini ricevuti
                                    </a>
                                </div>
                                <div>
                                    {{-- collegamento alla pagina index degli ordini --}}
                                    <a class="btn btn-warning" href="{{ route('restaurant.statistics') }}">
                                        Statistiche
                                    </a>
                                </div>
                            </div>

                            <hr>

                            <div class="row">

                                <div class="col-5">

                                    {{-- immagine --}}
                                    <div class="my-3">
                                        {{-- <img :src="{{ auth()->user()->restaurant->image }}" alt="immagine ristorante"> --}}
                                        <img src="{{ asset('storage/' . auth()->user()->restaurant->image) }}"
                                            width="450px" height="300 px" alt="immagine ristorante non trovata">
                                    </div>
                                </div>
                                <div class="col-7">
                                    {{-- nome --}}
                                    <div class="my-3">
                                        <label class="form-label me-3" for="nome"><strong>Nome
                                                ristorante:</strong></label>
                                        {{ auth()->user()->restaurant->nome }}
                                    </div>

                                    {{-- indirizzo --}}
                                    <div class="my-3">
                                        <label class="form-label me-3"><strong>Indirizzo:</strong></label>
                                        {{ auth()->user()->restaurant->indirizzo }}
                                    </div>

                                    {{-- partita-iva --}}
                                    <div class="my-3">
                                        <label class="form-label me-3"><strong>Partita Iva:</strong></label>
                                        {{ auth()->user()->restaurant->partita_iva }}

                                    </div>

                                    {{-- tipologia --}}
                                    <div>
                                        <strong>Tipologie: </strong>
                                        <ul>
                                            @foreach (auth()->user()->restaurant->typologies as $typology)
                                                <li> {{ $typology->nome }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>

                    </div>
                    @endif




                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
