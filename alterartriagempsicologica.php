<?php  
include "cabecalho.php";
include "menu.php";

if(($arraypermissoes['psicologico'] == 0) and ($_SESSION['admin'] == 0))
{
    echo '<script>location.href="index.php";</script>';
}

require_once "classetriagempsicologica.php";
require_once "classealuno.php";

$triagempsicologica = new triagempsicologica;
$aluno = new aluno;

$idformulario = $_GET['id'];
$triagempsicologica->setIdtriagempsicologica($idformulario);

$r = $triagempsicologica->mostrarum();

$aluno->setIdaluno($r['idaluno']);

$r2 = $aluno->mostrarum();
?>


<title>Alterar Triagem Psicológica</title>

<body style="padding-top:60px; padding-bottom: 30px;">
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

            <form class="form-horizontal" action="alterar.php?id=8&idformulario=<?php echo $idformulario; ?>" method="POST" data-toggle="validator">

              <div class="form-group panel panel-body">

                <fieldset>

                  <div style="padding-left: 5%; padding-right: 5%;">


                   <div class="row">

                      <div class="col-md-2 form-group">
                        <label for="idaluno" class="control-label">ID do Aluno</label>

                        <input type="text" name="idaluno" class="form-control input-md" id="idaluno" value="<?php echo $r2['idaluno'];?>" readonly required>
                      </div>

                      <div class="col-md-10 form-group">
                            <label for="nomealuno" class="control-label">Nome do Aluno</label>

                        <input type="text" name="nomealuno" class="form-control input-md" id="nomealuno" value="<?php echo $r2['nome'];?>" readonly required>
                      </div>
                  </div>

                    <div class="row">
                      <div class="col-md-12 form-group">
                        <label for="triagem" class="control-label">Triagem</label>
                        <textarea rows="7" id="triagem" name="triagem" class="form-control input-md" required><?php echo $r['triagem']; ?></textarea>
                      </div>
                    </div>


                    <div class="row">
                      <div class="col-md-12 form-group">
                        <label for="observacoesgerais" class="control-label">Observações Gerais</label>
                        <textarea rows="4" id="observacoesgerais" name="observacoesgerais" class="form-control input-md" ><?php echo $r['observacoesgerais']; ?></textarea>
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
