	<!--service-->
	<div id="service">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-md-6 col-md-offset-3">
					<div class="service-heading">
						<h2>Publicaciones</h2>
						<!--<p>Aqui, muestra las publicaciones de Convenios y ofertas de Becas entre otros.</p>-->
					</div>
				</div>
			</div>
		</div>

		
		
        <div class="container-fluid">
        <div class="row">		
			
			
            <div class="col-md-2 col-sm-2 col-xs-12">
                <h3>Noticias</h3>
                <?php foreach($noticias as $value){ ?>
                <div class="container col-md-12">
                <a href="<?php echo site_url('ini/'.$value->id_publicaciones) ?>" target="_blank">
                <center>
                    <div class="fh5co-card-item">
                        <p class=""><?php echo $value->titulo;//strtolower ?> </p>
                    </div>
                </center></a>
                </div>
                <?php } ?>
                
                <!--<h3>Enlaces</h3>
                 <?php if(!empty($enlace)){ foreach($enlace as $value){ ?> 
                <a href="<?php echo $value->links_enlace; ?>">
                 <div class="fh5co-card-item">
                   <img src="<?php echo base_url().$value->url_enlace?>" style="width:150px;" alt="">
                </div>
                </a>
                <?php } } ?>-->
                
           <?php $contador='0'; if(!empty($enlace)){ foreach($enlace as $value){ ?>    
            <h3><a class="btn btn-link" data-toggle="collapse" data-target="#collapseExample<?= $value->id_enlace?>" aria-expanded="true" aria-controls="collapseExample<?= $value->id_enlace?>">
            <?php echo strtoupper($value->tipo_enlace);  ?>
            </a></h3>

            <div class="collapse <?php if($value->tipo_enlace=='enlace') echo "show";?>" id="collapseExample<?= $value->id_enlace?>">
              <div class="card card-body">
                    <?php $enlazados= $this->Modelo_funcionesregis->consultaGeneral('result','enlace','estado','1',"and tipo_enlace='$value->tipo_enlace'  ORDER BY orden ");  ?>
                      <?php if(!empty($enlazados)){ foreach($enlazados as $valu){ ?>  
                          <a class="fh5co-card-item" href="<?php echo $valu->links_enlace; ?>">
                       <img src="<?php echo base_url().$valu->url_enlace?>" style="width:150px;" alt="">
                        </a>
                      <?php } } ?>
              </div>
            </div>
         
           <?php } } ?> 

        </div>
                
            <div class="col-md-10 col-sm-10 col-xs-10">
               
                <?php if(!empty($publicacion)){ ?>  
                <div class="item col-lg-12 col-md-12 col-sm-12">
                    <div>
						<center>
                            <div class="overlay"><i class="ti-plus"></i></div>
							<img src="<?php echo base_url().$publicacion->url ?>" class="img-responsive" alt="Image" >
						</center>
						<div class="fh5co-text">
                            <h1><center><span class="price cursive-font"><?php echo $publicacion->titulo ?></span></center></h1>
                            <h3><?php echo $publicacion->subtitulo ?></h3>
                            <p><?php echo $publicacion->correlativo.'</br>'.$publicacion->fecha ?></p>
                            <p><?php echo $publicacion->descripcion ?></p>
                        </div>
				    </div>
				</div>
				
                <?php if(!empty($publicacion->links)){ ?>
                <div class="service-footer-left col-md-6">
                    <a href="<?php echo $publicacion->links ?>">
                    <div class="fh5co-card-item">
                    <h3> <span>Enlace</span> ? </h3>
                    <p>Click para mas informacion...</p>
                    </div></a>
                </div>
                <?php } ?>
				
				<?php $archivo=$this->Model_publicaciones->mostrar_archivo_publicaciones($publicacion->id_publicaciones);  
				foreach($archivo as $arc) {?>
                <div class="service-footer-left col-md-12">
                    <a href="<?= base_url($arc->nombre_archivo); ?>">
                    <div class="fh5co-card-item">
						</br>
                    <h3> <span><?php $var=explode("/",$arc->nombre_archivo); echo end($var); ?></span> . </h3>
                    <p>Descargar archivo Aquí...</p>
                    </div></a>
                </div>
                <?php } ?>
				
				
               
                
                
                <?php } ?>
                
                
                <?php $tipo=''; if(!empty($publicaciones)){ foreach($publicaciones as $value){ ?>  
                <?php if($tipo!=$value->tipo_publicaciones){ $tipo=$value->tipo_publicaciones; ?>
                <div class="row col-md-12">
                <section class="top-nav hidden-xs">
                    <h2><?= $value->tipo_publicaciones; ?></h2>
                </section>
                </div>
                <?php } ?>
                <div class="item col-lg-4 col-md-4 col-sm-4">
					<a href="<?php echo site_url('ini/'.$value->id_publicaciones) ?>" class="fh5co-card">
                    <div class="fh5co-card-item">
						<figure>
							<div class="overlay"><i class="ti-plus"></i></div>
							<img src="<?php echo base_url().$value->url ?>" alt="Image" class="img-responsive">
						</figure>
						<div class="fh5co-text">
							<h2><span class="price"><?php echo $value->titulo ?></span></h2>	
                            <p><?php echo substr($value->descripcion,0,60).'...' ?></p>
                        </div>
				    </div>
					</a>
				</div>
                <?php } } ?>
                
             
             
           <!-- <div class="service-footer-left">
                <div class="fh5co-card-item">
				<h3> <span>Mas</span> ? </h3>
				<p>Revisar para mas publicaciones...</p>
                </div>
            </div>-->
						
						
				
                
            </div>
        </div>
        </div>
          


	</div>
    

