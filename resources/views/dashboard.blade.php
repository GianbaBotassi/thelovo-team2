@extends('layouts.app')

@section('content')
    <div class="container">
        <h2 class="fs-4 text-secondary my-4">
            {{ __('Dashboard') }}
        </h2>
        <div class="row justify-content-center">
            <div class="col">
                <div class="card">
                    <div class="card-header">Benvenuto {{ auth()->user()->email }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        @if (!auth()->user()->restaurant)
                            <p class="text-center offset-4 col-4">
                                Questo è il tuo pannello di amministrazione, da qua potrai inserire un ristorante.
                            </p>
                            <div class="container d-flex justify-content-around py-4">
                                <a class="btn btn-info text-light" style="font-size: 2rem"
                                    href="{{ route('create-restaurant') }}">Crea Ristorante</a>

                            </div>
                        @else
                            <div>
                                {{ auth()->user()->restaurant->nome }}
                                {{ auth()->user()->restaurant->indirizzo }}

                                {{ auth()->user()->restaurant->partita_iva }}
                                {{ auth()->user()->restaurant->image }}

                                {{-- Da capire come stampare la tipologia --}}
                                {{-- {{ auth()->user()->restaurant->typology->nome }} --}}
                            </div>
                        @endif




                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
