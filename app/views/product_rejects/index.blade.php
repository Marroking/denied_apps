@extends('master')

@section('content')

<h1>Lista de productos rechazados</h1>
   	<p>
    
  	</p>
	<table class="table table-striped">
				<th>id</th>
		    <th>price</th>
		    <th>fecha de vigencia</th>
		    <th>id del producto </th>
		@foreach ($product_rejects as $product_reject)
			<tr>
		 	  <td>{{ $product_reject->IdProductReject }}</td>
		    <td>{{ $product_reject->date_product_reject }}</td>
		    <td>{{ $product_reject->amount_denied }}</td>
		    <td>{{ $product_reject->IdCustomer }}</td>
			</tr>
		@endforeach
	</table> 	
@stop