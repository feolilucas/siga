
<?php include "cabecalho.php"; ?>



	<title>Teste</title>




<body>

<script>
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
    swal("Excluido!", "O registro foi excluido.", "success");
  } else {
    swal("Cancelado", "Nada foi excluido.", "error");
  }
});
</script>










<button onclick="swal();">Deletar!</button>

</body>
</html>