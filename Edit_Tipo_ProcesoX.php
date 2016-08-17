<?php
//RECIBIMOS PARAMETROS
$id_tipo_proceso = $_GET['id_tipo_proceso'];
// conexion a la Base de Datos
$conexion1 = conexion();
//realizamos la consulta SQL
$sql_consultar1 = "SELECT * FROM tipo_proceso WHERE ID_TIPO_PROCESO =".$id_tipo_proceso;
$resultado1 = mysql_query($sql_consultar1,$conexion1) or die (mysql_error());
$fila1 = mysql_fetch_array($resultado1);

$ID_TIPO_PROCESO = $fila1['ID_TIPO_PROCESO'];			
$NOM_TIPO_PROCESO = $fila1['NOM_TIPO_PROCESO'];
$ID_ESTADO = $fila1['ID_ESTADO'];

?>


<!-- page content -->
      <div class="right_col" role="main">

        <div class="">
          <div class="page-title">
            <div class="title_left">
              <h3>
                    Editar Tipo Proceso
                </h3>
            </div>
          </div>
          <div class="clearfix"></div>

          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Tipo Proceso</h2>
                 <div class="clearfix"></div>
                </div>
                <div class="x_content">

                  <form class="form-horizontal form-label-left" method="post" method="post">

                    <div class="item form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Proceso <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="Nombres" required="required" type="text" value="<?php echo $NOM_TIPO_PROCESO?>">
                        <input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="Id_tipo_proceso" required="required" type="hidden" value="<?php echo $ID_TIPO_PROCESO?>">
                      </div>
                    </div>
                    
                    <div class="item form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Tipo Estado<span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <select name="Estado" id="campos_de_texto" required class="form-control col-md-7 col-xs-12">
      
       <?php 
			   $conexion4 = conexion();
			   $sql_consultar4="SELECT * FROM `estado_persona`";
			   $resultado_consulta4 = mysql_query ($sql_consultar4,$conexion4) or die (mysql_error());
			   
			   
			   
			   while ($fila4 = mysql_fetch_array($resultado_consulta4))
			   		{
			   ?> 
               <option <?php if ($ID_ESTADO == $fila4['ID_ESTADO_PERSONA']){?> selected="selected" <?php }?>value="<?php echo $fila4['ID_ESTADO_PERSONA'];?>">
			   <?php echo $fila4['NOM_ESTA_PERSO']; ?></option>
               <?php 
					};
					mysql_close(); 
			   ?>
      
      </select>
                      </div>
                    </div>
                    
                    <div class="ln_solid"></div>
                    <div class="form-group">
                      <div class="col-md-6 col-md-offset-3">
                        <button type="submit" class="btn btn-primary" formaction="Administracion.php?opcion=14&result=0">Cancelar</button>
                        <button id="send" type="submit" class="btn btn-success" formaction="Procesar.php?opcion=25">Actualizar</button>
                      </div>
                    </div>
                  </form>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
 <!-- /page content -->