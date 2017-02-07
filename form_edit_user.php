<?php
	session_start();
	if(!isset($_SESSION['id_usu']) && !isset($_SESSION['nom_usu']))
	{
		echo "<h1>USTED NO HA INICIADO SESION</h1>";
		exit();
	}
	include('conexion.php');
?>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/taller_php.js"></script>
<link href="css/font-awesome.css" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="IE=edge">   
<title>Login de acceso</title>
</head>
<body>
	<div class="container">
		<a href="index.php?end=1" class="btn btn-danger">Salir</a>
		<div class="row">
		<div class="col-md-4">
			<h3>Editar usuario</h3>
			<div class="well">
				<?php
					include('sql/conexion.php');

					$id_usu=$_GET['id'];
					$consul=conexion("SELECT * FROM usuarios WHERE usu_id='$id_usu'");
					$dato=mysqli_fetch_row($consul);
				?>
				<form action="edit_user.php?id=<?php echo $id_usu ?>" method="post">
					<label for="">Nuevo nombre de usuario</label>
					<input type="text" name="name_usu" placeholder="<?php echo $dato[1]; ?>" class="form-control">
					<label for="">Nueva clave</label>
					<input type="text" name="clave_usu" class="form-control"><br>
					<input type="submit" class="btn btn-warning" id="btn">
				</form>
			</div>
		</div>
	</div>
	</div>
	<br><br>	
</body>
</html>
