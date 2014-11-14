@extends('master')

@section('content')

<h1>Lista de incidencia en productos</h1>
   	<p>
    
  	</p>
	<table class="table table-striped">
		<tr>
			<th>id</th>
	    <th>cantidad</th>
	    <th>iva<th>
	    <th>precio con iva</th>
	    <th>precio sin iva</th>
	    <th>requerido</th>
	    <th>ventas</th>
	    <th>observaciones</th>
	    <th>IdReject</th>
	    <th>IdProduct</th>
		</tr>
		@foreach ($incidence_products as $incidence_product)
			<tr>
		 	  <td>{{ $incidence_product->IdIncidenceProduct }}</td>
		    <td>{{ $incidence_product->quantity }}</td>
		    <td>{{ $incidence_product->iva}}</td>
		    <td>{{ $incidence_product->iva_price }}</td>
		    <td>{{ $incidence_product->price }}</td>
		    <td>{{ $incidence_product->required}}</td>
		    <td>{{ $incidence_product->sales }}</td>
		    <td>{{ $incidence_product->observations }}</td>
		    <td>{{ $incidence_product->IdReject }}</td>
		    <td>{{ $incidence_product->IdProduct }}</td>
			</tr>
		@endforeach
	</table> 
@stop