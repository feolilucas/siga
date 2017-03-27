<?php
	
	require_once 'conexao.php';	
		
	class aluno
	{
		private $idaluno;
		private $nome;
		private $datanascimento;
		private $datacadastro;
		private $sexo;
		private $nomepai;
		private $nomemae;
		private $idendereco;
		private $cpf;
		private $nacionalidade;
		private $rg;
		private $dataemissaorg;
		private $deficiencia;

		function setIdaluno($idaluno) { $this->idaluno = $idaluno; }
		function getIdaluno() { return $this->idaluno; }
		
		function setNome($nome) { $this->nome = $nome; }
		function getNome() { return $this->nome; }
		
		function setDatanascimento($datanascimento) { $this->datanascimento = $datanascimento; }
		function getDatanascimento() { return $this->datanascimento; }
		
		function setDatacadastro($datacadastro) { $this->datacadastro = $datacadastro; }
		function getDatacadastro() { return $this->datacadastro; }
		
		function setSexo($sexo) { $this->sexo = $sexo; }
		function getSexo() { return $this->sexo; }
		
		function setNomepai($nomepai) { $this->nomepai = $nomepai; }
		function getNomepai() { return $this->nomepai; }
		
		function setNomemae($nomemae) { $this->nomemae = $nomemae; }
		function getNomemae() { return $this->nomemae; }
		
		function setIdendereco($idendereco) { $this->idendereco = $idendereco; }
		function getIdendereco() { return $this->idendereco; }
		
		function setCpf($cpf) { $this->cpf = $cpf; }
		function getCpf() { return $this->cpf; }
		
		function setNacionalidade($nacionalidade) { $this->nacionalidade = $nacionalidade; }
		function getNacionalidade() { return $this->nacionalidade; }
		
		function setRg($rg) { $this->rg = $rg; }
		function getRg() { return $this->rg; }
		
		function setDataemissaorg($dataemissaorg) { $this->dataemissaorg = $dataemissaorg; }
		function getDataemissaorg() { return $this->dataemissaorg; }
		
		function setDeficiencia($deficiencia) { $this->deficiencia = $deficiencia; }
		function getDeficiencia() { return $this->deficiencia; }
		
		public function cadastrar()
		{
			$conexao = new conexao();
			
			try
			{
				$query = $conexao->conn->prepare("insert into aluno(nome, datanascimento, datacadastro, sexo, nomepai, nomemae, idendereco,
				cpf, nacionalidade, rg, dataemissaorg, deficiencia) values( :nome, :datanascimento, now(), :sexo, :nomepai, :nomemae, :idendereco,
				:cpf, :nacionalidade, :rg, :dataemissaorg, :deficiencia);");
				
				$query->bindValue(":nome", $this->getNome());
				$query->bindValue(":datanascimento", $this->getDatanascimento());
				$query->bindValue(":sexo", $this->getSexo());
				$query->bindValue(":nomepai", $this->getNomepai());
				$query->bindValue(":nomemae", $this->getNomemae());
				$query->bindValue(":idendereco", $this->getIdendereco());
				$query->bindValue(":cpf", $this->getCpf());
				$query->bindValue(":nacionalidade", $this->getNacionalidade());
				$query->bindValue(":rg", $this->getRg());
				$query->bindValue(":dataemissaorg", $this->getDataemissaorg());
				$query->bindValue(":deficiencia", $this->getDeficiencia());
				
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
				$query = $conexao->conn->prepare("update aluno set nome = :nome, datanascimento = :datanascimento, datacadastro = :datacadastro,
				sexo = :sexo, nomepai = :nomepai, nomemae = :nomemae, cpf = :cpf, nacionalidade = :nacionalidade, rg = :rg, dataemissaorg = :dataemissaorg, deficiencia = :deficiencia 
				where idaluno = :idaluno;");
				
				$query->bindValue(":idaluno", $this->getIdaluno());
				$query->bindValue(":nome", $this->getNome());
				$query->bindValue(":datanascimento", $this->getDatanascimento());
				$query->bindValue(":datacadastro", $this->getDatacadastro());
				$query->bindValue(":sexo", $this->getSexo());
				$query->bindValue(":nomepai", $this->getNomepai());
				$query->bindValue(":nomemae", $this->getNomemae());
				$query->bindValue(":cpf", $this->getCpf());
				$query->bindValue(":nacionalidade", $this->getNacionalidade());
				$query->bindValue(":rg", $this->getRg());
				$query->bindValue(":dataemissaorg", $this->getDataemissaorg());
				$query->bindValue(":deficiencia", $this->getDeficiencia());
				
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
				$query = $conexao->conn->prepare("select idaluno, nome, datanascimento, datacadastro, sexo, nomepai, nomemae,
				e.logradouro, e.numero, e.complemento, e. bairro, e.referencia, e.cidade, e.estado, e.cep,
				cpf, nacionalidade, rg, dataemissaorg, deficiencia from aluno as a inner join endereco as e on a.idendereco = e.idendereco where idaluno = :idaluno and status = 1;");
				
				$query->bindValue(":idaluno", $this->getIdaluno());
			
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
				$query = $conexao->conn->prepare("select idaluno, nome, datanascimento, datacadastro, sexo, nomepai, nomemae,
				e.logradouro, e.numero, e.complemento, e. bairro, e.referencia, e.cidade, e.estado, e.cep,
				cpf, nacionalidade, rg, dataemissaorg, deficiencia from aluno as a inner join endereco as e on a.idendereco = e.idendereco where status = 1");
				
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
				$query = $conexao->conn->prepare("update aluno set status = 0 where idaluno = :idaluno;");
				
				$query->bindValue(":idaluno", $this->getIdaluno());
			
				$query->execute();

			}
			catch(PDOException $e)
			{
				echo $e->getMessage();
				
			}
		}
	}


?>