@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <h1 class="text-center my-4 ">
            Riepilogo ordini
        </h1>



        <div class="riga">

            @foreach ($orders as $order)
                <div class="card">
                    <div class="card-header">

                        {{-- nome del cliente --}}

                        <strong>nome cliente:</strong>
                        <span>
                            {{ $order->nome }}
                        </span>
                        <br>



                        {{-- satus dell'ordine --}}

                        <strong>stato dell'ordine</strong>
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
                            <strong>ricevuto:</strong> {{ $order->created_at }}
                        </div>
                        {{-- indirizzo --}}
                        <div>
                            <strong>Indirizzo:</strong> {{ $order->indirizzo }}
                        </div>

                        {{-- note --}}
                        <div>
                            note: {{ $order->note }}
                        </div>

                        <a class="btn " href="{{ route('orders.show', $order->id) }}">
                            visualizza maggiori informazioni
                        </a>
                    </div>
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
            width: calc((100%/3) - 10px);
        }
    </style>
@endsection
