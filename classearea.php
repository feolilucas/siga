<?php
	require_once 'conexao.php';
	
	class area
	{
		private $idarea;
		private $nome;
		
		public function getIdarea()
		{
			return $this->idarea;
		}
		public function setIdarea($idarea)
		{
			$this->idarea = $idarea;
		}
		
		public function getNome()
		{
			return $this->nome;
		}
		public function setNome($nome)
		{
			$this->nome = $nome;
		}
		
		public function buscarAreas()
		{
			$conexao = new conexao();
			
			try
			{	
				$query = $conexao->conn->prepare("select *from area;");
				
				$query->execute();	
						
				$r = $query->fetchAll();
					
				return $r;
			}
			catch(PDOException $e)
			{
				echo $e->getMessage();
			}
		}

		public function cadastrar()
		{
			$conexao = new conexao();
			
			try
			{	
				$query = $conexao->conn->prepare("insert into area(nome) values(:nome);");
				$query->bindValue(":nome", $this->getNome());
				
				$query->execute();	
						
			}
			catch(PDOException $e)
			{
				echo $e->getMessage();
			}
		}

		public function deletar()
		{
			$conexao = new conexao();
			require_once "classeusuario.php";
			
			$usuario = new usuario;
			try
			{	
				$usuario->setIdarea($this->getIdarea());
				$usuario->areanull();

				$query = $conexao->conn->prepare("delete from area where idarea = :idarea;");
				$query->bindValue(":idarea", $this->getIdarea());
				
				$query->execute();	
						
			}
			catch(PDOException $e)
			{
				echo $e->getMessage();
			}
		}
	}
	

?>