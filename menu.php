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
							<a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Usuários<span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="cadastrousuario.php">Cadastrar</a></li>
								<li role="separator" class="divider"></li>

								<li><a href="buscarusuario.php">Buscar</a></li>
							</ul>
						</li>
						<li class="dropdown">
							<a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Alunos<span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="cadastroaluno.php">Cadastrar</a></li>
								<li role="separator" class="divider"></li>

								<li><a href="buscaraluno.php">Buscar</a></li>
								

							</ul>
						</li>




						<li class="dropdown">
							<a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Plano Terapêutico<span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="planoterapeuticoindividual.php">Cadastrar</a></li>
								<li role="separator" class="divider"></li>

								<li><a href="buscaraluno.php">Buscar</a></li>
							</ul>
						</li>


						<li class="dropdown">
							<a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Psicológico<span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="parecerpsicologico.php">Cadastrar Parecer Psicológico</a></li>
								<li><a href="triagempsicologica.php">Cadastrar Triagem Psicológica</a></li>
								<li><a href="planoterapeuticopsicologico.php">Cadastrar Plano Terapeutico Psicológico</a></li>
								<li><a href="anamnesepsicologica.php">Cadastrar Anamnese Psicológica</a></li>
								<li role="separator" class="divider"></li>
								<li><a href="buscaraluno.php">Buscar</a></li>
								
								

							</ul>
						</li>


						<li class="dropdown">
							<a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Neurológico<span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="#">Cadastrar</a></li>
								<li role="separator" class="divider"></li>
								<li><a href="buscaraluno.php">Buscar</a></li>


							</ul>
						</li>

						<li class="dropdown">
							<a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Fonoaudiológico<span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="#">Cadastrar</a></li>
								<li role="separator" class="divider"></li>
								<li><a href="buscaraluno.php">Buscar</a></li>


							</ul>
						</li>

						<li class="dropdown">
							<a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Terapia Ocupacional<span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="#">Cadastrar</a></li>
								<li role="separator" class="divider"></li>
								<li><a href="buscaraluno.php">Buscar</a></li>


							</ul>
						</li>



						<li class="dropdown">
							<a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pedagógico<span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="#">Cadastrar</a></li>
								<li role="separator" class="divider"></li>
								<li><a href="buscaraluno.php">Buscar</a></li>


							</ul>
						</li>



						<li class="dropdown">
							<a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Social<span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="#">Cadastrar</a></li>
								<li role="separator" class="divider"></li>
								<li><a href="buscaraluno.php">Buscar</a></li>
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

