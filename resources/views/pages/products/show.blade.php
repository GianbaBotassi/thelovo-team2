@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="card my-5">

            <div class="card-header">
                <h1>
                    Il prodotto mostrato è: {{ $product->nome }}
                    <div class="btn btn-secondary">
                        <a class="text-white text-decoration-none" href="{{ route('products.edit', $product->id) }}">modifica
                            qui il
                            prodotto

                        </a>
                    </div>
                </h1>

            </div>





            <div class="card-body">
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
@endsection
