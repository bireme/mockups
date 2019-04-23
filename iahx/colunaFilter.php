<!-- Esquerda -->
<div class="col-12"  id="btnFiltraM">
	<i class="fas fa-filter"></i> FILTRAR
</div>
<div class="col-md-3" id="filterEsq">
	<div class="btnFilter"  data-toggle="collapse" data-target="#filtrar">
		<span>FILTRAR</span>
		<span class="float-right"><small>Configurações</small> <i class="fas fa-cog"></i></span>
		<div class="clearfix"></div>
	</div>
	<div class="box2 collapse" id="filtrar" >
		<div class="boxCheck">
			<div class="inputCheck1"><input type="checkbox" id="f1"></div>
			<label class="labelCheck1" for="f1">Texto completo</label>
		</div>
		<div class="boxCheck">
			<div class="inputCheck1"><input type="checkbox" id="f2"></div>
			<label class="labelCheck1" for="f2">Coleções</label>
		</div>
		<div class="boxCheck">
			<div class="inputCheck1"><input type="checkbox" id="f3"></div>
			<label class="labelCheck1" for="f3">Base da dados</label>
		</div>
		<div class="boxCheck">
			<div class="inputCheck1"><input type="checkbox" id="f4"></div>
			<label class="labelCheck1" for="f4">Assunto principal</label>
		</div>
		<div class="boxCheck">
			<div class="inputCheck1"><input type="checkbox" id="f5"></div>
			<label class="labelCheck1" for="f5">Tipo de estudo</label>
		</div>
		<div class="boxCheck">
			<div class="inputCheck1"><input type="checkbox" id="f6"></div>
			<label class="labelCheck1" for="f6">Aspecto clínico</label>
		</div>
		<div class="boxCheck">
			<div class="inputCheck1"><input type="checkbox" id="f7"></div>
			<label class="labelCheck1" for="f7">Limite</label>
		</div>
		<div class="boxCheck">
			<div class="inputCheck1"><input type="checkbox" id="f8"></div>
			<label class="labelCheck1" for="f8">País/Região como assunto</label>
		</div>
		<div class="boxCheck">
			<div class="inputCheck1"><input type="checkbox" id="f9"></div>
			<label class="labelCheck1" for="f9">Idioma</label>
		</div>
		<div class="boxCheck">
			<div class="inputCheck1"><input type="checkbox" id="f10"></div>
			<label class="labelCheck1" for="f10">Ano de publicação</label>
		</div>
		<div class="boxCheck">
			<div class="inputCheck1"><input type="checkbox" id="f11"></div>
			<label class="labelCheck1" for="f11">Tipo de documento</label>
		</div>
		<div class="boxCheck">
			<div class="inputCheck1"><input type="checkbox" id="f12"></div>
			<label class="labelCheck1" for="f12">Revista</label>
		</div>
		<div class="boxCheck">
			<div class="inputCheck1"><input type="checkbox" id="f13"></div>
			<label class="labelCheck1" for="f13">Assunto da revista</label>
		</div>
		<div class="boxCheck">
			<div class="inputCheck1"><input type="checkbox" id="f14"></div>
			<label class="labelCheck1" for="f14">País de aflição</label>
		</div>
	</div>
	<a href="" class="btnBlueM" id="btnFiltroD">FILTRAR</a>
	<div class="box2">
		<div class="boxCheck">
			<div class="inputCheck1"><input type="checkbox" id="t1"></div>
			<label class="labelCheck1" for="t1">Texto Completo</label>
		</div>
	</div>
	<div>
		<div class="titleBox2" data-toggle="collapse" data-target="#colecoes">
			Coleções <span class="acordionIcone float-right fas fa-minus"></span>
		</div>
		<div class="box2 collapse show" id="colecoes" >
			<div class="boxCheck">
				<div class="inputCheck1"><input type="checkbox" id="check1"></div>
				<label class="labelCheck1" for="check1">Bases de dados internacionais (27252844)</label>
			</div>
			<div class="boxCheck">
				<div class="inputCheck1"><input type="checkbox" id="check2"></div>
				<label class="labelCheck1" for="check2">Bases de dados de organismos internacionais (250634)</label>
			</div>
			<div class="boxCheck">
				<div class="inputCheck1"><input type="checkbox" id="check3"></div>
				<label class="labelCheck1" for="check3">Bases de dados especializadas (108170)</label>
			</div>
			<div class="boxCheck">
				<div class="inputCheck1"><input type="checkbox" id="check4"></div>
				<label class="labelCheck1" for="check4">Bases de dados nacionais (574941)</label>
			</div>
			<div class="boxCheck">
				<div class="inputCheck1"><input type="checkbox" id="check5"></div>
				<label class="labelCheck1" for="check5">Recursos educacionais (14427)</label>
			</div>
		</div>
	</div>

	<!-- ------------------------------------------- -->
	<div>
		<div class="titleBox2" data-toggle="collapse" data-target="#bases">
			Base de Dados <span class="acordionIcone float-right fas fa-minus"></span>
		</div>
		<div class="box2 collapse show" id="bases">
			<div class="boxCheck">
				<div class="inputCheck1"><input type="checkbox" id="check6"></div>
				<label class="labelCheck1" for="check6">MEDILNE	(26390999)</label>
			</div>
			<div class="boxCheck">
				<div class="inputCheck1"><input type="checkbox" id="check7"></div>
				<label class="labelCheck1" for="check7">LILACS (849813)</label>
			</div>
			<div class="boxCheck">
				<div class="inputCheck1"><input type="checkbox" id="check8"></div>
				<label class="labelCheck1" for="check8">IBECS (171950)</label>
			</div>
			<div class="boxCheck">
				<div class="inputCheck1"><input type="checkbox" id="check9"></div>
				<label class="labelCheck1" for="check9">Lorem ipsum dolor.</label>
			</div>
		</div>
	</div>

	<!-- ------------------------------------------- -->
	<?php for ($i=1; $i < 10 ; $i++) { ?>
		<div>
			<div class="titleBox2" data-toggle="collapse" data-target="#C<?php echo $i; ?>">
				Outros Filtros <?php echo $i; ?> <span class="acordionIcone float-right fas fa-caret-down"></span>
			</div>
			<div class="box2 collapse" id="C<?php echo $i; ?>">
				<div class="boxCheck">
					<div class="inputCheck1"><input type="checkbox" id="c<?php echo $i; ?>+1"></div>
					<label class="labelCheck1" for="c<?php echo $i; ?>+1">Opção 1</label>
				</div>
				<div class="boxCheck">
					<div class="inputCheck1"><input type="checkbox" id="c<?php echo $i; ?>+2"></div>
					<label class="labelCheck1" for="c<?php echo $i; ?>+2">Opção 2</label>
				</div>
				<div class="boxCheck">
					<div class="inputCheck1"><input type="checkbox" id="c<?php echo $i; ?>+3"></div>
					<label class="labelCheck1" for="c<?php echo $i; ?>+3">Opção 3</label>
				</div>
				<div class="boxCheck">
					<div class="inputCheck1"><input type="checkbox" id="c<?php echo $i; ?>+4"></div>
					<label class="labelCheck1" for="c<?php echo $i; ?>+4">Opção 4</label>
				</div>
			</div>
		</div>
	<?php } ?>
	<div id="aplicarFiltro">
		<a href="">APLICAR FILTROS SELECIONADOS</a>
	</div>
</div>

