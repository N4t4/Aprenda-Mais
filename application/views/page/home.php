<section id="main">
	<div class="container">
		<section class="row" id="funcionalidades">

			<div class="col-md-3 hidden-xs hidden-sm" id="menu-principal">
				<h3>Disciplinas</h3>
				<div class="panel-group" id="menu-principal">
					<?php foreach ($disciplinas as $disciplina){ ?>	
					<div class="panel panel-default">
				    	<div class="panel-heading">
				      		<h4 class="panel-title">
				        		<a data-toggle="collapse" data-parent="#menu-principal" href="#disciplina<?php echo $disciplina->codigo ?>">
				          			<span class="fa fa-book"></span> <?php echo $disciplina->nome ?> <span class="caret"></span>
				        		</a>
				      		</h4>
				    	</div>
				    	<div id="disciplina<?php echo $disciplina->codigo ?>" class="panel-collapse collapse">
				      		<div class="panel-body">
					      		<ul class="nav nav-pills nav-stacked">
					      			<?php if(count($disciplina->aulas) > 0) { foreach ($disciplina->aulas as $aula){?>
					          			<li class="sub-item"><a href="?local=control-users.php"> <?php echo $aula->titulo ?> <span style="background-color: green" class="badge pull-right"><!--+42--></span></a></li>
					      			<?php } } else {?>
					      				<li>Sem aulas desenvolvidas</li>
					      			<?php } ?>
								</ul>
				      		</div>
				    	</div>
					</div>
					<?php } ?>
				</div>
			</div>

			<div class="col-md-9 col-sm-6 hidden-xs">
				<h2> Linha do tempo </h2>
				<p></p>
				<?php foreach ($aulas as $aula): ?>
				<div class="panel panel-default aula-preview" id="user14618" style="background-color: yellowgreen">
					<header class="panel-heading">
						<h3 class="panel-title"><strong> <?php echo $aula->titulo ?></strong></h3>
					</header>
					<article class="panel-body panel-user panel-collapse collapse in" id="view-user14618">
						<section>
							<img src="img/cosmobit.png" class="img-thumbnail pull-left">
							<p><?php echo $aula->descricao ?></p>
						</section>
						<footer>
							<a href="<?php echo site_url('index.php/page/visualizar_aula/'.$aula->codigo); ?>" class="btn btn-success pull-right">Ver mais <span class="glyphicon glyphicon-log-in"></span></a>
						</footer>
					</article>
				</div>
				<?php endforeach ?>

			</div>

		</section>
	</div>
</section>