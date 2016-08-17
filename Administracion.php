<?php 
include ('Conexion.php');
session_start();
if (isset ($_SESSION['perfil']))
		{
			$perfil = $_SESSION['perfil'];
			$nombre=$_SESSION['nombre'];
			$apellido=$_SESSION['nombre2'];
			$id_persona3 = $_SESSION['id_usuario']; 
			$email = $_SESSION['email'];
			$telefono = $_SESSION['telefono'];
			$direccion = $_SESSION['direccion'];
			$foto = $_SESSION['foto'];
			$tipo_iden = $_SESSION['tipo_iden'];
			$sexo = $_SESSION['sexo'];
			$contrasena = $_SESSION['contrasena'];
			$estado = $_SESSION['estado'];
			$identificacion = $_SESSION['identificacion'];
			
			
			
		} else 
		
		{
			header("location:Inicio.php?error=3");
		}
		
//CONTROL DE ERRORES
  
  if (isset($_GET['error']))
				{ 
				switch ($_GET['error'])
					{
						
						case 1:
						
						?>
							<script language="javascript1.5">
           					window.alert('Registro actualizado con exito')
            				</script>
			
						<?php
						
						break;
						
						case 2:
						
						?>
							<script language="javascript1.5">
           					window.alert('Registro actualizado con exito, para visualizar los cambios debes cerrar sesión e ingresar nuevamente')
            				</script>
			
						<?php
						
						break;
						
						case 3:
						
						?>
							<script language="javascript1.5">
           					window.alert('Las contraseñas no coinciden, por favor validar')
            				</script>
			
						<?php
						
						break;
						
						case 4:
						
						?>
							<script language="javascript1.5">
           					window.alert('Cliente no existe, por favor validar')
            				</script>
			
						<?php
						
						break;
						
						case 5:
						
						?>
							<script language="javascript1.5">
           					window.alert('Ya existe un empleado con esta identificación, por favor validar')
            				</script>
			
						<?php
						
						break;
						
					}
				}
	
			
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>.: AppLawyer.com :.</title>

  <!-- Bootstrap core CSS -->

  <link href="css/bootstrap.min.css" rel="stylesheet">

  <link href="fonts/css/font-awesome.min.css" rel="stylesheet">
  <link href="css/animate.min.css" rel="stylesheet">

  <!-- Custom styling plus plugins -->
  <link href="css/custom.css" rel="stylesheet">
  <link href="css/icheck/flat/green.css" rel="stylesheet">

 <script src="js/jquery-1.12.3.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
 <!-- Cargar Juzgado -->
  <script language="javascript1.5">

		function mostrar_juzgado()
		{
			var Ciudad=$("#Ciudad").val();
			$.ajax({
						
				url: "CargarCiudad.php",
				data: {tipociudad:Ciudad},
				type: "POST",
				success: function(data)
					{
						$("#Juzgado").html(data);
					
					}
				
				}
			)	
		}
</script>


  <!--[if lt IE 9]>
        <script src="../assets/js/ie8-responsive-file-warning.js"></script>
        <![endif]-->

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

</head>


<body class="nav-md">

  <div class="container body">


    <div class="main_container">

      <div class="col-md-3 left_col">
        <div class="left_col scroll-view">

          <div class="navbar nav_title" style="border: 0;">
            <a href="Administracion.php?opcion=0" class="site_title"><i class="fa fa-university"></i> <span>AppLawyer.com</span></a>
          </div>
          <div class="clearfix"></div>

          <!-- menu prile quick info -->
          <div class="profile">
            <div class="profile_pic">
              <img src="images/<?php if ($foto== NULL){ echo "user.png";}else{echo $foto;} ?>" alt="..." class="img-circle profile_img">
            </div>
            <div class="profile_info">
              <span>Bienvenido,</span>
              <h2><?php echo $nombre." ".$apellido?></h2>
            </div>
          </div>
          <!-- /menu prile quick info -->

          <br />

          <!-- sidebar menu -->
          <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">

			<?php
			
				//DEFINO PERMISOS DE ADMINISTRADOR	
				if ($perfil == 1) 
				{
					?>
                    	<div class="menu_section">
              <h3>Menu Administración</h3>
              <ul class="nav side-menu">
                <li><a><i class="fa fa-home"></i> Inicio <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu" style="display: none">
                    <li><a href="Administracion.php?opcion=0">Inicio</a>
                    </li>
                  </ul>
                </li>
                <li><a><i class="fa fa-edit"></i> Clientes <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu" style="display: none">
                    <li><a href="Administracion.php?opcion=3&result=0">Buscar</a>
                    </li>
                    <li><a href="Administracion.php?opcion=3&result=0">Modificar</a>
                    </li>
                    <li><a href="Administracion.php?opcion=5&result=0">Activar/Inactivar</a>
                    </li>
                    <li><a href="Administracion.php?opcion=24">Clientes Web</a>
                    </li>
                  </ul>
                </li>
                <li><a><i class="fa fa-desktop"></i> Empleados <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu" style="display: none">
                    <li><a href="Administracion.php?opcion=6&result=0">Buscar</a>
                    </li>
                    <li><a href="Administracion.php?opcion=8&result=0">Nuevo</a>
                    </li>
                    <li><a href="Administracion.php?opcion=6&result=0">Modificar</a>
                    </li>
                    <li><a href="Administracion.php?opcion=9&result=0">Activar/Inactivar</a>
                    </li>
                  </ul>
                </li>
                <li><a><i class="fa fa-table"></i> Juzgados <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu" style="display: none">
                    <li><a href="Administracion.php?opcion=10&result=0">Buscar</a>
                    </li>
                    <li><a href="Administracion.php?opcion=12&result=0">Nuevo</a>
                    </li>
                    <li><a href="Administracion.php?opcion=10&result=0">Modificar</a>
                    </li>
                    <li><a href="Administracion.php?opcion=13&result=0">Activar/Inactivar</a>
                    </li>
                  </ul>
                </li>
                <li><a><i class="fa fa-bar-chart-o"></i> Tipo Procesos <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu" style="display: none">
                    <li><a href="Administracion.php?opcion=14&result=0">Buscar</a>
                    </li>
                    <li><a href="Administracion.php?opcion=16&result=0">Nuevo</a>
                    </li>
                    <li><a href="Administracion.php?opcion=14&result=0">Modificar</a>
                    </li>
                    <li><a href="Administracion.php?opcion=17&result=0">Activar/Inactivar</a>
                    </li>
                  </ul>
                </li>
               
                     
              </ul>
            </div>
                        
                    <?php	
				}
			?>            
            <div class="menu_section">
              <h3>Menu</h3>
              <ul class="nav side-menu">
              <li><a href="Administracion.php?opcion=0"><i class="fa fa-home"></i> Inicio</a>
                </li>
                <?php 
				if ($perfil == 4)
				{
					?>
				
                <li><a><i class="fa fa-bug"></i> Procesos <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu" style="display: none">
                    <li><a href="Administracion.php?opcion=18&result=0">Nuevo</a>
                    </li>
                    <li><a href="Administracion.php?opcion=19&result=0">Buscar</a>
                    </li>
                   </ul>
                </li>
                <?php 
				}
				?>
			
                <!-- TAREAS INACTIVAS POR EL MOMENTO
                <li><a><i class="fa fa-bug"></i> Tareas <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu" style="display: none">
                    <li><a href="Administracion.php?opcion=21&result=0">Nueva Tarea</a>
                    </li>
                    <li><a href="Administracion.php?opcion=23">Listar Tareas</a>
                    </li>
                   </ul>
                </li>
                -->
                <?php 
				if ($perfil == 4)
				{
					?>
                <li><a><i class="fa fa-table"></i> Reportes <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu" style="display: none">
                    <li><a href="Reporte_pdf.php?opcion=2&id_persona3=<?php echo $id_persona3;?>">Procesos Activos</a>
                    </li>
                    <li><a href="Reporte_pdf.php?opcion=3&id_persona3=<?php echo $id_persona3;?>">Procesos Inactivos</a>
                    </li>
                  </ul>
                  <?php 
				}
				  ?>
                  <?php
				
						if ($perfil <= 3) 
							{
								?>
                                <li><a><i class="fa fa-wechat"></i>Notificaciones <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu" style="display: none">
                    <li><a href="#">Clientes Activos</a>
                    </li>
                    <li><a href="#">Clientes Inactivos</a>
                    </li>
                    <li><a href="#">Cliente Unico</a>
                    </li>
                    <li><a href="#">Varios Clientes</a>
                    </li>
                  </ul>
                   <li><a><i class="fa fa-gears"></i> Admin Procesos <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu" style="display: none">
                    <li><a href="Administracion.php?opcion=22&result=0">Actualizar Historial</a>
                    </li>
                   </ul>
                </li>
                </li>
                                <?php	
							}
				?>
                </li>
                 <li><a href="Desconectar.php"><i class="fa fa-laptop"></i> Cerrar Sesión</a>
                </li>
              </ul>
            </div>
            

          </div>
          <!-- /sidebar menu -->

          <!-- /menu footer buttons -->
          <div class="sidebar-footer hidden-small">
            <a data-toggle="tooltip" data-placement="top" title="Settings">
              <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="FullScreen">
              <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Lock">
              <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Logout">
              <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
            </a>
          </div>
          <!-- /menu footer buttons -->
        </div>
      </div>

      <!-- top navigation -->
      <div class="top_nav">

        <div class="nav_menu">
          <nav class="" role="navigation">
            <div class="nav toggle">
              <a id="menu_toggle"><i class="fa fa-bars"></i></a>
            </div>

            <ul class="nav navbar-nav navbar-right">
              <li class="">
                <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                  <img src="images/<?php if ($foto== NULL){ echo "user.png";}else{echo $foto;} ?>" alt=""><?php echo $nombre." ".$apellido ; ?>
                  <span class=" fa fa-angle-down"></span>
                </a>
                <ul class="dropdown-menu dropdown-usermenu animated fadeInDown pull-right">
                  <li><a href="Administracion.php?opcion=1">Perfil</a>
                  </li>
                  <li><a href="Desconectar.php"><i class="fa fa-sign-out pull-right"></i> Cerrar Sesión</a>
                  </li>
                </ul>
              </li>

              <li role="presentation" class="dropdown">
                
                <ul id="menu1" class="dropdown-menu list-unstyled msg_list animated fadeInDown" role="menu">
                  <li>
                    
                  </li>
                  <li>
                   
                  </li>
                  <li>
                    
                  </li>
                  <li>
                    
                  </li>
                  <li>
                    <div class="text-center">
                      
                    </div>
                  </li>
                </ul>
              </li>

            </ul>
          </nav>
        </div>

      </div>
      <!-- /top navigation -->
       <!-- /page content -->

      <?php
	  
	  //CONTROL DE FORMULARIOS Y EVENTOS 
		$opcion = $_GET['opcion'];
					switch ($opcion)
					{
						
						case 0:
						//SI LA PERSONA LOGUEADA TIENE PERFIL DE ADMINISTRADOR O AUXILIAR MUESTRA LA SIGUIENTE INFORMACION
							if ($perfil == 1) 
									{
										//CONTENIDO DE LA PAGINA
										include("Lista-Empleados.php");
										//FIN CONTENIDO DE LA PAGINA
									}
						  
							if ($perfil == 1 || $perfil == 3) 
									{
										//CONTENIDO DE LA PAGINA
										include("Lista-Clientes.php");
										//FIN CONTENIDO DE LA PAGINA
									}
									
							if ($perfil == 4) 
									{
										//CONTENIDO DE LA PAGINA
										include("Lista-Procesos.php");
										//FIN CONTENIDO DE LA PAGINA
									}
						break;
						
						case 1:
						
										//CONTENIDO DE LA PAGINA
										include("Perfil.php");
										//FIN CONTENIDO DE LA PAGINA
						
						break;
						
						case 2:
										//CONTENIDO DE LA PAGINA
										include("Edit_Perfil.php");
										//FIN CONTENIDO DE LA PAGINA
						break;
						
						case 3:
										//CONTENIDO DE LA PAGINA
										include("Search_Clientes.php");
										//FIN CONTENIDO DE LA PAGINA
						break;
						
						case 4:
										//CONTENIDO DE LA PAGINA
										include("Edit_PerfilX.php");
										//FIN CONTENIDO DE LA PAGINA
						break;
						
						case 5:
										//CONTENIDO DE LA PAGINA
										include("Ac_Ina_Clientes.php");
										//FIN CONTENIDO DE LA PAGINA
						break;
						
						case 6:
										//CONTENIDO DE LA PAGINA
										include("Search_Empleados.php");
										//FIN CONTENIDO DE LA PAGINA
						break;
						
						case 7:
										//CONTENIDO DE LA PAGINA
										include("Edit_EmpleadoX.php");
										//FIN CONTENIDO DE LA PAGINA
						break;		
						
						case 8:
										//CONTENIDO DE LA PAGINA
										include("Nuevo_Empleado.php");
										//FIN CONTENIDO DE LA PAGINA
						
						break;
						
						case 9:
										//CONTENIDO DE LA PAGINA
										include("Ac_Ina_Empleados.php");
										//FIN CONTENIDO DE LA PAGINA
						
						break;
						
						case 10:
										//CONTENIDO DE LA PAGINA
										include("Search_Juzgados.php");
										//FIN CONTENIDO DE LA PAGINA
						
						break;
						
						case 11:
										//CONTENIDO DE LA PAGINA
										include("Edit_JuzgadoX.php");
										//FIN CONTENIDO DE LA PAGINA
						
						break;
						
						case 12:
										//CONTENIDO DE LA PAGINA
										include("Nuevo_Juzgado.php");
										//FIN CONTENIDO DE LA PAGINA
						
						break;
						
						case 13:
										//CONTENIDO DE LA PAGINA
										include("Ac_Ina_Juzgado.php");
										//FIN CONTENIDO DE LA PAGINA
						
						break;
						
						case 14:
										//CONTENIDO DE LA PAGINA
										include("Search_Tipo_Proceso.php");
										//FIN CONTENIDO DE LA PAGINA
						
						break;
						
						case 15:
										//CONTENIDO DE LA PAGINA
										include("Edit_Tipo_ProcesoX.php");
										//FIN CONTENIDO DE LA PAGINA
						
						break;
						
						case 16:
										//CONTENIDO DE LA PAGINA
										include("Nuevo_Tipo_Proceso.php");
										//FIN CONTENIDO DE LA PAGINA
						
						break;
						
						case 17:
										//CONTENIDO DE LA PAGINA
										include("Ac_Ina_Tipo_Proceso.php");
										//FIN CONTENIDO DE LA PAGINA
						
						break;
						
						case 18:
										//CONTENIDO DE LA PAGINA
										include("Nuevo_Proceso.php");
										//FIN CONTENIDO DE LA PAGINA
						
						break;
						
						case 19:
										//CONTENIDO DE LA PAGINA
										include("Search_Procesos.php");
										//FIN CONTENIDO DE LA PAGINA
						
						break;
						
						case 20:
										//CONTENIDO DE LA PAGINA
										include("Edit_Procesos.php");
										//FIN CONTENIDO DE LA PAGINA
						
						break;
						
						case 21:
										//CONTENIDO DE LA PAGINA
										include("Nueva_Tarea.php");
										//FIN CONTENIDO DE LA PAGINA
						
						break;
						
						case 22:
										//CONTENIDO DE LA PAGINA
										include("Search_ProcesosX.php");
										//FIN CONTENIDO DE LA PAGINA
						
						break;
						
						/*
						TAREAS INACTIVAS POR EL MOMENTO
						case 23:
										//CONTENIDO DE LA PAGINA
										include("Lista-Tareas.php");
										//FIN CONTENIDO DE LA PAGINA
						
						break;
						
						*/
						
						case 24:
						
										//CONTENIDO DE LA PAGINA
										include("Lista-ClientesWEB.php");
										//FIN CONTENIDO DE LA PAGINA
						
						break;
						
					}
					
				
				
				
					  
	  ?>
      <!-- page content -->
    </div>
  </div>

  <div id="custom_notifications" class="custom-notifications dsp_none">
    <ul class="list-unstyled notifications clearfix" data-tabbed_notifications="notif-group">
    </ul>
    <div class="clearfix"></div>
    <div id="notif-group" class="tabbed_notifications"></div>
  </div>

  <script src="js/bootstrap.min.js"></script>

  <!-- bootstrap progress js -->
  <script src="js/progressbar/bootstrap-progressbar.min.js"></script>
  <script src="js/nicescroll/jquery.nicescroll.min.js"></script>
  <!-- icheck -->
  <script src="js/icheck/icheck.min.js"></script>

  <script src="js/custom.js"></script>

  <!-- pace -->
  <script src="js/pace/pace.min.js"></script>
  
  

</body>

</html>
