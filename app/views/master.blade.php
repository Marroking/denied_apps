<!DOCTYPE html>

<html lang="en">
<head>
	<title>@yield('title')Radec S.A de C.V</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
		{{ HTML::style('assets/css/bootstrap.css')}}
		{{ HTML::script('assets/js/bootstrap.js')}}
		{{ HTML::script('jquery.js')}}

</head>
<body>
	<header>
		<nav class="navbar navbar-default navbar-inverse" role="navigation">
		  <div class="container-fluid">
		  	<div class="col-md-2">
			    {{ HTML::image('images/radec_logo.jpg', "Imagen no encontrada", array('id' => 'radec_logo', 'title' => 'RADEC S.A de C.V')) }}
			    <div class="navbar-header">
			      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
			        <span class="sr-only">Toggle navigation</span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			      </button>
			    </div>
			  </div>
			  <div class="col-md-10">
			    <div class="collapse navbar-collapse nav navbar-nav navbar-right">
			      <ul class="nav navbar-nav">
			        <li><a href="/">Inicio</a></li>
			        <li><a href="/business_units">Unidades de N.</a></li>
			        <li><a href="/inventories">Inventarios</a></li>
			        <li><a href="/customers">Clientes</a></li>
			        <li><a href="/families">Familias</a></li>
			        <li><a href="/rejects">Rechazos</a></li>
			        <li><a href="/families">Rechazos resueltos</a></li>
			        <li><a href="/families">Usuarios</a></li>


			        <li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">Productos<strong class="caret"></strong></a>
								<ul class="dropdown-menu">
									<li><a href="/price_lists">Lista de precios</a></li>
			        		<li><a href="/product_price_lists">Lista de precios de Productos</a></li>
			        		<li><a href="/price_lists">Lista de precios</a></li>
			        		<li><a href="/products">Productos</a></li>
			        		<li><a href="/incidence_products">Incidentes de Productos</a></li>
			        		<li><a href="/product_rejects">Productos rechazados</a></li>
								</ul>
							</li>

			      </ul>
			    </div>
			  </div>
		  </div><!-- /.container-fluid -->
		</nav>
	</header>
	<div class="container">
		@yield('content')
	</div>
</body>

	<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</html>