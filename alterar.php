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

if((!isset($_GET['id'])) or (!isset($_GET['idaluno']))){

	echo '<script>location.href="index.php";</script>';
}
else
{
	$id = $_GET['id'];
	$idaluno = $_GET['idaluno'];
}

switch($id)
{
		case 1: //alterar usuário

		try
		{
				

			}
			catch(PDOException $e)
			{
				echo $e->getMessage();

			}

		break;

		case 2: // alterar aluno

			try
			{
				
				
			}
			catch(PDOException $e)
			{
				echo $e->getMessage();

			}
		break;
		case 3: //alterar formulário avaliacaopedagogica

			try
			{

			
				
			}
			catch(PDOException $e)
			{
				echo $e->getMessage();

			}
		break;
		case 4: // alterar formulário parecerpsicologico

			try
			{
				
				
			}
			catch(PDOException $e)
			{
				echo $e->getMessage();

			}
		break;
		case 5: // alterar formulário planoterapeuticoindividual

			try
			{
				
				
			}
			catch(PDOException $e)
			{
				echo $e->getMessage();

			}
		break;
		case 6: // alterar formulário planoterapeuticopsicologico

			try
			{
				
				
			}
			catch(PDOException $e)
			{
				echo $e->getMessage();

			}
		break;
		case 7: // alterar formulário relatorioobservacao

			try
			{
			
				
			}
			catch(PDOException $e)
			{
				echo $e->getMessage();

			}
		break;
		case 8: // alterar formulário triagempsicologica

			try
			{
				
				
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