<!-- page content -->
      <div class="right_col" role="main">
        <div class="">

          <div class="page-title">
            <div class="title_left">
              <h3>
                    Buscador Tipo de Proceso
                    
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
                  <h2>Buscar Tipo de Proceso</h2>
                  <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                  </ul>
                    </li>
                    
                  </ul>
                  <div class="clearfix"></div>
                </div>

                <div class="x_content">

<form action="Administracion.php?opcion=14&result=1" method="post">

                <table class="table table-striped responsive-utilities jambo_table bulk_action">
                    <thead>
                      <tr class="headings">
                        <th>&nbsp;</th>
                        <th class="column-title" align="center" colspan="2">Buscar Tipo de Proceso</th>
                        
                        <th class="bulk-actions" colspan="7">
                          <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                        </th>
                      </tr>
                    </thead>

                    <tbody>
                      <tr class="even pointer">
              <td class="a-center ">
              
                        </td>
                        <td class=" "><label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Proceso</label></td>
                        <td class=" ">
                        <input type="text" name="Tipo_Proceso" id="campos_de_texto" required="" class="form-control col-md-7 col-xs-12" placeholder="Ingresa Tipo de Proceso">
                        </td>
                        </tr>
                      <tr class="odd pointer">
                        
                      </tr>
                    </tbody>

                  </table>
                  <input type="submit" value="Buscar" class=btn btn-info btn-sm"">
                  </form>
                </div>
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
							$Tipo_Proceso = $_POST['Tipo_Proceso'];
													
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
                        <th class="column-title">Tipo Proceso </th>
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
						
//SE REALIZA CONEXION PARA LISTAR LOS TIPOS DE PROCESOS

$conexion5 = conexion();
$sql_consultar5="SELECT ID_TIPO_PROCESO, NOM_TIPO_PROCESO, estado_persona.NOM_ESTA_PERSO FROM `tipo_proceso`,estado_persona WHERE NOM_TIPO_PROCESO LIKE '%".$Tipo_Proceso."%' AND tipo_proceso.ID_ESTADO = estado_persona.ID_ESTADO_PERSONA";
$resultado_consulta5 = mysql_query ($sql_consultar5,$conexion5) or die (mysql_error());		

while ($fila5 = mysql_fetch_array($resultado_consulta5))
			   		{
				
$ID_TIPO_PROCESO = $fila5['ID_TIPO_PROCESO'];				

?>
<tr class="even pointer">
              <td class="a-center ">
              
                        </td>
                        <td class=" "><?php echo $fila5['NOM_TIPO_PROCESO'];?></td>
                        <td class=" "><?php echo $fila5['NOM_ESTA_PERSO'];?> </td>
                        <td class=" last"><a href="Administracion.php?opcion=15&id_tipo_proceso=<?php echo $ID_TIPO_PROCESO; ?>" class="btn btn-success btn-xs">Editar</a>
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
							
						}
					
					
				}
		  
		  ?>

        </div>
  <!-- /page content -->