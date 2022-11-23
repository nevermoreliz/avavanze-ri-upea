
    <div class="modal_nuevo_publicaciones" id="modal_nuevo_publicaciones">
        <div class="col-md-6 col-sm-8 col-xs-10 col-md-offset-3 col-sm-offset-2 col-xs-offset-1 fondo">
                <div class="mod-conv-cebecera text-center" id="mod-conv-cebecerass">
                    
                </div>
                <span id="cerrar-modal-convenioss" class="cerrar-modal icon-cancel-circle"></span>
            <div class="row mod-nuevo-convenio">
                <form method="POST" action="<?php echo base_url('client/Controller_convenios/insertar_convenioss')?>" id="guardar_convenios_servs" enctype="multipart/form-data">
                    <div id="edit_id_convenioss"></div>
                    <div class="row">
                        <div class="col-xs-12 nuevo-conv-form">
                            
                                                    
                            <div class="columna_conv col-xs-12 col-sm-6 col-md-4"><!--NOMBRE DEL CONVENIO-->
                                <label class="icon-spell-check" for="conv-nombre" id="lab-conv-nombre"></label>
                                <textarea placeholder="Nombre de Convenio" type="text" name="nombres" id="conv-nombres" required="false" class="mostrar_titulo"></textarea>
                            </div>
                            <div class="columna_conv col-xs-12 col-sm-6 col-md-4"><!--OBJETIVO DEL CONVENIO-->
                                <label class="icon-spell-check" for="conv-objetivo" id="lab-conv-objetivo"></label>
                                <textarea placeholder="Objetivo del Convenio" type="text" name="objetivos" id="conv-objetivos" required="false" class="mostrar_titulo"></textarea>
                            </div>
                            <div class="columna_conv col-xs-12 col-sm-6 col-md-4" id="imagen_edit_convs"><!--IMAGEN DEL CONVENIO-->
                                <label for="conv-imagen" id="lab-conv-imagens"><span  class="icon-image label-imagen"></span> <span class="texto-imagen">Subir imagen</span></label>
                                <input type="file" name="imagens" id="conv-imagens"/>
                            </div>
                            <div class="columna_conv col-xs-12 col-sm-6 col-md-4" id="pdf_edit_convs"><!--pdf DEL CONVENIO-->
                                <label for="conv-pdf" id="lab-conv-pdfs"><span  class="icon-file-pdf label-pdf"></span> <span class="texto-pdf">Subir pdf</span></label>
                                <input type="file" name="pdfs" id="conv-pdfs"/>
                            </div>
                            <div class="columna_conv col-xs-12 col-sm-6 col-md-4"><!--TIEMPO DURACIÓN DE Convenio-->
                                <label class="icon-spell-check" for="conv-duracion" id="lab-conv-duracions"></label>
                                <input placeholder="Duración del Convenio" type="text" name="duracions" id="conv-duracions" class="mostrar_titulo" />
                            </div>
                            <div class="columna_conv col-xs-12 col-sm-6 col-md-4"><!--DIRECCION-->
                                <label class="icon-spell-check" for="conv-direccion" id="lab-conv-direccions"></label>
                                <input placeholder="Direccion de la Entidad" type="text" name="direccion" id="conv-direccions" class="mostrar_titulos" />
                            </div>                            
                            <div class="columna_conv col-xs-12 col-sm-6 col-md-4"><!--NOMBRE DE LA ENTIDAD-->
                                <label class="icon-spell-check" for="conv-entidad" id="lab-conv-entidads"></label>
                                <input placeholder="Nombre de la entidad" type="text" name="entidads" id="conv-entidads" class="mostrar_titulo" />
                            </div>
                            <div class="columna_conv col-xs-12 col-sm-6 col-md-4"><!--TELEFONO DE LA ENTIDAD-->
                                <label class="icon-spell-check" for="conv-telefono" id="lab-conv-telefono"></label>
                                <input placeholder="Teléfono de la entidad" type="number" name="telefonos" id="conv-telefonos" class="mostrar_titulo" />
                            </div>
                            <div class="columna_conv col-xs-12 col-sm-6 col-md-4"><!--CORREO DE LA ENTIDAD-->
                                <label class="icon-spell-check" for="conv-email" id="lab-conv-emails"></label>
                                <input placeholder="Correo de la entidad" type="email" name="emails" id="conv-emails" class="mostrar_titulo" />
                            </div>
                            <div class="columna_conv col-xs-12 col-sm-6 col-md-4"><!--ESTADO DEL CONVENIO-->
                                <label class="icon-menu2" for="conv-estado" id="lab-conv-estados">&nbsp; Estado&nbsp;</label>
                                <input name="estados" type="checkbox" id="conv-estados" class="toggle-switch" checked="" />
                            </div>
                           

                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-xs-12 nuevo-conv-form text-center">
                            <button class="col-xs-4 col-xs-offset-1" type="submit">Guardar</button>
                            <button class="col-xs-4 col-xs-offset-1" type="reset" id="cancel_conv_nuevoss">Cancelar</button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-6 col-xs-offset-3" id="alert_convenios">
                        </div>
                    </div>
                    
                </form>                    

            </div>
        </div>
    </div>    