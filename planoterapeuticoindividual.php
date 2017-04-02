<?php  
include "cabecalho.php";
include "menu.php";

if(($arraypermissoes['planoterapeutico'] == 0))
{
  echo '<script>location.href="index.php";</script>';
}

?>
<title>Plano Terapeutico Individual</title>

<body style="padding-top:60px; padding-bottom: 30px;">
  <section style="width:60%" class="container">
   <?php  
   include "divbuscaraluno.php";
   ?>







  <div>
    <!-- Nav tabs -->
    <ul class="nav nav-tabs " role="tablist">
      <li role="presentation" class="active"><a href="#dadosdeficiencia" aria-controls="dadosdeficiencia" role="tab" data-toggle="tab">Dados Deficiência</a></li>
      <li role="presentation"><a href="#servicosocial" aria-controls="servicosocial" role="tab" data-toggle="tab">Serv. Social</a></li>
      <li role="presentation"><a href="#fonoaudiologia" aria-controls="fonoaudiologia" role="tab" data-toggle="tab">Fonoaudiologia</a></li>
      <li role="presentation"><a href="#psicologia" aria-controls="psicologia" role="tab" data-toggle="tab">Psicologia</a></li>
      <li role="presentation"><a href="#terapeutaocupacional" aria-controls="terapeutaocupacional" role="tab" data-toggle="tab">T.O.</a></li>
      <li role="presentation"><a href="#fisioterapia" aria-controls="fisioterapia" role="tab" data-toggle="tab">Fisioterapia</a></li>
      <li role="presentation"><a href="#nutricionista" aria-controls="nutricionista" role="tab" data-toggle="tab">Nutrição</a></li>
      <li role="presentation"><a href="#dentista" aria-controls="dentista" role="tab" data-toggle="tab">Dentista</a></li>
    </ul>

    <!-- Tab panes -->
    <form class="form-horizontal" action="inserir.php?id=5" method="POST" data-toggle="validator">

      <div class="tab-content">
        <div role="tabpanel" class="tab-pane active form-group panel panel-body" id="dadosdeficiencia" style="border-color: #00688B;">
          <div style="padding-top:20px;">
            <div class="form-group panel panel-body">
              <fieldset>
                <div style="padding-left: 5%; padding-right: 5%;">

                  <?php  
                  include "camposbuscaraluno.php";
                  ?>

                  <div class="row">
                    <div class="col-md-12 form-group">
                      <label for="observacoesgerais" class="control-label">Observações Gerais</label>
                      <textarea rows="4" id="observacoesgerais" name="observacoesgerais" class="form-control input-md" ></textarea>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-8 form-group">
                      <label for="diagnostico" class="control-label">Diagnóstico</label>
                      <textarea rows="2" id="diagnostico" name="diagnostico" class="form-control input-md" ></textarea>
                    </div>

                    <div class="col-md-4 form-group">
                      <label for="cid" class="control-label">CID</label>
                      <input type="text" name="cid" class="form-control input-md" id="cid">
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-12 form-group">
                      <label for="etiologia" class="control-label">Etiologia</label>
                      <textarea rows="2" id="etiologia" name="etiologia" class="form-control input-md" ></textarea>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12 form-group">
                      <label for="dadosmedicos" class="control-label">Dados médicos relevantes</label>
                      <textarea rows="2" id="dadosmedicos" name="dadosmedicos" class="form-control input-md" ></textarea>
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
                  <button id="idCancelar" name="idCancelar" class="btn btn-danger" onclick="location.href='http://localhost/siga/';">Cancelar</button>
                </div>
              </div>
            </div>

          </div>
        </div>
        


        <div role="tabpanel" class="tab-pane form-group panel panel-body" id="servicosocial" style="border-color: #00688B;">
          <div style="padding-top:20px;">

            <div class="form-group panel panel-body">
              <fieldset>
                <div style="padding-left: 5%; padding-right: 5%;" width: "80%;">

                 <div class="row">
                  <div class="col-md-12 form-group">
                    <label for="servicosocial" class="control-label">Serviço Social</label>
                    <textarea rows="4" id="servicosocial" name="servicosocial" class="form-control input-md" ></textarea>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-12 form-group">
                    <label for="objservicosocial" class="control-label">Objetivo</label>
                    <textarea rows="4" id="objservicosocial" name="objservicosocial" class="form-control input-md" ></textarea>
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
                <button id="idCancelar" name="idCancelar" class="btn btn-danger" onclick="location.href='http://localhost/siga/';">Cancelar</button>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div role="tabpanel" class="tab-pane form-group panel panel-body" id="fonoaudiologia" style="border-color: #00688B;">
        <div style="padding-top:20px;">
          <div class="form-group panel panel-body">
            <fieldset>
              <div style="padding-left: 5%; padding-right: 5%;" width: "80%;">

               <div class="row">
                <div class="col-md-12 form-group">
                  <label for="fonoaudiologia" class="control-label">Fonoaudiologia</label>
                  <textarea rows="4" id="fonoaudiologia" name="fonoaudiologia" class="form-control input-md" ></textarea>
                </div>
              </div>

              <div class="row">
                <div class="col-md-12 form-group">
                  <label for="objfonoaudiologia" class="control-label">Objetivo</label>
                  <textarea rows="4" id="objfonoaudiologia" name="objfonoaudiologia" class="form-control input-md" ></textarea>
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
              <button id="idCancelar" name="idCancelar" class="btn btn-danger" onclick="location.href='http://localhost/siga/';">Cancelar</button>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div role="tabpanel" class="tab-pane form-group panel panel-body" id="psicologia" style="border-color: #00688B;">
      <div style="padding-top:20px;">
        <div class="form-group panel panel-body">
          <fieldset>
            <div style="padding-left: 5%; padding-right: 5%;" width: "80%;">

             <div class="row">
              <div class="col-md-12 form-group">
                <label for="psicologia" class="control-label">Psicologia</label>
                <textarea rows="4" id="psicologia" name="psicologia" class="form-control input-md" ></textarea>
              </div>
            </div>

            <div class="row">
              <div class="col-md-12 form-group">
                <label for="objpsicologia" class="control-label">Objetivo</label>
                <textarea rows="4" id="objpsicologia" name="objpsicologia" class="form-control input-md" ></textarea>
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
            <button id="idCancelar" name="idCancelar" class="btn btn-danger" onclick="location.href='http://localhost/siga/';">Cancelar</button>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div role="tabpanel" class="tab-pane form-group panel panel-body" id="terapeutaocupacional" style="border-color: #00688B;">
    <div style="padding-top:20px;">
      <div class="form-group panel panel-body">
        <fieldset>
          <div style="padding-left: 5%; padding-right: 5%;" width: "80%;">

           <div class="row">
            <div class="col-md-12 form-group">
              <label for="terapeutaocupacional" class="control-label">Terapeuta Ocupacional</label>
              <textarea rows="4" id="terapeutaocupacional" name="terapeutaocupacional" class="form-control input-md" ></textarea>
            </div>
          </div>

          <div class="row">
            <div class="col-md-12 form-group">
              <label for="objterapeutaocupacional" class="control-label">Objetivo</label>
              <textarea rows="4" id="objterapeutaocupacional" name="objterapeutaocupacional" class="form-control input-md" ></textarea>
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
          <button id="idCancelar" name="idCancelar" class="btn btn-danger" onclick="location.href='http://localhost/siga/';">Cancelar</button>
        </div>
      </div>
    </div>
  </div>
</div>

<div role="tabpanel" class="tab-pane form-group panel panel-body" id="fisioterapia" style="border-color: #00688B;">
  <div style="padding-top:20px;">
    <div class="form-group panel panel-body">
      <fieldset>
        <div style="padding-left: 5%; padding-right: 5%;" width: "80%;">

         <div class="row">
          <div class="col-md-12 form-group">
            <label for="fisioterapia" class="control-label">Fisioterapia</label>
            <textarea rows="4" id="fisioterapia" name="fisioterapia" class="form-control input-md" ></textarea>
          </div>
        </div>

        <div class="row">
          <div class="col-md-12 form-group">
            <label for="objfisioterapia" class="control-label">Objetivo</label>
            <textarea rows="4" id="objfisioterapia" name="objfisioterapia" class="form-control input-md" ></textarea>
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
        <button id="idCancelar" name="idCancelar" class="btn btn-danger" onclick="location.href='http://localhost/siga/';">Cancelar</button>
      </div>
    </div>
  </div>
</div>
</div>

<div role="tabpanel" class="tab-pane form-group panel panel-body" id="nutricionista" style="border-color: #00688B;">
  <div style="padding-top:20px;">
    <div class="form-group panel panel-body">
      <fieldset>
        <div style="padding-left: 5%; padding-right: 5%;" width: "80%;">

         <div class="row">
          <div class="col-md-12 form-group">
            <label for="nutricionista" class="control-label">Nutricionista</label>
            <textarea rows="4" id="nutricionista" name="nutricionista" class="form-control input-md" ></textarea>
          </div>
        </div>

        <div class="row">
          <div class="col-md-12 form-group">
            <label for="objnutricionista" class="control-label">Objetivo</label>
            <textarea rows="4" id="objnutricionista" name="objnutricionista" class="form-control input-md" ></textarea>
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
        <button id="idCancelar" name="idCancelar" class="btn btn-danger" onclick="location.href='http://localhost/siga/';">Cancelar</button>
      </div>
    </div>
  </div>
</div>
</div>

<div role="tabpanel" class="tab-pane form-group panel panel-body" id="dentista" style="border-color: #00688B;">
  <div style="padding-top:20px;">
    <div class="form-group panel panel-body">
      <fieldset>
        <div style="padding-left: 5%; padding-right: 5%;" width: "80%;">

         <div class="row">
          <div class="col-md-12 form-group">
            <label for="dentista" class="control-label">Dentista</label>
            <textarea rows="4" id="dentista" name="dentista" class="form-control input-md" ></textarea>
          </div>
        </div>

        <div class="row">
          <div class="col-md-12 form-group">
            <label for="objdentista" class="control-label">Objetivo</label>
            <textarea rows="4" id="objdentista" name="objdentista" class="form-control input-md" ></textarea>
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
        <button id="idCancelar" name="idCancelar" class="btn btn-danger" onclick="location.href='http://localhost/siga/';">Cancelar</button>
      </div>
    </div>
  </div>
</div>
</div>
</form>
</div>
</div>
</section>
</body>
 
<?php  
include "rodape.php";
?>
