<?php  
include "cabecalho.php";
include "menu.php";

if(($arraypermissoes['psicologico'] == 0))
{
    echo '<script>location.href="index.php";</script>';
}
?>


<title>Alterar Triagem Psicológica</title>

<body style="padding-top:60px;">
  <section style="width:60%" class="container">


    <div>
      <!-- Nav tabs -->
      <ul class="nav nav-tabs " role="tablist">
        <li role="presentation" class="active"><a href="#parecerpsicologico" aria-controls="parecerpsicologico" role="tab" data-toggle="tab">Alterar Triagem Psicológica</a></li>


      </ul>

      <!-- Tab panes -->

      <div class="tab-content">
        <div role="tabpanel" class="tab-pane active form-group panel panel-body" id="parecerpsicologico" style="border-color: #00688B;">
          <div style="padding-top:20px;">

            <form class="form-horizontal" action="inserir.php?id=8" method="POST" data-toggle="validator">

              <div class="form-group panel panel-body">

                <fieldset>

                  <div style="padding-left: 5%; padding-right: 5%;">


                    <?php  
                    include "camposexibiraluno.php";
                    ?>

                    <div class="row">
                      <div class="col-md-12 form-group">
                        <label for="triagem" class="control-label">Triagem</label>
                        <textarea rows="7" id="triagem" name="triagem" class="form-control input-md" required></textarea>
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


<script>
  if(window.location.href == "http://localhost/siga/alterartriagempsicologica.php?gravou=1"){
    $(document).ready(function() {
      swal({ 
        title: "Sucesso",
        text: "Cadastro alterado com sucesso.",
        type: "success" 
      },
      function(){
        window.location.href = 'alterartriagempsicologica.php';
      });
    });
  };
</script>



<?php  
include "rodape.php";
?>
