<?php
	$nom_usu=$_POST['name_usu'];
	$clave_usu=$_POST['clave_usu'];
	//echo $nom_usu."<br>".$clave_usu;

	if(isset($nom_usu) && isset($clave_usu))
	{
		if(!empty($nom_usu) && !empty($clave_usu))
		{
			include('sql/conexion.php');
			$encript=crypt($clave_usu, '$T@lLer#pHp$');
			$sql=conexion("INSERT INTO usuarios (usu_nombre, usu_clave, usu_activo) VALUES ('$nom_usu','$encript',1)");

			if($sql)
			{
				echo "<h2>El usuario se creo correctamente.</h2>";
			}else{
				echo "<h2>El usuario no se creo correctamente.</h2> ".mysqli_error();
			}
		}else{
			echo "Los campos estan vacios";
		}
	}
?>