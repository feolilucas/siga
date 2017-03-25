<?php  
/*include "session.php";*/
include "cabecalho.php";
include "menu.php";

require_once "classearea.php";
$area = new area;
$r = $area->buscarAreas();
?>
<title>Cadastro de Usuário</title>


<body style="padding-top:60px;">
  <section style="width:60%" class="container">
    <!-- Modal -->
    <div class="modal fade in" id="divSucesso" role="dialog" style="display:none; position: absolute;top: 20%;">
      <div class="modal-dialog modal-sm">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Cadastro realizado</h4>
          </div>
          <div class="modal-body">
            <p>Usuário cadastrado com sucesso.</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal" onclick="location.href='http://localhost/siga/cadastrousuario.php';">Fechar</button>
          </div>
        </div>
      </div>
    </div>

    <div>
      <!-- Nav tabs -->
      <ul class="nav nav-tabs " role="tablist">
        <li role="presentation" class="active"><a href="#dados_pessoais" aria-controls="dados_pessoais" role="tab" data-toggle="tab">Dados Pessoais</a></li>

        <li role="presentation"><a href="#endereco" aria-controls="endereco" role="tab" data-toggle="tab">Endereço</a></li>

        <li role="presentation"><a href="#dados_de_acesso" aria-controls="dados_de_acesso" role="tab" data-toggle="tab">Dados de Acesso</a></li>

        <li role="presentation"><a href="#permissoes" aria-controls="permissoes" role="tab" data-toggle="tab">Permissões</a></li>
      </ul>

      <!-- Tab panes -->
      <form class="form-horizontal" action="inserir.php?id=1" method="POST" data-toggle="validator" id="1">

        <div class="tab-content">
          <div role="tabpanel" class="tab-pane active form-group panel panel-body" id="dados_pessoais" style="border-color: #00688B;">
            <div style="padding-top:20px;">

              

                <div class="form-group panel panel-body">

                  <fieldset>

                    <div style="padding-left: 5%; padding-right: 5%;">

                      <div class="row">
                        <div class="col-md-9 form-group">
                          <label for="nome" class="control-label">Nome</label>
                          <input id="nome" type="text" maxlength="200" name="nome" size="92" class="form-control input-md" required>
                        </div>
                        <div class="col-md-3 form-group">
                          <label for="datanascimento" class="control-label">Nascimento</label>
                          <input type="date" id="datanascimento" name="datanascimento" class="form-control input-md" size="10" maxlength="10" required>
                        </div>
                      </div>


                      <div class="row">
                        <div class="col-md-6 form-group">
                          <label for="cpf" class="control-label">CPF</label>
                          <input type="text" name="cpf" maxlength="14" OnKeyPress="formatar('###.###.###-##', this)" class="form-control input-md" id="cpf" required>
                        </div>
                        <div class="col-md-6 form-group">
                          <label for="rg" class="control-label">RG</label>
                          <input id="rg" type="text" maxlength="10" size="19" name="rg" class="form-control input-md" onkeyup="somenteNumeros(this);" required>
                          <span class="help-block">Somente números</span> 
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



          <div role="tabpanel" class="tab-pane form-group panel panel-body" id="dados_de_acesso" style="border-color: #00688B;">
            <div style="padding-top:20px;">

              
                <div class="form-group panel panel-body">

                 <fieldset>
                  <div style="padding-left: 5%; padding-right: 5%;" width: "80%;">
                    <div class="row">
                      <div class="col-md-6 form-group">
                        <label for="usuario" class="control-label">Nome de usuário</label>
                        <input type="text" size="22" name="usuario" class="form-control input-md" data-minlength="6" required>
                        <span class="help-block">O nome de usuário deve ter no minimo (6) dígitos</span> </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6 form-group">
                          <label for="senha" class="control-label">Senha</label>
                          <input id="senha" type="password" size="22" name="senha" class="form-control input-md" data-minlength="4" required>
                          <span class="help-block">A senha deve ter no minímo (4) dígitos</span> </div>
                        </div>
                        <div class="row">
                          <div class="col-md-6 form-group">
                            <label for="confirmasenha" class="control-label">Confirme a senha</label>
                            <input name="confirmasenha" type="password" class="form-control" id="confirmasenha" placeholder="Confirme sua Senha..." 
                            data-match="#senha" data-match-error="Atenção! As senhas não estão iguais." required>
                            <div class="help-block with-errors"></div>
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



            <div role="tabpanel" class="tab-pane form-group panel panel-body" id="permissoes" style="border-color: #00688B;">
              <div style="padding-top:20px;">

               
                  <div class="form-group panel panel-body">

                   <fieldset>
                    <div style="padding-left: 5%; padding-right: 5%;" width: "80%;">
                      <legend>Corporativo</legend>
                      <div class="row">
                        <div class="col-md-6 form-group">
                          <label for="areatecnica" class="control-label">Área técnica</label>
                          <select class="form-control" name="area">
                            <?php
                            foreach($r as $linha){
                             echo "<option value='".$linha['idarea']."'>".$linha['nome']."</option>";
                           }
                           ?>
                         </select>
                       </div>
                     </div>
                   </fieldset>


                   
                     <fieldset>
                      <div style="padding-left: 5%; padding-right: 5%;" width: "80%;">
                        <legend>Permissões</legend>
                        <div class="row">
                          <div class="checkbox form-group col-md-6">
                            <p>
                              <input type="checkbox" name="administrativo" value="1">
                              Administrativo</p>
                              <p>
                                <input type="checkbox" name="planoterapeutico" value="1">
                                Plano Terapêutico</p>
                                <p>
                                  <input type="checkbox" name="psicologico" value="1">
                                  Psicológico</p>
                                  <p>
                                    <input type="checkbox" name="neurologico" value="1">
                                    Neurológico</p>
                                  </div>
                                  <div class="checkbox form-group col-md-6">
                                    <p><br>
                                      <input type="checkbox" name="fonoaudiologico" value="1">
                                      Fonoaudiológico</p>
                                      <p>
                                        <input type="checkbox" name="terapiaocupacional" value="1">
                                        Terapia Ocupacional</p>
                                        <p>
                                          <input type="checkbox" name="pedagogico" value="1">
                                          Pedagógico</p>
                                          <p>
                                            <input type="checkbox" name="social" value="1">
                                            Social</p>
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
                                        <button id="idCancelar" name="idCancelar" class="btn btn-danger" onclick="location.href='http://localhost/siga/';">Cancelar</button>                                    </div>
                                      </div>

                                  

                                    <br>
                                  </div>
                                </div>
                              </fieldset>
                            </div>
                        </div>
                      </div>

          </form>


<!--<div id="divSucesso" style="width: 500px;height: 200px;display: none;position: absolute;top: 20%;left: 32%;
box-shadow:10px 10px 5px cadetblue;" class="alert alert-success"> <strong>Success!</strong> Indicates a successful or positive action.
  <button style="position: absolute;top: 40%;left: 32%;" id="idOkMsg" name="OkMsg" class="btn btn-success" onclick="location.href='http://localhost/siga/cadastrousuario.php';">Confirmar</button>
</div>--> 

<script>

  if(window.location.href == "http://localhost/siga/cadastrousuario.php?gravou=1"){
   MostrarEsconderDiv('divSucesso');
 };

</script>
</body>

<?php  
include "rodape.php";
?>
