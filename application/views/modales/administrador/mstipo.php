
    <div class="modal_gestiona_tipo" id="modal_gestiona_tipo">
        <div class="col-md-6 col-sm-8 col-xs-10 col-md-offset-3 col-sm-offset-2 col-xs-offset-1 fondo">

            <div class="mod-gestiona-cebecera text-center" id="mod-gestiona-cebecera">
                <p id="cabecera_tipo">TIPO</p>  
            </div>
            <span id="cerrar-modal-tipo" class="cerrar-modal icon-cancel-circle"></span>
            <div class="row mod-tipo">
                <div class="col-xs-10 col-xs-offset-1">
                    <form method="POST" id="guardar_conv_tipo">
                        <label class="icon-spell-check"></label>
                        <input type="hidden" name="id_gestiona" id="id_conv_tipo" value="0">
                        <input type="text" name="nombre_gestiona" placeholder="Nombre nuevo registro" required="true" id="nombre_conv_tipo"  class="mostrar_titulo">
                        <button type="submit">Guardar</button>
                    </form>
                </div>
                <div class="col-xs-10 col-xs-offset-1 contenedor-general-lista">
                    <div class="contenedor-lista" id="contenedor-lista">
                        <div class="col-xs-12 title">Todos</div>
                        <div id="ayuda">
                            <div id="items-lista-tipo">
                                
                            </div>
                            
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>    