<!--ESTE ES EL MODAL DONDE SEMUESTRAN LOS DETALLES DE CONVENIOS QUE SE TIENEN-->



<div class="col-xs-12">
        <div class="modal_convenio_of" id="modal_convenio">
            <div class="col-md-6 col-sm-8 col-xs-10 col-md-offset-3 col-sm-offset-2 col-xs-offset-1 fondo">
            <span id="ocultar_convenio_modal" class="icon-cancel-circle"></span>
                <div class="col-sm-4">
                    <a href="#">

                        <img class="img-responsive" src="<?php echo base_url()?>" alt="" id="img_convenio" />
                    </a>
                    <span>Carreras: <br><div class="link_orange"><span class="txt_orange"  id="nombre_carrera"></span></div></span><br>
                    <span>Entidad: <br><div class="link_orange"><span class="txt_orange"  id="entidad"></span></div></span> 
                    <br>                                      
                </div>
                <div  class="col-sm-8">
                    <div class="pull-left">
                        <span class="blog_header" id="nombre_convenio"></span><br/>
                        <span>Fecha publicación: <br><a class="link_orange" href="#"><span class="txt_orange"  id="fecha_publicacion"></span></a></span>               
                        <div class="pull-right">
                            <input type="hidden" id="id_carrera" value="">
                            <input type="hidden" id="id_convenios" value="">
                            <button type="button" class="preinscripcion-convenio" id="preinscripcion-convenio">
                                <span class="pre-bing">(</span>
                                <span class="pre-medium">(</span>
                                    Preinscripcion
                                <span class="pre-medium">)</span>
                                <span class="pre-bing">)</span>
                            </button>            
                        </div>
                    </div>
                    <div class="clearfix"> </div>
                    <p class="blog_text" id="objetivo_convenio">
                    </p>
                     
                </div>
            </div>
        </div>         
    
</div>
