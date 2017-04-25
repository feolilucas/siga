<?php  
include "cabecalho.php";
include "menu.php";

if($arraypermissoes['administrativo'] == 0)
{
  echo '<script>location.href="index.php";</script>';
}

require_once "classearea.php";
require_once "classeusuario.php";

$area = new area;
$usuario = new usuario;
$r = $usuario->mostrartodos();
$r2 = $area->buscarAreas();
?>

<title>Relatório de Usuários</title>

<body style="padding-top:60px; padding-bottom: 30px;">
	<section style="width:70%" class="container">

		<div align="center" style="background-color: white; padding-top: 2%;">
			<h2 align="center">Relatório das Áreas Técnicas</h2><br>
			<table style= "white-space: nowrap;" class="table table-bordered">
		    <thead>
		    	<tr>
		    		<th style="text-align: center" colspan="2">ÁREAS</th>
		    	</tr>		      
		    </thead>
		    <tbody>
		      <tr>
		        <td style="text-align: center;" title="ID"><b>ID</b></td>
		        <td style="text-align: center;" title="Nome"><b>NOME</b></td>	     
		      </tr>
		      	<?php
		      		foreach ($r2 as $linha) {

		      			echo "<tr>";
		      			echo "<td style='text-align: center;'>".$linha['idarea']."</td>";
		      			echo "<td style='text-align: center;'>".$linha['nome']."</td>";
		      			

		      			echo "</tr>";
		      		}



		      	?>
		      
		    </tbody>
		  </table>
			<div align="center">
				<button class="btn btn-info" onclick="window.print();">Imprimir</button><br><br><br>
			</div>
		</div>

	</section>
</body>


<?php  
include "rodape.php";
?>