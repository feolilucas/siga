<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Cadastro de Usuário</title>
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/boxshadow.css">
<link rel="stylesheet" href="css/shadow.css">
<script src='js/jquery-2.1.3.min.js'></script>
<script src='js/bootstrap.min.js'></script>
<script src="js/validator.min.js"></script>
<script src='js/funcoes.js'></script>
</head>
<?php  
/*include "session.php";*/
include "menu.php";
require_once "classearea.php";
$area = new area;
$r = $area->buscarAreas();
?>

<body style="padding-top:60px;">
<style>
.box {
	-webkit-box-shadow:0 0 10px rgba(0, 0, 0, 0.5);
	-moz-box-shadow:0 0 10px rgba(0, 0, 0, 0.5);
	box-shadow:0 0 10px rgba(0, 0, 0, 0.5);	
}
</style>
<section style="width:60%" class="container">
<div class="panel panel-primary box">
  <div class="panel-heading">Cadastro de usuário</div>
  <form id="cadastrousuario" data-toggle="validator" action="inserir.php?id=1" method="post">
    <fieldset>
      <div style="padding-left: 5%; padding-right: 5%;" width: "80%;">
        <legend>Dados pessoais</legend>
        <div class="row">
          <div class="col-md-9 form-group">
            <label for="nome" class="control-label">Nome</label>
            <input id="nome" type="text" maxlength="200" name="nome" size="92" class="form-control input-md" required>
          </div>
          <div class="col-md-3 form-group">
            <label for="datanascimento" class="control-label">Nascimento</label>
            <input type="date" id="datanascimento" name="datanascimento" class="form-control input-md" size="10" maxlength="10" required>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 form-group">
            <label for="cpf" class="control-label">CPF</label>
            <input type="text" name="cpf" maxlength="14" OnKeyPress="formatar('###.###.###-##', this)" class="form-control input-md" id="cpf" required>
          </div>
          <div class="col-md-6 form-group">
            <label for="rg" class="control-label">RG</label>
            <input id="rg" type="text" maxlength="10" size="19" name="rg" class="form-control input-md" onkeyup="somenteNumeros(this);" required>
            <span class="help-block">Somente números</span> 
          </div>
        </div>
        
      </div>
    </fieldset>
    <fieldset>
      <div style="padding-left: 5%; padding-right: 5%;" width: "80%;">
      <legend>Contato</legend>
      <div class="row">
        <div class="col-md-6 form-group">
          <label for="inputEmail" class="control-label">Telefone</label>
          <input type="text" maxlength="15" id="telefone" name="telefone" class="form-control input-md" required>
        </div>
        <div class="col-md-6 form-group">
          <label for="inputEmail" class="control-label">Email</label>
          <input id="email" class="form-control" placeholder="Digite seu E-mail" type="email" name="email" 
      data-error="Por favor, informe um e-mail correto." required>
          <div class="help-block with-errors"></div>
        </div>
      </div>
    </fieldset>
    <fieldset>
      <div style="padding-left: 5%; padding-right: 5%;" width: "80%;">
        <legend>Endereço</legend>
        <div class="row">
          <div class="col-md-4 form-group">
            <label for="cep" class="control-label">CEP</label>
            <input name="cep" type="text" id="cep" value="" OnKeyPress="formatar('#####-###', this)" size="10" maxlength="9"  class="form-control input-md" required>
          </div>
        </div>
        <div class="row">
          <div class="col-xs-12 col-md-10 form-group">
            <label for="logradouro" class="control-label">Logradouro</label>
            <input type="text" size="50" maxlength="300" id="logradouro" name="logradouro"  class="form-control input-md"required>
          </div>
          <div class="col-xs-6 col-md-2 form-group">
            <label for="numero" class="control-label">Número</label>
            <input type="text" maxlength="20" size="5" id="numero" name="numero"  class="form-control input-md" required>
          </div>
        </div>
        <div class="row">
          <div class="col-md-8 form-group">
            <label for="bairro" class="control-label">Bairro</label>
            <input type="text" size="58" id="bairro" maxlength="300" name="bairro" class="form-control input-md" required>
          </div>
          <div class="col-md-4 form-group">
            <label for="cidade" class="control-label">Cidade</label>
            <input type="text" id="cidade" maxlength="300" name="cidade" class="form-control input-md" required>
          </div>
        </div>
        <div class="row">
          <div class="col-md-2 form-group">
            <label for="estado" class="control-label">Estado</label>
            <input type="text" id="estado" maxlength="2" name="estado" class="form-control input-md" required>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 form-group">
            <label for="complemento" class="control-label">Complemento</label>
            <input type="text" maxlength="300" name="complemento" class="form-control input-md">
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 form-group">
            <label for="referencia" class="control-label">Referência</label>
            <input type="text" maxlength="300" name="referencia"  class="form-control input-md">
          </div>
        </div>
      </div>
    </fieldset>
    <fieldset>
      <div style="padding-left: 5%; padding-right: 5%;" width: "80%;">
        <legend>Usuário</legend>
        <div class="row">
          <div class="col-md-6 form-group">
            <label for="usuario" class="control-label">Nome de usuário</label>
            <input type="text" size="22" name="usuario" class="form-control input-md" data-minlength="6" required>
            <span class="help-block">O nome de usuário deve ter no minimo (6) dígitos</span> </div>
        </div>
        <div class="row">
          <div class="col-md-6 form-group">
            <label for="senha" class="control-label">Senha</label>
            <input id="senha" type="password" size="22" name="senha" class="form-control input-md" data-minlength="4" required>
            <span class="help-block">A senha deve ter no minímo (4) dígitos</span> </div>
        </div>
        <div class="row">
          <div class="col-md-6 form-group">
            <label for="confirmasenha" class="control-label">Confirme a senha</label>
            <input name="confirmasenha" type="password" class="form-control" id="confirmasenha" placeholder="Confirme sua Senha..." 
      data-match="#senha" data-match-error="Atenção! As senhas não estão iguais." required>
            <div class="help-block with-errors"></div>
          </div>
        </div>
      </div>
    </fieldset>
    <fieldset>
      <div style="padding-left: 5%; padding-right: 5%;" width: "80%;">
      <legend>Corporativo</legend>
      <div class="row">
        <div class="col-md-6 form-group">
          <label for="areatecnica" class="control-label">Área técnica</label>
          <select class="form-control" name="area">
            <?php
			foreach($r as $linha){
			  echo "<option value='".$linha['idarea']."'>".$linha['nome']."</option>";
			}
		?>
          </select>
        </div>
      </div>
    </fieldset>
    <fieldset>
      <div style="padding-left: 5%; padding-right: 5%;" width: "80%;">
        <legend>Permissões</legend>
        <div class="row">
          <div class="checkbox form-group col-md-6">
            <p>
              <input type="checkbox" name="administrativo" value="1">
              Administrativo</p>
            <p>
              <input type="checkbox" name="planoterapeutico" value="1">
              Plano Terapêutico</p>
            <p>
              <input type="checkbox" name="psicologico" value="1">
              Psicológico</p>
            <p>
              <input type="checkbox" name="neurologico" value="1">
              Neurológico</p>
          </div>
          <div class="checkbox form-group col-md-6">
            <p><br>
              <input type="checkbox" name="fonoaudiologico" value="1">
              Fonoaudiológico</p>
            <p>
              <input type="checkbox" name="terapiaocupacional" value="1">
              Terapia Ocupacional</p>
            <p>
              <input type="checkbox" name="pedagogico" value="1">
              Pedagógico</p>
            <p>
              <input type="checkbox" name="social" value="1">
              Social</p>
          </div>
        </div>
      </div>
    </fieldset>
    
    <!-- Button (Double) -->
    <div class="form-group">
      <label class="col-md-4 control-label" for="idConfirmar"></label>
      <div class="col-md-8">
        <button id="idConfirmar" name="idConfirmar" class="btn btn-success" type="submit">Confirmar</button>
        <button id="idCancelar" name="idCancelar" class="btn btn-danger">Cancelar</button>
      </div>
    </div>
  </form>
  <br>
  <br>
  <br>
</div>
</div>
</fieldset>

<div id="divSucesso" style="width: 500px;height: 200px;display: none;position: absolute;top: 20%;left: 32%;
box-shadow:10px 10px 5px cadetblue;" class="alert alert-success">
  <strong>Success!</strong> Indicates a successful or positive action.
  <button style="position: absolute;top: 40%;left: 32%;" id="idOkMsg" name="OkMsg" class="btn btn-success" onclick="MostrarEsconderDiv('divSucesso')">Confirmar</button>
</div>


</body>
<script>
function formatar(mascara, documento){
  var i = documento.value.length;
  var saida = mascara.substring(0,1);
  var texto = mascara.substring(i)
  
  if (texto.substring(0,1) != saida){
            documento.value += texto.substring(0,1);
  }
}
</script>
<script>
	 function mascaraTEL(o,f){
		v_obj=o
		v_fun=f
		setTimeout("execmascara()",1)
	}
	function execmascara(){
		v_obj.value=v_fun(v_obj.value)
	}
	function mtel(v){
		v=v.replace(/\D/g,"");             //Remove tudo o que não é dígito
		v=v.replace(/^(\d{2})(\d)/g,"($1) $2"); //Coloca parênteses em volta dos dois primeiros dígitos
		v=v.replace(/(\d)(\d{4})$/,"$1-$2");    //Coloca hífen entre o quarto e o quinto dígitos
		return v;
	}
	function id( el ){
		return document.getElementById( el );
	}
	window.onload = function(){
		id('telefone').onkeyup = function(){
			mascaraTEL( this, mtel );
		}
	}
</script>
<script type="text/javascript">
jQuery(function($){
   $("#cep").change(function(){
      var cep_code = $(this).val();
      if( cep_code.length <= 0 ) return;
      $.get("http://apps.widenet.com.br/busca-cep/api/cep.json", { code: cep_code },
         function(result){
            if( result.status!=1 ){
               alert(result.message || "Houve um erro desconhecido");
               return;
            }
            $("input#cep").val( result.code );
            $("input#estado").val( result.state );
            $("input#cidade").val( result.city );
            $("input#bairro").val( result.district );
            $("input#logradouro").val( result.address );
            $("input#estado").val( result.state );
         });
   });
});
</script>

<script>
    function somenteNumeros(num) {
        var er = /[^0-9.]/;
        er.lastIndex = 0;
        var campo = num;
        if (er.test(campo.value)) {
          campo.value = "";
        }
    }
 </script>
</html>