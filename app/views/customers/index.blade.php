@extends('master')

@section('content')

<h1>Lista de clientes</h1>
   	<p>
    
  	</p>
	<table class="table table-striped">
		<tr>
			<th>id</th>
	    <th>Nombre completo</th>
	    <th>Lista de precios</th>
		</tr>
		@foreach ($customers as $customer)
			<tr>
		 	  <td>{{ $customer->IdCustomer }}</td>
		    <td>{{ $customer->nameCustomer }}</td>
		    <td>{{ $customer->IdPriceList}}</td>
			</tr>
		@endforeach
	</table> 	
@stop