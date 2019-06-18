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
	<?php include 'header.php' ?>
	<?php include 'nav.php' ?>
	<?php include 'barSearch.php' ?>
	<div class="titulo1 text-center">
		<h2>Serviço DeCS</h2>
	</div>
	
	<section class="padding2">
		<div class="container">
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="index.php">Home</a></li>
					<li class="breadcrumb-item active" aria-current="page">Serviço DeCS</li>
				</ol>
			</nav>
			<div class="row">
				<div class="col-md-4">
					Efetue sua busca. Caso tenha alguma dúvida, <a href="http://wiki.reddes.bvsalud.org/index.php/Servi%C3%A7os_DeCS" target="_blank">clique aqui </a>para saber mais.
				</div>
				<div class="col-md-8">
					<form action="http://decs.bvsalud.org/cgi-bin/mx/cgi=@vmx/decs/?tree_id=B01.050.150.900.649.313.988.400.112.199.120.510.550"  target="_blank">
						<div class="row">
							<div class="col-12">
								<div class="form-group">
									<label for=""><b>Categoria Hierárquica</b></label>
									<input type="text" class="form-control" placeholder="Ex: B01.050.150.900.649.313.988.400.112.199.120.510.550">
								</div>
							</div>
							<div class="col-md-6">
								<button type="submit" class="btn btn-success btn-block">Chamar Serviço</button>
							</div>
						</div>
					</form>

					<br>
					<form action="http://decs.bvsalud.org/cgi-bin/mx/cgi=@vmx/decs?lang=p&words=Macaca%20mulatta"  target="_blank">
						<div class="row">
							<div class="col-12">
								<div class="form-group">
									<label for=""><b>Nome dos Conceitos</b></label>
									<input type="text" class="form-control" placeholder="Ex: Macaca Mullata">
								</div>
							</div>
							<div class="col-md-6">
								<button type="submit" class="btn btn-success btn-block">Chamar Serviço</button>
							</div>
						</div>
					</form>

					<br>
					<form action="http://decs.bvsalud.org/cgi-bin/mx/cgi=@vmx/decs?lang=p&words=Cardiovascular"  target="_blank">
						<div class="row">
							<div class="col-12">
								<div class="form-group">
									<label for=""><b>Similaridade Léxica</b></label>
									<input type="text" class="form-control" placeholder="Ex: Cardiovascular">
								</div>
							</div>
							<div class="col-md-6">
								<button type="submit" class="btn btn-success btn-block">Chamar Serviço</button>
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