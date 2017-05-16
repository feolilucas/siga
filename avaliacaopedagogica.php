<?php  
include "cabecalho.php";
include "menu.php";

if(($arraypermissoes['pedagogico'] == 0) and ($_SESSION['admin'] == 0))
{
  echo '<script>location.href="index.php";</script>';
}
?>


<title>Avaliação Pedagógica</title>




<body style="padding-top:60px; padding-bottom: 30px;">
  <section style="width:60%" class="container">

    <?php  
    include "divbuscaraluno.php";
    ?>

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
