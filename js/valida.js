$(function(){
	$('#form-login').submit(function(){

		var usu = $('#name').val();
		var pass = $('#pass').val();

				$.ajax({
					url:'validation_usu.php',
					data:'name='+usu+'&pass='+pass,
					type:'POST',
					dataType:'HTML',

					beforeSend : function(){
						$('#btn').hide();
						$('#loader').show();
					},

					success : function(res) {
						$('#res').show();
						$('#loader').hide();
						$('#btn').show();
						$('#res').html(res);
					},
		
					error : function(jqXHR, status, error) {
						alert('Disculpe, existió un problema con la conexión a la Base de Datos.');
					}
				});//cierra ajax
	});//cierra form

	$('#form_nuevo').submit(function(){

		var nombre= $('#name_usu').val();
		var clave = $('#clave_usu').val();

				$.ajax({
					url:'v_nuevo_usu.php',
					data:'name=hola&contrasenia='+clave,
					type:'POST',
					dataType:'HTML',

					success : function(res) {
						alert(res);
					},
		
					error : function(jqXHR, status, error) {
					alert('Disculpe, existió un problema con sus credenciales.');
					}
				});//cierra ajax

	});//cierra / nuevo usuario

});//cierra Jquery