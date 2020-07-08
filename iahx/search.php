<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="UTF-8">
	<meta name="autor" content=" BIREME | OPAS | OMS - > Márcio Alves">
	<meta name="keywords" content="Inserir Palavras Chaves">
	<meta name="description" content="Inserir Descrição">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" href="http://pesquisa.teste.bvsalud.org/portal/static/regional/image/favicon.ico">
	<title>Portal Regional da BVS</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="css/acessibilidade.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,900" rel="stylesheet">
</head>
<body>
	<div class="loading">
		<img src="img/loading.gif" class="rounded" alt="loading">
	</div>
	<?php include 'topAcessibility.php'?>
	<?php include 'header.php' ?>
	<section class="">
		<div class="container">
			<nav>
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="#">HOME</a></li>
					<li class="breadcrumb-item active" aria-current="page">RESULTADO DE BUSCA</li>
				</ol>
			</nav>
			<div class="row padding1">
				<div class="col-md-12">
					<div class="alert alert-secondary" role="alert">
						<h5>Foram encontrados: 20 referências para: <b>Virus da dengue</b></h5>
					</div>
				</div>
				<!-- Centro -->
				<div class="col-md-9" id="main_container">
					<?php for ($i=0; $i < 20; $i++) { ?>
						<div class="box4">
							<div class="titleArt"><a href="interna.php">Methamphetamine-associated difficulties in cognitive control allocation may normalize after abstinence.</a></div>
							<div class="author"><a href="">Stock</a>, <a href="">Ann-Kathrin</a>; <a href="">Rädle</a>, <a href="">Marion</a>; <a href="">Beste</a>, <a href="">Christian</a>.</div>
							<div class="reference"><b><i><a href="">Prog Neuropsychopharmacol Biol Psychiatry</a></i>; 88: 41-52, 2019 Jan 10.</b></div>
							<div class="dataArticle">Artigo em Inglês | <a href="">MEDLINE</a> | ID: mdl-29953935</div>
						</div>
					<?php } ?>			
				</div>
				<?php include 'colunaFilter.php' ?>
			</div>

			<nav aria-label="Page navigation example" class="">
				<ul class="pagination justify-content-center">
					<li class="page-item disabled">
						<a class="page-link" href="#" aria-disabled="true"><i class="fas fa-angle-double-left"></i></a>
					</li>
					<li class="page-item disabled">
						<a class="page-link" href="#" tabindex="-1" aria-disabled="true"><i class="fas fa-angle-left"></i></a>
					</li>
					<li class="page-item"><a class="page-link" href="#">1</a></li>
					<li class="page-item"><a class="page-link" href="#">2</a></li>
					<li class="page-item"><a class="page-link" href="#">3</a></li>
					<li class="page-item">
						<a class="page-link" href="#"><i class="fas fa-angle-right"></i></a>
					</li>
					<li class="page-item">
						<a class="page-link" href="#"><i class="fas fa-angle-double-right"></i></a>
					</li>
				</ul>
			</nav>
		</div>
	</section>
	<?php include 'footer.php' ?>
	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/cookie.js"></script>
	<script src="js/accessibility.js"></script>
	<script src="js/main.js"></script>
</body>
</html>