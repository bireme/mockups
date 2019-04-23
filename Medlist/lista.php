<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="UTF-8">
	<meta name="autor" content="">
	<meta name="keywords" content="">
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Listas Anotadas de Medicamentos</title>
	<link rel="icon" href="img/favicon.png" sizes="192x192">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
</head>
<body>
	<?php include 'header.php' ?>
	<section class="container">
		<nav aria-label="breadcrumb">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="index.php">Home</a></li>
				<li class="breadcrumb-item active" aria-current="page">WHO Model List of Essential Medicines</li>
			</ol>
		</nav>

		<h1 class="titulo1"><span class="colorText">WHO</span>  Model List of Essential Medicines</h1>
		<div class="row">
			
			<div class="col-md-8 col-lg-9 col-sm-12 order-md-2">
				<div class="tab-content" id="v-pills-tabContent">
					<!-------------------- 1 -------------------->
					<div class="tab-pane fade tabStatic show active" id="m1" role="tabpanel" >
						<ul>
							<li>
								General anaesthetics and oxygen
								<ul>
									<li>
										<a data-toggle="collapse" data-target="#tableM1" href="">Inhalational medicines</a>	
										<!-- Tabela -->
										<div class="table-responsive collapse" id="tableM1">
											<table class="table table-bordered table-sm table-hover table-striped font12">
												<thead>
													<tr>
														<th>Medicamento</th>
														<th>Formas Farmacêuticas</th>
														<th class="text-center">Composição</th>
														<th class="text-center">Observações</th>
													</tr>
												</thead>
												<tbody>
													<?php 
													for ($i=0; $i < 4; $i++) { 
														?>
														<tr>
															<td><a href="medicamento.php">oxygen</a></td>
															<td>Inhalation (medicine gas)</td>
															<td class="text-center">N/A</td>
															<td class="text-center"><a href="" data-toggle="modal" data-target="#modalObservacoes"><i class="fas fa-info-circle"></i></a></td>
														</tr>
													<?php } ?>
												</tbody>
											</table>
										</div>
									</li>
									<li><a data-toggle="collapse" data-target="#tableM2" href="">Injectable medicines</a>
										<div class="table-responsive collapse" id="tableM2">
											<table class="table table-bordered table-sm table-hover table-striped font12">
												<thead>
													<tr>
														<th>Medicamento</th>
														<th>Formas Farmacêuticas</th>
														<th class="text-center">Composição</th>
														<th class="text-center">Observações</th>
													</tr>
												</thead>
												<tbody>
													<?php 
													for ($i=0; $i < 4; $i++) { 
														?>
														<tr>
															<td><a href="medicamento.php">oxygen</a></td>
															<td>Inhalation (medicine gas)</td>
															<td class="text-center">N/A</td>
															<td class="text-center"><a href="" data-toggle="modal" data-target="#modalObservacoes"><i class="fas fa-info-circle"></i></a></td>
														</tr>
													<?php } ?>
												</tbody>
											</table>
										</div>
									</li>
								</ul>
							</li>
							<li><a data-toggle="collapse" data-target="#tableM3" href="">Local anaesthetics</a>
								<div class="table-responsive collapse" id="tableM3">
									<table class="table table-bordered table-sm table-hover table-striped font12">
										<thead>
											<tr>
												<th>Medicamento</th>
												<th>Formas Farmacêuticas</th>
												<th class="text-center">Composição</th>
												<th class="text-center">Observações</th>
											</tr>
										</thead>
										<tbody>
											<?php 
											for ($i=0; $i < 4; $i++) { 
												?>
												<tr>
													<td><a href="medicamento.php">oxygen</a></td>
													<td>Inhalation (medicine gas)</td>
													<td class="text-center">N/A</td>
													<td class="text-center"><a href="" data-toggle="modal" data-target="#modalObservacoes"><i class="fas fa-info-circle"></i></a></td>
												</tr>
											<?php } ?>
										</tbody>
									</table>
								</div>
							</li>
							<li><a  data-toggle="collapse" data-target="#tableM4" href="">Preoperative medication and sedation for short-term procedures</a>
								<div class="table-responsive collapse" id="tableM4">
									<table class="table table-bordered table-sm table-hover table-striped font12">
										<thead>
											<tr>
												<th>Medicamento</th>
												<th>Formas Farmacêuticas</th>
												<th class="text-center">Composição</th>
												<th class="text-center">Observações</th>
											</tr>
										</thead>
										<tbody>
											<?php 
											for ($i=0; $i < 4; $i++) { 
												?>
												<tr>
													<td><a href="medicamento.php">oxygen</a></td>
													<td>Inhalation (medicine gas)</td>
													<td class="text-center">N/A</td>
													<td class="text-center"><a href="" data-toggle="modal" data-target="#modalObservacoes"><i class="fas fa-info-circle"></i></a></td>
												</tr>
											<?php } ?>
										</tbody>
									</table>
								</div>
							</li>
						</ul>
					</div>
					<!-------------------- 2 -------------------->
					<div class="tab-pane fade tabStatic" id="m2" role="tabpanel" >
						<ul>
							<li><a href="">Non-opioids and non-steroidal anti-inflammatory medicines (NSAIMs)</a></li>
							<li><a href="">Opioid analgesics</a></li>
							<li><a href="">Medicines used to treat gout</a></li>
							<li><a href="">Disease modifying agents used in rheumatoid disorders (DMARDs)</a></li>
						</ul>	
					</div>
					<!-------------------- 3 -------------------->
					<div class="tab-pane fade tabStatic" id="m3" role="tabpanel" >
						<table class="table table-bordered table-sm table-hover table-striped font12">
							<thead>
								<tr>
									<th>Medicamento</th>
									<th>Formas Farmacêuticas</th>
									<th class="text-center">Composição</th>
									<th class="text-center">Observações</th>
								</tr>
							</thead>
							<tbody>
								<?php 
								for ($i=0; $i < 4; $i++) { 
									?>
									<tr>
										<td><a href="medicamento.php">oxygen</a></td>
										<td>Inhalation (medicine gas)</td>
										<td class="text-center">N/A</td>
										<td class="text-center"><a href="" data-toggle="modal" data-target="#modalObservacoes"><i class="fas fa-info-circle"></i></a></td>
									</tr>
								<?php } ?>
							</tbody>
						</table>
					</div>
					<!-------------------- 4 -------------------->
					<div class="tab-pane fade tabStatic" id="m4" role="tabpanel" >4</div>
					<!-------------------- 5 -------------------->
					<div class="tab-pane fade tabStatic" id="m5" role="tabpanel" >5</div>
					<!-------------------- 6 -------------------->
					<div class="tab-pane fade tabStatic" id="m6" role="tabpanel" >6</div>
					<!-------------------- 7 -------------------->
					<div class="tab-pane fade tabStatic" id="m7" role="tabpanel" >7</div>
					<!-------------------- 8 -------------------->
					<div class="tab-pane fade tabStatic" id="m8" role="tabpanel" >8</div>
					<!-------------------- 8 -------------------->
					<div class="tab-pane fade tabStatic" id="m9" role="tabpanel" >9</div>
					<!-------------------- 10 -------------------->
					<div class="tab-pane fade tabStatic" id="m10" role="tabpanel" >10</div>
					<!-------------------- 11 -------------------->
					<div class="tab-pane fade tabStatic" id="m11" role="tabpanel" >11</div>
					<!-------------------- 12 -------------------->
					<div class="tab-pane fade tabStatic" id="m12" role="tabpanel" >12</div>
					<!-------------------- 13 -------------------->
					<div class="tab-pane fade tabStatic" id="m13" role="tabpanel" >13</div>
					<!-------------------- 14 -------------------->
					<div class="tab-pane fade tabStatic" id="m14" role="tabpanel" >14</div>
					<!-------------------- 15 -------------------->
					<div class="tab-pane fade tabStatic" id="m15" role="tabpanel" >15</div>
					<!-------------------- 16 -------------------->
					<div class="tab-pane fade tabStatic" id="m16" role="tabpanel" >16</div>
					<!-------------------- 17 -------------------->
					<div class="tab-pane fade tabStatic" id="m17" role="tabpanel" >17</div>
					<!-------------------- 18 -------------------->
					<div class="tab-pane fade tabStatic" id="m18" role="tabpanel" >18</div>
					<!-------------------- 19 -------------------->
					<div class="tab-pane fade tabStatic" id="m19" role="tabpanel" >19</div>
					<!-------------------- 20 -------------------->
					<div class="tab-pane fade tabStatic" id="m20" role="tabpanel" >20</div>
					<!-------------------- 21 -------------------->
					<div class="tab-pane fade tabStatic" id="m21" role="tabpanel" >21</div>
					<!-------------------- 22 -------------------->
					<div class="tab-pane fade tabStatic" id="m22" role="tabpanel" >22</div>
					<!-------------------- 23 -------------------->
					<div class="tab-pane fade tabStatic" id="m23" role="tabpanel" >23</div>
				</div>
			</div>
			<div class="col-md-4  col-lg-3 col-sm-12 order-md-1">
				<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
					<a class="nav-link navLinkList active" id="medicines1" data-toggle="pill" href="#m1" role="tab"  aria-selected="true">Anaesthetics</a>
					<a class="nav-link navLinkList" id="medicines2" data-toggle="pill" href="#m2" role="tab">Analgesics, antipyretics, non-steroidal anti-inflammatory medicines (NSAIMs), medicines used to treat gout and disease modifying agents in rheumatoid disorders (DMARDs)</a>
					<a class="nav-link navLinkList" id="medicines3" data-toggle="pill" href="#m3" role="tab">Antiallergics and medicines used in anaphylaxis</a>
					<a class="nav-link navLinkList" id="medicines4" data-toggle="pill" href="#m4" role="tab">Antidotes and other substances used in poisonings</a>
					<a class="nav-link navLinkList" id="medicines5" data-toggle="pill" href="#m5" role="tab">Anticonvulsants/antiepileptics</a>
					<a class="nav-link navLinkList" id="medicines6" data-toggle="pill" href="#m6" role="tab">Anti-infective medicines</a>
					<a class="nav-link navLinkList" id="medicines7" data-toggle="pill" href="#m7" role="tab">Antimigraine medicines</a>
					<a class="nav-link navLinkList" id="medicines8" data-toggle="pill" href="#m8" role="tab">Antineoplastic, immunosuppressives and medicines used in Palliative care</a>
					<a class="nav-link navLinkList" id="medicines9" data-toggle="pill" href="#m9" role="tab">Antiparkinsonism medicines</a>
					<a class="nav-link navLinkList" id="medicines10" data-toggle="pill" href="#m10" role="tab">Medicines affecting the blood</a>
					<a class="nav-link navLinkList" id="medicines11" data-toggle="pill" href="#m11" role="tab">Blood products and plasma substitutes</a>
					<a class="nav-link navLinkList" id="medicines12" data-toggle="pill" href="#m12" role="tab">Cardiovascular medicines</a>
					<a class="nav-link navLinkList" id="medicines13" data-toggle="pill" href="#m13" role="tab">Analgesics, antipyretics, non-steroidal anti-inflammatory medicines (NSAIMs), medicines used to treat gout and disease modifying agents in rheumatoid disorders (DMARDs)</a>
					<a class="nav-link navLinkList" id="medicines14" data-toggle="pill" href="#m14" role="tab">Antiallergics and medicines used in anaphylaxis</a>
					<a class="nav-link navLinkList" id="medicines15" data-toggle="pill" href="#m15" role="tab">Antidotes and other substances used in poisonings</a>
					<a class="nav-link navLinkList" id="medicines16" data-toggle="pill" href="#m16" role="tab">Anticonvulsants/antiepileptics</a>
					<a class="nav-link navLinkList" id="medicines17" data-toggle="pill" href="#m17" role="tab">Anti-infective medicines</a>
					<a class="nav-link navLinkList" id="medicines18" data-toggle="pill" href="#m18" role="tab">Antimigraine medicines</a>
					<a class="nav-link navLinkList" id="medicines19" data-toggle="pill" href="#m19" role="tab">Antiparkinsonism medicines</a>
					<a class="nav-link navLinkList" id="medicines20" data-toggle="pill" href="#m20" role="tab">Medicines affecting the blood</a>
					<a class="nav-link navLinkList" id="medicines21" data-toggle="pill" href="#m21" role="tab">Blood products and plasma substitutes</a>
					<a class="nav-link navLinkList" id="medicines22" data-toggle="pill" href="#m22" role="tab">Cardiovascular medicines</a>
					<a class="nav-link navLinkList" id="medicines23" data-toggle="pill" href="#m23" role="tab">Antineoplastic, immunosuppressives and medicines used in Palliative care</a>
				</div>
			</div>
		</div>
		
	</section>

	<!-- --------Modal Observações-------- -->
	<div id="modalObservacoes" class="modal bd-example-modal-xl fade" tabindex="-1" role="dialog">
		<div class="modal-dialog modal-dialog modal-xl modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">Observações</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime eos, dolor recusandae officiis id, nam praesentium ipsam, vitae magni ab debitis similique dignissimos ut impedit est commodi nemo ipsa nulla. Mollitia impedit iure magnam quod maxime non fugiat iusto perferendis vitae excepturi, necessitatibus eius dignissimos accusamus ab quis atque distinctio laborum fuga odio quas sequi facilis ut minima. Minus ab id minima repudiandae, laboriosam accusamus dolores aliquid, eveniet consectetur quod nesciunt magnam adipisci eos dolorem placeat veniam saepe ex cupiditate alias explicabo accusantium quo aperiam! Aspernatur maiores consequuntur maxime ipsa, itaque laudantium perspiciatis, quam corrupti possimus eius, facilis, ex repudiandae sit suscipit fugiat beatae commodi voluptate. Quo qui inventore eveniet non molestias quae reprehenderit! Ducimus provident hic laudantium repudiandae pariatur distinctio adipisci omnis accusantium deleniti dolorum similique culpa facere, animi delectus tempora itaque vitae repellat ipsa, atque qui, ea fuga! Veniam minima animi incidunt et similique, molestias accusantium nesciunt aliquid!.</p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-primary" data-dismiss="modal">Fechar</button>
				</div>
			</div>
		</div>
	</div>


	<!-- --------Modal Artigos-------- -->
	<div id="modalArtigos" class="modal bd-example-modal-xl fade" tabindex="-1" role="dialog">
		<div class="modal-dialog modal-dialog modal-xl modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">Artigos</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<ul>
						<li>
							<a href=""><b>Benzoyl peroxide for treating mild-moderate acne</b></a> <br>
							<small>Contexto: Acne vulgaris. <br>
								Questão: Should children or adults with mild to moderate acne be treated with benzoyl peroxide compared to other topical preparations for acne? <br>
							Idioma: Inglês</small>
						</li>
						<li>
							<a href=""><b>H2-antagonists versus proton pump inhibitors for gastro-esophageal reflux in adults</b></a> <br>
							<small>Contexto: Acne vulgaris. <br>
								Questão: Should children or adults with mild to moderate acne be treated with benzoyl peroxide compared to other topical preparations for acne? <br>
							Idioma: Inglês</small>
						</li>
						<li>
							<a href=""><b>Propofol for Neonates Undergoing Surgical Procedures</b></a><br>
							<small>Contexto: Acne vulgaris. <br>
								Questão: Should children or adults with mild to moderate acne be treated with benzoyl peroxide compared to other topical preparations for acne? <br>
							Idioma: Inglês</small>
						</li>
					</ul>
					<div class="text-center">
						<a href="sumario.php" class="btn btn-primary btn-sm">Visualizar outros artigos</a>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-primary" data-dismiss="modal">Fechar</button>
				</div>
			</div>
		</div>
	</div>

	<br><br>
	<?php include 'footer.php' ?>
	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/main.js"></script>
</body>
</html>