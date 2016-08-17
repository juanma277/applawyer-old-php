<?php
if (isset($_GET['subopc'])) 
	{
$subopc = $_GET['subopc'];
	} else {
	$subopc = 1;
	}
switch ($subopc) 
	{
	
		case 1:
		
		?>
        
        <!-- page content -->
      <div class="right_col" role="main">

        <div class="">
          <div class="page-title">
            <div class="title_left">
              <h3>Perfil de Usuario</h3>
            </div>

            </div>
          <div class="clearfix"></div>

          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Reporte de Usuario</h2>
                  
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">

                  <div class="col-md-3 col-sm-3 col-xs-12 profile_left">

                    <div class="profile_img">

                      <!-- end of image cropping -->
                      <div id="crop-avatar">
                        <!-- Current avatar -->
                        <div class="avatar-view" title="Cambiar Imagen">
                          <img src="images/<?php if ($foto== NULL){ echo "user.png";}else{echo $foto;} ?>" alt="Imagen">
                        </div>

                        <!-- Cropping modal -->
                        <div class="modal fade" id="avatar-modal" aria-hidden="true" aria-labelledby="avatar-modal-label" role="dialog" tabindex="-1">
                          <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                              <form class="avatar-form" enctype="multipart/form-data" method="post">
                                <div class="modal-header">
                                  <button class="close" data-dismiss="modal" type="button">&times;</button>
                                  <h4 class="modal-title" id="avatar-modal-label">Cambiar Imagen</h4>
                                </div>
                                <div class="modal-body">
                                  <div class="avatar-body">

                                    <!-- Upload image and data -->
                                    <div class="avatar-upload">
                                      <input class="avatar-src" name="avatar_src" type="hidden">
                                      <input class="avatar-data" name="avatar_data" type="hidden">
                                      <label for="avatarInput">Seleccionar Imagen</label>
                                      <input class="avatar-input" id="avatarInput" name="avatar_file" type="file">
                                    </div>

                                    <!-- Crop and preview -->
                                    <div class="row">
                                      <div class="col-md-9">
                                        <div class="avatar-wrapper"></div>
                                      </div>
                                      <div class="col-md-3">
                                        <div class="avatar-preview preview-lg"></div>
                                        <div class="avatar-preview preview-md"></div>
                                        <div class="avatar-preview preview-sm"></div>
                                      </div>
                                    </div>

                                    <div class="row avatar-btns">
                                      <div class="col-md-9">
                                        <div class="btn-group">
                                          
                                        </div>
                                      </div>
                                      <div class="col-md-3">
                                        <button class="btn btn-primary btn-block avatar-save" type="submit" formaction="Procesar.php?opcion=9">Cargar Imagen</button>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <!-- <div class="modal-footer">
    <button class="btn btn-default" data-dismiss="modal" type="button">Close</button>
                                                </div> -->
                              </form>
                            </div>
                          </div>
                        </div>
                        <!-- /.modal -->
                        
                        
                        <!-- Emergente Editar Perfil -->
                        
                        <div class="modal fade" id="avatar-modal" aria-hidden="true" aria-labelledby="avatar-modal-label" role="dialog" tabindex="-1">
                          <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                              <form class="avatar-form" enctype="multipart/form-data" method="post">
                                <div class="modal-header">
                                  <button class="close" data-dismiss="modal" type="button">&times;</button>
                                  <h4 class="modal-title" id="avatar-modal-label">Editar Pefil</h4>
                                </div>
                                <div class="modal-body">
                                  <div class="avatar-body">

                                    <!-- Upload image and data -->
                                    <div class="avatar-upload">
                                      <input class="avatar-src" name="avatar_src" type="hidden">
                                      <input class="avatar-data" name="avatar_data" type="hidden">
                                      <label for="avatarInput">Seleccionar Imagen</label>
                                      <input class="avatar-input" id="avatarInput" name="avatar_file" type="file">
                                    </div>

                                    <!-- Crop and preview -->
                                    <div class="row">
                                      <div class="col-md-9">
                                        <div class="avatar-wrapper"></div>
                                      </div>
                                      <div class="col-md-3">
                                        <div class="avatar-preview preview-lg"></div>
                                        <div class="avatar-preview preview-md"></div>
                                        <div class="avatar-preview preview-sm"></div>
                                      </div>
                                    </div>

                                    <div class="row avatar-btns">
                                      <div class="col-md-9">
                                        <div class="btn-group">
                                          
                                        </div>
                                      </div>
                                      <div class="col-md-3">
                                        <button class="btn btn-primary btn-block avatar-save" type="submit" formaction="Procesar.php?opcion=9">Cargar Imagen</button>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <!-- <div class="modal-footer">
    <button class="btn btn-default" data-dismiss="modal" type="button">Close</button>
                                                </div> -->
                              </form>
                            </div>
                          </div>
                        </div>
                        <!-- /.Editar perfil -->

                        <!-- Loading state -->
                        <div class="loading" aria-label="Loading" role="img" tabindex="-1"></div>
                      </div>
                      <!-- end of image cropping -->

                    </div>
                    <h3><?php echo $nombre." ".$apellido; ?></h3>

                    <ul class="list-unstyled user_data">
                      <li><i class="fa fa-map-marker user-profile-icon"></i> <?php echo $email; ?>
                      </li>

                      <li>
                        <i class="fa fa-briefcase user-profile-icon"></i> <?php echo $telefono; ?>
                      </li>

                      <li class="m-top-xs">
                        <i class="fa fa-external-link user-profile-icon"></i>
                        <?php echo $direccion; ?>
                      </li>
                    </ul>

                    <a class="btn btn-success" href="Administracion.php?opcion=2"><i class="fa fa-edit m-right-xs"></i>Editar Perfil</a>
                    <br />

                    
                  </div>
                  <div class="col-md-9 col-sm-9 col-xs-12">

                    
                    <!-- start of user-activity-graph -->
                    <div id="graph_bar" style="width:100%; height:280px;"></div>
                    <!-- end of user-activity-graph -->

                    <div class="" role="tabpanel" data-example-id="togglable-tabs">
                      <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">Procesos Activos</a>
                        </li>
                        <li role="presentation" class=""><a href="#tab_content2" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">Procesos Inactivos</a>
                        </li>
                        </ul>
                      <div id="myTabContent" class="tab-content">
                        <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">

                          <!-- start Procesos Activos -->
                          
                          <table class="data table table-striped no-margin">
                            <thead>
                              <tr>
                                <th>Radicado</th>
                                <th>Demandante</th>
                                <th>Demandado</th>
                                <th>Juzgado</th>
                              </tr>
                            </thead>
                            <tbody>
                            <?php
                            //SE REALIZA CONEXION PARA LISTAR LOS PROCESOS ACTIVOS

$conexion = conexion();
$sql_consultar="SELECT ID_PROCESO, DTE,DDO,RADICADO, tipo_proceso.NOM_TIPO_PROCESO, estado_persona.NOM_ESTA_PERSO,juzgado.NOM_JUZGADO FROM `proceso`, tipo_proceso, estado_persona, juzgado WHERE ID_PERSONA = ".$id_persona3." AND tipo_proceso.ID_TIPO_PROCESO = proceso.ID_TIPO_PROCESO AND ID_ESTAD = 1 AND estado_persona.ID_ESTADO_PERSONA = proceso.ID_ESTAD AND proceso.ID_JUZGADO = juzgado.ID_JUZGADO";
$resultado_consulta = mysql_query ($sql_consultar,$conexion) or die (mysql_error());	
while ($fila = mysql_fetch_array($resultado_consulta))
			   		{
						
						
?>

                            <tr>
                            
                                <td><?php echo $fila['RADICADO'];?></td>
                                <td><?php echo $fila['DTE'];?></td>
                                <td><?php echo $fila['DDO'];?></td>
                                <td><?php echo $fila['NOM_JUZGADO'];?></td>
                              </tr>
                              
                              <?php 
							 
						}
							  mysql_close();
							  
							  ?>
                              
							</tbody>
                          </table>
                          
                          <!-- end Procesos Activos -->

                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="profile-tab">

                         <!-- start Procesos Inactivos -->
                          
                          <table class="data table table-striped no-margin">
                            <thead>
                              <tr>
                                <th>Radicado</th>
                                <th>Demandante</th>
                                <th>Demandado</th>
                                <th>Juzgado</th>
                              </tr>
                            </thead>
                            <tbody>
                            <?php
                            //SE REALIZA CONEXION PARA LISTAR LOS PROCESOS ACTIVOS

$conexion = conexion();
$sql_consultar="SELECT ID_PROCESO, DTE,DDO,RADICADO, tipo_proceso.NOM_TIPO_PROCESO, estado_persona.NOM_ESTA_PERSO,juzgado.NOM_JUZGADO FROM `proceso`, tipo_proceso, estado_persona, juzgado WHERE ID_PERSONA = ".$id_persona3." AND tipo_proceso.ID_TIPO_PROCESO = proceso.ID_TIPO_PROCESO AND ID_ESTAD = 2 AND estado_persona.ID_ESTADO_PERSONA = proceso.ID_ESTAD AND proceso.ID_JUZGADO = juzgado.ID_JUZGADO";
$resultado_consulta = mysql_query ($sql_consultar,$conexion) or die (mysql_error());

while ($fila = mysql_fetch_array($resultado_consulta))
			   		{
						
						
?>

                            <tr>
                            
	                            <td><?php echo $fila['RADICADO'];?></td>
                                <td><?php echo $fila['DTE'];?></td>
                                <td><?php echo $fila['DDO'];?></td>
                                <td><?php echo $fila['NOM_JUZGADO'];?></td>
                              </tr>
                              
                              <?php 
							  
						}
							  mysql_close();
							  
							  ?>
                              
							</tbody>
                          </table>
                          
                          <!-- end Procesos Inactivos -->
                        </div>
                       </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        
      </div>
 <!-- /page content -->

        
        <?php
		
		break;
		
		
		case 2:
		
		break;
	}

?>

 
  <!-- image cropping -->
  <script src="js/cropping/cropper.min.js"></script>
  <script src="js/cropping/main.js"></script>

  <!-- daterangepicker -->
  <script type="text/javascript" src="js/moment/moment.min.js"></script>
  <script type="text/javascript" src="js/datepicker/daterangepicker.js"></script>

  <!-- chart js -->
  <script src="js/chartjs/chart.min.js"></script>

  <!-- moris js -->
  <script src="js/moris/raphael-min.js"></script>
  <script src="js/moris/morris.min.js"></script>

  
    