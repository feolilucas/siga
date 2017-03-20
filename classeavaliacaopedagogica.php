<?php
	require_once 'conexao.php';
	
	class avaliacaopedagogica
	{
		private $idavaliacaopedagogica;
		private $idaluno;
		private $datacadastro;
		private $observacoesgerais;
		private $avaliacaopedagogica;

		function setIdavaliacaopedagogica($idavaliacaopedagogica) { $this->idavaliacaopedagogica = $idavaliacaopedagogica; }
		function getIdavaliacaopedagogica() { return $this->idavaliacaopedagogica; }
		
		function setIdaluno($idaluno) { $this->idaluno = $idaluno; }
		function getIdaluno() { return $this->idaluno; }
		
		function setDatacadastro($datacadastro) { $this->datacadastro = $datacadastro; }
		function getDatacadastro() { return $this->datacadastro; }
		
		function setObservacoesgerais($observacoesgerais) { $this->observacoesgerais = $observacoesgerais; }
		function getObservacoesgerais() { return $this->observacoesgerais; }
		
		function setAvaliacaopedagogica($avaliacaopedagogica) { $this->avaliacaopedagogica = $avaliacaopedagogica; }
		function getAvaliacaopedagogica() { return $this->avaliacaopedagogica; }
	{
?>