@extends('master')

@section('content')

<h1>Lista de inventarios</h1>
   	<p>
    
  	</p>
	<table class="table table-striped">
		<tr>
			<th>id</th>
	    <th>Cantidad Libre</th>
	    <th>Cantidad Ocupada</th>
	    <th>ABCUN</th>
	    <th>stockMax</th>
		</tr>
		@foreach ($inventories as $inventory)
			<tr>
		 	  <td>{{ $inventory->IdInventory }}</td>
		    <td>{{ $inventory->quantity_free }}</td>
		    <td>{{ $inventory->quantity_free}}</td>
		    <td>{{ $inventory->ABCUN }}</td>
		    <td>{{ $inventory->stockMax }}</td>
			</tr>
		@endforeach
	</table> 	
@stop