<?php
	
	require_once "conexao.php";
	class permissoes
	{
		private $idpermissoes;
		private $administrativo;
		private $planoterapeutico;
		private $psicologico;
		private $neurologico;
		private $fonoaudiologico;
		private $terapiaocupacional;
		private $pedagogico;
		private $social;
		
		public function getIdpermissoes()
		{
			return $this->idpermissoes;
		}
		public function setIdpermissoes($idpermissoes)
		{
			$this->idpermissoes = $idpermissoes;
		}
		
		public function getAdministrativo()
		{
			return $this->administrativo;
		}
		public function setAdministrativo($administrativo)
		{
			$this->administrativo = $administrativo;
		}
		
		public function getPlanoterapeutico()
		{
			return $this->planoterapeutico;
		}
		public function setPlanoterapeutico($planoterapeutico)
		{
			$this->planoterapeutico = $planoterapeutico;
		}
		
		public function getPsicologico()
		{
			return $this->psicologico;
		}
		public function setPsicologico($psicologico)
		{
			$this->psicologico = $psicologico;
		}
		
		public function getNeurologico()
		{
			return $this->neurologico;
		}
		public function setNeurologico($neurologico)
		{
			$this->neurologico = $neurologico;
		}
		
		public function getFonoaudiologico()
		{
			return $this->fonoaudiologico;
		}
		public function setFonoaudiologico($fonoaudiologico)
		{
			$this->fonoaudiologico = $fonoaudiologico;
		}
		
		public function getTerapiaocupacional()
		{
			return $this->terapiaocupacional;
		}
		public function setTerapiaocupacional($terapiaocupacional)
		{
			$this->terapiaocupacional = $terapiaocupacional;
		}
		
		public function getPedagogico()
		{
			return $this->pedagogico;
		}
		public function setPedagogico($pedagogico)
		{
			$this->pedagogico = $pedagogico;
		}
		
		public function getSocial()
		{
			return $this->social;
		}
		public function setSocial($social)
		{
			$this->social = $social;
		}
		
		public function cadastrar()
		{
			$conexao = new conexao();
			
			try
			{	
				$query = $conexao->conn->prepare("insert into permissoes(administrativo, planoterapeutico, psicologico, neurologico, fonoaudiologico, 
				terapiaocupacional, pedagogico, social) values(:administrativo, :planoterapeutico, :psicologico, :neurologico, :fonoaudiologico, 
				:terapiaocupacional, :pedagogico, :social)");
				
				$query->bindValue(":administrativo", $this->getAdministrativo());
				$query->bindValue(":planoterapeutico", $this->getPlanoterapeutico());
				$query->bindValue(":psicologico", $this->getPsicologico());
				$query->bindValue(":neurologico", $this->getNeurologico());
				$query->bindValue(":fonoaudiologico", $this->getFonoaudiologico());
				$query->bindValue(":terapiaocupacional", $this->getTerapiaocupacional());
				$query->bindValue(":pedagogico", $this->getPedagogico());
				$query->bindValue(":social", $this->getSocial());
				
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
				$query = $conexao->conn->prepare("update permissoes set administrativo = :administrativo, planoterapeutico = :planoterapeutico, psicologico = :psicologico,
				neurologico = :neurologico, fonoaudiologico = :fonoaudiologico, terapiaocupacional = :terapiaocupacional, pedagogico = :pedagogico, social = :social where idpermissoes = :idpermissoes; ");
				
				$query->bindValue(":idpermissoes", $this->getIdpermissoes());
				$query->bindValue(":administrativo", $this->getAdministrativo());
				$query->bindValue(":planoterapeutico", $this->getPlanoterapeutico());
				$query->bindValue(":psicologico", $this->getPsicologico());
				$query->bindValue(":neurologico", $this->getNeurologico());
				$query->bindValue(":fonoaudiologico", $this->getFonoaudiologico());
				$query->bindValue(":terapiaocupacional", $this->getTerapiaocupacional());
				$query->bindValue(":pedagogico", $this->getPedagogico());
				$query->bindValue(":social", $this->getSocial());
				
				$query->execute();		
						
			}
			catch(PDOException $e)
			{
				echo $e->getMessage();
			}
			
		}
		
		public function mostrar()
		{
			$conexao = new conexao();
			
			try
			{	
				$query = $conexao->conn->prepare("select *from permissoes where idpermissoes = :idpermissoes; ");
				
				$query->bindValue(":idpermissoes", $this->getIdpermissoes());
				
				$query->execute();	
				
				$r = $query->fetch();
				
				return $r;
						
			}
			catch(PDOException $e)
			{
				echo $e->getMessage();
			}
			
		}
		
		public function ultimoid()
		{
			$conexao = new conexao();
			
			try
			{
				$query = $conexao->conn->prepare("select max(idpermissoes) as id from permissoes");
				
				$query->execute();
				
				$r = $query->fetch();
				
				return $r;
			}
			catch(PDOException $e)
			{
				echo $e->getMessage();
			}
		}
	}
?>