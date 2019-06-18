<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="UTF-8">
	<title>DeCS - Descritores em Ciências da Saúde</title>
	<meta name="author" content="">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" href="img/favicon.png" sizes="192x192">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="css/slick.css">
	<link rel="stylesheet" href="css/slick-theme.css">
	<link href="https://fonts.googleapis.com/css?family=Oswald:300,400|Roboto:400,700,900&display=swap" rel="stylesheet">
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>
<body>
	<?php include 'header.php'?>
	<?php include 'barSearch.php'?>
	<section class="text-center">
		<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
			<div class="carousel-inner">
				<div class="carousel-item active">
					<a href="novidades.php"><img src="img/banner1.jpg" class="img-fluid d-none d-sm-block" alt="..."></a>
					<a href="novidades.php"><img src="img/banner1M.jpg" class="img-fluid d-block d-sm-none" alt="..."></a>
				</div>
				<div class="carousel-item">
					<a href="sobre.php"><img src="img/banner2.jpg" class="img-fluid d-none d-sm-block" alt="..."></a>
					<a href="sobre.php"><img src="img/banner2M.jpg" class="img-fluid d-block d-sm-none" alt="..."></a>
				</div>
				
			</div>
			<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
	</section>
	<section id="consultaServico" class="padding1">
		<div class="container">
			<div class="row">
				
				<div class="col-md-4 homeConsult" data-aos="flip-left" data-aos-delay="300">
					<div class="homeIconeConsulta">
						<i class="fas fa-th iconeCS"></i>
					</div>
					<h4 class="titulo2">Conheça o DeCS</h4>
					<ul class="list-unstyle">
						<li><a href="sobre.php">Sobre o DeCS</a></li>
						<li><a href="novidades.php">Novidades</a></li>
						<li><a href="comoCitar.php">Como Citar o DeCS</a></li>
					</ul>
				</div>

				<div class="col-md-4 homeConsult" data-aos="flip-left" data-aos-delay="400">
					<div class="homeIconeConsulta">
						<i class="fas fa-envelope-open-text iconeCS"></i>
					</div>
					<h4 class="titulo2">Fale conosco</h4>
					<ul class="list-unstyle">
						<li><a href="faleConosco.php">Tire suas Dúvidas</a></li>
						<li><a href="https://docs.google.com/forms/d/e/1FAIpQLSc9uq1L-qkVjaJKXddss_UxzTiFoU9yytPYCMWNdV8EdbLuZg/viewform" target="_blank">Sugestões ao DeCS</a></li>
					</ul>
				</div>

				<div class="col-md-4 homeConsult" data-aos="flip-left" data-aos-delay="500">
					<div class="homeIconeConsulta">
						<i class="fas fa-laptop-code iconeCS"></i>
					</div>
					<h4 class="titulo2">Para Desenvolvedores</h4>
					<ul class="list-unstyle">
						<li><a href="servicos.php">Serviços Web do DeCS</a></li>
					</ul>
				</div>

			</div>
		</div>
	</section>
	<section class="padding1 bgColor1">
		<div class="container">
			<h2>Como usar o DeCS</h2>
			<div id="linha"></div>
			<div class="row">
				<div class="col-md-5" data-aos="fade-up">
					<div class="embed-responsive embed-responsive-16by9">
						<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/-Kt1pxrntys" allowfullscreen></iframe>
					</div>
				</div>
				<div class="col-md-7 marginM1" data-aos="fade-down">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores aliquid unde similique, reiciendis vel, molestias optio, deleniti fugit tenetur obcaecati excepturi quis fuga sint quia recusandae voluptates dignissimos repudiandae sunt.
				</div>
			</div>
		</div>
	</section>
	<?php include 'footer.php' ?>
	<script src="js/jquery-3.4.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/slick.min.js"></script>
	<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
	<script src="js/main.js"></script>
	<script>AOS.init();</script>
</body>
</html>