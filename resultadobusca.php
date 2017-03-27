<?php
include "cabecalho.php";
include "menu.php";

require_once "classepermissoes.php";
require_once "classeendereco.php";
require_once "classeusuario.php";
require_once "classealuno.php";
require_once "classeavaliacaopedagogica.php";
require_once "classeparecerpsicologico.php";
require_once "classeplanoterapeuticoindividual.php";
require_once "classeplanoterapeuticopsicologico.php";
require_once "classerelatorioobservacao.php";
require_once "classetriagempsicologica.php";


$permissoes = new permissoes;
$endereco = new endereco;
$usuario = new usuario;
$aluno = new aluno;
$avaliacaopedagogica = new avaliacaopedagogica;
$parecerpsicologico = new parecerpsicologico;
$planoterapeuticoindividual = new planoterapeuticoindividual;
$planoterapeuticopsicologico = new planoterapeuticopsicologico;
$relatorioobservacao = new relatorioobservacao;
$triagempsicologica = new triagempsicologica;

if((!isset($_GET['id'])) or (!isset($_GET['idaluno']))){

	echo '<script>location.href="index.php";</script>';
}
else
{
	$id = $_GET['id'];
	$idaluno = $_GET['idaluno'];
}

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
				<li role="presentation" class="active"><a href="#bucaraluno" aria-controls="buscaraluno" role="tab" data-toggle="tab">Resultado da Busca</a></li>
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
														<input type="text" class="form-control" id="dev-table-filter" data-action="filter" data-filters="#dev-table" placeholder="Filtrar" />
													</div>
													<div class="panel-body col-md-5 form-group">
														<button type="button" class="btn-toggle btn btn-danger" onclick="location.href='http://localhost/siga/';">Cancelar</button>
													</div>
												</div>
												<?php





													switch ($id) {
														case 3: //avaliacaopedagogica
															$aluno->setIdaluno($idaluno);
															$nomealuno = $aluno->mostrarum();
															
															$avaliacaopedagogica->setIdaluno($idaluno);
															$r = $avaliacaopedagogica->mostrartodos();

															?>
																<h2 align="center"><?php echo "Avaliação Pedagógica - ".$nomealuno['nome']; ?></h2><br>
																<table class="table table-hover" id="dev-table">
																	<thead>
																		<tr>
																			<th>ID formulário</th>																			
																			<th>Data do cadastro</th>																			
																			<th class="text-center">Ações</th>
																		</tr>
																	</thead>
																	<tbody>
																		<?php
																		foreach($r as $linha)
																		{
																			echo "<tr>";
																			echo "<td>".$linha['idavaliacaopedagogica']."</td>";
																			echo "<td>".$linha['datacadastro']."</td>";
																			echo "<td class='text-center'>
																					<a class='btn btn-info btn-xs' href='alteraravaliacaopedagogica.php?id=".$linha['idavaliacaopedagogica']."'>
																						<span class='glyphicon glyphicon-edit'></span> Alterar</a>

																						<a class='btn btn-danger btn-xs' href='deletar.php?id=3&idformulario=".$linha['idavaliacaopedagogica']."onClick='deletar();'>
																						<span class='glyphicon glyphicon-remove'></span> Deletar</a>
																					</td>";										
																		}
																			
																		echo "</tr>";
																		
																		?>
																	</tbody>
																</table>

													<?php
														break;
														case 4: //parecerpsicologico
															$aluno->setIdaluno($idaluno);
															$nomealuno = $aluno->mostrarum();
															
															$parecerpsicologico->setIdaluno($idaluno);
															$r = $parecerpsicologico->mostrartodos();

															?>
																<h2 align="center"><?php echo "Parecer Psicológico - ".$nomealuno['nome']; ?></h2><br>
																<table class="table table-hover" id="dev-table">
																	<thead>
																		<tr>
																			<th>ID formulário</th>
																			<th>Data do cadastro</th>																			
																			<th class="text-center">Ações</th>
																		</tr>
																	</thead>
																	<tbody>
																		<?php
																		foreach($r as $linha)
																		{
																			echo "<tr>";
																			echo "<td>".$linha['idparecerpsicologico']."</td>";
																			echo "<td>".$linha['datacadastro']."</td>";
																			echo "<td class='text-center'>
																					<a class='btn btn-info btn-xs' href='alterarparecerpsicologico.php?id=".$linha['idparecerpsicologico']."'>
																						<span class='glyphicon glyphicon-edit'></span> Alterar</a>

																						<a class='btn btn-danger btn-xs' href='deletar.php?id=4&idformulario=".$linha['idparecerpsicologico']."'>
																						<span class='glyphicon glyphicon-remove'></span> Deletar</a>
																					</td>";										
																		}																			
																		echo "</tr>";																		
																		?>
																	</tbody>
																</table>

													<?php
														break;
														case 5: //planoterapeuticoindividual
															$aluno->setIdaluno($idaluno);
															$nomealuno = $aluno->mostrarum();
															
															$planoterapeuticoindividual->setIdaluno($idaluno);
															$r = $planoterapeuticoindividual->mostrartodos();

															?>
																<h2 align="center"><?php echo "Plano Terapêutico Individual - ".$nomealuno['nome']; ?></h2><br>
																<table class="table table-hover" id="dev-table">
																	<thead>
																		<tr>
																			<th>ID formulário</th>
																			<th>Data do cadastro</th>																			
																			<th class="text-center">Ações</th>
																		</tr>
																	</thead>
																	<tbody>
																		<?php
																		foreach($r as $linha)
																		{
																			echo "<tr>";
																			echo "<td>".$linha['idplanoterapeuticoindividual']."</td>";
																			echo "<td>".$linha['datacadastro']."</td>";
																			echo "<td class='text-center'>
																					<a class='btn btn-info btn-xs' href='alterarplanoterapeuticoindividual.php?id=".$linha['idplanoterapeuticoindividual']."'>
																						<span class='glyphicon glyphicon-edit'></span> Alterar</a>

																						<a class='btn btn-danger btn-xs' href='deletar.php?id=5&idformulario=".$linha['idplanoterapeuticoindividual']."'>
																						<span class='glyphicon glyphicon-remove'></span> Deletar</a>
																					</td>";										
																		}																			
																		echo "</tr>";																		
																		?>
																	</tbody>
																</table>

													<?php
														break;
														case 6: //planoterapeuticopsicologico
															$aluno->setIdaluno($idaluno);
															$nomealuno = $aluno->mostrarum();
															
															$planoterapeuticopsicologico->setIdaluno($idaluno);
															$r = $planoterapeuticopsicologico->mostrartodos();

															?>
																<h2 align="center"><?php echo "Plano Terapêutico Psicológico - ".$nomealuno['nome']; ?></h2><br>
																<table class="table table-hover" id="dev-table">
																	<thead>
																		<tr>
																			<th>ID formulário</th>
																			<th>Data do cadastro</th>																			
																			<th class="text-center">Ações</th>
																		</tr>
																	</thead>
																	<tbody>
																		<?php
																		foreach($r as $linha)
																		{
																			echo "<tr>";
																			echo "<td>".$linha['idplanoterapeuticopsicologico']."</td>";
																			echo "<td>".$linha['datacadastro']."</td>";
																			echo "<td class='text-center'>
																					<a class='btn btn-info btn-xs' href='alterarplanoterapeuticopsicologico.php?id=".$linha['idplanoterapeuticopsicologico']."'>
																						<span class='glyphicon glyphicon-edit'></span> Alterar</a>

																						<a class='btn btn-danger btn-xs' href='deletar.php?id=6&idformulario=".$linha['idplanoterapeuticopsicologico']."'>
																						<span class='glyphicon glyphicon-remove'></span> Deletar</a>
																					</td>";										
																		}																			
																		echo "</tr>";																		
																		?>
																	</tbody>
																</table>

													<?php
														break;
														case 7: //relatorioobservacao
															$aluno->setIdaluno($idaluno);
															$nomealuno = $aluno->mostrarum();
															
															$relatorioobservacao->setIdaluno($idaluno);
															$r = $relatorioobservacao->mostrartodos();

															?>
																<h2 align="center"><?php echo "Relatório de Observação - ".$nomealuno['nome']; ?></h2><br>
																<table class="table table-hover" id="dev-table">
																	<thead>
																		<tr>
																			<th>ID formulário</th>
																			<th>Data do cadastro</th>																			
																			<th class="text-center">Ações</th>
																		</tr>
																	</thead>
																	<tbody>
																		<?php
																		foreach($r as $linha)
																		{
																			echo "<tr>";
																			echo "<td>".$linha['idrelatorioobservacao']."</td>";
																			echo "<td>".$linha['datacadastro']."</td>";
																			echo "<td class='text-center'>
																					<a class='btn btn-info btn-xs' href='alterarrelatorioobservacao.php?id=".$linha['idrelatorioobservacao']."'>
																						<span class='glyphicon glyphicon-edit'></span> Alterar</a>

																						<a class='btn btn-danger btn-xs' href='deletar.php?id=7&idformulario=".$linha['idrelatorioobservacao']."'>
																						<span class='glyphicon glyphicon-remove'></span> Deletar</a>
																					</td>";										
																		}																			
																		echo "</tr>";																		
																		?>
																	</tbody>
																</table>

													<?php
														break;
														case 8: //triagempsicologica
															$aluno->setIdaluno($idaluno);
															$nomealuno = $aluno->mostrarum();
															
															$triagempsicologica->setIdaluno($idaluno);
															$r = $triagempsicologica->mostrartodos();

															?>
																<h2 align="center"><?php echo "Triagem Psicológica - ".$nomealuno['nome']; ?></h2><br>
																<table class="table table-hover" id="dev-table">
																	<thead>
																		<tr>
																			<th>ID formulário</th>
																			<th>Data do cadastro</th>																			
																			<th class="text-center">Ações</th>
																		</tr>
																	</thead>
																	<tbody>
																		<?php
																		foreach($r as $linha)
																		{
																			echo "<tr>";
																			echo "<td>".$linha['idtriagempsicologica']."</td>";
																			echo "<td>".$linha['datacadastro']."</td>";
																			echo "<td class='text-center'>
																					<a class='btn btn-info btn-xs' href='alterartriagempsicologica.php?id=".$linha['idtriagempsicologica']."'>
																						<span class='glyphicon glyphicon-edit'></span> Alterar</a>

																						<a class='btn btn-danger btn-xs' href='deletar.php?id=8&idformulario=".$linha['idtriagempsicologica']."'>
																						<span class='glyphicon glyphicon-remove'></span> Deletar</a>
																					</td>";										
																		}																			
																		echo "</tr>";																		
																		?>
																	</tbody>
																</table>

													<?php
														break;






														default:
																echo '<script>location.href="index.php";</script>';
														break;
													}
													?>										
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
