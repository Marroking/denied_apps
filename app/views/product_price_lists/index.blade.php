@extends('master')

@section('content')

<h1>Lista de precios de los productos</h1>
   	<p>
    
  	</p>
	<table class="table table-striped">
		<tr>
			<th>id</th>
	    <th>price</th>
	    <th>fecha de vigencia</th>
	    <th>id del producto </th>
		</tr>
		@foreach ($product_price_lists as $product_price_list)
			<tr>
		 	  <td>{{ $product_price_list->IdProductPriceList }}</td>
		    <td>{{ $product_price_list->price }}</td>
		    <td>{{ $product_price_list->effective_date }}</td>
		    <td>{{ $product_price_list->IdProduct }}</td>
			</tr>
		@endforeach
	</table> 	
@stop