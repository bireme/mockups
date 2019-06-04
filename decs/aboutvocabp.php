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
		<h2>Vocabulário Estruturado</h2>
	</div>
	
	<section class="padding2">
		<div class="container">
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="index.php">Home</a></li>
					<li class="breadcrumb-item"><a href="sobre.php">Sobre o DeCS</a></li>
					<li class="breadcrumb-item active" aria-current="page">Vocabulário Estruturado</li>
				</ol>
			</nav>	
			<div class="accordion" id="accordionExample">
				<div class="card">
					<div class="card-header" id="headingOne">
						<h2 class="mb-0">
							<button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
								O que são vocabulários estruturados?
							</button>
						</h2>
					</div>

					<div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
						<div class="card-body">
							Vocabulários estruturados são coleções de termos, organizados segundo uma metodologia na qual é possível especificar as relações entre conceitos com o propósito de facilitar o acesso à informação. Os vocabulários são usados como uma espécie de filtro entre a linguagem utilizada pelo autor e a terminologia da área e também podem ser considerados como assistentes de pesquisa ajudando o usuário a refinar, expandir ou enriquecer suas pesquisas proporcionando resultados mais objetivos.
						</div>
					</div>
				</div>
				<div class="card">
					<div class="card-header" id="headingTwo">
						<h2 class="mb-0">
							<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
								Por que necessitamos usá-los?
							</button>
						</h2>
					</div>
					<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
						<div class="card-body">
							Vocabulários estruturados são necessários para descrever, organizar e prover acesso à informação. O uso de um vocabulário estruturado permite ao pesquisador recuperar a informação com o termo exato utilizado para descrever o conteúdo daquele documento científico. Os vocabulários estruturados funcionam também como mapas que guiam os usuários até a informação. Com a expansão da Internet, e o número de potenciais pontos de acesso à informação crescendo exponencialmente, os vocabulários podem ser úteis provendo termos consistentes que permitam ao usuário selecionar a informação que necessita a partir de uma vasta quantidade de dados.
						</div>
					</div>
				</div>
				<div class="card">
					<div class="card-header" id="headingThree">
						<h2 class="mb-0">
							<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
								Quem os usa?
							</button>
						</h2>
					</div>
					<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
						<div class="card-body">
							Vocabulários estruturados podem ser usados por uma variada gama de usuários como profissionais, incluindo médicos, pesquisadores, estudantes, além de profissionais bibliotecários que os utilizam nos processos de indexação e recuperação de informação.
						</div>
					</div>
				</div>
				<div class="card">
					<div class="card-header" id="headingThree">
						<h2 class="mb-0">
							<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
								Como são usados?
							</button>
						</h2>
					</div>
					<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
						<div class="card-body">
							Vocabulários estruturados são usados para a indexação de documentos, criação de bases de dados, criação de índices de assunto, criação de bases de conhecimento para interfaces de inteligência artificial, como ferramentas auxiliares na recuperação de informação, etc.
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