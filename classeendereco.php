<?php
	class endereco
	{
		private $idendereco;
		private $logradouro;
		private $numero;
		private $complemento;
		private $bairro;
		private $referencia;
		private $cidade;
		private $estado;
		private $cep;
		
		public function getIdendereco()
		{
			return $this->idendereco;
		}
		public function setIdendereco($idendereco)
		{
			$this->idendereco = $idendereco;
		}
		
		public function getLogradouro()
		{
			return $this->logradouro;
		}
		public function setLogradouro($logradouro)
		{
			$this->logradouro = $logradouro;
		}
		
		public function getNumero()
		{
			return $this->numero;
		}
		public function setNumero($numero)
		{
			$this->numero = $numero;
		}
		
		public function getComplemento()
		{
			return $this->complemento;
		}
		public function setComplemento($complemento)
		{
			$this->complemento = $complemento;
		}
		
		public function getBairro()
		{
			return $this->bairro;
		}
		public function setBairro($bairro)
		{
			$this->bairro = $bairro;
		}
		
		public function getReferencia()
		{
			return $this->referencia;
		}
		public function setReferencia($referencia)
		{
			$this->referencia = $referencia;
		}
		
		public function getCidade()
		{
			return $this->cidade;
		}
		public function setCidade($cidade)
		{
			$this->cidade = $cidade;
		}
		
		public function getEstado()
		{
			return $this->estado;
		}
		public function setEstado($estado)
		{
			$this->estado = $estado;
		}
		
		public function getCep()
		{
			return $this->cep;
		}
		public function setCep($cep)
		{
			$this->cep = $cep;
		}
		
		public function cadastrar()
		{
			$conexao = new conexao();
			
			try
			{	
				$query = $conexao->conn->prepare("insert into endereco(logradouro, numero, complemento, bairro, referencia, 
				cidade, estado, cep) values(:logradouro, :numero, :complemento, :bairro, :referencia, 
				:cidade, :estado, :cep)");
				
				$query->bindValue(":logradouro", $this->getLogradouro());
				$query->bindValue(":numero", $this->getNumero());
				$query->bindValue(":complemento", $this->getComplemento());
				$query->bindValue(":bairro", $this->getBairro());
				$query->bindValue(":referencia", $this->getReferencia());
				$query->bindValue(":cidade", $this->getCidade());
				$query->bindValue(":estado", $this->getEstado());
				$query->bindValue(":cep", $this->getCep());
				
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
				$query = $conexao->conn->prepare("update endereco set logradouro = :logradouro, numero = :numero, complemento = :complemento, bairro = :bairro, referencia = :referencia, 
				cidade = :cidade, estado = :estado, cep = :cep where idendereco = :idendereco;");
				
				$query->bindValue(":idendereco", $this->getIdendereco());
				$query->bindValue(":logradouro", $this->getLogradouro());
				$query->bindValue(":numero", $this->getNumero());
				$query->bindValue(":complemento", $this->getComplemento());
				$query->bindValue(":bairro", $this->getBairro());
				$query->bindValue(":referencia", $this->getReferencia());
				$query->bindValue(":cidade", $this->getCidade());
				$query->bindValue(":estado", $this->getEstado());
				$query->bindValue(":cep", $this->getCep());
				
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
			
			try
			{	
				$query = $conexao->conn->prepare("delete from endereco where idendereco = :idendereco;");
				
				$query->bindValue(":idendereco", $this->getIdendereco());
				
				$query->execute();		
						
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
				$query = $conexao->conn->prepare("select max(idendereco) as id from endereco");
				
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