<!-- page content -->
      <div class="right_col" role="main">
        <div class="">

          <div class="page-title">
            <div class="title_left">
              <h3>
                    Reporte de Tareas
                    
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
                  <h2>Tareas Finalizadas</h2>
                  <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"></a>
                      <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Settings 1</a>
                        </li>
                        <li><a href="#">Settings 2</a>
                        </li>
                      </ul>
                    </li>
                    <li><a class="close-link"></a>
                    </li>
                  </ul>
                  <div class="clearfix"></div>
                </div>

                <div class="x_content">
<form action="Procesar.php?opcion=3" method="post">
                <table class="table table-striped responsive-utilities jambo_table bulk_action">
                    <thead>
                      <tr class="headings">
                        <th>&nbsp;</th>
                        <th class="column-title">Radicado </th>
                        <th class="column-title">Observación</th>
                        <th class="column-title">Fecha </th>
                        <th class="column-title">Estado </th>
                        
                      </tr>
                    </thead>

                    <tbody>
                      
                        
<?php 
						
//SE REALIZA CONEXION PARA LISTAR LOS CLIENTES INACTIVOS

$conexion4 = conexion();
$sql_consultar4="SELECT proceso.RADICADO, OBSERVACION,FECHA, estado_persona.NOM_ESTA_PERSO FROM `tarea_evento`, estado_persona, proceso WHERE proceso.ID_PROCESO = tarea_evento.ID_PROCESO AND estado_persona.ID_ESTADO_PERSONA = tarea_evento.ID_ESTADO AND ";
$resultado_consulta4 = mysql_query ($sql_consultar4,$conexion4) or die (mysql_error());		

while ($fila4 = mysql_fetch_array($resultado_consulta4))
			   		{
// DECLARO LA VARIABLE ID_PERSONA
$ID_PERSONA = $fila4['ID_PERSONA'];				
?>
<tr class="even pointer">
                        <td class="a-center ">
                          <input type="checkbox" class="flat" name="table_records[]" value="<?php echo $ID_PERSONA;?>">
                        </td>
                        <td class=" "><?php echo $fila4['NOMBRE1'];?></td>
                        <td class=" "><?php echo $fila4['APELLIDO1'];?> </td>
                        <td class=" "><?php echo $fila4['IDENTIFICACION'];?> <i class=" "></i></td>
                        <td class=" "><?php echo $fila4['TELEFONO'];?></td>
                        <td class=" "><?php echo $fila4['DIRECCION'];?></td>
                        <td class="a-right a-right "><?php echo $fila4['ESTADO'];?></td>
                        <td class=" last"><a href="Procesar.php?opcion=1&id_persona=<?php echo $ID_PERSONA; ?>" class="btn btn-info btn-xs">Activar</a>
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
                  <input type="submit" value="Acivar Seleccionados" class=btn btn-info btn-sm"">
                  </form>
                  
                </div>
              </div>
              <div class="x_panel">
                <div class="x_title">
                  <h2>Clientes Activos</h2>
                  <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"></a>
                      <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Settings 1</a>
                        </li>
                        <li><a href="#">Settings 2</a>
                        </li>
                      </ul>
                    </li>
                    <li><a class="close-link"></a>
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
                        <th class="column-title">Nombres </th>
                        <th class="column-title">Apellidos </th>
                        <th class="column-title">Identificación </th>
                        <th class="column-title">Teléfono </th>
                        <th class="column-title">Dirección </th>
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
$sql_consultar5="SELECT ID_PERSONA, NOMBRE1,APELLIDO1,IDENTIFICACION,TELEFONO,DIRECCION,estado_persona.NOM_ESTA_PERSO as ESTADO FROM persona,estado_persona WHERE ID_PERFIL=4 AND ID_EST_PERSONA=1 AND persona.ID_EST_PERSONA = estado_persona.ID_ESTADO_PERSONA";
$resultado_consulta5 = mysql_query ($sql_consultar5,$conexion5) or die (mysql_error());		

while ($fila5 = mysql_fetch_array($resultado_consulta5))
			   		{
				
$ID_PERSONA2 = $fila5['ID_PERSONA'];				

?>
<tr class="even pointer">
              <td class="a-center ">
              <input type="checkbox" class="flat" name="table_records[]" value="<?php echo $ID_PERSONA2;?>">
                        </td>
                        <td class=" "><?php echo $fila5['NOMBRE1'];?></td>
                        <td class=" "><?php echo $fila5['APELLIDO1'];?> </td>
                        <td class=" "><?php echo $fila5['IDENTIFICACION'];?> <i class=" "></i></td>
                        <td class=" "><?php echo $fila5['TELEFONO'];?></td>
                        <td class=" "><?php echo $fila5['DIRECCION'];?></td>
                        <td class="a-right a-right "><?php echo $fila5['ESTADO'];?></td>
                        <td class=" last"><a href="Procesar.php?opcion=2&id_persona=<?php echo $ID_PERSONA2 ?>" class="btn btn-info btn-xs">Inactivar</a>
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
                  <input type="submit" value="Inactivar Seleccionados" class=btn btn-info btn-sm"">
                  </form>
                </div>
              </div>
            </div>
          </div>

        </div>

                    
        
      </div>
 <!-- /page content -->