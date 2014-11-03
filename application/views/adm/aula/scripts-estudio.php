<script type="text/javascript">
	$(document).ready(function(){

		/**
			Navegação
		**/
		
		$("#tela-area-mini a").eq(0).addClass("selected");
		var content = $("#tela-area-mini a").eq(0).children("div").html();
		$("#tela-area div").html(content);

		$("#tela-area-mini a").click(function(){
			$("#tela-area-mini a").removeClass("selected");
			var content = $(this).children("div").html();
			$("#tela-area div").html(content);
			$(this).addClass("selected");
		});



		/**
			FIM Navegação
		**/


	});	
</script>
