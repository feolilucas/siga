<html>
<head>
	<meta charset="utf-8">
	<title>Cadastro de Usuário</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<script src='js/jquery-2.1.3.min.js'></script>
	<script src='js/bootstrap.min.js'></script>
	 
	
</head>
<?php  

include "menu.php";

?>
<body style="padding-top:60px;">
	<section style="padding-left: 120px;" class="container">
			<div class="panel panel-success">
				<div class="panel-heading">
					Cadastrar Usuário
				</div>
				<div class="panel-body">
					<form action="cadastrar.usuario.php" method="POST">
						<fieldset>
							<legend>Dados Pessoais</legend>
							
							<div style="padding-left: 5%; padding-right: 5%;">
								<div>
									<p><b>Nome:</b></p>
									<p><input type="text" maxlength="300" name="nome" size="92"></p>
								</div>
								<div style="float: right; width: 43%;">
									<p><b>CPF:</b></p>
									<p><input type="text" name="cpf" maxlength="14" OnKeyPress="formatar('###.###.###-##', this)" ></p>
								</div><div style="float: right; width: 33%;">
									<p><b>RG:</b></p>
									<p><input type="text" size="19" name="rg"></p>
								</div>
								<div style="float: right; width: 25.5%;">
									<p><b>Sexo:</b></p>
									<p><input type="radio" name="sexo" value="f">Feminino
										<input type="radio" name="sexo" value="m" checked>Masculino</p>											
								</div>
								<div>
									<p><b>Nascimento:</b></p>
									<p><input type="date" name="datanascimento"></p>
								</div>										
							</div>
						</fieldset>
								
								<fieldset>
									<legend>Contato</legend>
									
									<div style="padding-left: 5%; padding-right: 5%;">										
										<div style="float: right; width: 43% ;">
											<p><b>Telefone:</b></p>
											<p><input type="text" maxlength="20" size="19" name="telefone"></p>
										</div>
										<div>
											<p><b>Email:</b></p>
											<p><input type="email" maxlength="100" size="58" name="email"></p>
										</div>
									</div>
								</fieldset>	
							
							<fieldset>
									<legend>Endereço</legend>
									
									<div style="padding-left: 5%; padding-right: 5%;">
										<div style="float: right; width: 43%;">
											<p><b>Complemento:</b></p>
											<p><input type="text" size="53" maxlength="100" name="complemento" ></p>
										</div>
										<div style="float: right; width: 16%;">
											<p><b>Número:</b></p>
											<p><input type="text" maxlength="5" size="5" name="numero"  ></p>
										</div>
										<div>
											<p><b>Rua:</b></p>
											<p><input type="text" size="45" maxlength="100" name="rua" ></p>
										</div>																										
										
										<div style="float: right; width: 43%;">
											<p><b>CEP:</b></p>
											<p><input type="text" maxlength="10" size="10" name="cep" ></p>
										</div>
										<div>
											<p><b>Bairro:</b></p>
											<p><input type="text" size="58" maxlength="100" name="bairro" ></p>
										</div>
										
										<div style="float: right; width: 72%;">
											<p><b>Estado:</b></p>
											<p><input type="text" size="22" maxlength="100" name="estado" ></p>
										</div>
										<div>
											<p><b>Cidade:</b></p>
											<p><input type="text" size="22" maxlength="100" name="cidade" ></p>
										</div>
									</div>														
							</fieldset>
							<fieldset>
								<legend>Login</legend>
								<div style="padding-left: 5%; padding-right: 5%; padding-top: 1%;">
									<div style="float: right; width: 72%;">
										<p><b>Senha:</b></p>
										<p><input type="password" size="22" name="senha"></p>
									</div>
									<div>
										<p><b>Usuário:</b></p>
										<p><input type="text" size="22" name="usuario"></p>
									</div>
									<div>
										<p><b>Área</b></p>
										<p><input type="radio" name="tipousuario" value="1">Administrador
										<input type="radio" name="tipousuario" value="0" checked>Comum</p>
									</div>									
								</div>	
							</fieldset>
							<div style="height: 10%; padding-top: 3%; padding-left: 5%;">
								<input type="submit" class="btn btn-success" value="Cadastrar">
							</div>
					</form>		
</body>
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

</html>