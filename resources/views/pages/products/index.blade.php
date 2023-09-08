@extends('layouts.app')
@section('content')
    <ul>
        @foreach (auth()->user()->restaurant->products as $product)
            <li class="card">

                <a href="{{ route('products.edit', $product->id) }}">{{ $product->nome }}</a>
                <br>
                {{ $product->descrizione }}
            </li>
        @endforeach
    </ul>
@endsection
