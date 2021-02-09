<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
</head>
<body>

	<h1>PROVA HOMEPAGE</h1>
	@foreach ($cars as $item)

		<p>{{ $item->marca }}</p>
		<p>{{ $item->modello }}</p>
		<p>{{ $item->targa }}</p>
		<img src="{{ $item->foto }}" alt="" style="width:300px">
			
	@endforeach
	
	
</body>
</html>