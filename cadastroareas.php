<html>
<head>
<meta charset="utf-8">
<title>Cadastro de Usuário</title>
<link rel="stylesheet" href="css/bootstrap.min.css">
<script src='js/jquery-2.1.3.min.js'></script>
<script src='js/bootstrap.min.js'></script>
<script src="js/validator.min.js"></script>
</head>
<?php  
/*include "session.php";*/
include "menu.php";
require_once "classearea.php";
$area = new area;
$r = $area->buscarAreas();
?>

<body style="padding-top:60px;">
<section style="padding-left: 120px;" class="container">
<div class="panel panel-primary">
  <div class="panel-heading">Cadastro de áreas técnicas</div>
  <form id="cadastroareas" data-toggle="validator">
    <fieldset>
      <div style="padding-left: 20%; padding-right: 20%;" width: "80%;">
        <legend>Área</legend>
        <div class="row">
          <div class="col-md-12">
            <p><b>Nome da área:</b></p>
            <p>
              <input type="text" maxlength="200" name="nome" size="92" class="form-control input-md" data-error="Este campo não pode estar vazio!" required>
            </p>
            <div class="help-block with-errors"></div>
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
</body>
</html>