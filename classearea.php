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
	}
	

?>