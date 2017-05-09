//Função deletar formularios
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



  //Função deletar aluno
   function deletaraluno(id, idformulario){
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
        window.location="deletar.php?id="+id+"&idaluno="+idformulario; 

      } else {
        swal("Cancelado", "Nada foi excluido.", "error");
      }
    });
  };

  //Função deletar area
   function deletararea(id, idarea){
    swal({
      title: "Voce tem certeza?",
      text: 'Esta ação não pode ser desfeita. O campo "área" dos usuários que pertencem a está área será mudado para nulo!',
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
        window.location="deletar.php?id="+id+"&idarea="+idarea; 

      } else {
        swal("Cancelado", "Nada foi excluido.", "error");
      }
    });
  };

   //Função deletar usuario
   function deletarusuario(id, idformulario){
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
        window.location="deletar.php?id="+id+"&idusuario="+idformulario; 

      } else {
        swal("Cancelado", "Nada foi excluido.", "error");
      }
    });
  };