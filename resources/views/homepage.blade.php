@extends('layout.template')


@section('main')
	@foreach ($cars as $item)
		<p>{{ $item->marca }}</p>
		<p>{{ $item->modello }}</p>
		<p>{{ $item->targa }}</p>
		<a href="{{ route('dettaglio', ['id' => $item->id]) }}"><img src="{{ $item->foto }}" alt="" style="width:300px"></a>
	@endforeach
@endsection	
	