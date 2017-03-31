<?php  
include "cabecalho.php";
include "menu.php";

if(($arraypermissoes['psicologico'] == 0))
{
    echo '<script>location.href="index.php";</script>';
}
?>


<title>Alterar Plano Terapeutico Psicológico</title>

<body style="padding-top:60px;">
  <section style="width:60%" class="container">

       <div>
      <!-- Nav tabs -->
      <ul class="nav nav-tabs " role="tablist">
        <li role="presentation" class="active"><a href="#parecerpsicologico" aria-controls="parecerpsicologico" role="tab" data-toggle="tab">Alterar Plano Terapêutico Psicológico</a></li>


      </ul>

      <!-- Tab panes -->

      <div class="tab-content">
        <div role="tabpanel" class="tab-pane active form-group panel panel-body" id="parecerpsicologico" style="border-color: #00688B;">
          <div style="padding-top:20px;">

            <form class="form-horizontal" action="inserir.php?id=6" method="POST" data-toggle="validator">

              <div class="form-group panel panel-body">

                <fieldset>

                  <div style="padding-left: 5%; padding-right: 5%;">


                   <?php  
                   include "camposexibiraluno.php";
                   ?>





                   <div class="row">
                    <div class="col-md-12 form-group">
                      <label for="planoterapeutico" class="control-label">Plano Terapeutico</label>
                      <textarea rows="7" id="planoterapeutico" name="planoterapeutico" class="form-control input-md" required></textarea>
                    </div>
                  </div>


                  <div class="row">
                    <div class="col-md-12 form-group">
                      <label for="observacoesgerais" class="control-label">Observações Gerais</label>
                      <textarea rows="4" id="observacoesgerais" name="observacoesgerais" class="form-control input-md" ></textarea>
                    </div>
                  </div>


                </div>

              </fieldset>

              <!-- Button (Double) -->
              <br><br><br>
              <div class="form-group">
                <label class="col-md-4 control-label" for="idConfirmar"></label>
                <div class="col-md-6">
                  <button id="idConfirmar" name="idConfirmar" class="btn btn-success" type="submit">Confirmar</button>
                  <button id="idCancelar" name="idCancelar" class="btn btn-danger" onclick="location.href='http://localhost/siga/';">Cancelar</button>
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
