<nav class="navbar navbar-default navbar-fixed-top">
	<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="index.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span></a>
		</div>

		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav">			
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li class="dropdown">
							<a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Cadastro de Aluno<span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="cadastro.aluno.php">Cadastrar</a></li>
								<li><a href="buscar.aluno.php">Buscar</a></li>
								<li role="separator" class="divider"></li>
								<li><a href="relatorio.geral.php">Relatório Geral</a></li>
								<li><a href="buscar.aluno.relatorio.individual.php">Relatório Individual</a></li>
							</ul>
						</li>
						<li class="dropdown">
							<a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Cadastro de Família<span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="resultado.aluno.familia.php?id=1">Cadastrar</a></li>
								<li><a href="resultado.aluno.familia.php?id=2">Buscar</a></li>
							</ul>
						</li>						
					</ul>						
				</div>
			</ul>						
		</div>
	</nav>

	<script>
		$(function () {
			$('.dropdown-toggle').dropdown();
		}); 
	</script>

