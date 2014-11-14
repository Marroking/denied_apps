@extends('master')

@section('content')

<h1>Lista de rechazados</h1>
   	<p>
    
  	</p>
	<table class="table table-striped">
		<tr>
			<th>id</th>
	    <th>Nombre del rechazado</th>
		</tr>
		@foreach ($rejects as $reject)
			<tr>
		 	  <td>{{ $reject->IdReject }}</td>
		    <td>{{ $reject->nameReject }}</td>
			</tr>
		@endforeach
	</table> 
	
@stop