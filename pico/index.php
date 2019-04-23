<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="UTF-8">
	<meta name="autor" content="">
	<meta name="keywords" content="">
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>PICO Search</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
	<link href="https://fonts.googleapis.com/css?family=Anton|Poppins" rel="stylesheet">
</head>
<body>
	<header id="header">
		<div id="lang">
			<a href="">Português</a>  |  
			<a href="">English</a>  |  
			<a href="">Español</a>  |  
			<a href="">Français</a>  
		</div>
		<div class="container">
			<div class="row">
				<div class="col-md-4" id="logo">
					<a href=""><img src="img/BVS.svg" alt="" class="img-fluid"></a>
				</div>
				<div class="col-md-8" id="pico">
					<img src="img/Picos.svg" alt="" class="img-fluid">
				</div>
			</div>
		</div>
	</header>


	<section class="padding1">
		<div class="container">
			<div class="accordion" id="accordionPicos">
				<!-------------------------------------- P -->
				<div class="card">
					<div class="card-header" id="headingOne" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
						<h2 class="mb-0">
							<span class="acordionIcone float-right fas fa-minus"></span>
							<button class="btn btn-link collapsed labelMain" type="button">
								Population
							</button>
						</h2>
					</div>
					<div id="collapseOne" class="collapse show" aria-labelledby="headingOne" >
						<div class="card-body">
							<div class="row">
								<div class="col-md-8 margin2M">
									<input type="text" id="L1" class="form-control" placeholder="Type of patient eg. diabetcs">
								</div>
								<div class="col-md-4">
									<select name="" id="" class="form-control formSelect">
										<option value="">Title, Abstract, DeSC/MeSH Terms</option>
										<option value="">Title</option>
										<option value="">DeSC/MeSH Terms</option>
									</select>
								</div>
							</div>
							<div class="row margin1">
								<div class="col-12">
									<a href="" class="btn btn-primary margin2M" data-toggle="modal" data-target="#modal">Expand DeSH/MeSH Terms</a>
									<div class="btn-group">
										<a href="https://bvsalud.org/" target="_blank" class="btn colorP" data-toggle="tooltip" data-placement="top" title="Click to see results">Population <span class="badge badge-light badgeM">15.039</span></a>
									</div>
									<!-- <span><a href="" class="btn btn-primary">Refresh <i class="fas fa-redo"></i></a></span> -->
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-------------------------------------- I -->
				<div class="card">
					<div class="card-header" id="headingTwo" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
						<h2 class="mb-0">
							<span class="acordionIcone float-right fas fa-plus"></span>
							<button class="btn btn-link collapsed labelMain" type="button">
								Intervention
							</button>
						</h2>
					</div>
					<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" >
						<div class="card-body">
							<div class="row">
								<div class="col-md-8 margin2M">
									<input type="text" id="L1" class="form-control" placeholder="Any Intervention eg. treatment, diagnostic test">
								</div>
								<div class="col-md-4">
									<select name="" id="" class="form-control formSelect">
										<option value="">Title, Abstract, DeSC/MeSH Terms</option>
										<option value="">Title</option>
										<option value="">DeSC/MeSH Terms</option>
									</select>
								</div>
							</div>
							<div class="row margin1">
								<div class="col-12">
									<a href="" class="btn btn-primary margin2M" data-toggle="modal" data-target="#modal">Expand DeSH/MeSH Terms</a>
									<div class="btn-group">
										<a href="https://bvsalud.org/" target="_blank" class="btn colorI" data-toggle="tooltip" data-placement="top" title="Click to see results">Intervention <span class="badge badge-light badgeM">350</span></a>
										<a href="https://bvsalud.org/" target="_blank" class="btn btn-warning" data-toggle="tooltip" data-placement="top" title="Click to see results">Population AND Intervention <span class="badge badge-light badgeM">150</span></a>
									</div>
									<!-- <span><a href="" class="btn btn-primary">Refresh <i class="fas fa-redo"></i></a></span> -->
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-------------------------------------- C -->
				<div class="card">
					<div class="card-header" id="headingThree" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
						<h2 class="mb-0">
							<span class="acordionIcone float-right fas fa-plus"></span>
							<button class="btn btn-link collapsed labelMain" type="button">
								Comparison
							</button>
						</h2>
					</div>
					<div id="collapseThree" class="collapse" aria-labelledby="headingThree" >
						<div class="card-body">
							<div class="row">
								<div class="col-md-8 margin2M">
									<input type="text" id="L1" class="form-control"  placeholder="Comparing your intervention with another treatment">
								</div>
								<div class="col-md-4">
									<select name="" id="" class="form-control formSelect">
										<option value="">Title, Abstract, DeSC/MeSH Terms</option>
										<option value="">Title</option>
										<option value="">DeSC/MeSH Terms</option>
									</select>
								</div>
							</div>
							<div class="row margin1">
								<div class="col-12">
									<a href="" class="btn btn-primary margin2M" data-toggle="modal" data-target="#modal">Expand DeSH/MeSH Terms</a>
									<div class="btn-group">
										<a href="https://bvsalud.org/" target="_blank" class="btn colorC" data-toggle="tooltip" data-placement="top" title="Click to see results">Comparison <span class="badge badge-light badgeM">200</span></a>
										<a href="https://bvsalud.org/" target="_blank" class="btn btn-warning" data-toggle="tooltip" data-placement="top" title="Click to see results">Population AND Intervention AND Comparison <span class="badge badge-light badgeM">80</span></a>
									</div>
									<span></span>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-------------------------------------- O -->
				<div class="card">
					<div class="card-header" id="headingFour" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
						<h2 class="mb-0">
							<span class="acordionIcone float-right fas fa-plus"></span>
							<button class="btn btn-link collapsed labelMain" type="button" >
								Outcome
							</button>
						</h2>
					</div>
					<div id="collapseFour" class="collapse" aria-labelledby="headingFour" >
						<div class="card-body">
							<div class="row">
								<div class="col-md-8 margin2M">
									<input type="text" id="L1" class="form-control"  placeholder="Outcomes interest eg. reduced mortality, fewer exacerbati">
								</div>
								<div class="col-md-4">
									<select name="" id="" class="form-control formSelect">
										<option value="">Title, Abstract, DeSC/MeSH Terms</option>
										<option value="">Title</option>
										<option value="">DeSC/MeSH Terms</option>
									</select>
								</div>
							</div>
							<div class="row margin1">
								<div class="col-12">
									<a href="" class="btn btn-primary margin2M" data-toggle="modal" data-target="#modal">Expand DeSH/MeSH Terms</a>
									<div class="btn-group">
										<a href="https://bvsalud.org/" target="_blank" class="btn colorO" data-toggle="tooltip" data-placement="top" title="Click to see results">Outcomes <span class="badge badge-light badgeM">200</span></a>
										<a href="https://bvsalud.org/" target="_blank" class="btn btn-warning" data-toggle="tooltip" data-placement="top" title="Click to see results">Population AND Intervention AND Comparison AND Outcomes <span class="badge badge-light badgeM">80</span></a>

									</div>
									<!-- <span><a href="" class="btn btn-primary">Refresh <i class="fas fa-redo"></i></a></span> -->
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-------------------------------------- T -->
				<div class="card">
					<div class="card-header" id="headingFour" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
						<h2 class="mb-0">
							<span class="acordionIcone float-right fas fa-plus"></span>
							<button class="btn btn-link collapsed labelMain" type="button" >
								Type of Study
							</button>
						</h2>
					</div>
					<div id="collapseFive" class="collapse" aria-labelledby="headingFour" >
						<div class="card-body">
							<div class="row">
								<div class="col-md-4">
									<div class="form-group form-check">
										<input type="checkbox" class="form-check-input" id="1">
										<label class="form-check-label" for="1">Case report</label>
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group form-check">
										<input type="checkbox" class="form-check-input" id="2">
										<label class="form-check-label" for="2">Systematic reviews</label>
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group form-check">
										<input type="checkbox" class="form-check-input" id="3">
										<label class="form-check-label" for="3">Systematic reviews</label>
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group form-check">
										<input type="checkbox" class="form-check-input" id="4">
										<label class="form-check-label" for="4">Cohort study</label>
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group form-check">
										<input type="checkbox" class="form-check-input" id="5">
										<label class="form-check-label" for="5">Practice guideline</label>
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group form-check">
										<input type="checkbox" class="form-check-input" id="6">
										<label class="form-check-label" for="6">Controlled clinical trial</label>
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group form-check">
										<input type="checkbox" class="form-check-input" id="7">
										<label class="form-check-label" for="7">Health technology assessment</label>
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group form-check">
										<input type="checkbox" class="form-check-input" id="8">
										<label class="form-check-label" for="8">Overview</label>
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group form-check">
										<input type="checkbox" class="form-check-input" id="9">
										<label class="form-check-label" for="9">Health economic evaluation</label>
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group form-check">
										<input type="checkbox" class="form-check-input" id="10">
										<label class="form-check-label" for="10">Evidence synthesis</label>
									</div>
								</div>
							</div>
						</div>
						
					</div>
				</div>
			</div>

			<div>
				<h3 class="result text-center">
					<b><a href="http://pesquisa.bvsalud.org/portal/?lang=pt&index=tw&home_url=https%3A%2F%2Fbvsalud.org&home_text=Portal+Regional+da+BVS&q=&submit=Pesquisa" class="btn btn-lg btn-success" data-toggle="tooltip" data-placement="top" title="Click to see results" target="_blank">Search Results <span class="badge badge-light badgeM">10</span></a></b>
					<!-- <a href="" class="btn btn-lg btn-primary">Refresh <i class="fas fa-redo"></i></a> -->
				</h3>
			</div>
		</div>
	</div>
	
	<div class="container" > <br>
		<label for=""><b>Search Details</b></label>
		<textarea name="" id="" rows="4" class="form-control" readonly="readonly">(Dengue OR "dengue virus") AND (vaccine OR vacina) AND ("controle do mosquito") (Dengue OR "dengue virus") AND (vaccine OR vacina) AND ("controle do mosquito") (Dengue OR "dengue virus") AND (vaccine OR vacina) AND ("controle do mosquito") (Dengue OR "dengue virus") AND (vaccine OR vacina) AND ("controle do mosquito")(Dengue OR "dengue virus") AND (vaccine OR vacina) AND ("controle do mosquito") (Dengue OR "dengue virus") AND (vaccine OR vacina) AND ("controle do mosquito") (Dengue OR "dengue virus") AND (vaccine OR vacina) AND ("controle do mosquito")</textarea>
	</div>
</section>



	<!-- <section class="sectionGray padding2">
		<div class="container">
			<h4 class="text-center title1">Sobre Nós</h4>
			<hr>
			<div class="row">
				<div class="col-md-4 margin1M">
					<img src="img/sobreNos.png" alt="" class="img-fluid">
				</div>
				<div class="col-md-8">
					<p class="text-justify">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. In possimus, error deleniti repellendus dolorum. Velit deleniti atque voluptatibus repellat commodi a magni recusandae aut nemo quia et, ad dolores earum inventore. Perferendis possimus ex eveniet, recusandae ipsum quisquam odit beatae voluptas. Accusamus ex magni possimus aliquid doloribus praesentium ipsa saepe odio deserunt quibusdam cumque perspiciatis ratione consectetur dolores, aut voluptates rem harum veniam accusantium, adipisci distinctio eos, pariatur. Deleniti sapiente saepe nobis, tempore error incidunt sit architecto assumenda nisi earum molestias eligendi debitis nihil est ullam et. Nam quos nulla laudantium delectus enim culpa, officiis, soluta minus possimus, molestias odio eum! Cumque, eveniet, ut. Voluptas vero dolorum quo nam veniam illo repellendus at, velit qui libero optio explicabo aperiam soluta, id dicta quae doloribus rerum facilis sunt odit. Ipsum, animi, et! Quasi earum quam necessitatibus itaque pariatur, magni animi commodi consequatur asperiores reprehenderit, dolor sit aliquid porro, ut dicta hic!
					</p>
				</div>
			</div>
		</div>
	</section> -->
	






	<footer id="footer" style="border-top: 10px solid #2d3e50; ">
		<div class="container">
			PICOS SEARCH -  All RIGHTS RESERVED
		</div>
	</footer>


	

	<?php include 'modais.php' ?>

	<script src="js/popper.min.js"></script>
	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/main.js"></script>
</body>
</html>