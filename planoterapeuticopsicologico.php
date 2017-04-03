<?php  
include "cabecalho.php";
include "menu.php";

if(($arraypermissoes['psicologico'] == 0))
{
    echo '<script>location.href="index.php";</script>';
}
?>


<title>Plano Terapeutico Psicológico</title>

<body style="padding-top:60px; padding-bottom: 30px;">
  <section style="width:60%" class="container">

    <?php  
    include "divbuscaraluno.php";
    ?>

   

    <div>
      <!-- Nav tabs -->
      <ul class="nav nav-tabs " role="tablist">
        <li role="presentation" class="active"><a href="#parecerpsicologico" aria-controls="parecerpsicologico" role="tab" data-toggle="tab">Plano Terapêutico Psicológico</a></li>


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
                   include "camposbuscaraluno.php";
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
                 <?php include "botoesform.php"; ?>


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
