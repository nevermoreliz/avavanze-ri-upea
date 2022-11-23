    <div class="modal_gestiona_carreras" id="modal_gestiona_carreras">
        <div class="col-md-8 col-sm-10 col-xs-10 col-md-offset-2 col-sm-offset-1 col-xs-offset-1 fondo">

            <div class="mod-gestiona-cebecera text-center" id="mod-gestiona-cebecera">
                <p id="cabecera_carreras">CARRERAS</p>  
            </div>
            <span id="cerrar-modal-carreras" class="cerrar-modal icon-cancel-circle"></span>
            <div class="row mod-carreras">
                <div class="col-xs-10 col-xs-offset-1">
                    <form method="POST" id="guardar_conv_carreras">
                        <label class="icon-spell-check"></label>
                        <input type="hidden" name="id_gestiona" id="id_conv_carreras" value="0">
                        <input type="text" name="nombre_gestiona" placeholder="Nombre nuevo registro" required="true" id="nombre_conv_carreras" class="mostrar_titulo">
                        <button type="submit">Guardar</button>
                    </form>
                </div>
                <div class="col-xs-10 col-xs-offset-1 contenedor-general-lista">
                    <div class="contenedor-lista" id="contenedor-lista-carreras">
                        <div class="col-xs-12 title">Todos</div>
                        <div id="ayuda">
                            <div id="items-lista1-carreras">
                                
                            </div>
                            <button class="guardar icon-box-add" id="guardar_items1_carrera"> Guardar<span class="txtimportant"></span></button>
                        </div>
                    </div>
                    <div class="contenedor-lista" id="contenedor-lista2-carreras">
                        <div class="col-xs-12 title">Asignados</div>
                        <div id="items-guardar-carreras">
                            <div class="lista-carreras-asignadas">
                                <div id="primero_carrera">Arrastre aquí...</div>
                            </div>
                            <button class="guardar icon-box-add" id="guardar_items2_carrera"> Guardar<span class="txtimportant edicion"></span></button>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>    