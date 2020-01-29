<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <style type="text/css">
	  .altura{
	    height: 670px;
	  }
	</style>
	<title></title>
	@yield('head')
</head>


	
<body class="bg-secondary">
	<div class="container-fluid bg-dark p-4">
		<div class="container">
			<div class="row justify-content-between m-2">
				<div class="col-3 text-light h4 ">Logo</div>
				<div>
					<a href="/" class="btn btn-secondary">Inicio</a>
					<a href="/proyectos" class="btn btn-secondary">Proyectos</a>
					<a href="empleados" class="btn btn-secondary">Empleados</a>
				</div>
			</div>
		</div>
	</div>
	<div class="container bg-secondary">
	@yield('body')
	</div>
	<div class="container-fluid bg-dark m-0 p-4">
		<div class="container">
			<div class="row justify-content-center">
				<div class="text-light h4">Andres R.</div>
			</div>
		</div>
	</div>
</body>
</html>