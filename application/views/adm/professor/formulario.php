<form class="form-horizontal" role="form" id="add-main">
					
	<div class="form-group form-group-sm">
		<label for="professor_nome" class="col-sm-3 control-label">Nome: </label>
	    <div class="col-sm-9">
	    	<input id="professor_nome" name="professor_nome" class="form-control" type="text" value="<?php echo isset($professor) ? $professor->nome : set_value('professor_nome'); ?>">
	    </div>
	</div>

	<div class="form-group form-group-sm">
		<label for="professor_email" class="col-sm-3 control-label">E-mail: </label>
	    <div class="col-sm-9">
	    	<input id="professor_email" name="professor_email" class="form-control" type="email" value="<?php echo isset($professor) ? $professor->email : set_value('professor_email'); ?>">
	    </div>
	</div>

	<div class="form-group form-group-sm">
		<label for="professor_senha" class="col-sm-3 control-label">Senha: </label>
	    <div class="col-sm-6">
	    	<input id="professor_senha" name="professor_senha" class="form-control" type="text" value="<?php echo isset($professor) ? $professor->senha : set_value('professor_senha'); ?>">
	    </div>
	</div>
	
</form>

<?php if(validation_errors() != "") { ?>
	<div class="alert alert-warning alert-dismissible" role="alert">
      <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
      <?php echo validation_errors(); ?>
    </div>
<?php } ?>