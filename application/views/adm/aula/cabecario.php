<header id="cabecario">
	<header class="container">
		<div class="col-md-2">
			<h1><span class="ap-logo"></span> Apreda Mais</h1>
		</div>
		<div class="col-md-10">
			<ul class="nav navbar-nav">
				<li class="active"><a href="#" class="btn-editar" url="<?php echo site_url('/index.php/adm/editar_aula/'.$aula->codigo); ?>">Aula</a></li>
				<li><a href="#">Telas</a></li>
				<li><a href="#">Media</a></li>
				<li><a href="#">Minigame</a></li>
				<li><a href="#">Exercícios</a></li>
				<li><a href="#">Modelos da tela</a></li>
			</ul>
			<a  class="btn btn-primary pull-right" href="<?php echo site_url('index.php/adm/sair');?>">Sair</a>
		</div>
	</header>
</header>

<!-- Modal Adm -->
<div class="modal fade" id="modal-adm" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content" id="madal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
			<h4 class="modal-title">Titulo</h4>
			</div>
			<div class="modal-body">
				Conteudo
			</div>
			<div class="modal-footer">
				<button id="btn-no" type="button" class="btn btn-default" data-dismiss="modal"></button>
				<button id="btn-yes" data-loading-text="..." type="button" class="btn btn-primary confirm"></button>
			</div>
		</div>
	</div>
</div>

<section id="main">
	<div class="container">
		<section class="row">