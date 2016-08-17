<?php

//INCLUIMOS ARCHIVOS NECESARIOS

include("Conexion.php");

//RECIBIMOS DATOS DEL FORMULARIO

$nombres = $_POST['nombres'];
$apellidos = $_POST['apellidos'];
$Telefono = $_POST['Telefono'];
$Email = $_POST['Email'];
$Direccion = $_POST['Direccion'];

// REALIZAMOS LA CONEXION A LA BD
$conexion = conexion();
			
//REALIZAMOS EL INSERT DEL CLIENTE EN LA BD
$sql_consultar="INSERT INTO `persona_web` (`ID_PERSONA_WEB`, `NOMBRE`, `APELLIDO`, `TELEFONO`, `EMAIL`, `DIRECCION`) VALUES (NULL, '".$nombres."', '".$apellidos."', '".$Telefono."', '".$Email."', '".$Direccion."');";
$resultado_consulta = mysql_query ($sql_consultar,$conexion) or die (mysql_error());	
mysql_close();
header ("location:Inicio.php?error=4");
?>