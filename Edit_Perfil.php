<!-- page content -->
      <div class="right_col" role="main">

        <div class="">
          <div class="page-title">
            <div class="title_left">
              <h3>
                    Editar Perfil
                </h3>
            </div>
          </div>
          <div class="clearfix"></div>

          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Información Personal</h2>
                 <div class="clearfix"></div>
                </div>
                <div class="x_content">

                  <form class="form-horizontal form-label-left" method="post">

                    <div class="item form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Nombres <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="Nombres" required="required" type="text" value="<?php echo $nombre?>">
                      </div>
                    </div>
                    <div class="item form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Apellidos <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" id="email" name="Apellidos" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $apellido?>">
                      </div>
                    </div>
                    <div class="item form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Tipo Identificación<span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <select name="Tipo_iden" class="form-control col-md-7 col-xs-12">
                        
                        <option value="CC" <?php if ($tipo_iden == "CC") {?> selected<?php }?>>CC</option>
                        <option value="NIT" <?php if ($tipo_iden == "NIT") {?> selected<?php }?> >NIT</option>
                        </select>
                      </div>
                    </div>
                    <div class="item form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="number">Identificación <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="number" id="number" name="Identificacion_Disable" required="required" data-validate-minmax="10,100" class="form-control col-md-7 col-xs-12" value="<?php echo $identificacion?>" disabled="">
                        <input type="hidden" id="number" name="Identificacion" required="required" data-validate-minmax="10,100" class="form-control col-md-7 col-xs-12" value="<?php echo $identificacion?>">
                      </div>
                    </div>
                    <div class="item form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="website">Teléfono <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="tel" id="website" name="Telefono" required="required" class="form-control col-md-7 col-xs-12"  value="<?php echo $telefono?>">
                      </div>
                    </div>
                    <div class="item form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="occupation">Email <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input id="occupation" type="email" name="Email" data-validate-length-range="5,20" class="optional form-control col-md-7 col-xs-12"  value="<?php echo $email?>">
                      </div>
                    </div>
                    <div class="item form-group">
                      <label for="password" class="control-label col-md-3">Dirección</label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input id="password" type="text" name="Direccion" data-validate-length="6,8" class="form-control col-md-7 col-xs-12" required="required" value="<?php echo $direccion?>">
                      </div>
                    </div>
                    <div class="item form-group">
                      <label for="password2" class="control-label col-md-3 col-sm-3 col-xs-12">Género</label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                       <select name="Sexo" class="form-control col-md-7 col-xs-12">
                        
                        <option value="Masculino" <?php if ($sexo == "Masculino") {?> selected<?php }?>>Masculino</option>
                        <option value="Femenino" <?php if ($sexo == "Femenino") {?> selected<?php }?> >Femenino</option>
                        </select>
                      </div>
                    </div>
                    <div class="item form-group">
                    <input type="hidden" name="id_persona" value="<?php echo $id_persona3;?>">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="telephone">Contraseña <span class="required"></span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="password" id="telephone" name="Contrasena"  data-validate-length-range="8,20" class="form-control col-md-7 col-xs-12">
                      </div>
                    </div>
                    <div class="item form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="textarea">Repetir Contraseña <span class="required"></span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="password" id="telephone" name="Contrasena2"  data-validate-length-range="8,20" class="form-control col-md-7 col-xs-12">
                      </div>
                    </div>
                    <div class="ln_solid"></div>
                    <div class="form-group">
                      <div class="col-md-6 col-md-offset-3">
                        <button type="submit" class="btn btn-primary" formaction="Administracion.php?opcion=1">Cancelar</button>
                        <button id="send" type="submit" class="btn btn-success" formaction="Procesar.php?opcion=10">Actualizar</button>
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