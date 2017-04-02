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


$id = $_GET['id'];

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
				$avaliacaopedagogica->setIdavaliacaopedagogica($_GET['idformulario']);
				$avaliacaopedagogica->setAvaliacaopedagogica($_POST['avaliacaopedagogica']);
				$avaliacaopedagogica->setObservacoesgerais($_POST['observacoesgerais']);

				$avaliacaopedagogica->alterar();


			$redirect = "http://localhost/siga/index.php?alterou=1";
			header("location:$redirect");	


								
			}
			catch(PDOException $e)
			{
				echo $e->getMessage();

			}
		break;
		case 4: // alterar formulário parecerpsicologico

			try
			{
				$parecerpsicologico->setIdparecerpsicologico($_GET['idformulario']);
				$parecerpsicologico->setParecerpsicologico($_POST['parecerpsicologico']);
				$parecerpsicologico->setObservacoesgerais($_POST['observacoesgerais']);

				$parecerpsicologico->alterar();

				$redirect = "http://localhost/siga/index.php?alterou=1";
				header("location:$redirect");	

					
			}
			catch(PDOException $e)
			{
				echo $e->getMessage();

			}
		break;
		case 5: // alterar formulário planoterapeuticoindividual

			try
			{
				$planoterapeuticoindividual->setIdplanoterapeuticoindividual($_GET['idformulario']);
				$planoterapeuticoindividual->setObservacoesgerais($_POST['observacoesgerais']);
				$planoterapeuticoindividual->setDiagnostico($_POST['diagnostico']);
				$planoterapeuticoindividual->setCid($_POST['cid']);
				$planoterapeuticoindividual->setDadosmedicos($_POST['dadosmedicos']);
				$planoterapeuticoindividual->setEtiologia($_POST['etiologia']);
				$planoterapeuticoindividual->setObjservicosocial($_POST['objservicosocial']);
				$planoterapeuticoindividual->setServicosocial($_POST['servicosocial']);
				$planoterapeuticoindividual->setFonoaudiologia($_POST['fonoaudiologia']);
				$planoterapeuticoindividual->setObjfonoaudiologia($_POST['objfonoaudiologia']);
				$planoterapeuticoindividual->setPsicologia($_POST['psicologia']);
				$planoterapeuticoindividual->setObjpsicologia($_POST['objpsicologia']);
				$planoterapeuticoindividual->setTerapeutaocupacional($_POST['terapeutaocupacional']);
				$planoterapeuticoindividual->setObjterapeutaocupacional($_POST['objterapeutaocupacional']);
				$planoterapeuticoindividual->setFisioterapia($_POST['fisioterapia']);
				$planoterapeuticoindividual->setObjfisioterapia($_POST['objfisioterapia']);
				$planoterapeuticoindividual->setNutricionista($_POST['nutricionista']);
				$planoterapeuticoindividual->setObjnutricionista($_POST['objnutricionista']);
				$planoterapeuticoindividual->setDentista($_POST['dentista']);
				$planoterapeuticoindividual->setObjdentista($_POST['objdentista']);

				$planoterapeuticoindividual->alterar();

				$redirect = "http://localhost/siga/index.php?alterou=1";
				header("location:$redirect");

			}
			catch(PDOException $e)
			{
				echo $e->getMessage();

			}
		break;
		case 6: // alterar formulário planoterapeuticopsicologico

			try
			{
				$planoterapeuticopsicologico->setIdplanoterapeuticopsicologico($_GET['idformulario']);
				$planoterapeuticopsicologico->setPlanoterapeutico($_POST['planoterapeutico']);
				$planoterapeuticopsicologico->setObservacoesgerais($_POST['observacoesgerais']);

				$planoterapeuticopsicologico->alterar();
				
				$redirect = "http://localhost/siga/index.php?alterou=1";
				header("location:$redirect");
			}
			catch(PDOException $e)
			{
				echo $e->getMessage();

			}
		break;
		case 7: // alterar formulário relatorioobservacao

			try
			{
			
				$relatorioobservacao->setIdrelatorioobservacao($_GET['idformulario']);
				$relatorioobservacao->setObservacoesgerais($_POST['observacoesgerais']);
				$relatorioobservacao->setVidadiaria($_POST['vidadiaria']);
				$relatorioobservacao->setVidapratica($_POST['vidapratica']);
				$relatorioobservacao->setHabilidadesbasicas($_POST['habilidadesbasicas']);

				$relatorioobservacao->alterar();

				$redirect = "http://localhost/siga/index.php?alterou=1";
				header("location:$redirect");
			}
			catch(PDOException $e)
			{
				echo $e->getMessage();

			}
		break;
		case 8: // alterar formulário triagempsicologica

			try
			{
				$triagempsicologica->setIdtriagempsicologica($_GET['idformulario']);
				$triagempsicologica->setTriagem($_POST['triagem']);
				$triagempsicologica->setObservacoesgerais($_POST['observacoesgerais']);

				$triagempsicologica->alterar();

				$redirect = "http://localhost/siga/index.php?alterou=1";
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