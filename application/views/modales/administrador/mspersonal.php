
    <div class="modal_nuevo_personal" id="modal_nuevo_personal">
        <div class="col-md-6 col-sm-8 col-xs-10 col-md-offset-3 col-sm-offset-2 col-xs-offset-1 fondo">
                <div class="mod-personal-cebecera text-center" id="mod-personal-cebecera">
                    <p>NUEVO</p>
                </div>
                <span id="cerrar-modal-usuario-per" class="cerrar-modal icon-cancel-circle"></span>
            <div class="row mod-nuevo-personal">
                <form method="POST" action="<?php echo base_url('client/Controller_personal/insertar_personal')?>" id="guardar_personal_serv" enctype="multipart/form-data">
                    <div id="edit_id_convenios"></div>
                    <div class="row">
                        <div class="col-xs-12 nuevo-perso-form">
                        	<div class="columna col-xs-12 col-sm-6 col-md-4"><!--nombre-->
                                <label class="icon-spell-check" for="per_nombres" id="lab-per_nombres"></label>
                                <input placeholder="NOMBRES" type="text" name="nombre" id="per_nombres" required class="mostrar_titulo" />
                            </div>
                            <div class="columna col-xs-12 col-sm-6 col-md-4"><!--apellidos-->
                                <label class="icon-spell-check" for="per_paterno" id="lab-per_paterno"></label>
                                <input placeholder="AP. PATERNO" type="text" name="paterno" id="per_paterno" required class="mostrar_titulo" />
                            </div>
                            <div class="columna col-xs-12 col-sm-6 col-md-4"><!--materno-->
                                <label class="icon-spell-check" for="per_materno" id="lab-per_materno"></label>
                                <input placeholder="AP. MATERNO" type="text" name="materno" id="per_materno" required class="mostrar_titulo" />
                            </div>
                            <div class="columna col-xs-12 col-sm-6 col-md-4"><!--CI-->
                                <label class="icon-spell-check" for="per_ci" id="lab-per_ci"></label>
                                <input placeholder="CED. IDENT" type="text" name="ci" id="per_ci" required class="mostrar_titulo" />
                            </div>
                            <div class="columna col-xs-12 col-sm-6 col-md-4"><!--TELEFONO-->
                                <label class="icon-spell-check" for="per_telefono" id="lab-per_telefono"></label>
                                <input placeholder="TELEFONO" type="text" name="telefono" id="per_telefono" required class="mostrar_titulo" />
                            </div>
                            <div class="columna col-xs-12 col-sm-6 col-md-4"><!--EMAIL-->
                                <label class="icon-spell-check" for="per_email" id="lab-per_email"></label>
                                <input placeholder="EMAIL" type="text" name="email" id="per_email" required class="mostrar_titulo" />
                            </div>
                            <div class="columna col-xs-12 col-sm-6 col-md-4"><!--EMAIL-->
                                <label class="icon-spell-check" for="per_cargo" id="lab-per_cargo"></label>
                                <input placeholder="CARGO opcional" type="text" name="cargo" id="per_cargo" class="mostrar_titulo" />
                            </div>
                            <div class="columna col-xs-12 col-sm-6 col-md-4"><!--EMAIL-->
                                <label class="icon-spell-check" for="per_usuario" id="lab-per_usuario"></label>
                                <input placeholder="NOMBRE DE USUARIO" type="text" name="usuario" id="per_usuario" required class="mostrar_titulo" />
                            </div>
                            <div class="columna col-xs-12 col-sm-6 col-md-4"><!--CONTRASEÑA-->
                                <label class="icon-spell-check" for="per_password" id="lab-per_password"></label>
                                <input placeholder="CONTRASEÑA" type="text" name="password" id="per_password" required class="mostrar_titulo" />
                            </div>
                            <div class="columna col-xs-12 col-sm-6 col-md-4"><!--ESTADO DEL USUARIO-->
                                <label class="icon-menu2" for="per-estado" id="lab-per-estado">&nbsp; Estado&nbsp;</label>
                                <input name="estado" type="checkbox" id="per-estado" class="toggle-switch" checked />
                            </div>
                            <div class="columna col-xs-12 col-sm-6 col-md-4"><!--TIPO DE CONVENIO-->
                                <label class="icon-menu2" for="per-permiso" id="lab-per-permiso">&nbsp; Permiso</label>
                                <select name="id_grupo" id="per-permiso" required>
                                </select>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-xs-12 nuevo-perso-form text-center">
                            <button class="col-xs-4 col-xs-offset-1" type="submit">Guardar</button>
                            <button class="col-xs-4 col-xs-offset-1" type="reset" id="cancel_per_nuevo">Cancelar</button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-6 col-xs-offset-3" id="alert_personal">
                        </div>
                    </div>
                    
                </form>                    

            </div>
        </div>
    </div>    