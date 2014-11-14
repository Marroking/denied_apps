@extends('master')

@section('content')

<h1>Lista de precios</h1>
   	<p>
    
  	</p>
	<table class="table table-striped">
		<tr>
			<th>id</th>
	    <th> Precio</th>
		</tr>
		@foreach ($price_lists as $price_list)
			<td>
		 	  <td>{{ $price_list->IdPriceList }}</td>
		    <td>{{ $price_list->price }}</td>
			</tr>
		@endforeach
	</table> 	
@stop