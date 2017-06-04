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

<body style="padding-top:60px; padding-bottom: 30px;">
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
																	<div style='padding-left: 3px;' class='row'>

																				<a class='btn btn-success btn-xs' href='#' onClick='imprimir(".$linha['idavaliacaopedagogica'].");'>
																				<span class='glyphicon glyphicon-print'></span> Imprimir</a>

																	<a class='btn btn-info btn-xs' href='alteraravaliacaopedagogica.php?id=".$linha['idavaliacaopedagogica']."'>
																		<span class='glyphicon glyphicon-edit'></span> Alterar</a>

																		<a class='btn btn-danger btn-xs' onClick='deletar(3,".$linha['idavaliacaopedagogica'].");'>
																			<span class='glyphicon glyphicon-remove'></span> Deletar</a>
																		</div></td>";										
																	}

																	echo "</tr>";

																	?>
																</tbody>
															</table>

															<?php

															foreach($r as $linha)
															{
																?>
																<div <?php echo "id='divimprimir".$linha['idavaliacaopedagogica']."'" ?>  style="display: none;">
																<p style="float:right;"><b>Data de cadastro: </b><?php echo $linha['datacadastro'];?></p>
																<h2 align="center">Avaliação Pedagógica</h2>
																	<table cellpadding="5">
																		<tr>
																			<td><b>Nome do aluno: </b> <?php echo $nomealuno['nome']?></td><br><br>
																		</tr>
																		<tr>
																			<td><b>Avaliação Pedagógica: </b> <?php echo $linha['avaliacaopedagogica']?></td>
																		</tr>
																		<tr>
																			<td><b>Observações gerais: </b> <?php echo $linha['observacoesgerais']?></td>
																		</tr>										
																	</table>
																</div>
															<?php
															}			
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
																	<div style='padding-left: 3px;' class='row'>

																				<a class='btn btn-success btn-xs' href='#' onClick='imprimir(".$linha['idparecerpsicologico'].");'>
																				<span class='glyphicon glyphicon-print'></span> Imprimir</a>

																	<a class='btn btn-info btn-xs' href='alterarparecerpsicologico.php?id=".$linha['idparecerpsicologico']."'>
																		<span class='glyphicon glyphicon-edit'></span> Alterar</a>

																		<a class='btn btn-danger btn-xs' onClick='deletar(4,".$linha['idparecerpsicologico'].");'>
																			<span class='glyphicon glyphicon-remove'></span> Deletar</a>
																		</div></td>";				

																	}																			
																	echo "</tr>";																		
																	?>
																</tbody>
															</table>

															<?php

															foreach($r as $linha)
															{
																?>
																<div <?php echo "id='divimprimir".$linha['idparecerpsicologico']."'" ?>  style="display: none;">
																<p style="float:right;"><b>Data de cadastro: </b><?php echo $linha['datacadastro'];?></p>
																<h2 align="center">Parecer Psicológico</h2>
																	<table cellpadding="5">
																		<tr>
																			<td><b>Nome do aluno: </b> <?php echo $nomealuno['nome']?></td><br><br>
																		</tr>
																		<tr>
																			<td><b>Parecer Psicológico: </b> <?php echo $linha['parecerpsicologico']?></td>
																		</tr>
																		<tr>
																			<td><b>Observações gerais: </b> <?php echo $linha['observacoesgerais']?></td>
																		</tr>										
																	</table>
																</div>
															<?php
															}		
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
																	<div style='padding-left: 3px;' class='row'>

																				<a class='btn btn-success btn-xs' href='#' onClick='imprimir(".$linha['idplanoterapeuticoindividual'].");'>
																				<span class='glyphicon glyphicon-print'></span> Imprimir</a>

																				<a class='btn btn-info btn-xs' href='alterarplanoterapeuticoindividual.php?id=".$linha['idplanoterapeuticoindividual']."'>
																					<span class='glyphicon glyphicon-edit'></span> Alterar</a>

																					<a class='btn btn-danger btn-xs' onClick='deletar(5,".$linha['idplanoterapeuticoindividual'].");'>
																						<span class='glyphicon glyphicon-remove'></span> Deletar</a>
																		</div></td>";								
																	}																			
																	echo "</tr>";																		
																	?>

																</tbody>
															</table>

															<?php
															foreach($r as $linha)
															{
																?>
																<div <?php echo "id='divimprimir".$linha['idplanoterapeuticoindividual']."'" ?>  style="display: none;">
																<p style="float:right;"><b>Data de cadastro: </b><?php echo $linha['datacadastro'];?></p>
																<h2 align="center">Plano Terapêutico Individual</h2>
																	<table cellpadding="5">
																		<tr>
																			<td><b>Nome do aluno: </b> <?php echo $nomealuno['nome']?></td><br><br>

																		</tr>
																		<tr>
																			<td><b>Observações gerais: </b> <?php echo $linha['observacoesgerais']?></td>

																		</tr>
																		<tr>
																			<td><b>CID: </b> <?php echo $linha['cid']?></td>

																		</tr>
																		<tr>
																			<td><b>Etiologia: </b> <?php echo $linha['etiologia']?></td>

																		</tr>
																		<tr>
																			<td><b>Dados médicos relevantes: </b> <?php echo $linha['dadosmedicos']?></td>

																		</tr>
																		<tr>
																			<td><b>Diagnóstico: </b> <?php echo $linha['diagnostico']?></td>

																		</tr>
																			
																	</table>
																	<br><br>
																	<table border="1" cellpadding="5">
																	<tr>	
																		<td><b>Serviço Social: </b><?php echo $linha['servicosocial']?>
																		<br><br>
																		<b>Objetivo: </b><?php echo $linha['objservicosocial']?></td>
																	</tr>

																	</table>

																	<br><br>
																	<table border="1" cellpadding="5">
																	<tr>	
																		<td><b>Fonoaudiologia: </b><?php echo $linha['fonoaudiologia']?>
																		<br><br>
																		<b>Objetivo: </b><?php echo $linha['objfonoaudiologia']?></td>
																	</tr>

																	</table>

																	<br><br>
																	<table border="1" cellpadding="5">
																	<tr>	
																		<td><b>Psicologia: </b><?php echo $linha['psicologia']?>
																		<br><br>
																		<b>Objetivo: </b><?php echo $linha['objpsicologia']?></td>
																	</tr>

																	</table>

																	<br><br>
																	<table border="1" cellpadding="5">
																	<tr>	
																		<td><b>Terapia Ocupacional: </b><?php echo $linha['terapeutaocupacional']?>
																		<br><br>
																		<b>Objetivo: </b><?php echo $linha['objterapeutaocupacional']?></td>
																	</tr>

																	</table>

																	<br><br>
																	<table border="1" cellpadding="5">
																	<tr>	
																		<td><b>Fisioterapia: </b><?php echo $linha['fisioterapia']?>
																		<br><br>
																		<b>Objetivo: </b><?php echo $linha['objfisioterapia']?></td>
																	</tr>

																	</table>

																	<br><br>
																	<table border="1" cellpadding="5">
																	<tr>	
																		<td><b>Nutricionista: </b><?php echo $linha['nutricionista']?>
																		<br><br>
																		<b>Objetivo: </b><?php echo $linha['objnutricionista']?></td>
																	</tr>

																	</table>

																	<br><br>
																	<table border="1" cellpadding="5">
																	<tr>	
																		<td><b>Dentista: </b><?php echo $linha['dentista']?>
																		<br><br>
																		<b>Objetivo: </b><?php echo $linha['objdentista']?></td>
																	</tr>

																	</table>

																</div>
																<?php
															}

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

																	<div style='padding-left: 3px;' class='row'>

																				<a class='btn btn-success btn-xs' href='#' onClick='imprimir(".$linha['idplanoterapeuticopsicologico'].");'>
																				<span class='glyphicon glyphicon-print'></span> Imprimir</a>

																	<a class='btn btn-info btn-xs' href='alterarplanoterapeuticopsicologico.php?id=".$linha['idplanoterapeuticopsicologico']."'>
																		<span class='glyphicon glyphicon-edit'></span> Alterar</a>

																		<a class='btn btn-danger btn-xs' onClick='deletar(6,".$linha['idplanoterapeuticopsicologico'].");'>
																			<span class='glyphicon glyphicon-remove'></span> Deletar</a>
																		</div></td>";										
																	}																			
																	echo "</tr>";																		
																	?>
																</tbody>
															</table>

															<?php

																foreach($r as $linha)
															{
																?>
																<div <?php echo "id='divimprimir".$linha['idplanoterapeuticopsicologico']."'" ?>  style="display: none;">
																<p style="float:right;"><b>Data de cadastro: </b><?php echo $linha['datacadastro'];?></p>
																<h2 align="center">Plano Terapêutico Psicológico</h2>
																	<table cellpadding="5">
																		<tr>
																			<td><b>Nome do aluno: </b> <?php echo $nomealuno['nome']?></td><br><br>
																		</tr>
																		<tr>
																			<td><b>Plano Terapêutico Psicológico: </b> <?php echo $linha['planoterapeutico']?></td>
																		</tr>
																		<tr>
																			<td><b>Observações gerais: </b> <?php echo $linha['observacoesgerais']?></td>
																		</tr>										
																	</table>
																</div>
															<?php
															}		
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
																	<div style='padding-left: 3px;' class='row'>

																				<a class='btn btn-success btn-xs' href='#' onClick='imprimir(".$linha['idrelatorioobservacao'].");'>
																				<span class='glyphicon glyphicon-print'></span> Imprimir</a>

																	<a class='btn btn-info btn-xs' href='alterarrelatorioobservacao.php?id=".$linha['idrelatorioobservacao']."'>
																		<span class='glyphicon glyphicon-edit'></span> Alterar</a>

																		<a class='btn btn-danger btn-xs' onClick='deletar(7,".$linha['idrelatorioobservacao'].");'>
																			<span class='glyphicon glyphicon-remove'></span> Deletar</a>
																		</div></td>";											
																	}																			
																	echo "</tr>";																		
																	?>
																</tbody>
															</table>
															<?php
															foreach($r as $linha)
															{
																?>
																<div <?php echo "id='divimprimir".$linha['idrelatorioobservacao']."'" ?>  style="display: none;">
																<p style="float:right;"><b>Data de cadastro: </b><?php echo $linha['datacadastro'];?></p>
																<h2 align="center">Relatório de Observação</h2>
																	<table cellpadding="5">
																		<tr>
																			<td><b>Nome do aluno: </b> <?php echo $nomealuno['nome']?></td><br><br>
																		</tr>
																		<tr>
																			<td><b>Vida diária: </b> <?php echo $linha['vidadiaria']?></td>
																		</tr>
																		<tr>
																			<td><b>Vida prática: </b> <?php echo $linha['vidapratica']?></td>
																		</tr>
																		<tr>
																			<td><b>Habilidades básicas: </b> <?php echo $linha['habilidadesbasicas']?></td>
																		</tr>
																		<tr>
																			<td><b>Observações gerais: </b> <?php echo $linha['observacoesgerais']?></td>
																		</tr>
																	</table>
																</div>
															<?php
															}			
															
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

																	<div style='padding-left: 3px;' class='row'>

																				<a class='btn btn-success btn-xs' href='#' onClick='imprimir(".$linha['idtriagempsicologica'].");'>
																				<span class='glyphicon glyphicon-print'></span> Imprimir</a>

																	<a class='btn btn-info btn-xs' href='alterartriagempsicologica.php?id=".$linha['idtriagempsicologica']."'>
																		<span class='glyphicon glyphicon-edit'></span> Alterar</a>

																		<a class='btn btn-danger btn-xs' onClick='deletar(8,".$linha['idtriagempsicologica'].");'>
																			<span class='glyphicon glyphicon-remove'></span> Deletar</a>
																		</div></td>";											
																	}																			
																	echo "</tr>";																		
																	?>
																</tbody>
															</table>

															<?php

															foreach($r as $linha)
															{
																?>
																<div <?php echo "id='divimprimir".$linha['idtriagempsicologica']."'" ?>  style="display: none;">
																<p style="float:right;"><b>Data de cadastro: </b><?php echo $linha['datacadastro'];?></p>
																<h2 align="center">Triagem Psicológica</h2>
																	<table cellpadding="5">
																		<tr>
																			<td><b>Nome do aluno: </b> <?php echo $nomealuno['nome']?></td><br><br>
																		</tr>
																		<tr>
																			<td><b>Triagem Psicológica: </b> <?php echo $linha['triagem']?></td>
																		</tr>
																		<tr>
																			<td><b>Observações gerais: </b> <?php echo $linha['observacoesgerais']?></td>
																		</tr>										
																	</table>
																</div>
															<?php
															}		
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

<script>
	 function imprimir(id) {
            var conteudo = document.getElementById('divimprimir'+id).innerHTML,
                tela_impressao = window.open('about:blank');

            tela_impressao.document.write(conteudo);
            tela_impressao.window.print();
            tela_impressao.window.close();
        };
</script>