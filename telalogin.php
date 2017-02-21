<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Siga APAE</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/loginmodal.css">
    <script src='js/loginmodal.js'></script>
	<script src='js/jquery-2.1.3.min.js'></script>
	<script src='js/bootstrap.min.js'></script>
	 
	
</head>
<body>



<!-- BEGIN # BOOTSNIP INFO -->
<div class="container">
	<div class="row">
		<h1 class="text-center">Bem vindo ao Sistema de Gestão das Áreas Técnicas da APAE</h1>
        <p class="text-center"><a href="#" class="btn btn-primary btn-lg" role="button" data-toggle="modal" data-target="#login-modal">ENTRAR</a></p>
	</div>
</div>
<!-- END # BOOTSNIP INFO -->

<!-- BEGIN # MODAL LOGIN -->
<div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    	<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header" align="center">
					<img class="img-circle" id="img_logo" src="img/usuario.png">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
					</button>
				</div>
                
                <!-- Begin # DIV Form -->
                <div id="div-forms">
                
                    <!-- Begin # Login Form -->
         
                    <form form method="post" action="verificalogin.php" id="login">
		                <div class="modal-body">
				    		<div id="div-login-msg">
                               
                                <span id="text-login-msg">Digite seu usário e senha</span>
                            </div>
				    		<input id="login" name="login" class="form-control" type="text" placeholder="Usário" required>
				    		<input id="senha" name="senha" class="form-control" type="password" placeholder="Senha" required>
                            <!--<div class="checkbox">
                                <label>
                                    <input type="checkbox">Lembrar neste computador
                                </label>
                            </div>-->
        		    	</div>
				        <div class="modal-footer">
                            <div>
                                <button type="submit" class="btn btn-primary btn-lg btn-block">Entrar</button>
                            </div>
				    	    <div>
                                <button id="login_lost_btn" type="button" class="btn btn-link">Esqueci minha senha</button>
                              
                            </div>
				        </div>
                    </form>
                    <!-- End # Login Form -->
                    
                    <!-- Begin | Lost Password Form -->
                    <form id="lost-form" style="display:none;">
    	    		    <div class="modal-body">
		    				<div id="div-lost-msg">
                                <div id="icon-lost-msg" class="glyphicon glyphicon-chevron-right"></div>
                                <span id="text-lost-msg">Type your e-mail.</span>
                            </div>
		    				<input id="lost_email" class="form-control" type="text" placeholder="E-Mail (type ERROR for error effect)" required>
            			</div>
		    		    <div class="modal-footer">
                            <div>
                                <button type="submit" class="btn btn-primary btn-lg btn-block">Send</button>
                            </div>
                            <div>
                                <button id="lost_login_btn" type="button" class="btn btn-link">Log In</button>
                                <button id="lost_register_btn" type="button" class="btn btn-link">Register</button>
                            </div>
		    		    </div>
                    </form>
                    <!-- End | Lost Password Form -->
                         
                </div>
                <!-- End # DIV Form -->
                
			</div>
		</div>
	</div>
    <!-- END # MODAL LOGIN -->
    
    

<!--
<body style="background-color: #3CB371;">
	<section align="center" style="padding-top: 2%; width:25%;" class="container">
			<div class="panel panel-success"">
				<div class="panel-heading">
					Login
				</div>
				<div class="panel-body">
					<form method="post" action="verificalogin.php">
						<table align="center">
							<tr height="40px">
								<th>
									Login:
								</th>
								<td>
									<input type="text" name="login" id="login"  />
								</td>
							</tr>
							<tr height="40px">
								<th>
									Senha:
								</th>
								<td>
									<input type="password" name="senha" id="senha" />
								</td>
							</tr>
						</table>
						<input type="submit" class="btn btn-success" value="Entrar"/>
					</form>
			</div>
	</section>
    -->
    
    
    
    
</body>
</html>