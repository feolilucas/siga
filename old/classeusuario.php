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
		
		
		public function verificarUsuarioSenha()
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
		
		public function buscarPerfil()
		{
			$conexao = new conexao();
			
			try
			{
				$query = $conexao->conn->prepare("select p.idPessoaFisica, p.nome, p.email, p.cep, p.cpf, p.dataNascimento, p.telefone, p.sexo, p.rua, p.bairro, p.complemento,
				p.numero, p.cidade, p.estado, u.idUsuario, u.usuario, u.senha, u.tipoUsuario from 
				pessoafisica as p inner join usuario as u on u.idpessoafisica = p.idpessoafisica where u.idusuario = :id");
				
				$query->bindValue(":id", $this->getIdUsuario());
				
				$query->execute();
				
				$r = $query->fetch();
				
				return $r;
			
			}
			catch(PDOException $e)
			{
				echo $e->getMessage();
			}
		}
		
		public function alterarSenha($novasenha)
		{
			$conexao = new conexao();
			
			try
			{
				$query = $conexao->conn->prepare("update usuario set senha = :senha where idUsuario = :id");
				
				$query->bindValue(":senha", $novasenha);
				$query->bindValue(":id", $this->getIdUsuario());
				
				$query->execute();
			
			}
			catch(PDOException $e)
			{
				echo $e->getMessage();
			}
		}
		
		public function alterarPerfil()
		{
			$conexao = new conexao();
			
			try
			{
				$query = $conexao->conn->prepare("update pessoafisica set nome = :nome, email = :email, cep = :cep, cpf = :cpf, dataNascimento = :datanascimento, telefone = :telefone, sexo = :sexo, rua = :rua, bairro = :bairro, 
				complemento = :complemento, numero = :numero, cidade = :cidade, estado = :estado where idPessoaFisica = :id");
				
				$query->bindValue(":nome", $this->getNome());
				$query->bindValue(":email", $this->getEmail());
				$query->bindValue(":cep", $this->getCep());
				$query->bindValue(":cpf", $this->getCpf());
				$query->bindValue(":datanascimento", $this->getDataNascimento());
				$query->bindValue(":telefone", $this->getTelefone());
				$query->bindValue(":sexo", $this->getSexo());
				$query->bindValue(":rua", $this->getRua());
				$query->bindValue(":bairro", $this->getBairro());
				$query->bindValue(":complemento", $this->getComplemento());
				$query->bindValue(":numero", $this->getNumero());
				$query->bindValue(":cidade", $this->getCidade());
				$query->bindValue(":estado", $this->getEstado());
				$query->bindValue(":id", $this->getIdPessoaFisica());
				
				$query->execute();
			
			}
			catch(PDOException $e)
			{
				echo $e->getMessage();
			}
		}
		
		public function cadastrarPessoaFisica()
		{
			$conexao = new conexao();
			
			try
			{
				
				$query = $conexao->conn->prepare("insert into pessoafisica(nome, email, cep, cpf, dataNascimento, telefone, sexo, rua,
				bairro, complemento, numero, cidade, estado) values(:nome, :email, :cep, :cpf, :datanascimento, :telefone, :sexo, :rua, :bairro, 
				:complemento, :numero, :cidade, :estado)");
				
				$query->bindValue(":nome", $this->getNome());
				$query->bindValue(":email", $this->getEmail());
				$query->bindValue(":cep", $this->getCep());
				$query->bindValue(":cpf", $this->getCpf());
				$query->bindValue(":datanascimento", $this->getDataNascimento());
				$query->bindValue(":telefone", $this->getTelefone());
				$query->bindValue(":sexo", $this->getSexo());
				$query->bindValue(":rua", $this->getRua());
				$query->bindValue(":bairro", $this->getBairro());
				$query->bindValue(":complemento", $this->getComplemento());
				$query->bindValue(":numero", $this->getNumero());
				$query->bindValue(":cidade", $this->getCidade());
				$query->bindValue(":estado", $this->getEstado());
				
				$query->execute();				
			}
			catch(PDOException $e)
			{
				echo $e->getMessage();
			}
		}
		
		public function ultimoIdPessoaFisica()
		{
			$conexao = new conexao();
			
			try
			{
				$query = $conexao->conn->prepare("select max(idPessoaFisica) as id from pessoafisica");
				
				$query->execute();
				
				$r = $query->fetch();
				
				return $r;
			}
			catch(PDOException $e)
			{
				echo $e->getMessage();
			}
		}
		
		public function cadastrarUsuario()
		{
			$conexao = new conexao();
			
			$this->cadastrarPessoaFisica();
			
			$r = $this->ultimoIdPessoaFisica();
			
			try
			{	
				$query = $conexao->conn->prepare("insert into usuario(usuario, senha, tipoUsuario, idPessoaFisica) values(:usuario, :senha, :tipoUsuario, :idPessoaFisica)");
				
				$query->bindValue(":usuario", $this->getUsuario());
				$query->bindValue(":senha", $this->getSenha());
				$query->bindValue(":tipoUsuario", $this->getTipoUsuario());
				$query->bindValue(":idPessoaFisica", $r['id']);
				
				$query->execute();		
						
			}
			catch(PDOException $e)
			{
				echo $e->getMessage();
			}
			
		}
	}
?>