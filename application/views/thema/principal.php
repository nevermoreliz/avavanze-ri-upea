<!--slider-->
	<div id="slider" class="flexslider">

		<ul class="slides">
			<li>
				<img src="<?php echo base_url()?>assets/nuevotemplate/MyBiz/images/slider/slider1.jpg" style="width: 1900px;height: 650px;">

				<div class="caption">
					<h2><span>DRNI</span></h2>					
				</div>

			</li>
			<li>
				<img src="<?php echo base_url()?>assets/nuevotemplate/MyBiz/images/slider/slider2.jpg" style="width: 1900px;height: 650px;">

				<div class="caption">
					<h2><span></span></h2>
					
				</div>

			</li>
			<li>
				<img src="<?php echo base_url()?>assets/nuevotemplate/MyBiz/images/slider/slider3.jpg" style="width: 1900px;height: 650px;">

				<div class="caption">
					<h2><span>www.rrnnii.upea.bo</span></h2>
				</div>

			</li>
		</ul>

	</div>






	<!--service-->
	<div id="service">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-md-6 col-md-offset-3">
					<div class="service-heading">
						<h2>Publicaciones</h2>
						<p>Aqui, muestra las publicaciones de Convenios y ofertas de Becas entre otros.</p>
					</div>
				</div>
			</div>
		</div>

		
		
        <div class="container-fluid">
        <div class="row">		
			
			
            <div class="col-md-2 col-sm-2 col-xs-12">
                <h3>Noticias</h3>
                <?php if(!empty($noticias)){ foreach($noticias as $value){ ?>
                <div class="container col-md-12">
                <a href="<?php echo site_url('ini/'.$value->id_publicaciones) ?>" target="_blank">
                <center>
                    <div class="fh5co-card-item">
                        <p class=""><?php echo $value->titulo;//strtolower ?> </p>
                    </div>
                </center></a>
                </div>
                <?php } } ?>
                
                
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
                
                
                
                <!--<h3>Enlaces</h3>
                <?php if(!empty($enlace)){ foreach($enlace as $value){ ?> 
                <a href="<?php echo $value->links_enlace; ?>">
                 <div class="fh5co-card-item">
                   <img src="<?php echo base_url().$value->url_enlace?>" style="width:150px;" alt="">
                </div>
                </a>
                <?php } } ?>-->
                <!--<div class="fh5co-card-item">
                   <img src="<?php echo base_url()?>assets/nuevotemplate/MyBiz/images/client/client1.png" alt="">
				</div>
                <div class="fh5co-card-item">
                   <img src="<?php echo base_url()?>assets/nuevotemplate/MyBiz/images/client/client3.png" alt="">
				</div>
                <div class="fh5co-card-item">
                   <img src="<?php echo base_url()?>assets/nuevotemplate/MyBiz/images/client/client4.png" alt="">
				</div>
                <div class="fh5co-card-item">
                   <img src="<?php echo base_url()?>assets/nuevotemplate/MyBiz/images/client/client5.png" alt="">
				</div>-->
                
            </div>
                
            <div class="col-md-10 col-sm-10 col-xs-10">
               
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
							<img src="<?php echo base_url().$value->url ?>">
						</figure>
						<div class="fh5co-text">
							<p><span class=""><?php echo $value->titulo ?></span></p>	
                        </div>
				    </div>
					</a>
				</div>
                <?php } } ?>
              
                
                <!--<div class="item col-lg-4 col-md-4 col-sm-4">
					<a href="javascript:openDialog('#modalPublicaciones');" class="fh5co-card image-popup">
                    <div class="fh5co-card-item image-popup">
						<figure>
							<div class="overlay"><i class="ti-plus"></i></div>
							<img src="<?php echo base_url()?>assets/nuevotemplate/MyBiz/savory/images/img_1.jpg" alt="Image" class="img-responsive">
						</figure>
						<div class="fh5co-text">
							<h2><span class="price cursive-font">Convenios Internacionales</span></h2>	
                        </div>
				    </div>
					</a>
				</div>-->
						
             
            <div class="service-footer-left">
                <a href="<?php echo site_url('init') ?>">
                <div class="fh5co-card-item">
				<h3> <span>Mas</span> ? </h3>
				<p>Revisar para mas publicaciones...</p>
                </div>
                </a>
            </div>
						
						
				
                
            </div>
        </div>
        </div>
          


	</div>
    




	<!--portfolio-->
	<div id="portfolio">
		<div class="container">
			<div class="row">

				<div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
					<div class="portfolio-heading">
						<h2>Actividades</h2>
						<p>Oferta de Becas y Convenios.</p>
					</div>
				</div>

			</div>
		</div>

		<div class="portfolio-thumbnail">
			<div class="container-fluid">
				<div class="row">

					<div class="col-xs-12 col-sm-3 col-md-3">
                        <a href="<?php echo site_url('rni/ci')?>">
						<div class="item col-xs-12 col-sm-12 col-md-12">
							<img src="<?php echo base_url()?>assets/nuevotemplate/MyBiz/images/portfolio/portfolio1.jpg" alt="">
							<div class="caption">
								<i class="fa fa-search" aria-hidden="true"></i>
								<p>Convenios Internacionales</p>
							</div>
                            </div> </a>
				        
                        <a href="<?php echo site_url('rni/cn')?>">
                        <div class="item col-xs-12 col-sm-12 col-md-12">
							<img src="<?php echo base_url()?>assets/nuevotemplate/MyBiz/images/portfolio/portfolio3.jpg" alt="">
							<div class="caption">
								<i class="fa fa-search" aria-hidden="true"></i>
								<p>Convenios Nacionales</p>
							</div>
						</div>
                            </a>
					</div>

					<div class="col-xs-12 col-sm-6 col-md-6">
                        <?php if(!empty($embajada)){ foreach($embajada as $value){ ?> 
						<div class="item col-xs-3 col-sm-3 col-md-3">
                            <a href="<?php echo $value->links_enlace ?>">
                            <img src="<?php echo base_url().$value->url_enlace ?>" alt="">
							<div class="caption">
								<i class="fa fa-search" aria-hidden="true"></i>
								<p>Embajadas</p>
							</div>
                            </a>
						</div>
                        <?php } } ?>
                        
                         <?php if(!empty($enlazados)){ foreach($enlazados as $value){ ?> 
						<div class="item col-xs-3 col-sm-3 col-md-3">
                            <a href="<?php echo $value->links_enlace ?>">
                            <img src="<?php echo base_url().$value->url_enlace ?>" alt="">
							<div class="caption">
								<i class="fa fa-search" aria-hidden="true"></i>
								<p>Embajadas</p>
							</div>
                            </a>
						</div>
                        <?php } } ?>
                        
                        
                        
					</div>

					<div class="col-xs-12 col-sm-3 col-md-3">
                        <a href="<?php echo site_url('rni/ofb')?>">
						<div class="item col-xs-12 col-sm-12 col-md-12">
							<img src="<?php echo base_url()?>assets/nuevotemplate/MyBiz/images/portfolio/portfolio5.jpg" alt="">
							<div class="caption">
								<i class="fa fa-search" aria-hidden="true"></i>
								<p>Oferta de Becas</p>
							</div>
						</div>
                        </a>
					   
                        <a href="<?php echo site_url('rni/ofi')?>">
						<div class="item col-xs-12 col-sm-12 col-md-12">
							<img src="<?php echo base_url()?>assets/nuevotemplate/MyBiz/images/portfolio/portfolio4.jpg" alt="">
							<div class="caption">
								<i class="fa fa-search" aria-hidden="true"></i>
								<p>Oferta de Idiomas</p>
							</div>
						</div>
                        </a>
					</div>

				</div>
			</div>
		</div>
	</div>









    <!--client-->
	<div id="about">
		<div class="container">
			<div class="row">

				<!--slider-->
            <div id="slider" class="flexslider">
                <ul class="slides">
                    <li>
                        <div class="container">
                                        <div class="row">
                                            <div class="col-md-10 text-center">
                                                <div class="testimonial_caption">
                                                   <!-- DESCRIPTION -->  
                                                    <h2 class="cursive-font">MISION</h2>
                                                    <h4><span></span></h4>
                                                    <p>“La Dirección de Relaciones Nacionales e Internacionales DRNI de la UPEA, es la encargada de la internacionalización del conocimiento académico, científico, tecnológico, de Interacción Social e Investigación en todos los campos del conocimiento, para fortalecer y expandir los vínculos internacionales con universidades nacionales y extranjeras; de beneficio para docentes y estudiantes.”</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                    </li>
                    <li>
                            <div class="container">
                                        <div class="row">
                                            <div class="col-md-10 text-center">
                                                <div class="testimonial_caption">
                                                <!-- DESCRIPTION --> 
                                                    <h2 class="cursive-font">VISION</h2>
                                                    <h4><span></span></h4>
                                                    <p>“Profundizar los procesos de coordinación, gestión, formalización y seguimiento de programas estratégicos y los acuerdos de cooperación con universidades nacionales y del exterior, así como las instituciones académicas, instituciones públicas, privadas, embajadas, consulados y organizaciones bilaterales y multilaterales que coadyuven en el proceso de internalización de la Educación Superior.”</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                    </li>
                    <li>
                        <div class="container">
                                        <div class="row">
                                            <div class="col-md-10 text-center">
                                                <div class="testimonial_caption">
                                                <!-- DESCRIPTION --> 
                                                    <h2 class="cursive-font">OBJETIVOS</h2>
                                                    <p>1.- Promover el fortalecimiento de las relaciones de la Universidad Pública de El Alto (UPEA), con instituciones Nacionales, Internacionales relacionadas con la Educación Superior.
                                                    2.- Promover el intercambio de docentes y estudiantes con universidades del exterior.
                                                    3.- Gestionar financiamiento para la ejecución de programas y proyectos de investigación tecnológica en todas las áreas del conocimiento insertados en el Plan de desarrollo del a UPEA.
                                                    4.- Gestionar la concreción de convenios de cooperación bilateral y multilateral con instituciones extranjeras y nacionales.
                                                    5.- Fortalecer las actividades de investigación ciencia y tecnología a través de la realización de conferencias internacionales, talleres, seminarios en todos los campos del conocimiento dirigido a la comunidad universitaria en temas de actualidad.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                    </li>
                    <li>
                        <div class="container">
                                        <div class="row">
                                            <div class="col-md-10 text-center">                           
                                                <div class="testimonial_caption">
                                                <!-- DESCRIPTION --> 
                                                    <h2 class="cursive-font">FUNCIONES Y SERVICIOS</h2>
                                                    <p>Establecer niveles de coordinación con los decanos, directores de carrera, coordinadores de investigación y centro de estudiantes.
                                                    Coordinar las acciones relacionadas a la Cooperación Internacional e Institucional.
                                                    Seguimiento de convenios existentes.
                                                    Realizar la proposición de nuevos instrumentos de cooperación.
                                                    Impulsar el desarrollo de Proyectos de Investigación con instituciones con las cuales se tienen convenio.
                                                    Programar visitas a otras Instituciones de Educación Superior con vista a identificar posibilidades de cooperación y desarrollo de proyectos conjuntos.
                                                    Difundir informaciones relativas a ofertas de estudio en el extranjero.
                                                    Asesorar a los estudiantes y docentes extranjeros en todo lo referente a su estadía en el país.

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                    </li>
                    <li>
                        <div class="item">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-10 text-center">
                                                <div class="testimonial_caption">
                                                <!-- DESCRIPTION --> 
                                                <h2 class="cursive-font"> LINEAS DE ACCION</h2>
                                               <p>La Dirección de Relaciones Nacionales e Internacionales, propone trabajar las siguientes líneas de acción:
                                                <p>Promoción de la información y filiación de entidades de cooperación.
                                                Gestión y fortalecimiento académico vía intercambio de docentes y estudiantes.
                                                La Promoción y fortalecimiento de la investigación científica - tecnológica.
                                                El fortalecimiento de los procesos de Interacción Social y Extensión Universitaria.
                                                Programas de Becas.</p>  
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                    </li>
                    
                </ul>

            </div>

			</div>
		</div>
	</div>
    
    



<!-- =========================
     Start APPS SCREEN SECTION
============================== 
<div  class="apps_screen page" id="SCREENS">
		<div class="container">
			<div class="row">

            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1 wow fadeInBig" data-wow-duration="1s">
                       
                        <div class="section_title">
                            <h2>Galeria de Fotos</h2>                           
                        </div>
                      
                    </div>
                </div>
            </div>

        <div class="screen_slider">
            <div id="demo" class="wow bounceInRight" data-wow-duration="1s">
                <div id="owl-demo" class="owl-carousel">

                    
                    <div class="item">
                    <a href="#" ><img src="<?= base_url('assets/nuevotemplate/bent/')?>images/iphone04.png" width="60" height="60" alt="APPS SCREEN" /></a>
                    </div>
                    <div class="item">
                        <a href="<?= base_url('assets/nuevotemplate/bent/')?>images/iphone04.png" rel="prettyPhoto[pp_gal]"><img src="<?= base_url('assets/nuevotemplate/bent/')?>images/iphone05.png" width="60" height="60" alt="APPS SCREEN" /></a>
                    </div>
                    <div class="item">
                        <a href="<?= base_url('assets/nuevotemplate/bent/')?>images/iphone04.png" rel="prettyPhoto[pp_gal]"><img src="<?= base_url('assets/nuevotemplate/bent/')?>images/iphone06.png" width="60" height="60" alt="APPS SCREEN" /></a>
                    </div>
                    <div class="item">
                        <a href="<?= base_url('assets/nuevotemplate/bent/')?>images/iphone04.png" rel="prettyPhoto[pp_gal]"><img src="<?= base_url('assets/nuevotemplate/bent/')?>images/iphone07.png" width="60" height="60" alt="APPS SCREEN" /></a>
                    </div>
                    <div class="item">
                        <a href="<?= base_url('assets/nuevotemplate/bent/')?>images/iphone04.png" rel="prettyPhoto[pp_gal]"><img src="<?= base_url('assets/nuevotemplate/bent/')?>images/iphone08.png" width="60" height="60" alt="APPS SCREEN" /></a>
                    </div>
                    <div class="item">
                        <a href="<?= base_url('assets/nuevotemplate/bent/')?>images/iphone04.png" rel="prettyPhoto[pp_gal]"><img src="<?= base_url('assets/nuevotemplate/bent/')?>images/iphone09.png" width="60" height="60" alt="APPS SCREEN" /></a>
                    </div>
                </div>
            </div>
        </div>
    
            </div>
            </div>
            </div>

-->

    <!-- ENS APPS SCREEN -->
