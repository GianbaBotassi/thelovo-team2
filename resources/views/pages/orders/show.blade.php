@extends('layouts.app')
{{--
@section('scss')
    <link rel="preload" href="scss/app.scss" as="style">
    <link rel="stylesheet" href="scss/app.scss">
@endsection --}}
@section('content')
    <div class="container order">


        <div class="card my-5">


            <div class="card_sup">
                <h1>

                    ORDINE n {{ $order->id }} di {{ $order->nome }}
                </h1>
            </div>

            <div class="card-body">

                <div class="indirizzo">
                    <strong>
                        Da consegnare all'indirizzo
                    </strong>
                    {{-- indirizzo --}}
                    {{ $order->indirizzo }}
                </div>

                {{-- recapiti di contatto --}}
                <div>

                    <h4>
                        Recapiti:
                    </h4>
                    {{-- telefono --}}
                    <strong>
                        Tel.
                    </strong>
                    {{ $order->telefono }}
                    <br>
                    {{-- email --}}
                    <strong>
                        Email:
                    </strong>
                    {{ $order->email }}

                </div>



                <div>
                    <h4>Riepilogo dell'ordine</h4>
                    <div>
                        <ul>
                            {{-- lista dei prodotti ordinati --}}
                            @foreach ($order->products as $product)
                                <li>
                                    {{ $product->nome }}
                                </li>
                            @endforeach
                        </ul>

                        {{-- note dell'ordine --}}
                        <div class="note_order">
                            <h4>
                                Note
                            </h4>
                            {{ $order->note }}
                        </div>

                        {{-- Totale prezzo ordine --}}
                        <div class="price">
                            <strong>
                                Totale pagamento:
                                {{ $order->totale }}
                            </strong>
                        </div>

                    </div>
                </div>
            </div>


        </div>

    </div>

    <style>

    </style>
@endsection
