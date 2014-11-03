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
				  	<div class="panel panel-default">
					    <div class="panel-heading">
				      		<h4 class="panel-title">
					        	<a data-toggle="collapse" data-parent="#menu-principal" href="#collapseLogs">
					          		<span class="fa fa-superscript"></span> Matemática <span class="caret"></span>
					        	</a>
				      		</h4>
				    	</div>
					    <div id="collapseLogs" class="panel-collapse collapse">
					    	<div class="panel-body">
								<ul class="nav nav-pills nav-stacked">
									
									<li class="sub-item"><a href="?local=control-logs.php"> <s>Logs</s></a></li>
									<li><a href="#"> <s>Acessos</s></a></li>
									<li><a href="#"> <s>Busca de Acessos</s></a></li>
									<li><a href="#"> <s>Últimos Acessos</s></a></li>
								</ul>
					      	</div>
					    </div>
				  	</div>
				  	<div class="panel panel-default">
				    	<div class="panel-heading">
				      		<h4 class="panel-title">
				        		<a data-toggle="collapse" data-parent="#menu-principal" href="#collapseHqs">
				          			<span class="fa fa-institution"></span> História <span class="caret"></span>
				        		</a>
				      		</h4>
				    	</div>
				    	<div id="collapseHqs" class="panel-collapse collapse">
				      		<div class="panel-body">
				        		<ul class="nav nav-pills nav-stacked">
				          			<li class="sub-item"><a href="?local=control-hqs.php"> Listagem</a></li>
				  					<li><a href="control-hqs.php" parameters="teste=NATA" > <s>Listagem Cartex</s></a></li>
								</ul>
				      		</div>
				    	</div>
				  	</div>
				  	<div class="panel panel-default">
				    	<div class="panel-heading">
				      		<h4 class="panel-title">
				        		<a data-toggle="collapse" data-parent="#menu-principal" href="#collapseCourtesy">
				          			<span class="fa fa-globe"></span> Geografia <span class="caret"></span>
				        		</a>
				      		</h4>
				    	</div>
				    	<div id="collapseCourtesy" class="panel-collapse collapse">
				      		<div class="panel-body">
				        		<ul class="nav nav-pills nav-stacked">
				          			<li class="sub-item"><a href="?local=control-courtesy.php"> Listar</a></li>
				        		</ul>
				      		</div>
				    	</div>
				  	</div>
				  	<div class="panel panel-default">
				    	<div class="panel-heading">
				      		<h4 class="panel-title">
				        		<a data-toggle="collapse" data-parent="#menu-principal" href="#collapseCourtesy">
				          			<span class="fa fa-flask"></span> Quimica <span class="caret"></span>
				        		</a>
				      		</h4>
				    	</div>
				    	<div id="collapseCourtesy" class="panel-collapse collapse">
				      		<div class="panel-body">
				        		<ul class="nav nav-pills nav-stacked">
				          			<li class="sub-item"><a href="?local=control-courtesy.php"> Listar</a></li>
				        		</ul>
				      		</div>
				    	</div>
				  	</div>
				</div>
			</div>

			<div class="col-md-9 col-sm-6 hidden-xs">
				<h2> Linha do tempo </h2>
				<p></p>

				<div class="panel panel-default aula-preview" id="user14618" style="background-color: indianred">
					<header class="panel-heading">
						<h3 class="panel-title"><strong> Nome da aula</strong></h3>
					</header>
					<article class="panel-body panel-user panel-collapse collapse in" id="view-user14618">
						<section>
							<img src="img/cosmobit.png" class="img-thumbnail pull-left">
						</section>
						<footer>
							<a href="visualizar-aula.php" class="btn btn-success pull-right">Ver mais <span class="glyphicon glyphicon-log-in"></span></a>
						</footer>
					</article>
				</div>

				<div class="panel panel-default aula-preview" id="user14618" style="background-color: yellowgreen"> <header class="panel-heading"> <h3 class="panel-title"><strong> Nome da aula</strong></h3> </header> <article class="panel-body panel-user panel-collapse collapse in" id="view-user14618"> <section> <img src="img/cosmobit.png" class="img-thumbnail pull-left"> <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p> </section> <footer> <button owner="#user14618" type="button" class="btn btn-success pull-right">Ver mais <span class="glyphicon glyphicon-log-in"></span></button> </footer> </article> </div>

			</div>

		</section>
	</div>
</section>