<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="UTF-8">
	<meta name="autor" content="">
	<meta name="keywords" content="">
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Listas Anotadas de Medicamentos e Dispostivos</title>
	<link rel="icon" href="img/favicon.png" sizes="192x192">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700|Roboto:400,700,900" rel="stylesheet">
</head>
<body>
	<?php include 'header.php' ?>
	<section class="container" style="position: relative;">
		<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
			<div class="carousel-inner">
				<div class="carousel-item active">
					<img src="img/banner3.jpg" class="d-none d-md-block" alt="">
					<img src="img/banner3M.jpg" class="d-sm-block d-md-none" alt="">
					<div class="carousel-caption">
						<h4>Lorem ipsum dolor sit amet.</h4>
						<a href="" class="btn btn-info">Saiba Mais</a>
					</div>
				</div>
				<div class="carousel-item">
					<img src="img/banner.jpg" class="d-none d-md-block" alt="">
					<img src="img/bannerM.jpg" class="d-sm-block d-md-none" alt="">
					<div class="carousel-caption">
						<h4>Lorem ipsum dolor sit amet.</h4>
						<a href="" class="btn btn-info">Saiba Mais</a>
					</div>
				</div>
				<div class="carousel-item">
					<img src="img/banner2.jpg" class="d-none d-md-block" alt="">
					<img src="img/banner2M.jpg" class="d-sm-block d-md-none" alt="">
					<div class="carousel-caption">
						<h4>Lorem ipsum dolor sit amet.</h4>
						<a href="" class="btn btn-info">Saiba Mais</a>
					</div>
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

		<!-- Contador -->
		<div id="homeCount">
			<h4 class="homeCountTitle">STATISTICS</h4>
			<div class="row text-center">
				<div class="col-12 col-md-4">
					<div class="homeCountNumber counter-up" data-count-to="12000"><span></span>M</div> Medicamentos
				</div>
				<div class="col-12 col-md-4">
					<div class="homeCountNumber counter-up" data-count-to="60"><span></span>M</div> Sumários de Evidências
				</div>
				<div class="col-12 col-md-4">
					<div class="homeCountNumber counter-up" data-count-to="244"><span></span>M</div> Dispositivos Médicos
				</div>
			</div>
		</div>
		<?php include 'search.php'; ?>
	</section>



	
	<section class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="row" id="listasHome">
					<!-- lista 1 -->
					<div class="col-md-3">
						<div class="homeBox">
							<img src="img/lista1.png" alt="">
							<a href="lista.php" class="btn btn-sm btn-primary btn-block">WHO Model List of Essential Medicines 1</a>
							<a href="lista.php" class="btn btn-sm btn-primary btn-block">WHO Model List of Essential Medicines 2</a>
							
						</div>
					</div>
					<!-- lista 2 -->
					<div class="col-md-3">
						<div class="homeBox">
							<img src="img/lista2.png" alt="">
							<a href="lista.php" class="btn btn-sm btn-primary btn-block">PAHO Strategic Fund Medicine List 1</a>
							<a href="lista.php" class="btn btn-sm btn-primary btn-block">PAHO Strategic Fund Medicine List 2</a>
							
						</div>
					</div>

					<!-- lista 2 -->
					<div class="col-md-3">
						<div class="homeBox">
							<img src="img/lista4.png" alt="">
							<a href="lista.php" class="btn btn-sm btn-primary btn-block">PAHO Strategic Fund Medicine List 1</a>
							<a href="lista.php" class="btn btn-sm btn-primary btn-block">PAHO Strategic Fund Medicine List 2</a>
							
						</div>
					</div>

					<!-- lista 4 -->
					<div class="col-md-3">
						<div class="homeBox">
							<img src="img/paises.png" alt="">
							<a href="lista.php" class="btn btn-sm btn-primary btn-block">WHO List of Essential Medicines Devices</a>
							<a href="lista.php" class="btn btn-sm btn-primary btn-block">PAHO List of Essential Medicines Devices</a>
						</div>
					</div>
				</div>
			</div>
			
		</div>
	</section>
	<section class=" padding1">
		<div class="container">
			<h3 class="titulo1"><span class="colorText">Sumários </span> de evidência</h3>
			<hr>
			<div class="row">
				<div class="col-md-4">
					<img src="img/bula.jpg" alt="" class="img-fluid">
				</div>
				<div class="col-md-8">
					<p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem sint optio aspernatur nihil temporibus accusamus quod consequatur illo eum non! Delectus, velit. Magnam perferendis, architecto. Aut ipsa non magni error.</p>
					<a href="sumario.php" class="btn btn-success">Ver Sumáiros</a>
				</div>
			</div>
		</div>
	</section>

	<section class="sectionCinza padding1">
		<div class="container">
			<h3 class="titulo1"><span class="colorText">Comparar </span> Listas por Países</h3>
			<hr>
			<div class="row">
				<div class="col-md-7">
					<p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa eaque facilis, officiis nisi iste itaque recusandae consequatur porro provident dolorem quis quae voluptatem, maxime saepe quam commodi possimus autem doloribus laborum in quod illum ex quidem incidunt? Deleniti provident dolorum, eos eum corporis laborum commodi quod in asperiores earum assumenda.</p>
					<a href="comparar.php" class="btn btn-success">Comprar Listas</a>
				</div>
				<div class="col-6 offset-3 col-md-5 offset-md-0 col-lg-2 offset-lg-3">
					<img src="img/mundi.png" alt="" class="img-fluid">
				</div>
			</div>
		</div>
	</section>
	<?php include 'footer.php' ?>
	<script src="js/popper.min.js"></script>
	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/main.js"></script>
</body>
</html>