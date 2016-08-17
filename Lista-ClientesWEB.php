<!-- page content -->
      <div class="right_col" role="main">
        <div class="">

          <div class="page-title">
            <div class="title_left">
              <h3>
                    .: Clientes WEB :.
                    
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
                        <th class="column-title">Nombres </th>
                        <th class="column-title">Apellidos </th>
                        <th class="column-title">Teléfono </th>
                        <th class="column-title">Email </th>
                        <th class="column-title">Dirección </th>
                        <th class="column-title">Solicitud </th>
                      </tr>
                    </thead>

                    <tbody>
                      
                        
<?php 
						
//SE REALIZA CONEXION PARA LISTAR LOS CLIENTES INACTIVOS

$conexion4 = conexion();
$sql_consultar4="SELECT * FROM persona_web ORDER BY FECHA_REG DESC";
$resultado_consulta4 = mysql_query ($sql_consultar4,$conexion4) or die (mysql_error());		

while ($fila4 = mysql_fetch_array($resultado_consulta4))
			   		{
?>
					  <tr class="even pointer">
                        <td class="a-center ">
                          
                        </td>
                        <td class=" "><?php echo $fila4['NOMBRE'];?></td>
                        <td class=" "><?php echo $fila4['APELLIDO'];?> </td>
                        <td class=" "><?php echo $fila4['TELEFONO'];?> <i class=" "></i></td>
                        <td class=" "><?php echo $fila4['EMAIL'];?></td>
                        <td class=" "><?php echo $fila4['DIRECCION'];?></td>
                        <td class=" "><?php echo $fila4['FECHA_REG'];?></td>
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

                    
        
      </div>
 <!-- /page content -->