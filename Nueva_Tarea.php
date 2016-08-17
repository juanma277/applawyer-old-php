<!-- page content -->
      <div class="right_col" role="main">

        <div class="">
          <div class="page-title">
            <div class="title_left">
              <h3>
                    Nueva Tarea
                </h3>
            </div>
          </div>
          <div class="clearfix"></div>

          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2></h2>
                 <div class="clearfix"></div>
                </div>
                <div class="x_content">

                 <form class="form-horizontal form-label-left" method="post">

                    <div class="item form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Tipo Tarea <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <select name="Tipo_Tarea" id="Proceso" required="" class="form-control col-md-7 col-xs-12">
                        <option value="0">Seleccione un Tipo </option>
      
       <?php 
			   $conexion4 = conexion();
			   $sql_consultar4="SELECT * FROM `tipo_tarea` ORDER BY (NOM_TIPO_TAREA)";
			   $resultado_consulta4 = mysql_query ($sql_consultar4,$conexion4) or die (mysql_error());
			   
			   
			   
			   while ($fila4 = mysql_fetch_array($resultado_consulta4))
			   		{
			   ?> 
               <option value="<?php echo $fila4['ID_TIPO_TAREA'];?>">
			   <?php echo $fila4['NOM_TIPO_TAREA']; ?></option>
               <?php 
					};
					mysql_close(); 
			   ?>
      
      </select>
	              </div>
                    </div>
                    <div class="item form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Proceso <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <select name="Proceso" id="Proceso" required="" class="form-control col-md-7 col-xs-12">
                        <option value="0">Seleccione un Proceso </option>
      
       <?php 
			   $conexion4 = conexion();
			   $sql_consultar4="SELECT * FROM `proceso` WHERE ID_PERSONA= ".$id_persona3." ORDER BY RADICADO ASC";
			   $resultado_consulta4 = mysql_query ($sql_consultar4,$conexion4) or die (mysql_error());
			   
			   
			   
			   while ($fila4 = mysql_fetch_array($resultado_consulta4))
			   		{
			   ?> 
               <option value="<?php echo $fila4['ID_PROCESO'];?>">
			   <?php echo $fila4['RADICADO']; ?></option>
               <?php 
					};
					mysql_close(); 
			   ?>
      
      </select>
                                                 
                      </div>
                    </div>
                    <div class="item form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Fecha <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input id="name" class="form-control col-md-7 col-xs-12" name="Fecha" required="required" type="date" >
                      </div>
                    </div>
                    <div class="item form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Observación <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <textarea class="form-control col-md-7 col-xs-12" name="Observacion" required="required"></textarea> 
                      </div>
                    </div>
                    <div class="ln_solid"></div>
                    <div class="form-group">
                      <div class="col-md-6 col-md-offset-3">
                      <input id="name" name="Id_persona" type="hidden" value="<?php echo $id_persona3;?>">
                        <a href="Administracion.php?opcion=0" class="btn btn-primary">Cancelar</a>
                        <button id="send" type="submit" class="btn btn-success" formaction="Procesar.php?opcion=31">Ingresar</button>
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
 
 
