<?php  
include "cabecalho.php";
include "menu.php";

if(($arraypermissoes['administrativo'] == 0))
{
	echo '<script>location.href="index.php";</script>';
}

require_once "classealuno.php";
$aluno = new aluno;
$r = $aluno->mostrartodos();
?>

<title>Relatório Geral de Alunos</title>
<script type="text/javascript" src="https://www.google.com/jsapi"></script>
<script type="text/javascript">
		//carregando modulo visualization
		google.load("visualization", "1", {packages:["corechart"]});

	  //função de monta e desenha o gráfico
	  function drawChart() {
	//variavel com armazenamos os dados, um array de array's 
	//no qual a primeira posição são os nomes das colunas
	<?php 

	$menor5 = 0;
	$entre5e12 = 0;
	$entre13e17 = 0;
	$entre18e25 = 0;
	$entre26e35 = 0;
	$maior35 = 0;

	foreach ($r as $linha) {
		if($linha['idade'] < 5)
		{
			$menor5++;
		}
		else if(($linha['idade'] >= 5) and ($linha['idade'] <= 12))
		{
			$entre5e12++;
		}
		else if(($linha['idade'] >= 13) and ($linha['idade'] <= 25))
		{
			$entre13e17++;
		} 
		else if(($linha['idade'] >= 18) and ($linha['idade'] <= 25))
		{
			$entre18e25++;
		}
		else if(($linha['idade'] >= 26) and ($linha['idade'] <= 35))
		{
			$entre26e35++;
		}
		else if($linha['idade'] > 35)
		{
			$maior35++;
		}
	}
	?>
	var data = google.visualization.arrayToDataTable([
		['Média de idades dos alunos', 'quantidade'],
		['Menores de 5 anos', <?php echo $menor5; ?> ],
		['Entre 5 e 12 anos', <?php echo $entre5e12; ?> ],
		['Entre 13 e 17 anos', <?php echo $entre13e17; ?>],
		['Entre 18 e 25 anos', <?php echo $entre18e25; ?> ],
		['Entre 26 e 35 anos', <?php echo $entre26e35; ?> ],
		['Maiores que 35 anos', <?php echo $maior35; ?> ],

		]);
		//opções para exibição do gráfico
		var options = {
          		title: 'Média de idades dos alunos',//titulo do gráfico
		is3D: true // false para 2d e true para 3d o padrão é false
	};
		//cria novo objeto PeiChart que recebe 
		//como parâmetro uma div onde o gráfico será desenhado
		var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
		//desenha passando os dados e as opções
		chart.draw(data, options);
	}
	//metodo chamado após o carregamento
	google.setOnLoadCallback(drawChart);
</script>

<script type="text/javascript">
	google.load("visualization", "1", {packages:["corechart"]});
	google.setOnLoadCallback(drawChart);
	function drawChart() {
	  //montando o array com os dados

	  <?php

	  $masculino = 0;
	  $feminino = 0;
	  foreach ($r as $linha) {
	  	if($linha['sexo'] == "Masculino")
	  	{
	  		$masculino++;
	  	}
	  	else if($linha['sexo'] == "Feminino")
	  	{
	  		$feminino++;
	  	}


	  }

	  ?>
	  var data = google.visualization.arrayToDataTable([
	  	['Ano', 'Masculino', 'Feminino'],
	  	['Sexo',  <?php echo $masculino; ?>, <?php echo $feminino; ?>],


	  	]);
		//opçoes para o gráfico barras
		var options = {
			title: 'Quantidade de alunos por sexo',

		};
		//instanciando e desenhando o gráfico barras
		var barras = new google.visualization.BarChart(document.getElementById('barras'));
		barras.draw(data, options);
		
		
	}


</script>
<body style="padding-top:60px; padding-bottom: 30px;">
	<section style="width:60%" class="container">
		<div style="background-color: white;">
			<br><br><h2 align="center">Relatório Geral - Alunos</h2><br>
			<div id="chart_div" style="width: 90%; height: 500px;"></div>
			<div id="barras" style="width: 90%; height: 500px;"></div>
			<div align="center">
				<button class="btn btn-info" onclick="window.print();">Imprimir</button><br><br><br>
			</div>
		</div>

	</section>
</body>


<?php  
include "rodape.php";
?>