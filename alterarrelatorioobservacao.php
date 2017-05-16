<?php  

include "cabecalho.php";
include "menu.php";

if(($arraypermissoes['terapiaocupacional'] == 0) and ($_SESSION['admin'] == 0))
{
  echo '<script>location.href="index.php";</script>';

}

require_once "classerelatorioobservacao.php";
require_once "classealuno.php";

$relatorioobservacao = new relatorioobservacao;
$aluno = new aluno;

$idformulario = $_GET['id'];
$relatorioobservacao->setIdrelatorioobservacao($idformulario);

$r = $relatorioobservacao->mostrarum();

$aluno->setIdaluno($r['idaluno']);

$r2 = $aluno->mostrarum();
?>


<title>Alterar Relatório de Observação</title>

<body style="padding-top:60px; padding-bottom: 30px;">
  <section style="width:60%" class="container">


    <div>
      <!-- Nav tabs -->
      <ul class="nav nav-tabs " role="tablist">
        <li role="presentation" class="active"><a href="#avaliacaopedagogica" aria-controls="avaliacaopedagogica" role="tab" data-toggle="tab">Alterar Relatório de Observação</a></li>
      </ul>


      <!-- Tab panes -->
      <div class="tab-content">
        <div role="tabpanel" class="tab-pane active form-group panel panel-body" id="avaliacaopedagogica" style="border-color: #00688B;">
          <div style="padding-top:20px;">
            <form class="form-horizontal" action="alterar.php?id=7&idformulario=<?php echo $idformulario; ?>" method="POST" data-toggle="validator">
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
                        <label for="vidadiaria" class="control-label">Vida diária</label>
                        <textarea rows="7" id="vidadiaria" name="vidadiaria" class="form-control input-md" ><?php echo $r['vidadiaria']; ?></textarea>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-12 form-group">
                        <label for="vidapratica" class="control-label">Vida prática</label>
                        <textarea rows="4" id="vidapratica" name="vidapratica" class="form-control input-md" ><?php echo $r['vidapratica']; ?></textarea>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-12 form-group">
                        <label for="habilidadesbasicas" class="control-label">Habilidades básicas</label>
                        <textarea rows="4" id="habilidadesbasicas" name="habilidadesbasicas" class="form-control input-md" ><?php echo $r['habilidadesbasicas']; ?></textarea>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-12 form-group">
                        <label for="observacoesgerais" class="control-label">Observações Gerais</label>
                        <textarea rows="4" id="observacoesgerais" name="observacoesgerais" class="form-control input-md"><?php echo $r['observacoesgerais']; ?></textarea>
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
