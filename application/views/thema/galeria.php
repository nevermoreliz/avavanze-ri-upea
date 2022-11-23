<!--service-->
	<div id="galerias">
		
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
                
            <div class="col-md-10 col-sm-10 col-xs-10 table-responsive">
               
       
         
                
                
                
	<div class="gtco-section">
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center gtco-heading">
					<h2 class="cursive-font primary-color">GALERÍA</h2>
					<p>Fotografias de Dirección de Relaciones Nacionales e Internacionales.</p>
				</div>
			</div>
			<div class="row">
				<?php $filtro=''; if(!empty($galeria)){ foreach($galeria as $value){ ?>
                <?php if($value->nombre_galeria!=$filtro){ $filtro=$value->nombre_galeria; ?>
                <div class="col-lg-12 col-md-12 col-sm-12"><p><span class="price cursive-font"><?= $value->nombre_galeria?></span></p> </div>
                </br>
                <?php } ?>
				<div class="col-lg-4 col-md-4 col-sm-6">
					<a href="<?= base_url($value->url_galeria)?>" class="fh5co-card-item image-popup">
						<figure>
							<div class="overlay"><i class="ti-plus"></i></div>
							<img src="<?= base_url($value->url_galeria)?>" alt="Image" class="img-responsive">
						</figure>
						<div class="fh5co-text">
							<h2></h2>
							<p><span class="price cursive-font">-</span></p>
						</div>
					</a>
				</div>
				<?php } } ?>  
		

			</div>
		</div>
	</div>



                
                
                
                
                
            </div>
        </div>
        </div>
          


	</div>
    


	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">
	


	<!-- Magnific Popup -->
	<link rel="stylesheet" href="<?= base_url('assets/nuevotemplate/MyBiz/savory/')?>css/magnific-popup.css">

	<!-- Bootstrap DateTimePicker -->
	<link rel="stylesheet" href="<?= base_url('assets/nuevotemplate/MyBiz/savory/')?>css/bootstrap-datetimepicker.min.css">

	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="<?= base_url('assets/nuevotemplate/MyBiz/savory/')?>css/owl.carousel.min.css">
	<link rel="stylesheet" href="<?= base_url('assets/nuevotemplate/MyBiz/savory/')?>css/owl.theme.default.min.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="<?= base_url('assets/nuevotemplate/MyBiz/savory/')?>css/style.css">

	<!-- Modernizr JS -->
	<script src="<?= base_url('assets/nuevotemplate/MyBiz/savory/')?>js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->
<!-- jQuery -->
	<script src="<?= base_url('assets/nuevotemplate/MyBiz/savory/')?>js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="<?= base_url('assets/nuevotemplate/MyBiz/savory/')?>js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="<?= base_url('assets/nuevotemplate/MyBiz/savory/')?>js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="<?= base_url('assets/nuevotemplate/MyBiz/savory/')?>js/jquery.waypoints.min.js"></script>
	<!-- Carousel -->
	<script src="<?= base_url('assets/nuevotemplate/MyBiz/savory/')?>js/owl.carousel.min.js"></script>
	<!-- countTo -->
	<script src="<?= base_url('assets/nuevotemplate/MyBiz/savory/')?>js/jquery.countTo.js"></script>

	<!-- Stellar Parallax -->
	<script src="<?= base_url('assets/nuevotemplate/MyBiz/savory/')?>js/jquery.stellar.min.js"></script>

	<!-- Magnific Popup -->
	<script src="<?= base_url('assets/nuevotemplate/MyBiz/savory/')?>js/jquery.magnific-popup.min.js"></script>
	<script src="<?= base_url('assets/nuevotemplate/MyBiz/savory/')?>js/magnific-popup-options.js"></script>
	
	<script src="<?= base_url('assets/nuevotemplate/MyBiz/savory/')?>js/moment.min.js"></script>
	<script src="<?= base_url('assets/nuevotemplate/MyBiz/savory/')?>js/bootstrap-datetimepicker.min.js"></script>


