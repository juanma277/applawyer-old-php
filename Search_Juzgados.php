<!-- page content -->
      <div class="right_col" role="main">
        <div class="">

          <div class="page-title">
            <div class="title_left">
              <h3>
                    Buscador de Juzgados
                    
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
                  <h2>Buscar Juzgado</h2>
                  <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                  </ul>
                    </li>
                    
                  </ul>
                  <div class="clearfix"></div>
                </div>

                <div class="x_content">

<form action="Procesar.php?opcion=18" method="post">

                <table class="table table-striped responsive-utilities jambo_table bulk_action">
                    <thead>
                      <tr class="headings">
                        <th>&nbsp;</th>
                        <th class="column-title" align="center" colspan="2">Buscar Juzgado</th>
                        
                        <th class="bulk-actions" colspan="7">
                          <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                        </th>
                      </tr>
                    </thead>

                    <tbody>
                      <tr class="even pointer">
              <td class="a-center ">
              
                        </td>
                        <td class=" "><label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Ciudad</label></td>
                        <td class=" ">
                        <select name="Ciudad" id="campos_de_texto" required="required" class="form-control col-md-7 col-xs-12">
      
       <?php 
			   $conexion4 = conexion();
			   $sql_consultar4="SELECT * FROM ciudad";
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
							$id_juzgado = $_GET['id_juzgado'];
													
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
                        <th class="column-title">Juzgado </th>
                        <th class="column-title">Ciudad </th>
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
$sql_consultar5="SELECT ID_JUZGADO,NOM_JUZGADO,ciudad.NOM_CIUDAD,estado_persona.NOM_ESTA_PERSO FROM juzgado,ciudad,estado_persona WHERE ciudad.ID_CIUDAD = juzgado.ID_CIUDAD AND estado_persona.ID_ESTADO_PERSONA = juzgado.ID_ESTADO AND juzgado.ID_CIUDAD = ".$id_juzgado;
$resultado_consulta5 = mysql_query ($sql_consultar5,$conexion5) or die (mysql_error());		

while ($fila5 = mysql_fetch_array($resultado_consulta5))
			   		{
				
$ID_JUZGADO = $fila5['ID_JUZGADO'];				

?>
<tr class="even pointer">
              <td class="a-center ">
              
                        </td>
                        <td class=" "><?php echo $fila5['NOM_JUZGADO'];?></td>
                        <td class=" "><?php echo $fila5['NOM_CIUDAD'];?> </td>
                        <td class=" "><?php echo $fila5['NOM_ESTA_PERSO'];?></td>
                        <td class=" last"><a href="Administracion.php?opcion=11&id_juzgado=<?php echo $ID_JUZGADO; ?>" class="btn btn-success btn-xs">Editar</a>
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