<!-- page content -->
      <div class="right_col" role="main">
        <div class="">

          <div class="page-title">
            <div class="title_left">
              <h3>
                    Reporte de Procesos
                    
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
                  <h2>Procesos Inactivos</h2>
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
<form action="Procesar.php?opcion=7" method="post">
                <table class="table table-striped responsive-utilities jambo_table bulk_action">
                    <thead>
                      <tr class="headings">
                        <th>&nbsp;</th>
                        <th class="column-title">Tipo de Proceso </th>
                        <th class="column-title">Radicado </th>
                        <th class="column-title">Demandante </th>
                        <th class="column-title">Demandado </th>
                        <th class="column-title">Estado </th>
                <th class="column-title no-link last"><span class="nobr">Acción</span></th>
                        <th class="bulk-actions" colspan="7">
                          <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                        </th>
                      </tr>
                    </thead>

                    <tbody>
                      
                        
<?php 
						
//SE REALIZA CONEXION PARA LISTAR LOS CLIENTES INACTIVOS

$conexion4 = conexion();
$sql_consultar4="SELECT ID_PROCESO, DTE,DDO,RADICADO, tipo_proceso.NOM_TIPO_PROCESO, estado_persona.NOM_ESTA_PERSO FROM `proceso`, tipo_proceso, estado_persona WHERE ID_PERSONA = '".$id_persona3."' AND tipo_proceso.ID_TIPO_PROCESO = proceso.ID_TIPO_PROCESO AND ID_ESTAD = 2 AND estado_persona.ID_ESTADO_PERSONA = proceso.ID_ESTAD";
$resultado_consulta4 = mysql_query ($sql_consultar4,$conexion4) or die (mysql_error());		

while ($fila4 = mysql_fetch_array($resultado_consulta4))
			   		{
// DECLARO LA VARIABLE ID_PERSONA
$ID_PROCESO = $fila4['ID_PROCESO'];				
?>
<tr class="even pointer">
              <td class="a-center ">
              <input type="checkbox" class="flat" name="table_records[]" value="<?php echo $ID_PROCESO;?>">
                        </td>
                        <td class=" "><?php echo $fila4['NOM_TIPO_PROCESO'];?></td>
                        <td class=" "><?php echo $fila4['RADICADO'];?> <i class=" "></i></td>
                        <td class=" "><?php echo $fila4['DTE'];?></td>
                        <td class=" "><?php echo $fila4['DDO'];?></td>
                        <td class="a-right a-right "><?php echo $fila4['NOM_ESTA_PERSO'];?></td>
                        <td class=" last"><a href="Procesar.php?opcion=5&id_proceso=<?php echo $ID_PROCESO ?>" class="btn btn-info btn-xs">Activar</a> <a href="Administracion.php?opcion=19&result=2&id_proceso=<?php echo $ID_PROCESO; ?>" class="btn btn-success btn-xs">Ver Historial</a>
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
                  <h2>Procesos Activos</h2>
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

<form action="Procesar.php?opcion=8" method="post">

                <table class="table table-striped responsive-utilities jambo_table bulk_action">
                    <thead>
                      <tr class="headings">
                        <th>&nbsp;</th>
                        <th class="column-title">Tipo de Proceso </th>
                        <th class="column-title">Radicado </th>
                        <th class="column-title">Demandante </th>
                        <th class="column-title">Demandado </th>
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
$sql_consultar5="SELECT ID_PROCESO, DTE,DDO,RADICADO, tipo_proceso.NOM_TIPO_PROCESO, estado_persona.NOM_ESTA_PERSO FROM `proceso`, tipo_proceso, estado_persona WHERE ID_PERSONA = '".$id_persona3."' AND tipo_proceso.ID_TIPO_PROCESO = proceso.ID_TIPO_PROCESO AND ID_ESTAD = 1 AND estado_persona.ID_ESTADO_PERSONA = proceso.ID_ESTAD";
$resultado_consulta5 = mysql_query ($sql_consultar5,$conexion5) or die (mysql_error());		

while ($fila5 = mysql_fetch_array($resultado_consulta5))
			   		{
				
$ID_PROCESO2 = $fila5['ID_PROCESO'];				

?>
<tr class="even pointer">
              <td class="a-center ">
              <input type="checkbox" class="flat" name="table_records[]" value="<?php echo $ID_PROCESO2;?>">
                        </td>
                        <td class=" "><?php echo $fila5['NOM_TIPO_PROCESO'];?></td>
                        <td class=" "><?php echo $fila5['RADICADO'];?> <i class=" "></i></td>
                        <td class=" "><?php echo $fila5['DTE'];?></td>
                        <td class=" "><?php echo $fila5['DDO'];?></td>
                        <td class="a-right a-right "><?php echo $fila5['NOM_ESTA_PERSO'];?></td>
                        <td class=" last"><a href="Procesar.php?opcion=6&id_proceso=<?php echo $ID_PROCESO2 ?>" class="btn btn-info btn-xs">Inactivar</a><a href="Administracion.php?opcion=19&result=2&id_proceso=<?php echo $ID_PROCESO2; ?>" class="btn btn-success btn-xs">Ver Historial</a>
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