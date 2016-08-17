<?php

include ('Conexion.php');
$opcion = $_GET['opcion'];
session_start();

if (isset ($_SESSION['perfil']))
		{
			$perfil = $_SESSION['perfil'];
			$nombre=$_SESSION['nombre'];
			$apellido=$_SESSION['nombre2']; 
			
		} else 
		
		{
			header("location:Inicio.php?error=3");
		}



switch ($opcion)
	{
			case 1:
			//ACTUALIZACION DEL ESTADO EN LA TABLA PERSONA A ESTADO ACTIVO

			
			//RECIBIMOS EL ID DE PERSONA POR EL METODO GET
			$ID_PERSONA = $_GET['id_persona'];
			
			$conexion = conexion();
			$sql_consultar="UPDATE `persona` SET `ID_EST_PERSONA` = '1' WHERE `persona`.`ID_PERSONA` =".$ID_PERSONA;
			$resultado_consulta = mysql_query ($sql_consultar,$conexion) or die (mysql_error());
			mysql_close();
			header ("location:Administracion.php?error=1&opcion=0"); 
				
			break;
			
			case 2:
			//ACTUALIZACION DEL ESTADO EN LA TABLA PERSONA A ESTADO INACTIVO

			
			//RECIBIMOS EL ID DE PERSONA POR EL METODO GET
			$ID_PERSONA = $_GET['id_persona'];
			
			$conexion = conexion();
			$sql_consultar="UPDATE `persona` SET `ID_EST_PERSONA` = '2' WHERE `persona`.`ID_PERSONA` =".$ID_PERSONA;
			$resultado_consulta = mysql_query ($sql_consultar,$conexion) or die (mysql_error());
			mysql_close();
			header ("location:Administracion.php?error=1&opcion=0"); 
				
			break;
			
			case 3:
			
			if ($_POST['table_records'] == NULL)
				header ("location:Administracion.php?opcion=0");
			
			// CAMBIAR EL ESTADO A ACTIVO A VARIOS CLIENTES
			for ($i=0; $i<count($_POST['table_records']);$i++) {
				
				$ID_PERSONA = $_POST['table_records'][$i];
				$conexion = conexion();
				$sql_consultar="UPDATE `persona` SET `ID_EST_PERSONA` = '1' WHERE `persona`.`ID_PERSONA` =".$ID_PERSONA;
				$resultado_consulta = mysql_query ($sql_consultar,$conexion) or die (mysql_error());
				mysql_close();
				header ("location:Administracion.php?error=1&opcion=0"); 
				
			}
			
			break;
			
			case 4:
			if ($_POST['table_records'] == NULL)
				header ("location:Administracion.php?opcion=0");
			
			// CAMBIAR EL ESTADO A INACTIVO A VARIOS CLIENTES
			for ($i=0; $i<count($_POST['table_records']);$i++) {
				
				$ID_PERSONA = $_POST['table_records'][$i];
				$conexion = conexion();
				$sql_consultar="UPDATE `persona` SET `ID_EST_PERSONA` = '2' WHERE `persona`.`ID_PERSONA` =".$ID_PERSONA;
				$resultado_consulta = mysql_query ($sql_consultar,$conexion) or die (mysql_error());
				mysql_close();
				header ("location:Administracion.php?error=1&opcion=0"); 
				
			}
			
			break;
			
			case 5:
			
				//RECIBIMOS EL ID DE PROCESO POR EL METODO GET
				$ID_PROCESO = $_GET['id_proceso'];
				
				$conexion = conexion();
				$sql_consultar="UPDATE `proceso` SET `ID_ESTAD` = '1' WHERE `proceso`.`ID_PROCESO` =".$ID_PROCESO;
				$resultado_consulta = mysql_query ($sql_consultar,$conexion) or die (mysql_error());
				mysql_close();
				header ("location:Administracion.php?error=1&opcion=0"); 
			
			break;
			
			case 6:
			
				//RECIBIMOS EL ID DE PROCESO POR EL METODO GET
				$ID_PROCESO = $_GET['id_proceso'];
				
				$conexion = conexion();
				$sql_consultar="UPDATE `proceso` SET `ID_ESTAD` = '2' WHERE `proceso`.`ID_PROCESO` =".$ID_PROCESO;
				$resultado_consulta = mysql_query ($sql_consultar,$conexion) or die (mysql_error());
				mysql_close();
				header ("location:Administracion.php?error=1&opcion=0"); 
			
			break;
			
			case 7:
			if ($_POST['table_records'] == NULL)
				header ("location:Administracion.php?opcion=0");
			// CAMBIAR EL ESTADO A INACTIVO A VARIOS CLIENTES
			for ($i=0; $i<count($_POST['table_records']);$i++) {
				
				$ID_PROCESO = $_POST['table_records'][$i];
				$conexion = conexion();
				$sql_consultar="UPDATE `proceso` SET `ID_ESTAD` = '1' WHERE `proceso`.`ID_PROCESO` =".$ID_PROCESO;
				$resultado_consulta = mysql_query ($sql_consultar,$conexion) or die (mysql_error());
				mysql_close();
				header ("location:Administracion.php?error=1&opcion=0"); 
				
			}
			
			break;
			
			case 8:
			if ($_POST['table_records'] == NULL)
				header ("location:Administracion.php?opcion=0");
			
			// CAMBIAR EL ESTADO A INACTIVO A VARIOS CLIENTES
			for ($i=0; $i<count($_POST['table_records']);$i++) {
				
				$ID_PROCESO = $_POST['table_records'][$i];
				$conexion = conexion();
				$sql_consultar="UPDATE `proceso` SET `ID_ESTAD` = '2' WHERE `proceso`.`ID_PROCESO` =".$ID_PROCESO;
				$resultado_consulta = mysql_query ($sql_consultar,$conexion) or die (mysql_error());
				mysql_close();
				header ("location:Administracion.php?error=1&opcion=0"); 
				
			}
			
			break;
			
			case 9:
			echo "Cambiar Imagen";
			break;
			
			case 10:
			//RECIBIMOS LOS DATOS
			
			$nombre = $_POST['Nombres'];
			$apellido = $_POST['Apellidos'];
			$tipo_iden = $_POST['Tipo_iden'];
			$identificacion = $_POST['Identificacion'];
			$telefono = $_POST['Telefono'];
			$email = $_POST['Email'];
			$direccion = $_POST['Direccion'];
			$genero = $_POST['Sexo'];
			$contrasena = $_POST['Contrasena'];
			$contrasena2 = $_POST['Contrasena2'];
			$id_persona = $_POST['id_persona'];
			
			 
			if($contrasena == NULL || $contrasena2== NULL) 
					
					{		
						$conexion = conexion();
						$sql_consultar="UPDATE `persona` SET `NOMBRE1` = '".$nombre."', `APELLIDO1` = '".$apellido."', `ID_TIPO_IDEN` = '".$tipo_iden."', `IDENTIFICACION` = '".$identificacion."', `TELEFONO` = '".$telefono."', `EMAIL` = '".$email."', `DIRECCION` = '".$direccion."', `SEXO` = '".$genero."' WHERE `persona`.`ID_PERSONA` = ".$id_persona;
						$resultado_consulta = mysql_query ($sql_consultar,$conexion) or die (mysql_error());
						mysql_close();
						header ("location:Administracion.php?error=2&opcion=0"); 
					}
					
					else 
						{
						
						if ($contrasena == $contrasena2)
							
							{		
								$conexion = conexion();
								$sql_consultar="UPDATE `persona` SET `NOMBRE1` = '".$nombre."', `APELLIDO1` = '".$apellido."', `ID_TIPO_IDEN` = '".$tipo_iden."', `IDENTIFICACION` = '".$identificacion."', `TELEFONO` = '".$telefono."', `EMAIL` = '".$email."', `DIRECCION` = '".$direccion."', `SEXO` = '".$genero."', `CONTRASENA` = '".md5($contrasena)."' WHERE `persona`.`ID_PERSONA` = ".$id_persona;
								$resultado_consulta = mysql_query ($sql_consultar,$conexion) or die (mysql_error());
								mysql_close();
								header ("location:Administracion.php?error=2&opcion=0"); 
							}
								else 
									{
										mysql_close();
										header ("location:Administracion.php?error=3&opcion=2");
									}
							
								
						}
			
			
			break;
			
			
			case 11:
			
			//RECIBIMOS LA IDENTIFICACION A CONSULTAR
			
			$Iden_Clie = $_POST['Iden_Clie'];
			
			// CONSULTAMOS LA IDENTIFICACION
			
			// conexion a la Base de Datos
				$conexion = conexion();
				//realizamos la consulta SQL
				$sql_consultar = "SELECT * FROM persona WHERE IDENTIFICACION ='".$Iden_Clie."' AND ID_PERFIL = 4";
				$resultado = mysql_query($sql_consultar,$conexion) or die (mysql_error());
				$fila = mysql_fetch_array($resultado);
				
				if ($fila['ID_PERSONA'] == NULL) 
						{
							mysql_close();
						header ("location:Administracion.php?error=4&opcion=3&result=0");
						}
						
						else
							{
								mysql_close();
	header ("location:Administracion.php?opcion=3&result=1&id_persona=".$fila['ID_PERSONA']);
							}
							
						
			break;
			
			
			case 12:
			
			//RECIBIMOS LOS DATOS
			
			$nombre = $_POST['Nombres'];
			$apellido = $_POST['Apellidos'];
			$tipo_iden = $_POST['Tipo_iden'];
			$identificacion = $_POST['Identificacion'];
			$telefono = $_POST['Telefono'];
			$email = $_POST['Email'];
			$direccion = $_POST['Direccion'];
			$genero = $_POST['Sexo'];
			$contrasena = $_POST['Contrasena'];
			$contrasena2 = $_POST['Contrasena2'];
			$id_persona = $_POST['id_persona'];
			 
			if($contrasena == NULL || $contrasena2== NULL) 
					
					{		
						$conexion = conexion();
						$sql_consultar="UPDATE `persona` SET `NOMBRE1` = '".$nombre."', `APELLIDO1` = '".$apellido."', `ID_TIPO_IDEN` = '".$tipo_iden."', `IDENTIFICACION` = '".$identificacion."', `TELEFONO` = '".$telefono."', `EMAIL` = '".$email."', `DIRECCION` = '".$direccion."', `SEXO` = '".$genero."' WHERE `persona`.`ID_PERSONA` = ".$id_persona;
						$resultado_consulta = mysql_query ($sql_consultar,$conexion) or die (mysql_error());
						mysql_close();
						header ("location:Administracion.php?error=2&opcion=3&result=0"); 
					}
					
					else 
						{
						
						if ($contrasena == $contrasena2)
							
							{		
								$conexion = conexion();
								$sql_consultar="UPDATE `persona` SET `NOMBRE1` = '".$nombre."', `APELLIDO1` = '".$apellido."', `ID_TIPO_IDEN` = '".$tipo_iden."', `IDENTIFICACION` = '".$identificacion."', `TELEFONO` = '".$telefono."', `EMAIL` = '".$email."', `DIRECCION` = '".$direccion."', `SEXO` = '".$genero."', `CONTRASENA` = '".md5($contrasena)."' WHERE `persona`.`ID_PERSONA` = ".$id_persona;
								$resultado_consulta = mysql_query ($sql_consultar,$conexion) or die (mysql_error());
								mysql_close();
								header ("location:Administracion.php?error=2&opcion=3&result=0"); 
							}
								else 
									{
										mysql_close();
										header ("location:Administracion.php?error=3&opcion=3");
									}
							
								
						}
			
			break;
			
			
			case 13:
			
			//RECIBIMOS LA IDENTIFICACION A CONSULTAR
			
			$Iden_Clie = $_POST['Iden_Clie'];
			
			// CONSULTAMOS LA IDENTIFICACION
			
			// conexion a la Base de Datos
				$conexion = conexion();
				//realizamos la consulta SQL
				$sql_consultar = "SELECT * FROM persona WHERE IDENTIFICACION ='".$Iden_Clie."' AND ID_PERFIL = 4";
				$resultado = mysql_query($sql_consultar,$conexion) or die (mysql_error());
				$fila = mysql_fetch_array($resultado);
				
				if ($fila['ID_PERSONA'] == NULL) 
						{
							mysql_close();
						header ("location:Administracion.php?error=4&opcion=5&result=0");
						}
						
						else
							{
								mysql_close();
							header ("location:Administracion.php?opcion=5&result=1&id_persona=".$fila['ID_PERSONA']);
							}
			
			break;
			
			
			case 14:
			
			//RECIBIMOS LA IDENTIFICACION A CONSULTAR
			
			$Iden_Clie = $_POST['Iden_Clie'];
			
			// CONSULTAMOS LA IDENTIFICACION
			
			// conexion a la Base de Datos
				$conexion = conexion();
				//realizamos la consulta SQL
				$sql_consultar = "SELECT * FROM persona WHERE IDENTIFICACION ='".$Iden_Clie."' AND ID_PERFIL < 4";
				$resultado = mysql_query($sql_consultar,$conexion) or die (mysql_error());
				$fila = mysql_fetch_array($resultado);
				
				if ($fila['ID_PERSONA'] == NULL) 
						{
							mysql_close();
						header ("location:Administracion.php?error=4&opcion=6&result=0");
						}
						
						else
							{
								mysql_close();
		header ("location:Administracion.php?opcion=6&result=1&id_persona=".$fila['ID_PERSONA']);
							}
							
					
						
			break;
			
			
			
			case 15:
			
			//RECIBIMOS LOS DATOS
			
			$nombre = $_POST['Nombres'];
			$apellido = $_POST['Apellidos'];
			$tipo_iden = $_POST['Tipo_iden'];
			$identificacion = $_POST['Identificacion'];
			$telefono = $_POST['Telefono'];
			$email = $_POST['Email'];
			$direccion = $_POST['Direccion'];
			$genero = $_POST['Sexo'];
			$contrasena = $_POST['Contrasena'];
			$contrasena2 = $_POST['Contrasena2'];
			$id_persona = $_POST['id_persona'];
			 
			if($contrasena == NULL || $contrasena2== NULL) 
					
					{		
						$conexion = conexion();
						$sql_consultar="UPDATE `persona` SET `NOMBRE1` = '".$nombre."', `APELLIDO1` = '".$apellido."', `ID_TIPO_IDEN` = '".$tipo_iden."', `IDENTIFICACION` = '".$identificacion."', `TELEFONO` = '".$telefono."', `EMAIL` = '".$email."', `DIRECCION` = '".$direccion."', `SEXO` = '".$genero."' WHERE `persona`.`ID_PERSONA` = ".$id_persona;
						$resultado_consulta = mysql_query ($sql_consultar,$conexion) or die (mysql_error());
						mysql_close();
						header ("location:Administracion.php?error=2&opcion=6&result=0"); 
																		
					}
					
					else 
						{
						
						if ($contrasena == $contrasena2)
							
							{		
								$conexion = conexion();
								$sql_consultar="UPDATE `persona` SET `NOMBRE1` = '".$nombre."', `APELLIDO1` = '".$apellido."', `ID_TIPO_IDEN` = '".$tipo_iden."', `IDENTIFICACION` = '".$identificacion."', `TELEFONO` = '".$telefono."', `EMAIL` = '".$email."', `DIRECCION` = '".$direccion."', `SEXO` = '".$genero."', `CONTRASENA` = '".md5($contrasena)."' WHERE `persona`.`ID_PERSONA` = ".$id_persona;
								$resultado_consulta = mysql_query ($sql_consultar,$conexion) or die (mysql_error());
								mysql_close();
								header ("location:Administracion.php?error=2&opcion=6&result=0"); 
								
							}
								else 
									{
										mysql_close();
										header ("location:Administracion.php?error=3&opcion=6");
									}
							
								
						}
			
			break;
			
			case 16:
			//RECIBIMOS LOS DATOS
			
			$nombre = $_POST['Nombres'];
			$apellido = $_POST['Apellidos'];
			$tipo_iden = $_POST['Tipo_iden'];
			$identificacion = $_POST['Identificacion'];
			$telefono = $_POST['Telefono'];
			$email = $_POST['Email'];
			$direccion = $_POST['Direccion'];
			$genero = $_POST['Sexo'];
			$Perfil1 = $_POST['Perfil'];
			$contrasena = $_POST['Contrasena'];
			$contrasena2 = $_POST['Contrasena2']; 
			
			// SE REALIZA CONSULTA A LA BD, PARA VERIFICAR SI EXISTE UN EMPLEADO CON EL MISMO NUMERO DE IDENTIFICACION
			
			// conexion a la Base de Datos
			$conexion = conexion();
			//realizamos la consulta SQL
			$sql_consultar = "SELECT * FROM persona WHERE IDENTIFICACION ='".$identificacion."' AND ID_PERFIL < 4";
			$resultado = mysql_query($sql_consultar,$conexion) or die (mysql_error());
			$fila = mysql_fetch_array($resultado);
			if ($fila == NULL)
				{
					if ($contrasena == $contrasena2) 
			
					{
						$conexion = conexion();
						$sql_consultar="INSERT INTO `persona` (`ID_PERSONA`, `NOMBRE1`, `APELLIDO1`, `ID_TIPO_IDEN`, `IDENTIFICACION`, `ID_PERFIL`, `TELEFONO`, `EMAIL`, `DIRECCION`, `SEXO`, `CONTRASENA`, `ID_EST_PERSONA`, `FOTO`) VALUES (NULL, '".$nombre."', '".$apellido."', '".$tipo_iden."', '".$identificacion."', '".$Perfil1."', '".$telefono."', '".$email."', '".$direccion."', '".$genero."', '".md5($contrasena)."', '2', NULL);";
						$resultado_consulta = mysql_query ($sql_consultar,$conexion) or die (mysql_error());
						mysql_close();
						header ("location:Administracion.php?error=2&opcion=8&result=0"); 
						
					}
					else 
							{
								mysql_close();
						header ("location:Administracion.php?error=3&opcion=8&result=0"); 

					}
					
					
				}
				else 
						{
							mysql_close();
						header ("location:Administracion.php?error=5&opcion=8&result=0");							
						}
				
			
			
			
			
			break;
			
			case 17:
			
			//RECIBIMOS LA IDENTIFICACION A CONSULTAR
			
			$Iden_Clie = $_POST['Iden_Empleado'];
			
			// CONSULTAMOS LA IDENTIFICACION
			
			// conexion a la Base de Datos
				$conexion = conexion();
				//realizamos la consulta SQL
				$sql_consultar = "SELECT * FROM persona WHERE IDENTIFICACION ='".$Iden_Clie."' AND ID_PERFIL < 4";
				$resultado = mysql_query($sql_consultar,$conexion) or die (mysql_error());
				$fila = mysql_fetch_array($resultado);
				
				if ($fila['ID_PERSONA'] == NULL) 
						{
							mysql_close();
						header ("location:Administracion.php?error=4&opcion=9&result=0");
						}
						
						else
							{
								mysql_close();
							header ("location:Administracion.php?opcion=9&result=1&id_persona=".$fila['ID_PERSONA']);
							}
			
			
			break;
			
			case 18:
			
			//RECIBIMOS LA IDENTIFICACION A CONSULTAR
			
			$Ciudad = $_POST['Ciudad'];
			
			// CONSULTAMOS LA IDENTIFICACION
			
			// conexion a la Base de Datos
				$conexion = conexion();
				//realizamos la consulta SQL
				$sql_consultar = "SELECT * FROM juzgado WHERE ID_CIUDAD =".$Ciudad;
				$resultado = mysql_query($sql_consultar,$conexion) or die (mysql_error());
				$fila = mysql_fetch_array($resultado);
				
				if ($fila['ID_JUZGADO'] == NULL) 
						{
							mysql_close();
						header ("location:Administracion.php?error=4&opcion=10&result=0");
						}
						
						else
							{
								mysql_close();
		header ("location:Administracion.php?opcion=10&result=1&id_juzgado=".$Ciudad);
							}
							
					
						
			break;
			
			case 19:
			
			//RECIBIMOS LOS DATOS DEL JUZGADO
			$Nombre_Juzgado = $_POST['Nombres'];
			$Id_juzgado = $_POST['Id_juzgado'];
			$Ciudad = $_POST['Ciudad'];
			$Estado = $_POST['Estado'];
			
			$conexion = conexion();
			$sql_consultar="UPDATE `juzgado` SET `NOM_JUZGADO` = '".$Nombre_Juzgado."', `ID_CIUDAD` = '".$Ciudad."', `ID_ESTADO` = '".$Estado."' WHERE `juzgado`.`ID_JUZGADO` = ".$Id_juzgado;
			$resultado_consulta = mysql_query ($sql_consultar,$conexion) or die (mysql_error());
			 
			mysql_close();
			header ("location:Administracion.php?error=2&opcion=10&result=0");
			break;
			
			
			case 20:
			//RECIBIMOS LOS DATOS DEL JUZGADO
			$Nombre_Juzgado = $_POST['Nombres'];
			$Ciudad = $_POST['Ciudad'];
			$Estado = $_POST['Estado'];
			
			$conexion = conexion();
			$sql_consultar="INSERT INTO `juzgado` (`ID_JUZGADO`, `NOM_JUZGADO`, `ID_CIUDAD`, `ID_ESTADO`) VALUES (NULL, '".$Nombre_Juzgado."', '".$Ciudad."', '".$Estado."');";
			$resultado_consulta = mysql_query ($sql_consultar,$conexion) or die (mysql_error());
			
			mysql_close();
			header ("location:Administracion.php?error=2&opcion=10&result=0"); 
			break;
			
			case 21:
			
			//RECIBIMOS LA IDENTIFICACION A CONSULTAR
			
			$Ciudad = $_POST['Ciudad'];
			
			// CONSULTAMOS LA IDENTIFICACION
			
			// conexion a la Base de Datos
				$conexion = conexion();
				//realizamos la consulta SQL
				$sql_consultar = "SELECT * FROM juzgado WHERE ID_CIUDAD =".$Ciudad;
				$resultado = mysql_query($sql_consultar,$conexion) or die (mysql_error());
				$fila = mysql_fetch_array($resultado);
				
				if ($fila['ID_JUZGADO'] == NULL) 
						{
							mysql_close();
						header ("location:Administracion.php?error=4&opcion=13&result=0");
						}
						
						else
							{
								mysql_close();
		header ("location:Administracion.php?opcion=13&result=1&id_juzgado=".$fila['ID_JUZGADO']);
							}
							
					
						
			break;
			
			case 22:
			
			//RECIBIMOS DATOS
			
			$id_juzgado_UP = $_GET['id_juzgado'];
			
			$conexion = conexion();
			$sql_consultar="UPDATE `juzgado` SET `ID_ESTADO` = '2' WHERE `juzgado`.`ID_JUZGADO` =".$id_juzgado_UP;
			$resultado_consulta = mysql_query ($sql_consultar,$conexion) or die (mysql_error());
			 
			mysql_close();
			header ("location:Administracion.php?error=2&opcion=13&result=0");
			
			break;
			
			case 23:
			
			//RECIBIMOS DATOS
			
			$id_juzgado_UP = $_GET['id_juzgado'];
			
			$conexion = conexion();
			$sql_consultar="UPDATE `juzgado` SET `ID_ESTADO` = '1' WHERE `juzgado`.`ID_JUZGADO` =".$id_juzgado_UP;
			$resultado_consulta = mysql_query ($sql_consultar,$conexion) or die (mysql_error());
			
			mysql_close();
			header ("location:Administracion.php?error=2&opcion=13&result=0"); 
			break;
			
			case 24:
			
			//RECIBIMOS EL TIPO DE PROCESO
			
			$Tipo_Proceso = $_POST['Tipo_Proceso'];
			
			// CONSULTAMOS EL TIPO DE PROCESO
			
			// conexion a la Base de Datos
				$conexion = conexion();
				//realizamos la consulta SQL
				$sql_consultar = "SELECT * FROM tipo_proceso WHERE NOM_TIPO_PROCESO LIKE '".$Tipo_Proceso."%'";
				$resultado = mysql_query($sql_consultar,$conexion) or die (mysql_error());
				$fila = mysql_fetch_array($resultado);
				
				if ($fila['ID_TIPO_PROCESO'] == NULL) 
						{
						mysql_close();
						header ("location:Administracion.php?error=4&opcion=14&result=0");
						}
						
						else
							{
								mysql_close();
		header ("location:Administracion.php?opcion=14&result=1&id_tipo_proceso=".$fila['ID_TIPO_PROCESO']);
							}
							
			
						
			break;
			
			case 25:
			
			//RECIBIMOS LOS DATOS DEL TIPO DE PROCESO
			$Id_tipo_proceso = $_POST['Id_tipo_proceso'];
			$Estado = $_POST['Estado'];
			$Nombres = $_POST['Nombres'];
				
			$conexion = conexion();
			$sql_consultar="UPDATE `tipo_proceso` SET `NOM_TIPO_PROCESO` = '".$Nombres."', `ID_ESTADO` = '".$Estado."' WHERE `tipo_proceso`.`ID_TIPO_PROCESO` =".$Id_tipo_proceso;
			$resultado_consulta = mysql_query ($sql_consultar,$conexion) or die (mysql_error());
			 
			mysql_close();
			header ("location:Administracion.php?error=2&opcion=14&result=0");
			break;
			
			case 26:
			//RECIBIMOS LOS DATOS DEL JUZGADO
			$Nom_Tipo_Proceso = $_POST['Nombres'];
			$Estado = $_POST['Estado'];
			
			$conexion = conexion();
			$sql_consultar="INSERT INTO `tipo_proceso` (`ID_TIPO_PROCESO`, `NOM_TIPO_PROCESO`, `ID_ESTADO`) VALUES (NULL, '".$Nom_Tipo_Proceso."', '".$Estado."');";
			$resultado_consulta = mysql_query ($sql_consultar,$conexion) or die (mysql_error());
			 
			mysql_close();
			header ("location:Administracion.php?error=2&opcion=14&result=0");
			break;
			
			case 27:
			
			//RECIBIMOS DATOS
			
			$id_tipo_proceso = $_GET['id_tipo_proceso'];
			
			$conexion = conexion();
			$sql_consultar="UPDATE `tipo_proceso` SET `ID_ESTADO` = '1' WHERE `tipo_proceso`.`ID_TIPO_PROCESO` =".$id_tipo_proceso;
			$resultado_consulta = mysql_query ($sql_consultar,$conexion) or die (mysql_error());
			mysql_close();
			header ("location:Administracion.php?error=2&opcion=17&result=0");
			
			break;
			
			case 28:
			
			//RECIBIMOS DATOS
			
			$id_tipo_proceso = $_GET['id_tipo_proceso'];
			
			$conexion = conexion();
			$sql_consultar="UPDATE `tipo_proceso` SET `ID_ESTADO` = '2' WHERE `tipo_proceso`.`ID_TIPO_PROCESO` =".$id_tipo_proceso;
			$resultado_consulta = mysql_query ($sql_consultar,$conexion) or die (mysql_error());
			header ("location:Administracion.php?error=2&opcion=17&result=0"); 
			mysql_close();

			
			break;
			
			case 29:
			//RECIBIMOS DATOS
			$Tipo_Proceso = $_POST['Tipo_Proceso'];
			$Demandante = $_POST['Demandante'];
			$Demandado = $_POST['Demandado'];
			$Radicado = $_POST['Radicado'];
			$SelectCiudad = $_POST['SelectCiudad'];
			$SelectJuzgado = $_POST['SelectJuzgado'];
			$Id_persona = $_POST['Id_persona'];
			//SE REALIZA LA CONEXION - CONSULTA E INSERT A LA BD			
			$conexion = conexion();
			$sql_consultar="INSERT INTO `proceso` (`ID_PROCESO`, `ID_TIPO_PROCESO`, `ID_PERSONA`, `DTE`, `DDO`, `RADICADO`, `ID_ESTAD`, `ID_JUZGADO`) VALUES (NULL, '".$Tipo_Proceso."', '".$Id_persona."', '".$Demandante."', '".$Demandado."', '".$Radicado."', '1', '".$SelectJuzgado."');";
			$resultado_consulta = mysql_query ($sql_consultar,$conexion) or die (mysql_error());
			mysql_close();
			header ("location:Administracion.php?error=2&opcion=0");
			break;
	
	
			case 30:
			
			//RECIBIMOS PARAMETROS
			
			$Id_proceso = $_POST['Id_proceso'];
			$Tipo_Proceso= $_POST['Tipo_Proceso'];
			$Demandante= $_POST['Demandante'];
			$Demandado= $_POST['Demandado'];
			$Radicado= $_POST['Radicado'];
			$Estado= $_POST['Estado'];
			$SelectCiudad= $_POST['SelectCiudad'];
			$SelectJuzgado= $_POST['SelectJuzgado'];
			
			//SE REALIZA LA CONEXION - CONSULTA E INSERT A LA BD			
			$conexion = conexion();
			$sql_consultar="UPDATE `proceso` SET `ID_TIPO_PROCESO` = '".$Tipo_Proceso."', `DTE` = '".$Demandante."', `DDO` = '".$Demandado."', `ID_ESTAD` = '".$Estado."', `RADICADO` = '".$Radicado."', `ID_JUZGADO` = '".$SelectJuzgado."' WHERE `proceso`.`ID_PROCESO` = ".$Id_proceso;
			$resultado_consulta = mysql_query ($sql_consultar,$conexion) or die (mysql_error());
			
			mysql_close();
			header ("location:Administracion.php?opcion=0");
			
			
			
			break;
			
			
			case 31:
			
			//RECIBIMOS PARAMETROS
			
			$Tipo_Tarea = $_POST['Tipo_Tarea'];
			$Proceso= $_POST['Proceso'];
			$Fecha= $_POST['Fecha'];
			$Observacion= $_POST['Observacion'];
			
			//SE REALIZA LA CONEXION - CONSULTA E INSERT A LA BD			
			$conexion = conexion();
			$sql_consultar="INSERT INTO `tarea_evento` (`ID_TAREA_EVENTO`, `ID_TIPO_TAR`, `ID_ESTADO`, `ID_PROCESO`, `FECHA`, `OBSERVACION`) VALUES (NULL, '".$Tipo_Tarea."', '1', '".$Proceso."', '".$Fecha."', '".$Observacion."');";
			$resultado_consulta = mysql_query ($sql_consultar,$conexion) or die (mysql_error());
			mysql_close();
			header ("location:Administracion.php?opcion=0");
			
			
			
			break;
			
			case 32:
			
			//RECIBIMOS PARAMETROS
			
			$id_proceso = $_POST['id_proceso'];
			$Descripcion= $_POST['Descripcion'];
			$Fecha= $_POST['Fecha'];
			
			//SE REALIZA LA CONEXION - CONSULTA E INSERT A LA BD			
			$conexion = conexion();
			$sql_consultar="INSERT INTO `historial_proceso` (`ID_HISTORIAL`, `ID_PROCESO`, `DESCRIPCION`, `FECHA`) VALUES (NULL, '".$id_proceso."', '".$Descripcion."', '".$Fecha."');";
			$resultado_consulta = mysql_query ($sql_consultar,$conexion) or die (mysql_error());
			mysql_close();
			header ("location:Administracion.php?opcion=22&result=2&id_proceso=".$id_proceso);
			
			
			
			break;
			
			} // FIN CASE

?>