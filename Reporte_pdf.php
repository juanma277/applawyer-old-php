<?php

		require_once("dompdf/dompdf_config.inc.php");
		include ("Conexion.php");
		$opcion = $_GET['opcion'];

switch ($opcion) 
{
	
case 1:

$codigoHTML='
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>.: Historial de Proceso</title>
</head>
<body>
<table width="100%" border="1" cellspacing="0" cellpadding="0">
  <tr>
    <td colspan="6"><CENTER><strong>REPORTE: HISTORIAL DE PROCESO</strong></CENTER></td>
  </tr>
  <tr>
    <td><strong>Radicado</strong></td>
    <td><strong>Tipo Proceso</strong></td>
    <td><strong>Demandante</strong></td>
    <td><strong>Demandado</strong></td>
    <td><strong>Descripcion Actuacion</strong></td>
    <td><strong>Fecha Auto</strong></td>
  </tr>';
  

//RECIBIMOS PARAMETROS

$id_procesoE = $_POST['id_proceso'];
//SE REALIZA CONEXION PARA CONSULTAR EL HISTORY DE UN PROCESO


$conexion3 = conexion();
$sql_consultar3="SELECT RADICADO, tipo_proceso.NOM_TIPO_PROCESO, DTE, DDO FROM proceso, tipo_proceso WHERE tipo_proceso.ID_TIPO_PROCESO = proceso.ID_TIPO_PROCESO AND ID_PROCESO='".$id_procesoE."'";
$resultado_consulta3 = mysql_query ($sql_consultar3,$conexion3) or die (mysql_error());	
$fila3 = mysql_fetch_array($resultado_consulta3);
$RADICADO = $fila3['RADICADO'];
$NOM_TIPO_PROCESO = $fila3['NOM_TIPO_PROCESO'];
$DTE = $fila3['DTE'];
$DDO = $fila3['DDO'];
mysql_close();

//////////////////////////////////////////////////////////////////

$conexion5 = conexion();
$sql_consultar5="SELECT * FROM historial_proceso WHERE ID_PROCESO='".$id_procesoE."' ORDER BY  FECHA DESC";
$resultado_consulta5 = mysql_query ($sql_consultar5,$conexion5) or die (mysql_error());		

while ($fila5 = mysql_fetch_array($resultado_consulta5))
			   		{
				
$ID_PROCESO = $fila5['ID_PROCESO'];
$codigoHTML.='	
	<tr>
		<td>'.$RADICADO.'</td>
		<td>'.$NOM_TIPO_PROCESO.'</td>
		<td>'.$DTE.'</td>
		<td>'.$DDO.'</td>
		<td>'.$fila5['DESCRIPCION'].'</td>
		<td>'.$fila5['FECHA'].'</td>										
	</tr>';
	
}
$codigoHTML.='
</table>
</body>
</html>';
$codigoHTML=utf8_encode($codigoHTML);
$dompdf=new DOMPDF();
$dompdf->load_html($codigoHTML);
ini_set("memory_limit","128M");
$dompdf->render();
$dompdf->stream("HistorialProceso.pdf");		

break;

case 2:

$codigoHTML='
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>.: Historial de Proceso</title>
</head>
<body>
<table width="100%" border="1" cellspacing="0" cellpadding="0">
  <tr>
    <td colspan="6"><CENTER><strong>REPORTE: PROCESOS ACTIVOS</strong></CENTER></td>
  </tr>
  <tr>
    <td><strong>Tipo Proceso</strong></td>
    <td><strong>Radicado</strong></td>
    <td><strong>Demandante</strong></td>
    <td><strong>Demandado</strong></td>
    <td><strong>Juzgado</strong></td>
    <td><strong>Estado</strong></td>
  </tr>';
  

//RECIBIMOS PARAMETROS

$id_persona3 = $_GET['id_persona3'];
//SE REALIZA CONEXION PARA CONSULTAR EL HISTORY DE UN PROCESO
//////////////////////////////////////////////////////////////////

$conexion5 = conexion();
$sql_consultar5="SELECT tipo_proceso.NOM_TIPO_PROCESO AS TIPO_PROCESO, RADICADO, DTE,DDO, estado_persona.NOM_ESTA_PERSO AS ESTADO, juzgado.NOM_JUZGADO FROM proceso,tipo_proceso,estado_persona,juzgado WHERE tipo_proceso.ID_TIPO_PROCESO = proceso.ID_TIPO_PROCESO AND estado_persona.ID_ESTADO_PERSONA = proceso.ID_ESTAD AND juzgado.ID_JUZGADO = proceso.ID_JUZGADO AND ID_ESTAD = 1 AND ID_PERSONA = '".$id_persona3."' ORDER BY RADICADO";
$resultado_consulta5 = mysql_query ($sql_consultar5,$conexion5) or die (mysql_error());		

while ($fila5 = mysql_fetch_array($resultado_consulta5))
			   		{
				
$codigoHTML.='	
	<tr>
		<td>'.$fila5['TIPO_PROCESO'].'</td>
		<td>'.$fila5['RADICADO'].'</td>
		<td>'.$fila5['DTE'].'</td>
		<td>'.$fila5['DDO'].'</td>
		<td>'.$fila5['NOM_JUZGADO'].'</td>
		<td>'.$fila5['ESTADO'].'</td>										
	</tr>';
	
}
$codigoHTML.='
</table>
</body>
</html>';
$codigoHTML=utf8_encode($codigoHTML);
$dompdf=new DOMPDF();
$dompdf->load_html($codigoHTML);
ini_set("memory_limit","128M");
$dompdf->render();
$dompdf->stream("ProcesosActivos.pdf");

break;


case 3:

$codigoHTML='
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>.: Historial de Proceso</title>
</head>
<body>
<table width="100%" border="1" cellspacing="0" cellpadding="0">
  <tr>
    <td colspan="6"><CENTER><strong>REPORTE: PROCESOS INACTIVOS</strong></CENTER></td>
  </tr>
  <tr>
    <td><strong>Tipo Proceso</strong></td>
    <td><strong>Radicado</strong></td>
    <td><strong>Demandante</strong></td>
    <td><strong>Demandado</strong></td>
    <td><strong>Juzgado</strong></td>
    <td><strong>Estado</strong></td>
  </tr>';
  

//RECIBIMOS PARAMETROS

$id_persona3 = $_GET['id_persona3'];
//SE REALIZA CONEXION PARA CONSULTAR EL HISTORY DE UN PROCESO
//////////////////////////////////////////////////////////////////

$conexion5 = conexion();
$sql_consultar5="SELECT tipo_proceso.NOM_TIPO_PROCESO AS TIPO_PROCESO, RADICADO, DTE,DDO, estado_persona.NOM_ESTA_PERSO AS ESTADO, juzgado.NOM_JUZGADO FROM proceso,tipo_proceso,estado_persona,juzgado WHERE tipo_proceso.ID_TIPO_PROCESO = proceso.ID_TIPO_PROCESO AND estado_persona.ID_ESTADO_PERSONA = proceso.ID_ESTAD AND juzgado.ID_JUZGADO = proceso.ID_JUZGADO AND ID_ESTAD = 2 AND ID_PERSONA = '".$id_persona3."' ORDER BY RADICADO";
$resultado_consulta5 = mysql_query ($sql_consultar5,$conexion5) or die (mysql_error());		

while ($fila5 = mysql_fetch_array($resultado_consulta5))
			   		{
				
$codigoHTML.='	
	<tr>
		<td>'.$fila5['TIPO_PROCESO'].'</td>
		<td>'.$fila5['RADICADO'].'</td>
		<td>'.$fila5['DTE'].'</td>
		<td>'.$fila5['DDO'].'</td>
		<td>'.$fila5['NOM_JUZGADO'].'</td>
		<td>'.$fila5['ESTADO'].'</td>										
	</tr>';
	
}
$codigoHTML.='
</table>
</body>
</html>';
$codigoHTML=utf8_encode($codigoHTML);
$dompdf=new DOMPDF();
$dompdf->load_html($codigoHTML);
ini_set("memory_limit","128M");
$dompdf->render();
$dompdf->stream("ProcesosInactivos.pdf");

break;

}

?>						
	
