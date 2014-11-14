@extends('master')

@section('content')

<h1>Lista de unidades de negocio</h1>
   	<p>
    
  	</p>
	<table class="table table-striped">
		<tr>
			<th>id</th>
	    <th>Nombre SC</th>
	    <th>Id SC Padre</th>
		</tr>
		@foreach ($business_units as $business_unit)
			<tr>
		 	  <td>{{ $business_unit->IdBusinessUnit }}</td>
		    <td>{{ $business_unit->nameSC }}</td>
		    <td>{{ $business_unit->IdSCFather}}</td>
			</tr>
		@endforeach
	</table> 	
@stop