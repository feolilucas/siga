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
		
		public function cadastrar()
		{
			$conexao = new conexao();
			
			try
			{	
				$query = $conexao->conn->prepare("insert into triagempsicologica(idaluno, datacadastro, observacoesgerais, triagem)
				values(:idaluno, :datacadastro, :observacoesgerais, :triagem)");
				
				$query->bindValue(":idaluno", $this->getIdaluno());
				$query->bindValue(":datacadastro", $this->getDatacadastro());
				$query->bindValue(":observacoesgerais", $this->getObservacoesgerais());
				$query->bindValue(":triagem", $this->getTriagem());
				
				$query->execute();		
						
			}
			catch(PDOException $e)
			{
				echo $e->getMessage();
			}
			
		}
		
		public function alterar()
		{
			$conexao = new conexao();
			
			try
			{	
				$query = $conexao->conn->prepare("update triagempsicologica set observacoesgerais = :observacoesgerais, triagem = :triagem 
				where idtriagempsicologica = :idtriagempsicologica");
				
				$query->bindValue(":idtriagempsicologica", $this->getIdtriagempsicologica());
				$query->bindValue(":observacoesgerais", $this->getObservacoesgerais());
				$query->bindValue(":triagem", $this->getTriagem());
				
				$query->execute();		
						
			}
			catch(PDOException $e)
			{
				echo $e->getMessage();
			}
			
		}
		
		public function mostrarum()
		{
			$conexao = new conexao();
			
			try
			{	
				$query = $conexao->conn->prepare("select *from triagempsicologica where idtriagempsicologica = :idtriagempsicologica");
				
				$query->bindValue(":idtriagempsicologica", $this->getIdtriagempsicologica());
				
				$query->execute();	

				$r = $query->fetch();
				
				return $r;
						
			}
			catch(PDOException $e)
			{
				echo $e->getMessage();
			}
			
		}
		
		public function mostrartodos()
		{
			$conexao = new conexao();
			
			try
			{	
				$query = $conexao->conn->prepare("select *from triagempsicologica where idaluno = :idaluno");
				
				$query->bindValue(":idaluno", $this->getIdaluno());
				
				$query->execute();	

				$r = $query->fetchAll();
				
				return $r;
						
			}
			catch(PDOException $e)
			{
				echo $e->getMessage();
			}
			
		}
		
		public function deletar()
		{
			$conexao = new conexao();
			
			try
			{	
				$query = $conexao->conn->prepare("delete from triagempsicologica where idtriagempsicologica = :idtriagempsicologica");
				
				$query->bindValue(":idtriagempsicologica", $this->getIdtriagempsicologica());
				
				$query->execute();
						
			}
			catch(PDOException $e)
			{
				echo $e->getMessage();
			}
			
		}
	}
	
?>