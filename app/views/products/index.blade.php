@extends('master')

@section('content')


<h1>Lista de productos</h1>
   	<p>
    
  	</p>
	<table class="table table-striped">
		<tr>
				<th>id</th>
		    <th>Nombre completo</th>
		    <th>Lista de precios</th>
		    <th>id familia</th>
		    <th>id inventario</th>
		    <th>id product price list</th>

		</tr>
		@foreach ($products as $product)
			<tr>
		 	  <td>{{ $product->IdProduct }}</td>
		    <td>{{ $product->nameProduct }}</td>
		    <td>{{ $product->ABCNacional}}</td>
		    <td>{{ $product->IdFamily }}</td>
		    <td>{{ $product->IdInventory}}</td>
		    <td>{{ Product::find($product->IdProduct)->product_price_list->price}}</td>
			</tr>
		@endforeach
	</table> 	
@stop