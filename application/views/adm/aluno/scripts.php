<script type="text/javascript">
	$(document).ready(function(){
	
		$('#show-add-aluno').click(function(){
			var url = $(this).attr("url"); 

		   	$.ajax({
				type: "POST", 
				url: url, 
				data: {	}, 
				success: function (data) {
					$('#modal-adm h4').html('<span class="glyphicon glyphicon-plus"></span> Adicionar Aluno');
					$('#modal-adm #btn-no').html('<span class="glyphicon glyphicon-remove-sign"></span> Cancelar');
					$('#modal-adm #btn-yes').html('<span class="glyphicon glyphicon-plus-sign"></span> Adicionar');
					$('#modal-adm #btn-yes').attr("data-loading-text", "Adicionando...");
					$('#modal-adm .modal-body').html(data);
					$('#modal-adm').modal('show');					
		
			    	$("#modal-adm .confirm").unbind("click").click(function() {
						
						var btn = $(this);
						btn.button('loading');

			    		var nome   = $("#aluno_nome").val();
			    		var login  = $("#aluno_login").val();
			    		var senha  = $("#aluno_senha").val();

			    	   	$.ajax({
							type: "POST", 
							url: url, 
							data: {
								"aluno_nome" : nome,
								"aluno_login": login,
								"aluno_senha": senha
							}, 
							success: function (data) {

								if(data.search("alert") == -1){
									$('#modal-adm').modal('hide');
									window.location.reload();
								} else {
									btn.button('reset');
									$('#modal-adm .modal-body').html(data);
								}
							}
						});	
					});
				}
			});	
	    });

		$('.btn-editar').click(function(){
			var url = $(this).attr("url"); 

		   	$.ajax({
				type: "POST", 
				url: url, 
				data: {	}, 
				success: function (data) {
					$('#modal-adm h4').html('<span class="glyphicon glyphicon-pencil"></span> Editar Aluno');
					$('#modal-adm #btn-no').html('<span class="glyphicon glyphicon-floppy-remove"></span> Cancelar');
					$('#modal-adm #btn-yes').html('<span class="glyphicon glyphicon-floppy-saved"></span> Salvar');
					$('#modal-adm #btn-yes').attr("data-loading-text", 'Salvando...');
					$('#modal-adm .modal-body').html(data);
					$('#modal-adm').modal('show');	

			    	$("#modal-adm .confirm").unbind("click").click(function() {
						
						var btn = $(this);
						btn.button('loading');

			    		var nome   = $("#aluno_nome").val();
			    		var login  = $("#aluno_login").val();
			    		var senha  = $("#aluno_senha").val();

			    	   	$.ajax({
							type: "POST", 
							url: url, 
							data: {
								"aluno_nome" : nome,
								"aluno_login": login,
								"aluno_senha": senha
							}, 
							success: function (data) {

								if(data.search("alert") == -1){
									$('#modal-adm').modal('hide');
									window.location.reload();
								} else {
									btn.button('reset');
									$('#modal-adm .modal-body').html(data);
								}
							}
						});
					});				
				}
			});	
		});

		$('.btn-excluir').click(function(){
			
			var url = $(this).attr("url"); 

			$('#modal-adm h4').html('<span class="glyphicon glyphicon-trash"></span> Excluir Professor');
			$('#modal-adm #btn-no').html('<span class="glyphicon glyphicon-remove-sign"></span> Cancelar');
			$('#modal-adm #btn-yes').html('<span class="glyphicon glyphicon-plus-sign"></span> Confirmar');
			$('#modal-adm #btn-yes').attr("data-loading-text", 'Salvando...');
			$('#modal-adm #btn-yes').removeClass('btn-primary');
			$('#modal-adm #btn-yes').addClass('btn-danger');
			$('#modal-adm .modal-body').html("Deseja remover este aluno dos registros?");
			$('#modal-adm').modal('show');	

			$('#modal-adm .modal-dialog').addClass('modal-sm');

			$("#modal-adm .confirm").unbind("click").click(function() {
						
				var btn = $(this);
				btn.button('loading');

				$("#modal-edit-user .confirm").button('loading');

	    	   	$.ajax({ type: "POST", url: url, data: { }, 
					success: function (data) {

						if(data == "ok"){
							$('#modal-adm').modal('hide');
							window.location.reload();
						} else {
							btn.button('reset');
							$('#modal-adm .modal-body').html(data);
						}
					}
				});
			});	

			$("#modal-adm").on("hidden.bs.modal", function(){
				$('#modal-adm .modal-dialog').removeClass('modal-sm');
				$('#modal-adm #btn-yes').removeClass('btn-danger');
				$('#modal-adm #btn-yes').addClass('btn-primary');
			});
		});
	});	
</script>
