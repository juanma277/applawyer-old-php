<html>
<head>
<title>Ingreso de Proceso</title>
<script src="js/jquery-1.12.3.js"></script>
</head>

<script>

		function mostrar_juzgado()
		{
			var Ciudad=$("#Ciudad").val();
			$.ajax({
						
				url: "CargarJuzgado.php",
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

<body>


<?php
//RECIBIMOS PARAMETROS
$id_proceso = $_GET['id_proceso'];
// conexion a la Base de Datos
$conexion1 = conexion();
//realizamos la consulta SQL
$sql_consultar1 = "SELECT * FROM proceso WHERE ID_PROCESO =".$id_proceso;
$resultado1 = mysql_query($sql_consultar1,$conexion1) or die (mysql_error());
$fila1 = mysql_fetch_array($resultado1);
mysql_close();

$ID_PROCESO = $fila1['ID_PROCESO'];			
$ID_TIPO_PROCESO = $fila1['ID_TIPO_PROCESO'];			
$ID_PERSONA = $fila1['ID_PERSONA'];			
$DTE = $fila1['DTE'];			
$DDO = $fila1['DDO'];			
$RADICADO = $fila1['RADICADO'];			
$ESTADO = $fila1['ID_ESTAD'];	
$ID_JUZGADO = $fila1['ID_JUZGADO'];

$conexion1 = conexion();
//realizamos la consulta SQL
$sql_consultar1 = "SELECT ID_CIUDAD FROM juzgado WHERE ID_JUZGADO =".$ID_JUZGADO;
$resultado1 = mysql_query($sql_consultar1,$conexion1) or die (mysql_error());
$fila1 = mysql_fetch_array($resultado1);
mysql_close();

$CIUDAD = $fila1['ID_CIUDAD'];	
	

?>


<!-- page content -->
      <div class="right_col" role="main">

        <div class="">
          <div class="page-title">
            <div class="title_left">
              <h3>
                    Editar Juzgado
                </h3>
            </div>
          </div>
          <div class="clearfix"></div>

          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Información de Despacho</h2>
                 <div class="clearfix"></div>
                </div>
                <div class="x_content">

                  <form class="form-horizontal form-label-left" method="post">

                    <div class="item form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Tipo Proceso <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="Id_proceso" required="required" type="hidden" value="<?php echo $ID_PROCESO?>">
                        <select name="Tipo_Proceso" id="campos_de_texto" required class="form-control col-md-7 col-xs-12">
      
       <?php 
			   $conexion4 = conexion();
			   $sql_consultar4="SELECT * FROM `tipo_proceso`";
			   $resultado_consulta4 = mysql_query ($sql_consultar4,$conexion4) or die (mysql_error());
			   
			   
			   
			   while ($fila4 = mysql_fetch_array($resultado_consulta4))
			   		{
			   ?> 
               <option <?php if ($ID_TIPO_PROCESO == $fila4['ID_TIPO_PROCESO']){?> selected="selected" <?php }?>value="<?php echo $fila4['ID_TIPO_PROCESO'];?>">
			   <?php echo $fila4['NOM_TIPO_PROCESO']; ?></option>
               <?php 
					};
					mysql_close(); 
			   ?>
      
      </select>
                        
                      </div>
                    </div>
                    <div class="item form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Demandante <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                      <input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="Demandante" required="required" type="text" value="<?php echo $DTE?>">
                      </div>
                    </div>
                    <div class="item form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Demandado<span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="Demandado" required="required" type="text" value="<?php echo $DDO?>">
                      </div>
                    </div>
                    
                    <div class="item form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Radicado<span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="Radicado" required="required" type="number" value="<?php echo $RADICADO?>">
                      </div>
                      </div>
                      <div class="item form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Estado<span class="required">*</span>
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
               <option <?php if ($ESTADO == $fila4['ID_ESTADO_PERSONA']){?> selected="selected" <?php }?>value="<?php echo $fila4['ID_ESTADO_PERSONA'];?>">
			   <?php echo $fila4['NOM_ESTA_PERSO']; ?></option>
               <?php 
					};
					mysql_close(); 
			   ?>
      
      </select>
                      </div>
                    </div>
                    <div class="item form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Ciudad<span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                         <select name="SelectCiudad" id="Ciudad" class="form-control col-md-7 col-xs-12" onChange="mostrar_juzgado()" required="">
                        <option value="0">Selecciona una Ciudad</option>
      
       <?php 
			   $conexion4 = conexion();
			   $sql_consultar4="SELECT * FROM `ciudad` ORDER BY (NOM_CIUDAD)";
			   $resultado_consulta4 = mysql_query ($sql_consultar4,$conexion4) or die (mysql_error());
			   
			   
			   
			   while ($fila4 = mysql_fetch_array($resultado_consulta4))
			   		{
			   ?> 
               <option <?php if ($CIUDAD == $fila4['ID_CIUDAD']){?> selected="selected" <?php }?>  value="<?php echo $fila4['ID_CIUDAD'];?>">
			   <?php echo $fila4['NOM_CIUDAD']; ?></option>
               <?php 
					};
					mysql_close(); 
			   ?>
      
      </select>
                      </div>
                      
                    </div>
                    
                    <div class="item form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Juzgado<span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                         <select name="SelectJuzgado" id="Juzgado" class="form-control col-md-7 col-xs-12" required="">
   </select>
                      </div>
                      
                    </div>
                    </div>
                    
                    
                    <div class="ln_solid"></div>
                    <div class="form-group">
                      <div class="col-md-6 col-md-offset-3">
                        <button type="submit" class="btn btn-primary" formaction="Administracion.php?opcion=19&result=0">Cancelar</button>
                        <button id="send" type="submit" class="btn btn-success" formaction="Procesar.php?opcion=30">Actualizar</button>
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
 </body>
 </html>