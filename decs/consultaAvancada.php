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
	
	<section class="padding1">
		<div class="container">
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="index.php">Home</a></li>
					<li class="breadcrumb-item active" aria-current="page">Consulta Avançada</li>
				</ol>
			</nav>

			<h1 class="titleMain">Consulta Avançada</h1>
			<hr>	
			
			<div class="row">
				<div class="col-md-4">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis perferendis enim ad blanditiis iste modi nam aliquam debitis, incidunt, ratione doloremque voluptates est autem consequatur perspiciatis quod, quisquam facere nulla?</p>
				</div>
				<div class="col-md-8">
					<form action="resultado.php">
						<div class="row">
							<div class="col-12"><h4>Outras Buscas</h4></div>
							<div class="col-md-12">
								<div class="row form-group">
									<div class="col-md-5">
										<input type="text" class="form-control" placeholder="Digite sua busca">
									</div>
									<div class="col-md-5">
										<select name="" id="" class="form-control">
											<option value="" checked>Escolha o campo desejado</option>
											<option value="">Buscar por Código Hierárquico</option>
											<option value="">Buscar por ID</option>
											<option value="">Buscar por Ação Farmacológica</option>
											<option value="">Buscar por Notas de Escopo</option>
											<option value="">Buscar por Notas de Indexação</option>
										</select>
									</div>
									<div class="col-md-2 form-group">
										<button class="btn btn-block btn-success">Buscar</button>
									</div>
								</div>
							</div>
						</div>
					</form>		
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