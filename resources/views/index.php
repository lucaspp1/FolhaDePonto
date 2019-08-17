<!doctype html>
<html lang="en">
  <head>
	<title>Title</title>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="style.css">

  </head>
  <body>
	  
	<nav class="navbar navbar-expand-sm navbar-dark" style="background-color: rgb(40,40,40)">
		<a class="navbar-brand" href="index.php">Ponto</a>
		<button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapse" aria-controls="collapse"
			aria-expanded="false" aria-label="'Toggle navigation'">
			<img src="https://cdn1.iconfinder.com/data/icons/ui-circles/24/316-512.png" width="40px;" />
			</button>
		<div class="collapse navbar-collapse" id="collapse">
			<ul class="navbar-nav mr-auto mt-2 mt-lg-0">
				<li class="nav-item active">
					<a class="nav-link" href="#">Home</a>
				</li>
				
				<!-- gerenciar  -->

				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					Horários
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						<a class="dropdown-item" href="#">Buscar</a>
						<a class="dropdown-item" href="#">Visualizar</a>
					</div>
				</li>

			</ul>
		</div>
	</nav>

	<div class="container pt-1 pt-sm-3 pt-lg-5">
		<div class="row pt-1 pt-sm-3 pt-lg-5 mb-5">

			<form action="baterPonto.php" method="post" class="col-12 text-center mb-5">
				<h2 class="h2" > Bater o ponto </h2>
			</form>

			<div class="col-0 col-sm-2 col-md-4"> </div>

			<div class="col-12 col-sm-8 col-md-4 text-center">
				<div class="btn-rounded">
					<i class="fa fa-check" aria-hidden="true"></i>
				</div>
			</div>
			
		</div>
		<div class="row pt-1 pt-sm-3 pt-lg-5 mt-5">
			<div class="col-1 col-sm-2 col-md-4 text-center"> </div>
			<div class="col-10 col-sm-8 col-md-4 text-center">
				<a href="pontoPers.php" class="btn btn-primary btn-lg btn-block">
					Bater ponto personalizado
				</a>
			</div>
		</div>	
	</div>

	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script src="script.js"></script>
  </body>
</html>