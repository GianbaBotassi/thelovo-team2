@extends('layouts.app')
@section('content')
    <hr>
    <h1 class="text-center">

        Se vuoi aggiungere un nuovo prodotto <br>
        <a class="btn btn-primary" href="{{ route('products.create') }}">clicca qui </a>
    </h1>
    <hr>

    <ul>
        @foreach (auth()->user()->restaurant->products as $product)
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
                                @method('DELETE')

                                <input type="submit" value='delete'>
                            </form>
                        </div>

                    </div>

                </div>
            </li>
        @endforeach
    </ul>
@endsection
