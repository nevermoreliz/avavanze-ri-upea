
    <div class="modal_gestiona_gestiones" id="modal_gestiona_gestiones">
        <div class="col-md-6 col-sm-8 col-xs-10 col-md-offset-3 col-sm-offset-2 col-xs-offset-1 fondo">

            <div class="mod-gestiona-cebecera text-center" id="mod-gestiona-cebecera">
                <p id="cabecera_gestiones"></p>  
            </div>
            <span id="cerrar-modal-gestiones" class="cerrar-modal icon-cancel-circle"></span>
            <div class="row mod-gestiones">
                <div class="col-xs-10 col-xs-offset-1">
                    <form method="POST" id="guardar_conv_gestiones">
                        <label class="icon-spell-check"></label>
                        <input type="hidden" name="id_gestiona" id="id_conv_gestiona" value="0">
                        <input type="text" name="nombre_gestiona" placeholder="Nombre nuevo registro" required="true" id="nombre_conv_gestiona" class="mostrar_titulo">
                        <button type="submit">Guardar</button>
                    </form>
                </div>
                <div class="col-xs-10 col-xs-offset-1 contenedor-general-lista">
                    <div class="contenedor-lista" id="contenedor-lista1">
                        <div class="col-xs-12 title">Todos</div>
                        <div id="ayuda">
                            <div id="items-lista-gestion">
                                
                            </div>
                            <button class="guardar icon-box-add" id="guardar-items1"> Guardar<span class="txtimportant"></span></button>
                        </div>
                    </div>
                    <div class="contenedor-lista" id="contenedor-lista2">
                        <div class="col-xs-12 title">Asignados</div>
                        <div id="items-guardar-gestion">
                            <div class="datos">
                                <div id="primero">Arrastre aquí...</div>
                            </div>
                            <button class="guardar icon-box-add" id="guardar-items2"> Guardar<span class="txtimportant edicion"></span></button>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>    