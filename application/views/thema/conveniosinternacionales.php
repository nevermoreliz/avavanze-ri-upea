<!--service-->
	<div id="service">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-md-6 col-md-offset-3">
					<div class="service-heading">
						<?php if($c=='ci'){ ?><h2>Convenios Internacionales</h2>
                        <?php }elseif($c=='cn'){ ?><h2>Convenios Nacionales</h2>
                        <?php } ?>
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
               
                
                
                <?php if(!empty($conveniosi)){ ?>
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Gestion</th>
                      <th scope="col">Convenio</th>
                      <th scope="col">Objeto de convenio</th>
                      <th scope="col">Entidad/Institución</th>
                      <th scope="col">Carrera/Instancia</th>
                      <th scope="col">Tiempo</th>
                      <th scope="col">Firma Convenio</th>
                      <th scope="col">Fecha conclusion</th>
                      <th scope="col">Estado</th>
                    </tr>
                  </thead>
                  <tbody>
                <?php foreach($conveniosi as $key=>$value){ ?>
                    <tr>
                      <th scope="row"><?php echo $key+1 ?></th>
                        <?php $gestiones = $this->Modelo_funcionesregis->consultaGeneral('result','sic_convenio_gestion','id_convenios',$value->id_convenios); ?>
                      <td><?php if(!empty($gestiones)){foreach($gestiones as $valu){ echo $this->Modelo_funcionesregis->consultaGeneral('row','sic_gestion','id_gestion',$valu->id_gestion)->nombre.'</br>'; }} ?></td>
                      <td><?php echo $value->nombre_convenio ?></td>
                      <td><a href="#" data-toggle="modal" data-target="#obj<?= $value->id_convenios ?>" style="color: #97a0a0;" ><?php echo substr($value->objetivo_convenio,0, 150).'...' ?></a>  </td>
                        
                       
                            <!-- Modal -->
                            <div class="modal fade" id="obj<?= $value->id_convenios ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                              <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">DRNI</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>       
                                  <div class="modal-body">
                                      <h2><?php echo $value->nombre_convenio ?></h2>
                                        <div class="row">
                                                <div class="col-xs-12 login-form">
                                                    <p><?php echo $value->objetivo_convenio ?></p>                              
                                                </div>
                                        </div>
                                      <div class="row"><img src="<?php if(!empty($value->img_convenio)) echo base_url().$value->img_convenio ?>" alt="rgs">
                                          <?php if(!empty($value->pdf_convenio)){?>
                                                      <a href="<?php echo base_url('///').$value->pdf_convenio ?>" class="btn btn-secondary btn-lg" role="button" aria-pressed="true" target="_blank" ><img src="<?php echo base_url('assets/nuevotemplate/images/pdf.jpg')?>" alt="Descargar documento"></a>
                                                       <?php } ?>
                                      </div>

                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                  </div>
                                </div>
                              </div>
                            </div>

                        
                      <td><?php echo $value->entidad ?></td>
                        <?php $carreras = $this->Modelo_funcionesregis->consultaGeneral('result','sic_convenio_carrera','id_convenios',$value->id_convenios); ?>
                      <td><?php if(!empty($carreras)){foreach($carreras as $valu){ echo '-'.$this->Modelo_funcionesregis->consultaGeneral('row','sic_carrera','id_carrera',$valu->id_carrera)->nom_carrera.' </br> '; }} ?></td>
                      <td><?php echo round($value->tiempo) ?></td>
                      <td><?php echo $value->fecha_firma ?></td>
                      <td><?php echo $value->fecha_finalizacion ?></td>
                      <td><?php if($value->estado=='Activo'){ ?>
                          <div class="alert alert-success" role="alert"><span class="alert-link">Activo</span></div>
                          <?php }else if($value->estado=='Concluido'){ ?>
                          <div class="alert alert-dark" role="alert"><span class="alert-link">Concluido</span></div>
                          <?php } ?>
                        </td>
                      <td>
                          <!--<button type="button" class="btn btn-outline-warning">Info...</button>
                          <div class="pull-right">
                                                <form class="detalles_convenio" method="POST" action="<?php echo base_url('client/Controller_convenios/detalle_convenio')?>">
                                                    <input type="hidden" name="id_convenios" value="<?= "curioso" ?>">
                                                    <input type="submit" value="Info..." name="" class="btn btn-orange"/>
                                                </form>                                            
                                            </div>  -->                        
                          
                          <?php if(!empty($value->pdf_convenio)){?>
                          <a href="<?php echo base_url('///').$value->pdf_convenio ?>" class="btn btn-secondary btn-lg" role="button" aria-pressed="true" target="_blank" ><img src="<?php echo base_url('assets/nuevotemplate/images/pdf.jpg')?>" alt="Descargar documento"></a>
                           <?php } ?>
                        </td>
                      
                    </tr>

                 <?php }  ?>


                  </tbody>
                </table>
                <?php  } ?>
             
             
         
                
            </div>
        </div>
        </div>
          


	</div>
    