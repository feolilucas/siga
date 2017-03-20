<?php
	require_once 'conexao.php';
	
	class relatoriodeobservacao
	{
		private $idrelatoriodeobservacao;
		private $idaluno;
		private $datacadastro;
		private $observacoesgerais;
		private $vidadiaria;
		private $vidapratica;
		private $habilidadesbasicas;

		function setIdrelatoriodeobservacao($idrelatoriodeobservacao) { $this->idrelatoriodeobservacao = $idrelatoriodeobservacao; }
		function getIdrelatoriodeobservacao() { return $this->idrelatoriodeobservacao; }
		
		function setIdaluno($idaluno) { $this->idaluno = $idaluno; }
		function getIdaluno() { return $this->idaluno; }
		
		function setDatacadastro($datacadastro) { $this->datacadastro = $datacadastro; }
		function getDatacadastro() { return $this->datacadastro; }
		
		function setObservacoesgerais($observacoesgerais) { $this->observacoesgerais = $observacoesgerais; }
		function getObservacoesgerais() { return $this->observacoesgerais; }
		
		function setVidadiaria($vidadiaria) { $this->vidadiaria = $vidadiaria; }
		function getVidadiaria() { return $this->vidadiaria; }
		
		function setVidapratica($vidapratica) { $this->vidapratica = $vidapratica; }
		function getVidapratica() { return $this->vidapratica; }
		
		function setHabilidadesbasicas($habilidadesbasicas) { $this->habilidadesbasicas = $habilidadesbasicas; }
		function getHabilidadesbasicas() { return $this->habilidadesbasicas; }
	}
	
?>