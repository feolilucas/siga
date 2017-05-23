<?php  
include "cabecalho.php";
include "menu.php";

if(($_SESSION['admin'] == 0))
{
  echo '<script>location.href="index.php";</script>';
}

require_once "classeusuario.php";
require_once "classepermissoes.php";

$permissoes = new permissoes;
$usuario = new usuario;
$r = $usuario->mostrartodos();
?>

<title>Relatório de Usuários</title>

<body style="padding-top:60px; padding-bottom: 30px;">
	<section style="width:70%" class="container">

		<div align="center" style="background-color: white; padding-top: 2%;">
			<h2 align="center">Relatório de Usuário</h2><br>
			<table style= "white-space: nowrap;" class="table table-bordered">
		    <thead>
		    	<tr>
		    		<th style="text-align: center" colspan="4">DADOS DO USUÁRIO</th>
		    		<th style="text-align: center" colspan="9">PERMISSÕES</th>
		    	</tr>
		      
		    </thead>
		    <tbody>
		      <tr>
		        <td style="text-align: center;" title="Nome"><b>NOME</b></td>
		        <td style="text-align: center;" title="Usuário"><b>USUÁRIO</b></td>
		        <td style="text-align: center;" title="Área"><b>ÁREA</b></td>
		        <td style="text-align: center;" title="Área"><b>ADMIN</b></td>
		        <td style="text-align: center;" title="Administrativo"><b>ADM</b></td>
		        <td style="text-align: center;" title="Planoterapêutico"><b>PT</b></td>
		        <td style="text-align: center;" title="Psicológico"><b>PSC</b></td>
		        <td style="text-align: center;" title="Neurológico"><b>NRL</b></td>
		        <td style="text-align: center;" title="Fonoaudiológico"><b>FNA</b></td>
		        <td style="text-align: center;" title="Terapia Ocupacional"><b>TO</b></td>
		        <td style="text-align: center;" title="Pedagógico"><b>PDG</b></td>
		        <td style="text-align: center;" title="Social"><b>SL</b></td>		     
		      </tr>
		      	<?php
		      		foreach ($r as $linha) {
		      			
		      			$permissoes->setIdpermissoes($linha['idpermissoes']);
		      			$resp = $permissoes->mostrar();

		      			echo "<tr>";
		      			echo "<td>".$linha['nome']."</td>";
		      			echo "<td>".$linha['usuario']."</td>";
		      			echo "<td>".$linha['area']."</td>";

	      			if($linha['administrador'] == 1)
	      			{
	      				echo "<td>Sim</td>";
	      				echo "<td style='text-align: center'><span class='glyphicon glyphicon-ok'></span></td>";
						echo "<td style='text-align: center'><span class='glyphicon glyphicon-ok'></span></td>";
						echo "<td style='text-align: center'><span class='glyphicon glyphicon-ok'></span></td>";
						echo "<td style='text-align: center'><span class='glyphicon glyphicon-ok'></span></td>";
						echo "<td style='text-align: center'><span class='glyphicon glyphicon-ok'></span></td>";
						echo "<td style='text-align: center'><span class='glyphicon glyphicon-ok'></span></td>";
						echo "<td style='text-align: center'><span class='glyphicon glyphicon-ok'></span></td>";
						echo "<td style='text-align: center'><span class='glyphicon glyphicon-ok'></span></td>";
					}
	      			else
	      			{
	      				echo "<td>Não</td>";
		      			
		      			

		      			if($resp['administrativo'] == 1)
		      			{
		      				echo "<td style='text-align: center'><span class='glyphicon glyphicon-ok'></span></td>";
																				
		      			}
		      			else
		      			{
		      				echo "<td style='text-align: center'><span class='glyphicon glyphicon-remove'></span></td>";
		      			}
		      			if($resp['planoterapeutico'] == 1)
		      			{
		      				echo "<td style='text-align: center'><span class='glyphicon glyphicon-ok'></span></td>";
																				
		      			}
		      			else
		      			{
		      				echo "<td style='text-align: center'><span class='glyphicon glyphicon-remove'></span></td>";
		      			}
		      			if($resp['psicologico'] == 1)
		      			{
		      				echo "<td style='text-align: center'><span class='glyphicon glyphicon-ok'></span></td>";
																				
		      			}
		      			else
		      			{
		      				echo "<td style='text-align: center'><span class='glyphicon glyphicon-remove'></span></td>";
		      			}
		      			if($resp['neurologico'] == 1)
		      			{
		      				echo "<td style='text-align: center'><span class='glyphicon glyphicon-ok'></span></td>";
																				
		      			}
		      			else
		      			{
		      				echo "<td style='text-align: center'><span class='glyphicon glyphicon-remove'></span></td>";
		      			}
		      			if($resp['fonoaudiologico'] == 1)
		      			{
		      				echo "<td style='text-align: center'><span class='glyphicon glyphicon-ok'></span></td>";
																				
		      			}
		      			else
		      			{
		      				echo "<td style='text-align: center'><span class='glyphicon glyphicon-remove'></span></td>";
		      			}
		      			if($resp['terapiaocupacional'] == 1)
		      			{
		      				echo "<td style='text-align: center'><span class='glyphicon glyphicon-ok'></span></td>";
																				
		      			}
		      			else
		      			{
		      				echo "<td style='text-align: center'><span class='glyphicon glyphicon-remove'></span></td>";
		      			}
		      			if($resp['pedagogico'] == 1)
		      			{
		      				echo "<td style='text-align: center'><span class='glyphicon glyphicon-ok'></span></td>";
																				
		      			}
		      			else
		      			{
		      				echo "<td style='text-align: center'><span class='glyphicon glyphicon-remove'></span></td>";
		      			}
		      			if($resp['social'] == 1)
		      			{
		      				echo "<td style='text-align: center'><span class='glyphicon glyphicon-ok'></span></td>";													
		      			}
		      			else
		      			{
		      				echo "<td style='text-align: center'><span class='glyphicon glyphicon-remove'></span></td>";
		      			}
		      		}

		      			echo "</tr>";
		      		}



		      	?>
		      
		    </tbody>
		  </table>
			<div align="center">
				<button class="btn btn-success" onclick="window.print();">Imprimir</button><br><br><br>
			</div>
		</div>

	</section>
</body>


<?php  
include "rodape.php";
?>