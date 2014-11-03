<article class="col-md-9 col-sm-6 hidden-xs">
	<header>
		
		<h3>Professores</h3>
		
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
			        		<form method="POST" action="<?php echo site_url("index.php/adm/pesquisar_professor") ?>">
			        			<input type="text" name="pesquisa" class="form-control" placeholder="Nome ou e-mail" size="42" value="">
					      		<span class="input-group-btn">
					        		<button class="btn btn-default" type="submit"> Pesquisar</button>
					      		</span>
				      		</form>
	    				</div>
			      	</div>
				    <ul class="nav navbar-nav navbar-right">
				    	<li><button type="button" class="btn btn-success navbar-btn" id="show-add-professor" url="<?php echo site_url('/index.php/adm/cadastrar_professor'); ?>"><span class="glyphicon glyphicon-plus"></span> adicionar</button></li>
				    </ul>
			    </div>
			</div>
		</nav>
	</header>

	<section>
		<?php if (isset($pesquisa)) { ?>
			<p>Resultados para pesquisa: <i><?php echo $pesquisa; ?></i></p>
		<?php } ?>

		<?php if (count($professores) > 0) { ?>
		<table class="table table-striped table-hover">
			<caption><strong>Professores</strong> </caption>
										
			<thead>
				<tr>
					<th>#Código</th>
					<th>Nome</th>
					<th>E-mail</th>
					<th>Senha</th>
					<th>Ações</th>
				</tr>
			</thead>

			<tbody>
			<?php 
				foreach ($professores as $professor) {
			?>
				<tr>
					<td><?php echo isset($pesquisa) ? str_replace($pesquisa, "<span class='subli'>".$pesquisa."</span>", $professor->codigo) : $professor->codigo; ?></td>
					<td><?php echo isset($pesquisa) ? str_replace($pesquisa, "<span class='subli'>".$pesquisa."</span>", $professor->nome) : $professor->nome; ?></td>
					<td><?php echo isset($pesquisa) ? str_replace($pesquisa, "<span class='subli'>".$pesquisa."</span>", $professor->email) : $professor->email; ?></td>
					<td><?php echo isset($pesquisa) ? str_replace($pesquisa, "<span class='subli'>".$pesquisa."</span>", $professor->senha) : $professor->senha; ?></td>
					<td>
						<button class="btn btn-warning btn-xs btn-editar" url="<?php echo site_url('/index.php/adm/editar_professor/'.$professor->codigo); ?>"><span class="glyphicon glyphicon-pencil"></span> Editar</button>
						<button class="btn btn-danger btn-xs  btn-excluir" url="<?php echo site_url('/index.php/adm/excluir_professor/'.$professor->codigo); ?>"><span class="glyphicon glyphicon-trash"></span> Excluir</button>
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
