@extends('layouts.app')
@section('content')
    <form class="container my-2 text-center" method="POST" action="{{ route('store-restaurant') }}"
        enctype="multipart/form-data">
        @csrf
        @method('POST')


        <div class="d-flex flex-column align-items-center">
            {{-- titolo del form --}}
            <h1 class="py-2">Nuovo ristorante</h1>

            {{-- nome --}}
            <div class="my-2">
                <label for="nome">nome</label>
                <br>
                <input type="text" name="nome" id="nome" placeholder="nome" required minlength="4" maxlength="64">
                <br>
                @error('nome')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            {{-- indirizzo --}}
            <div class="my-2">
                <label for="indirizzo">indirizzo</label>
                <br>
                <input type="text" name="indirizzo" id="indirizzo" placeholder="indirizzo" required>
                <br>
                @error('indirizzo')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            {{-- partita iva --}}
            <div class="my-2">
                <label for="partita_iva">partita iva ( 11 cifre ) </label>
                <br>
                <input type="text" name="partita_iva" id="partita_iva" placeholder="partita iva" required
                    pattern="[0-9]{11}">
                <br>
                @error('partita_iva')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            {{-- immagine --}}
            <div class="my-2">
                <label class="form-label me-3"><strong>Immagine:</strong></label>
                <input type="file" id="image" name="image">
                <br>
                @error('image')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            {{-- tipologia --}}
            <div class="my-2">
                <label for="typology"><strong>Tipologie: </strong></label>
                @foreach ($typologies as $typology)
                    <div>
                        {{-- checbox per la tipologia --}}
                        <input type="checkbox" name="typology[]" id="typology{{ $typology->id }}"
                            value="{{ $typology->id }}">
                        <label for="typology{{ $typology->id }}">{{ $typology->nome }}</label>
                    </div>
                @endforeach
                <br>

            </div>

        </div>

        <div class="d-flex justify-content-center gap-4 mt-3">
            {{-- Bottone per la creazione del ristorante --}}
            <input type="submit" class="btn btn-primary" value="Crea ristorante">

            {{-- Bottone per tornare a index --}}
            <div class="text-center pt-1">
                <a class="btn btn-secondary text-light" href="{{ route('dashboard') }}">Indietro</a>
            </div>
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
    <script type="text/JavaScript">
        let partita_iva = document.getElementById("partita_iva");
            console.log(partita_iva);
        </script>
@endsection
