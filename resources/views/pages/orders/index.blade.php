@extends('layouts.app')
@section('content')
    <hr>
    ORDINI
    <hr>
    @foreach ($orders as $order)
        {{ $order->nome }} ha ordinato
        <ul>
            @foreach ($order->products as $product)
                <li>
                    {{ $product->nome }}
                </li>
            @endforeach
        </ul>
        <a href="{{ route('orders.show', $order->id) }}">visualizza maggiori informazioni</a>
    @endforeach


    <hr>
@endsection
