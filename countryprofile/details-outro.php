<!DOCTYPE html>
<html lang="pt">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Pharmaceutical and Health Technology Country Profile</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<?php include 'header.php'; ?>
	<main id="main_container" class="padding1">
		<div class="container">
			<nav aria-label="breadcrumb" class="d-print-none">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="index.php">Home</a></li>
					<li class="breadcrumb-item"><a href="peru.php">Peru</a></li>
					<li class="breadcrumb-item active" aria-current="page">More Information</li>
				</ol>
			</nav>
			<hr class="border-primary border-3 opacity-25">
			<div class="row">
				<div class="col-md-8 col-lg-9 order-md-2">
					<?php for ($i=1; $i < 14; $i++) { ?>
						
						<div class="accordion" id="descripion_<?=$i; ?>">
							<div class="accordion-item">
								<h2 class="accordion-header" id="heading_<?=$i; ?>">
									<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse_<?=$i; ?>" aria-expanded="f" aria-controls="collapse_<?=$i; ?>">
										<h2 id="d<?=$i; ?>"><b>Domain <?=$i; ?>:</b> <small>Demographics, economics, market and expenditure</small></h2>
									</button>
								</h2>
								<div id="collapse_<?=$i; ?>" class="accordion-collapse collapse" aria-labelledby="heading_<?=$i; ?>" data-bs-parent="#descripion_<?=$i; ?>">
									<div class="accordion-body">
										It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
									</div>
								</div>
							</div>
						</div> <br>
						<table class="table table-bordered table-striped">
							<thead>
								<tr>
									<th>C<?=$i; ?></th>
									<th>Demographics, economics, market and expenditure</th>
									<th>PAHO data</th>
									<th>Public data</th>
								</tr>
							</thead>
							<tbody>
								<?php for ($j=1; $j < 20; $j++) { ?>
									<tr>
										<td>C<?=$i; ?>.<?=$j; ?></td>
										<td>Population in thousand</td>
										<td></td>
										<td>777,859 (2017) <sup>1</sup></td>
									</tr>
								<?php } ?>
							</tbody>
						</table>
						<hr class="border-primary border-3 opacity-25">
						<div>
							<small>
								<b>References </b>
								<ul>
									<li>Population, total | Data [Internet]. [cited 2018 Oct 31]. Available from: https://data.worldbank.org/indicator/SP.POP.TOTL?locations=GY&view=chart </li>
									<li>GDP (current international $) | Data [Internet]. [cited 2018 Oct 31]. Available from: https://data.worldbank.org/indicator/NY.GDP.MKTP.PP.CD </li>
									<li>GDP, PPP per capita (current international $) | Data [Internet]. [cited 2018 Oct 31]. Available from: https://data.worldbank.org/indicator/NY.GDP.PCAP.PP.CD  </li>
									<li>GHO | By category | Domestic general government health expenditure (GGHE-D) as percentage of current health expenditure (CHE) (%) - Data by country. WHO [Internet]. [cited 2018 Nov 4]; Available from: http://apps.who.int/gho/data/node.main.GHEDGGHEDCHESHA2011?lang=en </li>
									<li>10665/68735/WHO_EDM_PAR_2004.5.pdf?sequence=1&ua=1  </li>
									<li>The World Medicines Situation [Internet]. 2004 [cited 2018 Oct 31]. Available from: http://apps.who.int/iris/bitstream/handle/</li>
									<li>The World Medicines Situation [Internet]. 2004 [cited 2018 Oct 31]. Available from: http://apps.who.int/iris/bitstream/handle/10665/68735/WHO_EDM_PAR_2004.5.pdf?sequence=1&ua=1 </li>
									<li>Life expectancy at birth, total (years) | Data [Internet]. [cited 2018 Oct 31]. Available from: https://data.worldbank.org/indicator/SP.DYN.LE00.IN?locations=GY</li>
									<li>HEALTH SITUATION [Internet]. 2018 [cited 2018 Oct 31]. Available from: http://apps.who.int/gho/data/node.cco</li>
									<li>WHO | Guyana. WHO [Internet]. 2018 [cited 2018 Oct 31]; Available from: http://www.who.int/countries/guy/en/  </li>
								</ul>
							</small>
						</div>
						<hr class="border-primary border-3 opacity-25">
					<?php } ?>
				</div>
				<<div class="col-md-4 col-lg-3 order-md-1 flag-title d-print-none">
					<div class="sticky-top">
						<div class="row">
							<div class="col-3"><img src="img/peru-flag.jpg" class="img-fluid rounded" alt=""></div>
							<div class="col-9"><h1>Peru</h1></div>
						</div>
						<hr class="border-primary border-3 opacity-25">
						<ul class="nav flex-column nav-pills">
							<li class="nav-item">
								<a class="nav-link active" aria-current="page" href="#d1">
									<b>Domain 1:</b> <small>Demographics, economics, market and expenditure</small>
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" data-bs-toggle="pill" href="#d2">
									<b>Domain 2:</b> <small>Human resources for health</small></a>
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" data-bs-toggle="pill" href="#d3">
									<b>Domain 3:</b> <small>Innovation and Intellectual Property Management </small></a>
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" data-bs-toggle="pill" href="#d4">
									<b>Domain 4:</b> <small>Pharmaceutical Policy </small></a>
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" data-bs-toggle="pill" href="#d5">
									<b>Domain 5:</b> <small>Access of medicines </small></a>
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" data-bs-toggle="pill" href="#d6">
									<b>Domain 6:</b> <small>Regulatory Capacity</small></a>
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" data-bs-toggle="pill" href="#d7">
									<b>Domain 7:</b> <small>Procurement and Supply Chain Management</small></a>
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" data-bs-toggle="pill" href="#d8">
									<b>Domain 8:</b> <small>Pharmaceutical services </small></a>
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" data-bs-toggle="pill" href="#d9">
									<b>Domain 9:</b> <small>Radiological regulation and Services  </small></a>
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" data-bs-toggle="pill" href="#d10">
									<b>Domain 10:</b> <small>Blood regulation and services</small></a>
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" data-bs-toggle="pill" href="#d11">
									<b>Domain 11:</b> <small>Transplants</small></a>
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" data-bs-toggle="pill" href="#d12">
									<b>Domain 12:</b> <small>Rational Use of Medicines and other Health Technologies</small></a>
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" data-bs-toggle="pill" href="#d13">
									<b>Domain 13:</b> <small>Pricing, Procurement, Health Technology Assessment (HTA) and coverage</small></a>
								</a>
							</li>
						</ul>
						<br>
						<a aria-controls="offcanvasExample" data-bs-toggle="offcanvas" href="#offcanvasExample" class="btn btn-warning">See other country</a>
						<?php include 'select_country.php' ?>
						<hr class="border-primary border-3 opacity-25">
					</div>
				</div>
			</div>
		</div>
	</main>
	<div class="d-flex align-items-start">
		<div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
			<button class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">Home</button>
			<button class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">Profile</button>
			<button class="nav-link" id="v-pills-disabled-tab" data-bs-toggle="pill" data-bs-target="#v-pills-disabled" type="button" role="tab" aria-controls="v-pills-disabled" aria-selected="false" disabled>Disabled</button>
			<button class="nav-link" id="v-pills-messages-tab" data-bs-toggle="pill" data-bs-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false">Messages</button>
			<button class="nav-link" id="v-pills-settings-tab" data-bs-toggle="pill" data-bs-target="#v-pills-settings" type="button" role="tab" aria-controls="v-pills-settings" aria-selected="false">Settings</button>
		</div>
		<div class="tab-content" id="v-pills-tabContent">
			<div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab" tabindex="0">...</div>
			<div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab" tabindex="0">...</div>
			<div class="tab-pane fade" id="v-pills-disabled" role="tabpanel" aria-labelledby="v-pills-disabled-tab" tabindex="0">...</div>
			<div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab" tabindex="0">...</div>
			<div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab" tabindex="0">...</div>
		</div>
	</div>
	<?php include 'footer.php'; ?>
	<script src="js/jquery-3.6.0.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/main.js"></script>
	<script src="https://kit.fontawesome.com/7fa92039f9.js" crossorigin="anonymous"></script>
</body>
</html>