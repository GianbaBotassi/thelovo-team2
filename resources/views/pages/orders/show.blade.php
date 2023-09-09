@extends('layouts.app')
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
                    <hr>
                    <h4>
                        recapiti di contatto:
                    </h4>
                    {{-- telefon --}}
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
                    <hr>
                </div>
                {{--
                'nome' => 'Luigi Rossi',
                'indirizzo' => 'Via dei camosci, 2',
                'telefono' => '3332330645',
                'email' => 'luigi.r@gmail.com',
                'note' => 'Suonare al terzo campanello',
                'status' => 'Consegnato',
                // 'data' => '2023-09-21',
                'totale' => '120.00'
                 --}}



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
        {{-- chiusura container --}}
    </div>
@endsection
