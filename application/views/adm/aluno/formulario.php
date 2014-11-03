<form class="form-horizontal" role="form" id="add-main">
					
	<div class="form-group form-group-sm">
		<label for="aluno_nome" class="col-sm-3 control-label">Nome: </label>
	    <div class="col-sm-9">
	    	<input id="aluno_nome" name="aluno_nome" class="form-control" type="text" value="<?php echo isset($aluno) ? $aluno->nome : set_value('aluno_nome'); ?>">
	    </div>
	</div>

	<div class="form-group form-group-sm">
		<label for="aluno_login" class="col-sm-3 control-label">Login: </label>
	    <div class="col-sm-9">
	    	<input id="aluno_login" name="aluno_login" class="form-control" type="text" value="<?php echo isset($aluno) ? $aluno->login : set_value('aluno_login'); ?>">
	    </div>
	</div>
	
	<div class="form-group form-group-sm">
		<label for="aluno_senha" class="col-sm-3 control-label">Senha: </label>
	    <div class="col-sm-6">
	    	<input id="aluno_senha" name="aluno_senha" class="form-control" type="text" value="<?php echo isset($aluno) ? $aluno->senha : set_value('aluno_senha'); ?>">
	    </div>
	</div>
	
</form>

<?php if(validation_errors() != "") { ?>
	<div class="alert alert-warning alert-dismissible" role="alert">
      <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
      <?php echo validation_errors(); ?>
    </div>
<?php } ?>