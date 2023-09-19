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
    <div class="text-center">
        <h3 class="my-3">
            Se vuoi aggiungere un nuovo prodotto <br>
        </h3>
        <div class="d-flex gap-3 justify-content-center">
            <a class="btn btn-warning" href="{{ route('products.create') }}">Crea </a>
            <a class="btn btn-warning" href="{{ route('dashboard') }}">Indietro</a>
        </div>
    </div>
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
                        <div style="height: 250px" class="col-3">
                            <img style="width: 100%;height:100%;object-fit:cover"
                                src="{{ asset('storage/' . $product->image) }}" width="350px" height="200px"
                                alt="immagine prodotto non trovata">
                        </div>

                        <div class="row offset-1 col-8">
                            <div class="col-10 d-flex flex-column justify-content-center gap-4">
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
                                @if ($product->image)
                                    <form method="POST" action="{{ route('delete-product-picture', $product->id) }}">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger py-1 px-1 text-decoration-none text-white"
                                            type="submit" name="delete-picture" id="delete-picture"
                                            class="btn btn-primary">
                                            Elimina foto
                                        </button>
                                    </form>
                                @endif
                            </div>

                        </div>
                    </div>
                </li>
            @endif
        @endforeach
    </ul>
    {{-- @endif --}}
@endsection
