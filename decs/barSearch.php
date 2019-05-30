<section id="busca">
	<div class="container" id="">
		<div class="headerSearch" >
			<form action="resultado.php">
				<div class="row">
					<div class="col-md-3 selectBoxSearch">
						<select name="" id="" class="formSelect">
							<option>Descritor Exato</option>
							<option>Palavra ou Termo</option>
							<option>Índice Alfabético </option>
							<option>Índice Hierárquico</option>
							<option selected="">Índice Permutado </option>
						</select>
					</div>
					<div class="col-md-7 inputBoxSearch">
						<input type="text" placeholder="Buscar" id="fieldSearch" autocomplete="off">
					</div>
					<div class="col-md-2 btnBoxSearch">
						<button type="submit">
							<i class="fas fa-search"></i>
							<span class="textBTSearch"> BUSCAR</span>
						</button>
					</div>
				</div>
			</div>
			<div class="col-md-12" id="searchLanguage">
				<label for="searchPT"><input type="radio" name="idioma" id="searchPT" checked> Português </label>
				<label for="searchES"><input type="radio" name="idioma" id="searchES"> Espanhol </label>
				<label for="searchEN"><input type="radio" name="idioma" id="searchEN"> Inglês </label>
			</div>
		</form>
	</div>
</section>