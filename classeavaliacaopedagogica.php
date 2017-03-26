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
		
		public function cadastrar()
		{
			$conexao = new conexao();
			
			try
			{	
				$query = $conexao->conn->prepare("insert into avaliacaopedagogica(idaluno, datacadastro, observacoesgerais, avaliacaopedagogica)
				values(:idaluno, now(), :observacoesgerais, :avaliacaopedagogica)");
				
				$query->bindValue(":idaluno", $this->getIdaluno());
				$query->bindValue(":observacoesgerais", $this->getObservacoesgerais());
				$query->bindValue(":avaliacaopedagogica", $this->getAvaliacaopedagogica());
				
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
				$query = $conexao->conn->prepare("update avaliacaopedagogica set observacoesgerais = :observacoesgerais, avaliacaopedagogica = :avaliacaopedagogica where idavaliacaopedagogica = :idavaliacaopedagogica");
				
				$query->bindValue(":idavaliacaopedagogica", $this->getIdavaliacaopedagogica());
				$query->bindValue(":observacoesgerais", $this->getObservacoesgerais());
				$query->bindValue(":avaliacaopedagogica", $this->getAvaliacaopedagogica());
				
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
				$query = $conexao->conn->prepare("select *from avaliacaopedagogica where idavaliacaopedagogica = :idavaliacaopedagogica");
				
				$query->bindValue(":idavaliacaopedagogica", $this->getIdavaliacaopedagogica());
				
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
				$query = $conexao->conn->prepare("select *from avaliacaopedagogica where idaluno = :idaluno");
				
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
				$query = $conexao->conn->prepare("delete from avaliacaopedagogica where idavaliacaopedagogica = :idavaliacaopedagogica");
				
				$query->bindValue(":idavaliacaopedagogica", $this->getIdavaliacaopedagogica());
				
				$query->execute();
						
			}
			catch(PDOException $e)
			{
				echo $e->getMessage();
			}
			
		}
	}

?>