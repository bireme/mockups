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
					<li class="breadcrumb-item"><a href="consultaAvancada.php">Consulta</a></li>
					<li class="breadcrumb-item active" aria-current="page">Consulta Via Trigrama</li>
				</ol>
			</nav>
			<h1 class="titleMain">Consulta Via Trigrama</h1>
			<div>
				<hr>
				<div class="row">

					<div class="col-md-12">
						<div class="row">
							<div class="col-md-5 form-group">
								<input type="text" class="form-control" placeholder="">
							</div>
							<div class="col-md-5 form-group">
								<select name="" id="" class="form-control">
									<option value="CID10p">CID10 - Classificação Internacional de Doenças</option>
									<option value="DeCSp">DeCS Português</option>
									<option value="DeCSi">DeCS Inglês</option>
									<option value="DeCSe">DeCS Espanhol</option>
									<option value="DeCSs">DeCS Espanha</option>
									<option value="DeCSxp">DeCS Português com escopo</option>
									<option value="DeCSxi">DeCS Inglês com escopo</option>
									<option value="DeCSxe">DeCS Espanhol com escopo</option>
									<option value="DeCSxs">DeCS Espanha com escopo</option>
									<option value="LILACS.org.TiKwAb">LILACS - LILACS Regional</option>
								</select>
							</div>
							<div class="col-md-2 form-group">
								<button class="btn btn-block btn-success">Pesquisar</button>
							</div>
						</div>
					</div>
					<hr>
					<div class="col-md-5 fonte1">
						<div class="trigramaTree">
							<h5>Categorias DeCS</h5>
							[B01] <a href="indices.php">ANATOMIA</a><br>
							[B01.050] <a href="indices.php">Animais</a><br>
							[B01.050.150] <a href="indices.php">Cordados</a><br>
							[B01.050.150.900] <a href="indices.php">Vertebrados</a><br>
							[B01.050.150.900.649] <a href="indices.php">Mamíferos</a><br>
							[B01.050.150.900.649.313] <a href="indices.php">Eutérios</a><br>
							[B01.050.150.900.649.313.984] <a href="indices.php">Perissodáctilos</a><br>
							[B01.050.150.900.649.313.984.235] <a href="indices.php">Equidae</a><br>
							[B01.050.150.900.649.313.988] <a href="indices.php">Primatas</a><br>
							[B01.050.150.900.649.313.988.400] <a href="indices.php">Haplorrinos</a><br>
							[B01.050.150.900.649.313.988.400.112] <a href="indices.php">Catarrinos</a><br>
							[B01.050.150.900.649.313.988.400.112.199] <a href="indices.php">Cercopithecidae</a><br>
							[B01.050.150.900.649.313.988.400.112.199.120] <a href="indices.php">Cercopithecinae</a><br>
							[B01.050.150.900.649.313.988.400.112.199.120.260] <a href="indices.php">Erythrocebus</a><br>
							[B01.050.150.900.649.313.988.400.112.199.120.260.260] <a href="indices.php">Erythrocebus patas</a><br>
							[B01.050.150.900.649.313.988.400.112.199.120.510] <a href="indices.php">Macaca</a><br>
							[B01.050.150.900.649.313.988.400.112.199.120.510.550] <a href="indices.php">Macaca mulatta</a><br>
							[B01.650] <a href="indices.php">Plantas</a><br>
							[B01.650.940] <a href="indices.php">Viridiplantae</a><br>
							[B01.650.940.800] <a href="indices.php">Estreptófitas</a><br>
							[B01.650.940.800.575] <a href="indices.php">Embriófitas</a><br>
							[B01.650.940.800.575.912] <a href="indices.php">Traqueófitas</a><br>
							[B01.650.940.800.575.912.250] <a href="indices.php">Magnoliopsida</a><br>
							[B01.650.940.800.575.912.250.157] <a href="indices.php">Brassicaceae</a><br>
							[B01.650.940.800.575.912.250.157.600] <a href="indices.php">Lepidium</a><br>
							[D12] <a href="indices.php">Aminoácidos, Peptídeos e Proteínas</a><br>
							[D12.776] <a href="indices.php">Proteínas</a><br>
							[D12.776.395] <a href="indices.php">Glicoproteínas</a><br>
							[D12.776.395.550] <a href="indices.php">Glicoproteínas de Membrana</a><br>
							[D12.776.395.550.448] <a href="indices.php">Proteínas Ligadas por GPI</a><br>
							[D12.776.395.550.448.140] <a href="indices.php">Antígenos CD59</a><br>
							[D12.776.543] <a href="indices.php">Proteínas de Membrana</a><br>
							[D12.776.543.484] <a href="indices.php">Proteínas Ligadas a Lipídeos</a><br>
							[D12.776.543.484.500] <a href="indices.php">Proteínas Ligadas por GPI</a><br>
							[D12.776.543.484.500.140] <a href="indices.php">Antígenos CD59</a><br>
							[D12.776.543.550 ] <a href="indices.php">Glicoproteínas de Membrana</a><br>
							[D12.776.543.550.418] <a href="indices.php">Proteínas Ligadas por GPI</a><br>
							[D12.776.543.550.418.140] <a href="indices.php">Antígenos CD59</a><br>
							[Z01] <a href="indices.php">Localizações Geográficas</a><br>
							[Z01.252] <a href="indices.php">Ásia 946</a><br>
							[Z01.252.474] <a href="indices.php">Extremo Oriente</a><br>
							[Z01.252.474.164] <a href="indices.php">China</a><br>
							[Z01.252.474.164.675] <a href="indices.php">Macau</a><br>
							[Z01.639] <a href="indices.php">Ilhas</a><br>
							[Z01.639.610] <a href="indices.php">Macau</a><br>
						</div>
					</div>
					<div class="col-md-7">
						<table class="table table-bordered table-sm table-striped fonte1">
							<thead>
								<th>Termos - Sinônimos e Históricos</th>
								<th width="120px">Documentos <br>LILACS e MDL</th>
							</thead>
							<tbody>
								<?php for( $i=0; $i<6; $i++ ){ ?>
									<tr>
										<td>
											<a href="indices.php">Macaca mulatta</a> <br>
											Macaco Rhesus <a href=""><i class="fas fa-external-link-alt"></i></a> <br>
											Macaco Reso <a href=""><i class="fas fa-external-link-alt"></i></a> <br>
											Macaco-de-Bengala <a href=""><i class="fas fa-external-link-alt"></i></a> <br>
											Espécie do gênero MACACA que habita a Índia, China e outras partes da Ásia. A espécie é utilizada extensamente em pesquisa biomédica e se adapta bem a viver com humanos <a href=""><i class="fas fa-external-link-alt"></i></a> <br>
											1.00
										</td>
										<td class="text-center" style="vertical-align: middle;">
											<a href="">65</a> |	<a href="">36970</a>
										</td>
									</tr>
								<?php } ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</section>
	<?php include 'footer.php' ?>
	<script src="js/jquery-3.4.1.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/main.js"></script>
</body>
</html>