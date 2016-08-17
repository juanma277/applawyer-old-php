<?php

 require_once('loader.php');
 include ('Conexion.php');

	
	$id_proceso = $_GET["id_proceso"]; 
	$identificacion = $_GET['identificacion'];
	$gcm_regid = $_GET['gcm_regid']; // GCM Registration ID got from device
	$id_persona = $_GET['id_persona'];
	$fecha = $_GET['fecha'];
	$descripcion = $_GET['descripcion'];
	
	
	if (isset($gcm_regid)) {
		
		$conexion = conexion();
		$sql_consultar="INSERT INTO `historial_proceso` (`ID_HISTORIAL`, `ID_PROCESO`, `DESCRIPCION`, `FECHA`) VALUES (NULL, '".$id_proceso."', '".$descripcion."', '".$fecha."')";
		$resultado_consulta = mysql_query ($sql_consultar,$conexion) or die (mysql_error());
		mysql_close();
		
		$registatoin_ids = array($gcm_regid);
		$message = array("body" => $descripcion);
		$idProcesoA = array("idProceso" => $id_proceso);
		$identificacionA = array("identificacion" => $identificacion);

		$result = send_push_notification($registatoin_ids, $message, $idProcesoA,$identificacionA);
	
		echo $result;
	}
?>
		
