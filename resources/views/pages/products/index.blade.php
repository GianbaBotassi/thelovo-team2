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
            <a class="btn btn-primary" href="{{ route('products.create') }}">clicca qui </a>
            <a class="btn btn-primary my-1" href="{{ route('dashboard', $product->id) }}">Back</a>
        </div>
    </h1>
    <hr>

    @if (count(array_unique($array_delete)) === 1)
        <h1 class="text-center">
            non ci sono prodotti
        </h1>
    @else
        <ul>

            @foreach (auth()->user()->restaurant->products as $product)
                @if (!$product->is_delete)
                    <li class="card">

                        <div class="row">


                            {{-- collegamento all'immagine del prodotto --}}
                            <div class="col-4">
                                <img src="{{ asset('storage/' . $product->image) }}" width="450px" height="300 px"
                                    alt="immagine prodotto non trovata">
                            </div>

                            <div class="col-8">
                                <a class="btn btn-primary my-3"
                                    href="{{ route('products.show', $product->id) }}">{{ $product->nome }}</a>
                                <div class="card py-2 px-2">

                                    {{ $product->descrizione }}
                                </div>

                                <div class="my-3">
                                    {{-- tasto per rimure l'immagine --}}
                                    <form method="post" action="{{ route('products.delete', $product->id) }}">
                                        @csrf
                                        @method('PUT')

                                        <input type="submit" value='delete'>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </li>
                @endif
            @endforeach
        </ul>
    @endif
@endsection
