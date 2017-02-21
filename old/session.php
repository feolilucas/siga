<?php

session_start();
if((!isset ($_SESSION['login']) == true) and (!isset ($_SESSION['senha']) == true))
{
	session_destroy();
	unset ($_SESSION['login']);
	unset ($_SESSION['senha']);
	unset ($_SESSION['tipoUsuario']);
	unset ($_SESSION['idPessoaFisica']);
	unset ($_SESSION['idUsuario']);
	unset ($_SESSION['nome']);
	header('location:tela.login.php');	
}
if($_SESSION['tipoUsuario'] != 1)
{
	session_destroy();
	unset ($_SESSION['login']);
	unset ($_SESSION['senha']);
	unset ($_SESSION['tipoUsuario']);
	unset ($_SESSION['idPessoaFisica']);
	unset ($_SESSION['idUsuario']);
	unset ($_SESSION['nome']);
	header('location:tela.login.php');
}

?>