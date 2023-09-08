@extends('layouts.app')
@section('content')
    {{-- action="{{ route('products.update') }}" --}}
    <form class="container my-2" method="POST" enctype="multipart/form-data"
        action="{{ route('products.update', $product->id) }}">
        @csrf
        @method('PUT')

        <label for="nome"></label>
        <input type="text" name="nome" id="nome" placeholder="nome" value="{{ $product->nome }}">

        <label for="descrizione"></label>
        <input type="text" name="descrizione" id="descrizione" placeholder="descrizione"
            value="{{ $product->descrizione }}">

        <label for="ingredienti"></label>
        <input type="text" name="ingredienti" id="ingredienti" placeholder="ingredienti"
            value="{{ $product->ingredienti }}">

        <label for="prezzo"></label>
        <input type="numeber" name="prezzo" id="prezzo" placeholder="prezzo" value="{{ $product->prezzo }}">

        {{-- radio check --}}
        <div class="my-3">
            <label class="form-label me-3"><strong>Disponibilità</strong></label>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="is_visible" value="0" id="si"
                    {{ $product->is_visible ? 'checked' : '' }}>
                <label class="form-check-label" for="si">si</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="is_visible" value="1"
                    id="no"{{ !$product->is_visible ? 'checked' : '' }}>
                <label class="form-check-label" for="no">no</label>
            </div>
        </div>


        <label for="image">immagine:</label>
        <input type="text" name="image" id="image" placeholder="inserisci il path dell'immagine che voi inserire"
            value="{{ $product->image }}">

        <input type="submit" value="update">
    </form>
@endsection
