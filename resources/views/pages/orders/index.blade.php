@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div>

            <h1 class="text-center my-4 ">
                Riepilogo ordini
            </h1>

            <a class="btn btn-warning" href="{{ route('dashboard') }}">Indietro</a>

        </div>



        <div class="riga">

            @foreach ($orders as $order)
                <div class="card">
                    <div class="card_sup">

                        {{-- nome del cliente --}}

                        <strong>Nome Cliente:</strong>
                        <span>
                            {{ $order->nome }}
                        </span>
                        <br>



                        {{-- satus dell'ordine --}}

                        <strong>Stato dell'ordine</strong>
                        @if ($order->status === 'Consegnato')
                            <span class="badge bg-success">
                                {{ $order->status }}
                            </span>
                        @else
                            <span class="badge bg-warning">
                                {{ $order->status }}
                            </span>
                        @endif
                        <br>


                    </div>

                    <div class="card-body">



                        {{-- data --}}
                        <div>
                            <strong>Ricevuto:</strong> {{ $order->created_at->format('Y-m-d H:i') }}
                        </div>
                        {{-- indirizzo --}}
                        <div>
                            <strong>Indirizzo:</strong> {{ $order->indirizzo }}
                        </div>

                        {{-- note --}}
                        <div>
                            <strong>Note:</strong> {{ $order->note }}
                        </div>

                    </div>
                    <a href="{{ route('orders.show', $order->id) }}">
                        Visualizza Maggiori Informazioni
                    </a>
                </div>
            @endforeach
        </div>

    </div>

    <style>
        .riga {
            display: flex;
            flex-wrap: wrap;
            width: 90%;
            margin: 15px auto;
            gap: 10px;

        }

        .card {
            padding: 10px;
            width: calc((100%/3) - 10px);
        }
    </style>
@endsection
