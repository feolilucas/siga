<?php
	
	require_once 'conexao.php';	
		
	class aluno
	{
		private $idaluno;
		private $nome;
		private $datanascimento;
		private $datacadastro;
		private $sexo;
		private $nomepai;
		private $nomemae;
		private $idendereco;
		private $cpf;
		private $nacionalidade;
		private $rg;
		private $dataemissaorg;
		private $deficiencia;

		function setIdaluno($idaluno) { $this->idaluno = $idaluno; }
		function getIdaluno() { return $this->idaluno; }
		
		function setNome($nome) { $this->nome = $nome; }
		function getNome() { return $this->nome; }
		
		function setDatanascimento($datanascimento) { $this->datanascimento = $datanascimento; }
		function getDatanascimento() { return $this->datanascimento; }
		
		function setDatacadastro($datacadastro) { $this->datacadastro = $datacadastro; }
		function getDatacadastro() { return $this->datacadastro; }
		
		function setSexo($sexo) { $this->sexo = $sexo; }
		function getSexo() { return $this->sexo; }
		
		function setNomepai($nomepai) { $this->nomepai = $nomepai; }
		function getNomepai() { return $this->nomepai; }
		
		function setNomemae($nomemae) { $this->nomemae = $nomemae; }
		function getNomemae() { return $this->nomemae; }
		
		function setIdendereco($idendereco) { $this->idendereco = $idendereco; }
		function getIdendereco() { return $this->idendereco; }
		
		function setCpf($cpf) { $this->cpf = $cpf; }
		function getCpf() { return $this->cpf; }
		
		function setNacionalidade($nacionalidade) { $this->nacionalidade = $nacionalidade; }
		function getNacionalidade() { return $this->nacionalidade; }
		
		function setRg($rg) { $this->rg = $rg; }
		function getRg() { return $this->rg; }
		
		function setDataemissaorg($dataemissaorg) { $this->dataemissaorg = $dataemissaorg; }
		function getDataemissaorg() { return $this->dataemissaorg; }
		
		function setDeficiencia($deficiencia) { $this->deficiencia = $deficiencia; }
		function getDeficiencia() { return $this->deficiencia; }
	}


?>