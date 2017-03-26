<?php
	require_once 'conexao.php';
	
	class planoterapeuticopsicologico
	{
		private $idplanoterapeuticopsicologico;
		private $idaluno;
		private $datacadastro;
		private $observacoesgerais;
		private $planoterapeutico;

		function setIdplanoterapeuticopsicologico($idplanoterapeuticopsicologico) { $this->idplanoterapeuticopsicologico = $idplanoterapeuticopsicologico; }
		function getIdplanoterapeuticopsicologico() { return $this->idplanoterapeuticopsicologico; }
		
		function setIdaluno($idaluno) { $this->idaluno = $idaluno; }
		function getIdaluno() { return $this->idaluno; }
		
		function setDatacadastro($datacadastro) { $this->datacadastro = $datacadastro; }
		function getDatacadastro() { return $this->datacadastro; }
		
		function setObservacoesgerais($observacoesgerais) { $this->observacoesgerais = $observacoesgerais; }
		function getObservacoesgerais() { return $this->observacoesgerais; }
		
		function setPlanoterapeutico($planoterapeutico) { $this->planoterapeutico = $planoterapeutico; }
		function getPlanoterapeutico() { return $this->planoterapeutico; }
		
		public function cadastrar()
		{
			$conexao = new conexao();
			
			try
			{	
				$query = $conexao->conn->prepare("insert into planoterapeuticopsicologico(idaluno, datacadastro, observacoesgerais, planoterapeutico)
				values(:idaluno,  now(), :observacoesgerais, :planoterapeutico)");
				
				$query->bindValue(":idaluno", $this->getIdaluno());
				$query->bindValue(":observacoesgerais", $this->getObservacoesgerais());
				$query->bindValue(":planoterapeutico", $this->getPlanoterapeutico());
				
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
				$query = $conexao->conn->prepare("update planoterapeuticopsicologico set observacoesgerais = :observacoesgerais, planoterapeutico = :planoterapeutico 
				where idplanoterapeuticopsicologico = :idplanoterapeuticopsicologico");
				
				$query->bindValue(":idplanoterapeuticopsicologico", $this->getIdplanoterapeuticopsicologico());
				$query->bindValue(":observacoesgerais", $this->getObservacoesgerais());
				$query->bindValue(":planoterapeutico", $this->getPlanoterapeutico());
				
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
				$query = $conexao->conn->prepare("select *from planoterapeuticopsicologico where idplanoterapeuticopsicologico = :idplanoterapeuticopsicologico");
				
				$query->bindValue(":idplanoterapeuticopsicologico", $this->getIdplanoterapeuticopsicologico());
				
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
				$query = $conexao->conn->prepare("select *from planoterapeuticopsicologico where idaluno = :idaluno");
				
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
				$query = $conexao->conn->prepare("delete from planoterapeuticopsicologico where idplanoterapeuticopsicologico = :idplanoterapeuticopsicologico");
				
				$query->bindValue(":idplanoterapeuticopsicologico", $this->getIdplanoterapeuticopsicologico());
				
				$query->execute();
						
			}
			catch(PDOException $e)
			{
				echo $e->getMessage();
			}
			
		}
	}
	
?>