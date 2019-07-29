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
				<?php for ($i=0; $i < 5; $i++) { ?>
				<div style="border-bottom: 1px solid #ddd; padding: 10px 0;">
					<small class="badge badgeWarning">En</small>
					<a href="indices.php"> Dengue Vaccines</a> | 
					<small class="badge badgeWarning">Es</small> 
					<a href="indices.php">Vacunas contra el Dengue</a> | 
					<small class="badge badgeWarning">Pt</small>
					<a href="indices.php">Vacinas contra Dengue</a> | 
					<small class="badge badgeWarning">Fr</small> 
					<a href="indices.php">Vaccins Dengue</a> 
					<span class="badge badge-info">Termo</span>
				</div>
				<!-- Exemplo2 -->
				<div style="border-bottom: 1px solid #ddd; padding: 10px 0;">
					<small class="badge badgeWarning">En</small>
					<a href="indices.php">Dengue</a> | 
					<small class="badge badgeWarning">Es</small>
					<a href="indices.php">Dengue</a> | 
					<small class="badge badgeWarning">Pt</small>
					<a href="indices.php">Dengue</a> | 
					<small class="badge badgeWarning">Fr</small>
					<a href="indices.php">Dengue</a> 
					<span class="badge badge-info">Termo</span>
				</div>
				<!-- Exemplo3 -->
				<div style="border-bottom: 1px solid #ddd; padding: 10px 0;">
					<small class="badge badgeWarning">En</small>
					<a href="indices.php">Dengue Virus</a> | 
					<small class="badge badgeWarning">Es</small>
					<a href="indices.php">Virus del dengue</a> | 
					<small class="badge badgeWarning">Pt</small>
					<a href="indices.php">Vírus da Dengue</a> | 
					<small class="badge badgeWarning">Fr</small>
					<a href="indices.php">Virus de la dengue</a> 
					<span class="badge badge-info">Descritor</span>
				</div>

				<?php } ?>
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