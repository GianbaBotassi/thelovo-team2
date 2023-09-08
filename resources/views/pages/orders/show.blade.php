@extends('layouts.app')
@section('content')
    <hr>
    ORDIN di {{ $order->nome }}
    <hr>

    ha ordinato
    <ul>
        @foreach ($order->products as $product)
            <li>
                {{ $product->nome }}
            </li>
        @endforeach
    </ul>
@endsection
