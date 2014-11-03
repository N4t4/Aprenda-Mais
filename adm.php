<!DOCTYPE html>

<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="css/estilo-adm.css">
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

		<header id="cabecario">
			<header class="container">
				<div class="col-md-8">
					<h1><span class="ap-logo"></span> Apreda Mais</h1>
				</div>
				<div class="col-md-4">
					<button class="btn btn-primary pull-right">Sair</button>
				</div>
			</header>
		</header>

		<section id="main">
			<div class="container">
				<section class="row">

					<nav class="col-md-3" id="menu-lateral">
						<div class="panel-body">
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#"> Alunos</a></li>
								<li class="active"><a href="#"> Professores</a></li>
								<li><a href="#"> Disciplinas</a></li>
								<li><a href="#"> Aulas</a></li>
								<li><a href="#"> Sobre</a></li>
							</ul>
						</div>
					</nav>

					<article class="col-md-9 col-sm-6 hidden-xs">
						<header>
							<h3>Cortesias</h3>
							
							<nav class="navbar navbar-default" role="navigation">
								<div class="container-fluid">
								    <div class="navbar-header">
								      	<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
									        <span class="sr-only">Toggle navigation</span>
									        <span class="icon-bar"></span>
									        <span class="icon-bar"></span>
									        <span class="icon-bar"></span>
								      	</button>
								    </div>

								    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
								    	<form class="navbar-form navbar-left" role="search">
								        	<div class="input-group">
								        		<form method="get" action="">
								        			<input type="hidden" name="local" value="<?php echo $local; ?>">
										      		<input type="text" name="search" class="form-control" placeholder="Nome ou e-mail" size="42" value="">
										      		<span class="input-group-btn">
										        		<button class="btn btn-default" type="submit"> Pesquisar</button>
										      		</span>
									      		</form>
						    				</div>
								      	</form>
									    <ul class="nav navbar-nav navbar-right">
									    	<li><button type="button" class="btn btn-success navbar-btn" id="show-modal-add-cortesia"><span class="glyphicon glyphicon-plus"></span> adicionar</button></li>
									    </ul>
								    </div>
								</div>
							</nav>
						</header>

						<section>
							<table class="table table-hover">
								<caption class="text-color4"><strong>Professores</strong> </caption>
															
								<thead class="bg-color4">
									<tr class="bg-color4">
										<th class="border-color1">Nome</th>
										<th class="border-color1">E-mail</th>
										<th class="border-color1">Senha</th>
										<th class="border-color1">Área</th>
										<th class="border-color1">Data de entrada</th>
									</tr>
								</thead>

								<tbody class="border-color1 list-view-professores">
									<tr>
										<td class="border-color1">Natã Elias Rafael</td>
										<td class="border-color1">nata.erafael@gmail.com</td>
										<td class="border-color1">nata123</td>
										<td class="border-color1">Matematica</td>
										<td class="border-color1">12 de Maio de 2014</td>
										<td class="border-color1">
											<button class="btn btn-warning btn-xs"><span class="glyphicon glyphicon-pencil"></span> Editar</button>
											<button class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-trash"></span> Excluir</button>
										</td>
									</tr>

									<tr> <td class="border-color1">Natã Elias Rafael</td> <td class="border-color1">nata.erafael@gmail.com</td> <td class="border-color1">nata123</td> <td class="border-color1">Matematica</td> <td class="border-color1">12 de Maio de 2014</td> <td class="border-color1"> <button class="btn btn-warning btn-xs"><span class="glyphicon glyphicon-pencil"></span> Editar</button> <button class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-trash"></span> Excluir</button> </td> </tr> 
									<tr> <td class="border-color1">Natã Elias Rafael</td> <td class="border-color1">nata.erafael@gmail.com</td> <td class="border-color1">nata123</td> <td class="border-color1">Matematica</td> <td class="border-color1">12 de Maio de 2014</td> <td class="border-color1"> <button class="btn btn-warning btn-xs"><span class="glyphicon glyphicon-pencil"></span> Editar</button> <button class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-trash"></span> Excluir</button> </td> </tr> 
									<tr> <td class="border-color1">Natã Elias Rafael</td> <td class="border-color1">nata.erafael@gmail.com</td> <td class="border-color1">nata123</td> <td class="border-color1">Matematica</td> <td class="border-color1">12 de Maio de 2014</td> <td class="border-color1"> <button class="btn btn-warning btn-xs"><span class="glyphicon glyphicon-pencil"></span> Editar</button> <button class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-trash"></span> Excluir</button> </td> </tr> 
									<tr> <td class="border-color1">Natã Elias Rafael</td> <td class="border-color1">nata.erafael@gmail.com</td> <td class="border-color1">nata123</td> <td class="border-color1">Matematica</td> <td class="border-color1">12 de Maio de 2014</td> <td class="border-color1"> <button class="btn btn-warning btn-xs"><span class="glyphicon glyphicon-pencil"></span> Editar</button> <button class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-trash"></span> Excluir</button> </td> </tr> 
									<tr> <td class="border-color1">Natã Elias Rafael</td> <td class="border-color1">nata.erafael@gmail.com</td> <td class="border-color1">nata123</td> <td class="border-color1">Matematica</td> <td class="border-color1">12 de Maio de 2014</td> <td class="border-color1"> <button class="btn btn-warning btn-xs"><span class="glyphicon glyphicon-pencil"></span> Editar</button> <button class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-trash"></span> Excluir</button> </td> </tr> 
									<tr> <td class="border-color1">Natã Elias Rafael</td> <td class="border-color1">nata.erafael@gmail.com</td> <td class="border-color1">nata123</td> <td class="border-color1">Matematica</td> <td class="border-color1">12 de Maio de 2014</td> <td class="border-color1"> <button class="btn btn-warning btn-xs"><span class="glyphicon glyphicon-pencil"></span> Editar</button> <button class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-trash"></span> Excluir</button> </td> </tr> 
									<tr> <td class="border-color1">Natã Elias Rafael</td> <td class="border-color1">nata.erafael@gmail.com</td> <td class="border-color1">nata123</td> <td class="border-color1">Matematica</td> <td class="border-color1">12 de Maio de 2014</td> <td class="border-color1"> <button class="btn btn-warning btn-xs"><span class="glyphicon glyphicon-pencil"></span> Editar</button> <button class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-trash"></span> Excluir</button> </td> </tr> 
									<tr> <td class="border-color1">Natã Elias Rafael</td> <td class="border-color1">nata.erafael@gmail.com</td> <td class="border-color1">nata123</td> <td class="border-color1">Matematica</td> <td class="border-color1">12 de Maio de 2014</td> <td class="border-color1"> <button class="btn btn-warning btn-xs"><span class="glyphicon glyphicon-pencil"></span> Editar</button> <button class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-trash"></span> Excluir</button> </td> </tr> 
									<tr> <td class="border-color1">Natã Elias Rafael</td> <td class="border-color1">nata.erafael@gmail.com</td> <td class="border-color1">nata123</td> <td class="border-color1">Matematica</td> <td class="border-color1">12 de Maio de 2014</td> <td class="border-color1"> <button class="btn btn-warning btn-xs"><span class="glyphicon glyphicon-pencil"></span> Editar</button> <button class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-trash"></span> Excluir</button> </td> </tr> 
									<tr> <td class="border-color1">Natã Elias Rafael</td> <td class="border-color1">nata.erafael@gmail.com</td> <td class="border-color1">nata123</td> <td class="border-color1">Matematica</td> <td class="border-color1">12 de Maio de 2014</td> <td class="border-color1"> <button class="btn btn-warning btn-xs"><span class="glyphicon glyphicon-pencil"></span> Editar</button> <button class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-trash"></span> Excluir</button> </td> </tr> 
									<tr> <td class="border-color1">Natã Elias Rafael</td> <td class="border-color1">nata.erafael@gmail.com</td> <td class="border-color1">nata123</td> <td class="border-color1">Matematica</td> <td class="border-color1">12 de Maio de 2014</td> <td class="border-color1"> <button class="btn btn-warning btn-xs"><span class="glyphicon glyphicon-pencil"></span> Editar</button> <button class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-trash"></span> Excluir</button> </td> </tr> 
									<tr> <td class="border-color1">Natã Elias Rafael</td> <td class="border-color1">nata.erafael@gmail.com</td> <td class="border-color1">nata123</td> <td class="border-color1">Matematica</td> <td class="border-color1">12 de Maio de 2014</td> <td class="border-color1"> <button class="btn btn-warning btn-xs"><span class="glyphicon glyphicon-pencil"></span> Editar</button> <button class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-trash"></span> Excluir</button> </td> </tr> 
								</tbody>
							</table>
						</section>

						<footer>
							
						</footer>

						<section style="background-color: #ddd; padding: 0 5px  5px 5px;">
							<footer>
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