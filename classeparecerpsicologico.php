<?php
	require_once 'conexao.php';
	
	class parecerpsicologico
	{
		private $idparecerpsicologico;
		private $idaluno;
		private $datacadastro;
		private $observacoesgerais;
		private $parecerpsicologico;

		function setIdparecerpsicologico($idparecerpsicologico) { $this->idparecerpsicologico = $idparecerpsicologico; }
		function getIdparecerpsicologico() { return $this->idparecerpsicologico; }
		
		function setIdaluno($idaluno) { $this->idaluno = $idaluno; }
		function getIdaluno() { return $this->idaluno; }
		
		function setDatacadastro($datacadastro) { $this->datacadastro = $datacadastro; }
		function getDatacadastro() { return $this->datacadastro; }
		
		function setObservacoesgerais($observacoesgerais) { $this->observacoesgerais = $observacoesgerais; }
		function getObservacoesgerais() { return $this->observacoesgerais; }
		
		function setParecerpsicologico($parecerpsicologico) { $this->parecerpsicologico = $parecerpsicologico; }
		function getParecerpsicologico() { return $this->parecerpsicologico; }


	}
	
?>