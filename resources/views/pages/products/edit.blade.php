@extends('layouts.app')
@section('content')
    {{-- action="{{ route('products.update') }}" --}}
    <form class="container my-2 text-center" method="POST" enctype="multipart/form-data"
        action="{{ route('products.update', $product->id) }}" required>
        @csrf
        @method('PUT')

        {{-- nome --}}
        <div class="my-4 d-flex flex-column align-items-center">
            <label for="nome">Nome</label>
            <input type="text" name="nome" id="nome" placeholder="nome" value="{{ $product->nome }}" required
                minlength="2" maxlength="64">

            @error('nome')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        {{-- descrizione --}}
        <div class="my-4 d-flex flex-column align-items-center">
            <label for="descrizione">Descrizione</label>
            <textarea name="descrizione" id="descrizione" cols="30" rows="5" maxlength="1275">{{ $product->descrizione }}</textarea>
            @error('descrizione')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        {{-- ingredienti --}}
        <div class="my-4 d-flex flex-column align-items-center">
            <label for="ingredienti">Ingredienti</label>
            <input type="text" maxlength="1275" name="ingredienti" id="ingredienti" value="{{ $product->ingredienti }}">
            @error('ingrdienti')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        {{-- prezzo --}}
        <div class="my-4 d-flex flex-column align-items-center">
            <label for="prezzo">Prezzo</label>
            <input type="number" name="prezzo" id="prezzo" placeholder="prezzo" value="{{ $product->prezzo }}" required
                required step="0.01" min="0.01">
            @error('prezzo')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        {{-- radio check --}}
        <div class="my-4 d-flex flex-column align-items-center">
            <label class="form-label"><strong>Disponibilità</strong></label>
            <div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="is_visible" value="1" id="si"
                        {{ $product->is_visible ? 'checked' : '' }}>
                    <label class="form-check-label" for="si">si</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="is_visible" value="0"
                        id="no"{{ !$product->is_visible ? 'checked' : '' }}>
                    <label class="form-check-label" for="no">no</label>
                </div>
            </div>

            @error('is_visible')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        {{-- immagine --}}
        <div class="my-3 text-center">
            <label class="form-label me-3"><strong>Immagine:</strong></label>
            @if ($product->image)
                <div style=" width:150px; margin: 0 auto;" class="mb-3">
                    <img style="width:100%; height:100%; object-fit:cover" src="{{ asset('storage/' . $product->image) }}"
                        alt="">
                </div>
            @else
                <p>Immagine non presente</p>
            @endif
            <input type="file" id="image" name="image" maxlength="255">
            @error('image')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="d-flex justify-content-center gap-3">

            {{-- tasto submit --}}
            <div class="my-2">
                <input type="submit" value="Aggiorna">
            </div>

            {{-- Back to product index --}}
            <a class="btn btn-primary my-1" href="{{ route('products.index', $product->id) }}">Indietro</a>

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
