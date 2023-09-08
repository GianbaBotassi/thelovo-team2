@extends('layouts.app')
@section('content')
    <div class="container-fluid py-3 px-3">
        <hr>
        ORDINI
        <hr>


        @foreach ($orders as $order)
            <div class="badge bg-primary">
                {{ $order->nome }}
            </div>
            ha ordinato:

            <ul>
                @foreach ($order->products as $product)
                    <li>
                        {{ $product->nome }}
                    </li>
                @endforeach
            </ul>
            <div>
                note: {{ $order->note }}
            </div>


            <div>
                all'indirizzo: {{ $order->indirizzo }}
            </div>
            <hr>
        @endforeach
    </div>
@endsection
