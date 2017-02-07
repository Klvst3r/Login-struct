$(function(){
	$('#form_taller').submit(function(){
		var cadena = $('#form_taller').serialize();	

				$.ajax({
					url:'validate.php',
					data: cadena,
					type:'POST',
					dataType:'HTML',

					success : function(res) {
						alert(res);
					},
		
					error : function(jqXHR, status, error) {
					alert('Disculpe, existió un problema');
					}
				});//cierra ajax
	});
});