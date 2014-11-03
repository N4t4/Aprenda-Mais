<div style="display: none" id="views">
	<textarea id="telas-modelo">
		<section class="tela-area-mini" id="form-add-tela">
			<a href="#"><div></div></a>
			<a href="#"><div><h1 class="m0_h1">TEXTO</h1></div></a>
			<a href="#"><div><h1 class="m1_h1">Título</h1><h2 class="m1_h2">123456789ABCDEFG HIJKLMNOPQ</h2></div></a>
			<a href="#"><div><h1 class="m2_h1">Título</h1> <p class="m2_p">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>				<p class="m2_p">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p></div></a>
			<a href="#"><div><h1 class="m3_h1">Título</h1> <p class="m3_p">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p> <p class="m3_p">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p></div></a>
			<a href="#"><div><h1 class="m4_h1">Título</h1> <center><img class="m4_img" src="<?php echo IMG."persona1.jpg" ?>"> <p class="m4_p">Lorem ipsum dolor sit amet, consectetur adipisicing elit adipisicing elit.</p> </center> </div></a>
			<a href="#"><div><h1 class="m5_h1">Título</h1><p class="m5_p"> <img class="m5_img" src="<?php echo IMG."persona1.jpg" ?>"> Lorem ipsum dolor sit amet,dolor sit amet,dolor sit amet,dolor sit amet,dolor sit amet,dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p></div></a>
		</section>	
	</textarea>
</div>	

<div class="panel panel-default aula-preview" id="ferramentas">
	<header class="panel-heading">
		<h3 class="panel-title"><a href="#"><strong>Ferramentas <span class="glyphicon glyphicon-wrench"></span></strong></a></h3>
	</header>
	<article class="panel-body panel-user panel-collapse collapse in">
		<section>
			<a href="#"><span class="glyphicon glyphicon-picture"></span></a>
			<a href="#"><span class="glyphicon glyphicon-film"></span></a>
			<a href="#"><span class="glyphicon glyphicon-download-alt"></span></a>
			<br>
			<a href="#"><span class="glyphicon glyphicon-headphones"></span></a>
			<a href="#"><span class="glyphicon glyphicon-globe"></span></a>
			<a href="#"><span class="glyphicon glyphicon-comment"></span></a>
			<br>
			<a href="#"><span class="fa fa-font"></span></a>
		</section>
		<footer></footer>
	</article>
</div>

<div class="panel panel-default aula-preview" id="telas">
	<header class="panel-heading">
		<h3 class="panel-title"><strong><span class="glyphicon glyphicon-th-large"></span> Telas <span id="count-telas" class="badge">42</span></strong></h3>
	</header>
	<article class="panel-body panel-user panel-collapse collapse in">
		<section class="tela-area-mini">
			<?php echo $aula->conteudo; ?>
		</section>
		<footer></footer>
	</article>
</div>

<article class="col-md-10 col-sm-offset-1 hidden-xs">


		<header>
			<h2><?php echo $aula->titulo; ?></h2>
		</header>

		<section id="tela-area">
			<div>
			</div>
		</section>

		<footer></footer>
</article>
