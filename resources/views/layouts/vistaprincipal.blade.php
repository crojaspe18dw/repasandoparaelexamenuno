<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<title></title>
	@yield('head')
</head>


	
<body class="bg-secondary">
	<div class="container-fluid bg-dark p-4">
		<div class="container">
			<div class="row justify-content-between m-2">
				<div class="col-3 text-light h4 ">Logo</div>
				<div>
					<button class="link text-light btn-secondary mx-2">Inicio</button>
				</div>
			</div>
		</div>
	</div>
	@yield('body')
		<div class="container-fluid bg-dark p-4">
		<div class="container">
			<div class="row justify-content-center">
				<div class="text-light h4">Andres R.</div>
			</div>
		</div>
	</div>
</body>
</html>