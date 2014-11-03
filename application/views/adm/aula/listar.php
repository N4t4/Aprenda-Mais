<article class="col-md-9 col-sm-6 hidden-xs">
	<header>
		
		<h3>Aulas</h3>
		
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
			    	<div class="navbar-form navbar-left" role="search">
			        	<div class="input-group">
			        		<form method="POST" action="<?php echo site_url("index.php/adm/pesquisar_aula"); ?>">
			        			<input type="text" name="pesquisa" class="form-control" placeholder="Título ou conteúdo" size="42" value="">
					      		<span class="input-group-btn">
					        		<button class="btn btn-default" type="submit"> Pesquisar</button>
					      		</span>
				      		</form>
	    				</div>
			      	</div>
				    <ul class="nav navbar-nav navbar-right">
				    	<li><button type="button" class="btn btn-success navbar-btn" id="show-add-aula" url="<?php echo site_url('/index.php/adm/cadastrar_aula'); ?>"><span class="glyphicon glyphicon-plus"></span> adicionar</button></li>
				    </ul>
			    </div>
			</div>
		</nav>
	</header>

	<section>
		<?php if (isset($pesquisa)) { ?>
			<p>Resultados para pesquisa: <i><?php echo $pesquisa; ?></i></p>
		<?php } ?>
		
		<?php if (count($aulas) > 0) { ?>
		<table class="table table-striped table-hover">
			<caption><strong>Aulas</strong> </caption>
										
			<thead>
				<tr>
					<th>#Código</th>
					<th>Título</th>
					<th>Descrição</th>
					<th>Ações</th>
				</tr>
			</thead>

			<tbody>
			<?php 
				foreach ($aulas as $aula) {
			?>
				<tr>
					<td><?php echo isset($pesquisa) ? str_replace($pesquisa, "<span class='subli'>".$pesquisa."</span>", $aula->codigo) : $aula->codigo; ?></td>
					<td><?php echo isset($pesquisa) ? str_replace($pesquisa, "<span class='subli'>".$pesquisa."</span>", $aula->titulo) : $aula->titulo; ?></td>
					<td><?php echo isset($pesquisa) ? str_replace($pesquisa, "<span class='subli'>".$pesquisa."</span>", $aula->descricao) : $aula->descricao; ?></td>
					<td>
						<center>
							<button class="btn btn-warning btn-xs btn-editar" url="<?php echo site_url('/index.php/adm/editar_aula/'.$aula->codigo); ?>"><span class="glyphicon glyphicon-pencil"></span> Editar</button>
							<button class="btn btn-danger btn-xs  btn-excluir" url="<?php echo site_url('/index.php/adm/excluir_aula/'.$aula->codigo); ?>"><span class="glyphicon glyphicon-trash"></span> Excluir</button>
							<a class="btn btn-info btn-xs" href="<?php echo site_url("/index.php/adm/aula_desenvolver/".$aula->codigo); ?>"><span class="fa fa-cogs"></span> Desenvolver <span class="fa fa-cogs"></span></a>
						</center>
					</td>
				</tr>
			<?php 
				}
			?>
			</tbody>
		</table>
		<?php } else { ?>
			<center><strong>Nenhum registro encontrado</strong></center>
		<?php }?>
	</section>

	<footer></footer>
</article>
