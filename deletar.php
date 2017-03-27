<?php
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

if(!isset($_GET['id'])){

	echo '<script>location.href="index.php";</script>';
}
else
{
	$id = $_GET['id'];
}

switch($id)
{
		case 1: //deletar usuário

		try
		{
				

			}
			catch(PDOException $e)
			{
				echo $e->getMessage();

			}

		break;

		case 2: // deletar aluno
			try
			{
				$aluno->setIdaluno($_GET['idaluno']);
				$aluno->deletar();		
			}
			catch(PDOException $e)
			{
				echo $e->getMessage();

			}
		break;
		case 3: //deletar formulário avaliacaopedagogica

			try
			{
				$avaliacaopedagogica->setIdavaliacaopedagogica($_GET['idformulario']);
				$avaliacaopedagogica->deletar();
				$redirect = "http://localhost/siga/buscaraluno.php?id=3&deletou=1";
				header("location:$redirect");	
				
			}
			catch(PDOException $e)
			{
				echo $e->getMessage();

			}
		break;
		case 4: // deletar formulário parecerpsicologico

			try
			{
				$parecerpsicologico->setIdparecerpsicologico($_GET['idformulario']);
				$parecerpsicologico->deletar();
				$redirect = "http://localhost/siga/buscaraluno.php?id=4&deletou=1";
				header("location:$redirect");	
				
			}
			catch(PDOException $e)
			{
				echo $e->getMessage();

			}
		break;
		case 5: // deletar formulário planoterapeuticoindividual

			try
			{
				$planoterapeuticoindividual->setIdplanoterapeuticoindividual($_GET['idformulario']);
				$planoterapeuticoindividual->deletar();
				$redirect = "http://localhost/siga/buscaraluno.php?id=5&deletou=1";
				header("location:$redirect");	
				
				
				
			}
			catch(PDOException $e)
			{
				echo $e->getMessage();

			}
		break;
		case 6: // deletar formulário planoterapeuticopsicologico

			try
			{
				$planoterapeuticopsicologico->setIdplanoterapeuticopsicologico($_GET['idformulario']);
				$planoterapeuticopsicologico->deletar();
				$redirect = "http://localhost/siga/buscaraluno.php?id=6&deletou=1";
				header("location:$redirect");	
				
				
			}
			catch(PDOException $e)
			{
				echo $e->getMessage();

			}
		break;
		case 7: // deletar formulário relatorioobservacao

			try
			{
				$relatorioobservacao->setIdrelatorioobservacao($_GET['idformulario']);
				$relatorioobservacao->deletar();
				$redirect = "http://localhost/siga/buscaraluno.php?id=7&deletou=1";
				header("location:$redirect");	
				
				
				
			}
			catch(PDOException $e)
			{
				echo $e->getMessage();

			}
		break;
		case 8: // deletar formulário triagempsicologica

			try
			{
				$triagempsicologica->setIdtriagempsicologica($_GET['idformulario']);
				$triagempsicologica->deletar();
				$redirect = "http://localhost/siga/buscaraluno.php?id=8&deletou=1";
				header("location:$redirect");	
					
			}
			catch(PDOException $e)
			{
				echo $e->getMessage();

			}
		break;
		default:
		break;
	}

	?>