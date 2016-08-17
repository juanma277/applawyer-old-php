<?php
//CONTROL DE ERRORES
  
  if (isset($_GET['error']))
				{ 
				switch ($_GET['error'])
					{
						
						case 1:
						
						?>
							<script language="javascript1.5">
           					window.alert('Usuario no  registrado / Datos incorrectos ')
            				</script>
			
						<?php
						
						break;
						
						case 3:
						
						?>
							<script language="javascript1.5">
           					window.alert('Debes Iniciar sesión')
            				</script>
			
						<?php
						
						break;

						
						case 4:
						
						?>
							<script language="javascript1.5">
           					window.alert('En breves instantes se comunicara un asesor para darte instrucciones de como utilizar tu cuenta')
            				</script>
			
						<?php
						
						break;
						
						case 5:
						
						?>
							<script language="javascript1.5">
           					window.alert('Ya existe un usuario con esta identificación. Por favor ingresa tu identificación y contraseña')
            				</script>
			
						<?php
						
						break;

						
					}
				}


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>AppLawyer.com</title>

  <!-- Bootstrap core CSS -->

  <link href="css/bootstrap.min.css" rel="stylesheet">

  <link href="fonts/css/font-awesome.min.css" rel="stylesheet">
  <link href="css/animate.min.css" rel="stylesheet">

  <!-- Custom styling plus plugins -->
  <link href="css/custom.css" rel="stylesheet">
  <link href="css/icheck/flat/green.css" rel="stylesheet">


  <script src="js/jquery.min.js"></script>

  <!--[if lt IE 9]>
        <script src="../assets/js/ie8-responsive-file-warning.js"></script>
        <![endif]-->

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

</head>

<body style="background:#F7F7F7;">

  <div class="">
    <a class="hiddenanchor" id="toregister"></a>
    <a class="hiddenanchor" id="tologin"></a>

    <div id="wrapper">
      <div id="login" class="animate form">
        <section class="login_content">
          <form name="Form_Ingreso" method="post" action="Autentica.php">
            <h1>Formulario de Ingreso</h1>
            <div>
              <input type="number" name="identificacion" class="form-control" placeholder="Identificacion" required="" />
            </div>
            <div>
              <input type="password" name="contrasena" class="form-control" placeholder="Contraseña" required="" />
            </div>
            <div>
              <input type="submit" class="btn btn-default submit" value="Ingresar">
              <a class="reset_pass" href="#">¿Olvidaste tu contraseña?</a>
            </div>
            <div class="clearfix"></div>
            <div class="separator">

              <p class="change_link">¿Eres nuevo?
                <a href="#toregister" class="to_register"> Crear Cuenta </a>
              </p>
              <div class="clearfix"></div>
              <br />
              <div>
                <h1><i class="fa fa-university" style="font-size: 26px;"></i> AppLawyer.com</h1>

                <p>©2016 All Rights Reserved. AppLawyer.com</p>
              </div>
            </div>
          </form>
          <!-- form -->
        </section>
        <!-- content -->
      </div>
      <div id="register" class="animate form">
        <section class="login_content">
          <form name="Form_Crear_Usuario" method="post" action="Nuevo.php">
            <h1>Solicitar Cuenta</h1>
            <div>
              <input type="text" class="form-control" name="nombres" placeholder="Nombres" required="Required" />
            </div>
            <div>
              <input type="text" class="form-control" name="apellidos" placeholder="Apellidos" required="" />
            </div>
            <div>
            <p>            </p>
            </div>
            <div>
              <input type="number" class="form-control" name="Telefono" placeholder="Teléfono" required="" />
            </div>
            <div>
            <p>            </p>
            </div>
            <div>
              <input type="email" class="form-control" name="Email" placeholder="Email" required="" />
            </div>
            <div>
            <p>            </p>
            </div>
            <div>
              <input type="text" class="form-control" name="Direccion" placeholder="Dirección" required="" />
            </div>
            <div align="center">
              <input type="submit" class="btn btn-default submit" value="Solicitar Cuenta">
              
            </div>
            <div class="clearfix"></div>
            <div class="separator">

              <p class="change_link">¿ Ya eres usuario ?
                <a href="#tologin" class="to_register"> Ingresa Aqui! </a>
              </p>
              <div class="clearfix"></div>
              <br />
              <div>
                <h1><i class="fa fa-paw" style="font-size: 26px;"></i> AppLawyer.com</h1>

                <p>©2015 All Rights Reserved. AppLawyer.com</p>
              </div>
            </div>
          </form>
          <!-- form -->
        </section>
        <!-- content -->
      </div>
    </div>
  </div>

</body>

</html>
