@extends('layouts.app')
@section('content')
    <hr>
    ORDIN di {{ $order->nome }}
    <hr>

    {{ $order->indirizzo }}

    <h3>ha ordinao</h3>
    <ul>
        @foreach ($order->products as $product)
            <li>
                {{ $product->nome }}
            </li>
        @endforeach
    </ul>
@endsection
