<?php
	require_once 'conexao.php';
	
	class planoterapeuticoindividual
	{	
		private $idplanoterapeuticoindividual;
		private $idaluno;
		private $datacadastro;
		private $observacoesgerais;
		private $servicosocial;
		private $objservicosocial;
		private $fonoaudiologia;
		private $objfonoaudiologia;
		private $psicologia;
		private $objpsicologia;
		private $terapeutaocupacional;
		private $objterapeutaocupacional;
		private $fisioterapia;
		private $objfisioterapia;
		private $nutricionista;
		private $objnutricionista;
		private $dentista;
		private $objdentista;
		private $diagnostico;
		private $etiologia;
		private $cid;
		private $dadosmedicos;

		function setIdplanoterapeuticoindividual($idplanoterapeuticoindividual) { $this->idplanoterapeuticoindividual = $idplanoterapeuticoindividual; }
		function getIdplanoterapeuticoindividual() { return $this->idplanoterapeuticoindividual; }
		
		function setIdaluno($idaluno) { $this->idaluno = $idaluno; }
		function getIdaluno() { return $this->idaluno; }
		
		function setDatacadastro($datacadastro) { $this->datacadastro = $datacadastro; }
		function getDatacadastro() { return $this->datacadastro; }
		
		function setObservacoesgerais($observacoesgerais) { $this->observacoesgerais = $observacoesgerais; }
		function getObservacoesgerais() { return $this->observacoesgerais; }
		
		function setServicosocial($servicosocial) { $this->servicosocial = $servicosocial; }
		function getServicosocial() { return $this->servicosocial; }
		
		function setObjservicosocial($objservicosocial) { $this->objservicosocial = $objservicosocial; }
		function getObjservicosocial() { return $this->objservicosocial; }
		
		function setFonoaudiologia($fonoaudiologia) { $this->fonoaudiologia = $fonoaudiologia; }
		function getFonoaudiologia() { return $this->fonoaudiologia; }
		
		function setObjfonoaudiologia($objfonoaudiologia) { $this->objfonoaudiologia = $objfonoaudiologia; }
		function getObjfonoaudiologia() { return $this->objfonoaudiologia; }
		
		function setPsicologia($psicologia) { $this->psicologia = $psicologia; }
		function getPsicologia() { return $this->psicologia; }
		
		function setObjpsicologia($objpsicologia) { $this->objpsicologia = $objpsicologia; }
		function getObjpsicologia() { return $this->objpsicologia; }
		
		function setTerapeutaocupacional($terapeutaocupacional) { $this->terapeutaocupacional = $terapeutaocupacional; }
		function getTerapeutaocupacional() { return $this->terapeutaocupacional; }
		
		function setObjterapeutaocupacional($objterapeutaocupacional) { $this->objterapeutaocupacional = $objterapeutaocupacional; }
		function getObjterapeutaocupacional() { return $this->objterapeutaocupacional; }
		
		function setFisioterapia($fisioterapia) { $this->fisioterapia = $fisioterapia; }
		function getFisioterapia() { return $this->fisioterapia; }
		
		function setObjfisioterapia($objfisioterapia) { $this->objfisioterapia = $objfisioterapia; }
		function getObjfisioterapia() { return $this->objfisioterapia; }
		
		function setNutricionista($nutricionista) { $this->nutricionista = $nutricionista; }
		function getNutricionista() { return $this->nutricionista; }
		
		function setObjnutricionista($objnutricionista) { $this->objnutricionista = $objnutricionista; }
		function getObjnutricionista() { return $this->objnutricionista; }
		
		function setDentista($dentista) { $this->dentista = $dentista; }
		function getDentista() { return $this->dentista; }
		
		function setObjdentista($objdentista) { $this->objdentista = $objdentista; }
		function getObjdentista() { return $this->objdentista; }
		
		function setDiagnostico($diagnostico) { $this->diagnostico = $diagnostico; }
		function getDiagnostico() { return $this->diagnostico; }
		
		function setEtiologia($etiologia) { $this->etiologia = $etiologia; }
		function getEtiologia() { return $this->etiologia; }
		
		function setCid($cid) { $this->cid = $cid; }
		function getCid() { return $this->cid; }
		
		function setDadosmedicos($dadosmedicos) { $this->dadosmedicos = $dadosmedicos; }
		function getDadosmedicos() { return $this->dadosmedicos; }

		public function cadastrar()
		{
			$conexao = new conexao();
			
			try
			{	
				$query = $conexao->conn->prepare("insert into planoterapeuticoindividual(idaluno, datacadastro, observacoesgerais, servicosocial, objservicosocial, fonoaudiologia, objfonoaudiologia,
				psicologia, objpsicologia, terapeutaocupacional, objterapeutaocupacional, fisioterapia, objfisioterapia, nutricionista, objnutricionista, dentista, objdentista,
				diagnostico, etiologia, cid, dadosmedicos)
				values(:idaluno, now(), :observacoesgerais, :servicosocial, :objservicosocial, :fonoaudiologia, :objfonoaudiologia,
				:psicologia, :objpsicologia, :terapeutaocupacional, :objterapeutaocupacional, :fisioterapia, :objfisioterapia, :nutricionista, :objnutricionista, :dentista, :objdentista,
				:diagnostico, :etiologia, :cid, :dadosmedicos )");
				
				$query->bindValue(":idaluno", $this->getIdaluno());
				$query->bindValue(":observacoesgerais", $this->getObservacoesgerais());
				$query->bindValue(":servicosocial", $this->getServicosocial());
				$query->bindValue(":objservicosocial", $this->getObjservicosocial());
				$query->bindValue(":fonoaudiologia", $this->getFonoaudiologia());
				$query->bindValue(":objfonoaudiologia", $this->getObjfonoaudiologia());
				$query->bindValue(":psicologia", $this->getPsicologia());
				$query->bindValue(":objpsicologia", $this->getObjpsicologia());
				$query->bindValue(":terapeutaocupacional", $this->getTerapeutaocupacional());
				$query->bindValue(":objterapeutaocupacional", $this->getObjterapeutaocupacional());
				$query->bindValue(":fisioterapia", $this->getFisioterapia());
				$query->bindValue(":objfisioterapia", $this->getObjfisioterapia());
				$query->bindValue(":nutricionista", $this->getNutricionista());
				$query->bindValue(":objnutricionista", $this->getObjnutricionista());
				$query->bindValue(":dentista", $this->getDentista());
				$query->bindValue(":objdentista", $this->getObjdentista());
				$query->bindValue(":diagnostico", $this->getDiagnostico());
				$query->bindValue(":etiologia", $this->getEtiologia());
				$query->bindValue(":cid", $this->getCid());
				$query->bindValue(":dadosmedicos", $this->getDadosmedicos());
				
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
				$query = $conexao->conn->prepare("update planoterapeuticoindividual set observacoesgerais = :observacoesgerais,
				servicosocial = :servicosocial, objservicosocial = :objservicosocial, fonoaudiologia = :fonoaudiologia, objfonoaudiologia = :objfonoaudiologia,
				psicologia = :psicologia, objpsicologia = :objpsicologia, terapeutaocupacional = :terapeutaocupacional, objterapeutaocupacional = :objterapeutaocupacional,
				fisioterapia = :fisioterapia, objfisioterapia = :objfisioterapia, nutricionista = :nutricionista, objnutricionista = :objnutricionista, 
				dentista = :dentista, objdentista = :objdentista, diagnostico = :diagnostico, etiologia = :etiologia, cid = :cid, dadosmedicos = :dadosmedicos 
				where idplanoterapeuticoindividual = :idplanoterapeuticoindividual ");
				
				$query->bindValue(":idplanoterapeuticoindividual", $this->getIdplanoterapeuticoindividual());
				$query->bindValue(":observacoesgerais", $this->getObservacoesgerais());
				$query->bindValue(":servicosocial", $this->getServicosocial());
				$query->bindValue(":objservicosocial", $this->getObjservicosocial());
				$query->bindValue(":fonoaudiologia", $this->getFonoaudiologia());
				$query->bindValue(":objfonoaudiologia", $this->getObjfonoaudiologia());
				$query->bindValue(":psicologia", $this->getPsicologia());
				$query->bindValue(":objpsicologia", $this->getObjpsicologia());
				$query->bindValue(":terapeutaocupacional", $this->getTerapeutaocupacional());
				$query->bindValue(":objterapeutaocupacional", $this->getObjterapeutaocupacional());
				$query->bindValue(":fisioterapia", $this->getFisioterapia());
				$query->bindValue(":objfisioterapia", $this->getObjfisioterapia());
				$query->bindValue(":nutricionista", $this->getNutricionista());
				$query->bindValue(":objnutricionista", $this->getObjnutricionista());
				$query->bindValue(":dentista", $this->getDentista());
				$query->bindValue(":objdentista", $this->getObjdentista());
				$query->bindValue(":diagnostico", $this->getDiagnostico());
				$query->bindValue(":etiologia", $this->getEtiologia());
				$query->bindValue(":cid", $this->getCid());
				$query->bindValue(":dadosmedicos", $this->getDadosmedicos());
				
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
				$query = $conexao->conn->prepare("select *from planoterapeuticoindividual 
				where idplanoterapeuticoindividual = :idplanoterapeuticoindividual ");
				
				$query->bindValue(":idplanoterapeuticoindividual", $this->getIdplanoterapeuticoindividual());
				
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
				$query = $conexao->conn->prepare("select *from planoterapeuticoindividual 
				where idaluno = :idaluno ");
				
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
				$query = $conexao->conn->prepare("delete from planoterapeuticoindividual 
				where idplanoterapeuticoindividual = :idplanoterapeuticoindividual ");
				
				$query->bindValue(":idplanoterapeuticoindividual", $this->getIdplanoterapeuticoindividual());
				
				$query->execute();
						
			}
			catch(PDOException $e)
			{
				echo $e->getMessage();
			}
			
		}
	}
	
?>