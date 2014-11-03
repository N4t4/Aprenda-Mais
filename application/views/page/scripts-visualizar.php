<script type="text/javascript">
	$(document).ready(function(){

		$("#source>a>div").each(function(index){
			$('.carousel-inner').append('<div class="item">'+$(this).html()+'</div>');
		});

		$(".modal-footer p").html("Tela 0  de "+$("#source>a>div").length+" telas.");

		$("#show-modal-aula").click(function(){
			$('#modal-assistir-aula').modal('show');
		});
		
	});	
</script>
