
<?php
include "cabecalho.php";
include "menu.php";
require_once "classealuno.php";

$aluno = new aluno;

$r = $aluno->mostrartodos();

if(!isset($_GET['id'])){

	echo '<script>location.href="index.php";</script>';
}
else
{
	$id = $_GET['id'];
}

?>

<title>Buscar aluno</title>

<body style="padding-top:60px; padding-bottom: 30px;">
	<style>
		#dev-table{
			width:100%!important;
		}
	</style>
	<section style="width:80%" class="container">
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

															switch ($id) {
																case 2: //Aluno
																	echo "<td class='text-center'>
																				<a class='btn btn-info btn-xs' href='alteraraluno.php?id=".$linha['idaluno']."'>
																				<span class='glyphicon glyphicon-edit'></span> Alterar</a>

																				<a class='btn btn-danger btn-xs' onClick='deletaraluno(2,".$linha['idaluno'].");'>
																				<span class='glyphicon glyphicon-remove'></span> Deletar</a>
																			</td>";																	
																break;
																case 3: // avaliacaopedagogica
																	echo "<td class='text-center'>
																				<a class='btn btn-success btn-xs' href='resultadobusca.php?id=3&idaluno=".$linha['idaluno']."'>
																				<span class='glyphicon glyphicon-edit'></span> Selecionar</a>														
																			</td>";																	
																break;	
																case 4: // parecerpsicologico
																	echo "<td class='text-center'>
																				<a class='btn btn-success btn-xs' href='resultadobusca.php?id=4&idaluno=".$linha['idaluno']."'>
																				<span class='glyphicon glyphicon-edit'></span> Selecionar</a>														
																			</td>";																	
																break;
																case 5: // planoterapeuticoindividual
																	echo "<td class='text-center'>
																				<a class='btn btn-success btn-xs' href='resultadobusca.php?id=5&idaluno=".$linha['idaluno']."'>
																				<span class='glyphicon glyphicon-edit'></span> Selecionar</a>														
																			</td>";																	
																break;
																case 6: // planoterapeuticopsicologico
																	echo "<td class='text-center'>
																				<a class='btn btn-success btn-xs' href='resultadobusca.php?id=6&idaluno=".$linha['idaluno']."'>
																				<span class='glyphicon glyphicon-edit'></span> Selecionar</a>														
																			</td>";																	
																break;	
																case 7: // relatorioobservacao
																	echo "<td class='text-center'>
																				<a class='btn btn-success btn-xs' href='resultadobusca.php?id=7&idaluno=".$linha['idaluno']."'>
																				<span class='glyphicon glyphicon-edit'></span> Selecionar</a>														
																			</td>";																	
																break;	
																case 8: // triagempsicologica
																	echo "<td class='text-center'>
																				<a class='btn btn-success btn-xs' href='resultadobusca.php?id=8&idaluno=".$linha['idaluno']."'>
																				<span class='glyphicon glyphicon-edit'></span> Selecionar</a>														
																			</td>";																	
																break;															
																default:
																	echo '<script>location.href="index.php";</script>';
																break;
															}
															
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




<script>

if(window.location.href == "http://localhost/siga/buscaraluno.php?id=2&deletou=1"){
	swal("Excluido!", "O registro foi excluido com sucesso!", "success");
 };

  if(window.location.href == "http://localhost/siga/buscaraluno.php?id=3&deletou=1"){
	swal("Excluido!", "O registro foi excluido com sucesso!", "success");
 };

  if(window.location.href == "http://localhost/siga/buscaraluno.php?id=4&deletou=1"){
	swal("Excluido!", "O registro foi excluido com sucesso!", "success");
 };
  if(window.location.href == "http://localhost/siga/buscaraluno.php?id=5&deletou=1"){
	swal("Excluido!", "O registro foi excluido com sucesso!", "success");
 };
  if(window.location.href == "http://localhost/siga/buscaraluno.php?id=6&deletou=1"){
	swal("Excluido!", "O registro foi excluido com sucesso!", "success");
 };
  if(window.location.href == "http://localhost/siga/buscaraluno.php?id=7&deletou=1"){
	swal("Excluido!", "O registro foi excluido com sucesso!", "success");
 };
  if(window.location.href == "http://localhost/siga/buscaraluno.php?id=8&deletou=1"){
	swal("Excluido!", "O registro foi excluido com sucesso!", "success");
 };

</script>



</body>
<?php  
include "rodape.php";
?>
