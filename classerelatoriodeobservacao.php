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
		
		public function cadastrar()
		{
			$conexao = new conexao();
			
			try
			{	
				$query = $conexao->conn->prepare("insert into relatoriodeobservacao(idaluno, datacadastro, observacoesgerais, vidadiaria, vidapratica, habilidadesbasicas)
				values(:idaluno, now(), :observacoesgerais, :vidadiaria, :vidapratica, :habilidadesbasicas)");
				
				$query->bindValue(":idaluno", $this->getIdaluno());
				$query->bindValue(":observacoesgerais", $this->getObservacoesgerais());
				$query->bindValue(":vidadiaria", $this->getVidadiaria());
				$query->bindValue(":vidapratica", $this->getVidapratica());
				$query->bindValue(":habilidadesbasicas", $this->getHabilidadesbasicas());
				
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
				$query = $conexao->conn->prepare("update relatoriodeobservacao set observacoesgerais = :observacoesgerais, vidadiaria = :vidadiaria, vidapratica = :vidapratica, habilidadesbasicas = :habilidadesbasicas 
				where idrelatoriodeobservacao = :idrelatoriodeobservacao");
				
				$query->bindValue(":idrelatoriodeobservacao", $this->getIdrelatoriodeobservacao());
				$query->bindValue(":observacoesgerais", $this->getObservacoesgerais());
				$query->bindValue(":vidadiaria", $this->getVidadiaria());
				$query->bindValue(":vidapratica", $this->getVidapratica());
				$query->bindValue(":habilidadesbasicas", $this->getHabilidadesbasicas());
				
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
				$query = $conexao->conn->prepare("select *from relatoriodeobservacao where idrelatoriodeobservacao = :idrelatoriodeobservacao");
				
				$query->bindValue(":idrelatoriodeobservacao", $this->getIdrelatoriodeobservacao());
				
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
				$query = $conexao->conn->prepare("select *from relatoriodeobservacao where idaluno = :idaluno");
				
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
				$query = $conexao->conn->prepare("delete from relatoriodeobservacao where idrelatoriodeobservacao = :idrelatoriodeobservacao");
				
				$query->bindValue(":idrelatoriodeobservacao", $this->getIdrelatoriodeobservacao());
				
				$query->execute();
						
			}
			catch(PDOException $e)
			{
				echo $e->getMessage();
			}
			
		}
	}
	
?>