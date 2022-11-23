
    <div class="modal_nuevo_convenio" id="modal_nuevo_convenio">
        <div class="col-md-6 col-sm-8 col-xs-10 col-md-offset-3 col-sm-offset-2 col-xs-offset-1 fondo">
                <div class="mod-conv-cebecera text-center" id="mod-conv-cebecera">
                    
                </div>
                <span id="cerrar-modal-convenios" class="cerrar-modal icon-cancel-circle"></span>
            <div class="row mod-nuevo-convenio">
                <form method="POST" action="<?php echo base_url('client/Controller_convenios/insertar_convenios')?>" id="guardar_convenios_serv" enctype="multipart/form-data">
                    <div id="edit_id_convenios"></div>
                    <div class="row">
                        <div class="col-xs-12 nuevo-conv-form">
                            <div class="columna_conv col-xs-12 col-sm-6 col-md-6"><!--GESTION-->
                                <label class="icon-menu2" id="lab-conv-gestiones">&nbsp; Asignar gestiones&nbsp;<span class="edicion txtimportant" id="carga_gestiones_conv"></span></label>
                                
                            <div id="input_gestiones_conv"></div>

                            </div>
                            <div class="columna_conv col-xs-12 col-sm-6 col-md-6"><!--TIPO DE CONVENIO-->
                                <label class="icon-menu2" for="conv-tipo" id="lab-conv-tipo">&nbsp; Tipo</label>
                                <select name="tipo" id="conv-tipo" required="false">
                                    
                                </select>
                                <span class="edicion icon-cog txtimportant" id="carga_tipo_conv"></span>
                            </div>                            
                            <div class="columna_conv col-xs-12 col-sm-12 col-md-12"><!--NOMBRE DEL CONVENIO-->
                                <label class="icon-spell-check col-md-2" for="conv-nombre" id="lab-conv-nombre"></label>
                                <textarea placeholder="Nombre de Convenio" type="text" name="nombre" id="conv-nombre" required="false" class="mostrar_titulo col-md-10" rows="3" ></textarea>
                            </div>
                            <div class="columna_conv col-xs-12 col-sm-12 col-md-12"><!--OBJETIVO DEL CONVENIO-->
                                <label class="icon-spell-check col-md-2" for="conv-objetivo" id="lab-conv-objetivo"></label>
                                <textarea placeholder="Objetivo del Convenio" type="text" name="objetivo" id="conv-objetivo" required="false" class="mostrar_titulo col-md-10" rows="5" ></textarea>
                            </div>
                            <div class="columna_conv col-xs-12 col-sm-12 col-md-12">
                            </div>
                            
                             <div class="columna_conv col-xs-12 col-sm-6 col-md-4"><!--ASIGNAR CARRERA A CONVENIO-->
                                <label class="icon-menu2" id="lab-conv-carreras">&nbsp; Asignar carreras&nbsp;<span class="edicion txtimportant" id="carga_carreras_conv"></span></label>
                                <div id="asignar_conv_carreras"></div>
                            </div>
                            <div class="columna_conv col-xs-12 col-sm-6 col-md-4" id="imagen_edit_conv"><!--IMAGEN DEL CONVENIO-->
                                <label for="conv-imagen" id="lab-conv-imagen"><span  class="icon-image label-imagen"></span> <span class="texto-imagen">Subir imagen</span></label>
                                <input type="file" name="imagenup" id="conv-imagen"/>
                            </div>
                            <div class="columna_conv col-xs-12 col-sm-6 col-md-4" id="pdf_edit_conv"><!--pdf DEL CONVENIO-->
                                <label for="conv-pdf" id="lab-conv-pdf"><span  class="icon-file-pdf label-pdf"></span> <span class="texto-pdf">Subir pdf</span></label>
                                <input type="file" name="pdfup" id="conv-pdf"/>
                                <span id="conv-pdf_name"></span>
                            </div>
                            <div class="columna_conv col-xs-12 col-sm-12 col-md-12">
                            </div>
                           
                            <!--TIEMPO DURACIÓN DE Convenio-->
                            <!--<div class="columna_conv col-xs-12 col-sm-6 col-md-4">
                                <label class="icon-spell-check" for="conv-duracion" id="lab-conv-duracion"></label>
                                <input placeholder="Duración del Convenio" type="text" name="duracion" id="conv-duracion" class="mostrar_titulo" />
                            </div>-->

  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
                            
  <script>
  $( function() {
    $( "#conv-firma" ).datepicker({ dateFormat: "yy-mm-dd" }).val()
    $( "#conv-finalizacion" ).datepicker({ dateFormat: "yy-mm-dd" }).val()
  } );
  </script>
     
                            <div class="columna_conv col-xs-12 col-sm-6 col-md-4">
                                <label class="icon-spell-check" for="conv-duracion" id="lab-conv-duracion"></label>
                                <input placeholder="Fecha firma convenio" type="text" name="firma" id="conv-firma" class="mostrar_titulo" />
                            </div>
                            <div class="columna_conv col-xs-12 col-sm-6 col-md-4">
                                <label class="icon-spell-check" for="conv-duracion" id="lab-conv-duracion"></label>
                                <input placeholder="Fecha finalizacion convenio" type="text" name="finalizacion" id="conv-finalizacion" class="mostrar_titulo" />
                            </div>
                            <div class="columna_conv col-xs-12 col-sm-6 col-md-4"><!--NOMBRE DE LA ENTIDAD-->
                                <label class="icon-spell-check" for="conv-entidad" id="lab-conv-entidad"></label>
                                <input placeholder="Nombre de la entidad" type="text" name="entidad" id="conv-entidad" class="mostrar_titulo" />
                            </div>
                            
                            <div class="columna_conv col-xs-12 col-sm-6 col-md-4"><!--DIRECCION-->
                                <label class="icon-spell-check" for="conv-direccion" id="lab-conv-direccion"></label>
                                <input placeholder="Direccion de la Entidad" type="text" name="direccion" id="conv-direccion" class="mostrar_titulo" />
                            </div> 
                            <div class="columna_conv col-xs-12 col-sm-6 col-md-4"><!--TELEFONO DE LA ENTIDAD-->
                                <label class="icon-spell-check" for="conv-telefono" id="lab-conv-telefono"></label>
                                <input placeholder="Teléfono de la entidad" type="number" name="telefono" id="conv-telefono" class="mostrar_titulo" />
                            </div>
                            <div class="columna_conv col-xs-12 col-sm-6 col-md-4"><!--CORREO DE LA ENTIDAD-->
                                <label class="icon-spell-check" for="conv-email" id="lab-conv-email"></label>
                                <input placeholder="Correo de la entidad" type="email" name="email" id="conv-email" class="mostrar_titulo" required="false" />
                            </div>
                            
                            <div class="columna_convv col-xs-12 col-sm-6 col-md-4"><!--ESTADO-->
                                <label class="icon-menu2" for="conv-estadov" id="lab-conv-estadov">&nbsp; Estado (concluido/activo)&nbsp;</label>
                                <input name="estadov" type="checkbox" id="conv-estadov" class="toggle-switch" checked="" />
                            </div>
                            <div class="columna_conv col-xs-12 col-sm-6 col-md-4"><!--ESTADO DEL CONVENIO-->
                                <label class="icon-menu2" for="conv-estado" id="lab-conv-estado">&nbsp; Depuración (eliminacion/publico) &nbsp;</label>
                                <input name="estado" type="checkbox" id="conv-estado" class="toggle-switch" checked="" />
                            </div>
                            

                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-xs-12 nuevo-conv-form text-center">
                            <button class="col-xs-4 col-xs-offset-1" type="submit">Guardar</button>
                            <button class="col-xs-4 col-xs-offset-1" type="reset" id="cancel_conv_nuevo">Cancelar</button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-6 col-xs-offset-3" id="alert_convenio">
                        </div>
                    </div>
                    
                </form>                    

            </div>
        </div>
    </div>    