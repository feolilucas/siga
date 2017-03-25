<div id="minhaDiv">
  <div class="panel panel-primary box ">
    <div class="panel-heading">
      <h3 class="panel-title">Buscar aluno</h3>
    </div>

    <section class="container">
      <div style="padding:30px;">

        <div class="row">

          <div class="panel-body col-md-5 form-group">
            <input type="text" class="form-control" id="dev-table-filter" data-action="filter" data-filters="#dev-table" placeholder="Filtrar alunos" />
          </div>

          <div class="panel-body col-md-5 form-group">
            <button type="button" class="btn-toggle btn btn-danger" data-element="#minhaDiv">Fechar</button>
          </div>


        </div>
        
        <table class="table table-hover" id="dev-table">
          <thead>
            <tr>
              <th>ID</th>
              <th>Nome</th>
              <th>Data de nascimento</th>
                 <!-- <th>CPF</th>
                 <th>RG</th> -->
                 <th class="text-center">Ações</th>
               </tr>
             </thead>
             <tbody>
              <?php
              foreach($r as $linha)
              {
                echo "<tr>";
                echo "<td>".$linha['idaluno']."</td>";
                echo "<td>".$linha['nome']."</td>";
                echo "<td>".$linha['datanascimento']."</td>";
              //echo "<td>".$linha['cpf']."</td>";
              //echo "<td>".$linha['rg']."</td>"; 
                echo "<td class='text-center'><a class='btn btn-success btn-xs' href='#'><span class='glyphicon glyphicon-plus'></span>Selecionar</a></td>";
                echo "</tr>";
              }
              ?>
            </tbody>
          </table>
        </div>
      </section>
    </div>
  </div>