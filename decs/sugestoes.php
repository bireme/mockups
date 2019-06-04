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
		<h2>Sugestões ao DeCS</h2>
	</div>
	
	<section class="padding2">
		<div class="container">
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="index.php">Home</a></li>
					<li class="breadcrumb-item active" aria-current="page">Sugestões ao DeCS</li>
				</ol>
			</nav>
			
			<div class="row">
				<div class="col-md-12">
					<p>Em espanhol ou português para as categorias do MeSH e em qualquer dos três idiomas para as categorias exclusivas do DeCS - Preencha o formulário abaixo:</p>
					<p><a href="https://www.nlm.nih.gov/mesh/meshsugg.html" target="_blank">Em inglês para as categorias do MeSH</a> - O link à esquerda remete à página de sugestões para o MeSH, da NLM.</p>
					<div id="linha"></div>
				</div>
				<div class="col-md-12 marginM1">
					<form action="">
						<fieldset>
							<legend>Dados Pessoais</legend>
							<div class="row">
								<div class="col-6">
									<div class="form-group">
										<input type="text" class="form-control" placeholder="Seu nome*" required>
									</div>
								</div>
								<div class="col-6">
									<div class="form-group">
										<input type="text" class="form-control" placeholder="Seu e-mail*" required>
									</div>
								</div>
								<div class="col-6">
									<div class="form-group">
										<input type="text" class="form-control" placeholder="Instituição">
									</div>
								</div>
								<div class="col-6">
									<div class="form-group">
										<input type="text" class="form-control" placeholder="Área de atuação">
									</div>
								</div>
								<div class="col-12">
									<div class="form-group">
										<input type="text" class="form-control" placeholder="Endereço Completo">
									</div>
								</div>
							</div>
						</fieldset>
						<fieldset>
							<legend>Sobre sua sugestão</legend>
							<div class="row">
								<div class="col-4">
									<div class="form-group">
										<input type="text" class="form-control" placeholder="Termo em português">
									</div>
								</div>
								<div class="col-4">
									<div class="form-group">
										<input type="text" class="form-control" placeholder="Termo em Espanhol">
									</div>
								</div>
								<div class="col-4">
									<div class="form-group">
										<input type="text" class="form-control" placeholder="Termo em Inglês">
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<textarea name="" id="" cols="30" rows="4" class="form-control" placeholder="Justifique a criação ou alteração"></textarea>
									</div>
								</div>
								<div class="col-12">
									<div class="form-group">
										<input type="text" class="form-control" placeholder="Com que frequência o conceito vem ocorrendo na literatura da área?">
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<textarea name="" id="" cols="30" rows="4" class="form-control" placeholder="Cite referências bibliográficas da LILACS e/ou MEDLINE onde o conceito aparece:"></textarea>
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<textarea name="" id="" cols="30" rows="4" class="form-control" placeholder="Indique a localização/posição hierárquica do termo em relação aos demais, dentro da categoria DeCS correspondente:"></textarea>
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<textarea name="" id="" cols="30" rows="4" class="form-control" placeholder="Nota de escopo (definição do termo com fonte, de preferência em português, espanhol e inglês):"></textarea>
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<textarea name="" id="" cols="30" rows="4" class="form-control" placeholder="Observações que considere necessárias:"></textarea>
									</div>
								</div>
							</fieldset>
						</div>
						<div class="col-md-12 text-right">
							<button type="submit" class="btn btn-success">Enviar Sugestão</button>
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