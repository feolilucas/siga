<?php
include "cabecalho.php";
include "menu.php";



if(($_SESSION['admin'] == 0))
{
	echo '<script>location.href="index.php";</script>';
}

require_once "classeusuario.php";
require_once "classepermissoes.php";

$usuario = new usuario;
$permissoes = new permissoes;

$r = $usuario->mostrartodos();
?>

<title>Buscar usuário</title>

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
				<li role="presentation" class="active"><a href="#bucarusuario" aria-controls="buscaraluno" role="tab" data-toggle="tab">Buscar Usuário</a></li>
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
														<?php include "botaocancelar.php"; ?>

													</div>
												</div>
												<table class="table table-hover" id="dev-table">
													<thead>
														<tr>
															<th>ID</th>
															<th>Nome</th>
															<th>Área</th>
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
															echo "<td>".$linha['idusuario']."</td>";
															echo "<td>".$linha['nome']."</td>";
															echo "<td>".$linha['area']."</td>";
															echo "<td>".$linha['datanascimento']."</td>";
															echo "<td>".$linha['cpf']."</td>";
															echo "<td>".$linha['rg']."</td>"; 

															
															echo "<td class='text-center'>
																<p>
																	<a class='btn btn-success btn-xs' href='#' onClick='imprimir(".$linha['idusuario'].");'>
																<span class='glyphicon glyphicon-print'></span> Imprimir</a>
																</p>		
															<p>
															<a class='btn btn-info btn-xs' href='alterarusuario.php?id=".$linha['idusuario']."'>
																<span class='glyphicon glyphicon-edit'></span> Alterar</a>

																<a class='btn btn-danger btn-xs' onClick='deletarusuario(1,".$linha['idusuario'].");'>
																	<span class='glyphicon glyphicon-remove'></span> Deletar</a>
															</p>
																</td>";													
																															
																echo "</tr>";
																
															}
															?>
														</tbody>
													</table>


	<?php // Div pra imprimir
	foreach($r as $linha)
		{

				$permissoes->setIdpermissoes($linha['idpermissoes']);
		      	$resp = $permissoes->mostrar();
	
				?>



				<div <?php echo "id='divimprimir".$linha['idusuario']."'" ?>  style="display: none;">
					
				<table cellpadding="5">
					<tr>
							<td><b>ID do Usuário: </b> <?php echo $linha['idusuario'];?></td>							
					</tr>
					<tr>
							<td><b>Nome: </b> <?php echo $linha['nome'];?></td>							
					</tr>
					<tr>
							<td><b>RG: </b> <?php echo $linha['rg'];?></td>							
					</tr>
					<tr>
							<td><b>CPF: </b> <?php echo $linha['cpf'];?></td>							
					</tr>
					<tr>
							<td><b>Data de Nascimento: </b> <?php echo $linha['datanascimento'];?></td>							
					</tr>
					<tr>
							<td><b>Área Técnica: </b> <?php echo $linha['area'];?></td>							
					</tr>
					<tr>
							<td><b>Administrador: </b> <?php 
															if($linha['administrador'] == 1)
															{
																echo "Sim";
															}
															else
															{
																echo "Não";
															}
														?></td>							
					</tr>
					<tr>
							<td><b>Email: </b> <?php echo $linha['email'];?></td>							
					</tr>
					<tr>
							<td><b>Telefone: </b> <?php echo $linha['telefone'];?></td>							
					</tr>
					<tr>
							<td><b>CEP: </b> <?php echo $linha['cep'];?></td>							
					</tr>	
					<tr>
							<td><b>Logradouro: </b> <?php echo $linha['logradouro'];?></td>							
					</tr>
					<tr>
							<td><b>Número: </b> <?php echo $linha['numero'];?></td>							
					</tr>
					<tr>
							<td><b>Complemento: </b> <?php echo $linha['complemento'];?></td>							
					</tr>
					<tr>
							<td><b>Referência: </b> <?php echo $linha['referencia'];?></td>							
					</tr>
					<tr>
							<td><b>Bairro: </b> <?php echo $linha['bairro'];?></td>							
					</tr>
					<tr>
							<td><b>Cidade: </b> <?php echo $linha['cidade'];?></td>							
					</tr>
					<tr>
							<td><b>Estado: </b> <?php echo $linha['estado'];?></td>							
					</tr>
				</table>
				<br><br>

				<table border="1" cellpadding="5">
					<thead>
						<th style="text-align: center" colspan="8">PERMISSÕES</th>
					</thead>					
					<tbody>
					<tr>					 
					        <td style="text-align: center;" ><b>Administrativo</b></td>
					        <td style="text-align: center;" ><b>Plano Terapêutico</b></td>
					        <td style="text-align: center;" ><b>Psicológico</b></td>
					        <td style="text-align: center;" ><b>Neurológico</b></td>
					        <td style="text-align: center;" ><b>Fonoaudiológico</b></td>
					        <td style="text-align: center;" ><b>Terapia Ocupacional</b></td>
					        <td style="text-align: center;" ><b>Pedagogia</b></td>
					        <td style="text-align: center;" ><b>Social</b></td>		     
					</tr>
					<tr>
					<?php
						if($linha['administrador'] == 1)
		      			{		      				
		      				echo "<td style='text-align: center'>Sim</td>";
							echo "<td style='text-align: center'>Sim</td>";
							echo "<td style='text-align: center'>Sim</td>";
							echo "<td style='text-align: center'>Sim</td>";
							echo "<td style='text-align: center'>Sim</td>";
							echo "<td style='text-align: center'>Sim</td>";
							echo "<td style='text-align: center'>Sim</td>";
							echo "<td style='text-align: center'>Sim</td>";
						}
						
		      			else
		      			{	     				
			      					      			
			      			if($resp['administrativo'] == 1)
			      			{
			      				echo "<td style='text-align: center'>Sim</td>";
																					
			      			}
			      			else
			      			{
			      				echo "<td style='text-align: center'>Não</td>";
			      			}
			      			if($resp['planoterapeutico'] == 1)
			      			{
			      				echo "<td style='text-align: center'>Sim</td>";
																					
			      			}
			      			else
			      			{
			      				echo "<td style='text-align: center'>Não</td>";
			      			}
			      			if($resp['psicologico'] == 1)
			      			{
			      				echo "<td style='text-align: center'>Sim</td>";
																					
			      			}
			      			else
			      			{
			      				echo "<td style='text-align: center'>Não</td>";
			      			}
			      			if($resp['neurologico'] == 1)
			      			{
			      				echo "<td style='text-align: center'>Sim</td>";													
			      			}
			      			else
			      			{
			      				echo "<td style='text-align: center'>Não</td>";
			      			}
			      			if($resp['fonoaudiologico'] == 1)
			      			{
			      				echo "<td style='text-align: center'>Sim</td>";													
			      			}
			      			else
			      			{
			      				echo "<td style='text-align: center'>Não</td>";
			      			}
			      			if($resp['terapiaocupacional'] == 1)
			      			{
			      				echo "<td style='text-align: center'>Sim</td>";													
			      			}
			      			else
			      			{
			      				echo "<td style='text-align: center'>Não</td>";
			      			}
			      			if($resp['pedagogico'] == 1)
			      			{
			      				echo "<td style='text-align: center'>Sim</td>";													
			      			}
			      			else
			      			{
			      				echo "<td style='text-align: center'>Não</td>";
			      			}
			      			if($resp['social'] == 1)
			      			{
			      				echo "<td style='text-align: center'>Sim</td>";													
			      			}
			      			else
			      			{
			      				echo "<td style='text-align: center'>Não</td>";
			      			}
			      		}
			      		?>
			      		</tr>
					</tbody>
				</table>

				</div>

		<?php
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