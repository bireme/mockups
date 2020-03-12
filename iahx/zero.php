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
	<link rel="stylesheet" href="css/acessibilidade.css">
	<link rel="stylesheet" href="css/feedback.css">
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="css/sidebar.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,900" rel="stylesheet">
</head>
<body>
	<?php include 'topAcessibility.php'?>
	<?php include 'sidebar.php'?>
	<?php include 'header.php' ?>
	<section class="">
		<div class="container">
			<div class="row">
				<div class="col-12 d-print-none" id="main_container">
					<div class="row padding1">
						<div class="col-12">
							<div class="alert alert-light" role="alert">
								<h5 class="text-center">
									Temos um total de <b>30.092.794</b> documentos, <a href="">para visualizar todos clique aqui</a> ou você pode selecionar os filtros abaixo.
								</h5>
							</div>
						</div>
						
						<!-- Idiomas -->
						<div class="col-md-6 col-lg-3">
							<div class="box5">
								<div class="titleBox3">
									Idiomas
								</div>
								<div class="row overflow1">
									<div class="boxCheck col-md-12">
										<div class="inputCheck1"><input type="checkbox" id="a1"></div>
										<label class="labelCheck1 labelCheck2" for="a1">Inglês (24872115)</label>
									</div>
									<div class="boxCheck col-md-12">
										<div class="inputCheck1"><input type="checkbox" id="a2"></div>
										<label class="labelCheck1 labelCheck2" for="a2">Espanhol (1152850)</label>
									</div>
									<div class="boxCheck col-md-12">
										<div class="inputCheck1"><input type="checkbox" id="a3"></div>
										<label class="labelCheck1 labelCheck2" for="a3">Alemão (684118)</label>
									</div>
									<div class="boxCheck col-md-12">
										<div class="inputCheck1"><input type="checkbox" id="a4"></div>
										<label class="labelCheck1 labelCheck2" for="a4">Português (659137)</label>
									</div>
									<div class="boxCheck col-md-12">
										<div class="inputCheck1"><input type="checkbox" id="a5"></div>
										<label class="labelCheck1 labelCheck2" for="a5">Francês (631061)</label>
									</div>
									<div class="boxCheck col-md-12">
										<div class="inputCheck1"><input type="checkbox" id="a6"></div>
										<label class="labelCheck1 labelCheck2" for="a6">Russo (612818)</label>
									</div>
									<div class="boxCheck col-md-12">
										<div class="inputCheck1"><input type="checkbox" id="a7"></div>
										<label class="labelCheck1 labelCheck2" for="a7">Japonês (405217)</label>
									</div>
									<div class="boxCheck col-md-12">
										<div class="inputCheck1"><input type="checkbox" id="a8"></div>
										<label class="labelCheck1 labelCheck2" for="a8">Chinês (328731)</label>
									</div>
									<div class="boxCheck col-md-12">
										<div class="inputCheck1"><input type="checkbox" id="a9"></div>
										<label class="labelCheck1 labelCheck2" for="a9">Italiano (194893)</label>
									</div>
									<div class="boxCheck col-md-12">
										<div class="inputCheck1"><input type="checkbox" id="a10"></div>
										<label class="labelCheck1 labelCheck2" for="a10">Polonês (146760)</label>
									</div>
								</div>
								<hr>
								<div class="labelCheck1">
									<strong><a href="">Mostrar mais...</a></strong>
								</div>
							</div>
						</div>

						<!-- Assunto Principal -->
						<div class="col-md-6 col-lg-3">
							<div class="box5">
								<div class="titleBox3">
									Assunto principal
								</div>
								<div class="row overflow1">
									<?php for ($i=0; $i < 3; $i++) { ?>
										<div class="boxCheck col-md-12">
											<div class="inputCheck1"><input type="checkbox" id="b1"></div>
											<label class="labelCheck1 labelCheck2" for="b1">Encéfalo (278709)</label>
										</div>
										<div class="boxCheck col-md-12">
											<div class="inputCheck1"><input type="checkbox" id="b2"></div>
											<label class="labelCheck1 labelCheck2" for="b2">Neoplasias (262782)</label>
										</div>
										<div class="boxCheck col-md-12">
											<div class="inputCheck1"><input type="checkbox" id="b3"></div>
											<label class="labelCheck1 labelCheck2" for="b3">Neoplasias da Mama (237211)</label>
										</div>
										<div class="boxCheck col-md-12">
											<div class="inputCheck1"><input type="checkbox" id="b4"></div>
											<label class="labelCheck1 labelCheck2" for="b4">Fígado (198513)</label>
										</div>
										<div class="boxCheck col-md-12">
											<div class="inputCheck1"><input type="checkbox" id="b5"></div>
											<label class="labelCheck1 labelCheck2" for="b5">Antineoplásicos (189053)</label>
										</div>
										<div class="boxCheck col-md-12">
											<div class="inputCheck1"><input type="checkbox" id="b6"></div>
											<label class="labelCheck1 labelCheck2" for="b6">Antibacterianos (186735)</label>
										</div>
										<div class="boxCheck col-md-12">
											<div class="inputCheck1"><input type="checkbox" id="b7"></div>
											<label class="labelCheck1 labelCheck2" for="b7">Infecções por HIV (169137)</label>
										</div>
										<div class="boxCheck col-md-12">
											<div class="inputCheck1"><input type="checkbox" id="b8"></div>
											<label class="labelCheck1 labelCheck2" for="b8">Hipertensão (164479)</label>
										</div>
										<div class="boxCheck col-md-12">
											<div class="inputCheck1"><input type="checkbox" id="b9"></div>
											<label class="labelCheck1 labelCheck2" for="b9">Neoplasias Pulmonares (160934)</label>
										</div>
										<div class="boxCheck col-md-12">
											<div class="inputCheck1"><input type="checkbox" id="b10"></div>
											<label class="labelCheck1 labelCheck2" for="b10">Neurônios (155383)</label>
										</div>
									<?php } ?>
								</div>
								<hr>
								<div class="labelCheck1">
									<strong><a href="">Mostrar mais...</a></strong>
								</div>
							</div>
						</div>

						<!-- Bases de Dados -->
						<div class="col-md-6 col-lg-3">
							<div class="box5">
								<div class="titleBox3">
									Bases de Dados
								</div>
								<div class="row overflow1">
									<div class="boxCheck col-md-12">
										<div class="inputCheck1"><input type="checkbox" id="c1"></div>
										<label class="labelCheck1 labelCheck2" for="c1">MEDLINE (28164548)</label>
									</div>
									<div class="boxCheck col-md-12">
										<div class="inputCheck1"><input type="checkbox" id="c2"></div>
										<label class="labelCheck1 labelCheck2" for="c2">LILACS (898932)</label>
									</div>
									<div class="boxCheck col-md-12">
										<div class="inputCheck1"><input type="checkbox" id="c3"></div>
										<label class="labelCheck1 labelCheck2" for="c3">IBECS (187068)</label>
									</div>
									<div class="boxCheck col-md-12">
										<div class="inputCheck1"><input type="checkbox" id="c4"></div>
										<label class="labelCheck1 labelCheck2" for="c4">WHO IRIS (167892)</label>
									</div>
									<div class="boxCheck col-md-12">
										<div class="inputCheck1"><input type="checkbox" id="c5"></div>
										<label class="labelCheck1 labelCheck2" for="c5">BINACIS (142716)</label>
									</div>
									<div class="boxCheck col-md-12">
										<div class="inputCheck1"><input type="checkbox" id="c6"></div>
										<label class="labelCheck1 labelCheck2" for="c6">CUMED (70844)</label>
									</div>
									<div class="boxCheck col-md-12">
										<div class="inputCheck1"><input type="checkbox" id="c7"></div>
										<label class="labelCheck1 labelCheck2" for="c7">Index Psicologia - Periódicos técnico-científicos (59235)</label>
									</div>
									<div class="boxCheck col-md-12">
										<div class="inputCheck1"><input type="checkbox" id="c8"></div>
										<label class="labelCheck1 labelCheck2" for="c8">PAHO (56432)</label>
									</div>
									<div class="boxCheck col-md-12">
										<div class="inputCheck1"><input type="checkbox" id="c9"></div>
										<label class="labelCheck1 labelCheck2" for="c9">BBO - Odontologia (47975)</label>
									</div>
									<div class="boxCheck col-md-12">
										<div class="inputCheck1"><input type="checkbox" id="c10"></div>
										<label class="labelCheck1 labelCheck2" for="c10">PAHO-IRIS (47571)</label>
									</div>
								</div>
								<hr>
								<div class="labelCheck1">
									<strong><a href="">Mostrar mais...</a></strong>
								</div>
							</div>
						</div>

						<!-- Tipo de estudo  -->
						<div class="col-md-6 col-lg-3">
							<div class="box5">
								<div class="titleBox3">
									Tipo de estudo
								</div>
								<div class="row overflow1">
									<div class="boxCheck col-md-12">
										<div class="inputCheck1"><input type="checkbox" id="d1"></div>
										<label class="labelCheck1 labelCheck2" for="d1">Relato de casos (2147883)</label>
									</div>
									<div class="boxCheck col-md-12">
										<div class="inputCheck1"><input type="checkbox" id="d2"></div>
										<label class="labelCheck1 labelCheck2" for="d2">Avaliação econômica em saúde (894721)</label>
									</div>
									<div class="boxCheck col-md-12">
										<div class="inputCheck1"><input type="checkbox" id="d3"></div>
										<label class="labelCheck1 labelCheck2" for="d3">Guia de prática clínica (471753)</label>
									</div>
									<div class="boxCheck col-md-12">
										<div class="inputCheck1"><input type="checkbox" id="d4"></div>
										<label class="labelCheck1 labelCheck2" for="d4">Estudo de casos e controles (286238)</label>
									</div>
									<div class="boxCheck col-md-12">
										<div class="inputCheck1"><input type="checkbox" id="d5"></div>
										<label class="labelCheck1 labelCheck2" for="d5">Revisão sistemática (272286)</label>
									</div>
									<div class="boxCheck col-md-12">
										<div class="inputCheck1"><input type="checkbox" id="d6"></div>
										<label class="labelCheck1 labelCheck2" for="d6">Estudo de coorte (259237)</label>
									</div>
									<div class="boxCheck col-md-12">
										<div class="inputCheck1"><input type="checkbox" id="d7"></div>
										<label class="labelCheck1 labelCheck2" for="d7">Ensaio clínico controlado (21606)</label>
									</div>
								</div>
								<hr>
								<div class="labelCheck1">
									<strong><a href="">Mostrar mais...</a></strong>
								</div>
							</div>
						</div>

						<!-- Tipo de estudo -->
						<div class="col-md-6">
							<div class="box5">
								<div class="titleBox3">
									Intervalo de ano de publicação
								</div>
								<div class="row overflow2">
									<div class="boxCheck col-md-6 col-lg-4">
										<div class="inputCheck1"><input type="radio" id="five" name="years"></div>
										<label class="labelCheck1" for="five">Last 5 years</label>
									</div>
									<div class="boxCheck col-md-6 col-lg-4">
										<div class="inputCheck1"><input type="radio" id="ten" name="years"></div>
										<label class="labelCheck1" for="ten">Last 10 years</label>
									</div>
									<div class="boxCheck col-md-12">
										<div class="form-row">
											<div class="col-6 col-lg-2">
												<input id="range_year_start" class="form-control" type="text" name="range_year_start" value="" placeholder="YYYY">
											</div>
											<div class="col-6 col-lg-2">
												<input id="range_year_end" class="form-control" type="text" name="range_year_end" value="" placeholder="YYYY">
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<!-- Texto Completo -->
						<div class="col-md-6">
							<div class="box5">
								<div class="titleBox3">
									Texto Completo
								</div>
								<div class="row overflow2">
									<div class="boxCheck col-md-12">
										<div class="inputCheck1"><input type="checkbox" id="e1"></div>
										<label class="labelCheck1" for="e1">Texto completo (11765003)</label>
									</div>

								</div>
							</div>
						</div>
						<div class="col-md-12 text-center">
							<br>
							<button class="btn btn-primary btnBlue">FILTRAR</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<?php include 'footer.php' ?>
	<?php include 'feedback.php' ?>
	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/cookie.js"></script>
	<script src="js/accessibility.js"></script>
	<script src="js/main.js"></script>
	<script src="js/sidebar.js"></script>
</body>
</html>