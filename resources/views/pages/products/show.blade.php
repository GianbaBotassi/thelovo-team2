@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="card my-5">

            <div class="card-header">
                <div class="row">
                    <div class="col-6">
                        <h1>
                            {{ $product->nome }}
                        </h1>
                    </div>
                    <div class="col-1 offset-4 d-flex gap-3">
                        <div class="btn btn-secondary">
                            <a class="text-white text-decoration-none"
                                href="{{ route('products.edit', $product->id) }}">Modifica il prodotto
                            </a>
                        </div>
                        <div>
                            <a class="btn btn-primary my-1" href="{{ route('products.index', $product->id) }}">Indietro</a>
                        </div>
                    </div>
                </div>


            </div>
            <div class="card-body">

                <div class="row">
                    <div class="col-4">
                        <img class="col-12" src="{{ asset('storage/' . $product->image) }}"
                            alt="immagine prodotto non trovata">
                    </div>

                    <div class="col-6">
                        <div class="row">
                            <div class="col">
                                {{ $product->prezzo }}

                            </div>

                        </div>
                        <p>
                        <h3>
                            descrizione
                        </h3>
                        {{ $product->descrizione }}
                        <hr>
                        <h3>
                            ingredienti:
                        </h3>
                        {{ $product->ingredienti }}
                        </p>
                    </div>
                </div>




            </div>

        </div>
    </div>
@endsection
