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
 <title>Áreas Técnicas</title>
<body style="padding-top:60px; padding-bottom: 30px;">
  <section style="width:50%" class="container">

    <!-- div oculta -->

    <div style="width:40%" align="center"  id="minhaDiv">
      <div class="panel panel-primary box ">
        <div class="panel-heading">
          <h3 class="panel-title">Cadastrar Área</h3>
        </div>

       

        <section class="container">
          

            <form class="form-horizontal" action="inserir.php?id=9" method="POST" data-toggle="validator">

              <div class="form-group panel-body">

                <fieldset>

                  <div style="padding-left: 2%; padding-right: 5%;">                    

                     <div class="row">    
                        <div class="col-md-5 form-group">
                          <label for="observacoesgerais" class="control-label">Noma da Área</label><br>
                          <input type="text" name="area" class="form-control input-md" id="area" required>
                        </div>

                    </div>
                  </div>         
                </fieldset>

                 <br>                 
                    
                    <div class="col-md-5">

                      <button id="idConfirmar" name="idConfirmar" class="btn btn-success" type="submit">Confirmar</button>
                      
                      <button type="button" class="btn-toggle btn btn-danger" data-element="#minhaDiv">Cancelar</button>
                  </div>
                  
              </div>
            </form>       
            
          </section>
        </div>
      </div>




    <div>
      <!-- Nav tabs -->
      <ul class="nav nav-tabs " role="tablist">
        <li role="presentation" class="active"><a href="#bucarusuario" aria-controls="buscaraluno" role="tab" data-toggle="tab">Cadastrar Área Técnica</a></li>
      </ul>
      <!-- Tab panes -->
      <div class="tab-content">
        <div role="tabpanel" class="tab-pane active form-group panel panel-body" id="avaliacaopedagogica" style="border-color: #00688B;">
          <div style="padding-top:20px;">
            <form class="form-horizontal" action="" method="POST" data-toggle="validator">
              <div class="form-group panel panel-body">
                <fieldset>
                  <div style="padding-left: 5%; padding-right: 5%;">

                    <div class="row">
                      <div class="col-md-12 form-group">
                        <div class="row">
                          <div class="panel-body col-md-5 form-group">

                            <button type="button" class="btn-toggle btn btn-info" data-element="#minhaDiv"><span class="glyphicon glyphicon-plus" ></span> Adicionar</button>

                          </div>
                        </div>
                        <table class="table table-hover" id="dev-table">
                          <thead>
                            <tr>
                              <th>ID</th>                              
                              <th>Área</th>                              
                              <th class="text-center">Ações</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php
                            foreach($r as $linha)
                            {
                              echo "<tr>";
                              echo "<td>".$linha['idarea']."</td>";                              
                              echo "<td>".$linha['nome']."</td>";                         

                              echo  "<td align='center'><a class='btn btn-danger btn-xs' onClick='deletararea(9,".$linha['idarea'].");'>
                                  <span class='glyphicon glyphicon-remove'></span> Deletar</a>
                                </td>";                                 
                                
                                
                                echo "</tr>";
                              }
                              ?>
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                  </fieldset>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>

<script>
  if(window.location.href == <?php echo "'".$url."?deletou=9"."'"; ?>){
    $(document).ready(function() {
      swal({ 
        title: "Sucesso",
        text: "Registro excluído com sucesso.",
        type: "success" 
      },
      function(){
        window.location.href = <?php echo "'".$pagina."'"; ?>;
      });
    });
  };
</script>

     </body>
     <?php  
include "rodape.php";
?>
