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
</head>
<body>
	<?php include 'header.php'?>
	<?php include 'nav.php'?>
	<?php include 'barSearch.php'?>
	<section id="consultaServico" class="padding1">
		<div class="container">
			<div class="text-center">
				<h2>Consultas e Serviços</h2> <br>
			</div>
			<div class="row">
				<div class="col-md-4 homeConsult">
					<div class="homeIconeConsulta">
						<i class="fas fa-search iconeCS"></i>
					</div>
					<h4 class="text-center">CONSULTAS</h4>
					<ul class="list-unstyle">
						<li><a href="consultaAvancada.php">Consutlas Avançadas</a></li>
						<li><a href="consultaAlfabetica.php">Consutlas por Índices</a></li>
						<li><a href="consultaTrigramas.php">Consutlas via Trigramas</a></li>
					</ul>
				</div>
				<div class="col-md-4 homeConsult">
					<div class="homeIconeConsulta">
						<i class="fas fa-laptop-code iconeCS"></i>
					</div>
					<h4 class="text-center">SERVIÇOS</h4>
					<ul class="list-unstyle">
						<li><a href="servicos.php">Hierárquica</a></li>
						<li><a href="servicos.php">Conceitos</a></li>
						<li><a href="servicos.php">Similaridade Léxica</a></li>
					</ul>
				</div>
				<div class="col-md-4 homeConsult">
					<div class="homeIconeConsulta">
						<i class="fas fa-th iconeCS"></i>
					</div>
					<h4 class="text-center">OUTROS</h4>
					<ul class="list-unstyle">
						<li><a href="ocorrencia.php">Ocorrências de Conceitos</a></li>
						<li><a href="http://wiki.reddes.bvsalud.org/index.php/Servi%C3%A7os_DeCS" target="_blank">Web Service</a></li>
						<li><a href="novidades.php">Novidades</a></li>
						<li><a href="comoCitar.php">Como Citar o DeCS</a></li>
					</ul>
				</div>
			</div>
		</div>
	</section>
	<section class="padding1 bgColor1">
		<div class="container">
			<h2 class="text-center">Como usar o DeCS</h2> <br>
			<div class="row">
				<div class="col-md-5">
					<div class="embed-responsive embed-responsive-16by9">
						<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/-Kt1pxrntys" allowfullscreen></iframe>
					</div>
				</div>
				<div class="col-md-7">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores aliquid unde similique, reiciendis vel, molestias optio, deleniti fugit tenetur obcaecati excepturi quis fuga sint quia recusandae voluptates dignissimos repudiandae sunt.
				</div>
			</div>
		</div>
	</section>
	<section id="numeros" class="padding1">
		<div class="container text-center">
			<div class="row">
				<div class="col-12"> <h2>Números DeCS</h2></div>
				<div class="col-md-4 numerosBox">
					<div class="counter-up" data-count-to="33558"><span></span></div>
					Descritores e Qualificadores
				</div>
				<div class="col-md-4 numerosBox">
					<div class="counter-up" data-count-to="29018"><span></span></div>
					Descritores e Qualificadores <br> Exclusos do DeCS
				</div>
				<div class="col-md-4 numerosBox">
					<div class="counter-up" data-count-to="7741"><span></span></div>
					Códigos Hierárquicos <br> em categorias DeCS
				</div>
				<div class="col-12">
					<a href="sobre.php" class="btn btn-success btn-lg">SAIBA MAIS</a>
				</div>
			</div>
		</div>
	</section>

	<?php include 'footer.php' ?>
	<script src="js/jquery-3.4.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/slick.min.js"></script>
	<script src="js/main.js"></script>
</body>
</html>