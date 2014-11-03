<nav class="navbar" id="navegacao-superior">	
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menu-superior">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			 <a class="navbar-brand" href="#"><span class="ap-logo"></span></a>
		</div>

		<div class="collapse navbar-collapse" id="menu-superior">
			
			<ul class="nav navbar-nav  navbar-left">
				<li class="active"><a href="<?php echo site_url('index.php/login'); ?>">Login</a></li>
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