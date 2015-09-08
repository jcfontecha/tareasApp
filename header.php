<?php include 'grado.php'; ?>

<?php 
	if (isset($_SESSION["usuario"])) {
		$boton = "<li><a href=\"#\">Cerrar sesión</a></li>";
	} else {
		$boton = "<li><a href=\"login.php\">Iniciar sesión</a></li>";
	}
?>

<html lang="es">
	<head>
		<title>Tareas | Cedros</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		
		<!-- Bootstrap -->
		<link href="bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" href="css/themes/material.min.css" />
		
		<!-- FontAwesome -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
		
		<link rel="stylesheet" href="css/style.css" />

	</head>
	<body>
		
		<!-- jQuery -->
		<script src="bower_components/jquery/dist/jquery.min.js"></script>
		
		<div class="row">
			<div class=" col-sm-1 col-lg-2"></div>
			<div class="col-xs-12 col-sm-10 col-md-10 col-lg-8">
				<header>
					<div class="header-image">
						
					</div>
					<nav class="navbar navbar-default">
						<div class="container-fluid">
							<!-- Brand and toggle get grouped for better mobile display -->
							<div class="navbar-header">
								<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
									<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
								<a class="navbar-brand" href="index.php"><i class="fa fa-graduation-cap"></i></a>
							</div>
							
							<!-- Collect the nav links, forms, and other content for toggling -->
							<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
								<ul class="nav navbar-nav">
									<li id="tab-home"><a href="index.php">Home</a></li>
									<li id="tab-primaria"><a href="primaria.php">Primaria</a></li>
									<li id="tab-secundaria"><a href="secundaria.php">Secundaria</a></li>
								</ul>
								
								<ul class="nav navbar-nav navbar-right">
									<!--li><a href="#">Link</a></li-->
									<li class="dropdown">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Perfil <span class="caret"></span></a>
										<ul class="dropdown-menu">
											<?php echo $boton; ?>
									 	</ul>
									</li>
								</ul>
								
							</div><!-- /.navbar-collapse -->
						</div><!-- /.container-fluid -->
					</nav>
				</header>
				
				<div class="main-container">