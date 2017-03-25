
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

<script>
  $(function(){
    $(".btn-toggle").click(function(e){
      e.preventDefault();
      el = $(this).data('element');
      $(el).toggle();
    });
  });
</script>

<script>
  function formatar(mascara, documento){
    var i = documento.value.length;
    var saida = mascara.substring(0,1);
    var texto = mascara.substring(i)

    if (texto.substring(0,1) != saida){
      documento.value += texto.substring(0,1);
    }
  }
</script>
<script>
  function mascaraTEL(o,f){
    v_obj=o
    v_fun=f
    setTimeout("execmascara()",1)
  }
  function execmascara(){
    v_obj.value=v_fun(v_obj.value)
  }
  function mtel(v){
    v=v.replace(/\D/g,"");             //Remove tudo o que não é dígito
    v=v.replace(/^(\d{2})(\d)/g,"($1) $2"); //Coloca parênteses em volta dos dois primeiros dígitos
    v=v.replace(/(\d)(\d{4})$/,"$1-$2");    //Coloca hífen entre o quarto e o quinto dígitos
    return v;
  }
  function id( el ){
    return document.getElementById( el );
  }
  window.onload = function(){
    id('telefone').onkeyup = function(){
      mascaraTEL( this, mtel );
    }
  }
</script>
<script type="text/javascript">
  jQuery(function($){
   $("#cep").change(function(){
    var cep_code = $(this).val();
    if( cep_code.length <= 0 ) return;
    $.get("http://apps.widenet.com.br/busca-cep/api/cep.json", { code: cep_code },
     function(result){
      if( result.status!=1 ){
       alert(result.message || "Houve um erro desconhecido");
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
</script>
<script>
  function somenteNumeros(num) {
    var er = /[^0-9.]/;
    er.lastIndex = 0;
    var campo = num;
    if (er.test(campo.value)) {
      campo.value = "";
    }
  }
</script>


</html>