@extends('plantilla')

@section('content')
	<h2>Contacto</h2>



		<form method="POST" action="{{route('contact')}}">
			@csrf
			
			<input name="nombre" placeholder="Nombre..." value="{{old('nombre')}}"><br>
			{!!$errors->first('nombre','<small>:message</small>')!!}<br>
			<input type="email" name="email" placeholder="email..." value="{{old('email')}}"><br>
			{!!$errors->first('email','<small>:message</small>')!!}<br>
			<input name="asunto" placeholder="Asunto..." value="{{old('asunto')}}"><br>
			{!!$errors->first('asunto','<small>:message</small>')!!}<br>
			<textarea name="contenido" placeholder="Mensaje..." value="{{old('contenido')}}"></textarea>><br>
			{!!$errors->first('contenido','<small>:message</small>')!!}<br>
			<button>Enviar</button>
		</form>

@endsection