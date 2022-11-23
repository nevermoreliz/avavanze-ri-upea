<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Relaciones Nacionales e Internacionales U.P.E.A.</title>
        <meta name="keywords" content="" />
		<meta name="description" content="SIE UPEA Dirección de relaciones nacionales e internacionales" />
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!--<link rel="shortcut icon" href="PUT YOUR FAVICON HERE">-->
        
        
        <!-- Bootstrap core CSS -->
        <link href="<?=  base_url('assets/css/bootstrap.css')?>" rel='stylesheet' type='text/css'>

        <!-- Custom styles for this template -->
        <link href="<?= base_url('assets/js/colorbox/colorbox.css')?>"  rel='stylesheet' type='text/css'>
        <link href="<?= base_url('assets/css/templatemo_style.css')?>"  rel='stylesheet' type='text/css'>
        <link href="<?= base_url('assets/css/jquery.mCustomScrollbar.css')?>"  rel='stylesheet' type='text/css'>
        <link href="<?= base_url('assets/css/style.css')?>"  rel='stylesheet' type='text/css'>
        <link href="<?= base_url('assets/css/fonts.css')?>"  rel='stylesheet' type='text/css'>

    </head>
    
    <body>
        <div class="col-xs-12 menu-cabecera">
            <div class="col-xs-6">
                <div class="col-xs-0 col-sm-1"></div>
                <div class="col-xs-4 col-sm-3 logo">
                    <img src="<?= base_url('assets/images/logo.png') ?>">
                </div>
                <div class="col-xs-8 col-sm-8"></div>
            </div>
            <div class="icon-list2" id="menu_xs_ramiro"></div>
            <div class="col-xs-6 menu text-center">
                    <a href="#menu-inicio" class="col-xs-2">Inicio</a>
					<a href="#menu-acerca" class="col-xs-2">Acerca de</a>
					<a href="#menu-publicaciones" class="col-xs-2">Publicaciones</a>
                    <a href="#menu-convenio" class="col-xs-2">Convenios</a>
                    <a href="#menu-contacto" class="col-xs-2">Contactos</a>
                    <a href="#" class="icon-users col-xs-2" id="login"></a>
            </div>
        </div>
        
        <div id="menu-inicio">
            <!-- Carousel -->
            <div id="templatemo-carousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#templatemo-carousel" data-slide-to="0" class="active"></li>
                    <li data-target="#templatemo-carousel" data-slide-to="1"></li>
                    <li data-target="#templatemo-carousel" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="item active">
                        <div class="container">
                            <div class="carousel-caption">
                                <h1>UNIVERSIDAD PÚBLICA DE EL ALTO</h1>
                                <p>DIRECCION DE RELACIONES NACIONALES E INTERNACIONALES</p>
                                <p><a class="btn btn-lg btn-green" href="#" role="button" style="margin: 0px;">UPEA</a> 
                                	<a class="btn btn-lg btn-orange" href="#" role="button">CONVENIOS</a></p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="item">
                        <div class="container">
                                <div class="carousel-caption">
                                    <div class="col-sm-10 col-sm-offset-1 col-md-12">
                                    	<h1>MISION</h1>
                                        <p>La Direcci&oacute;n de Relaciones Nacionales e Internacionales DRNI de la UPEA, es la encargada de la internacionalización del conocimiento académico, científico, tecnológico, de Interacción Social e Investigación en todos los campos del conocimiento, para fortalecer y expandir los vínculos internacionales con universidades nacionales y extranjeras; de beneficio para docentes y estudiantes.
										</p>
                                    </div>
                                    
                                </div>
                        </div>
                    </div>
                        <div class="item">
                            <div class="container">
                                <div class="carousel-caption">
                                    <div class="col-sm-10 col-sm-offset-1 col-md-12">
                                    	<h1>VISION</h1>
                                        <p>Profundizar los procesos de coordinación,  gestión, formalización y seguimiento de programas estratégicos y los acuerdos de cooperación con universidades nacionales y del exterior, así como las instituciones académicas, instituciones públicas, privadas, embajadas, consulados y organizaciones bilaterales y multilaterales que coadyuven en el proceso de internalización de la Educación Superior.
										</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
                <a class="left carousel-control" href="#templatemo-carousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
                <a class="right carousel-control" href="#templatemo-carousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
            </div><!-- /#templatemo-carousel -->
        </div>

        <div class="templatemo-welcome" id="templatemo-welcome">
            <div class="container">
                <div class="templatemo-slogan text-center">
                    <span class="txt_darkgrey">Dirección   de  </span><span class="txt_orange red">Relaciones Nacionales e Internacionales</span>
                    <p class="txt_slogan"><i>Edificio Emblemático  parqueos, Interno - El Alto - Bolivia.</i></p>
                </div>	
            </div>
        </div>
        
        
        


        

        
        
        
  
        
        
        
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">
	
	<!-- Theme style  -->
	<link rel="stylesheet" href="<?= base_url()?>/assets/savory/css/style.css">
 
        
         <div id="menu-publicaciones">
            <div class="container">       
        
        	<div class="gtco-section">
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center gtco-heading">
					<h2 class="cursive-font primary-color">Publicaciones</h2>
				</div>
			</div>
			<div class="row">
                
                <?php if(!empty($publicaciones)){ foreach ($publicaciones as $key=>$pub){ ?>
				<div class="col-lg-4 col-md-4 col-sm-6">
					<!--<a href="<?= base_url()?>/assets/savory/images/img_1.jpg" class="fh5co-card-item image-popup">-->
                    <div class="fh5co-card-item image-popup">
						<figure>
							<div class="overlay"><i class="ti-plus"></i></div>
							<img src="<?= $pub->url ?>" alt="Image" class="img-responsive">
						</figure>
						<div class="fh5co-text">
							<h2><span class="price cursive-font"><?= $pub->titulo ?></span></h2>
							<p><?= $pub->descripcion ?></p>							
						</div>
				    </div>
					<!--</a>-->
				</div>
                <?php } } ?>
                
                <!--
				<div class="col-lg-4 col-md-4 col-sm-6">
					<a href="<?= base_url()?>/assets/savory/images/img_2.jpg" class="fh5co-card-item image-popup">
						<figure>
							<div class="overlay"><i class="ti-plus"></i></div>
							<img src="<?= base_url()?>/assets/savory/images/img_2.jpg" alt="Image" class="img-responsive">
						</figure>
						<div class="fh5co-text">
							<h2>Cheese and Garlic Toast</h2>
							<p>Far far away, behind the word mountains, far from the countries Vokalia..</p>
							<p><span class="price cursive-font">$20.99</span></p>
						</div>
					</a>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-6">
					<a href="<?= base_url()?>/assets/savory/images/img_3.jpg" class="fh5co-card-item image-popup">
						<figure>
							<div class="overlay"><i class="ti-plus"></i></div>
							<img src="<?= base_url()?>/assets/savory/images/img_3.jpg" alt="Image" class="img-responsive">
						</figure>
						<div class="fh5co-text">
							<h2>Grilled Chiken Salad</h2>
							<p>Far far away, behind the word mountains, far from the countries Vokalia..</p>
							<p><span class="price cursive-font">$8.99</span></p>

						</div>
					</a>
				</div>-->



			</div>
		</div>
	</div>
                
                </div>
	</div>
        
        
        
        
        
        
        
        
        
        
        
        
<!-- AQUI SE RENDERIZA TODOS LOS CONVENIOS -->
        <div id="menu-convenio">
            <div class="container">
                <div class="col-xs-12">
                    <div class="templatemo-line-header" style="margin-top: 0px;" >

                    <br class="clearfix"/>
                    <br class="clearfix"/>
                    <br class="clearfix"/>
                    <br class="clearfix"/>
                        <div class="text-center">
                            <hr class="team_hr team_hr_left hr_gray"/><span class="span_blog txt_darkgrey">CONVENIOS</span>
                            <hr class="team_hr team_hr_right hr_gray" />
                        </div>
                    </div>
                    <br class="clearfix"/>
                </div>



                <!--AQUI VA TODA LA PARTE DE LOS CONVENIOS-->
                <div class="blog_box">
                    <div class="col-xs-12">
                        <div class="pull-left">
                            <input id="dato-buscar-convenios" type="text" name="dato" placeholder="Busqueda por convenios"/>
                            <label>Buscar</label>
                        </div>
                    </div>
                    <div id="crear-tabla-convenios">                        
                    </div>
                    
                    <div id="tabla-convenios">
                        <?php $aux=0; ?>
                        <?php foreach ($convenios as $d){ $aux++?>
                            
                        
                            <div class="col-sm-5 col-md-6 blog_post">
                                <div class="list-inline">
                                    <div class="col-sm-4 col-xs-6">
                                        <div>

                                            <img class="img-responsive" src="<?php echo base_url($d->img_convenio) ?>" alt="" />
                                        </div>
                                        <div class="descargar_pdf">
											<a href="<?php echo base_url($d->pdf_convenio)?>" target="_blank"><img class="img-responsive" src="<?php echo base_url('assets/images/Boton-Descargar-Gif1.gif') ?>" /> </a>
										</div>
                                        <span>Entidad: <br><div class="link_orange"><span class="txt_orange" style="color: #8e2b06;font-size: medium;"><?=$d->entidad?></span></div></span>
                                        <span class="tipo_convenio_cost"><?=$d->nombre_tipo_convenio?></span>
                                    </div>
                                    <div  class="col-sm-8  col-xs-6">
                                        <div class="pull-left">
                                            <span class="blog_header conv_nom_cell"><?=$d->nombre_convenio?></span><br/>
                                            <span>Publicación: <span class="txt_orange"><?=$d->fecha_publicacion?></span></span></br>
                                            <span>Duración: <span class="txt_orange"><?=$d->tiempo_duracion?></span></span></br>
                                            <div class="pull-right">
                                                <form class="detalles_convenio" method="POST" action="<?php echo base_url('client/Controller_convenios/detalle_convenio')?>">
                                                    <input type="hidden" name="id_convenios" value="<?= $d->id_convenios ?>">
                                                    <input type="submit" value="Mas detalles" name="" class="btn btn-orange"/>
                                                </form>                                            
                                            </div>
                                        </div>
                                        
                                        <div class="clearfix"> </div>
                                        <p class="blog_text">
                                            <?=$d->objetivo_convenio?>
                                        </p>
                                        
                                    </div>
                                </div>
                            </div> <!-- /.blog_post 1 -->
                            <?php if($aux%2==0) { echo ("<div class='templatemo_clear'></div>");}?>
                        <?php }?>                
                    </div>                  
                </div>
            </div>
        </div>









<!-- qui se raslado los objeivos de la undiad-->

        <div class="templatemo-service">
            <div class="container">
                <div class="col-xs-12">
                                       
                    <div class="col-xs-10 col-xs-offset-1 col-md-4 estatico">
                        <div class="templatemo-service-item">
                            <div>
                                <img src="<?= base_url('assets/images/objetivo.jpg')?>" alt="icon"/>
                                <span class="templatemo-service-item-header">OBJETIVOS</span>
                            </div>
                            <p>1.- Promover el fortalecimiento de las relaciones de la Universidad Pública de El Alto (UPEA), con instituciones Nacionales, Internacionales relacionadas con la Educación Superior.
							</p>
							<p>2.- Promover el intercambio de docentes y estudiantes con universidades del exterior.
							</p>
							<p>3.- Gestionar financiamiento para la ejecución de programas y proyectos de investigación tecnológica en todas las áreas del conocimiento insertados en el Plan de desarrollo del a UPEA.
							</p>
							<p>4.- Gestionar la concreción de convenios de cooperación bilateral y multilateral con instituciones extranjeras y nacionales.
							</p>
							<p>5.- Fortalecer las actividades de investigación ciencia y tecnología a través de la realización de conferencias internacionales, talleres, seminarios en todos los campos del conocimiento dirigido a la comunidad universitaria en temas de actualidad.
							</p>

                        </div>
                        
                    </div>
                    <div class="col-xs-10 col-xs-offset-1 col-md-4 estatico">
                        <div class="templatemo-service-item">
                            <div>
                                <img src="<?= base_url('assets/images/cooperacion.jpg')?>" alt="icon"/>
                                <span class="templatemo-service-item-header">FUNCIONES Y SERVICIOS</span>
                            </div>
								<p>Establecer niveles de coordinación con los decanos, directores de carrera, coordinadores de investigación y centro de estudiantes.
                                </p>
								<p>Coordinar las acciones relacionadas a la Cooperación Internacional e Institucional.</p>
								<p>Seguimiento de convenios existentes.</p>
								<p>Realizar la proposición de nuevos instrumentos de cooperación.	</p>
								<p>Impulsar el desarrollo de Proyectos de Investigación con instituciones con las cuales se tienen convenio.</p>
								<p>Programar visitas a otras Instituciones de Educación Superior con vista a identificar posibilidades de cooperación y desarrollo de proyectos conjuntos.</p>
								<p>Difundir informaciones relativas a ofertas de estudio en el extranjero.</p>
								<p>Asesorar a los estudiantes y docentes extranjeros en todo lo referente a su estadía en el país.</p>

                        </div>
                        
                    </div>
                    <div class="col-xs-10 col-xs-offset-1 col-md-4 estatico">
                        <div class="templatemo-service-item">
                            <div>
                                <img src="<?= base_url('assets/images/lineas de accion2.jpg')?>" alt="icon"/>
                                <span class="templatemo-service-item-header">LINEAS DE ACCION</span>
                            </div>
								<p>La Dirección de Relaciones Nacionales e Internacionales, propone trabajar las siguientes líneas de acción:</p>
								<p>Promoción de la información y filiación de entidades de cooperación.</p>
								<p>Gestión y fortalecimiento académico vía intercambio de docentes y estudiantes.</p>
								<p>La Promoción y fortalecimiento de la investigación científica - tecnológica.</p>
								<p>El fortalecimiento de los procesos de Interacción Social y Extensión Universitaria.</p>
								<p>Programas de Becas.</p>	
								
                        </div>
                        <br class="clearfix"/>
                    </div>
                </div>
            </div>
        </div>






        
<!-- AQUI SE RENDERIZA TODOS LOS CONTACTOS -->
        <div id="menu-contacto">
            <div class="container">
                <div class="col-xs-12">
                    <div class="templatemo-line-header head_contact">
                        <div class="text-center">
                            <hr class="team_hr team_hr_left hr_gray"/><span class="txt_darkgrey">Contáctanos </span>
                            <hr class="team_hr team_hr_right hr_gray"/>
                        </div>
                    </div>
				    <div class="col-xs-12">
                        <div class="form-horizontal pull-left">
                                <input id="dato-buscar-contacto" type="text" name="dato" placeholder="Buscar por Carrera/Entidad"/>
                            <label>Buscar</label>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="col-xs-12 contact" id="crear-tabla-contactos">
                            <table class="cont-tabla table table-responsive" id="tabla-contactos">
                                <tr>
                                    <th>Carrera/Entidad</th>
                                    <th>Encargado</th>
                                    <th>Teléfono</th>
                                    <th>Email</th>
                                    <th>Tipo</th>
                                    <th>Estado</th>
                                </tr>
                                <?php foreach ($contactos as $d){ $aux++?>
                                <tr>
                                    <td><?=$d->carrera?></td>
                                    <td><?=$d->nombre_c?></td>
                                    <td><?=$d->telefonos_c?></td>
                                    <td><?=$d->email_c?></td>

                                    <td><?=$d->tipo?></td>

                                    <?php if($d->activo=='Inactivo'){
                                        echo '<td class="contacto-inactivo">'.$d->activo.'</td>';
                                    }else{
                                        echo '<td>'.$d->activo.'</td>';
                                    }
                                     ?>
                                    
                                    
                                </tr>
                                <?php }?>  
                            </table>
                            <div class='templatemo_clear'></div>
                        </div>
                    </div>


                    <div class="col-xs-12 col-sm-12 col-md-8">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3822.2559091078847!2d-68.19438667724451!3d-16.49290312018546!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xc6efc5b8e49e9f21!2sEmblematico!5e0!3m2!1ses!2ses!4v1502917681270" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
                        
						<i>Puedes encontrarnos en la Av. Juan Pablo II, <span class="txt_orange">Edificio Emblemático  </span> en la ciudad de El Alto</i>
                    </div>
                    
					<div class="col-md-4 contact_right">
                        <?php foreach ($unidad as $d){ ?>
                            <p><Dirección  de Relaciones Nacionales Internacionales - Universidad Pública  de El Alto	</p>
                            <p><img src="<?php echo base_url('assets/images/location.png') ?>" alt="icon 1" /><?= $d->direccion ?>  </p>
                            <p><img src="<?php echo base_url('assets/images/phone1.png')?>"  alt="icon 2" /> <?= $d->telefono ?></p>
                            <p><img src="<?php echo base_url('assets/images/globe.png')?>" alt="icon 3" /><a class="link_orange" href="#"><span class="txt_orange"><?= $d->pagina ?></span></a></p>
                            <p>&nbsp;<div class="txt_orange icon-envelop" >&nbsp;<span class="txt_orange"><?= $d->correo ?></span></div></p>
                        <?php }?>
                    </div>
					
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div><!-- /#templatemo-contact -->

     




        <div class="templatemo-team" id="menu-acerca">
            <div class="container">
                <div class="col-xs-12">
                    <div class="templatemo-line-header">
                        <div class="text-center">
                            <hr class="team_hr team_hr_left"/><span>Equipo de trabajo</span>
                            <hr class="team_hr team_hr_right" />
                        </div>
                    </div>
                </div>
                <div class="clearfix"> </div>
                <!-- /.PERSONAL-->
                    <ul class="col-xs-12 row_team text-center">
                        <?php foreach ($personal as $d){ ?>
                        <li class="col-lg-4 col-md-4 col-sm-4 ">
                            <div class="text-center">
                                <div class="member-thumb">
                                    <img src="<?php echo base_url($d->img) ?>" class="img-responsive" alt="member 2" />
                                    <div class="thumb-overlay">
                                        <a href="https://www.facebook.com/patty.bernal.923"><span class="social-icon-fb"></span></a> 
                                        <a href="#"><span class="social-icon-twitter"></span></a>
                                        <a href="#"><span class="social-icon-linkedin"></span></a>
                                    </div>
                                </div>
                                <div class="team-inner">
                                    <p class="team-inner-header"><?= $d->nombre.' '.$d->paterno.' '.$d->materno ?></p>
                                    <p class="team-inner-subtext"><?= $d->cargo  ?></p>
                                </div>
                            </div>
                        </li>
                    <?php } ?>
                    </ul>
            </div>
        </div><!-- /.templatemo-team -->






        <div class="templatemo-footer" >
            <div class="container">
                <div class="col-xs-12">
                    <div class="text-center">

                        <div class="footer_container">
                            <ul class="list-inline">
                                <li>
                                        <span class="social-icon-fb"></span>
                                    
                                </li>
                                <li>
                                        <span class="social-icon-rss"></span>
                                </li>
                                <li>
                                        <span class="social-icon-twitter"></span>
                                </li>
                                <li>
                                        <span class="social-icon-linkedin"></span>
                                </li>
                                <li>
                                        <span class="social-icon-dribbble"></span>
                                </li>
                            </ul>
                            <div class="height30"></div>
                            <a class="btn btn-lg btn-orange" href="#menu-inicio" >Regresar al INICIO</a>
                            <div class="height30"></div>
                        </div>
                        <div class="footer_bottom_content">
                   			<span id="footer-line">Copyright @ UPEA - Relaciones Nacionales e Internacionales<a href="#"> 2018@Ramiro Ochoa, SIE - Sistemas de Información y Estadística</a></span>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>

</div>