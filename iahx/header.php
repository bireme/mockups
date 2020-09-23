<!-- Topo -->
<header id="header" class="d-print-none">
	<div class="container">
		<div class="row">
			<div class="col-md-3" id="logo">
				<a href="index.php"><img src="img/BVS.svg" alt="" class="img-fluid"></a>
			</div>
			<div class="col-md-9">
				<div id="titleMain" class="float-left">
					<div class="titleMain1">Portal Regional da BVS</div>
					<div class="titleMain2">Informação e Conhecimento para a Saúde</div>
				</div>
				<div class="lang">
					<ul>
						<li><a href="" class="active">português</a></li>
						<li><a href="">español</a></li>
						<li><a href="">english</a></li>
						<li><a href="">français</a></li>
					</ul>
				</div>
				<div class="headerBt">
					<a href="" class="btnBlue">Localizar descritor de assunto</a>
					<!-- <a href="" class="btnBlue" title="Ajuda"><i class="fas fa-question"></i></a> -->
					<a href="searchadvanced.php" class="btnBlue">Busca Avançada</a>
					<a href="#modalWizard" data-toggle="modal" data-target=".bd-example-modal-lg" class="btnBlue" title="Busca de evidências guiada">EVID@Easy</a>
				</div>
				<div class="headerSearch" >
					<form action="search.php">
						<div class="row">
							<div class="col-md-4 selectBoxSearch">
								<select class="formSelect">
									<option>Título, resumo, assunto</option>
									<option>Título</option>
									<option>Autor</option>
									<option>Descritor de assunto</option>
									<option>Resumo</option>
								</select>
							</div>
							<div class="col-md-6 inputBoxSearch">
								<input type="text" id="q" placeholder="">
								<a id="speakBtn" href="#"><i class="fas fa-microphone-alt"></i></a>
							</div>
							<div class="col-md-2 btnBoxSearch">
								<button type="submit">
									<i class="fas fa-search"></i>
									<span class="textBTSearch"> BUSCAR</span>
								</button>
							</div>
						</div>
					</form>
				</div>
				<a href="javascript:void(0)" id="btSidebar">Sidebar</a> | <a href="#modalWizard" data-toggle="modal" data-target=".bd-example-modal-lg">Modal</a>
			</div>
		</div>
	</div>
</header>