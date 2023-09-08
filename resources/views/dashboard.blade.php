@extends('layouts.app')

@section('content')
    <div class="container">
        <h2 class="fs-4 text-secondary my-4">
            {{ __('Dashboard') }}
        </h2>
        <div class="row justify-content-center">
            <div class="col">
                <div class="card">
                    <div class="card-header">Benvenuto {{ ucfirst(auth()->user()->name) }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <hr>
                        {{-- collegamento alla pagina index degli ordini --}}
                        <a href="{{ route('orders.index') }}">vai a vedere gli ordini</a>
                        <hr>
                        <hr>
                        {{-- collegamento alla pagina index dei prodotti --}}
                        <a href="{{ route('products.index') }}">vai a vedere i prodotti</a>
                        <hr>
                        @if (!auth()->user()->restaurant)
                            <p class="text-center offset-4 col-4">
                                Questo è il tuo pannello di amministrazione, da qua potrai inserire un ristorante.
                            </p>
                            <div class="container d-flex justify-content-around py-4">
                                <a class="btn btn-info text-light" style="font-size: 2rem"
                                    href="{{ route('create-restaurant') }}">Crea Ristorante</a>

                            </div>
                        @else
                            <div class="my-3">
                                <label class="form-label me-3" for="nome"><strong>Nome:</strong></label>
                                {{ auth()->user()->restaurant->nome }}

                            </div>
                            <div class="my-3">
                                <label class="form-label me-3"><strong>Indirizzo:</strong></label>
                                {{ auth()->user()->restaurant->indirizzo }}

                            </div>
                            <div class="my-3">
                                <label class="form-label me-3"><strong>Partita Iva:</strong></label>
                                {{ auth()->user()->restaurant->partita_iva }}

                            </div>
                            <div class="my-3">
                                <label class="form-label me-3"><strong>Immagine:</strong></label>
                                {{ auth()->user()->restaurant->image }}

                            </div>
                            <div>
                                <label for="typology"><strong>Tipologie: </strong></label>
                                @foreach (auth()->user()->restaurant->typologies as $typology)
                                    {{ $typology->nome }}
                                @endforeach
                            </div>

                    </div>
                    @endif




                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
