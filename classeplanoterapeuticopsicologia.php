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
		
		public function cadastrar()
		{
			$conexao = new conexao();
			
			try
			{	
				$query = $conexao->conn->prepare("insert into planoterapeuticopsicologia(idaluno, datacadastro, observacoesgerais, planoterapeutico)
				values(:idaluno, :datacadastro, :observacoesgerais, :planoterapeutico)");
				
				$query->bindValue(":idaluno", $this->getIdaluno());
				$query->bindValue(":datacadastro", $this->getDatacadastro());
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
				$query = $conexao->conn->prepare("update planoterapeuticopsicologia set observacoesgerais = :observacoesgerais, planoterapeutico = :planoterapeutico 
				where idplanoterapeuticopsicologia = :idplanoterapeuticopsicologia");
				
				$query->bindValue(":idplanoterapeuticopsicologia", $this->getIdplanoterapeuticopsicologia());
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
				$query = $conexao->conn->prepare("select *from planoterapeuticopsicologia where idplanoterapeuticopsicologia = :idplanoterapeuticopsicologia");
				
				$query->bindValue(":idplanoterapeuticopsicologia", $this->getIdplanoterapeuticopsicologia());
				
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
				$query = $conexao->conn->prepare("select *from planoterapeuticopsicologia where idaluno = :idaluno");
				
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
				$query = $conexao->conn->prepare("delete from planoterapeuticopsicologia where idplanoterapeuticopsicologia = :idplanoterapeuticopsicologia");
				
				$query->bindValue(":idplanoterapeuticopsicologia", $this->getIdplanoterapeuticopsicologia());
				
				$query->execute();
						
			}
			catch(PDOException $e)
			{
				echo $e->getMessage();
			}
			
		}
	}
	
?>