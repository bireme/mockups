<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
	<link rel="stylesheet" href="css/style.css">
	<title>Padrões BVS</title>
</head>
<body>
	<header id="header">
		<div class="container">
			<div class="row">
				<div class="col-md-2" id="logo-bvs">
					<a href=""><img src="http://logos.bireme.org/img/pt/bvs_color.svg" alt="" class="img-fluid"></a>
				</div>
				<div class="col-md-6">
					<h1>Nome</h1>	
				</div>
				<div>
					widgets
				</div>
			</div>
		</div>
	</header>
	<nav id="nav" class="navbar navbar-expand-lg bg-body-tertiary">
		<div class="container">
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav me-auto mb-2 mb-lg-0">
					<li class="nav-item">
						<a class="nav-link active" aria-current="page" href="#">Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Link</a>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
							Dropdown
						</a>
						<ul class="dropdown-menu">
							<li><a class="dropdown-item" href="#">Action</a></li>
							<li><a class="dropdown-item" href="#">Another action</a></li>
							<li><hr class="dropdown-divider"></li>
							<li><a class="dropdown-item" href="#">Something else here</a></li>
						</ul>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	<section id="search">
		<div class="container">
			<div class="row">
				<div class="col-md-8 offset-md-2">
					<div class="input-group mb-3 input-group-lg mt-3">
						<input type="text" class="form-control" name="q" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg">
						<button class="btn btn-primary" type="submit" id=""><i class="bi bi-search"></i></button>
					</div>
					<div id="search-itens">
						<span >Buscar em:</span>
						<label for="search-op1">
							<input type="radio" name="engine" checked="checked" value="op1" id="search-op1"> Base de Dados
						</label>
						<label for="search-op2">
							<input type="radio" name="engine" value="op2" id="search-op2">Todas as Bases
						</label>
					</div>
				</div>
			</div>
		</div>
	</section>
	<main id="main_container">
		<div class="container">
			<h1>Título 1</h1>
			<h2>Título 2</h2>
			<h3>Título 3</h3>
			<h4>Título 4</h4>
			<h5>Título 5</h5>
			<h6>Título 6</h6>
			<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa quisquam, impedit odit. Atque aperiam necessitatibus eum unde, voluptate laborum, accusamus, nihil mollitia earum, tenetur iste repellat! Maxime explicabo ducimus, culpa.</p>
			<hr>
			<h2>Lista</h2>
			<div class="row">
				<div class="col-md-6">
					<ul>
						<li>Item</li>
						<li>Item</li>
						<li>Item</li>
						<li>Item</li>
						<li>
							<ul>
								<li>Sub-item</li>
								<li>Sub-item</li>
								<li>Sub-item</li>
							</ul>
						</li>
					</ul>	
				</div>
				<div class="col-md-6">
					<ol>
						<li>Item</li>
						<li>Item</li>
						<li>Item</li>
						<li>Item</li>
					</ol>	
				</div>
			</div>
		</div>
	</main>


	<footer id="footer">
		<div class="container">
			<div class="row">
				<div class="col-md-8">
					<p>A BVS é um produto colaborativo, coordenado pela BIREME/OPAS/OMS. Como biblioteca, oferece acesso abrangente à informação científica e técnica em saúde. A BVS coleta, indexa e armazena citações de documentos publicados por diversas organizações. A inclusão de qualquer artigo, documento ou citação na coleção da BVS não implica endosso ou concordância da BIREME/OPAS/OMS com o seu conteúdo.</p>
				</div>
				<div class="col-md-4 text-end">
					<img id="logo-footer" src="img/logo-footer.svg" alt="">
				</div>
			</div>
		</div>
	</footer>
	<section id="powered">
		<div class="container text-center">
			<img src="img/powered.png" alt=""> <br>	
			<small>© Todos os direitos são reservados</small>
		</div>
	</section>
	<button id="btnBuscarPorVoz">Buscar por Voz</button>
<input type="text" id="termoBusca" name="termoBusca">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
	<script>
  document.addEventListener('DOMContentLoaded', function() {
    const btnBuscarPorVoz = document.getElementById('btnBuscarPorVoz');
    const termoBusca = document.getElementById('termoBusca');

    // Verifica se o navegador suporta a API Web Speech
    if ('webkitSpeechRecognition' in window) {
      const recognition = new webkitSpeechRecognition();

      // Configurações da API
      recognition.continuous = false;
      recognition.interimResults = false;
      recognition.lang = 'pt-BR'; // Define o idioma (pode ser ajustado)

      // Evento disparado quando a fala é reconhecida
      recognition.onresult = function(event) {
        const resultado = event.results[0][0].transcript;
        termoBusca.value = resultado; // Preenche o campo de entrada com a fala
      };

      // Evento disparado quando ocorre um erro
      recognition.onerror = function(event) {
        console.error('Erro na API Web Speech:', event.error);
      };

      // Evento disparado quando o usuário clica no botão
      btnBuscarPorVoz.addEventListener('click', function() {
        recognition.start(); // Inicia o reconhecimento de fala
      });
    } else {
      console.error('Seu navegador não suporta a API Web Speech.');
    }
  });
</script>

</body>
</html>