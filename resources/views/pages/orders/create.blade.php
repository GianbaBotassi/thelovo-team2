@extends('layouts.app')
@section('content')
    {{--
        "nome",
        "indirizzo",
        "telefono",
        "email",
        "note",
        "status",
        "data",
        "totale"
    --}}
    <div class="text-center">


        {{-- action="{{ route('products.store') }}" --}}
        <form class="container my-2" method="POST" enctype="multipart/form-data">
            @csrf
            @method('POST')

            {{-- input nome --}}
            <div>
                <label for="nome">Iserisci qui il tuo nome</label>
                <br>
                <input type="text" name="nome" id="nome" placeholder="nome" required>
            </div>


            {{-- input indirizzo --}}
            <div>
                <label for="indirizzo">Dove consegnare</label>
                <br>
                <input type="text" name="indirizzo" id="indirizzo" placeholder="indirizzo" required>
            </div>

            {{-- input telefono --}}
            <div>
                <label for="telefono">Recapito telefonico</label>
                <br>
                <input type="text" name="telefono" id="telefono" placeholder="telefono" required>
            </div>

            {{-- input email --}}
            <div>
                <label for="email">email</label>
                <br>
                <input type="email" name="email" id="email" placeholder="email" required>
            </div>

            {{-- note --}}
            <div>
                <label for="note">note</label>
                <br>
                <textarea name="note" id="note" cols="30" rows="10"></textarea>
            </div>

            {{-- data --}}
            <div>
                <label for="data">quando vuoi consegnato</label>
                <br>
                <input type="data" name="data" id="data" required>
            </div>


            <hr>
            <input type="submit" value="update">
        </form>
    </div>
@endsection
