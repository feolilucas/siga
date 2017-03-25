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

		public function cadastrar()
		{
			$conexao = new conexao();
			
			try
			{	
				$query = $conexao->conn->prepare("insert into parecerpsicologico(idaluno, datacadastro, observacoesgerais, parecerpsicologico)
				values(:idaluno, now(), :observacoesgerais, :parecerpsicologico)");
				
				$query->bindValue(":idaluno", $this->getIdaluno());
				$query->bindValue(":observacoesgerais", $this->getObservacoesgerais());
				$query->bindValue(":parecerpsicologico", $this->getParecerpsicologico());
				
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
				$query = $conexao->conn->prepare("update parecerpsicologico set observacoesgerais = :observacoesgerais, parecerpsicologico = :parecerpsicologico where idparecerpsicologico = :idparecerpsicologico");
				
				$query->bindValue(":idparecerpsicologico", $this->getIdparecerpsicologico());
				$query->bindValue(":observacoesgerais", $this->getObservacoesgerais());
				$query->bindValue(":parecerpsicologico", $this->getParecerpsicologico());
				
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
				$query = $conexao->conn->prepare("select *from parecerpsicologico where idparecerpsicologico = :idparecerpsicologico");
				
				$query->bindValue(":idparecerpsicologico", $this->getIdparecerpsicologico());
				
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
				$query = $conexao->conn->prepare("select *from parecerpsicologico where idaluno = :idaluno");
				
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
				$query = $conexao->conn->prepare("delete from parecerpsicologico where idparecerpsicologico = :idparecerpsicologico");
				
				$query->bindValue(":idparecerpsicologico", $this->getIdparecerpsicologico());
				
				$query->execute();
						
			}
			catch(PDOException $e)
			{
				echo $e->getMessage();
			}
			
		}
	}
	
?>