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
	<?php include 'topAcessibility.php'?>
	<?php include 'header.php' ?>
	<section class="">
		<div class="container">
			<nav>
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="#">HOME</a></li>
					<li class="breadcrumb-item active" aria-current="page">PESQUISA</li>
				</ol>
			</nav>
			<div class="row padding1" id="main_container">
				<div class="col-md-12 box4">
					<div class="form-group">
						<label for="assunto"><b>Localizar descritor de assunto</b></label>
						<input type="text" id="assunto" class="form-control">
					</div>
					<div class="row">
						<div class="col-md-6">
							<h4 class="title2">HIERARQUIA</h4>
							<ul class="tree">
								<li>
									<a href="">ANATOMIA</a>
									<ul class="tree">
										<li>
											<a href="">Regiões do Corpo</a>
											<ul class="tree">
												<li><a href="">Pontos de Referência Anatômicos 1</a></li>
												<li><a href="">Pontos de Referência Anatômicos 2</a></li>
												<li><a href="">Pontos de Referência Anatômicos 3</a></li>
											</ul>
										</li>
										<li>
											<a href="">Sistema Musculoesquelético</a>
											<ul class="tree">
												<li><a href="">Pontos de Referência Anatômicos</a></li>
												<li><a href="">Pontos de Referência Anatômicos</a></li>
											</ul>
										</li>
										<li><a href="">Sistema Digestório</a></li>
										<li><a href="">Sistema Respiratório</a></li>
									</ul>
								</li>
								<li><a href="">ORGANISMOS</a></li>
								<li><a href="">DOENÇAS</a></li>
								<li><a href="">COMPOSTOS QUÍMICOS E DROGAS</a></li>
								<li><a href="">TÉCNICAS E EQUIPAMENTOS ANALÍTICOS, DIAGNÓSTICOS E TERAPÊUTICOS</a></li>
								<li><a href="">PSIQUIATRIA E PSICOLOGIA</a></li>
								<li><a href="">FENÔMENOS E PROCESSOS</a></li>
								<li><a href="">DISCIPLINAS E OCUPAÇÕES</a></li>
							</ul>
							
						</div>
						<div class="col-md-6">
							<form action="#" id="searchDocsTrigger">
								<label for=""><b>Pontos-Gatilhos / Trigger Points / Puntos Disparadores</b></label>
								<div class="alert alert-secondary" role="alert">
									<p>Pontos discretos em bandas de músculos esticados que produzem dor local e referida quando bandas musculares são comprimidas.</p>
									<b>Sinônimos:</b> <br>
									Pontos Gatilhos <br>
									<b>Categorias:</b> <br>
									A01.947 <br>
									<b>Relacionados:</b> <br>
									Pontos de Acupuntura <br>
								</div>
								Restringir a pesquisa por estes aspec
								<div class="row">
									<div class="col-md-6"><input type="checkbox" id="1"> <label for="1">anamalidades</label></div>
									<div class="col-md-6"><input type="checkbox" id="2"> <label for="2">anatomia & histologia</label></div>
									<div class="col-md-6"><input type="checkbox" id="3"> <label for="3">irrigação sanguínea</label></div>
									<div class="col-md-6"><input type="checkbox" id="4"> <label for="4">diagnóstico por imagem</label></div>
									<div class="col-md-6"><input type="checkbox" id="5"> <label for="5">embriologia</label></div>
									<div class="col-md-6"><input type="checkbox" id="6"> <label for="6">crescimento & desenvolvimento</label></div>
									<div class="col-md-6"><input type="checkbox" id="7"> <label for="7">lesões</label></div>
									<div class="col-md-6"><input type="checkbox" id="8"> <label for="8">inervação</label></div>
									<div class="col-md-6"><input type="checkbox" id="9"> <label for="9">microbiologia</label></div>
									<div class="col-md-6"><input type="checkbox" id="10"> <label for="10">patologia</label></div>
									<div class="col-md-6"><input type="checkbox" id="11"> <label for="11">fisiologia</label></div>
									<div class="col-md-6"><input type="checkbox" id="12"> <label for="12">fisiopatologia</label></div>
									<div class="col-md-6"><input type="checkbox" id="13"> <label for="13">parasitologia</label></div>
									<div class="col-md-6"><input type="checkbox" id="14"> <label for="14">efeitos de radiação</label></div>
									<div class="col-md-6"><input type="checkbox" id="15"> <label for="15">cirurgia</label></div>
									<div class="col-md-6"><input type="checkbox" id="16"> <label for="16">virologia</label></div>
								</div>
								<div class="form-group">
									
									<input type="submit" class="btn btn-block btn-primary" value="Pesquisar documento com este descritor">
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>

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