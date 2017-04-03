<?php
include "cabecalho.php";
include "menu.php";

if(($arraypermissoes['administrativo'] == 0) or ($arraypermissoes['planoterapeutico'] ==0) or ($arraypermissoes['psicologico'] == 0) or
	($arraypermissoes['neurologico'] == 0) or ($arraypermissoes['fonoaudiologico'] == 0) or ($arraypermissoes['terapiaocupacional'] == 0) or 
	($arraypermissoes['pedagogico'] == 0) or ($arraypermissoes['social'] == 0))
{
	echo '<script>location.href="index.php";</script>';
}

require_once "classeusuario.php";

$usuario = new usuario;

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
															<a class='btn btn-info btn-xs' href='alterarusuario.php?id=".$linha['idusuario']."'>
																<span class='glyphicon glyphicon-edit'></span> Alterar</a>

																<a class='btn btn-danger btn-xs' onClick='deletarusuario(1,".$linha['idusuario'].");'>
																	<span class='glyphicon glyphicon-remove'></span> Deletar</a>
																</td>";																	
																
																
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
