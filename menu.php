
<?php

	include "session.php";

	require_once "classepermissoes.php";

	$permissoes = new permissoes;

	$permissoes->setIdpermissoes($_SESSION['idpermissoes']);
	$arraypermissoes = $permissoes->mostrar();



?>

<style>
.dropdown-submenu {
    position: relative;
}

.dropdown-submenu>.dropdown-menu {
    top: 0;
    left: 100%;
    margin-top: -6px;
    margin-left: -1px;
    -webkit-border-radius: 0 6px 6px 6px;
    -moz-border-radius: 0 6px 6px;
    border-radius: 0 6px 6px 6px;
}

.dropdown-submenu:hover>.dropdown-menu {
    display: block;
}

.dropdown-submenu>a:after {
    display: block;
    content: " ";
    float: right;
    width: 0;
    height: 0;
    border-color: transparent;
    border-style: solid;
    border-width: 5px 0 5px 5px;
    border-left-color: #ccc;
    margin-top: 5px;
    margin-right: -10px;
}

.dropdown-submenu:hover>a:after {
    border-left-color: #fff;
}

.dropdown-submenu.pull-left {
    float: none;
}

.dropdown-submenu.pull-left>.dropdown-menu {
    left: -100%;
    margin-left: 10px;
    -webkit-border-radius: 6px 0 6px 6px;
    -moz-border-radius: 6px 0 6px 6px;
    border-radius: 6px 0 6px 6px;
}
</style>


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

					<?php
						if(($arraypermissoes['administrativo'] == 1) and ($arraypermissoes['planoterapeutico'] == 1) and ($arraypermissoes['psicologico'] == 1) and
							($arraypermissoes['neurologico'] == 1) and ($arraypermissoes['fonoaudiologico'] == 1) and ($arraypermissoes['terapiaocupacional'] == 1) and 
							($arraypermissoes['pedagogico'] == 1) and ($arraypermissoes['social'] == 1))
						{
					?>
						<li class="dropdown">
							<a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Usuários<span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="cadastrousuario.php">Cadastrar</a></li>
								<li role="separator" class="divider"></li>

								<li><a href="buscarusuario.php">Buscar</a></li>
							</ul>
						</li>

					<?php
					}
					if(($arraypermissoes['administrativo'] == 1))
					{
					?>
						<li class="dropdown">
							<a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Administrativo<span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="cadastroaluno.php">Cadastrar</a></li>
								<li role="separator" class="divider"></li>

								<li><a href="buscaraluno.php">Buscar</a></li>
								

							</ul>
						</li>

					<?php
					}
					if(($arraypermissoes['planoterapeutico'] == 1))
					{
					?>


						<li class="dropdown">
							<a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Plano Terapêutico Individual<span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="planoterapeuticoindividual.php">Cadastrar</a></li>
								<li role="separator" class="divider"></li>

								<li><a href="buscaraluno.php">Buscar</a></li>
							</ul>
						</li>

					<?php
					}
					if(($arraypermissoes['psicologico'] == 1))
					{
					?>

						<li class="dropdown">
							<a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Psicológico<span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li class="dropdown dropdown-submenu"> 
			                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa "></i>Parecer Psicológico</a> 
			                        <ul class="dropdown-menu">
			                            <li class="last"><a href="parecerpsicologico.php">Cadastrar</a></li>
			                            <li role="separator" class="divider"></li>
			                            <li class="last"><a href="#">Buscar</a></li>
			                        </ul> 
			                    </li>
			                    <li class="dropdown dropdown-submenu"> 
			                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa "></i>Triagem Psicológica</a> 
			                        <ul class="dropdown-menu">
			                            <li class="last"><a href="triagempsicologica.php">Cadastrar</a></li>
			                            <li role="separator" class="divider"></li>
			                            <li class="last"><a href="#">Buscar</a></li>
			                        </ul> 
			                    </li>
			                    <li class="dropdown dropdown-submenu"> 
			                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa "></i>Plano Terapeutico Psicológico</a> 
			                        <ul class="dropdown-menu">
			                            <li class="last"><a href="planoterapeuticopsicologico.php">Cadastrar</a></li>
			                            <li role="separator" class="divider"></li>
			                            <li class="last"><a href="#">Buscar</a></li>
			                        </ul> 
			                    </li>
			                     <li class="dropdown dropdown-submenu"> 
			                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa "></i>Anamnese Psicológica</a> 
			                        <ul class="dropdown-menu">
			                            <li class="last"><a href="#">Cadastrar</a></li>
			                            <li role="separator" class="divider"></li>
			                            <li class="last"><a href="#">Buscar</a></li>
			                        </ul> 
			                    </li>
							</ul>
						</li>

					<?php
					}
					if(($arraypermissoes['neurologico'] == 1))
					{
					?>
						<li class="dropdown">
							<a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Neurológico<span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="#">Cadastrar</a></li>
								<li role="separator" class="divider"></li>
								<li><a href="buscaraluno.php">Buscar</a></li>


							</ul>
						</li>
					<?php
					}
					if(($arraypermissoes['fonoaudiologico'] == 1))
					{
					?>

						<li class="dropdown">
							<a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Fonoaudiológico<span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="#">Cadastrar</a></li>
								<li role="separator" class="divider"></li>
								<li><a href="buscaraluno.php">Buscar</a></li>


							</ul>
						</li>
					<?php
					}
					if(($arraypermissoes['terapiaocupacional'] == 1))
					{
					?>

						<li class="dropdown">
							<a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Terapia Ocupacional<span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="relatorioobservacao.php">Cadastrar Relatório de Observação</a></li>
								<li role="separator" class="divider"></li>
								<li><a href="buscaraluno.php">Buscar</a></li>


							</ul>
						</li>

					<?php
					}
					if(($arraypermissoes['pedagogico'] == 1))
					{
					?>

						<li class="dropdown">
							<a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pedagógico<span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="#">Cadastrar</a></li>
								<li role="separator" class="divider"></li>
								<li><a href="buscaraluno.php">Buscar</a></li>


							</ul>
						</li>

						<?php
					}
					if(($arraypermissoes['social'] == 1))
					{
					?>

						<li class="dropdown">
							<a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Social<span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="#">Cadastrar</a></li>
								<li role="separator" class="divider"></li>
								<li><a href="buscaraluno.php">Buscar</a></li>
							</ul>
						</li>
					<?php
					}
					?>

					</ul>	

				</div>
			</ul>


			<ul class="nav navbar-nav navbar-right ">			
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<li class="dropdown">
						<a title="<?php echo $_SESSION['nome']; ?>" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle pull-right" ><span class="glyphicon glyphicon-user" aria-hidden="true" ></span></a>	
						<ul class="dropdown-menu">
							<li><a href="sair.php">Sair<span class="glyphicon glyphicon-log-out pull-right"></span></a></li>
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

