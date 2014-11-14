@extends('master')

@section('content')

<h1>Lista de incidencia en productos</h1>
   	<p>
    
  	</p>
	<table class="table table-striped">
		<tr>
			<th>id</th>
	    <th>Nombre de la Familia</th>
		</tr>
		@foreach ($families as $familiy)
			<tr>
		 	  <td>{{ $familiy->IdFamily }}</td>
		    <td>{{ $familiy->nameFamily }}</td>
			</tr>
		@endforeach
	</table> 	
@stop