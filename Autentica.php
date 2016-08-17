<?php
include ('Conexion.php');

$identificacion = $_POST['identificacion'];
$contrasena = $_POST['contrasena'];
	
	// conexion a la Base de Datos
	$conexion = conexion();
	//inicializamos la session
	session_start();
	//realizamos la consulta SQL
	$sql_consultar = "SELECT * FROM persona WHERE IDENTIFICACION ='".$identificacion."' AND CONTRASENA ='".$contrasena."'";
	$resultado = mysql_query($sql_consultar,$conexion) or die (mysql_error());
	$fila = mysql_fetch_array($resultado);
	//opcion 1: SI EL USUARIO NO EXISTE O LOS DATOS SON INCORRECTOS
	if ($fila['ID_PERSONA'] == NULL){
	header("location:Inicio.php?error=1");
	}
	//opcion 2: USUARIO LOGUEADO CORRECTAMENTE
	else {
		//Definimos las variables de Session y dirigimos a la pagina de Usuario
	$_SESSION['id_usuario'] = $fila['ID_PERSONA'];
	$_SESSION['cedula'] = $fila['IDENTIFICACION'];
	$_SESSION['nombre'] = $fila['NOMBRE1'];
	$_SESSION['nombre2'] =$fila['APELLIDO1'];
	$_SESSION['perfil'] = $fila['ID_PERFIL'];
	$_SESSION['email'] = $fila['EMAIL'];
	$_SESSION['telefono'] = $fila['TELEFONO'];
	$_SESSION['direccion'] = $fila['DIRECCION'];
	$_SESSION['foto'] = $fila['FOTO'];
	$_SESSION['tipo_iden'] = $fila['ID_TIPO_IDEN'];
	$_SESSION['sexo'] = $fila['SEXO'];
	$_SESSION['contrasena'] = $fila['CONTRASENA'];
	$_SESSION['estado'] = $fila['ID_EST_PERSONA'];
	$_SESSION['identificacion'] = $fila['IDENTIFICACION'];
	
	
	header ("location:Administracion.php?opcion=0");
	}
?>