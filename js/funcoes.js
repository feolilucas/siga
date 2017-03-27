
$(document).ready(function() {
	//Permitir só numero
	$("#cpf").keypress(verificaNumero);
	$("#rg").keypress(verificaNumero);
	$("#cep").keypress(verificaNumero);
	$("#telefone").keypress(verificaNumero);
	$("#datanascimento").keypress(verificaNumero);
	$("#numero").keypress(verificaNumero);


//mascaras
jQuery(function($){
	$("#telefone").mask("(99) 99999-9999");
	$("#cpf").mask("999.999.999.99");
	$("#datanascimento").mask("99/99/9999");
	$("#dataemissaorg").mask("99/99/9999");
	$("#cep").mask("99999-999");

});
//Função permitir só numeros
 function verificaNumero(e) {
    if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
      return false;
    }
  }

//Função deletar
   function deletar(id, idformulario){
    swal({
      title: "Voce tem certeza?",
      text: "Esta ação não pode ser desfeita.",
      type: "warning",
      showCancelButton: true,
      confirmButtonColor: "#DD6B55",
      confirmButtonText: "Sim, excluir.",
      cancelButtonText: "Não, cancelar.",
      closeOnConfirm: false,
      closeOnCancel: false
    },
    function(isConfirm){
      if (isConfirm) {
        window.location="deletar.php?id="+id+"&idformulario="+idformulario; 

      } else {
        swal("Cancelado", "Nada foi excluido.", "error");
      }
    });
  };

//mostrardiv
function MostrarEsconderDiv(id) {
	if ($('#' + id).css('display') == 'block') {
		$('#' + id).css('display','none')			
	} else {
		$('#' + id).css('display','block')			
	}
}

function MostrarEsconderDivModal(id) {
	if ($('#' + id).css('display') == 'block') {
		$('#' + id).removeClass("modal fade");
		$('#' + id).addClass("modal fade in");	
	} else {				
		$('#' + id).removeClass("modal fade in");
		$('#' + id).addClass("modal fade");
	}
}

//Função pesquisa de alunos/usuarios
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
                var no_results = $('<tr class="filterTable_no_results"><td colspan="'+col_count+'">Nenhum resultado encontrado.</td></tr>')
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

 $(function(){
    $(".btn-toggle").click(function(e){
      e.preventDefault();
      el = $(this).data('element');
      $(el).toggle();
    });
  });







 //função busca cep

  jQuery(function($){
   $("#cep").change(function(){
    var cep_code = $(this).val();
    if( cep_code.length <= 0 ) return;
    $.get("http://apps.widenet.com.br/busca-cep/api/cep.json", { code: cep_code },
     function(result){
      if( result.status!=1 ){

        swal("Não encontrado!", "CEP não encontrado. Preencha os campos manualmente.", "warning");
       //alert(result.message || "Houve um erro desconhecido");
       return;
     }
     $("input#cep").val( result.code );
     $("input#estado").val( result.state );
     $("input#cidade").val( result.city );
     $("input#bairro").val( result.district );
     $("input#logradouro").val( result.address );
     $("input#estado").val( result.state );
   });
  });
 });


//funcao pegar id aluno tela de busca

 $(document).on("click", ".getaluno", function(){
  var nome = $(this).parent().parent().find(".colunanome").text();
  var id = $(this).parent().parent().find(".colunaid").text();

  document.getElementById("idaluno").value = id;
  document.getElementById("nomealuno").value = nome;
});

























});







