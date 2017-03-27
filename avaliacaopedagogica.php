<?php  
include "cabecalho.php";
include "menu.php";


?>


<title>Avaliação Pedagógica</title>




<body style="padding-top:60px;">
  <section style="width:60%" class="container">

    <?php  
    include "divbuscaraluno.php";
    ?>

    <!-- Modal -->
    <div class="modal fade in" id="divSucesso" role="dialog" style="display:none; position: absolute;top: 20%;">
      <div class="modal-dialog modal-sm">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Cadastro realizado</h4>
          </div>
          <div class="modal-body">
            <p>Avaliação Pedagógica enviada com sucesso.</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal" onclick="location.href='http://localhost/siga/avaliacaopedagogica.php';">Fechar</button>
          </div>
        </div>
      </div>
    </div>

    <div>
      <!-- Nav tabs -->
      <ul class="nav nav-tabs " role="tablist">
        <li role="presentation" class="active"><a href="#avaliacaopedagogica" aria-controls="avaliacaopedagogica" role="tab" data-toggle="tab">Alterar Avaliação Pedagógica</a></li>
      </ul>


      <!-- Tab panes -->
      <div class="tab-content">
        <div role="tabpanel" class="tab-pane active form-group panel panel-body" id="avaliacaopedagogica" style="border-color: #00688B;">
          <div style="padding-top:20px;">

            <form class="form-horizontal" action="inserir.php?id=3" method="POST" data-toggle="validator">
              <div class="form-group panel panel-body">
                <fieldset>
                  <div style="padding-left: 5%; padding-right: 5%;">


                    <?php  
                    include "camposbuscaraluno.php";
                    ?>
                    

                    <div class="row">
                      <div class="col-md-12 form-group">
                        <label for="avaliacaopedagogica" class="control-label">Avaliação Pedagógica</label>
                        <textarea rows="7" id="avaliacaopedagogica" name="avaliacaopedagogica" class="form-control input-md" required></textarea>
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

  if(window.location.href == "http://localhost/siga/avaliacaopedagogica.php?gravou=1"){
  
        swal("Cadastrado!", "O registro foi inserido com sucesso!", "success");
 
 };

</script>

<?php  
include "rodape.php";
?>
