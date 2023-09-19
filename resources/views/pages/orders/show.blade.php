@extends('layouts.app')
{{--
@section('scss')
    <link rel="preload" href="scss/app.scss" as="style">
    <link rel="stylesheet" href="scss/app.scss">
@endsection --}}
@section('content')
    <div class="container">


        <div class="card my-5">


            <div class="card-header">
                ORDINE n {{ $order->id }} di {{ $order->nome }}
            </div>

            <div class="card-body">

                <div>
                    <strong>
                        da consegnare all'indirizzo
                    </strong>
                    {{-- indirizzo --}}
                    {{ $order->indirizzo }}
                </div>

                {{-- recapiti di contatto --}}
                <div>

                    <h4>
                        recapiti di contatto:
                    </h4>
                    {{-- telefono --}}
                    <strong>
                        tel.
                    </strong>
                    {{ $order->telefono }}
                    <br>
                    {{-- email --}}
                    <strong>
                        email:
                    </strong>
                    {{ $order->email }}

                </div>



                <div>
                    <h4>riepilogo dell'ordine</h4>
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
                        <div>
                            <h4>
                                note
                            </h4>
                            <div class="card py-3 px-3">
                                {{ $order->note }}
                            </div>
                        </div>

                        {{-- Totale prezzo ordine --}}
                        <div>
                            <strong>
                                totale pagamento:
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
