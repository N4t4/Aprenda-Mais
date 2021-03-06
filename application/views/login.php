<a style="font-size: 32px;" class="navbar-brand" href="<?php echo site_url(); ?>"><span class="ap-logo"></span> <strong style="color: black;">Home</strong></a>
<div class="col-md-12">
	<form action="" method="post">
		<div class="modal-dialog modal-sm" id="box-login">
			<div class="modal-content">
				<div class="modal-header">
					<span class="ap-logo"></span>
				</div>
			  	<div class="modal-body">
					<div class="form-group">
						<label for="login">Nome do Usuário</label>
						<input type="text" name="login" id="login" class="form-control input-lg" placeholder="usuário" value="<?php echo set_value('login'); ?>">
					</div>
					<div class="senha">
						<label for="inputPassword">Senha</label>
						<input type="password" name="senha"  id="senha" class="form-control input-lg" placeholder="senha">
					</div>
			  	</div>
			  	<div id="error-text">
					<?php if(validation_errors() != "") { ?>
						<div class="alert alert-danger alert-dismissible" role="alert">
					      <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
					      <?php echo validation_errors(); ?>
					    </div>
					<?php } ?>
					<?php if(isset($erros)){ ?>
						<div class="alert alert-danger alert-dismissible" role="alert">
					      <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
					      <?php echo $erros; ?>
					    </div>
					<?php } ?>
				</div>	
			  	<div class="modal-footer">
			    	<button data-loading-text="Autenticando..." type="submit" class="btn btn-primary btn-lg">Entrar <span class="glyphicon glyphicon-log-in"></span></button>
			  	</div>
			</div>
		</div>
	</form>
</div>	