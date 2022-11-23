<div class="col-xs-12">
    <div class="modal_preinscripcion_of" id="modal_preinscripcion">
    	<div class="col-md-4 col-sm-6 col-xs-8 col-md-offset-4 col-sm-offset-3 col-xs-offset-2 fondo">
    		<div class="row">
                <div class="preinscripcion-cebecera text-center">
                    <p class="icon-pencil2"> Preinscripción..</p>  
                </div>
            </div>
            <div class="row preinscripcion">
                <div class="col-xs-12" id="pre-nombre-convenio"></div>
                <form method="POST" action="<?php echo base_url('client/Controller_preinscripcion/insertar_preinscripcion')?>" id="guardar_preinscripcion">
                    <div class="scroll_modal"><!--EMPIEZA SXROLL MODAL-->
                    <div class="row">
                        <div class="col-xs-12 preinscripcion-form">
                            <div class="col-xs-10 col-xs-offset-1">
                                <label class="icon-spell-check" for="pre_ru" id="lab_ru"></label>
                                <input placeholder="Registro universitario" type="number" name="ru" id="pre_ru" required="true"/>
                            </div>                                
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 preinscripcion-form">
                            <div class="col-xs-10 col-xs-offset-1">
                                <label class="icon-spell-check" for="pre_ci" id="lab_ci"></label>
                                <input placeholder="Cedula de identidad" type="number" name="ci" id="pre_ci" required="true"/>
                            </div>                                
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 preinscripcion-form">
                            <div class="col-xs-10 col-xs-offset-1">
                                <label class="icon-spell-check" for="pre_nombres" id="lab_nombres"></label>
                                <input placeholder="Nombres" type="text" name="nombres" id="pre_nombres" required="true" maxlength="45"/>
                            </div>                                
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 preinscripcion-form">
                            <div class="col-xs-10 col-xs-offset-1">
                                <label class="icon-spell-check" for="pre_paterno" id="lab_paterno"></label>
                                <input placeholder="Ap. paterno" type="text" name="paterno" id="pre_paterno" required="true" maxlength="45"/>
                            </div>                                
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 preinscripcion-form">
                            <div class="col-xs-10 col-xs-offset-1">
                                <label class="icon-spell-check" for="pre_materno" id="lab_materno"></label>
                                <input placeholder="Ap. materno" type="text" name="materno" id="pre_materno" required="true" maxlength="45"/>
                            </div>                                
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 preinscripcion-form">
                            <div class="col-xs-10 col-xs-offset-1">
                                <label class="icon-spell-check" for="pre_telefono" id="lab_telefono"></label>
                                <input placeholder="Telefono" type="text" name="telefono" id="pre_telefono" required="true" maxlength="45"/>
                            </div>                                
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 preinscripcion-form">
                            <div class="col-xs-10 col-xs-offset-1">
                                <label class="icon-spell-check" for="pre_email" id="lab_email"></label>
                                <input placeholder="Correo electrónico" type="email" name="email" id="pre_email" maxlength="45"/>
                            </div>                                
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <input type="hidden" name="id_convenios" id="pre_id_convenio" value=""/>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 preinscripcion-form">
                            <div class="col-xs-10 col-xs-offset-1">
                                <label class="icon-menu2" for="pre_categoria" id="lab_categoria">&nbsp; Categoria</label>
                                <select name="categoria" id="pre_categoria" required>
                                    
                                </select>
                            </div>                                
                        </div>
                    </div>
                    <div class="row preinscripcion_carreras">
                        <div class="col-xs-12 preinscripcion-form">
                            <div class="col-xs-10 col-xs-offset-1">
                                <label class="icon-menu2" for="pre_carrera" id="lab_carrera">&nbsp; Carrera</label>
                                <select name="id_carrera" id="pre_carrera">
                                    
                                </select>
                            </div>                                
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 preinscripcion-form">
                            <div class="col-xs-10 col-xs-offset-1">
                                <label class="icon-menu2" for="pre_gestion" id="lab_gestion">&nbsp; Gestión</label>
                                <select name="gestion" id="pre_gestion" required="true">
                                    
                                </select>
                            </div>                                
                        </div>
                    </div>
                </div><!--TERMINAL SCROLL MODAL-->
                    <div class="row">
                        <div class="col-xs-12 preinscripcion-form">
                            <button class="col-xs-4 col-xs-offset-1" type="submit">Preinscribir</button>
                            <button class="col-xs-4 col-xs-offset-1" type="reset" id="ocultar_preinscripcion_modal">Cancelar</button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-6 col-xs-offset-3" id="alert_preinscripcion">
                        </div>
                    </div>
                </form>                    
            </div>
    	</div>
    </div>    
</div>