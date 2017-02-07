<?php
	session_start();
	if(isset($_GET['end']))
	{
		if($_GET['end'] == 1)
		{
			session_destroy();
			echo "<div class='alert alert-success'>La sesion ha finalizado correctamente.</div>";
		}
	}
?>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/valida.js"></script>
<link href="css/font-awesome.css" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="IE=edge">   
<title>login de acceso</title>
</head>
<body>
<div class="container">
	<div class="row">
		<div class="col-md-4">
			<h1>Login de acceso</h1>
			<div class="well">
				<form action="JavaScript:void(0);" method="post" id="form-login">
					<label for="">Usuario</label>
					<input type="text" id="name" class="form-control">
					<label for="">Clave</label>
					<input type="password" id="pass" class="form-control"><br>
					<img src="img/loader.gif" alt="" style="display: none;" id="loader">
					<input type="submit" class="btn btn-primary" id="btn">
					<div id="res" style="display: none;"></div>
				</form>
			</div>
		</div>
	</div>
</div>
</body>
</html>