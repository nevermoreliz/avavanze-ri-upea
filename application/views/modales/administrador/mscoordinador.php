
    <div class="modal_nuevo_coordinador" id="modal_nuevo_coordinador">
        <div class="col-md-6 col-sm-8 col-xs-10 col-md-offset-3 col-sm-offset-2 col-xs-offset-1 fondo">
                <div class="mod-personal-cebecera text-center" id="mod-personal-cebecera">
                    <p>NUEVO</p>
                </div>
                <span id="cerrar-modal-coordinador" class="cerrar-modal icon-cancel-circle"></span>
            <div class="row mod-nuevo-personal">
                <form method="POST" action="<?= base_url('client/Controller_contactos/insertar_contactos')?>" id="guardar_coordinador_serv">
                    <div class="row">
                        <div class="col-xs-12 nuevo-perso-form">
                        	<div class="columna col-xs-12 col-sm-6 col-md-4"><!--nombre-->
                                <label class="icon-spell-check" for="coord_nombres" id="lab-coord_nombres"></label>
                                <input placeholder="NOMBRES" type="text" name="nombre_c" id="coord_nombres" required class="mostrar_titulo" />
                            </div>
                            <div class="columna col-xs-12 col-sm-6 col-md-4"><!--apellidos-->
                                <label class="icon-spell-check" for="coord_direccion" id="lab-coord_direccion"></label>
                                <input placeholder="Dirección" type="text" name="direccion_c" id="coord_direccion" required class="mostrar_titulo" />
                            </div>
                            <div class="columna col-xs-12 col-sm-6 col-md-4"><!--materno-->
                                <label class="icon-spell-check" for="coord_telefono" id="lab-coord_telefono"></label>
                                <input placeholder="Teléfono" type="text" name="telefonos_c" id="coord_telefono" required class="mostrar_titulo" />
                            </div>
                            <div class="columna col-xs-12 col-sm-6 col-md-4"><!--CI-->
                                <label class="icon-spell-check" for="coord_email" id="lab-coord_email"></label>
                                <input placeholder="Correo electrónico" type="email" name="email_c" id="coord_email" required class="mostrar_titulo" />
                            </div>
                            <div class="columna col-xs-12 col-sm-6 col-md-4"><!--TELEFONO-->
                                <label class="icon-spell-check" for="coord_carrera" id="lab-coord_carrera"></label>
                                <input placeholder="Carrera" type="text" name="carrera" id="coord_carrera" required class="mostrar_titulo" />
                            </div>
                            <div class="columna col-xs-12 col-sm-6 col-md-4"><!--EMAIL-->
                                <label class="icon-spell-check" for="coord_tipo" id="lab-coord_tipo"></label>
                                <input placeholder="Tipo" type="text" name="tipo" id="coord_tipo" required class="mostrar_titulo" />
                            </div>
                            <div class="columna col-xs-12 col-sm-6 col-md-4"><!--ESTADO DEL USUARIO-->
                                <label class="icon-menu2">&nbsp; Estado&nbsp;</label>
                                <input name="activo" type="checkbox" class="toggle-switch" checked/>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-xs-12 nuevo-perso-form text-center">
                            <button class="col-xs-4 col-xs-offset-1" type="submit">Guardar</button>
                            <button class="col-xs-4 col-xs-offset-1" type="reset" id="cancel_coord_nuevo">Cancelar</button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-6 col-xs-offset-3" id="alert_coordinador">
                        </div>
                    </div>
                    
                </form>                    

            </div>
        </div>
    </div>    