@extends('layouts.app')
@section('content')
    <hr>
    Se vuoi aggiungere un nuovo produtto <a href="{{ route('products.create') }}">clicca qui </a>
    <hr>

    <ul>
        @foreach (auth()->user()->restaurant->products as $product)
            <li class="card">

                <a href="{{ route('products.show', $product->id) }}">{{ $product->nome }}</a>
                <br>
                {{ $product->descrizione }}

                <form method="post" action="{{ route('products.delete', $product->id) }}">
                    @csrf
                    @method('DELETE')

                    <input type="submit" value='delete'>
                </form>



            </li>
        @endforeach
    </ul>
@endsection
