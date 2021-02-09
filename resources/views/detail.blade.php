@extends('layout.template')

@section('main')
	<p>Marca: {{ $carDetail[$id - 1]->marca }}</p>
	<p>Modello: {{ $carDetail[$id - 1]->modello }}</p>
	<img src="{{ $carDetail[$id - 1]->foto }}" alt="" style="width:500px">
	<p>Descrizione: {{ $carDetail[$id - 1]->dettaglio }}</p>
@endsection