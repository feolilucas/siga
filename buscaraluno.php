<html>
<head>


<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />

  <title>Buscar aluno</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/boxshadow.css">
  <link rel="stylesheet" href="css/shadow.css">
  <script src='js/jquery-2.1.3.min.js'></script>
  <script src='js/bootstrap.min.js'></script>
  <script src="js/validator.min.js"></script>
  <script src='js/funcoes.js'></script>
  
  <style>
		.box {
			-webkit-box-shadow:0 0 10px rgba(0, 0, 0, 0.5);
			-moz-box-shadow:0 0 10px rgba(0, 0, 0, 0.5);
			box-shadow:0 0 10px rgba(0, 0, 0, 0.5);	
		}
		.custab{
			border: 1px solid #ccc;
			padding: 5px;
			margin: 5% 0;
			box-shadow: 3px 3px 2px #ccc;
			transition: 0.5s;
		}
		.custab:hover{
			box-shadow: 3px 3px 0px transparent;
			transition: 0.5s;
		}
		.clickable{
		    cursor: pointer;   
		}

		.panel-heading div {
			margin-top: -18px;
			font-size: 15px;
		}
		.panel-heading div span{
			margin-left:5px;
		}
		.panel-body{
			display: none;
		}
	</style>
</head>
<?php
	include "menu.php";
	require_once "classealuno.php";
	
	$aluno = new aluno;
	
	$r = $aluno->mostrartodos();
?>
<body style="padding-top:60px;">
	
	 
		<div align="center" style="width:100%;" >
		
			<div style="width: 60%;">
				<div class="panel panel-primary box">
					<div align="left" class="panel-heading">
						<h3 class="panel-title">Buscar aluno</h3>
					</div>
					
					<section class="container">
						<div style=" width: 60%; padding: 30px; float: right; "  >
							<table class="table table-hover" id="dev-table">
								<thead>
									<tr>
										<th>ID</th>
										<th>Nome</th>
										<th>Data de nascimento</th>
										<th>CPF</th>
										<th>RG</th>
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
											echo "<td>".$linha['cpf']."</td>";
											echo "<td>".$linha['rg']."</td>";
											echo "<td class='text-center'><a class='btn btn-success btn-xs' href='#'><span class='glyphicon glyphicon-plus'></span> Cadastrar</a></td>";
											echo "</tr>";
										}
									?>
								</tbody>
							</table>
						</div>
						<div style="float:left; width: 30%; padding-top: 5%; padding-left: 3%;">
							<div align="center" class="filtro" style="padding-top: 5px; padding-right: 5px;">
								
									<span class="clickable filter" data-toggle="tooltip" title="Filtrar" data-container="body">
										<button class="btn btn-info">
											<i class="glyphicon glyphicon-filter">Filtro</i>
										</button>
									</span>
								
							</div>
							<div class="panel-body">
								<input type="text" class="form-control" id="dev-table-filter" data-action="filter" data-filters="#dev-table" placeholder="Filtrar alunos" />
							</div>
						</div>
					</section>
					
				</div>
			</div>
		</div>
</body>

<script>
(function(){
    'use strict';
	var $ = jQuery;
	$.fn.extend({
		filterTable: function(){
			return this.each(function(){
				$(this).on('keyup', function(e){
					$('.filterTable_no_results').remove();
					var $this = $(this), search = $this.val().toLowerCase(), target = $this.attr('data-filters'), $target = $(target), $rows = $target.find('tbody tr');
					if(search == '') {
						$rows.show(); 
					} else {
						$rows.each(function(){
							var $this = $(this);
							$this.text().toLowerCase().indexOf(search) === -1 ? $this.hide() : $this.show();
						})
						if($target.find('tbody tr:visible').size() === 0) {
							var col_count = $target.find('tr').first().find('td').size();
							var no_results = $('<tr class="filterTable_no_results"><td colspan="'+col_count+'">No results found</td></tr>')
							$target.find('tbody').append(no_results);
						}
					}
				});
			});
		}
	});
	$('[data-action="filter"]').filterTable();
})(jQuery);

$(function(){
    // attach table filter plugin to inputs
	$('[data-action="filter"]').filterTable();
	
	$('.container').on('click', '.filtro span.filter', function(e){
		var $this = $(this), 
				$panel = $this.parents('.panel');
		
		$panel.find('.panel-body').slideToggle();
		if($this.css('display') != 'none') {
			$panel.find('.panel-body input').focus();
		}
	});
	$('[data-toggle="tooltip"]').tooltip();
})
</script>

</html>