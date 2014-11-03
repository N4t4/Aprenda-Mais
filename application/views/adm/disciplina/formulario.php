<form class="form-horizontal" role="form" id="add-main">
					
	<div class="form-group form-group-sm">
		<label for="disciplina_nome" class="col-sm-3 control-label">Nome: </label>
	    <div class="col-sm-9">
	    	<input id="disciplina_nome" name="aluno_nome" class="form-control" type="text" value="<?php echo isset($disciplina) ? $disciplina->nome : set_value('disciplina_nome'); ?>">
	    </div>
	</div>

	<div class="form-group form-group-sm">
		<label for="disciplina_descricao" class="col-sm-3 control-label">Descrição: </label>
	    <div class="col-sm-9">
	    	<textarea id="disciplina_descricao" name="disciplina_descricao" class="form-control" rows="10"><?php echo isset($disciplina) ? $disciplina->descricao : set_value('disciplina_descricao'); ?></textarea>
	    </div>
	</div>
	
</form>

<?php if(validation_errors() != "") { ?>
	<div class="alert alert-warning alert-dismissible" role="alert">
      <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
      <?php echo validation_errors(); ?>
    </div>
<?php } ?>