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

			<h3 class="titleMain">Pesquisa sobre. Degue</h3>
			
			<?php for ($i = 0; $i <5 ; $i++) {?>
			<!-- Incio Loop -->
			<div class="card border-light">
				<div class="card-header">
					<b><?=1+$i;?> / 5 </b>
					<span class="float-right">
						<div class="btn-group">
							<a href="" class="btn btn-sm btn-success"><i class="fas fa-angle-double-up"></i></a>
							<a href="" class="btn btn-sm btn-success"><i class="fas fa-angle-up"></i></a>
							<a href="" class="btn btn-sm btn-success"><i class="fas fa-angle-down"></i></a>
							<a href="" class="btn btn-sm btn-success"><i class="fas fa-angle-double-down"></i></a>
						</div>
					</div>
					<div class="card-body" style="font-size: 12px;">
						<table class="table table-bordered table-sm" align="center">
							<tbody>
								<tr>
									<td valign="top" align="right" colspan="2" width="15%">Descritor <em>Inglês</em>:</td>
									<td width="1"></td>
									<td valign="top" align="left" width="85%"><b>Dengue</b>
									</td>
								</tr>
								<tr>
									<td valign="top" align="right" colspan="2" width="15%">Descritor <em>Espanhol</em>:</td>
									<td width="1"></td>
									<td valign="top" align="left" width="85%"><b>Dengue</b></td>
								</tr>
								<tr>
									<td valign="top" align="right" colspan="2" width="15%">Descritor <em>Português</em>:</td>
									<td width="1"></td>
									<td valign="top" align="left" width="85%"><b>Dengue</b></td>
								</tr>
								<tr>
									<td valign="top" align="right" colspan="2" width="15%">Sinônimos <em>Português</em>:</td>
									<td width="1">&nbsp;</td>
									<td valign="top" align="left" width="85%">
										Febre da Dengue<br>
										Febre Quebra-Ossos<br>
										Infecção pelo Vírus da Dengue<br>
										Infecção por Vírus da Dengue<br>
										Infecção por Vírus de Dengue
									</td>
								</tr>
								<tr>
									<td valign="top" align="right" colspan="2" width="15%">Categoria:</td>
									<td width="1"></td>
									<td valign="top" align="left" width="85%">
										<a href="">C02.081.270</a><br>
										<a href="">C02.782.350.250.214</a><br>
										<a href="">C02.782.417.214</a><br>
										<a href="">SP4.001.012.148.144</a><br>
									</td>
								</tr>
								<tr>
									<td valign="top" align="right" colspan="2" width="15%">Definição <em>Português</em>:</td>
									<td width="1">
										&nbsp;
									</td>
									<td valign="top" align="left" width="85%">
										<div id="definition">
											<a href="/cgi-bin/wxis1660.exe/decsserver/?IsisScript=../cgi-bin/decsserver/decsserver.xis&amp;previous_page=homepage&amp;task=exact_term&amp;interface_language=p&amp;search_language=p&amp;search_exp=Doença">Doença</a> febril aguda transmitida por picada de mosquitos AEDES infectados com o <a href="/cgi-bin/wxis1660.exe/decsserver/?IsisScript=../cgi-bin/decsserver/decsserver.xis&amp;previous_page=homepage&amp;task=exact_term&amp;interface_language=p&amp;search_language=p&amp;search_exp=Vírus da Dengue">VÍRUS DA DENGUE</a>. É autolimitada e caracterizada por febre, <a href="/cgi-bin/wxis1660.exe/decsserver/?IsisScript=../cgi-bin/decsserver/decsserver.xis&amp;previous_page=homepage&amp;task=exact_term&amp;interface_language=p&amp;search_language=p&amp;search_exp=Mialgia">mialgia</a>, <a href="/cgi-bin/wxis1660.exe/decsserver/?IsisScript=../cgi-bin/decsserver/decsserver.xis&amp;previous_page=homepage&amp;task=exact_term&amp;interface_language=p&amp;search_language=p&amp;search_exp=Cefaleia">cefaleia</a> e <a href="/cgi-bin/wxis1660.exe/decsserver/?IsisScript=../cgi-bin/decsserver/decsserver.xis&amp;previous_page=homepage&amp;task=exact_term&amp;interface_language=p&amp;search_language=p&amp;search_exp=Exantema">exantema</a>. A <a href="/cgi-bin/wxis1660.exe/decsserver/?IsisScript=../cgi-bin/decsserver/decsserver.xis&amp;previous_page=homepage&amp;task=exact_term&amp;interface_language=p&amp;search_language=p&amp;search_exp=Dengue Grave">DENGUE GRAVE</a> é uma forma mais virulenta da <a href="/cgi-bin/wxis1660.exe/decsserver/?IsisScript=../cgi-bin/decsserver/decsserver.xis&amp;previous_page=homepage&amp;task=exact_term&amp;interface_language=p&amp;search_language=p&amp;search_exp=Dengue">dengue.</a>&nbsp;
										</div>

									</td>
								</tr>
								<tr>
									<td valign="top" align="right" colspan="2" width="15%">

										Nota de Indexação <em>Português</em>:
									</td>
									<td width="1">
										&nbsp;
									</td>
									<td valign="top" align="left" width="85%">
										coordene com <a href="/cgi-bin/wxis1660.exe/decsserver/?IsisScript=../cgi-bin/decsserver/decsserver.xis&amp;previous_page=homepage&amp;task=exact_term&amp;interface_language=p&amp;search_language=p&amp;search_exp=Doenças Negligenciadas">DOENÇAS NEGLIGENCIADAS</a> se pertinente; <a href="/cgi-bin/wxis1660.exe/decsserver/?IsisScript=../cgi-bin/decsserver/decsserver.xis&amp;previous_page=homepage&amp;task=exact_term&amp;interface_language=p&amp;search_language=p&amp;search_exp=Dengue Grave">DENGUE GRAVE</a> também está disponível
									</td>
								</tr>
								<tr>
									<td valign="top" align="right" colspan="2" width="15%">Qualificadores Permitidos <em>Português</em>:	</td>
									<td width="1"></td>
									<td valign="top" align="left" width="85%">
										<table class="table table-striped">
											<tbody><tr>
												<td width="190">
													SU <a href="">cirurgia</a>
												</td>
												<td width="190">
													CL <a href="">classificação</a>
												</td>
											</tr>
											<tr>
												<td width="190">
													CO <a href="">complicações</a>
												</td>
												<td width="190">
													CN <a href="">congênito</a>
												</td>
											</tr>
											<tr>
												<td width="190">
													DG <a href="">diagnóstico por imagem</a>
												</td>
												<td width="190">
													DI <a href="">diagnóstico</a>
												</td>
											</tr>
											<tr>
												<td width="190">
													DH <a href="">dietoterapia</a>
												</td>
												<td width="190">
													EC <a href="">economia</a>
												</td>
											</tr>
											<tr>
												<td width="190">
													EM <a href="">embriologia</a>
												</td>
												<td width="190">
													NU <a href="">enfermagem</a>
												</td>
											</tr>
											<tr>
												<td width="190">
													EN <a href="">enzimologia</a>
												</td>
												<td width="190">
													EP <a href="">epidemiologia</a>
												</td>
											</tr>
											<tr>
												<td width="190">
													ET <a href="">etiologia</a>
												</td>
												<td width="190">
													EH <a href="">etnologia</a>
												</td>
											</tr>
											<tr>
												<td width="190">
													PP <a href="">fisiopatologia</a>
												</td>
												<td width="190">
													GE <a href="">genética</a>
												</td>
											</tr>
											<tr>
												<td width="190">
													HI <a href="">história</a>
												</td>
												<td width="190">
													IM <a href="">imunologia</a>
												</td>
											</tr>
											<tr>
												<td width="190">
													CI <a href="">induzido quimicamente</a>
												</td>
												<td width="190">
													CF <a href="">líquido cefalorraquidiano</a>
												</td>
											</tr>
											<tr>
												<td width="190">
													ME <a href="">metabolismo</a>
												</td>
												<td width="190">
													MI <a href="">microbiologia</a>
												</td>
											</tr>
											<tr>
												<td width="190">
													MO <a href="">mortalidade</a>
												</td>
												<td width="190">
													PS <a href="">parasitologia</a>
												</td>
											</tr>
											<tr>
												<td width="190">
													PA <a href="">patologia</a>
												</td>
												<td width="190">
													PC <a href="">prevenção &amp; controle</a>
												</td>
											</tr>
											<tr>
												<td width="190">
													PX <a href="">psicologia</a>
												</td>
												<td width="190">
													RT <a href="">radioterapia</a>
												</td>
											</tr>
											<tr>
												<td width="190">
													RH <a href="">reabilitação</a>
												</td>
												<td width="190">
													BL <a href="">sangue</a>
												</td>
											</tr>
											<tr>
												<td width="190">
													TH <a href="">terapia</a>
												</td>
												<td width="190">
													TM <a href="">transmissão</a>
												</td>
											</tr>
											<tr>
												<td width="190">
													DT <a href="">tratamento farmacológico</a>
												</td>
												<td width="190">
													UR <a href="">urina</a>
												</td>
											</tr>
											<tr>
												<td width="190">
													VE <a href="">veterinária</a>
												</td>
												<td width="190">
													VI <a href="">virologia</a>
												</td>
											</tr>
										</tbody>
									</table>
								</td>
							</tr>
							<tr>
								<td valign="top" align="right" colspan="2" width="15%">
									Número do Registro:
								</td>
								<td width="1">
									&nbsp;
								</td>
								<td valign="top" align="left" width="450">
									3727&nbsp;
								</td>
							</tr>
							<tr>
								<td valign="top" align="right" colspan="2" width="15%">
									Identificador Único:
								</td>
								<td width="1">
									&nbsp;
								</td>
								<td valign="top" align="left" width="85%">
									D003715&nbsp;
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
			<!-- Fim Loop -->
			<br>
		<?php } ?>
		</div>
	</section>

	<?php include 'footer.php' ?>
	<script src="js/jquery-3.4.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/slick.min.js"></script>
	<script src="js/main.js"></script>
</body>
</html>