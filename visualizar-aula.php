<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="css/estilo.css">
		<link rel="stylesheet" type="text/css" href="css/font-awesome-4.2.0/css/font-awesome.min.css">
		<!--<script src="js/respond.js"></script>-->
		<title>Aprenda Mais</title>
	</head>
	<body>
		<!-- Modal Add User -->
		<div class="modal fade" id="modal-add-user" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
			<div class="modal-dialog modal-lg">
				<div class="modal-content" id="componente-visualizar-aula">
					<header class="modal-header">
						<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
						<h4 class="modal-title"><span class="fa fa-book"></span> Nome da aula</h4>
					</header>
					
					<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
					  
					  <!-- Wrapper for slides -->
					  <div class="carousel-inner">
					    
					    <div class="item active">
					    	<img src="img/cosmobit.png" alt="#">
						      <p>
						      	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
						      </p>
					    </div>

					    <div class="item">
					      	<img src="img/persona1.jpg" alt="#">
					      	<p>
					      	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
					      	</p>
					    </div>

					    bbça
					  </div>

					  <!-- Controls -->
					</div>

					<a class="left" href="#carousel-example-generic" role="button" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
					<a class="right" href="#carousel-example-generic" role="button" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>

					<footer class="modal-footer">						
						
					</footer>
				</div>
			</div>
		</div>

		<nav class="navbar" id="navegacao-superior">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menu-superior">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>

				<div class="collapse navbar-collapse" id="menu-superior">
					
					<ul class="nav navbar-nav  navbar-left">
						<li class="active"><a href="#principal">Login</a></li>
						<li> <a href="#funcionalidades">Cadastre-se</a></li>
						<li> <a href="#screenshots">Sobre</a></li>
					</ul>
					
					<div class="navbar-form navbar-right">	
		        		<form method="get" action="" class="" class="form-horizontal">
		        			<div class="form-group">
								<label class="control-label" for="pesquisar">Pesquisar</label>
								<input class="form-control input-sm" name="pesquisar" id="pesquisar" placeholder="Digite aqui sua pesquisa...">	
								<button class="btn btn-default btn-sm" type="submit"><span class="glyphicon glyphicon-search"></span></button>
							</div>
			      		</form>
			      	</div>
				</div>
			</div>
		</nav>

		<header id="cabecario">
			<header class="container">
				<div class="col-md-8">
					<img id="logo" src="img/logo.png">
					<h1>Apreda Mais</h1>
					<p>Conheça...</p>
				</div>
			</header>
		</header>

		<section id="main">
			<div class="container">
				<section class="row" id="funcionalidades">

					<div class="col-md-3 hidden-xs hidden-sm" id="menu-principal">
						<h3>Disciplinas</h3>
						
						<div class="panel-group" id="menu-principal">
							<div class="panel panel-default">
						    	<div class="panel-heading">
						      		<h4 class="panel-title">
						        		<a data-toggle="collapse" data-parent="#menu-principal" href="#collapseUser">
						          			<span class="fa fa-book"></span> Português <span class="caret"></span>
						        		</a>
						      		</h4>
						    	</div>
						    	<div id="collapseUser" class="panel-collapse collapse">
						      		<div class="panel-body">
							      		<ul class="nav nav-pills nav-stacked">
							          		<li class="sub-item"><a href="?local=control-users.php"> Cadastrados <span style="background-color: green" class="badge pull-right"><!--+42--></span></a></li>
							          		<li class="sub-item"><a href="?local=control-users.php&type=PagSeguro"> Clientes PagSeguro</a></li>
							          		<li class="sub-item"><a href="?local=control-users.php&type=Verotel" parameters="teste=NATA" > Clientes Verotel</a></li>
							          		<li class="sub-item"><a href="#"> <s>Bloqueios do dia</s></a></li>
							          		<li class="sub-item"><a href="#"> <s>Comentários</s></a></li>
										</ul>
						      		</div>
						    	</div>
							</div>
						</div>
					</div>

					<article class="col-md-9 col-sm-6 hidden-xs">
						<header>
							<h1> Aula1 </h1>
						</header>
						<section>
							<center><img src="img/cosmobit.png" class="img-thumbnail"></center>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
								quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
								consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
								cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
								proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
							</p>
						</section>
						<footer>
							<button type="button" class="btn btn-success " id="show-modal-add-user">Assistir aula <span class="glyphicon glyphicon-eye-open"></span></button>
						</footer>

						<section style="background-color: #ddd; padding: 0 5px  5px 5px;">
							<footer>
								<h3>Comentarios</h3>
								<ul class="media-list">
							      <li class="media">
							        <a class="pull-left" href="#">
							          <img class="media-object" data-src="holder.js/64x64" alt="64x64" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI2NCIgaGVpZ2h0PSI2NCI+PHJlY3Qgd2lkdGg9IjY0IiBoZWlnaHQ9IjY0IiBmaWxsPSIjZWVlIi8+PHRleHQgdGV4dC1hbmNob3I9Im1pZGRsZSIgeD0iMzIiIHk9IjMyIiBzdHlsZT0iZmlsbDojYWFhO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1zaXplOjEycHg7Zm9udC1mYW1pbHk6QXJpYWwsSGVsdmV0aWNhLHNhbnMtc2VyaWY7ZG9taW5hbnQtYmFzZWxpbmU6Y2VudHJhbCI+NjR4NjQ8L3RleHQ+PC9zdmc+" style="width: 64px; height: 64px;">
							        </a>
							        <div class="media-body">
							          <h4 class="media-heading">Media heading</h4>
							          <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.</p>
							          <!-- Nested media object -->
							          <div class="media">
							            <a class="pull-left" href="#">
							              <img class="media-object" data-src="holder.js/64x64" alt="64x64" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI2NCIgaGVpZ2h0PSI2NCI+PHJlY3Qgd2lkdGg9IjY0IiBoZWlnaHQ9IjY0IiBmaWxsPSIjZWVlIi8+PHRleHQgdGV4dC1hbmNob3I9Im1pZGRsZSIgeD0iMzIiIHk9IjMyIiBzdHlsZT0iZmlsbDojYWFhO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1zaXplOjEycHg7Zm9udC1mYW1pbHk6QXJpYWwsSGVsdmV0aWNhLHNhbnMtc2VyaWY7ZG9taW5hbnQtYmFzZWxpbmU6Y2VudHJhbCI+NjR4NjQ8L3RleHQ+PC9zdmc+" style="width: 64px; height: 64px;">
							            </a>
							            <div class="media-body">
							              <h4 class="media-heading">Nested media heading</h4>
							              Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.
							              <!-- Nested media object -->
							              <div class="media">
							                <a class="pull-left" href="#">
							                  <img class="media-object" data-src="holder.js/64x64" alt="64x64" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI2NCIgaGVpZ2h0PSI2NCI+PHJlY3Qgd2lkdGg9IjY0IiBoZWlnaHQ9IjY0IiBmaWxsPSIjZWVlIi8+PHRleHQgdGV4dC1hbmNob3I9Im1pZGRsZSIgeD0iMzIiIHk9IjMyIiBzdHlsZT0iZmlsbDojYWFhO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1zaXplOjEycHg7Zm9udC1mYW1pbHk6QXJpYWwsSGVsdmV0aWNhLHNhbnMtc2VyaWY7ZG9taW5hbnQtYmFzZWxpbmU6Y2VudHJhbCI+NjR4NjQ8L3RleHQ+PC9zdmc+" style="width: 64px; height: 64px;">
							                </a>
							                <div class="media-body">
							                  <h4 class="media-heading">Nested media heading</h4>
							                  Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.
							                </div>
							              </div>
							            </div>
							          </div>
							          <!-- Nested media object -->
							          <div class="media">
							            <a class="pull-left" href="#">
							              <img class="media-object" data-src="holder.js/64x64" alt="64x64" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI2NCIgaGVpZ2h0PSI2NCI+PHJlY3Qgd2lkdGg9IjY0IiBoZWlnaHQ9IjY0IiBmaWxsPSIjZWVlIi8+PHRleHQgdGV4dC1hbmNob3I9Im1pZGRsZSIgeD0iMzIiIHk9IjMyIiBzdHlsZT0iZmlsbDojYWFhO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1zaXplOjEycHg7Zm9udC1mYW1pbHk6QXJpYWwsSGVsdmV0aWNhLHNhbnMtc2VyaWY7ZG9taW5hbnQtYmFzZWxpbmU6Y2VudHJhbCI+NjR4NjQ8L3RleHQ+PC9zdmc+" style="width: 64px; height: 64px;">
							            </a>
							            <div class="media-body">
							              <h4 class="media-heading">Nested media heading</h4>
							              Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.
							            </div>
							          </div>
							        </div>
							      </li>
							      <li class="media">
							        <a class="pull-right" href="#">
							          <img class="media-object" data-src="holder.js/64x64" alt="64x64" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI2NCIgaGVpZ2h0PSI2NCI+PHJlY3Qgd2lkdGg9IjY0IiBoZWlnaHQ9IjY0IiBmaWxsPSIjZWVlIi8+PHRleHQgdGV4dC1hbmNob3I9Im1pZGRsZSIgeD0iMzIiIHk9IjMyIiBzdHlsZT0iZmlsbDojYWFhO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1zaXplOjEycHg7Zm9udC1mYW1pbHk6QXJpYWwsSGVsdmV0aWNhLHNhbnMtc2VyaWY7ZG9taW5hbnQtYmFzZWxpbmU6Y2VudHJhbCI+NjR4NjQ8L3RleHQ+PC9zdmc+" style="width: 64px; height: 64px;">
							        </a>
							        <div class="media-body">
							          <h4 class="media-heading">Media heading</h4>
							          Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.
							        </div>
							      </li>
							    </ul>
							</footer>
						</section>
					</article>

				</section>
			</div>
		</section>

		<footer id="rodape">
			<div class="container">
				<div class="col-md-12">
					<p>2014</p>
				</div>
			</div>
		</footer>

		<script src="js/jquery-2.1.1.min.js"></script> 
		<script src="js/bootstrap.js"></script> 
		<script>
		$(document).ready(function(){
			$('#show-modal-add-user').click(function(){
				
		    	$('#modal-add-user').modal('show');

		    	$("#modal-add-user .confirm").unbind("click").click(function() {
					var btn = $(this);
					btn.button('loading');

					$("#modal-edit-user .confirm").button('loading');

		    		var nome   = $("#new-user-nome").val();
		    		var email  = $("#new-user-email").val();
		    		var senha  = $("#new-user-senha").val();
		    		var codigo = $("#new-user-codigo").val();
		    		var obs    = $("#new-user-obs").val();

		    	   	$.ajax({
						type: "POST", 
						url: "actions.php", 
						data: {	
							"ADD-USUARIO":true,
							"user-nome": nome,
							"user-email": email,
							"user-senha": senha,
							"user-codigo": codigo,
							"user-obs": obs
						}, 
						success: function (data) {
							btn.button('loading');
							if (data != 0) {
								$('#modal-add-user').modal('hide');
								window.location.reload(true);
							}
						}
					});		
				});
		    });
		});
		</script>
	</body>
</html>