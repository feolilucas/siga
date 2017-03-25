
<?php
include "cabecalho.php";
include "menu.php";
require_once "classealuno.php";

$aluno = new aluno;

$r = $aluno->mostrartodos();
?>

<title>Buscar aluno</title>

<body style="padding-top:60px;">
	<style>
		#dev-table{
			width:100%!important;
		}
	</style>
	<section style="width:60%" class="container">
		<div>
			<!-- Nav tabs -->
			<ul class="nav nav-tabs " role="tablist">
				<li role="presentation" class="active"><a href="#bucaraluno" aria-controls="buscaraluno" role="tab" data-toggle="tab">Buscar Aluno</a></li>
			</ul>
			<!-- Tab panes -->
			<div class="tab-content">
				<div role="tabpanel" class="tab-pane active form-group panel panel-body" id="avaliacaopedagogica" style="border-color: #00688B;">
					<div style="padding-top:20px;">
						<form class="form-horizontal" action="" method="POST" data-toggle="validator">
							<div class="form-group panel panel-body">
								<fieldset>
									<div style="padding-left: 5%; padding-right: 5%;">

										<div class="row">
											<div class="col-md-12 form-group">
												<div class="row">
													<div class="panel-body col-md-5 form-group">
														<input type="text" class="form-control" id="dev-table-filter" data-action="filter" data-filters="#dev-table" placeholder="Filtrar alunos" />
													</div>
													<div class="panel-body col-md-5 form-group">
														<button type="button" class="btn-toggle btn btn-danger" onclick="location.href='http://localhost/siga/';">Cancelar</button>
													</div>
												</div>
												<table class="table table-hover" id="dev-table">
													<thead>
														<tr>
															<th>ID</th>
															<th>Nome</th>
															<th>Data de nascimento</th>
															<th>CPF</th>
															<th>RG</th>
															<th class="text-center">Ações</th>
														</tr>
													</thead>
													<tbody>
														<?php
														foreach($r as $linha)
														{
															echo "<tr>";
															echo "<td>".$linha['idaluno']."</td>";
															echo "<td>".$linha['nome']."</td>";
															echo "<td>".$linha['datanascimento']."</td>";
															echo "<td>".$linha['cpf']."</td>";
															echo "<td>".$linha['rg']."</td>"; 
															echo "<td class='text-center'><a class='btn btn-success btn-xs' href='#'><span class='glyphicon glyphicon-plus'></span>Selecionar</a></td>";
															echo "</tr>";
														}
														?>
													</tbody>
												</table>
											</div>
										</div>
									</div>
								</fieldset>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
</body>
<?php  
include "rodape.php";
?>
