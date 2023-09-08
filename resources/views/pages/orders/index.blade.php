@extends('layouts.app')
@section('content')
    <hr>
    ORDINI
    <hr>
    {{-- @if (restaurantId = auth()->user()->r)
    @endif --}}<?php
    // $products = auth()->user()->restaurant;
    $restaurantId = auth()->user()->restaurant->id;

    $prodRestId = $order
dd()
    ?>


    @foreach ($orders as $order)


        @if ($restaurantID ===  )
            {{ $order->nome }} ha ordinato

            <ul>


                @foreach ($order->products as $product)
                    <li>
                        {{ $product->nome }}
                    </li>
                @endforeach
            </ul>
            <a href="{{ route('orders.show', $order->id) }}">visualizza maggiori informazioni</a>
            <hr>
        @endif
    @endforeach
@endsection
