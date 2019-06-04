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
					<li class="breadcrumb-item active" aria-current="page">Contato</li>
				</ol>
			</nav>

			<h1 class="titleMain">Contato</h1>
			<hr>	
			
			<div class="row">
				<div class="col-md-4">
					Rua Vergueiro, 1759 - 12º -	Vila Mariana<br>
					São Paulo/SP - CEP: 04101-100</p>
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3656.7433070930997!2d-46.64253848487086!3d-23.5776609680799!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce599ac00c2c3b%3A0x557fa8fc75284267!2sRua+Vergueiro%2C+1759+-+Vila+Mariana%2C+S%C3%A3o+Paulo+-+SP%2C+04101-100!5e0!3m2!1spt-BR!2sbr!4v1558988345737!5m2!1spt-BR!2sbr" width="100%" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>
				</div>
				<div class="col-md-8">
					<form action="">
						<div class="row">
							<div class="col-6">
								<div class="form-group">
									<input type="text" class="form-control" placeholder="Seu nome">
								</div>
							</div>
							<div class="col-6">
								<div class="form-group">
									<input type="text" class="form-control" placeholder="Seu e-mail">
								</div>
							</div>
							<div class="col-12">
								<div class="form-group">
									<input type="text" class="form-control" placeholder="Assunto">
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<textarea name="" id="" cols="30" rows="6" class="form-control" placeholder="Mensagem"></textarea>
								</div>
							</div>
							<div class="col-md-6">
								<button type="submit" class="btn btn-success btn-block">Enviar mensagem</button>
							</div>
							<div class="col-md-6">
								
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