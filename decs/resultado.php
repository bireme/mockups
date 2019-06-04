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
	<section class="padding1">
		<div class="container">
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="index.php">Home</a></li>
					<li class="breadcrumb-item active" aria-current="page">Resultado</li>
				</ol>
			</nav>


			<div class="btn-group float-right">
				<button id="btnLista" class="btn btn-success" disabled="">Lista</button>				
				<button id="btnHierarquico" class="btn btn-success">Hierárquico</button>				
			</div>
			<h3 class="titleMain">Pesquisa sobre. Degue</h3>
			<div id="lista">
				<!-- Inicio Loop -->
				<div style="border-bottom: 1px solid #ddd; padding: 10px 0;">
					<a href="indices.php">Dengue Virus | Virus del Dengue | Vírus da Dengue </a><span class="badge badge-info">Termo</span>
				</div>
				<div style="border-bottom: 1px solid #ddd; padding: 10px 0;">
					<a href="indices.php">Dengue | Dengue  | Dengue  | Dengue </a> <span class="badge badge-info">Descritor</span>
				</div>
				<div style="border-bottom: 1px solid #ddd; padding: 10px 0;">
					<a href=indices.php"">Severe Dengue | Dengue Grave | Dengue Grave </a> <span class="badge badge-info">Descritor</span>
				</div>
				<div style="border-bottom: 1px solid #ddd; padding: 10px 0;">
					<a href="indices.php">Dengue Vaccines |	Vacunas contra el Dengue | Vacinas contra Dengue </a><span class="badge badge-info">Termo</span>
				</div>
				<div style="border-bottom: 1px solid #ddd; padding: 10px 0;">
					<a href="indices.php">1,2-epoxy-3,4-dihydroxy-1,2,3,4-tetrahydrobenzo(c)phenanthrene </a> <span class="badge badge-info">Descritor</span>
				</div>
				<div style="border-bottom: 1px solid #ddd; padding: 10px 0;">
					<a href="indices.php">1,8-dinitropyrene</a> <span class="badge badge-info">Descritor</span>
				</div>
				<div style="border-bottom: 1px solid #ddd; padding: 10px 0;">
					<a href="indices.php">(4-(m-Chlorophenylcarbamoyloxy)-2-butynyl)trimethylammonium Chloride</a><span class="badge badge-info">Termo</span>
				</div>
				<div style="border-bottom: 1px solid #ddd; padding: 10px 0;">
					<a href="indices.php">1,2-diamino-4-nitrobenzene </a> <span class="badge badge-info">Descritor</span>
				</div>
				<div style="border-bottom: 1px solid #ddd; padding: 10px 0;">
					<a href=indices.php"">1,8-dinitropyrene</a> <span class="badge badge-info">Descritor</span>
				</div>
				<div style="border-bottom: 1px solid #ddd; padding: 10px 0;">
					<a href="indices.php">1,4-phenylenebis(methylene)selenocyanate</a><span class="badge badge-info">Termo</span>
				</div>
				<div style="border-bottom: 1px solid #ddd; padding: 10px 0;">
					<a href="indices.php">1,2-epoxy-3,4-dihydroxy-1,2,3,4-tetrahydrobenzo(c)phenanthrene </a> <span class="badge badge-info">Descritor</span>
				</div>
				<div style="border-bottom: 1px solid #ddd; padding: 10px 0;">
					<a href="indices.php">1,8-dinitropyrene</a> <span class="badge badge-info">Descritor</span>
				</div>
			</div>
			<!-- Final Loop -->

			<div id="hierarquico">
				<ul class="tree">
					<li><a href="indices.php"><i class="fas fa-minus-circle"></i> DOENÇAS</a>
						<ul class="tree" id="1">
							<li><a href=""><i class="fas fa-minus-circle"></i> Víroses</a>
								<ul class="tree">
									<li><a href=""><i class="fas fa-minus-circle"></i> Infecções por Arbovirus</a></li>
										<ul class="tree">
											<li><a href=""><i class="fas fa-plus-circle"></i> Doença Equina Africanas</a></li>
											<li><a href=""><i class="fas fa-plus-circle"></i> Bluetongue</a></li>
											<li><a href=""><i class="fas fa-minus-circle"></i> <b>Dengue</b></a>
												<ul class="tree">
													<li><a href=""><i class="far fa-circle"></i> Doença Equina Africanas</a></li>
												</ul>
											</li>
										</ul>
									</li>
									<li><a href=""><i class="fas fa-plus-circle"></i> Encefalite por Arbovirus</a></li>
									<li><a href=""><i class="fas fa-plus-circle"></i> Encefalomielite Equina</a></li>
									<li><a href=""><i class="far fa-circle"></i> Febre por Flebótomos</a></li>
									<li><a href=""><i class="far fa-circle"></i> Febre do Vale de Rift</a></li>
									<li><a href=""><i class="fas fa-plus-circle"></i> Doenças Transmitidas por Carrapatos</a></li>
									<li><a href=""><i class="far fa-circle"></i> Febre Amarela</a></li>
									<li><a href=""><i class="far fa-circle"></i> Infecção pelo Zika virus</a></li>
								</ul>
							</li>
						</ul>
					</li>
				</ul>
				<hr>

				<ul class="tree">
					<li><a href="indices.php"><i class="fas fa-minus-circle"></i> SAÚDE PÚBLICA</a>
						<ul class="tree" id="1">
							<li><a href=""><i class="fas fa-minus-circle"></i> Saúde Ambiental</a>
								<ul class="tree">
									<li><a href=""><i class="fas fa-minus-circle"></i> Saúde</a></li>
										<ul class="tree">
											<li><a href=""><i class="fas fa-plus-circle"></i> Doença Equina Africanas</a></li>
											<li><a href=""><i class="fas fa-plus-circle"></i> Bluetongue</a></li>
											<li><a href=""><i class="fas fa-minus-circle"></i> <b>Dengue</b></a>
												<ul class="tree">
													<li><a href=""><i class="far fa-circle"></i> Doença Equina Africanas</a></li>
												</ul>
											</li>
										</ul>
									</li>
									<li><a href=""><i class="fas fa-plus-circle"></i> Encefalite por Arbovirus</a></li>
									<li><a href=""><i class="fas fa-plus-circle"></i> Encefalomielite Equina</a></li>
									<li><a href=""><i class="far fa-circle"></i> Febre por Flebótomos</a></li>
									<li><a href=""><i class="far fa-circle"></i> Febre do Vale de Rift</a></li>
									<li><a href=""><i class="fas fa-plus-circle"></i> Doenças Transmitidas por Carrapatos</a></li>
									<li><a href=""><i class="far fa-circle"></i> Febre Amarela</a></li>
									<li><a href=""><i class="far fa-circle"></i> Infecção pelo Zika virus</a></li>
								</ul>
							</li>
						</ul>
					</li>
				</ul>
				<hr>

				<ul class="tree">
					<li><a href="indices.php"><i class="fas fa-minus-circle"></i> DOENÇAS</a>
						<ul class="tree" id="1">
							<li><a href=""><i class="fas fa-minus-circle"></i> Víroses</a>
								<ul class="tree">
									<li><a href=""><i class="fas fa-minus-circle"></i> Infecções por Arbovirus</a></li>
										<ul class="tree">
											<li><a href=""><i class="fas fa-plus-circle"></i> Doença Equina Africanas</a></li>
											<li><a href=""><i class="fas fa-plus-circle"></i> Bluetongue</a></li>
											<li><a href=""><i class="fas fa-minus-circle"></i> <b>Dengue</b></a>
												<ul class="tree">
													<li><a href=""><i class="far fa-circle"></i> Doença Equina Africanas</a></li>
												</ul>
											</li>
										</ul>
									</li>
									<li><a href=""><i class="fas fa-plus-circle"></i> Encefalite por Arbovirus</a></li>
									<li><a href=""><i class="fas fa-plus-circle"></i> Encefalomielite Equina</a></li>
									<li><a href=""><i class="far fa-circle"></i> Febre por Flebótomos</a></li>
									<li><a href=""><i class="far fa-circle"></i> Febre do Vale de Rift</a></li>
									<li><a href=""><i class="fas fa-plus-circle"></i> Doenças Transmitidas por Carrapatos</a></li>
									<li><a href=""><i class="far fa-circle"></i> Febre Amarela</a></li>
									<li><a href=""><i class="far fa-circle"></i> Infecção pelo Zika virus</a></li>
								</ul>
							</li>
						</ul>
					</li>
				</ul>
				<hr>
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