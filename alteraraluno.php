<?php  
include "cabecalho.php";
include "menu.php";

require_once "classearea.php";
$area = new area;
$r = $area->buscarAreas();
?>
<title>Alterar Alunos</title>

<body style="padding-top:60px;">
  <section style="width:60%" class="container">
 

    <!-- Modal -->
    <div class="modal fade in" id="divSucesso" role="dialog" style="display:none; position: absolute;top: 20%;">
      <div class="modal-dialog modal-sm">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Alteração realizada</h4>
          </div>
          <div class="modal-body">
            <p>Aluno alterado com sucesso.</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal" onclick="location.href='http://localhost/siga/alteraraluno.php';">Fechar</button>
          </div>
        </div>
      </div>
    </div>

    <div>
      <!-- Nav tabs -->
      <ul class="nav nav-tabs " role="tablist">
        <li role="presentation" class="active"><a href="#dados_pessoais" aria-controls="dados_pessoais" role="tab" data-toggle="tab">Dados Pessoais</a></li>

        <li role="presentation"><a href="#endereco" aria-controls="endereco" role="tab" data-toggle="tab">Endereço</a></li>

      </ul>

      <!-- Tab panes -->
    <form class="form-horizontal" action="inserir.php?id=2" method="POST" data-toggle="validator" id="2">

      <div class="tab-content">
        <div role="tabpanel" class="tab-pane active form-group panel panel-body" id="dados_pessoais" style="border-color: #00688B;">
          <div style="padding-top:20px;">

            

              <div class="form-group panel panel-body">

                <fieldset>

                  <div style="padding-left: 5%; padding-right: 5%;">

                    <div class="row">
                      <div class="col-md-8 form-group">
                        <label for="nome" class="control-label">Nome</label>
                        <input id="nome" type="text" maxlength="200" name="nome" size="92" class="form-control input-md" required>
                      </div>
                      <div class="col-md-4 form-group">
                        <label for="datanascimento" class="control-label">Nascimento</label>
                        <input type="date" id="datanascimento" name="datanascimento" class="form-control input-md" size="10" maxlength="10" required>
                      </div>
                    </div>


                    <div class="row">

                      <div class="col-md-6 form-group">
                        <label for="rg" class="control-label">RG</label>
                        <input id="rg" type="text" maxlength="10" size="19" name="rg" class="form-control input-md" onkeyup="somenteNumeros(this);">
                        <span class="help-block">Somente números</span> 
                      </div>
                      <div class="col-md-6 form-group">
                        <label for="cpf" class="control-label">CPF</label>
                        <input type="text" name="cpf" maxlength="14" OnKeyPress="formatar('###.###.###-##', this)" class="form-control input-md" id="cpf">
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-4 form-group">
                        <label for="dataemissaorg" class="control-label">Data de emissão do RG</label>
                        <input id="dataemissaorg" type="date" maxlength="10" size="19" name="dataemissaorg" class="form-control input-md">
                      </div>


                         <div class="col-md-4 form-group">
                        <label for="sexo" class="control-label">Sexo</label>
                        <select class="form-control" name="sexo" required>
                        <option></option>
                          <option value="Masculino">Masculino</option>
                          <option value="Feminino">Feminino</option>                       
                       </select>
                     </div>
                   </div>
                         


                    <div class="row">
                      <div class="col-md-8 form-group">
                        <label for="nomepai" class="control-label">Nome do pai</label>
                        <input id="nomepai" type="text" maxlength="200" name="nomepai" size="92" class="form-control input-md">
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-8 form-group">
                        <label for="nomemae" class="control-label">Nome da mãe</label>
                        <input id="nomemae" type="text" maxlength="200" name="nomemae" size="92" class="form-control input-md">
                      </div>
                    </div>


                    <div class="row">
                      <div class="col-md-12 form-group">
                        <label for="deficiencia" class="control-label">Deficiencia</label>
                        <textarea rows="5" id="deficiencia" name="deficiencia" class="form-control input-md" required></textarea>
                        <span class="help-block">Informe a deficiência do aluno.</span> 
                      </div>
                    </div>
                  </div></fieldset>




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



          <div role="tabpanel" class="tab-pane form-group panel panel-body" id="endereco" style="border-color: #00688B;">
            <div style="padding-top:20px;">

             
                <div class="form-group panel panel-body">

                  <fieldset>
                    <div style="padding-left: 5%; padding-right: 5%;" width: "80%;">
                      <div class="row">
                        <div class="col-md-4 form-group">
                          <label for="cep" class="control-label">CEP</label>
                          <input name="cep" type="text" id="cep" value="" OnKeyPress="formatar('#####-###', this)" size="10" maxlength="9"  class="form-control input-md" required>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-xs-12 col-md-10 form-group">
                          <label for="logradouro" class="control-label">Logradouro</label>
                          <input type="text" size="50" maxlength="300" id="logradouro" name="logradouro"  class="form-control input-md"required>
                        </div>
                        <div class="col-xs-6 col-md-2 form-group">
                          <label for="numero" class="control-label">Número</label>
                          <input type="text" maxlength="20" size="5" id="numero" name="numero"  class="form-control input-md" required>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-8 form-group">
                          <label for="bairro" class="control-label">Bairro</label>
                          <input type="text" size="58" id="bairro" maxlength="300" name="bairro" class="form-control input-md" required>
                        </div>
                        <div class="col-md-4 form-group">
                          <label for="cidade" class="control-label">Cidade</label>
                          <input type="text" id="cidade" maxlength="300" name="cidade" class="form-control input-md" required>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-2 form-group">
                          <label for="estado" class="control-label">Estado</label>
                          <input type="text" id="estado" maxlength="2" name="estado" class="form-control input-md" required>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-12 form-group">
                          <label for="complemento" class="control-label">Complemento</label>
                          <input type="text" maxlength="300" name="complemento" class="form-control input-md">
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-12 form-group">
                          <label for="referencia" class="control-label">Referência</label>
                          <input type="text" maxlength="300" name="referencia"  class="form-control input-md">
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
          </div>
          </div>
         </form>  
          </section>
        







<!--<div id="divSucesso" style="width: 500px;height: 200px;display: none;position: absolute;top: 20%;left: 32%;
box-shadow:10px 10px 5px cadetblue;" class="alert alert-success"> <strong>Success!</strong> Indicates a successful or positive action.
  <button style="position: absolute;top: 40%;left: 32%;" id="idOkMsg" name="OkMsg" class="btn btn-success" onclick="location.href='http://localhost/siga/cadastrousuario.php';">Confirmar</button>
</div>--> 

<script>

  if(window.location.href == "http://localhost/siga/alteraraluno.php?gravou=1"){
   MostrarEsconderDiv('divSucesso');
 };

</script>
</body>


<?php  
include "rodape.php";
?>
