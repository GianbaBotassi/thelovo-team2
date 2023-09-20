@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="row justify-content-center">
            <div class="col">
                <div class="card p-4">
                    <div class="card-header">
                        <h1>
                            Benvenuto/a {{ ucfirst(auth()->user()->name) }}!

                        </h1>
                    </div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif


                        @if (!auth()->user()->restaurant)
                            <h5 class="text-center offset-3 col-6">
                                Questo è il tuo pannello di amministrazione, <br>
                                sembra che tu non abbia ancora registrato il tuo ristorante <br>
                                da qua potrai procedere alla creazione.
                            </h5>
                            <div class="container d-flex justify-content-around py-4">
                                <a class="btn btn-warning text-light" style="font-size: 2rem"
                                    href="{{ route('create-restaurant') }}">
                                    Crea Ristorante
                                </a>

                            </div>
                        @else
                            <div class="d-flex justify-content-around m-4">
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
                                {{-- <div>

                                    <a class="btn btn-warning" href="{{ route('restaurant.statistics') }}">
                                        Statistiche
                                    </a>
                                </div> --}}
                            </div>



                            <div class="row">
                                <div class="col-5">
                                    {{-- immagine --}}
                                    <div class="img_restaurant my-3">
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
