@extends('layouts.app')
@section('content')
    <section class="container">
        <div class="card">


            <div class="card-header text-center">

                <div class="row">
                    <div class="my-2 py-3 col-md-5 offset-md-4 card fs-2 text-bg-info"> ID: <span class="text-danger">
                            {{ $restaurant->id }} </span> </div>
                </div>

                <div class="row">
                    <div class="my-2 py-3 col-md-5 offset-md-4 card fs-2 text-bg-info"> Attività: <span class="text-danger">
                            {{ $restaurant->nome }} </span> </div>
                </div>

                <div class="row">
                    <div class="my-2 py-3 col-md-5 offset-md-4 card fs-2 text-bg-info"> Via: <span class="text-danger">
                            {{ $restaurant->indirizzo }} </span> </div>
                </div>

                <div class="row">
                    <div class="my-2 py-3 col-md-5 offset-md-4 card fs-2 text-bg-info"> Fatturazione: <span
                            class="text-danger">
                            {{ $restaurant->partita_iva }} </span> </div>
                </div>

                <div class="row">
                    <div class="my-2 py-3 col-md-5 offset-md-4 card fs-2 text-bg-info"> Aspetto: <img
                            src="{{ $restaurant->image }}" alt="No image"> </div>
                </div>
                {{-- Bottone per tornare a index --}}
                <div class="text-center pt-1 col-md-5 offset-md-4 mt-3">
                    <a class="btn btn-secondary text-light" href="{{ route('home') }}">Indietro</a>
                </div>


            </div>

            @foreach ($restaurant->products as $product)
                {{ $product->nome }}
            @endforeach
        </div>

    </section>
@endsection
