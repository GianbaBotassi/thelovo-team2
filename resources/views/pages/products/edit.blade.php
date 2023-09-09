@extends('layouts.app')
@section('content')
    {{-- action="{{ route('products.update') }}" --}}
    <form class="container my-2 text-center" method="POST" enctype="multipart/form-data"
        action="{{ route('products.update', $product->id) }}" required>
        @csrf
        @method('PUT')

        {{-- nome --}}
        <div class="my-2">
            <label for="nome">nome</label>
            <br>
            <input type="text" name="nome" id="nome" placeholder="nome" value="{{ $product->nome }}" required
                minlength="2" maxlength="64">
            <br>
            @error('nome')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        {{-- descrizione --}}
        <div class="my-2">
            <label for="descrizione">descirzione</label>
            <br>
            <input type="text" maxlength="1275" name="descrizione" id="descrizione" value="{{ $product->descrizione }}">

            <br>
            @error('descrizione')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        {{-- ingredienti --}}
        <div class="my-2">
            <label for="ingredienti">ingredienti</label>
            <br>
            <input type="text" maxlength="1275" name="ingredienti" id="ingredienti" value="{{ $product->ingredienti }}">

            <br>
            @error('ingrdienti')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        {{-- prezzo --}}
        <div class="my-2">

            <label for="prezzo">prezzo</label>
            <br>
            <input type="number" name="prezzo" id="prezzo" placeholder="prezzo" value="{{ $product->prezzo }}" required
                required step="0.01" min="0.01">
            <br>
            @error('prezzo')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

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
            <br>
            @error('is_viseble')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        {{-- immagine --}}
        <div class="my-3">
            <label class="form-label me-3"><strong>Immagine:</strong></label>
            <input type="file" id="image" name="image" required maxlength="255">
            <br>
            @error('image')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        {{-- tasto submit --}}
        <div class="my-2">
            <input type="submit" value="crea">
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
