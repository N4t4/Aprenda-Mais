<script type="text/javascript">
	$(document).ready(function(){

		/**
			Navegação
		**/
		if($("#telas .tela-area-mini a").length > 0){
			$("#telas .tela-area-mini a").eq(0).addClass("selected");
			var content = $("#telas .tela-area-mini a").eq(0).children("div").html();
			$("#tela-area div").html(content);
		}
		function navegacaoEvents() {

			$(".tela-area-mini a").unbind("click").click(function(){
				$("#telas .tela-area-mini a").removeClass("selected");
				var content = $(this).children("div").html();
				$("#tela-area div").html(content);
				$(this).addClass("selected");
			});
		}
		navegacaoEvents();
		/**
			FIM Navegação
		**/

		/**
			Adicionar tela
		**/
		$("#menu-estudio a").click(function () {
			var action = $(this).html();

			if(action == "Adicionar Tela"){

				var data = $("#views #telas-modelo").val();

				$('#modal-adm h4').html('<span class="glyphicon glyphicon-plus"></span> Adicionar Aula');
				$('#modal-adm #btn-no').html('<span class="glyphicon glyphicon-remove-sign"></span> Cancelar');
				$('#modal-adm #btn-yes').html('<span class="glyphicon glyphicon-plus-sign"></span> Adicionar');
				$('#modal-adm #btn-yes').attr("data-loading-text", "Adicionando...");
				$('#modal-adm .modal-body').html(data);

				$("#form-add-tela>a").eq(0).addClass("selected");

				$("#form-add-tela>a").click(function(){
					
					$("#form-add-tela>a").removeClass("selected");
					$(this).addClass("selected");

				});

				$('#modal-adm').modal('show');					

		    	$("#modal-adm .confirm").unbind("click").click(function() {
		    		
					var btn = $(this);
					btn.button('loading');

		    		var content = $("#form-add-tela>a.selected").html();
					$("#telas .tela-area-mini a").removeClass("selected");
					$("#telas .tela-area-mini").append("<a href='#' class='selected'><span>"+($("#telas .tela-area-mini a").length+1)+"</span>"+content+"</a>");

		    		$("#tela-area").html(content);

					btn.button('reset');
					$('#modal-adm .modal-body').html("");
					$('#modal-adm').modal('hide');

					navegacaoEvents();
					$("#count-telas").html($("#telas .tela-area-mini a").length);

				});				
			}

			if (action == "Salvar") {
		 		var url = $(this).attr("url");
		 		var conteudo = $("#telas .tela-area-mini").html();
		 		
	    	   	$.ajax({
					type: "POST", 
					url: url, 
					data: { "aula_conteudo": conteudo }, 
					success: function (data) {

						$("tela-area").html(data);
						
						if(data == "ok"){
						}

					}
				});
			};
		});
		/**
			FIM Adicionar tela
		**/




	});	
</script>
