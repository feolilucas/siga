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
		
		public function getIdusuario()
		{
			return $this->idusuario;
		}
		public function setIdusuario($idusuario)
		{
			$this->idusuario = $idusuario;
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
		
		public function cadastrar()
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
				$query->bindValue(":idendereco", $this->getIdendereco());
				$query->bindValue(":idarea", $this->getIdarea());
				$query->bindValue(":idpermissoes", $this->getIdpermissoes());
				$query->bindValue(":email", $this->getEmail());
				$query->bindValue(":telefone", $this->getTelefone());
				
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
				$query = $conexao->conn->prepare("select u.idusuario, u.nome, rg, cpf, datanascimento, e.logradouro, e.numero, e.complemento, e. bairro, e.referencia, e.cidade, e.estado, e.cep,
				a.nome as area, email, telefone, u.senha, u.usuario, u.idpermissoes, u.idendereco from usuario as u inner join area as a on u.idarea = a.idarea 
				inner join endereco as e on u.idendereco = e.idendereco where idusuario = :idusuario;");
				
				$query->bindValue(":idusuario", $this->getIdusuario());
				
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
				$query = $conexao->conn->prepare("select u.idusuario, u.nome, rg, cpf, datanascimento, e.logradouro, e.numero, e.complemento, e. bairro, e.referencia, e.cidade, e.estado, e.cep,
				a.nome as area, email, u.idpermissoes, u.usuario, telefone from usuario as u inner join area as a on u.idarea = a.idarea 
				inner join endereco as e on u.idendereco = e.idendereco;");
				
				$query->execute();

				$r = $query->fetchAll();	

				return $r;
						
			}
			catch(PDOException $e)
			{
				echo $e->getMessage();
			}
			
		}
		
		public function mostrarusuariosenha()
		{
	
			$conexao = new conexao();
			
			try
			{	
				$query = $conexao->conn->prepare("select usuario, senha from usuario where idusuario = :idusuario");
				
				$query->bindValue(":idusuario", $this->getIdusuario());
				
				$query->execute();
				
				$r = $query->fetch();
				
				return $r;
						
			}
			catch(PDOException $e)
			{
				echo $e->getMessage();
			}
			
		}
		
		public function alterarsenha()
		{
	
			$conexao = new conexao();
			
			try
			{	
				$query = $conexao->conn->prepare("update usuario set senha = :senha where idusuario = :idusuario");
				
				$query->bindValue(":idusuario", $this->getIdusuario());
				$query->bindValue(":senha", $this->getSenha());
				
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
				$query = $conexao->conn->prepare("update usuario set nome = :nome, rg = :rg, cpf = :cpf, datanascimento =  :datanascimento,
				email = :email, telefone = :telefone, idarea = :idarea, senha = :senha, usuario = :usuario where idusuario = :idusuario");
				
				$query->bindValue(":idusuario", $this->getIdusuario());
				$query->bindValue(":nome", $this->getNome());
				$query->bindValue(":rg", $this->getRg());
				$query->bindValue(":cpf", $this->getCpf());
				$query->bindValue(":datanascimento", $this->getDatanascimento());
				$query->bindValue(":email", $this->getEmail());
				$query->bindValue(":telefone", $this->getTelefone());
				$query->bindValue(":idarea", $this->getIdarea());
				$query->bindValue(":senha", $this->getSenha());
				$query->bindValue(":usuario", $this->getUsuario());

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
				$query = $conexao->conn->prepare("delete from usuario where idusuario = :idusuario;");
				
				$query->bindValue(":idusuario", $this->getIdusuario());
				
				$query->execute();						
			}
			catch(PDOException $e)
			{
				echo $e->getMessage();
			}
			
		}
		
		
	}
?>