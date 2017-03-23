<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Cadastro de Usuário</title>
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/boxshadow.css">
<link rel="stylesheet" href="css/shadow.css">
<script src='js/jquery-2.1.3.min.js'></script>
<script src='js/bootstrap.min.js'></script>
<script src="js/validator.min.js"></script>
<script src="js/funcoes.js"></script>

</head>
<body>


</body>
</html>

<?php
	require_once "classepermissoes.php";
	require_once "classeendereco.php";
	require_once "classeusuario.php";
	require_once "classealuno.php";
	
	$permissoes = new permissoes;
	$endereco = new endereco;
	$usuario = new usuario;
	
	$id = $_GET['id'];
	
	switch($id)
	{
		case 1: //cadastro de usuário
			
			try
			{
				$usuario->setNome($_POST['nome']);
				$usuario->setCpf($_POST['cpf']);
				$usuario->setRg($_POST['rg']);
				$usuario->setDatanascimento($_POST['datanascimento']);
				$usuario->setTelefone($_POST['telefone']);
				$usuario->setEmail($_POST['email']);
				$endereco->setComplemento($_POST['complemento']);
				$endereco->setNumero($_POST['numero']);
				$endereco->setLogradouro($_POST['logradouro']);
				$endereco->setReferencia($_POST['referencia']);
				$endereco->setCep($_POST['cep']);
				$endereco->setBairro($_POST['bairro']);
				$endereco->setEstado($_POST['estado']);
				$endereco->setCidade($_POST['cidade']);
				$usuario->setUsuario($_POST['usuario']);
				$usuario->setSenha($_POST['senha']);
				$usuario->setIdarea($_POST['area']);
				if(isset($_POST['administrativo']))
				{
					$permissoes->setAdministrativo($_POST['administrativo']);
				}
				else
				{
					$permissoes->setAdministrativo(0);
				}
				if(isset($_POST['planoterapeutico']))
				{
					$permissoes->setPlanoterapeutico($_POST['planoterapeutico']);
				}
				else
				{
					$permissoes->setPlanoterapeutico(0);
				}
				if(isset($_POST['psicologico']))
				{
					$permissoes->setPsicologico($_POST['psicologico']);
				}
				else
				{
					$permissoes->setPsicologico(0);
				}
				if(isset($_POST['neurologico']))
				{
					$permissoes->setNeurologico($_POST['neurologico']);
				}
				else
				{
					$permissoes->setNeurologico(0);
				}
				if(isset($_POST['fonoaudiologico']))
				{
					$permissoes->setFonoaudiologico($_POST['fonoaudiologico']);
				}
				else
				{
					$permissoes->setFonoaudiologico(0);
				}
				if(isset($_POST['terapiaocupacional']))
				{
					$permissoes->setTerapiaocupacional($_POST['terapiaocupacional']);
				}
				else
				{
					$permissoes->setTerapiaocupacional(0);
				}
				if(isset($_POST['pedagogico']))
				{
					$permissoes->setPedagogico($_POST['pedagogico']);
				}
				else
				{
					$permissoes->setPedagogico(0);
				}
				if(isset($_POST['social']))
				{
					$permissoes->setSocial($_POST['social']);
				}
				else
				{
					$permissoes->setSocial(0);
				}
				
				$permissoes->cadastrar();
				$usuario->setIdpermissoes($permissoes->ultimoid());

				$endereco->cadastrar();
				$usuario->setIdendereco($endereco->ultimoid());
				$usuario->cadastrar($idpermissoes['id'], $idendereco['id']);
				
				
				
				$redirect = "http://localhost/siga/cadastrousuario.php?gravou=1";
				header("location:$redirect");	
				
			}
			catch(PDOException $e)
			{
				echo $e->getMessage();
				
			}
			
		break;
		case 2: // cadastro de aluno
			
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