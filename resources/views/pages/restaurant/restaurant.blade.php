@extends('layouts.app')
@section('content')
    <section class="container">
        <div class="text-center pt-1 col-md-4 offset-md-4 my-3 mt-3">
            <a class="btn btn-secondary text-light" href="{{ route('home') }}">torna alla lista dei ristorarnti</a>
        </div>
        <div class="card">

            <div class="card-header text-center">


                <img src="{{ asset('storage/' . $restaurant->image) }}" alt="immagine ristorante non trovata">

                <div class="row">
                    <div class="col-md-5 card fs-2 ">
                        {{ $restaurant->nome }} </div>
                    {{-- </div>

                <div class="row"> --}}
                    <div class="col-md-5 offset-md-2 card fs-2 ">
                        {{ $restaurant->indirizzo }} </div>
                </div>



            </div>
            <div class="card-body">
                {{-- action="{{ route('orders.create') }}" --}}
                <form method="GET" action="{{ route('orders.create') }}">
                    @csrf


                    @foreach ($restaurant->products as $product)
                        <div class="my-3 text-center">
                            {{ $product->nome }}
                        </div>
                    @endforeach

                    <input type="submit" value="concludi il tuo ordine">
                </form>

            </div>

        </div>

    </section>
@endsection
