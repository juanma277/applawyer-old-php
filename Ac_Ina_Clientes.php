<!-- page content -->
      <div class="right_col" role="main">
        <div class="">

          <div class="page-title">
            <div class="title_left">
              <h3>
                    Buscador de Clientes
                    
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
                  <h2>Buscar Cliente</h2>
                  <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                  </ul>
                    </li>
                    
                  </ul>
                  <div class="clearfix"></div>
                </div>

                <div class="x_content">

<form action="Procesar.php?opcion=13" method="post">

                <table class="table table-striped responsive-utilities jambo_table bulk_action">
                    <thead>
                      <tr class="headings">
                        <th>&nbsp;</th>
                        <th class="column-title" align="center" colspan="2">Buscar Cliente</th>
                        
                        <th class="bulk-actions" colspan="7">
                          <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                        </th>
                      </tr>
                    </thead>

                    <tbody>
                      <tr class="even pointer">
              <td class="a-center ">
              
                        </td>
                        <td class=" "><label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Identificación</label></td>
                        <td class=" "><input type="number" name="Iden_Clie" required="" placeholder="Ingresa Identificación" class="form-control col-md-7 col-xs-12" ></td>
                        
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
							$id_persona = $_GET['id_persona'];
													
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
$sql_consultar5="SELECT ID_PERSONA, NOMBRE1,APELLIDO1,IDENTIFICACION,TELEFONO,DIRECCION,estado_persona.NOM_ESTA_PERSO as ESTADO FROM persona,estado_persona WHERE ID_PERFIL=4 AND persona.ID_EST_PERSONA = estado_persona.ID_ESTADO_PERSONA AND ID_PERSONA=".$id_persona;
$resultado_consulta5 = mysql_query ($sql_consultar5,$conexion5) or die (mysql_error());		

while ($fila5 = mysql_fetch_array($resultado_consulta5))
			   		{
				
$ID_PERSONA2 = $fila5['ID_PERSONA'];				

?>
<tr class="even pointer">
              <td class="a-center ">
              
                        </td>
                        <td class=" "><?php echo $fila5['NOMBRE1'];?></td>
                        <td class=" "><?php echo $fila5['APELLIDO1'];?> </td>
                        <td class=" "><?php echo $fila5['IDENTIFICACION'];?> <i class=" "></i></td>
                        <td class=" "><?php echo $fila5['TELEFONO'];?></td>
                        <td class=" "><?php echo $fila5['DIRECCION'];?></td>
                        <td class="a-right a-right "><?php echo $fila5['ESTADO'];?></td>
                        <td class=" last">
                        <?php
						
						if ($fila5['ESTADO'] == "ACTIVO") 
								{
									?>
									<a href="Procesar.php?opcion=2&id_persona=<?php echo $id_persona ?>" class="btn btn-success btn-xs">Inactivar</a>
                                    <?php
								}
								else {
									
									?>
									<a href="Procesar.php?opcion=1&id_persona=<?php echo $id_persona ?>" class="btn btn-success btn-xs">Activar</a>
                                    <?php
								}
						
						?>
                        
                        
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