<?php
	
	require_once 'conexao.php';
	
	class usuario
	{
		private $nome;
		private $email;
		private $cpf;
		private $datanascimento;
		private $telefone;
		private $idendereco;
		private $idpermissoes;
		private $rg;
		private $usuario;
		private $senha;
		private $idusuario;
		private $idarea;
		
		public function getIdarea()
		{
			return $this->idarea;
		}
		public function setIdarea($idarea)
		{
			$this->idarea = $idarea;
		}
		
		public function getIdpermissoes()
		{
			return $this->idpermissoes;
		}
		public function setIdpermissoes($idpermissoes)
		{
			$this->idpermissoes = $idpermissoes;
		}
		
		public function getRg()
		{
			return $this->rg;
		}
		public function setRg($rg)
		{
			$this->rg = $rg;
		}
		
		public function getIdendereco()
		{
			return $this->idendereco;
		}
		public function setIdendereco($idendereco)
		{
			$this->idendereco = $idendereco;
		}
		
		public function getNome()
		{
			return $this->nome;
		}
		public function setNome($nome)
		{
			$this->nome = $nome;
		}
		
		public function getEmail()
		{
			return $this->email;
		}
		public function setEmail($email)
		{
			$this->email = $email;
		}
		
		public function getCpf()
		{
			return $this->cpf;
		}
		public function setCpf($cpf)
		{
			$this->cpf = $cpf;
		}
		
		public function getDatanascimento()
		{
			return $this->datanascimento;
		}
		public function setDatanascimento($datanascimento)
		{
			$this->datanascimento = $datanascimento;
		}
		
		public function getTelefone()
		{
			return $this->telefone;
		}
		public function setTelefone($telefone)
		{
			$this->telefone = $telefone;
		}
		
		public function getIdUsuario()
		{
			return $this->idUsuario;
		}
		public function setIdUsuario($idUsuario)
		{
			$this->idUsuario = $idUsuario;
		}
		
		public function getUsuario()
		{
			return $this->usuario;
		}
		public function setUsuario($usuario)
		{
			$this->usuario = $usuario;
		}
		
		public function getSenha()
		{
			return $this->senha;
		}
		public function setSenha($senha)
		{
			$this->senha = $senha;
		}
		
		
		public function verificaUsuarioSenha()
		{
			$conexao = new conexao();
			
			try
			{
								
				$query = $conexao->conn->prepare("select *from usuario where usuario = :login and senha = :senha");
				
						
				$query->bindValue(":login", $this->getUsuario());
				$query->bindValue(":senha", $this->getSenha());
				
				$query->execute();
				$r = $query->fetch();
				
				return $r;
			
			}
			catch(PDOException $e)
			{
				echo $e->getMessage();
			}
		}
		
		public function cadastrar($idpermissoes, $idendereco)
		{
	
			$conexao = new conexao();
			
			try
			{	
				$query = $conexao->conn->prepare("insert into usuario(nome, rg, cpf, datanascimento, usuario, 
				senha, idendereco, idarea, idpermissoes, email, telefone) values(:nome, :rg, :cpf, :datanascimento, :usuario, 
				:senha, :idendereco, :idarea, :idpermissoes, :email, :telefone)");
				
				$query->bindValue(":nome", $this->getNome());
				$query->bindValue(":rg", $this->getRg());
				$query->bindValue(":cpf", $this->getCpf());
				$query->bindValue(":datanascimento", $this->getDatanascimento());
				$query->bindValue(":usuario", $this->getUsuario());
				$query->bindValue(":senha", $this->getSenha());
				$query->bindValue(":idendereco", $idendereco);
				$query->bindValue(":idarea", $this->getIdarea());
				$query->bindValue(":idpermissoes", $idpermissoes);
				$query->bindValue(":email", $this->getEmail());
				$query->bindValue(":telefone", $this->getTelefone());
				
				$query->execute();		
						
			}
			catch(PDOException $e)
			{
				echo $e->getMessage();
			}
			
		}
		
		
	}
?>