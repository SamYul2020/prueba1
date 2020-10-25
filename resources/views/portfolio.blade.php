@extends('plantilla')

@section('content')
	<h2>Portfolio</h2>

	<ul>

		
		@if($portfolio)
			@foreach($portfolio as $portfolioItem)

				<li>{{ $portfolioItem['title'] }}</li>


			@endforeach
		@else

			<li>No hay proyectos existentes</li>

		@endif
		

		<!-------------------------------------------------->

		{{--
		@forelse($portfolio)
			

				<li>{{ $portfolioItem['title'] }}</li>

		@empty

			<li>No hay proyectos existentes</li>

		@endforelse

		--}}

	</ul>

@endsection