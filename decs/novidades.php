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
	<?php include 'header.php'?>
	<?php include 'nav.php'?>
	<?php include 'barSearch.php'?>
	<div class="titulo1 text-center">
		<h2>Novidades</h2>
	</div>
	
	<section class="padding2">
		<div class="container">
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="index.php">Home</a></li>
					<li class="breadcrumb-item active" aria-current="page">Novidades</li>
				</ol>
			</nav>
			
			<div class="accordion" id="accordionExample">
				<?php for ($i = 2019; $i > 1998 ; $i--) {?>

					<div class="card">
						<div class="card-header" id="headingOne<?= $i ?>">
							<h2 class="mb-0">
								<button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse<?= $i ?>" aria-expanded="true" aria-controls="collapse<?= $i ?>">
									<?= $i ?>
								</button>
							</h2>
						</div>

						<div id="collapse<?= $i ?>" class="collapse <?php echo $i == 2019 ? "show": ""; ?>" aria-labelledby="headingOne<?= $i ?>" data-parent="#accordionExample">
							<div class="card-body">
								<ul>
									<li><a href="">Visão geral</a></li>
									<li><a href="novidadesEstatisticos.php">Dados estatísticos</a></li>
									<li><a href="novidadesNovos.php">Descritores novos</a></li>
									<li><a href="">Descritores alterados</a></li>
									<li><a href="">Descritores eliminados</a></li>
									<li><a href="">Mudanças de código hierárquico DeCS e MeSH</a></li>
									<li><a href="">DeCS alfabético</a></li>
								</ul>
							</div>
						</div>
					</div>
				<?php } ?>
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