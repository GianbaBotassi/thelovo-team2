@extends('layouts.app')
@section('content')
    {{-- action="{{ route('products.store') }}" --}}
    <form class="container my-2" method="POST" enctype="multipart/form-data" action="{{ route('products.store') }}">
        @csrf
        @method('POST')

        {{-- input nome --}}
        <label for="nome">nome del prodotto</label>
        <input type="text" name="nome" id="nome" placeholder="nome" required>

        {{-- input descrizione --}}
        <label for="descrizione">descrizione del prodotto</label>
        <textarea name="descrizione" id="descrizione" placeholder="descrizione" rows="80" cols="80" required>
        </textarea>
        {{-- input ingredienti --}}
        <label for="ingredienti"></label>
        <input type="text" name="ingredienti" id="ingredienti" placeholder="ingredienti" required>

        {{-- input prezzo --}}
        <label for="prezzo">prezzo</label>
        <input type="numeber" name="prezzo" id="prezzo" placeholder="prezzo" required>

        {{-- input radio check is_visible --}}
        <div class="my-3">
            <label class="form-label me-3"><strong>Disponibilità</strong></label>
            {{-- radio si --}}
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="is_visible" value="0" id="si" required>
                <label class="form-check-label" for="si">si</label>
            </div>
            {{-- radio no --}}
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="is_visible" value="1" id="no" required>
                <label class="form-check-label" for="no">no</label>
            </div>
        </div>

        {{-- input immmagine --}}
        <label for="image">immagine</label>
        <input type="text" name="image" id="image" placeholder="image" required>

        <input type="submit" value="update">
    </form>
@endsection
