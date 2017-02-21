<?php
	
	require_once 'classeusuario.php';
	
	session_start();
	
	$login = $_POST['login'];
	$senha = $_POST['senha'];
	
	$usuario = new usuario();
	
	$usuario->setUsuario($login);
	$usuario->setSenha($senha);
	
	$r = $usuario->verificaUsuarioSenha();
	
	if(empty($login) or empty($senha))
	{
		session_destroy();
		unset ($_SESSION['login']);
		unset ($_SESSION['senha']);
		unset ($_SESSION['idUsuario']);
		unset ($_SESSION['nome']);
		header('location:telalogin.php');
	}
	else if(($r['usuario'] == $login) and ($r['senha'] == $senha))
	{

		$_SESSION['nome'] = $r['nome'];
		$_SESSION['login'] = $login;
		$_SESSION['senha'] = $senha;
		$_SESSION['idUsuario'] = $r['idUsuario'];
		header('location:index.php');
	}
	else
	{	
		session_destroy();
		unset ($_SESSION['login']);
		unset ($_SESSION['senha']);
		unset ($_SESSION['idUsuario']);
		unset ($_SESSION['nome']);
		header('location:telalogin.php');
	}
	
	
?>