<?php

define("servidor","localhost"); 
define("usuario","dev"); 
define("clave","desarrollo"); 
define("basededatos","login-struct"); 

function conexion($sql) {
	$link_exterior=mysqli_connect(servidor, usuario, clave);
	if ( ! mysqli_select_db($link_exterior, basededatos) ) {
		echo ("Error al seleccionar la base de datos.");
		return false;
	}
	if ( ! $consulta = mysqli_query($link_exterior, $sql) ) {
		echo ("Error de sintaxis en la consulta.");
		return false;
	}
	return $consulta;
}
?>
