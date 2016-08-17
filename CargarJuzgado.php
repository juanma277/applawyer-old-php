<?php
include("Conexion.php");

$ciudadSe = $_POST['tipociudad'];

$sql_consultar = "SELECT * FROM `juzgado` WHERE ID_CIUDAD = ".$ciudadSe;
$conexion = conexion();
$resultado_consulta = mysql_query ($sql_consultar,$conexion) or die (mysql_error());

while ($fila = mysql_fetch_array($resultado_consulta))
	{
echo "<option value=\"".$fila['ID_JUZGADO']."\">".utf8_encode($fila['NOM_JUZGADO'])."</option>";
	}
mysql_close();



?>