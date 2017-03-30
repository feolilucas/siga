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