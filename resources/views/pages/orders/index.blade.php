@extends('layouts.app')
@section('content')
    <div class="container-fluid py-3 px-3">
        <h1 class="text-center my-3">
            Riepilogo ordini
        </h1>



        <div class="row">
            @foreach ($orders as $order)
                <div class="card offset-2 col-3">

                    {{-- nome del cliente --}}
                    <div>
                        <strong>nome cliente:</strong>
                        <span class="badge bg-primary">
                            {{ $order->nome }}
                        </span>

                    </div>

                    {{-- satus dell'ordine --}}
                    <div>
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
                    </div>

                    {{-- indirizzo --}}
                    <div>
                        <strong>Indirizzo:</strong> {{ $order->indirizzo }}
                    </div>

                    {{-- note --}}
                    <div>
                        note: {{ $order->note }}
                    </div>

                    <a class="btn btn-dark " href="{{ route('orders.show', $order->id) }}">
                        visualizza maggiori informazioni
                    </a>
                </div>
            @endforeach
        </div>

    </div>
@endsection
