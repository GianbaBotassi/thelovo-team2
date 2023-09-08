@extends('layouts.app')
@section('content')
    <h1>
        Il prodotto mostrato è: {{ $product->nome }}
    </h1>
@endsection
