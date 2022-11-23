<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<title>Dirección de Relaciones Nacionales e Internacionales - UPEA DRNI</title>
	<meta name="description" content="Free Bootstrap Theme by BootstrapMade.com">
	<meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">

	<!--<link href="https://fonts.googleapis.com/css?family=Josefin+Sans|Open+Sans|Raleway" rel="stylesheet">-->
	<link rel="stylesheet" href="<?php echo base_url()?>assets/nuevotemplate/MyBiz/css/flexslider.css">
	<link rel="stylesheet" href="<?php echo base_url()?>assets/nuevotemplate/MyBiz/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo base_url()?>assets/nuevotemplate/MyBiz/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo base_url()?>assets/nuevotemplate/MyBiz/css/style.css">
	<!-- =======================================================
    Theme Name: MyBiz
    Theme URL: https://bootstrapmade.com/mybiz-free-business-bootstrap-theme/
    Author: BootstrapMade.com
    Author URL: https://bootstrapmade.com
  ======================================================= -->
        <!--segundo template tipo de letras y recuadros con efectos-->
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">
	<!-- Theme style  -->
	<link rel="stylesheet" href="<?php echo base_url()?>assets/nuevotemplate/MyBiz/savory/css/style.css">
    <!-- Magnific Popup -->
	<link rel="stylesheet" href="<?php echo base_url()?>assets/nuevotemplate/MyBiz/savory/css/magnific-popup.css">
    <!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="<?php echo base_url()?>assets/nuevotemplate/MyBiz/savory/css/icomoon.css">
    <!-- Modernizr JS -->
	<!--<script src="<?php echo base_url()?>assets/nuevotemplate/savory/js/modernizr-2.6.2.min.js"></script>-->
    
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url()?>assets/nuevotemplate/icono.ico" />
    
    <!--slider bent-->
    <!-- Owl Carousel Assets 
    <link href="<?php echo base_url()?>assets/nuevotemplate/bent/css/owl.carousel.css" rel="stylesheet">
    <!-- Style 
    <link href="<?php echo base_url()?>assets/nuevotemplate/bent/css/style.css" rel="stylesheet">-->

  
    
    <!--complemento de modal-->
<!--<link rel="stylesheet" href="<?php echo base_url()?>assets/nuevotemplate/modal/css/avgrund.css">
<script type="text/javascript" src="<?php echo base_url()?>assets/nuevotemplate/modal/js/avgrund.js"></script>
<link rel="stylesheet" href="<?php echo base_url()?>assets/nuevotemplate/modal/css/demo.css">-->
<!--<script type="text/javascript" src="https://platform.twitter.com/widgets.js"></script>-->
    
    
    
</head>

<body id="top" data-spy="scroll">
	<!--top header-->

	<header id="home">

		

		<!--main-nav-->

		<div id="main-nav">

			<nav class="navbar">
				<div class="container">

					<div class="navbar-header">
						<!--<a href="index.html" class="navbar-brand">DRNI</a>-->
                        <a href="<?php echo base_url()?>"><img class="navbar-brand" src="<?php echo base_url()?>assets/nuevotemplate/MyBiz/images/about/logo.png" alt=""></a>
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#ftheme">
							<span class="sr-only">Toggle</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
					</div>

					<div class="navbar-collapse collapse" id="ftheme">

						<ul class="nav navbar-nav navbar-right">
							<li><a href="<?php echo site_url('inicio')?>">Inicio</a></li>
							<li><a href="#about">Acerca de</a></li>
							<li><a href="#portfolio">Actividades</a></li>
							<li><a href="#service">Publicaciones</a></li>
							<li><a href="<?= site_url('gal')?>">Galeria</a></li>
							<li><a href="#bottom-footer">Contactos</a></li>
                            
                            <li><a class="icon-users col-xs-2" data-toggle="modal" data-target="#modal_login"></a></li>
                            
                              

                            
							
							<li class="hidden-sm hidden-xs">
								<a href="#" id="ss"><i class="fa fa-search" aria-hidden="true"></i></a>
							</li>
						</ul>

					</div>

					<div class="search-form">
						<form>
							<input type="text" id="s" size="40" placeholder="Buscar..." />
						</form>
					</div>

				</div>
			</nav>
		</div>

	</header>


    
    
    
    <?php echo $output; ?>
    

    
    
    
    <section class="top-nav hidden-xs">
    </section>
    <section class="top-nav hidden-xs">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<div class="top-left">

							<ul>
								<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-vk" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
							</ul>

						</div>
                        <div class="top-right">
                            <a href="#" data-toggle="modal" data-target="#obj" style="color: #97a0a0;" ><p>Ubicación:<span>Aqui...</span></p></a>
                        </div>
					</div>

					<div class="col-md-6">
						<div class="top-right">
							<p>Ubicación:<span><?= $unidad->direccion ?></span></p>
							<p>Telefono:<span><?= $unidad->telefono ?></span></p>
							<p>Fax:<span><?= $unidad->fax ?></span></p>
							<p>Celular:<span><?= $unidad->celular ?></span></p>
							<p>Correo:<span><?= $unidad->correo ?></span></p>
						</div>
					</div>

				</div>
			</div>
		</section>
    

    
    
    
    
    
       <!-- Modal -->
                            <div class="modal fade" id="obj" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                              <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">DRNI - Ubicación</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>       
                                  <div class="modal-body">
                                     <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3822.2559091078847!2d-68.19438667724451!3d-16.49290312018546!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xc6efc5b8e49e9f21!2sEmblematico!5e0!3m2!1ses!2ses!4v1502917681270" width="100%" height="50%" frameborder="0" style="border:0" allowfullscreen></iframe>

                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                  </div>
                                </div>
                              </div>
                            </div>
    
    
    
    
    
    
    	<!--about bg-->
	<div id="about-bg">

		<div class="container">
			<div class="row">

				<div class="about-bg-heading">
					<h1>Visitas</h1>
					<p>www.rrnnii.upea.bo</p>
				</div>

				<div class=" col-xs-12 col-md-3">
					<div class="about-bg-wrapper">
						<span class="count"><h1><span class="border"></span><?php echo count($visitas,1) ?></h1>
						</span>
						<p>Visitas</p>
					</div>
				</div>
                
                <div class=" col-xs-12 col-md-3">
					<div class="about-bg-wrapper">
						<span class="count"><h1><span class="border"></span><?php echo count($convenios,1) ?></h1>
						</span>
						<p>Oferta de Convenios</p>
					</div>
				</div>

				<div class="col-xs-12 col-md-3">
					<div class="about-bg-wrapper">
						<span class="count"><h1><?php echo count($becas,1) ?></h1></span>
						<p>Oferta de Becas</p>
					</div>
				</div>

				<div class="col-xs-12 col-md-3">
					<div class="about-bg-wrapper">
						<span class="count"><h1><?php echo count($idiomas,1) ?></h1></span>
						<p>Oferta de idiomas</p>
					</div>
				</div>

				<div class="col-xs-12 col-md-3">
					<div class="about-bg-wrapper">
						<span class="count"><h1><?php echo count($publicacioness,1) ?></h1></span>
						<p>Publicaciones</p>
					</div>
				</div>

			</div>
		</div>

		<div class="cover"></div>

	</div>

	<!--bottom footer-->
	<div id="bottom-footer" class="hidden-xs">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<div class="footer-left">
						&copy;2018 SIE - DRNI - UPEA
						<div class="credits">
							
							Designed by: rgs
						</div>
					</div>
				</div>

				<div class="col-md-8">
					<div class="footer-right">
						<ul class="list-unstyled list-inline pull-right">
							
                            <li><a href="#home">Inicio</a></li>
							<li><a href="#about">Acerca de</a></li>
							<li><a href="#portfolio">Actividades</a></li>
							<li><a href="#service">Publicaciones</a></li>
							<li><a href="#bottom-footer">Contactos</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>


    
    
    
    


<!-- Modal 
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>-->

    
    
    

	<!-- jQuery -->
	<script src="<?php echo base_url()?>assets/nuevotemplate/MyBiz/js/jquery.min.js"></script>
	<script src="<?php echo base_url()?>assets/nuevotemplate/MyBiz/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url()?>assets/nuevotemplate/MyBiz/js/jquery.flexslider.js"></script>
	<script src="<?php echo base_url()?>assets/nuevotemplate/MyBiz/js/jquery.inview.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD8HeI8o-c1NppZA-92oYlXakhDPYR7XMY"></script>
	<script src="<?php echo base_url()?>assets/nuevotemplate/MyBiz/js/script.js"></script>
	<!--<script src="contactform/contactform.js"></script>-->
    

    <!-- Magnific Popup -->
	<script src="<?php echo base_url()?>assets/nuevotemplate/MyBiz/savory/js/jquery.magnific-popup.min.js"></script>
	<script src="<?php echo base_url()?>assets/nuevotemplate/MyBiz/savory/js/magnific-popup-options.js"></script>
    
    
    <!--slider bent
     <script src="<?php echo base_url()?>assets/nuevotemplate/bent/js/owl.carousel.js"></script>-->
<script>
//OWL CAROSEL
$(document).ready(function() {

    "use strict";
    
    $("#owl-demo").owlCarousel({
        autoPlay: 3000,
        items: 4, //10 items above 1000px browser width
        itemsDesktop: [1370, 3], //5 items between 1000px and 901px
        itemsDesktopSmall: [900, 2], // betweem 900px and 601px
        itemsTablet: [600, 1], //2 items between 600 and 0
    });
});
</script>
    
    
    <!--modal
<script>

    function openDialog(id) {
        var id = id;
	   Avgrund.show(id);
	}
    function closeDialog() {
        Avgrund.hide();
    }
</script>-->
    

</body>

</html>
