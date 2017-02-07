<?php
	$nom=$_POST['name'];
	$pass=$_POST['pass'];

	sleep(1);

	if(empty($nom) || empty($pass)){
		echo "<br><div class='alert alert-warning'>Llene los campos para validar.</div>";
		exit();
	}

	include('sql/conexion.php');

	$deco=crypt($pass, '$T@lLer#pHp$'); 

	$consul=conexion("SELECT * FROM usuarios WHERE usu_nombre='$nom'");
	$cont=mysqli_num_rows($consul);

	$consul_active=mysqli_fetch_row($consul);

	if($cont < 1){
		echo "<br><div class='alert alert-danger'>El nombre de usuario no existe en la base de datos.</div>";
		exit();
	}
	//echo "pass Bd: ".$consul_active[2]." - pass usu: ".$deco; 

	if($cont > 0 && $consul_active[3] == 1 && $consul_active[2] == $deco){
	
		//echo "<br><div class='alert alert-success'>El usuario existe y está activo.</div>";
		session_start();
		$_SESSION['id_usu']=$consul_active[0];
		$_SESSION['nom_usu']=$consul_active[1];
		echo "<script>location='panel_usu.php';</script>";
	}else{
		echo "<br><div class='alert alert-danger'>El usuario no existe o esta inactivo.</div>";
	}
?>