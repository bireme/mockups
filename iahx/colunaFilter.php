<!-- Esquerda -->
<div class="col-12 d-print-none"  id="btnFiltraM">
	<i class="fas fa-filter"></i> ADICIONAR FILTROS
</div>
<div class="col-md-3 d-print-none" id="filterEsq">
	<div class="btnFilter"  data-toggle="collapse" data-target="#filtrar">
		<span>ADICIONAR FILTROS</span>
		<!-- <span class="float-right"><small>Configurações</small> <i class="fas fa-cog"></i></span> -->
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
		<hr>
		<button class="btn btn-dark btn-sm btn-block float-right">Aplicar</button>
		<div class="clearfix"></div>

	</div>
	<button type="submit" class="btnBlueM" id="btnFiltroD">Filtrar</button>
	<div class="box2">
		<div class="boxCheck">
			<div class="inputCheck1"><input type="checkbox" id="t1"></div>
			<label class="labelCheck1" for="t1">Texto Completo</label>
		</div>
	</div>
	<div>
		<div class="titleBox2" data-toggle="collapse" data-target="#colecoes">
			Coleções <span class="acordionIcone float-right fas fa-angle-up"></span>
		</div>
		<div class="box2 collapse show" id="colecoes" >
			<div class="boxCheck">
				<div class="inputCheck1"><input type="checkbox" id="check1"></div>
				<label class="labelCheck1" for="check1"><a href="">Bases de dados internacionais (27252844)</a></label>
			</div>
			<div class="boxCheck">
				<div class="inputCheck1"><input type="checkbox" id="check2"></div>
				<label class="labelCheck1" for="check2"><a href="">Bases de dados de organismos internacionais (250634)</a></label>
			</div>
			<div class="boxCheck">
				<div class="inputCheck1"><input type="checkbox" id="check3"></div>
				<label class="labelCheck1" for="check3"><a href="">Bases de dados especializadas (108170)</a></label>
			</div>
			<div class="boxCheck">
				<div class="inputCheck1"><input type="checkbox" id="check4"></div>
				<label class="labelCheck1" for="check4"><a href="">Bases de dados nacionais (574941)</a></label>
			</div>
			<div class="boxCheck">
				<div class="inputCheck1"><input type="checkbox" id="check5"></div>
				<label class="labelCheck1" for="check5"><a href="">Recursos educacionais (14427)</a></label>
			</div>
		</div>
	</div>

	<!-- ------------------------------------------- -->
	<div>
		<div class="titleBox2" data-toggle="collapse" data-target="#bases">
			Base de Dados <span class="acordionIcone float-right fas fa-angle-up"></span>
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
				Outros Filtros <?php echo $i; ?> <span class="acordionIcone float-right fas fa-angle-down"></span>
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

	<!-- ------------------------------------------- -->
	<div>
		<div class="titleBox2" data-toggle="collapse" data-target="#range_year">
			Intervalo de anos <span class="acordionIcone float-right fas fa-angle-up"></span>
		</div>

		<div class="box2 collapse show" id="range_year" >
			<div class="boxCheck">
				<div class="inputCheck1"><input type="radio" id="five" name="years"></div>
				<label class="labelCheck1" for="five">Last 5 years</label>
			</div>
			<div class="boxCheck">
				<div class="inputCheck1"><input type="radio" id="ten" name="years"></div>
				<label class="labelCheck1" for="ten">Last 10 years</label>
			</div>
			
			<div class="form-row">
				<div class="col-4">
					<input id="range_year_start" class="form-control" type="text" name="range_year_start" value="">
				</div>
				<div class="col-4">
					<input id="range_year_end" class="form-control" type="text" name="range_year_end" value="">
				</div>
				<div class="col-2">
					<a href="" class="btnFilterDate"><i class="fas fa-arrow-right"></i></a>
				</div>
			</div>
		</div>
	</div>
	<div id="aplicarFiltro">
		<a href="">APLICAR FILTROS SELECIONADOS</a>
	</div>

</div>


