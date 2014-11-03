<nav class="col-md-3" id="menu-lateral">
	<div class="panel-body">
		<ul class="nav nav-pills nav-stacked">
			<li <?php if(isset($alunos)) 	  echo 'class="active"'; ?>><a href="<?php echo isset($alunos) 		? '#' : site_url('index.php/adm/aluno');      ?>"> Alunos 		<span class="fa fa-futbol-o pull-right"></span></a></li>
			<li <?php if(isset($professores)) echo 'class="active"'; ?>><a href="<?php echo isset($professores) ? '#' : site_url('index.php/adm/professor');  ?>"> Professores 	<span class="fa fa-coffee pull-right"></span></a></li>
			<li <?php if(isset($disciplinas)) echo 'class="active"'; ?>><a href="<?php echo isset($disciplinas) ? '#' : site_url('index.php/adm/disciplina'); ?>"> Disciplinas 	<span class="fa fa-graduation-cap pull-right"></span></a></li>
			<li <?php if(isset($classes)) 	  echo 'class="active"'; ?>><a href="<?php echo isset($disciplinas) ? '#' : site_url('index.php/adm/disciplina'); ?>"> Classes  	<span class="fa fa-puzzle-piece pull-right"></span></a></li>
			<li <?php if(isset($aulas))       echo 'class="active"'; ?>><a href="<?php echo isset($aulas) 		? '#' : site_url('index.php/adm/aula'); 		?>"> Aulas 		<span class="fa fa-rocket pull-right"></span></a></li>
			<li <?php if(isset($sobre))       echo 'class="active"'; ?>><a href="<?php echo isset($sobre) 		? '#' : site_url('index.php/adm/sobre'); 		?>"> Sobre 		<span class="fa fa-question pull-right"></span></a></li>
		</ul>
	</div>
</nav>
