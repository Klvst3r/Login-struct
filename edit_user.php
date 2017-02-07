<?php
	$nom_usu=$_POST['name_usu'];
	$clave_usu=$_POST['clave_usu'];

	if(isset($nom_usu) && isset($clave_usu))
	{
		if(!empty($nom_usu) || !empty($clave_usu))
		{
			include('sql/conexion.php');
			$encript=crypt($clave_usu, '$T@lLer#pHp$');

			if($nom_usu != "")
			{
				$id_usu=$_GET['id'];
				$sql1=conexion("UPDATE usuarios SET usu_nombre='$nom_usu' WHERE usu_id='$id_usu'");
				if($sql1)
				{
					echo "El nombre de usuario se ha modificado <br>";
				}else{
					echo "El nombre de usuario no se ha modificado <br>";
				}
			}

			if($clave_usu != "")
			{
				$id_usu=$_GET['id'];
				$encript=crypt($clave_usu, '$T@lLer#pHp$');
				$sql2=conexion("UPDATE usuarios SET usu_clave='$encript' WHERE usu_id='$id_usu'");

				if($sql2)
				{
					echo "El nombre de usuario se ha modificado <br>";
				}else{
					echo "El nombre de usuario no se ha modificado <br>";
				}
			}

		}else{
			echo "Los campos estan vacios";
		}
	}
?>