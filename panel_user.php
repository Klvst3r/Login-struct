<?php
	session_start();
	if(!isset($_SESSION['id_usu']) && !isset($_SESSION['nom_usu']))
	{
		echo "<h1>USTED NO HA INICIADO SESION</h1>";
		exit();
	}
	include('sql/conexion.php');
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
			<h3>Crear nuevo usuario</h3>
			<div class="well">
				<form action="v_nuevo_usu.php" method="post">
					<label for="">Nombre de usuario</label>
					<input type="text" name="name_usu" class="form-control">
					<label for="">Clave</label>
					<input type="text" name="clave_usu" class="form-control"><br>
					<input type="submit" class="btn btn-warning" id="btn">
				</form>
			</div>
		</div>
	</div>
	<div class="row">
		<h2>Editar Usuarios</h2>
		<div class="col-md-4">
			<table class="table table-bordered">
				<tr>
					<td>Id</td>
					<td>Nombre de usuario</td>
					<td>Opciones</td>
				</tr>
				<?php
					$consul=conexion("SELECT * FROM usuarios ORDER BY usu_id ASC");
					while($dato_usu=mysqli_fetch_array($consul))
					{
				?>
					<tr>
						<td><?php echo $dato_usu[0]; ?></td>
						<td><?php echo $dato_usu[1]; ?></td>
						<td> <a href="edit_usu.php?id=<?php echo $dato_usu[0]; ?>">Editar</a> - <a href="delete_usu.php?id=<?php echo $dato_usu[0]; ?>">Eliminar</a></td>
					</tr>
				<?php
					}
				?>
			</table>
		</div>
	</div>
	</div>
	<br><br>	
</body>
</html>
