@extends('layouts.app')
@section('content')
    <section class="container">
        {{-- tasto per tornare alla lista di tutti i ristoranti --}}
        <div class="text-center pt-1 col-md-5 offset-md-4 my-3 mt-3">
            <a class="btn btn-secondary text-light" href="{{ route('home') }}">torna alla lista dei ristorarnti</a>
        </div>

        <div class="card">
            <div class="card-header text-center">
                {{-- immagine del ristorante --}}
                <div class="col-md-5 offset-md-4 my-2">
                    <img src="{{ asset('storage/' . $restaurant->image) }}" alt="immagine ristorante non trovata"
                        height="250px">
                </div>
                <hr>

                <div class="row">
                    {{-- nome del ristorante --}}
                    <div class="col-md-5 offset-md-4 card fs-2 ">
                        {{ $restaurant->nome }}
                    </div>
                    <br>
                    {{-- indirizzo del ristorante --}}
                    <div class="col-md-5 offset-md-4 card fs-2 ">
                        {{ $restaurant->indirizzo }}
                    </div>
                </div>



            </div>
            <div class="card-body">
                {{-- action="{{ route('orders.create') }}" --}}
                {{-- menu' --}}
                <h3 class="col-md-5 offset-md-6">
                    i nostri piatti
                </h3>
                <hr>
                <form method="GET" action="{{ route('orders.create') }}">
                    @csrf

                    @foreach ($restaurant->products as $product)
                        @if ($product->is_visible)
                            <div class="my-3 text-center">
                                <span class="btn btn-secondary">+</span>
                                {{ $product->nome }}

                                @if ($product->image)
                                    {{-- immagine se è presente l'immagine del prodotto --}}
                                    <img src="{{ asset('storage/' . $product->image) }}" width="150px" height="150 px"
                                        alt="immagine ristorante non trovata">
                                @else
                                    {{-- immagine se non è presente l'immagine del prodotto --}}
                                    <img src="{{ asset('storage/' . 'main-image.jpg') }}" width="150px" height="150 px"
                                        alt="immagine ristorante non trovata">
                                @endif
                                <hr>
                            </div>
                        @endif
                    @endforeach

                    {{-- tasto per passare alla create dell'ordine --}}
                    <div class="row">
                        <input class="col-md-5 offset-md-4" type="submit" value="concludi il tuo ordine">
                    </div>
                </form>

            </div>

        </div>

    </section>
@endsection
