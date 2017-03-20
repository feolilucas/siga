<?php
	require_once 'conexao.php';
	
	class triagempsicologica
	{
		private $idtriagempsicologica;
		private $idaluno;
		private $datacadastro;
		private $observacoesgerais;
		private $triagem;

		function setIdtriagempsicologica($idtriagempsicologica) { $this->idtriagempsicologica = $idtriagempsicologica; }
		function getIdtriagempsicologica() { return $this->idtriagempsicologica; }
		
		function setIdaluno($idaluno) { $this->idaluno = $idaluno; }
		function getIdaluno() { return $this->idaluno; }
		
		function setDatacadastro($datacadastro) { $this->datacadastro = $datacadastro; }
		function getDatacadastro() { return $this->datacadastro; }
		
		function setObservacoesgerais($observacoesgerais) { $this->observacoesgerais = $observacoesgerais; }
		function getObservacoesgerais() { return $this->observacoesgerais; }
		
		function setTriagem($triagem) { $this->triagem = $triagem; }
		function getTriagem() { return $this->triagem; }
	}
	
?>