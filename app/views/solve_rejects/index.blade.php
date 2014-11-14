@extends('master')

@section('content')

<h1>Lista de rechazos solucionados</h1>
   	<p>
    
  	</p>
	<table class="table table-striped">
		<tr>
				<th>id</th>
		    <th> Id del Usuario</th>
		</tr>
		@foreach ($solve_rejects as $solve_reject)
			<tr>
		 	  <td>{{ $solve_reject->IdSolveReject }}</td>
		    <td>{{ $solve_reject->IdUser }}</td>
			</tr>
		@endforeach
	</table> 	
@stop