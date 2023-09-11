@extends('layouts.app')
@section('content')
    <?php
    // foreach (auth()->user()->restaurant->products as $product_delete) {
    //     $array_delete = '$product_delete;'
    // }
    $array_delete = [1];
    foreach (auth()->user()->restaurant->products as $product) {
        if ($product->is_delete) {
            $array_delete[] = 1;
        } else {
            $array_delete[] = 0;
        }
    }
    // $array_delete = 'ciao';
    
    // dd($array_delete);
    ?>

    <hr>
    <h1 class="text-center">
        Se vuoi aggiungere un nuovo prodotto <br>
        <div>
            <a class="btn btn-primary" href="{{ route('products.create') }}">Inserisci </a>
            <a class="btn btn-primary my-1" href="{{ route('dashboard') }}">Indietro</a>
        </div>
    </h1>
    <hr>

    {{-- @if (count(array_unique($array_delete)) === 1)
        <h1 class="text-center">
            non ci sono prodotti
        </h1>
    @else --}}
    <ul>
        @foreach (auth()->user()->restaurant->products as $product)
            @if (!$product->is_delete)
                <li class="card">

                    <div class="row p-3 my-2">


                        {{-- collegamento all'immagine del prodotto --}}
                        <div class="col-4">
                            <img src="{{ asset('storage/' . $product->image) }}" width="350px" height="200px"
                                alt="immagine prodotto non trovata">
                        </div>

                        <div class="row col-8">
                            <div class="col-10 d-flex flex-column justify-content-center">
                                <h3>{{ $product->nome }}</h3>
                                <p>
                                    {{ $product->descrizione }}
                                </p>
                                <h5>{{ $product->prezzo }} €</h5>
                            </div>
                            <div class="col-2 d-flex flex-column justify-content-center gap-3 align-items-center">
                                {{-- tasto per rimure l'immagine --}}
                                <form method="post" action="{{ route('products.delete', $product->id) }}">
                                    @csrf
                                    @method('PUT')

                                    <input class="btn btn-danger" type="submit" value='Elimina'>
                                </form>
                                <div class="btn btn-secondary">
                                    <a class="text-white text-decoration-none"
                                        href="{{ route('products.edit', $product->id) }}">Modifica
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>
                </li>
            @endif
        @endforeach
    </ul>
    {{-- @endif --}}
@endsection
