<!DOCTYPE html>

<html >
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
	<title>SIGA APAE</title>

	<link rel="shortcut icon" href="/img/favicon.ico" type="image/x-icon">

	<link rel="stylesheet" href="css/shadow.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/csspersonalizado.css">
	<link rel="stylesheet" type="text/css" href="css/sweetalert.css">
	<link rel="stylesheet" href="css/style.css">
	<script src="js/sweetalert.min.js"></script>
	<script src="js/jquery-2.1.3.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/funcoes.js"></script>
	<script src="js/jquery.maskedinput.js"></script>	
</head>

<body>
	<div class="wrapper">
		<form class="form-signin" method="post" action="verificalogin.php" id="login">       
			<h2 class="form-signin-heading">Login</h2>
			<input pattern="[a-z\s]+$" id="login" type="text" class="form-control" name="login" placeholder="Usuário" required autofocus />
			<input id="senha" type="password" class="form-control" name="senha" placeholder="Senha" required />      
			<button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>   
		</form>
	</div>
</body>

<script>
	if(window.location.href == "http://localhost/siga/telalogin.php?fail"){
		$(document).ready(function() {
			swal({ 
				title: "Erro",
				text: "Usuário ou senha incorretos.",
				type: "error" 
			},
			function(){
				window.location.href = 'telalogin.php';
			});
		});
	};
</script>

</html>
</body>
<?php  
include "rodape.php";
?>
