<h1>Lista de usuarios</h1>
<ul>
	@foreach($usuarios as $usuario)
	
	<li>NOMBRE: {{ $usuario -> username}}</li>
	<li>ID: {{ $usuario -> id}}</li>
	<li>PASSWORD: {{ $usuario -> password}}</li>
	
	@endforeach
</ul>