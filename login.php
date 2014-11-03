<!DOCTYPE html>
<html lang="pt-br" class="bg-img">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
	<title>Seiren Comics - Login</title>
</head>
<body class="bg-img">
	<div class="container">
		<div class="col-md-12">

		<div class="modal-dialog modal-sm" id="box-login">
			<div class="modal-content">
				<div class="modal-header">
					<img id="imagem-principal" src="img/logo.png" />
				</div>
			  	<div class="modal-body">
							
					<div class="form-group">
						<label for="inputEmail">Nome do Usuário</label>
						<input type="email" id="user" class="form-control input-lg" id="inputEmail" placeholder="usuário">
					</div>
					<div class="form-group">
						<label for="inputPassword">Senha</label>
						<input type="password" id="senha" class="form-control input-lg" id="inputPassword" placeholder="senha">
					</div>

					<div id="error-text"></div>
							
			  	</div>
			  <div class="modal-footer">
			    <button data-loading-text="Autenticando..." type="button" class="btn btn-primary btn-lg">Entrar <span class="glyphicon glyphicon-log-in"></span></button>
			  </div>
			</div><!-- /.modal-content -->
		</div><!-- /.modal-dialog -->

		</div>
	</div>

	<script src="js/jquery-2.1.1.min.js"></script> 
	<script src="js/bootstrap.js"></script>

	<script>
		$(document).ready(function () { 

			$(".btn").click(function(){
				
				var btn = $(this);
				btn.button('loading');
				
				var user  = $("#user").val();
				var senha = $("#senha").val();

				if(user ==""){
					$("#user").focus();
					return;
				}
				if(senha ==""){
					$("#senha").focus();
					return;
				}


				/*$.ajax({
					type: "POST", 
					url: "actions.php", 
					data: {
						"LOGIN":true,
						"user": user,
						"senha": senha
					}, 
					success: function (data) {
						
						if(data == 1){
							window.location.replace("home.php");
						}
						if(data == 2){
							btn.button('reset');
							$("#error-text").html('<div class="alert alert-danger fade in" role="alert"> <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button> <strong>Acesso negado!</strong> Verifique o nome de usuário e senha informados. </div>');
						}
					},
					error: function(request,error) 
					{
						btn.button('reset');
						alert("Erro na conexão, tente novamente mais tarde");
					}
				}); */

				return false; 
			}); 
		});
	</script>
</body>
</html>