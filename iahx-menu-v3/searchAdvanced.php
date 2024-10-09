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
					<li class="breadcrumb-item active" aria-current="page">BUSCA AVANÇADA</li>
				</ol>
			</nav>
			<div class="row padding1" id="main_container">
				<div class="col-md-12 box4">
					<h4 class="title2">BUSCA AVANÇADA</h4> <br>
					<form action="#">
						<b class="title2">ASSUNTO</b><br>
						<textarea name="assunto" id="assunto" class="form-control formControl marginB2">(instance:"regional") AND ( year_cluster:("2002") AND pais_afiliacao:("^iUnited States^eEstados"))</textarea> 

						<div class="marginB2">
							<b>Use o formulário abaixo para construir sua expressão de busca</b>
						</div>

						<div class="row marginB1">
							<div class="col-md-2">
							</div>
							<div class="col-md-6">
								<input type="text" class="form-control formControl marginMC1">
							</div>
							<div class="col-md-2">
								<select name="todos" id="todos" class="form-control formControl marginMC1">
									<option value="Todos">Todos</option>
								</select>
							</div>
							<div class="col-md-2">
								
							</div>
						</div>
						<div class="row marginB1 marginMC1 marginB2">
							<div class="col-md-2">
								<select name="" id="" class="form-control formControl marginMC1">
									<option value="Todos">AND</option>
									<option value="Todos">OR</option>
									<option value="Todos">AND NOT</option>
								</select>
							</div>
							<div class="col-md-6">
								<input type="text" class="form-control formControl marginMC1">
							</div>
							<div class="col-md-2">
								<select name="" id="" class="form-control formControl marginMC1">
									<option value="Todos">Todos</option>
								</select>
							</div>
							<div class="col-md-2">
								<input type="submit" class="btnBlue marginMC1" value="BUSCAR">
							</div>
						</div>

						<div class="row padding1 marginB2">
							<div class="col-md-6">
								<b class="title2">DATA DE PUBLICAÇÃO</b><br>
								<input type="number" class="formControl marginMC1" height="3" value="<?php echo date('Y')-49; ?>"> à 
								<input type="number" class="formControl marginMC1" max="<?php echo date('Y'); ?>" value="<?php echo date('Y'); ?>">
							</div>
							<div class="col-md-6">
								<b class="title2">TEXTO COMPLETO</b><br>
								<input type="checkbox" id="gratuito"> <label for="gratuito">Gratuito</label> &nbsp;
								<input type="checkbox" id="disponivel"> <label for="disponivel">Disponível</label>
							</div>
						</div>
						
						<div class="row">
							<div class="col-md-7 marginB2 formAdvance">
								<b class="title2">BASE DE DADOS</b>
								<div class="row">
									<div class="col-md-3">
										<b>Nacionais:</b>
										<div>
											<input type="checkbox" id="1">
											<label for="1">IBCS</label>	
										</div>

										<div>
											<input type="checkbox" id="2">
											<label for="2">BINACIS</label>
										</div>

										<div>
											<input type="checkbox" id="3">
											<label for="3">CUMED</label>
										</div>

										<div>
											<input type="checkbox" id="4">
											<label for="4">LIPECS</label>
										</div>

										<div>
											<input type="checkbox" id="5">
											<label for="5">Coleciona SUS</label>
										</div>
										<div>
											<input type="checkbox" id="6">
											<label for="6">Porto Rico</label>
										</div>
									</div>




									<div class="col-md-3 marginB2 formAdvance">
										<b>Internacionais:</b>

										<div>
											<input type="checkbox" id="1b">
											<label for="1b">MEDLINE</label>	
										</div>

										<div>
											<input type="checkbox" id="2b">
											<label for="2b">LILACS</label>
										</div>
										
										<div>
											<input type="checkbox" id="3b">
											<label for="3b">PAHO-IRIS</label>
										</div>
										
										<div>
											<input type="checkbox" id="4b">
											<label for="4b">WHO IRIS</label>
										</div>
									</div>



									<div class="col-md-6 marginB2 formAdvance">
										<b>Tematicas:</b>
										<div>
											<input type="checkbox" id="1c">
											<label for="1c">Index Psicologia - Periódicos técnicos-científicos</label>	
										</div>

										<div>
											<input type="checkbox" id="2c">
											<label for="2c">BBO - Odontologia</label>
										</div>
										
										<div>
											<input type="checkbox" id="3c">
											<label for="3c">BDENF - Enfermagem</label>
										</div>
										
										<div>
											<input type="checkbox" id="4c">
											<label for="4c">LIS - Localizador de Informação em Saúde</label>
										</div>

										<div>
											<input type="checkbox" id="5c">
											<label for="5c">Hanseníase</label>
										</div>
										<div>
											<input type="checkbox" id="6c">
											<label for="6c">Sec. Est. Saúde SP</label>
										</div>
										<div>
											<input type="checkbox" id="7c">
											<label for="7c">Desastres</label>
										</div>
										<div>
											<input type="checkbox" id="8c">
											<label for="8c">MedCarib</label>
										</div>
										<div>
											<input type="checkbox" id="9c">
											<label for="9c">CVSP - Brasil</label>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-5 marginB2 formAdvance">
								<b class="title2">TIPO DE DOCUMENTOS</b>
								<div class="row">
									<div class="col-md-6">
										<div>
											<input type="checkbox" id="1d">
											<label for="1d">Artigo</label>	
										</div>

										<div>
											<input type="checkbox" id="2d">
											<label for="2d">Monografia</label>
										</div>
										
										<div>
											<input type="checkbox" id="3d">
											<label for="3d">Tese</label>
										</div>
										
										<div>
											<input type="checkbox" id="4d">
											<label for="4d">Congressos e conferência</label>
										</div>

										<div>
											<input type="checkbox" id="5d">
											<label for="5d">Não convencional</label>
										</div>
										<div>
											<input type="checkbox" id="6d">
											<label for="6d">Terminologia</label>
										</div>
									</div>
									<div class="col-md-6">
										<div>
											<input type="checkbox" id="1e">
											<label for="1e">Documento de projeto</label>	
										</div>

										<div>
											<input type="checkbox" id="2e">
											<label for="2e">Recurso educacional aberto</label>
										</div>
										
										<div>
											<input type="checkbox" id="3e">
											<label for="3e">Pergunta e resposta</label>
										</div>
										
										<div>
											<input type="checkbox" id="4e">
											<label for="4e">Áudio</label>
										</div>

										<div>
											<input type="checkbox" id="5e">
											<label for="5e">News</label>
										</div>
										<div>
											<input type="checkbox" id="6e">
											<label for="6e">Vídeo</label>
										</div>
									</div>
								</div>
							</div>



							<div class="col-md-12 marginB2 formAdvance">
								<b class="title2">IDIOMA</b>
								<div class="row">
									<div class="col-md-2">
										<div>
											<input type="checkbox" id="I1">
											<label for="I1">Inglês</label>	
										</div>

										<div>
											<input type="checkbox" id="I2">
											<label for="I2">Espanhol</label>
										</div>
										
										<div>
											<input type="checkbox" id="I3">
											<label for="I3">Francês</label>
										</div>
										
										<div>
											<input type="checkbox" id="I4">
											<label for="I4">Chinês</label>
										</div>

										<div>
											<input type="checkbox" id="I5">
											<label for="I5">Alemão</label>
										</div>

									</div>
									<div class="col-md-2">
										<div>
											<input type="checkbox" id="Ib1">
											<label for="Ib1">Italiano</label>	
										</div>

										<div>
											<input type="checkbox" id="Ib2">
											<label for="Ib2">Norueguês</label>
										</div>
										
										<div>
											<input type="checkbox" id="Ib3">
											<label for="Ib3">Turco</label>
										</div>
										
										<div>
											<input type="checkbox" id="Ib4">
											<label for="Ib4">Sueco</label>
										</div>

										<div>
											<input type="checkbox" id="Ib5">
											<label for="Ib5">Holandês</label>
										</div>
										<div>
											<input type="checkbox" id="Ib6">
											<label for="Ib6">Árabe</label>
										</div>
									</div>
									<div class="col-md-2">
										<div>
											<input type="checkbox" id="Ic1">
											<label for="Ic1">Techo</label>	
										</div>

										<div>
											<input type="checkbox" id="Ic2">
											<label for="Ic2">Hebraico</label>
										</div>
										
										<div>
											<input type="checkbox" id="Ic3">
											<label for="Ic3">Indonesio</label>
										</div>
										
										<div>
											<input type="checkbox" id="Ic4">
											<label for="Ic4">Catalão</label>
										</div>

										<div>
											<input type="checkbox" id="Ic5">
											<label for="Ic5">Servo-Croata (Latino)</label>
										</div>
										<div>
											<input type="checkbox" id="Ic6">
											<label for="Ic6">Húngaro</label>
										</div>
									</div>
									<div class="col-md-2">
										<div>
											<input type="checkbox" id="Id1">
											<label for="Id1">Polonês</label>	
										</div>

										<div>
											<input type="checkbox" id="Id2">
											<label for="Id2">Dinamarquês</label>
										</div>
										
										<div>
											<input type="checkbox" id="Id3">
											<label for="Id3">Russo</label>
										</div>
										
										<div>
											<input type="checkbox" id="Id4">
											<label for="Id4">Japonês</label>
										</div>

										<div>
											<input type="checkbox" id="Id5">
											<label for="Id5">Finlandês</label>
										</div>
										<div>
											<input type="checkbox" id="Id6">
											<label for="Id6">Coreano</label>
										</div>
									</div>
								</div>
							</div>
						</div>
						<input type="submit" value="BUSCAR" class="btnFilter">
					</form>
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