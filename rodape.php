<script>
  if(window.location.href == <?php echo "'".$url."?gravou=1"."'"; ?>){
    $(document).ready(function() {
      swal({ 
        title: "Sucesso",
        text: "Cadastro realizado com sucesso.",
        type: "success" 
      },
      function(){
        window.location.href = <?php echo "'".$pagina."'"; ?>;
      });
    });
  };
</script>

<script>
  if(window.location.href == <?php echo "'".$url."?alterou=1"."'"; ?>){
    $(document).ready(function() {
      swal({ 
        title: "Sucesso",
        text: "Cadastro alterado com sucesso.",
        type: "success" 
      },
      function(){
        window.location.href = <?php echo "'".$pagina."'"; ?>;
      });
    });
  };
</script>









      <div style="background: #e7e7E8;height: 30px; text-align:center;width: 100%; line-height:30px;" class="navbar-fixed-bottom">
        SIGA APAE - Sistema de Gestão das Áreas Técnicas da APAE.</div>
</html>