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


	}
	
?>