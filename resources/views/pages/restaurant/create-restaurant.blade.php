@extends('layouts.app')
@section('content')
    <form class="container my-2" method="POST" action="{{ route('store-restaurant') }}" enctype="multipart/form-data">
        @csrf
        @method('POST')

        <div class="d-flex flex-column align-items-center">
            <h1 class="py-2">Nuovo ristorante</h1>
            <div class="my-3">
                <label class="form-label me-3" for="nome"><strong>Nome:</strong></label>
                <input type="text" id="nome" name="nome">
            </div>
            <div class="my-3">
                <label class="form-label me-3"><strong>Indirizzo:</strong></label>
                <input type="text" id="indirizzo" name="indirizzo">
            </div>
            <div class="my-3">
                <label class="form-label me-3"><strong>Partita Iva:</strong></label>
                <input type="text" id="partita_iva" name="partita_iva">
            </div>
            <div class="my-3">
                <label class="form-label me-3"><strong>Immagine:</strong></label>
                <input type="text" id="image" name="image">
            </div>
            <div>
                <label for="typology"><strong>Tipologie: </strong></label>
                <select name="typology" id="typology">
                    @foreach ($typology as $typology)
                        <option :value="$typology - > id">{{ $typology->nome }}</option>
                    @endforeach
                </select>
            </div>


            {{-- <label class="my-2" for="user_picture"><strong>Carica la tua immagine profilo</strong></label>
            <input type="file" name="user_picture" id="user_picture">
            <label class="my-2"><strong>Tecnologie:</strong></label> --}}

        </div>
        <div class="d-flex justify-content-center gap-4 mt-3">
            <button type="submit" class="btn btn-primary">Crea ristorante</button>
            {{-- Bottone per tornare a index --}}
            <div class="text-center pt-1">
                <a class="btn btn-secondary text-light" href="{{ route('welcome') }}">Indietro</a>
            </div>
        </div>

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
