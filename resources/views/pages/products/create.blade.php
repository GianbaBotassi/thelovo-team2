@extends('layouts.app')
@section('content')
    {{-- action="{{ route('products.store') }}" --}}
    <form class="container my-2 text-center" method="POST" enctype="multipart/form-data"
        action="{{ route('products.store') }}">
        @csrf
        @method('POST')

        {{-- nome --}}
        <div class="my-4 d-flex flex-column align-items-center">
            <label for="nome">Nome</label>
            <input type="text" name="nome" id="nome" required minlength="2" maxlength="64">
            @error('nome')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>


        {{-- descrizione --}}
        <div class="my-4 d-flex flex-column align-items-center">
            <label for="descrizione">Descrizione</label>
            <textarea name="descrizione" id="descrizione" cols="30" rows="5" maxlength="1275"></textarea>
            @error('descrizione')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        {{-- ingredienti --}}
        <div class="my-4 d-flex flex-column align-items-center">
            <label for="ingredienti">Ingredienti</label>
            <input type="text" maxlength="1275" name="ingredienti" id="ingredienti">
            @error('ingrdienti')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        {{-- prezzo --}}
        <div class="my-4 d-flex flex-column align-items-center">
            <label for="prezzo">Prezzo</label>
            <input type="number" name="prezzo" id="prezzo" required step="0.01" min="0.01">
            @error('prezzo')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        {{-- radio check --}}
        <div class="my-4">
            <label class="form-label"><strong>Disponibilità</strong></label>
            <div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="is_visible" id="1" value="1">
                    <label class="form-check-label" for="si">si</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="is_visible" id="0" value="0">
                    <label class="form-check-label" for="no">no</label>
                </div>
            </div>

            @error('is_visible')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        {{-- immagine --}}
        <div class="my-4">
            <label class="form-label me-3"><strong>Immagine:</strong></label>
            <div>
                <input type="file" id="image" name="image">
            </div>
            @error('image')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        {{-- tasto submit --}}
        <div class="my-2 d-flex justify-content-center gap-3">
            <input class="btn btn-primary" type="submit" value="Crea prodotto">
            {{-- Back to product index --}}
            <a class="btn btn-primary" href="{{ route('products.index') }}">Indietro</a>
        </div>

        {{-- Alert --}}
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </form>
@endsection
