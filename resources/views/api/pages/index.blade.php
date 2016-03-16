@extends('api.layout.default')

@section('content')

<h1>Lista de Funções</h1>

<ul>
	<li>
		<h5>Lista de Condominos cadastrados</h5>
		<p>api/condomino/all</p>
		@if ($condominios)
		<ul	>
			@foreach ($condominios as $condominio)
				<li>
				<pre>
				{{ $condominio }}
					
				</pre>
				</li>
			@endforeach
		</ul>
			
		@endif
	</li>
	
</ul>

@stop