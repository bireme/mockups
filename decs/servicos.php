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
	<link href="css/fontawesome/css/all.css" rel="stylesheet">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="css/slick.css">
	<link rel="stylesheet" href="css/slick-theme.css">
</head>
<body>
	<?php include 'header.php' ?>
	<?php include 'nav.php' ?>
	<?php include 'barSearch.php' ?>
	<div class="titulo1 text-center">
		<h2>Serviços Web do DeCS</h2>
		<h6>Esta página é voltada para os desenvolvedores.</h6>
	</div>
	
	<section class="padding2">
		<div class="container">
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="index.php">Home</a></li>
					<li class="breadcrumb-item active" aria-current="page">Serviços Web do DeCS</li>
				</ol>
			</nav>
			<div class="row">
				<div class="col-md-4">
					<img src="img/servicos.jpg" class="img-fluid rounded" alt="">
				</div>
				<div class="col-md-8"> <br>
					<h4>Licença de uso (Gratuito)</h4>
					<p>Para proteção dos direitos de autor, os serviços web do DeCS são oferecidos <b>gratuitamente por meio de uma licença de uso</b>. Assim, pedimos que primeiramente preencha o nosso <a href="https://goo.gl/forms/8e5YbUm500COhQGF2" target="_blank">Formulário padrão pré-Licença de uso do DeCS</a>.</p>
					<p>Depois que recebermos esta informação, lhe enviaremos uma licença para cada idioma solicitado.</p>
					<div id="linha"></div>

					
					<div class="text-center">
						<div class="btn-group">
							<a href="http://wiki.reddes.bvsalud.org/index.php/Servi%C3%A7os_DeCS" class="btn btn-success" target="_blank">Saiba como utilizar</a>
							<a href="servicosTeste.php" class="btn btn-success">Serviço de Teste</a>
						</div>
					</div>
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