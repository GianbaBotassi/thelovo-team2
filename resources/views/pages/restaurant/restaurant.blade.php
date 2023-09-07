@extends('layouts.app')
@section('content')
    {{ $restaurant->id }}
    {{ $restaurant->nome }}
    {{ $restaurant->indirizzo }}
    {{ $restaurant->partita_iva }}
    {{ $restaurant->image }}
@endsection
