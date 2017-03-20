<?php
	require_once 'conexao.php';
	
	class planoterapeuticopsicologia
	{
		private $idplanoterapeuticopsicologia;
		private $idaluno;
		private $datacadastro;
		private $observacoesgerais;
		private $planoterapeutico;

		function setIdplanoterapeuticopsicologia($idplanoterapeuticopsicologia) { $this->idplanoterapeuticopsicologia = $idplanoterapeuticopsicologia; }
		function getIdplanoterapeuticopsicologia() { return $this->idplanoterapeuticopsicologia; }
		
		function setIdaluno($idaluno) { $this->idaluno = $idaluno; }
		function getIdaluno() { return $this->idaluno; }
		
		function setDatacadastro($datacadastro) { $this->datacadastro = $datacadastro; }
		function getDatacadastro() { return $this->datacadastro; }
		
		function setObservacoesgerais($observacoesgerais) { $this->observacoesgerais = $observacoesgerais; }
		function getObservacoesgerais() { return $this->observacoesgerais; }
		
		function setPlanoterapeutico($planoterapeutico) { $this->planoterapeutico = $planoterapeutico; }
		function getPlanoterapeutico() { return $this->planoterapeutico; }
	}
	
?>