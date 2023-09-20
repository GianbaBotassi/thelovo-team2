@extends('layouts.app')
@section('content')
    <form id="restaurant-form" class="container my-2 text-center" method="POST" action="{{ route('store-restaurant') }}"
        enctype="multipart/form-data">
        @csrf
        @method('POST')


        <div class="d-flex flex-column align-items-center">
            {{-- titolo del form --}}
            <h1 class="py-2"><strong>Nuovo ristorante</strong></h1>

            {{-- nome --}}
            <div class="my-2">
                <label for="nome"><strong>Nome</strong></label>
                <br>
                <input type="text" name="nome" id="nome" required minlength="4" maxlength="64">
                <br>
                @error('nome')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            {{-- indirizzo --}}
            <div class="my-2">
                <label for="indirizzo"><strong>Indirizzo</strong></label>
                <br>
                <input type="text" name="indirizzo" id="indirizzo" required>
                <br>
                @error('indirizzo')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            {{-- partita iva --}}
            <div class="my-2">
                <label for="partita_iva"><strong>Partita iva ( 11 cifre )</strong> </label>
                <br>
                <input type="text" name="partita_iva" id="partita_iva" required pattern="[0-9]{11}">
                <br>
                @error('partita_iva')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            {{-- immagine --}}
            <div class="my-2">
                <label class="form-label me-3"><strong>Immagine:</strong></label>
                <input type="file" id="image" name="image" required>
                <br>
                @error('image')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            {{-- tipologia --}}
            <div class="my-2">
                <label for="typology"><strong>Tipologie: </strong></label>
                <div class="typology">

                    @foreach ($typologies as $typology)
                        <div>
                            {{-- checbox per la tipologia --}}
                            <input type="checkbox" name="typology[]" id="typology{{ $typology->id }}"
                                value="{{ $typology->id }}">
                            <label for="typology{{ $typology->id }}">{{ $typology->nome }}</label>
                        </div>
                    @endforeach
                </div>
                @error('typology[]')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <br>

            </div>

        </div>

        <div class="d-flex justify-content-center align-items-center gap-4 mt-3">
            {{-- Bottone per la creazione del ristorante --}}
            <div>
                <input type="submit" class="btn btn-primary py-2" value="Crea ristorante">
            </div>

            {{-- Bottone per tornare a index --}}
            <div class="text-center pt-1">
                <a class="btn btn-secondary text-light py-2" href="{{ route('dashboard') }}">Indietro</a>
            </div>
        </div>

        {{-- Alert --}}
        @if ($errors->any())
            <div class="alert alert-danger mt-3">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </form>
    <script type="text/javascript">
        document.getElementById('restaurant-form').addEventListener('submit', function(e) {
            // Seleziona tutte le checkbox con name="typology[]"
            var checkboxes = document.querySelectorAll('input[name="typology[]"]:checked');
            console.log(checkboxes);
            if (checkboxes.length === 0) {
                // Mostra un messaggio di errore se nessuna tipologia è stata selezionata
                e.preventDefault(); // Impedisci l'invio del modulo
                alert("Seleziona almeno una tipologia.");
            }
        });
    </script>
@endsection

<style lang="scss" scoped>
    form {
        font-size: 1.4rem;

        .typology {
            width: 600px;
            display: flex;
            flex-wrap: wrap;
            gap: 5px;
            justify-content: center;
            align-items: center;

            div {
                width: calc(25% - 5px);
            }
        }
    }
</style>
