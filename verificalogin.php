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
	unset ($_SESSION['idpermissoes']);
	unset ($_SESSION['admin']);
	header('location:telalogin.php');
}
else if(($r['usuario'] == $login) and ($r['senha'] == $senha))
{

	$_SESSION['nome'] = $r['nome'];
	$_SESSION['login'] = $login;
	$_SESSION['senha'] = $senha;
	$_SESSION['idUsuario'] = $r['idusuario'];
	$_SESSION['idpermissoes'] = $r['idpermissoes'];
	$_SESSION['admin'] = $r['administrador'];
	header('location:index.php');
}
else
{	
	session_destroy();
	unset ($_SESSION['login']);
	unset ($_SESSION['senha']);
	unset ($_SESSION['idUsuario']);
	unset ($_SESSION['nome']);
	unset ($_SESSION['idpermissoes']);
	unset ($_SESSION['admin']);
	header('location:telalogin.php?fail');
}

?>