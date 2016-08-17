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
<!-- page content -->
      <div class="right_col" role="main">

        <div class="">
          <div class="page-title">
            <div class="title_left">
              <h3>
                    Nuevo Proceso
                </h3>
            </div>
          </div>
          <div class="clearfix"></div>

          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Información del Proceso</h2>
                 <div class="clearfix"></div>
                </div>
                <div class="x_content">

                 <form class="form-horizontal form-label-left" method="post">

                     <div class="item form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Ciudad <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <select name="SelectCiudad" id="Ciudad" class="form-control col-md-7 col-xs-12" onChange="mostrar_juzgado()">
      
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
                    
                    <div class="item form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Juzgado  <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
   <select name="SelectJuzgado" id="Juzgado" class="form-control col-md-7 col-xs-12">
   </select>
                      </div>
                    </div>
                    
                    <div class="ln_solid"></div>
                    <div class="form-group">
                      <div class="col-md-6 col-md-offset-3">
                        <button type="submit" class="btn btn-primary" formaction="Administracion.php?opcion=10&result=0">Cancelar</button>
                        <button id="send" type="submit" class="btn btn-success" formaction="Procesar.php?opcion=20">Ingresar</button>
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
 
 
