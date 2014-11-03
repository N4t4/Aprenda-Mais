<style type="text/css">
	.item{
		display: block;
		height: 480px;
		/*width: 640px;*/
		padding: 10px;
	}

	.m0_h1{
		text-align: center !important;
		color: #cbddf1;
		text-shadow: 0 0 4px black;
		font-size: 54px;
		padding-top: 142px;
	}
	.m1_h1{
		text-align: center !important;
		color: #cbddf1;
		text-shadow: 0 0 4px black;
		font-size: 54px;
		padding-top: 142px;
	}
	.m1_h1{
		text-shadow: 0 0 2px black;
		font-size: 14px;
		padding-top: 2px;
		margin-bottom: 6px !important;
	}
	.m1_h2{
		text-align: center !important;
		color: #87b3da;
		font-size: 42px;
	}

	.m2_h1{
		color: #87b3da;
		font-size: 32px;
		padding-left: 10px;
	}

	.m2_p{
		color: black;
		font-size: 18px;
	}

	.m3_h1{
		color: #87b3da;
		font-size: 32px;
		padding-left: 10px;
	}

	.m3_p{
		color: black;
		font-size: 18px;
		width: 48%;
		margin-right: 2%;
		float: left;
	}

	.m4_h1{
		color: #87b3da;
		font-size: 32px;
		padding-left: 10px;
	}

	.m4_p{
		color: black;
		font-size: 18px;
	}

	.m5_h1{
		color: #87b3da;
		font-size: 32px;
		padding-left: 10px;
	}
	.m5_p{
		color: black;
		font-size: 18px;
		margin-right: 2%;
	}
	.m5_img{
		float: right;
		max-width: 42%;
	}
	
</style>
<div id="source" style="display: none">
	<?php echo $aula->conteudo; ?>
</div>

<!-- Modal Add User -->
<div class="modal fade" id="modal-assistir-aula" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content" id="componente-visualizar-aula">
			<header class="modal-header">
				<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
				<h4 class="modal-title"><span class="fa fa-book"></span> <?php echo $aula->titulo ?></h4>
			</header>
			
			<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
			  
			  <!-- Wrapper for slides -->
			  	<div class="carousel-inner">
			    
				    <div class="item active">
				    	<h1><?php echo $aula->titulo ?></h1>
				    	<center><img src="<?php echo IMG ?>/cosmobit.png" alt="#"></center>

					      <p>
					      	<?php echo $aula->descricao ?>
					      </p>
				    </div>
			  	</div>

			  <!-- Controls -->
			</div>

			<a class="left" href="#carousel-example-generic" role="button" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
			<a class="right" href="#carousel-example-generic" role="button" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>

			<footer class="modal-footer">						
				<p>Texto</p>
			</footer>
		</div>
	</div>
</div>

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
					      			<?php if(count($disciplina->aulas) > 0) { foreach ($disciplina->aulas as $aula_){?>
					          			<li class="sub-item"><a href="?local=control-users.php"> <?php echo $aula_->titulo ?> <span style="background-color: green" class="badge pull-right"><!--+42--></span></a></li>
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

			<article class="col-md-9 col-sm-6 hidden-xs">
				<header>
					<h1> <?php echo $aula->titulo ?> </h1>
				</header>
				<section>
					<center><img src="<?php echo IMG ?>/cosmobit.png" alt="#" class="img-thumbnail"></center>
					<p><?php echo $aula->descricao ?></p>
				</section>
				<footer>
					<button type="button" class="btn btn-success " id="show-modal-aula">Assistir aula <span class="glyphicon glyphicon-eye-open"></span></button>
				</footer>

				<section style="background-color: #ddd; padding: 0 5px  5px 5px;">
					<footer>
						<h3>Comentarios</h3>
						<ul class="media-list">
					      <li class="media">
					        <a class="pull-left" href="#">
					          <img class="media-object" data-src="holder.js/64x64" alt="64x64" src="" style="width: 64px; height: 64px;">
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