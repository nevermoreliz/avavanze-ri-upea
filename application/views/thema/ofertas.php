<!--service-->
	<div id="service">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-md-6 col-md-offset-3">
					<div class="service-heading">
						<?php if($c=='ofb'){ ?><h2>Oferta de Becas</h2>
                        <?php }elseif($c=='ofi'){ ?><h2>Oferta de Idiomas</h2>
                        <?php } ?>
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
               
                
                
                <?php if(!empty($oferta)){ ?>
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Titulo</th>
                      <th scope="col">Descripcion</th>
                      <th scope="col">Fotografia</th>
                      <th scope="col">Links</th>
                      <th scope="col">Fecha publicacion</th>
                    </tr>
                  </thead>
                  <tbody>
                <?php foreach($oferta as $key=>$value){ ?>
                    <tr>
                      <th scope="row"><?php echo $key+1 ?></th>
                      <td><?php echo $value->titulo ?></td>
                      <td><?php echo $value->descripcion ?></td>
                       <td><a href="#" data-toggle="modal" data-target="#obj<?= $value->id_publicaciones ?>"><img src="<?php echo base_url().$value->url?>" width="70px" alt=""></a>  </td>
                        
                       
                            <!-- Modal -->
                            <div class="modal fade" id="obj<?= $value->id_publicaciones ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                              <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">DRNI</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>       
                                  <div class="modal-body">
                                      <h2><?php echo $value->titulo ?></h2>
                                      
                                      <div class="row"><img src="<?php if(!empty($value->url)) echo base_url().$value->url ?>" alt="rgs">
                                      </div>

                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                  </div>
                                </div>
                              </div>
                            </div>
                        
                        <td><?php if(!empty($value->links)){?> <a href="<?= $value->links ?>" class="btn btn-default" target="_blank" >Enlace </a><?php } ?></td>
                    <td><?php echo $value->fecha ?></td>
                   </tr>

                 <?php }  ?>


                  </tbody>
                </table>
                <?php  } ?>
             
             
         
                
            </div>
        </div>
        </div>
          


	</div>
    