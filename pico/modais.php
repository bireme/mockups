<!---------------------------------- Modal  Parte 1 ---------------------------------->
<div class="modal fade" id="modal" tabindex="-1" role="dialog">
	<div class="modal-dialog modal-dialog-centered modal-xl" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Select DeCS/MeSH Descriptor</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form action="">

					<ul class="nav nav-tabs" id="myTab" role="tablist">
						<li class="nav-item">
							<a class="nav-link active" id="opcao1-tab" data-toggle="tab" href="#opcao1" role="tab" aria-controls="opcao1" aria-selected="true">Dengue <span class="badge badge-info">4</span></a>
						</li>
						<li class="nav-item">
							<a class="nav-link" id="opcao2-tab" data-toggle="tab" href="#opcao2" role="tab" aria-controls="opcao2" aria-selected="false">Zica <span class="badge badge-info">5</span></a>
						</li>
						<li class="nav-item">
							<a class="nav-link" id="opcao3-tab" data-toggle="tab" href="#opcao3" role="tab" aria-controls="opcao3" aria-selected="false">Chicungunha <span class="badge badge-info">2</span></a>
						</li>
					</ul>
					<div class="tab-content" id="myTabContent">
						<div class="tab-pane fade show active" id="opcao1" role="tabpanel" aria-labelledby="opcao1-tab">
							<div class="form-group">
								<input type="checkbox" id="1"> <label for="1">Dengue</label>
							</div>
							<div class="form-group">
								<input type="checkbox" id="2"> <label for="2">Vacinas para Dengue </label>
							</div>
							<div class="form-group">
								<input type="checkbox" id="3"> <label for="3">Dengue Grave</label>
							</div>
							<div class="form-group">
								<input type="checkbox" id="4"> <label for="4">Insetos Vetores </label>
							</div>
						</div>
						<div class="tab-pane fade" id="opcao2" role="tabpanel" aria-labelledby="opcao2-tab">
							<div class="form-group">
								<input type="checkbox" id="5"> <label for="5">Zica</label>
							</div>
							<div class="form-group">
								<input type="checkbox" id="6"> <label for="6">Zica Vírus</label>
							</div>
							<div class="form-group">
								<input type="checkbox" id="7"> <label for="7">Diagnostico Zica</label>
							</div>
							<div class="form-group">
								<input type="checkbox" id="8"> <label for="8">Infecção pelo Zica Vírus </label>
							</div>
						</div>
						<div class="tab-pane fade" id="opcao3" role="tabpanel" aria-labelledby="opcao3-tab">
							<div class="form-group">
								<input type="checkbox" id="9"> <label for="9">Vírus Chikungunya</label>
							</div>
							<div class="form-group">
								<input type="checkbox" id="10"> <label for="10">Febre de Chikungunya</label>
							</div>
						</div>
					</div>
				</form>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-block btn-primary" data-toggle="modal" data-target="#modal2" data-dismiss="modal">Continue</button>
			</div>
		</div>

	</div>
</div>





<!--------------------------------Modal Parte 2---------------------------------->
<div class="modal fade" id="modal2" tabindex="-1" role="dialog">
	<div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Select DeCS/MeSH Synonym</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body" style="overflow-y: auto!important; max-height: 100%!important;">
				<form action="">
					<ul class="nav nav-tabs" id="myTab2" role="tablist">
						<li class="nav-item">
							<a class="nav-link active" id="opcao3-1-tab" data-toggle="tab" href="#opcao3-1" role="tab" aria-controls="opcao1" aria-selected="true">Vacinas para Dengue <span class="badge badge-info">1</span></a>
						</li>
						<li class="nav-item">
							<a class="nav-link" id="opcao3-2-tab" data-toggle="tab" href="#opcao3-2" role="tab" aria-controls="opcao2" aria-selected="false">Zica Vírus <span class="badge badge-info">3</span></a>
						</li>
						<li class="nav-item">
							<a class="nav-link" id="opcao3-3-tab" data-toggle="tab" href="#opcao3-3" role="tab" aria-controls="opcao3" aria-selected="false">Febre de Chikungunya <span class="badge badge-info">2</span></a>
						</li>
					</ul>
					<div class="tab-content" id="myTab2Content2">
						<div class="tab-pane fade show active" id="opcao3-1" role="tabpanel" aria-labelledby="opcao3-1-tab">
							<table class="tableModal table-hover">
								<tr>
									<td valign="top"><input type="checkbox" id="1b"></td>
									<td><label for="1b" >Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum reiciendis impedit ad tenetur at ab animi dolore odit quidem delectus officia, quo corporis sequi, commodi fugiat totam maxime cupiditate. Nemo!</label></td>
								</tr>
							</table>
						</div>
						<div class="tab-pane fade" id="opcao3-2" role="tabpanel" aria-labelledby="opcao3-2-tab">
							<table class="tableModal table-hover">
								<tr>
									<td valign="top"><input type="checkbox" id="2b"></td>
									<td><label for="2b" >Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum reiciendis impedit ad tenetur at ab animi dolore odit quidem delectus officia, quo corporis sequi, commodi fugiat totam maxime cupiditate. Nemo!</label></td>
								</tr>
								<tr>
									<td valign="top"><input type="checkbox" id="3b"></td>
									<td><label for="3b" >Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus, magni.</label></td>
								</tr>
								<tr>
									<td valign="top"><input type="checkbox" id="4b"></td>
									<td><label for="4b" >Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam voluptates repudiandae in, eos possimus similique non magnam dignissimos quo aperiam!</label></td>
								</tr>

							</table>
						</div>
						<div class="tab-pane fade" id="opcao3-3" role="tabpanel" aria-labelledby="opcao3-3-tab">
							<table class="tableModal table-hover">
								<tr>
									<td valign="top"><input type="checkbox" id="5b"></td>
									<td><label for="5b" >Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum reiciendis impedit ad tenetur at ab animi dolore odit quidem delectus officia, quo corporis sequi, commodi fugiat totam maxime cupiditate. Nemo!</label></td>
								</tr>
								<tr>
									<td valign="top"><input type="checkbox" id="6b"></td>
									<td><label for="6b" >Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus, magni.</label></td>
								</tr>
							</table>
						</div>
					</div>
				</form>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-block btn-primary" data-toggle="modal" data-target="#modal3" data-dismiss="modal">Continue</button>
			</div>
		</div>
	</div>
</div>





<!-------------------------------- Modal  Parte 3 ---------------------------------->
<div class="modal fade" id="modal3" tabindex="-1" role="dialog">
	<div class="modal-dialog modal-dialog-centered modal-xl" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Free Keywords</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="form-group">
					<label for="">Improve Search</label>
					<textarea name="" id="" cols="30" rows="10" class="form-control" placeholder="Ex: tw:(chicungunha) AND (instance:'regional')"></textarea>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-block btn-primary"  data-dismiss="modal">Continue</button>
			</div>
		</div>
	</div>
</div>