<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="UTF-8">
	<meta name="autor" content="">
	<meta name="keywords" content="">
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Portal Regional da BVS</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300, 400,600,900" rel="stylesheet">
</head>
<body>
	<?php include 'header.php' ?>
	<section class="">
		<div class="container">
			<div class="row">
				<div class="col-md-7 offset-md-3 d-print-none">
					<div class="row padding1">
						<div class="col-md-4">
							<!-- Organizar por: -->
							<select name="" id="" class="selectOrder">
								<option value="">Mais Recentes</option>
								<option value="">Últimos</option>
								<option value="">Relevância</option>
							</select>
						</div>
						<div class="col-md-4 text-center">
							<a href=""><b>20</b></a> | <a href="">50</a> | <a href="">100</a>
						</div>
						<div class="col-md-4 text-right resultM"><small>Resultados <b>1-20</b> de <b>28.216.226</b></small></div>
					</div>
				</div>
				<?php  include 'colunaFilter.php' ?>
				<!-- Centro -->
				<div class="col-md-7 d-print-block">
					<?php for ($i=0; $i < 20; $i++) { ?>
						<div class="box1">
							<div class="inputCheck1"><input type="checkbox"></div>
							<div class="textArt">
								<div class="titleArt"><a href="interna.php">Methamphetamine-associated difficulties in cognitive control allocation may normalize after abstinence.</a></div>
								<div class="author"><a href="">Stock</a>, <a href="">Ann-Kathrin</a>; <a href="">Rädle</a>, <a href="">Marion</a>; <a href="">Beste</a>, <a href="">Christian</a>.</div>
								<div class="reference"><i><a href="">Prog Neuropsychopharmacol Biol Psychiatry;</a></i> <b> 88: 41-52, 2019 Jan 10.</b></div>
								<div class="dataArticle">Artigo em Inglês | <a href="">MEDLINE</a> | ID: mdl-29953935</div>
								<!-- Resumo -->
								<div class="resumo collapse" >
									<br><h5 class="title2">RESUMO</h4>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error sunt fugiat ipsa quaerat aliquam doloremque, sint, consequuntur adipisci qui modi dolorem! Quas mollitia itaque voluptatem molestias repudiandae fugit, a ipsum ipsam omnis est unde numquam quisquam, fuga? Quas rerum accusantium optio, cum pariatur quod autem rem. Saepe at repudiandae dicta quisquam excepturi error, cum ex soluta veniam tempore beatae nihil voluptatibus placeat neque numquam, ipsam, accusamus ratione asperiores molestias voluptatem ad reprehenderit nisi. Suscipit laboriosam eveniet ratione, itaque minima, voluptatem earum necessitatibus vel rem libero nobis dolores amet impedit non ea sunt facere officiis modi dolor blanditiis quas quibusdam! Modi asperiores fugiat dolores corporis ad earum nesciunt nam, veritatis vel dignissimos eligendi, laudantium eveniet voluptates necessitatibus! At ea excepturi accusantium labore rem repellat voluptate? Aspernatur accusamus reiciendis nisi, quo minus dolorum vitae repudiandae fugit magnam esse neque, quod soluta, incidunt consequatur dolorem. Dicta distinctio quae maxime pariatur labore iusto reprehenderit, minus perferendis doloribus, quos in neque voluptatibus totam vitae similique eum cumque. Quidem adipisci reiciendis vero provident deleniti sit, consequuntur! Eveniet, vel, tempore omnis reiciendis eius consequatur ullam in a. Quis voluptatibus veritatis ducimus beatae quas, repellat expedita quaerat iste eligendi iusto vero dignissimos magni quidem laboriosam quia maiores eveniet.</p>
									<br><h5 class="title2">ASSUNTOS</h5>
									<a href="">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum enim ex ut et, atque, numquam sunt corporis. Odio veniam pariatur vero animi ex, ipsa beatae facilis ullam dolores voluptatum natus.</a>
								</div>

							</div>
						</div>
					<?php } ?>
				</div>
				<?php include 'colunaDir.php' ?>
			</div>

			<!-- <div class="text-center">
				Página <input type="text" value="1" size="1" class="text-center"> de 10 <a href=""><i class="fas fa-angle-right fa-2x"></i></a>
			</div> -->

			<nav aria-label="Page navigation example" class="">
				<ul class="pagination justify-content-center">
					<li class="page-item disabled">
						<a class="page-link" href="#" aria-disabled="true"><i class="fas fa-angle-double-left"></i></a>
					</li>
					<li class="page-item disabled">
						<a class="page-link" href="#" tabindex="-1" aria-disabled="true"><i class="fas fa-angle-left"></i></a>
					</li>
					<li class="page-item"><a class="page-link" href="#">1</a></li>
					<li class="page-item"><a class="page-link" href="#">2</a></li>
					<li class="page-item"><a class="page-link" href="#">3</a></li>
					<li class="page-item">
						<a class="page-link" href="#"><i class="fas fa-angle-right"></i></a>
					</li>
					<li class="page-item">
						<a class="page-link" href="#"><i class="fas fa-angle-double-right"></i></a>
					</li>
				</ul>
			</nav>
		</div>
	</section>


	<!-- textarea Modal -->
	<div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Consulta Detalhada</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<code>(instance:"regional") AND ( year_cluster:("2002") AND pais_afiliacao:("^iUnited States^eEstados"))(instance:"regional") AND ( year_cluster:("2002") AND pais_afiliacao:("^iUnited States^eEstados"))(instance:"regional") AND ( year_cluster:("2002") AND pais_afiliacao:("^iUnited States^eEstados"))(instance:"regional") AND ( year_cluster:("2002") AND pais_afiliacao:("^iUnited States^eEstados"))</code>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
				</div>
			</div>
		</div>
	</div>


	<?php include 'footer.php' ?>
	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/main.js"></script>
</body>
</html>