<?php  
/*include "session.php";*/
include "cabecalho.php";
include "menu.php";

require_once "classearea.php";
$area = new area;
$r = $area->buscarAreas();
?>
<title>Parecer Psicológico</title>

<body style="padding-top:60px;">
  <section style="width:60%" class="container">

    <!-- Modal -->
    <div class="modal fade in" id="divSucesso" role="dialog" style="display:none; position: absolute;top: 20%;">
      <div class="modal-dialog modal-sm">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Cadastro realizado</h4>
          </div>
          <div class="modal-body">
            <p>Parecer psicológico enviado com sucesso.</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal" onclick="location.href='http://localhost/siga/parecerpsicologico.php';">Fechar</button>
          </div>
        </div>
      </div>
    </div>

    <div>
      <!-- Nav tabs -->
      <ul class="nav nav-tabs " role="tablist">
        <li role="presentation" class="active"><a href="#parecerpsicologico" aria-controls="parecerpsicologico" role="tab" data-toggle="tab">Parecer Psicológico</a></li>


      </ul>

      <!-- Tab panes -->

      <div class="tab-content">
        <div role="tabpanel" class="tab-pane active form-group panel panel-body" id="parecerpsicologico" style="border-color: #00688B;">
          <div style="padding-top:20px;">

            <form class="form-horizontal" action="" method="POST" data-toggle="validator">

              <div class="form-group panel panel-body">

                <fieldset>

                  <div style="padding-left: 5%; padding-right: 5%;">



                    <div class="row">
                      <div class="col-md-12 form-group">
                        <label for="parecerpsicologico" class="control-label">Parecer Psicológico</label>
                        <textarea rows="7" id="parecerpsicologico" name="parecerpsicologico" class="form-control input-md" required></textarea>
                      </div>
                    </div>


                    <div class="row">
                      <div class="col-md-12 form-group">
                        <label for="observacoesgerais" class="control-label">Observações Gerais</label>
                        <textarea rows="4" id="observacoesgerais" name="observacoesgerais" class="form-control input-md" required></textarea>
                      </div>
                    </div>


                  </div>

                </fieldset>



                <!-- Button (Double) -->
                <br><br><br>
                <div class="form-group">
                  <label class="col-md-4 control-label" for="idConfirmar"></label>
                  <div class="col-md-8">
                    <button id="idConfirmar" name="idConfirmar" class="btn btn-success" type="submit">Confirmar</button>
                    <button id="idCancelar" name="idCancelar" class="btn btn-danger">Cancelar</button>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
</body>
<?php  
include "rodape.php";
?>
