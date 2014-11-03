<form class="form-horizontal" role="form" id="add-main">
					
	<div class="form-group form-group-sm">
		<label for="aula_titulo" class="col-sm-3 control-label">Título: </label>
	    <div class="col-sm-9">
	    	<input id="aula_titulo" name="aula_titulo" class="form-control" type="text" value="<?php echo isset($aula) ? $aula->titulo : set_value('aula_titulo'); ?>">
	    </div>
	</div>

	<div class="form-group form-group-sm">
		<label for="aula_descricao" class="col-sm-3 control-label">Descrição: </label>
	    <div class="col-sm-9">
	    	<textarea id="aula_descricao" name="aula_descricao" class="form-control"><?php echo isset($aula) ? $aula->descricao : set_value('aula_descricao'); ?></textarea>
	    </div>
	</div>
	
	<div class="form-group form-group-sm">
		<label for="aula_disciplina" class="col-sm-3 control-label">Disciplina: </label>
	    <div class="col-sm-6">
	    	<select id="aula_disciplina" name="aula_disciplina" class="form-control">
	    		<?php foreach ($disciplinas as $disciplina) { ?>
		    		<option value="<?php echo $disciplina->codigo; ?>" <?php if($aula->codigo_disciplina == $disciplina->codigo) echo "selected"; ?>><?php echo $disciplina->nome; ?></option>
	    		<?php } ?>
	    	</select>		
	    </div>
	</div>
	
</form>

<?php if(validation_errors() != "") { ?>
	<div class="alert alert-warning alert-dismissible" role="alert">
      <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
      <?php echo validation_errors(); ?>
    </div>
<?php } ?>