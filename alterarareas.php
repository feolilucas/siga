<?php  
include "cabecalho.php";
include "menu.php";

if(($arraypermissoes['administrativo'] == 0))
{
    echo '<script>location.href="index.php";</script>';
}
require_once "classearea.php";
$area = new area;
$r = $area->buscarAreas();
?>
 <title>Alterar Áreas Técnicas</title>
<body style="padding-top:60px; padding-bottom: 30px;">
  <section style="width:60%" class="container">
  

    <div>
      <!-- Nav tabs -->
      <ul class="nav nav-tabs " role="tablist">
        <li role="presentation" class="active"><a href="#areas_tecnicas" aria-controls="areas_tecnicas" role="tab" data-toggle="tab">Áreas Técnicas</a></li>
      </ul>



      <!-- Tab panes -->

      <div class="tab-content">
        <div role="tabpanel" class="tab-pane active form-group panel panel-body" id="dados_pessoais" style="border-color: #00688B;">
          <div style="padding-top:20px;">

            <form class="form-horizontal" action="" method="POST" data-toggle="validator">

              <div class="form-group panel panel-body">

                <fieldset>

                  <div style="padding-left: 5%; padding-right: 5%;">

                    <div class="row">
                      <div class="col-md-9 form-group">
                        <label for="areatecnica" class="control-label">Área Técnica</label>
                        <input id="areatecnica" type="text" maxlength="200" name="areatecnica" size="92" class="form-control input-md" required>
                      </div>
                    </div>

                  </div>
                </fieldset>
                            <?php include "botoesform.php"; ?>

              </div>
            </form>
          </div>
        </div>


     </body>
     <?php  
include "rodape.php";
?>
