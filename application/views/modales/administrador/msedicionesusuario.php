
    <div class="modal_edit_user" id="modal_edit_user">
        <div class="col-md-6 col-sm-8 col-xs-10 col-md-offset-3 col-sm-offset-2 col-xs-offset-1 fondo">
                <span id="close-modal-user" class="cerrar-modal icon-cancel-circle"></span>
                <img src="<?= base_url($this->session->userdata('img')) ?>" class="img_edit_avatar">
            <div class="row mod-user-edition">
                <form method="POST" action="<?php echo base_url('client/Controller_personal/edit_user')?>" id="edit_user_serv" enctype="multipart/form-data">
                    <input type="hidden" name="id_persona" value="<?= $this->session->userdata('id_persona') ?>">
                    <input type="hidden" name="id_usuario" value="<?= $this->session->userdata('id_usuario') ?>">
                    <div class="row">
                        <div class="col-xs-12 nuevo-conv-form">
                        	<div class="columna col-xs-12 col-sm-6 col-md-4" id="imagen_edit_conv">
                                <label for="conv-imagen11" id="lab-conv-imagen11"><span  class="icon-images label-imagen"></span> <span class="texto-imagen">Subir imagen</span></label>
                                <input type="file" name="imagen" id="conv-imagen11"/>
                            </div>
                        	<div class="columna col-xs-12 col-sm-6 col-md-4"><!--nombre-->
                                <label class="icon-spell-check" for="user_nombre" id="lab_user_nombre"></label>
                                <input placeholder="Nombres" type="text" name="nombre" id="user_nombre" required class="mostrar_titulo" value="<?= $this->session->userdata('nombre') ?>" />
                            </div>
                            <div class="columna col-xs-12 col-sm-6 col-md-4"><!--apellidos-->
                                <label class="icon-spell-check" for="user_paterno" id="lab-user_paterno"></label>
                                <input placeholder="Ap. Paterno" type="text" name="paterno" id="user_paterno" required class="mostrar_titulo" value="<?= $this->session->userdata('paterno') ?>" />
                            </div>
                            <div class="columna col-xs-12 col-sm-6 col-md-4"><!--materno-->
                                <label class="icon-spell-check" for="user_materno" id="lab_user_materno"></label>
                                <input placeholder="Ap. Materno" type="text" name="materno" id="user_materno" required class="mostrar_titulo" value="<?= $this->session->userdata('materno') ?>" />
                            </div>
                            <div class="columna col-xs-12 col-sm-6 col-md-4"><!--CI-->
                                <label class="icon-spell-check" for="user_ci" id="lab_user_ci"></label>
                                <input placeholder="Ced. Ident" type="text" name="ci" id="user_ci" required class="mostrar_titulo" value="<?= $this->session->userdata('ci') ?>" />
                            </div>
                            <div class="columna col-xs-12 col-sm-6 col-md-4"><!--TELEFONO-->
                                <label class="icon-spell-check" for="user_telefono" id="lab_user_telefono"></label>
                                <input placeholder="Teléfono" type="text" name="telefono" id="user_telefono" required class="mostrar_titulo" value="<?= $this->session->userdata('telefono') ?>" />
                            </div>
                            <div class="columna col-xs-12 col-sm-6 col-md-4"><!--EMAIL-->
                                <label class="icon-spell-check" for="user_email" id="lab_user_email"></label>
                                <input placeholder="Email" type="text" name="email" id="user_email" required class="mostrar_titulo" value="<?= $this->session->userdata('email') ?>" />
                            </div>
                            <div class="columna col-xs-12 col-sm-6 col-md-4"><!--EMAIL-->
                                <label class="icon-spell-check" for="user_usuario" id="lab_user_usuario"></label>
                                <input placeholder="Nombre de usuario" type="text" name="usuario" id="user_usuario" required class="mostrar_titulo" value="<?= $this->session->userdata('usuario') ?>" />
                            </div>
                            <div class="columna col-xs-12 col-sm-6 col-md-4"><!--ESTADO DEL CONVENIO-->
                                <label class="icon-menu2" for="user-set-pass" id="lab-user-set-pass">&nbsp; Cambiar contraseña&nbsp;</label>
                                <input name="cambiar_pass" type="checkbox" id="user-set-pass" class="toggle-switch"/>
                            </div>
                            <p>-</p>
                            <div class="set_paswwords">
                                <div class="columna col-xs-12 col-sm-6 col-md-4"><!--CONTRASEÑA-->
                                    <label class="icon-spell-check" for="user_password" id="lab_user_password"></label>
                                    <input placeholder="Contraseña" type="password" name="password" id="user_password" class="mostrar_titulo" />
                                </div>
                                <div class="columna col-xs-12 col-sm-6 col-md-4"><!--CONTRASEÑA-->
                                    <label class="icon-spell-check" for="new_user_password" id="lab-new_user_password"></label>
                                    <input placeholder="Nueva contraseña" type="password" name="new_password" id="new_user_password" class="mostrar_titulo" />
                                </div>
                                <div class="columna col-xs-12 col-sm-6 col-md-4"><!--CONTRASEÑA-->
                                    <label class="icon-spell-check" for="new_user_password2" id="lab-new_user_password2"></label>
                                    <input placeholder="Confirma contraseña" type="password" name="new_password2" id="new_user_password2"class="mostrar_titulo" />
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-xs-12 nuevo-perso-form text-center">
                            <button class="col-xs-4 col-xs-offset-1" type="submit">Guardar</button>
                            <button class="col-xs-4 col-xs-offset-1" type="reset" id="cancel_user_edit">Editar</button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-6 col-xs-offset-3" id="alert_user">
                        </div>
                    </div>
                    
                </form>                    

            </div>
        </div>
    </div>    