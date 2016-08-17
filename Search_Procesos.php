<html>
<head>
<meta charset="utf-8">
<style type="text/css">
.hidden1 
	{
		display:none;
	}
</style>
<script src="js/jquery-1.12.3.js"></script>
</head>
<script>
function MostrarDIV () 
		{
				var CriterioSearch = document.getElementById("Criterio");
				
				if (CriterioSearch.value == 0)
						{
							document.getElementById('Radicacion').style.display = 'none';
							document.getElementById('Ciudad').style.display = 'none';
							document.getElementById('Demandante').style.display = 'none';
							document.getElementById('Demandado').style.display = 'none';
							
						}
						
				if (CriterioSearch.value == "Radicacion")
						{
							document.getElementById('Radicacion').style.display = 'block';
							document.getElementById('Ciudad').style.display = 'none';
							document.getElementById('Demandante').style.display = 'none';
							document.getElementById('Demandado').style.display = 'none';
							
						}
						
				if (CriterioSearch.value == "Ciudad")
						{
							document.getElementById('Ciudad').style.display = 'block';
							document.getElementById('Radicacion').style.display = 'none';
							document.getElementById('Demandante').style.display = 'none';
							document.getElementById('Demandado').style.display = 'none';
							
						}
						
				if (CriterioSearch.value == "Demandante")
						{
							document.getElementById('Demandante').style.display = 'block';
							document.getElementById('Radicacion').style.display = 'none';
							document.getElementById('Ciudad').style.display = 'none';
							document.getElementById('Demandado').style.display = 'none';
							
						}
						
				if (CriterioSearch.value == "Demandado")
						{
							document.getElementById('Demandado').style.display = 'block';
							document.getElementById('Demandante').style.display = 'none';
							document.getElementById('Radicacion').style.display = 'none';
							document.getElementById('Ciudad').style.display = 'none';
							
						}
		}

</script>
<!-- page content -->
      <div class="right_col" role="main">
        <div class="">

          <div class="page-title">
            <div class="title_left">
              <h3>
                    Buscador de Procesos
                    
                </h3>
            </div>

            <div class="title_right">
              <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                
              </div>
            </div>
          </div>
          <div class="clearfix"></div>


          <div class="row">

            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Opciones de Busqueda</h2>
                  <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                  </ul>
                    </li>
                    
                  </ul>
                  <div class="clearfix"></div>
                </div>

                <div class="x_content">

<form action="" method="post">

                <table class="table table-striped responsive-utilities jambo_table bulk_action">
                    <thead>
                      <tr class="headings">
                        <th>&nbsp;</th>
                        <th class="column-title" align="center" colspan="2">Selecciona el criterio de Busqueda</th>
                        
                        <th class="bulk-actions" colspan="7">
                          <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                        </th>
                      </tr>
                    </thead>

                    <tbody>
                      <tr class="even pointer">
              <td class="a-center ">
              
                        </td>
                        <td class=" "><label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Criterio </label></td>
                        <td class=" ">
                        <select name="Criterio" id="Criterio" required class="form-control col-md-7 col-xs-12" onChange="MostrarDIV()">
                        <option value="0">Selecciona un Criterio</option>
                        <option value="Radicacion">Radicación</option>
                        <option value="Demandante">Demandante</option>
                        <option value="Demandado">Demandado</option>
		
      </select>
                        </td>
                        </tr>
                      <tr class="odd pointer">
                        
                      </tr>
                    </tbody>

                  </table>
                  </form>
                </div>
               
               <!-- DIV CONSULTA POR RADICADO -->

                <div class="x_content hidden1" id="Radicacion">

<form action="Administracion.php?opcion=19&result=1" method="post">

                <table class="table table-striped responsive-utilities jambo_table bulk_action">
                    <thead>
                      <tr class="headings">
                        <th>&nbsp;</th>
                        <th class="column-title" align="center" colspan="2">Buscar Por Radicado</th>
                        
                        <th class="bulk-actions" colspan="7">
                          <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                        </th>
                      </tr>
                    </thead>

                    <tbody>
                      <tr class="even pointer">
              <td class="a-center ">
              
                        </td>
                        <td class=" "><label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Radicado</label></td>
                        <td class=" ">
                        <input type="number" class="form-control col-md-7 col-xs-12" placeholder="Ingresa número de radicación" name="Radicado" required>
                        </td>
                        </tr>
                      <tr class="odd pointer">
                        
                      </tr>
                    </tbody>

                  </table>
                  <input type="submit" value="Buscar" class=btn btn-info btn-sm"">
                  </form>
                </div>
                <!-- FIN DIV CONSULTA POR RADICADO -->
                
                <!-- DIV CONSULTA POR CIUDAD -->
                <!-- FUERA DE SERVICIO POR EL MOMENTO -->
                
                <div class="x_content hidden1" id="Ciudad">

<form action="" method="post">

                <table class="table table-striped responsive-utilities jambo_table bulk_action">
                    <thead>
                      <tr class="headings">
                        <th>&nbsp;</th>
                        <th class="column-title" align="center" colspan="2">Buscar Por Ciudad</th>
                        
                        <th class="bulk-actions" colspan="7">
                          <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                        </th>
                      </tr>
                    </thead>

                    <tbody>
                      <tr class="even pointer">
              <td class="a-center ">
              
                        </td>
                        <td class=" "></td>
                        <td class=" ">
                         <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Ciudad <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <select name="SelectCiudad" id="Ciudad" class="form-control col-md-7 col-xs-12">
                        <option value="0">Selecciona</option>
      
       <?php 
			   $conexion4 = conexion();
			   $sql_consultar4="SELECT * FROM `ciudad` ORDER BY (NOM_CIUDAD)";
			   $resultado_consulta4 = mysql_query ($sql_consultar4,$conexion4) or die (mysql_error());
			   
			   
			   
			   while ($fila4 = mysql_fetch_array($resultado_consulta4))
			   		{
			   ?> 
               <option value="<?php echo $fila4['ID_CIUDAD'];?>">
			   <?php echo $fila4['NOM_CIUDAD']; ?></option>
               <?php 
					};
					mysql_close(); 
			   ?>
      
      </select>
                      </div>
                    </div>
                    </td>
                   </tbody>

                  </table>
                  <input type="submit" value="Buscar" class=btn btn-info btn-sm"">
                  </form>
                </div>
                
                <!-- FIN DIV CONSULTA POR CIUDAD -->
				
                <!-- DIV CONSULTA POR DEMANDANTE -->
                <div class="x_content hidden1" id="Demandante">

<form action="Administracion.php?opcion=19&result=3" method="post">

                <table class="table table-striped responsive-utilities jambo_table bulk_action">
                    <thead>
                      <tr class="headings">
                        <th>&nbsp;</th>
                        <th class="column-title" align="center" colspan="2">Buscar Por Demandante</th>
                        
                        <th class="bulk-actions" colspan="7">
                          <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                        </th>
                      </tr>
                    </thead>

                    <tbody>
                      <tr class="even pointer">
              <td class="a-center ">
              
                        </td>
                        <td class=" "><label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Demandante</label></td>
                        <td class=" ">
                        <input type="text" class="form-control col-md-7 col-xs-12" placeholder="Nombre del Demandante" name="Demandante" required>
                        </td>
                        </tr>
                      <tr class="odd pointer">
                        
                      </tr>
                    </tbody>

                  </table>
                  <input type="submit" value="Buscar" class=btn btn-info btn-sm"">
                  </form>
                </div>
                <!-- FIN DIV CONSULTA POR DEMANDANTE -->
                
                <!-- DIV CONSULTA POR DEMANDADO -->
                <div class="x_content hidden1" id="Demandado">

<form action="Administracion.php?opcion=19&result=4" method="post">

                <table class="table table-striped responsive-utilities jambo_table bulk_action">
                    <thead>
                      <tr class="headings">
                        <th>&nbsp;</th>
                        <th class="column-title" align="center" colspan="2">Buscar Por Demandado</th>
                        
                        <th class="bulk-actions" colspan="7">
                          <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                        </th>
                      </tr>
                    </thead>

                    <tbody>
                      <tr class="even pointer">
              <td class="a-center ">
              
                        </td>
                        <td class=" "><label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Demandado</label></td>
                        <td class=" ">
                        <input type="text" class="form-control col-md-7 col-xs-12" placeholder="Nombre del Demandando" name="Demandado" required>
                        </td>
                        </tr>
                      <tr class="odd pointer">
                        
                      </tr>
                    </tbody>

                  </table>
                  <input type="submit" value="Buscar" class=btn btn-info btn-sm"">
                  </form>
                </div>
                <!-- FIN DIV CONSULTA POR DEMANDANDO -->
                
              </div>
            </div>
          </div>         
          <?php
		  
		  if (isset($_GET['result'])!= NULL)
		  		{
					$result = $_GET['result'];
					
					switch ($result)
					
						{
							
							case 1:
							//RECIBIMOS PARAMETROS
							$Radicado = $_POST['Radicado'];
			
							?>
                            
                            <div class="">

          
            <div class="title_right">
              <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                
              </div>
            </div>
          </div>
          <div class="clearfix"></div>


          <div class="row">

            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Resultado de Consulta</h2>
                  <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                  </ul>
                    </li>
                    
                  </ul>
                  <div class="clearfix"></div>
                </div>

                <div class="x_content">

<form action="Procesar.php?opcion=4" method="post">

                <table class="table table-striped responsive-utilities jambo_table bulk_action">
                    <thead>
                      <tr class="headings">
                        <th>&nbsp;</th>
                        <th class="column-title">Radicado </th>
                        <th class="column-title">Demandante </th>
                        <th class="column-title">Demandando </th>
                        <th class="column-title">Juzgado </th>
                        <th class="column-title">Estado </th>
                        
                        <th class="column-title no-link last"><span class="nobr">Acción</span>
                        </th>
                        <th class="bulk-actions" colspan="7">
                          <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                        </th>
                      </tr>
                    </thead>

                    <tbody>
                      
                        
<?php 
						
//SE REALIZA CONEXION PARA LISTAR LOS CLIENTES INACTIVOS

$conexion5 = conexion();
$sql_consultar5="SELECT ID_PROCESO, RADICADO,DTE,DDO,juzgado.NOM_JUZGADO AS JUZGADO ,estado_persona.NOM_ESTA_PERSO AS ESTADO FROM `proceso`,juzgado,estado_persona WHERE proceso.ID_JUZGADO = juzgado.ID_JUZGADO AND estado_persona.ID_ESTADO_PERSONA = proceso.ID_ESTAD AND proceso.ID_PERSONA = ".$id_persona3." AND proceso.RADICADO = ".$Radicado;
$resultado_consulta5 = mysql_query ($sql_consultar5,$conexion5) or die (mysql_error());		

while ($fila5 = mysql_fetch_array($resultado_consulta5))
			   		{
				
$ID_PROCESO = $fila5['ID_PROCESO'];				

?>
<tr class="even pointer">
              <td class="a-center ">
              
                        </td>
                        <td class=" "><?php echo $fila5['RADICADO'];?></td>
                        <td class=" "><?php echo $fila5['DTE'];?> </td>
                        <td class=" "><?php echo $fila5['DDO'];?> </td>
                        <td class=" "><?php echo $fila5['JUZGADO'];?> </td>
                        <td class=" "><?php echo $fila5['ESTADO'];?></td>
                        <td class="last"><a href="Administracion.php?opcion=20&id_proceso=<?php echo $ID_PROCESO; ?>" class="btn btn-success btn-xs">Editar</a><a href="Administracion.php?opcion=19&result=2&id_proceso=<?php echo $ID_PROCESO; ?>" class="btn btn-success btn-xs">Ver Historial</a>
                        </td>
                 </tr>

                        <?php 
                        }
mysql_close();
						?>
                      <tr class="odd pointer">
                        
                      </tr>
                    </tbody>

                  </table>
                  </form>
                </div>
              </div>
            </div>
          </div>

        </div>
                            
                            <?php
							
							break;
							
							
							case 2:
							//RECIBIMOS PARAMETROS
							$id_proceso = $_GET['id_proceso'];
			
							?>
                            
                            <div class="">

          
            <div class="title_right">
              <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                
              </div>
            </div>
          </div>
          <div class="clearfix"></div>


          <div class="row">

            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Historial del Proceso</h2>
                  <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                  </ul>
                    </li>
                    
                  </ul>
                  <div class="clearfix"></div>
                </div>

                <div class="x_content">

			<form method="post">

                <table class="table table-striped responsive-utilities jambo_table bulk_action">
                    <thead>
                      <tr class="headings">
                        <th>&nbsp;</th>
                        <th class="column-title">Radicado</th>
                        <th class="column-title">Tipo Proceso</th>
                        <th class="column-title">Demandante</th>
                        <th class="column-title">Demandado</th>
                        <th class="column-title">Descripción Actuación</th>
                        <th class="column-title">Fecha Auto</th>
                      </tr>
                    </thead>

                    <tbody>
                      
                        
<?php 
						
//SE REALIZA CONEXION PARA CONSULTAR EL HISTORY DE UN PROCESO

$conexion3 = conexion();
$sql_consultar3="SELECT RADICADO, tipo_proceso.NOM_TIPO_PROCESO, DTE, DDO FROM `proceso`, tipo_proceso WHERE tipo_proceso.ID_TIPO_PROCESO = proceso.ID_TIPO_PROCESO AND ID_PROCESO =".$id_proceso;
$resultado_consulta3 = mysql_query ($sql_consultar3,$conexion3) or die (mysql_error());	
$fila3 = mysql_fetch_array($resultado_consulta3);
$RADICADO = $fila3['RADICADO'];
$NOM_TIPO_PROCESO = $fila3['NOM_TIPO_PROCESO'];
$DTE = $fila3['DTE'];
$DDO = $fila3['DDO'];
mysql_close();

//////////////////////////////////////////////////////////////////

$conexion5 = conexion();
$sql_consultar5="SELECT * FROM `historial_proceso` WHERE ID_PROCESO=".$id_proceso." ORDER BY  FECHA DESC";
$resultado_consulta5 = mysql_query ($sql_consultar5,$conexion5) or die (mysql_error());		

while ($fila5 = mysql_fetch_array($resultado_consulta5))
			   		{
				
$ID_PROCESO = $fila5['ID_PROCESO'];				

?>
				<tr class="even pointer">
              			<td class="a-center ">
              
                        </td>
                        <td class=" "><?php echo $RADICADO;?></td>
                        <td class=" "><?php echo $NOM_TIPO_PROCESO;?> </td>
                        <td class=" "><?php echo $DTE;?> </td>
                        <td class=" "><?php echo $DDO;?> </td>
                        <td class=" "><?php echo $fila5['DESCRIPCION'];?> </td>
                        <td class=" "><?php echo $fila5['FECHA'];?></td>
                        
                 </tr>

                        <?php 
                        }
mysql_close();
						?>
                      <tr class="odd pointer">
                        
                      </tr>
                    </tbody>

                  </table>
                  <input type="hidden" value="<?php echo $id_proceso;?>" name="id_proceso">
                  <input type="submit" value="Exportar" class="btn btn-success btn-sm" formaction="Reporte_pdf.php?opcion=1">
                  </form>
                </div>
              </div>
            </div>
          </div>

        </div>
                            
                            <?php
							
							break;
							
							case 3:
							
							//RECIBIMOS PARAMETROS
							$Demandante = $_POST['Demandante'];
			
							?>
                            
                            <div class="">

          
            <div class="title_right">
              <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                
              </div>
            </div>
          </div>
          <div class="clearfix"></div>


          <div class="row">

            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Resultado de Consulta</h2>
                  <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                  </ul>
                    </li>
                    
                  </ul>
                  <div class="clearfix"></div>
                </div>

                <div class="x_content">

<form action="Procesar.php?opcion=4" method="post">

                <table class="table table-striped responsive-utilities jambo_table bulk_action">
                    <thead>
                      <tr class="headings">
                        <th>&nbsp;</th>
                        <th class="column-title">Radicado </th>
                        <th class="column-title">Demandante </th>
                        <th class="column-title">Demandando </th>
                        <th class="column-title">Juzgado </th>
                        <th class="column-title">Estado </th>
                        
                        <th class="column-title no-link last"><span class="nobr">Acción</span>
                        </th>
                        <th class="bulk-actions" colspan="7">
                          <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                        </th>
                      </tr>
                    </thead>

                    <tbody>
                      
                        
<?php 
						
//SE REALIZA CONEXION PARA LISTAR LOS CLIENTES INACTIVOS

$conexion5 = conexion();
$sql_consultar5="SELECT ID_PROCESO, RADICADO,DTE,DDO,juzgado.NOM_JUZGADO AS JUZGADO ,estado_persona.NOM_ESTA_PERSO AS ESTADO FROM `proceso`,juzgado,estado_persona WHERE proceso.ID_JUZGADO = juzgado.ID_JUZGADO AND estado_persona.ID_ESTADO_PERSONA = proceso.ID_ESTAD AND proceso.ID_PERSONA = ".$id_persona3." AND DTE LIKE '%".$Demandante."%'";
$resultado_consulta5 = mysql_query ($sql_consultar5,$conexion5) or die (mysql_error());		

while ($fila5 = mysql_fetch_array($resultado_consulta5))
			   		{
				
$ID_PROCESO = $fila5['ID_PROCESO'];				

?>
<tr class="even pointer">
              <td class="a-center ">
              
                        </td>
                        <td class=" "><?php echo $fila5['RADICADO'];?></td>
                        <td class=" "><?php echo $fila5['DTE'];?> </td>
                        <td class=" "><?php echo $fila5['DDO'];?> </td>
                        <td class=" "><?php echo $fila5['JUZGADO'];?> </td>
                        <td class=" "><?php echo $fila5['ESTADO'];?></td>
                        <td class="last"><a href="Administracion.php?opcion=20&id_proceso=<?php echo $ID_PROCESO; ?>" class="btn btn-success btn-xs">Editar</a><a href="Administracion.php?opcion=19&result=2&id_proceso=<?php echo $ID_PROCESO; ?>" class="btn btn-success btn-xs">Ver Historial</a>
                        </td>
                 </tr>

                        <?php 
                        }
mysql_close();
						?>
                      <tr class="odd pointer">
                        
                      </tr>
                    </tbody>

                  </table>
                  
                  </form>
                </div>
              </div>
            </div>
          </div>

        </div>
                            
                            <?php
							
							break;
							
							case 4:
							
							//RECIBIMOS PARAMETROS
							$Demandado = $_POST['Demandado'];
			
							?>
                            
                            <div class="">

          
            <div class="title_right">
              <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                
              </div>
            </div>
          </div>
          <div class="clearfix"></div>


          <div class="row">

            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Resultado de Consulta</h2>
                  <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                  </ul>
                    </li>
                    
                  </ul>
                  <div class="clearfix"></div>
                </div>

                <div class="x_content">

<form action="Procesar.php?opcion=4" method="post">

                <table class="table table-striped responsive-utilities jambo_table bulk_action">
                    <thead>
                      <tr class="headings">
                        <th>&nbsp;</th>
                        <th class="column-title">Radicado </th>
                        <th class="column-title">Demandante </th>
                        <th class="column-title">Demandando </th>
                        <th class="column-title">Juzgado </th>
                        <th class="column-title">Estado </th>
                        
                        <th class="column-title no-link last"><span class="nobr">Acción</span>
                        </th>
                        <th class="bulk-actions" colspan="7">
                          <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                        </th>
                      </tr>
                    </thead>

                    <tbody>
                      
                        
<?php 
						
//SE REALIZA CONEXION PARA LISTAR LOS CLIENTES INACTIVOS

$conexion5 = conexion();
$sql_consultar5="SELECT ID_PROCESO, RADICADO,DTE,DDO,juzgado.NOM_JUZGADO AS JUZGADO ,estado_persona.NOM_ESTA_PERSO AS ESTADO FROM `proceso`,juzgado,estado_persona WHERE proceso.ID_JUZGADO = juzgado.ID_JUZGADO AND estado_persona.ID_ESTADO_PERSONA = proceso.ID_ESTAD AND proceso.ID_PERSONA = ".$id_persona3." AND DDO LIKE '%".$Demandado."%'";
$resultado_consulta5 = mysql_query ($sql_consultar5,$conexion5) or die (mysql_error());		

while ($fila5 = mysql_fetch_array($resultado_consulta5))
			   		{
				
$ID_PROCESO = $fila5['ID_PROCESO'];				

?>
<tr class="even pointer">
              <td class="a-center ">
              
                        </td>
                        <td class=" "><?php echo $fila5['RADICADO'];?></td>
                        <td class=" "><?php echo $fila5['DTE'];?> </td>
                        <td class=" "><?php echo $fila5['DDO'];?> </td>
                        <td class=" "><?php echo $fila5['JUZGADO'];?> </td>
                        <td class=" "><?php echo $fila5['ESTADO'];?></td>
                        <td class="last"><a href="Administracion.php?opcion=20&id_proceso=<?php echo $ID_PROCESO; ?>" class="btn btn-success btn-xs">Editar</a><a href="Administracion.php?opcion=19&result=2&id_proceso=<?php echo $ID_PROCESO; ?>" class="btn btn-success btn-xs">Ver Historial</a>
                        </td>
                 </tr>

                        <?php 
                        }
mysql_close();
						?>
                      <tr class="odd pointer">
                        
                      </tr>
                    </tbody>

                  </table>
                  
                  </form>
                </div>
              </div>
            </div>
          </div>

        </div>
                            
                            <?php
							
							
							break;
						}// FIN CASE
					
					
				}
		  
		  ?>

        </div>
  <!-- /page content -->
  </body>
  </html>