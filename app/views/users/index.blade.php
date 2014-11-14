@extends('master')

@section('content')

	<h1>Lista de usuarios</h1>
	   	<p>
	    
	  	</p>

		<table class="table table-striped">
			<tr>
				<th>id</th>
		    <th>Nombre del usuario</th>
		    <th>Email del usuario</th>
		    <th>Key </th>
			</tr>
			@foreach ($users as $user)
				<tr>
			 	  <td>{{ $user->IdUser }}</td>
			    <td>{{ $user->nameUser }}</td>
			    <td>{{ $user->emailUser }}</td>
			    <td>{{ $user->key }}</td>
				</tr>
			@endforeach
		</table> 	
	@stop