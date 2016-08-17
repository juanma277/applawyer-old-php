<?php

// conexion a la base de datos
function conexion(){
	$conexion = mysql_connect ("localhost","root","") or die ("No se pudo conectar". mysql_error());
	mysql_select_db("bd_applawyer",$conexion) or die ("ERROR CON LA BASE DE DATOS". mysql_error());
	return $conexion;
	}
	
?>