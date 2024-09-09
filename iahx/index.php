<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="UTF-8">
	<meta name="autor" content=" BIREME | OPAS | OMS - > Márcio Alves">
	<meta name="keywords" content="Inserir Palavras Chaves">
	<meta name="description" content="Inserir Descrição">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" href="http://pesquisa.teste.bvsalud.org/portal/static/regional/image/favicon.ico">
	<title>Portal Regional da BVS</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/acessibilidade.css">
	<link rel="stylesheet" href="css/feedback.css">
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="css/sidebar.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,900" rel="stylesheet">
</head>
<body>
	<?php include 'topAcessibility.php'?>
	<?php include 'sidebar.php'?>
	<?php include 'header2.php' ?>
	<?php include 'info.php' ?>
	<section class="container">
		<nav>
			<ol class="breadcrumb">
				<li class="breadcrumb-item">
					<a href="http://bvsalud.org/">Home</a>
				</li>

				<li class="breadcrumb-item">
					<a href="https://pesquisa2.teste.bvsalud.org/portal/?lang=pt">Pesquisa</a>
				</li>

				<li class="breadcrumb-item active" aria-current="page">
					(38.166.589)
				</li>
			</ol>
		</nav>
	</section>
	<section class="">
		<div class="container">
		<ul class="nav nav-tabs" id="tabOptions" role="tablist">
    <!-- Tabs -->
    <li class="nav-item" role="presentation" style="position: relative;">
        <button class="nav-link active" id="tab-1" data-toggle="tab" data-target="#lilac-plus" type="button" role="tab" aria-controls="lilac-plus" aria-selected="true">
            <b>
                <span class="highlight-text">LILACS Plus</span>
            </b>
            <br>
            Literatura científica e técnica da América Latina e Caribe
            <br><br>
            <small>9.385</small>
        </button>
        <!-- Ícone de informação com link fora do botão -->
        <a href="https://bvsalud.org/produtos-e-servicos/#menu-lilacs" target="_blank" style="position: absolute; top: 10px; right: 10px; text-decoration:none;">
            <i class="fas fa-info-circle"></i>
        </a>
    </li>
				<li class="nav-item" role="presentation">
					<button class="nav-link" id="tab-2" data-toggle="tab" data-target="#all-lit" type="button" role="tab" aria-controls="all-lit" aria-selected="false"><b>Literatura Global</b> <br> 
						Coleção de bases de dados bibliográficas da BVS<br><br><small>54.661</small> </button>
				</li>
			</ul>

			<div class="tab-content" id="tabResult"> <!-- Inicio -->
				<div class="tab-pane fade show active" id="lilac-plus" role="tabpanel" aria-labelledby="lilac-plus-tab">
					<div class="row">
						<div class="col-md-7 offset-md-3 d-print-none">
							<div class="row padding1">
								<div class="col-md-4">
									<!-- Organizar por: -->
									<select name="ordem" id="ordem" class="selectOrder">
										<option value="">Mais Recentes</option>
										<option value="">Últimos</option>
										<option value="">Relevância</option>
									</select>
								</div>
								<div class="col-md-4 text-center">
									<small>	Mostrar:</small> <a href=""><b>20</b></a> | <a href="">50</a> | <a href="">100</a>
								</div>
								<div class="col-md-4 text-right resultM"><small>Resultados <b>1-20</b> de <b>9.385</b></small></div>
							</div>
						</div>
						<?php  include 'colunaFilter.php' ?>
						<!-- Centro -->
						<div class="col-md-7 d-print-block" id="main_container">
							<?php for ($i=0; $i < 15; $i++) { ?>
								<div class="box1">
									<div class="inputCheck1 d-print-none"><input type="checkbox"><small><?=$i; ?></small></div>
									<div class="textArt">
										<div class="titleArt"><a href="interna.php">Methamphetamine-associated difficulties in cognitive control allocation may normalize after abstinence.</a></div>
										<div class="author"><a href="">Stock</a>, <a href="">Ann-Kathrin</a>; <a href="">Rädle</a>, <a href="">Marion</a>; <a href="">Beste</a>, <a href="">Christian</a>.</div>
										<div class="reference"><i><a href="">Prog Neuropsychopharmacol Biol Psychiatry;</a></i> <b> 88: 41-52, 2019 Jan 10.</b></div>
										<div class="dataArticle">Artigo em Inglês | <a href="">MEDLINE</a> | ID: mdl-29953935</div>
										<!-- Resumo -->
										<div class="resumo collapse" >
											<br><h5 class="title2">RESUMO</h5>
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
						<a class="page-link" href="#" tabindex="1" aria-disabled="true"><i class="fas fa-angle-left"></i></a>
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
		<div class="tab-pane fade" id="all-lit" role="tabpanel" aria-labelledby="all-lit-tab">
			<div class="row">
						<div class="col-md-7 offset-md-3 d-print-none">
							<div class="row padding1">
								<div class="col-md-4">
									<!-- Organizar por: -->
									<select name="ordem" id="ordem" class="selectOrder">
										<option value="">Mais Recentes</option>
										<option value="">Últimos</option>
										<option value="">Relevância</option>
									</select>
								</div>
								<div class="col-md-4 text-center">
									<small>	Mostrar:</small> <a href=""><b>20</b></a> | <a href="">50</a> | <a href="">100</a>
								</div>
								<div class="col-md-4 text-right resultM"><small>Resultados <b>1-20</b> de <b>54.661</b></small></div>
							</div>
						</div>
						<?php  include 'colunaFilter2.php' ?>
						<!-- Centro -->
						<div class="col-md-7 d-print-block" id="main_container">
							<?php for ($i=0; $i < 15; $i++) { ?>
								<div class="box1">
									<div class="inputCheck1 d-print-none"><input type="checkbox"><small><?=$i; ?></small></div>
									<div class="textArt">
										<div class="titleArt"><a href="interna.php">A pesar del récord de casos de dengue, América Latina y el Caribe mantiene baja la tasa de letalidad.</a></div>
										<div class="author"><a href="">Stock</a>, <a href="">Ann-Kathrin</a>; <a href="">Rädle</a>, <a href="">Marion</a>; <a href="">Beste</a>, <a href="">Christian</a>.</div>
										<div class="reference"><i><a href="">Prog Neuropsychopharmacol Biol Psychiatry;</a></i> <b> 88: 41-52, 2019 Jan 10.</b></div>
										<div class="dataArticle">Artigo em Inglês | <a href="">MEDLINE</a> | ID: mdl-29953935</div>
										<!-- Resumo -->
										<div class="resumo collapse" >
											<br><h5 class="title2">RESUMO</h5>
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
						<a class="page-link" href="#" tabindex="1" aria-disabled="true"><i class="fas fa-angle-left"></i></a>
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
		<div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
			<div class="row">
						<div class="col-md-7 offset-md-3 d-print-none">
							<div class="row padding1">
								<div class="col-md-4">
									<!-- Organizar por: -->
									<select name="ordem" id="ordem" class="selectOrder">
										<option value="">Mais Recentes</option>
										<option value="">Últimos</option>
										<option value="">Relevância</option>
									</select>
								</div>
								<div class="col-md-4 text-center">
									<small>	Mostrar:</small> <a href=""><b>20</b></a> | <a href="">50</a> | <a href="">100</a>
								</div>
								<div class="col-md-4 text-right resultM"><small>Resultados <b>1-20</b> de <b>804</b></small></div>
							</div>
						</div>
						<?php  include 'colunaFilter3.php' ?>
						<!-- Centro -->
						<div class="col-md-7 d-print-block" id="main_container">
							<?php for ($i=0; $i < 15; $i++) { ?>
								<div class="box1">
									<div class="inputCheck1 d-print-none"><input type="checkbox"><small><?=$i; ?></small></div>
									<div class="textArt">
										<div class="titleArt"><a href="interna.php">Saúde da capital investe em ações de nebulização (fumacê) contra a dengue.</a></div>
										<div class="author"><a href="">Stock</a>, <a href="">Ann-Kathrin</a>; <a href="">Rädle</a>, <a href="">Marion</a>; <a href="">Beste</a>, <a href="">Christian</a>.</div>
										<div class="reference"><i><a href="">Prog Neuropsychopharmacol Biol Psychiatry;</a></i> <b> 88: 41-52, 2019 Jan 10.</b></div>
										<div class="dataArticle">Artigo em Inglês | <a href="">MEDLINE</a> | ID: mdl-29953935</div>
										<!-- Resumo -->
										<div class="resumo collapse" >
											<br><h5 class="title2">RESUMO</h5>
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
						<a class="page-link" href="#" tabindex="1" aria-disabled="true"><i class="fas fa-angle-left"></i></a>
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
	</div>
</div>
</section>


<!-- textarea Modal -->
<div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Consulta Detalhada</h5>
				<button name="Fechar" type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<code>(instance:"regional") AND ( year_cluster:("2002") AND pais_afiliacao:("^iUnited States^eEstados"))(instance:"regional") AND ( year_cluster:("2002") AND pais_afiliacao:("^iUnited States^eEstados"))(instance:"regional") AND ( year_cluster:("2002") AND pais_afiliacao:("^iUnited States^eEstados"))(instance:"regional") AND ( year_cluster:("2002") AND pais_afiliacao:("^iUnited States^eEstados"))</code>
			</div>
			<div class="modal-footer">
				<button name="fechar" type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
			</div>
		</div>
	</div>
</div>
<?php include 'footer.php' ?>
<?php include 'feedback.php' ?>
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/cookie.js"></script>
<script src="js/accessibility.js"></script>
<script src="js/main.js"></script>
<script src="js/sidebar.js"></script>
</body>
</html>