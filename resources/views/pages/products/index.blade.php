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

                {{-- collegamento all'immagine del prodotto --}}
                <img class="col-2" src="{{ asset('storage/' . $product->image) }}" alt="immagine prodotto non trovata">

                <hr>

                <div class="col-10">


                    <a class="btn btn-secondary" href="{{ route('products.show', $product->id) }}">{{ $product->nome }}</a>

                    <br>
                    {{ $product->descrizione }}

                    {{-- tasto per rimure l'immagine --}}
                    <form method="post" action="{{ route('products.delete', $product->id) }}">
                        @csrf
                        @method('DELETE')

                        <input type="submit" value='delete'>
                    </form>
                </div>


            </li>
        @endforeach
    </ul>
@endsection
