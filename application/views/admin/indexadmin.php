<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Relaciones Nacionales e Internacionales U.P.E.A.</title>
        <meta name="keywords" content="" />
		<meta name="description" content="SIE UPEA Relaciones Nacionales e Internacionales" />
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="<?=  base_url('assets/css/bootstrap.css')?>" rel='stylesheet' type='text/css'>
        <link href="<?= base_url('assets/css/jquery.mCustomScrollbar.css')?>"  rel='stylesheet' type='text/css'>
        <link href="<?= base_url('assets/css/styleadmin.css')?>"  rel='stylesheet' type='text/css'>
        <link href="<?= base_url('assets/css/fonts.css')?>"  rel='stylesheet' type='text/css'>
    </head>
<body>
	<div class="col-xs-4 col-sm-2 barra-lateral-izq"><!--menu izquierdo-->
		<div class="row sesiones">
			<span>SESIONES</span>
		</div>
		<div class="row item">
			<div id="avatar">
				<img src="<?= $this->session->userdata('img') ?>" alt="foto">
			</div>
			<p><?= $this->session->userdata('nombre').' '.$this->session->userdata('paterno') ?></p>
		</div>
		<div class="row lista-items">
			<div class="item" id="menu-convenios">
				<span class="icon-file-text"></span>
				<p>Convenios</p>
			</div>
			<div class="sub-item">
				<a href="#convenios-nacionales" id="con-nac" class="item-flotante">
					<p>Nacional</p>
				</a>
				<a href="#convenios-internacionales" id="con-int" class="item-flotante">
					<p>Internacional</p>
				</a>
			</div>
		</div>
		<div class="row lista-items">
			<a href="#preinscripcion" class="item" id="menu-preinscripcion">
				<span class="icon-pencil2"></span>
				<P>Preinscripción</P>
			</a>
		</div>
        
        <div class="row lista-items">
			<a href="#publicaciones" class="item" id="menu-publicaciones">
				<span class="icon-profile"></span>
				<p>Publicaciones</p>
			</a>
		</div>
        
        <div class="row lista-items">
			<a href="#enlaces" class="item" id="menu-enlaces">
				<span class="icon-profile"></span>
				<p>Enlaces</p>
			</a>
		</div>
		<div class="row lista-items">
			<a href="#galeria" class="item" id="menu-galeria">
				<span class="icon-profile"></span>
				<p>Galeria</p>
			</a>
		</div>
		
		<div class="row lista-items">
			<a href="#coordinador" class="item" id="menu-coordinador">
				<span class="icon-users"></span>
				<p>Coordinadores</p>
			</a>
		</div>

		<div class="row lista-items">
			<a href="#personal" class="item" id="menu-personal">
				<span class="icon-user-tie"></span>
				<p>Usuarios</p>
			</a>
		</div>
		
		<div class="row lista-items">
			<a href="#nosotros" class="item" id="menu-nosotros">
				<span class="icon-cog"></span>
				<p>Nosotros</p>
			</a>
		</div>
		<div class="row item logo">
			<div id="logo-menu" class="col-xs-12">
				<img class="img-responsive" src="<?= base_url('assets/images/logo.png') ?>">
			</div>
		</div>
	</div><!--fin menu izquierdo-->
	<div class="col-xs-8 col-sm-10 barra-lateral-der"><!--contenido derecha-->
		<div class="row cabecera"><!--contenido derecha arriba-->
			<div class="logueo" id="logueo">
				<span class="icon-shrink"  id="logueo-oculta"></span>
				<img src="<?= base_url('assets/images/logo.png') ?>">
				<button id="cierra_session"> <span class="icon-lock" id="llave"></span>Cerrar sesión</button>
			</div>
		</div><!--fin contenido derecha arriba-->
		<div id="logueo-muestra">
				<p><span  class="icon-enlarge"></span></p>
		</div>
		<div class="row contenido"><!--contenido derecha abajo-->
			<div class="col-xs-12 contenido-general" id="convenios"><!--contenido de CONVENIOS-->
				<h2>CONVENIOS</h2>
				<div class="col-xs-12" id="convenios-nacionales"><!--contenido de NACIONALES-->
					<h3>Convenios Nacionales</h3>
					<div class="row">
						<div class="button-plus nuevo-convenio" ><span class="iconos icon-plus"></span><span class="letra-but">&nbspNuevo convenio</span></div>
					</div>
					<table class="table table-bordered table-striped" id="tabla-convenios-nacionales">
						<thead>
							<tr>
								<th>Nro</th>
								<!--<th>Id</th>-->
								<th  class="text-large">Convenio</th>
								<th>Duración</th>
								<th>Entidad</th>
								<th>Contáctos</th>
								<th>Estado</th>
								<th></th>
								<!--<th></th>-->
							</tr>
						</thead>
						<tbody>
							<?php $num=0; foreach ($conv_nac as $d){  ?>
								<tr>
									<td><?= $num+=1;  ?><img src="<?php echo base_url().$d->img_convenio?>" width="30px" alt=""></td>
									<!--<td><?= $d->id_convenios ?></td>-->
									<td class="text-large"><?= $d->nombre_convenio ?></td>
									<td>
										<div><span class="iconos icon-calendar">&nbsp</span><?= $d->fecha_firma ?></div>
                                        <div><span class="iconos icon-calendar">&nbsp</span><?= $d->fecha_finalizacion ?></div>
										<div><span class="iconos icon-clock">&nbsp</span><?= $d->tiempo_duracion ?> años</div>
									</td>
									<td><?= $d->entidad ?></td>
									<td>
										<div><span class="iconos icon-location2">&nbsp</span><?= $d->direccion ?></div>
										<div><span class="iconos icon-phone">&nbsp</span><?= $d->telefono ?></div>
										<div><span class="iconos icon-envelop">&nbsp</span><?= $d->email ?></div>
									</td>
									<td>
										<?php 
											if($d->estado=="Activo"){
												echo "<div class='activo'>".$d->estado ."</div";
											}else{
												echo "<div class='inactivo'>".$d->estado ."</div";
											} 
										?>	
                                    <?php if(!empty($d->pdf_convenio)){ ?>
                                        <span  class="iconos icon-plus"></span>
                                        <a href="<?php echo base_url().$d->pdf_convenio ?>" target="_blank" ><img src="<?php echo base_url('assets/nuevotemplate/images/pdf.jpg')?>" width="45px" alt="Descargar"></a>
                                    <?php } ?>
									</td>
									<td>
										<form action="<?= base_url('client/Controller_convenios/actualizar_convenios') ?>"  class="btn_actualizar_convenios" method="POST">
											<input type="hidden" name="id_convenios" value="<?= $d->id_convenios ?>" class="inp_id_convenio">
											<button type="submit"><div><span  class="iconos icon-plus">&nbsp</span><span class="letra-but">Más detalles</span></div></button>
										</form>
									</td>
									<!--<td>
										<form action="">
											<input type="hidden" name="id_convenios" value="<?= $d->id_convenios ?>">
											<button type="submit"><div><span  class="iconos icon-bin">&nbsp</span><span class="letra-but">Eliminar</span></div></button>
										</form>
									</td>-->
								</tr>
							<?php } ?>
						</tbody>
					</table>
				</div><!--FIN contenido de NACIONALES-->
                
                
                
                
                
                
                
                
				<div class="col-xs-12" id="convenios-internacionales"><!--contenido de INTERNACIONALES-->
					<h3>Convenios Internacionales</h3>
					<div class="row">
						<div class="button-plus nuevo-convenio" ><span class="iconos icon-plus"></span><span class="letra-but">&nbspNuevo convenio</span></div>
					</div>
					<table class="table table-bordered table-striped" id="tabla-convenios-internacionales">
						<thead>
							<tr>
								<th>Nro</th>
								<!--<th>Id</th>-->
								<th  class="text-large">Convenio</th>
								<th>Duración</th>
								<th>Entidad</th>
								<th>Contáctos</th>
								<th>Estado</th>
								<th></th>
								<!--<th></th>-->
							</tr>
						</thead>
						<tbody>
							<?php $num=0; foreach ($conv_int as $d){  ?>
								<tr>
									<td><?= $num+=1;  ?><img src="<?php echo base_url().$d->img_convenio?>" width="30px" alt=""></td>
									<!--<td><?= $d->id_convenios ?></td>-->
									<td class="text-large"><?= $d->nombre_convenio ?></td>
									<td>
										<div><span class="iconos icon-calendar">&nbsp</span><?= $d->fecha_firma ?></div>
                                        <div><span class="iconos icon-calendar">&nbsp</span><?= $d->fecha_finalizacion ?></div>
										<div><span class="iconos icon-clock">&nbsp</span><?= $d->tiempo_duracion ?> años</div>
									</td>
									<td><?= $d->entidad ?></td>
									<td>
										<div><span class="iconos icon-location2">&nbsp</span><?= $d->direccion ?></div>
										<div><span class="iconos icon-phone">&nbsp</span><?= $d->telefono ?></div>
										<div><span class="iconos icon-envelop">&nbsp</span><?= $d->email ?></div>
									</td>
									<td>
										<?php 
											if($d->estado=="Activo"){
												echo "<div class='activo'>".$d->estado ."</div";
											}else if($d->estado=="Concluido"){
												echo "<div class='inactivo'>".$d->estado ."</div";
											}else{
												echo "<div class='inactivo'>".$d->estado ."</div";
											} 
										?>	
                        <?php if(!empty($d->pdf_convenio)){ ?>
                                        <span  class="iconos icon-plus"></span>
                                        <a href="<?php echo base_url().$d->pdf_convenio ?>" target="_blank" ><img src="<?php echo base_url('assets/nuevotemplate/images/pdf.jpg')?>" width="45px" alt="Descargar"></a>
                           <?php } ?>
									</td>
									<td>
										<form action="<?= base_url('client/Controller_convenios/actualizar_convenios') ?>"  class="btn_actualizar_convenios" method="POST">
											<input type="hidden" name="id_convenios" value="<?= $d->id_convenios ?>" class="inp_id_convenio">
											<button type="submit"><div><span  class="iconos icon-plus">&nbsp</span><span class="letra-but">Más detalles</span></div></button>
										</form>
									</td>
									<!--<td>
										<form action="">
											<input type="hidden" name="id_convenios" value="<?= $d->id_convenios ?>">
											<button type="submit"><div><span  class="iconos icon-bin">&nbsp</span><span class="letra-but">Eliminar</span></div></button>
										</form>
									</td>-->
								</tr>
							<?php } ?>
						</tbody>
					</table>
				</div>
				<!--FIN contenido de INTERNACIONALES-->
			</div><!--TERMINA contenido de CONVENIOS-->
			
			<div class="col-xs-12 contenido-general" id="preinscripcion"><!--contenido de PREINSCRIPCION-->
				<h2>PREINSCRIPCIÓN</h2>
				<table class="table table-bordered table-striped" id="tabla_preinscripciones">
						<thead>
							<tr>
								<th class="id_tabla">Id</th>
								<th>Inscrito</th>
								<th>CI y RU</th>
								<th>Contáctos</th>
								<th>Inscripción</th>
								<th>Carrera</th>
								<th>Convenio</th>
								<th></th>
								<th></th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($preins as $d){  ?>
								<tr>
								<form action="<?= base_url('client/Controller_preinscripcion/actualizar_preinscripcion') ?>" method="POST" class="form_pre_edit">
									<td class="id_tabla">
										<div class="pre_caja">
											<input type="text" name="id_preinscripcion" value="<?= $d->id_preinscripcion ?>">
										</div>
									</td>
									<td>
										<input type="hidden" name="id_persona" value="<?= $d->id_persona ?>">
										<div class="pre_caja">
											<span class="icon-user txtimportant"></span><input type="text" name="nombres" value="<?= $d->nombre ?>" readonly class="editable">
										</div>
										<div class="pre_caja">
											<input type="text" name="paterno" value="<?= $d->paterno ?>" readonly class="editable">
										</div>
										<div class="pre_caja">
											<input type="text" name="materno" value="<?= $d->materno ?>" readonly class="editable">
										</div>
									</td>
									<td>
										<div class="pre_caja">
											<span class="txtimportant">C.I.</span><input type="text" name="ci" value="<?= $d->ci ?>" readonly class="editable">
										</div>
										<input type="hidden" name="id_universitario" value="<?= $d->id_universitario ?>">
										<div class="pre_caja">
											<span class="txtimportant">R.U.</span><input type="text" name="registro_universitario" value="<?= $d->registro_universitario ?>"  readonly class="editable">
										</div>	
									</td>
									<td>
										<div class="pre_caja">
											<span class="icon-envelop txtimportant"></span><input type="text" name="email" value="<?= $d->email ?>"  readonly class="editable">
										</div>
										<div class="pre_caja">
											<span class="icon-phone txtimportant"></span><input type="text" name="telefono" value="<?= $d->telefono ?>"  readonly class="editable">
										</div>
									</td>
									<td>
										<div class="pre_caja">
											<span class="txtimportant icon-menu2">&nbspCategoría</span>
											<select name="id_categoria" disabled class="editable_options">
												<option value="<?= $d->id_categoria ?>"><?= $d->nom_categoria ?></option>
												<?php foreach ($cat as $c){   ?>
													<option value="<?= $c->id_categoria ?>"><?= $c->nom_categoria ?></option>
												<?php } ?>
											</select>
										</div>
										<div class="pre_caja">
											<span class="icon-calendar txtimportant"></span><input type="text" name="fecha_inscripcion" value="<?= $d->fecha_inscripcion ?>"  readonly>
										</div>
									</td>
									<td>
										<div class="pre_caja">
											<span class="txtimportant icon-library"></span><textarea type="text" name="nom_carrera" readonly><?= $d->nom_carrera ?></textarea> 
										</div>
									</td>
									<td>
										<div class="pre_caja">
											<div class="txtimportant">Id convenio</div><input type="text" name="id_convenios" value="<?= $d->id_convenios ?>" readonly class="id_convenios_pre">
										</div>
										<div class="pre_caja">
											<div class="txtimportant">Gestion</div>
											<select name="id_gestion" class="addgestiones editable_options" disabled>
												<option value="<?= $d->id_gestion ?>"><?= $d->gestion_nombre ?></option>
											</select>
										</div>
									</td>
									<td>
										<button type="submit" class="botones solo_lectura"  disabled><div><span  class="iconos camb icon-floppy-disk">&nbsp</span><span class="letra-but">Guardar</span></div></button>
										<div class="pre_caja">
											<div class="txtimportant icon-unlocked editar_fila"></div>
										</div>
									</td>
									</form>
									<td>
										<form action="<?= base_url('client/Controller_preinscripcion/eliminar_preinscripcion') ?>" method="POST" class="form_pre_del">
											<input type="hidden" name="id_universitario" value="<?= $d->id_universitario ?>">
											<input type="hidden" name="id_persona" value="<?= $d->id_persona ?>">
											<input type="hidden" name="id_preinscripcion" value="<?= $d->id_preinscripcion ?>">
											<button type="submit" class="botones delete_fila" ><div><span  class="iconos icon-bin">&nbsp</span><span class="letra-but">Eliminar</span></div></button>
										</form>
									</td>
								</tr>
							<?php } ?>
						</tbody>
					</table>

			</div><!--TERMINA contenido de PREINSCRIPCION-->
            
            
			
		
            
<script>
    function openDialog(id) {
        var id = id;
	   Avgrund.show(id);
	}
			function closeDialog() {
				Avgrund.hide();
			}
</script>
<!--<link rel="stylesheet" href="<?php echo base_url() ?>/assets/modal/css/demo.css">-->
<link rel="stylesheet" href="<?php echo base_url() ?>/assets/modal/css/avgrund.css">
<script type="text/javascript" src="<?php echo base_url() ?>/assets/modal/js/avgrund.js"></script>
   
			<div class="col-xs-12 contenido-general" id="publicaciones"><!--contenido de PUBLICAIOENS-->
				<h2>PUBLICACIONES</h2>
					<div class="row">
						<button class="button-plus" onclick="javascript:openDialog('#default-popup');"><span class="iconos icon-plus"></span><span class="letra-but">&nbspNuevo</span></button>
					</div>
                
                
        <div id="default-popup" class="avgrund-popup">
          <div class="col-md-12">
              
            <span class="cerrar-modal icon-cancel-circle" onclick="javascript:closeDialog();"></span>
            <div class="row">
			 <h2>Nueva Publicación</h2>
            </div>
               <form method="POST" action="<?= base_url('client/controller_publicaciones/guardar_publicacion')?>" enctype="multipart/form-data" >
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-6">
                    <label class="icon-spell-check" for="titulo" >Titulo</label>
                    <input placeholder="Titulo" type="text" name="titulo" required  />
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6">
                    <label class="icon-spell-check" for="titulo" >Tipo</label>
                    <select name="tipo" required>
                      <option value="Publicaciones">Publicaciones</option>
                      <option value="Noticias">Noticias</option>
                      <option value="Becas">Becas</option>
                      <option value="Idiomas">Idiomas</option>
                      <option value="Pasantias">Pasantias</option>
                      
                    </select>
                </div>
                
                <div class="col-xs-12 col-sm-12 col-md-12"></div>
                <div class="col-xs-12 col-sm-6 col-md-6">
                    <label class="icon-spell-check" for="titulo" >Numero Correlativo</label>
                    <input placeholder="Publicacion N°125/2018" type="text" name="correlativo" required  />
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6">
                    <label class="icon-spell-check" for="titulo" >Sub Título</label>
                    <input placeholder="Sub titulo" type="text" name="subtitulo"   />
                </div>
                
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <label class="icon-spell-check" for="titulo" >Descripción</label>
                    <textarea placeholder="Aqui escriba todo lo referente..." name="descripcion" rows="6" cols="100%" required>
                    </textarea>
                </div>  
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <label class="col-md-3 icon-spell-check" for="titulo" >Link de enlace</label>
                    <input class="col-md-9" placeholder="http://www.rrnnii.upea.bo/..." type="text" name="links"  />
                </div> 
                <div class="columna_conv col-xs-12 col-sm-4 col-md-4">
					<label for="conv-imagen1"> Foto<span  class="icon-image label-imagen"></span> <span class="texto-imagen"> <input name="imagen" type="file" /> </span></label>
                    <input type="hidden" name="url" value=""/>
                </div>
				<div class="columna_conv col-xs-12 col-sm-4 col-md-4">
					<label for="conv-imagen1">Archivo</label><input name="archivo[]" type="file" multiple /> 
                    <input type="hidden" name="urll" value=""/>
                </div>
               
                <div class="col-xs-12 col-sm-4 col-md-4"><!--ESTADO-->
                    <label class="icon-menu2">&nbsp; Estado&nbsp;</label>
                    <input name="estado" type="checkbox" class="toggle-switch" checked/>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <input class="button-plus"  type="submit" value="Publicar"/>
                    <button class="button-plus"  onclick="javascript:closeDialog();">Cerrar</button>
                </div>
            </div>
            </form>
            <div class="row">
              <div class="col-xs-6 col-xs-offset-3" id="alert_coordinador1">
              </div>
            </div>
		  </div>
		</div>

                
                
					<table class="table table-bordered table-striped" id="tabla-publicaciones">
						<thead>
							<tr>
								<th>Nro</th>
								<th  class="text-large">Titulo</th>
								<th>Tipo</th>
								<th>N Correlativo</th>
								<th>Descripcion</th>
								<th>Imagen</th>
								<th>Estado</th>
								<th></th>
								<!--<th></th>-->
							</tr>
						</thead>
						<tbody>
							<?php $num=0; foreach ($publicaciones as $d){  ?>
								<tr>
									<td><?= $num+=1;  ?></td>
									<td class="text-large"><?= $d->titulo ?></td>
									<td><?= $d->tipo_publicaciones ?></td>
									<td><?= $d->correlativo ?></td>
									<td><?= $d->descripcion ?></td>
									<td><img src="<?= base_url($d->url) ?>" border="1" width="50" height="30"></td>
									<td>
										<?php 
											if($d->estado=="1"){
												echo "<div class='activo'>Activo</div";
											}else{
												echo "<div class='inactivo'>Inactivo</div";
											} 
										?>		
									</td>
									<td>
										
											
											<button class=""  type="submit" onclick="javascript:openDialog('#modal<?= $d->id_publicaciones ?>');" style="background-color: #898989;"><div><span  class="iconos icon-plus">&nbsp</span><span class="letra-but">Revisar</span></div></button>
										
                                        
                                        
                                       
                
        <div id="modal<?= $d->id_publicaciones ?>" class="avgrund-popup">
          <div class="col-md-12">
              
            <span class="cerrar-modal icon-cancel-circle" onclick="javascript:closeDialog();"></span>
            <div class="row">
			 <h2>Modificación de Publicación</h2>
            </div>
               <form method="POST" action="<?= base_url('client/controller_publicaciones/guardar_publicacion')?>" enctype="multipart/form-data" >
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-6">
                    <label class="icon-spell-check" for="titulo" >Titulo</label>
                    <input placeholder="Titulo" type="text" name="titulo" required value="<?= $d->titulo ?>" />
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6">
                    <label class="icon-spell-check" for="titulo" >Tipo</label>
                    <select name="tipo" required>
                      <option value="Publicaciones" <?php if($d->tipo_publicaciones=='Publicaciones') echo 'selected' ?> >Publicaciones</option>
                      <option value="Becas" <?php if($d->tipo_publicaciones=='Becas') echo 'selected' ?>>Oferta de Becas</option>
                      <option value="Idiomas" <?php if($d->tipo_publicaciones=='Idiomas') echo 'selected' ?>>Oferta de Idiomas</option>
                      <option value="Noticias" <?php if($d->tipo_publicaciones=='Noticias') echo 'selected' ?>>Noticias</option>
                      <option value="Noticias" <?php if($d->tipo_publicaciones=='Pasantias') echo 'selected' ?>>Pasantias</option>
                    </select>
                </div>
                
                <div class="col-xs-12 col-sm-12 col-md-12"></div>
                <div class="col-xs-12 col-sm-6 col-md-6">
                    <label class="icon-spell-check" for="titulo" >Numero Correlativo</label>
                    <input placeholder="Publicacion N°125/2018" type="text" name="correlativo" required value="<?= $d->correlativo ?>" />
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6">
                    <label class="icon-spell-check" for="titulo" >Sub Título</label>
                    <input placeholder="Sub titulo" type="text" name="subtitulo"  value="<?= $d->subtitulo ?>" />
                </div>
                
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <label class="icon-spell-check" for="titulo" >Descripción</label>
                    <textarea placeholder="Aqui escriba todo lo referente..." name="descripcion" rows="6" cols="100%" required style=" background: #eae1cd;"><?= $d->descripcion ?>
                    </textarea>
                </div> 
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <label class="col-md-3 icon-spell-check" for="titulo" >Link de enlace</label>
                    <input class="col-md-9" placeholder="http://www.rrnnii.upea.bo/..." type="text" name="links" value="<?= $d->links ?>"  />
                </div> 
                <div class="columna_conv col-xs-12 col-sm-12 col-md-12">
                    <label for="conv-imagen1">Foto<img src="<?= base_url($d->url) ?>" border="1" width="50" height="30"> <span class="texto-imagen"> <input name="imagen" type="file" /> </span></label>
                    <input type="hidden" name="url" value="<?= $d->url ?>"/>
                </div>
				<div class="columna_conv col-xs-12 col-sm-12 col-md-12">
                    <label for="conv-imagen1">Archivo:
						<?php $archivo=$this->Model_publicaciones->mostrar_archivo_publicaciones($d->id_publicaciones); 
						foreach($archivo as $arch){ ?>
						<a href="<?= base_url($arch->nombre_archivo) ?>" ><?php $var=explode("/",$arch->nombre_archivo); echo end($var); ?></a>  
						<?php } ?>
						<input name="archivo[]" type="file" multiple/> </label>
                    	<input type="hidden" name="url" value=""/>
                </div>
               
                <div class="col-xs-12 col-sm-12 col-md-12"><!--ESTADO-->
                    <label class="icon-menu2">&nbsp; Estado&nbsp;</label>
                    <input name="estado" type="checkbox" class="toggle-switch" checked/>
                </div>
				
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <input type="hidden" name="modificacion" value="<?= $d->id_publicaciones ?>"/>
                    <input class="button-plus"  type="submit" value="Actualizar"/>
                    <!--<button class="button-plus"  onclick="javascript:closeDialog();">Cerrar</button>-->
                    <a class="button-plus" href="javascript:closeDialog();">&nbsp Cerrar</a>
                </div>
                
            </div>
            </form>
              
            <div class="row">
              <div class="col-xs-6 col-xs-offset-3" id="alert_coordinador1">
              </div>
            </div>
		  </div>
		</div>

                                        
                                        
                                
									</td>
									
								</tr>
							<?php } ?>
						</tbody>
					</table>

			</div><!--TERMINA contenido de PUBLICAIONES-->
			

            
            
            
            
         
            
            
            
            
<div class="col-xs-12 contenido-general" id="enlaces"><!--contenido de enlaces-->
				<h2>ENLACES</h2>
					<div class="row">
						<button class="button-plus" onclick="javascript:openDialog('#enlace');"><span class="iconos icon-plus"></span><span class="letra-but">&nbspNuevo</span></button>
					</div>
                
                
        <div id="enlace" class="avgrund-popup modal_enlace">
          <div class="col-md-12">
              
            <span class="cerrar-modal icon-cancel-circle" onclick="javascript:closeDialog();"></span>
            <div class="row">
			 <h2>Nuevo enlace</h2>
            </div>
               <form method="POST" action="<?= base_url('client/controller_enlace/guardar_enlace')?>" enctype="multipart/form-data" >
            <div class="row">
                <div class="col-xs-12 col-sm-8 col-md-8">
                    <label class="icon-spell-check" for="titulo" >Nombre de Entidad</label>
                    <input  placeholder="Titulo" type="text" name="titulo" required  />
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4">
                    <label class="icon-spell-check" for="titulo" >Tipo</label>
                    <select name="tipo" required>
                      <option value="enlace">Enlace</option>
                      <option value="embajada">Embajada</option>
                      <option value="consulado">Consulado</option>
                      <option value="ministerio">Ministerio</option>
                      <option value="org_estado">Organismos del estado</option>
                      <option value="org_cooperacion">Organismos de Cooperación</option>
                      
                    </select>
                </div>
                
                
                <div class="col-xs-12 col-sm-6 col-md-6">
                    <label class="col-md-3 icon-spell-check" for="titulo" >Link de enlace</label>
                    <input class="col-md-9" placeholder="http://www.rrnnii.upea.bo/..." type="text" name="links"  />
                </div> 
                <div class="columna_conv col-xs-12 col-sm-6 col-md-6">
                    <label for="conv-imagen1"><span  class="icon-image label-imagen"></span> <span class="texto-imagen"> <input name="imagene" type="file" /> </span></label>
                    <input type="hidden" name="url" value=""/>
                </div>
                
                <div class="col-xs-12 col-sm-6 col-md-6">
                    <label class="col-md-3 icon-spell-check" for="titulo" >Telefono</label>
                    <input class="col-md-9" placeholder="telefono" type="text" name="telefono"  />
                </div> 
                <div class="col-xs-12 col-sm-6 col-md-6">
                    <label class="col-md-3 icon-spell-check" for="titulo" >Fax</label>
                    <input class="col-md-9" placeholder="fax" type="text" name="fax"  />
                </div> 
               
                <div class="col-xs-12 col-sm-6 col-md-6"><!--ORDEN-->
                    <label class="icon-menu2">&nbsp; Numero Orden&nbsp;</label>
                    <input name="orden" type="text"  />
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6"><!--ESTADO-->
                    <label class="icon-menu2">&nbsp; Estado&nbsp;</label>
                    <input name="estado" type="checkbox" class="toggle-switch" checked/>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <input class="button-plus"  type="submit" value="Publicar"/>
                    <button class="button-plus"  onclick="javascript:closeDialog();">Cerrar</button>
                </div>
            </div>
            </form>
            <div class="row">
              <div class="col-xs-6 col-xs-offset-3" id="alert_coordinador1">
              </div>
            </div>
		  </div>
		</div>

                
                
					<table class="table table-bordered table-striped" id="tabla-publicaciones">
						<thead>
							<tr>
								<th>Nro</th>
								<th>Orden</th>
								<th  class="text-large">Nombre Entidad</th>
								<th>Imagen</th>
								<th>Datos extras</th>
								<th>Dirección URL</th>
								<th>Tipo</th>
								<th>Estado</th>
								<th></th>
								<!--<th></th>-->
							</tr>
						</thead>
						<tbody>
							<?php $num=0; foreach ($enlaces as $d){  ?>
								<tr>
									<td><?= $num+=1;  ?></td>
                                    <td><?= $d->orden ?></td>
									<td class="text-large"><?= $d->nombre_enlace ?></td>
                                    <td><img src="<?= base_url($d->url_enlace) ?>" border="1" width="50" height="30"></td>
                                    <td><?= 'Telf.:'.$d->telefono.'</br> Fax..'.$d->fax ?></td>
                                    <td> <a href="<?php echo $d->links_enlace ?>"> <?= $d->links_enlace ?></a></td>
									<td><?= $d->tipo_enlace ?></td>
									<td>
										<?php 
											if($d->estado=="1"){
												echo "<div class='activo'>Activo</div";
											}else{
												echo "<div class='inactivo'>Inactivo</div";
											} 
										?>		
									</td>
									<td>
										
											
											<button class=""  type="submit" onclick="javascript:openDialog('#enlace<?= $d->id_enlace ?>');" style="background-color: #898989;"><div><span  class="iconos icon-plus">&nbsp</span><span class="letra-but">Revisar</span></div></button>
										
                                        
                                        
                                       
                
        <div id="enlace<?= $d->id_enlace ?>" class="avgrund-popup modal_enlace">
          <div class="col-md-12">
              
            <span class="cerrar-modal icon-cancel-circle" onclick="javascript:closeDialog();"></span>
            <div class="row">
			 <h2>Modificación de Enlace</h2>
            </div>
               <form method="POST" action="<?= base_url('client/controller_enlace/guardar_enlace')?>" enctype="multipart/form-data" >
            <div class="row">
                <div class="col-xs-12 col-sm-8 col-md-8">
                    <label class="icon-spell-check" for="titulo" >Titulo</label>
                    <input placeholder="Titulo" type="text" name="titulo" required value="<?= $d->nombre_enlace ?>" />
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4">
                    <label class="icon-spell-check" for="titulo" >Tipo</label>
                    <select name="tipo" required>
                      <option value="enlace" <?php if($d->tipo_enlace=='enlace') echo 'selected' ?>>Enlaces</option>
                      <option value="embajada" <?php if($d->tipo_enlace=='embajada') echo 'selected' ?>>Embajadas</option>
                      <option value="consulado" <?php if($d->tipo_enlace=='consulado') echo 'selected' ?>>Consulado</option>
                      <option value="ministerio" <?php if($d->tipo_enlace=='ministerio') echo 'selected' ?>>Ministerio</option>
                      <option value="org_estado" <?php if($d->tipo_enlace=='org_estado') echo 'selected' ?>>Organismos del Estado</option>
                      <option value="org_cooperacion" <?php if($d->tipo_enlace=='org_cooperacion') echo 'selected' ?>>Organismos de Cooperación</option>
                     
                    </select>
                </div>
                
                
                <div class="col-xs-12 col-sm-6 col-md-6">
                    <label class="col-md-3 icon-spell-check" for="titulo" >Link de enlace</label>
                    <input class="col-md-9" placeholder="http://www.rrnnii.upea.bo/..." type="text" name="links" value="<?= $d->links_enlace ?>"  />
                </div> 
                <div class="columna_conv col-xs-12 col-sm-6 col-md-6">
                    <label for="conv-imagen1"><img src="<?= base_url($d->url_enlace) ?>" border="1" width="50" height="30"> <span class="texto-imagen"> <input name="imagene" type="file" /> </span></label>
                    <input type="hidden" name="url" value="<?= $d->url_enlace ?>"/>
                </div>
                
                <div class="col-xs-12 col-sm-6 col-md-6">
                    <label class="col-md-3 icon-spell-check" for="titulo" >Telefono</label>
                    <input class="col-md-9" placeholder="telefono" type="text" name="telefono" value="<?= $d->telefono ?>" />
                </div> 
                <div class="col-xs-12 col-sm-6 col-md-6">
                    <label class="col-md-3 icon-spell-check" for="titulo" >Fax</label>
                    <input class="col-md-9" placeholder="fax" type="text" name="fax" value="<?= $d->fax ?>" />
                </div>
               
                <div class="col-xs-12 col-sm-6 col-md-6"><!--ORDEN-->
                    <label class="">&nbsp; Numero Orden&nbsp;</label>
                    <input placeholder="Num Orden" name="orden" type="text" value="<?= $d->orden ?>"  />
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6"><!--ESTADO-->
                    <label class="icon-menu2">&nbsp; Estado&nbsp;</label>
                    <input name="estado" type="checkbox" class="toggle-switch" checked/>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <input type="hidden" name="modificacion" value="<?= $d->id_enlace ?>"/>
                    <input class="button-plus"  type="submit" value="Actualizar"/>
                    <!--<button class="button-plus"  onclick="javascript:closeDialog();">Cerrar</button>-->
                    <a class="button-plus" href="javascript:closeDialog();">&nbsp Cerrar</a>
                </div>
                
            </div>
            </form>
              
            <div class="row">
              <div class="col-xs-6 col-xs-offset-3" id="alert_coordinador1">
              </div>
            </div>
		  </div>
		</div>

                                        
                                        
                                
									</td>
									
								</tr>
							<?php } ?>
						</tbody>
					</table>

			</div><!--TERMINA contenido de enlaces-->            
            
            
            
            
            
            
			
			

            
            
            
            
<div class="col-xs-12 contenido-general" id="galeria"><!--contenido de galeria-->
				<h2>GALERIA</h2>
					<div class="row">
						<button class="button-plus" onclick="javascript:openDialog('#galerianew');"><span class="iconos icon-plus"></span><span class="letra-but">&nbspNuevo</span></button>
					</div>
                
                
        <div id="galerianew" class="avgrund-popup modal_enlace">
          <div class="col-md-12">
              
            <span class="cerrar-modal icon-cancel-circle" onclick="javascript:closeDialog();"></span>
            <div class="row">
			 <h2>Nuevo Fotografia</h2>
            </div>
               <form method="POST" action="<?= base_url('client/controller_enlace/guardar_foto')?>" enctype="multipart/form-data" >
            <div class="row">
                <div class="col-xs-12 col-sm-8 col-md-8">
                    <label class="icon-spell-check" for="titulo" >Nombre</label>
                    <input  placeholder="Titulo" type="text" name="titulo" required  />
                </div>
                               
                <div class="columna_conv col-xs-12 col-sm-6 col-md-6">
                    <label for="conv-imagen1"><span  class="icon-image label-imagen"></span> <span class="texto-imagen"> <input name="imagene" type="file" /> </span></label>
                    <input type="hidden" name="url" value=""/>
                </div>
                
                
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <input class="button-plus"  type="submit" value="Guardar"/>
                    <button class="button-plus"  onclick="javascript:closeDialog();">Cerrar</button>
                </div>
            </div>
            </form>
            <div class="row">
              <div class="col-xs-6 col-xs-offset-3" id="alert_coordinador1">
              </div>
            </div>
		  </div>
		</div>

                
                
					<table class="table table-bordered table-striped" id="tabla-publicaciones">
						<thead>
							<tr>
								<th>Nro</th>
								<th  class="text-large">Titulo</th>
								<th>Imagen</th>
								<th>Estado</th>
								<th></th>
							</tr>
						</thead>
						<tbody>
							<?php $num=0; foreach ($galeria as $d){  ?>
								<tr>
									<td><?= $num+=1;  ?></td>
									<td class="text-large"><?= $d->nombre_galeria ?></td>
                                    <td><img src="<?= base_url($d->url_galeria) ?>" border="1" width="50" height="30"></td>
									<td>
										<?php 
											if($d->estado_galeria=="1"){
												echo "<div class='activo'>Activo</div>";
											}else{
												echo "<div class='inactivo'>Inactivo</div>";
											} 
										?>		
									</td>
									<td>
									
                                
									</td>
									
								</tr>
							<?php } ?>
						</tbody>
					</table>

			</div><!--TERMINA contenido de galeria-->            
            
            
			
			
			
            
            
            
            
			<div class="col-xs-12 contenido-general" id="coordinador"><!--AQUI EMPIEZAN LOS COORDINADORES-->
				<h2>COORDINADORES-CONTACTOS</h2>
				<div class="row">
						<div class="button-plus nuevo_coordinador" ><span class="iconos icon-plus"></span><span class="letra-but">&nbspNuevo</span></div>
				</div>
				<table class="table table-bordered table-striped" id="tabla_coordinadores">
						<thead>
							<tr>
								<th class="id_tabla">Id</th>
								<th>Coordinador</th>
								<th>Contactos</th>
								<th>Carrera</th>
								<th>Tipo</th>
								<th>Estado</th>
								<th></th>
								<th></th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($contacto as $d){  ?>
								<tr>
								<form action="<?= base_url('client/Controller_contactos/actualizar_contactos') ?>" method="POST" class="form_coor_edit">
									<td class="id_tabla">
										<div class="pre_caja">
											<input type="text" name="id_contactos" value="<?= $d->id_contactos ?>">
										</div>
									</td>
									<td>
										<div class="pre_caja">
											<span class="icon-user txtimportant"></span><input type="text" name="nombre_c" value="<?= $d->nombre_c ?>" readonly class="editable">
										</div>
										<div class="pre_caja">
											<span class="txtimportant icon-location2"></span><input type="text" name="direccion_c" value="<?= $d->direccion_c ?>" readonly class="editable">
										</div>
									</td>
									<td>
										<div class="pre_caja">
											<span class="icon-phone txtimportant"></span><input type="text" name="telefonos_c" value="<?= $d->telefonos_c ?>"  readonly class="editable">
										</div>
										<div class="pre_caja">
											<span class="icon-envelop txtimportant"></span><input type="email" name="email_c" value="<?= $d->email_c ?>"  readonly class="editable">
										</div>
									</td>
									<td>
										<div class="pre_caja">
											<span class="txtimportant icon-library"></span><input type="text" name="carrera" value="<?= $d->carrera ?>"  readonly class="editable">
										</div>
									</td>
									<td>
										<div class="pre_caja">
											<span class="txtimportant">Tipo</span><input type="text" name="tipo" readonly value="<?= $d->tipo ?>" class="editable"/>
										</div>
									</td>
									<td>
										<div class="pre_caja">
											
											<?php if($d->activo=="Activo"){
													echo '<span class="txtimportant">Activo</span>';
													echo '<input name="activo" type="checkbox" class=" toggle-switch editable_options" checked disabled/>';
												}
												else{
													echo '<span class="txtimportant">Inactivo</span>';
													echo '<input name="activo" type="checkbox" class=" toggle-switch editable_options" disabled/>';
												}
											?>
											
										</div>
									</td>
									<td>
										<button type="submit" class="botones solo_lectura"  disabled><div><span  class="iconos camb icon-floppy-disk">&nbsp</span><span class="letra-but">Guardar</span></div></button>
										<div class="pre_caja">
											<div class="txtimportant icon-unlocked editar_fila"></div>
										</div>
									</td>
									</form>
									<td>
										<form action="<?= base_url('client/Controller_contactos/elimina_contactos') ?>" method="POST" class="form_coor_del">
											<input type="hidden" name="id_contactos" value="<?= $d->id_contactos ?>">
											<button type="submit" class="botones delete_fila" ><div><span  class="iconos icon-bin">&nbsp</span><span class="letra-but">Eliminar</span></div></button>
										</form>
									</td>
								</tr>
							<?php } ?>
						</tbody>
					</table>				
			</div><!--AQUI TERMINA COORDINADORES-->





			<div class="col-xs-12 contenido-general" id="personal"><!--contenido de PERSONAL-->
				<h2>PERSONAL</h2>
				<div class="row">
						<div class="button-plus nuevo_personal" ><span class="iconos icon-plus"></span><span class="letra-but">&nbspNuevo</span></div>
				</div>
				<table class="table table-bordered table-striped" id="tabla_personal">
						<thead>
							<tr>
								<th>Nombres y Ap.</th>
								<th>Contáctos</th>
								<th>Usuario</th>
								<th>Cargo</th>
								<th>Estado</th>
								<th>Permisos</th>
								<th></th>
								<th></th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($perusuario as $d){  ?>
								<tr  class="hola">
								<form action="<?= base_url('client/Controller_personal/actualizar_personal') ?>" method="POST" class="form_personal_edit">
									<td>
										<input type="hidden" name="id_persona" value="<?= $d->id_persona ?>">
										<div class="pre_caja">
											<span class="icon-user txtimportant"></span><input type="text" name="nombre" value="<?= $d->nombre ?>" readonly class="editable">
										</div>
										<div class="pre_caja">
											<input type="text" name="paterno" value="<?= $d->paterno ?>" readonly class="editable">
										</div>
										<div class="pre_caja">
											<input type="text" name="materno" value="<?= $d->materno ?>" readonly class="editable">
										</div>
									</td>
									<td>
										<div class="pre_caja">
											<span class="txtimportant">CI</span><input type="text" name="ci" value="<?= $d->ci ?>" readonly class="editable">
										</div>
										<div class="pre_caja">
											<span class="txtimportant icon-phone"></span><input type="text" name="telefono" value="<?= $d->telefono ?>" readonly class="editable">
										</div>
										<div class="pre_caja">
											<span class="txtimportant icon-envelop"></span><input type="text" name="email" value="<?= $d->email ?>"  readonly class="editable">
										</div>	
									</td>
									<td>
										<input type="hidden" name="id_usuario" value="<?= $d->id_usuario ?>">
										<div class="pre_caja">
											<span class="txtimportant icon-user-check">&nbsp;Usuario</span><input type="text" name="usuario" value="<?= $d->usuario ?>"  readonly class="editable">
										</div>
									</td>
									<td>
										<div class="pre_caja">
											<span class="txtimportant icon-tree">&nbsp;Cargo</span><input type="text" name="cargo" value="<?= $d->cargo ?>"  readonly class="editable">
										</div>
									</td>
									<td>
										<div class="pre_caja">
											<?php if($d->estado==1){
													echo '<span class="txtimportant">Activo</span>';
													echo '<input name="estado" type="checkbox" class="usuarios_estado toggle-switch editable_options" checked disabled/>';
												}
												else{
													echo '<span class="txtimportant">Inactivo</span>';
													echo '<input name="estado" type="checkbox" class="usuarios_estado toggle-switch editable_options" disabled/>';
												}
											?>
											
										</div>
									</td>
									<td>
										<input type="hidden" name="id_detallegrupo" value="<?= $d->id_detallegrupo ?>">
										<input type="hidden" name="id_grupo" value="<?= $d->id_grupo ?>">
										<div class="pre_caja">
											<div class="txtimportant">Permisos</div>
											<select name="id_grupo" class="addpermisos editable_options" disabled>
												<option value="<?= $d->id_grupo ?>"><?= $d->nom_grupo ?></option>
												<?php foreach ($grupo as $g){   ?>
													<option value="<?= $g->id_grupo ?>"><?= $g->nom_grupo ?></option>
												<?php } ?>
											</select>
										</div>
									</td>
									<td>
										<button type="submit" class="botones solo_lectura"  disabled><div><span  class="iconos camb icon-floppy-disk">&nbsp;</span><span class="letra-but">Guardar</span></div></button>
										<div class="pre_caja">
											<div class="txtimportant icon-unlocked editar_fila"></div>
										</div>
									</td>
									</form>
									<td>
										<form action="<?= base_url('client/Controller_personal/eliminar_personal') ?>" method="POST" class="form_personal_del">
											<input type="hidden" name="id_persona" value="<?= $d->id_persona ?>">
											<input type="hidden" name="id_usuario" value="<?= $d->id_usuario ?>">
											<input type="hidden" name="id_detallegrupo" value="<?= $d->id_detallegrupo ?>">
											<input type="hidden" name="id_grupo" value="<?= $d->id_grupo ?>">
											<button type="submit" class="botones delete_fila" ><div><span  class="iconos icon-bin">&nbsp;</span><span class="letra-but">Eliminar</span></div></button>
										</form>
									</td>
								</tr>
							<?php } ?>
						</tbody>
					</table>
			</div><!--TERMINA contenido de PERSONAL-->
			<div class="col-xs-12 contenido-general" id="nosotros"><!--contenido de NOSOTROS-->
				<h2>NOSOTROS</h2>
				<div class="col-xs-12">
					<div class="col-xs-12 col-sm-10 col-md-8 col-sm-offset-1 col-md-offset-2 abajo">
						<form class="form_nosotros_edit" action="<?= base_url('client/Controller_unidad/actualizar_unidad') ?>" method="POST">
							<?php foreach ($unidad as $d) {?>
							<input type="hidden" name="id" required value="<?= $d->id ?>">
							<div class="caja_nosotros col-xs-12 col-md-6 col-md-offset-3">
								<div class="txtimportant icon-location2">&nbsp;Direccion</div>
								<input type="text" name="direccion" required readonly placeholder="Direccion de esta Unidad" value="<?= $d->direccion ?>" class="editable">
							</div>
							<div class="caja_nosotros col-xs-12 col-md-6 col-md-offset-3">
								<div class="txtimportant icon-phone">&nbsp;Teléfono</div>
								<input type="text" name="telefono" required readonly placeholder="Teléfono de esta Unidad" value="<?= $d->telefono ?>" class="editable">
							</div>
                            
                            <div class="caja_nosotros col-xs-12 col-md-6 col-md-offset-3">
								<div class="txtimportant icon-phone">&nbsp;Fax</div>
								<input type="text" name="fax" required readonly placeholder="Fax de esta Unidad" value="<?= $d->fax ?>" class="editable">
							</div>
                            <div class="caja_nosotros col-xs-12 col-md-6 col-md-offset-3">
								<div class="txtimportant icon-phone">&nbsp;Celular</div>
								<input type="text" name="celular" required readonly placeholder="Celular de esta Unidad" value="<?= $d->celular ?>" class="editable">
							</div>
                            
							<div class="caja_nosotros col-xs-12 col-md-6 col-md-offset-3">
								<div class="txtimportant icon-earth">&nbsp;Página</div>
								<input type="text" name="pagina" required readonly placeholder="www.ejmplo.com" value="<?= $d->pagina ?>" class="editable">
							</div>
							<div class="caja_nosotros col-xs-12 col-md-6 col-md-offset-3">
								<div class="txtimportant icon-envelop">&nbsp;Correo</div>
								<input type="email" name="correo" required readonly placeholder="ejemplo@ejemplo.com" value="<?= $d->correo ?>" class="editable">
							</div>
							<div class="caja_nosotros col-xs-12 col-md-6 col-md-offset-3">
								<div class="txtimportant icon-key">&nbsp;Contraseña del correo</div>
								<input type="text" name="password" required readonly placeholder="contraseña" value="<?= $d->password ?>" class="editable">
							</div>
							<div class="caja_nosotros col-xs-12 col-md-6 col-md-offset-3">
								<button type="submit" class="botones solo_lectura"  disabled><div><span  class="iconos camb icon-floppy-disk">&nbsp;</span><span class="letra-but">Guardar</span></div></button>&nbsp;&nbsp;&nbsp;
								<span class="editar_nosotros">
									<span class="txtimportant icon-unlocked"></span>
								</span>
							</div>
							<?php } ?>
						</form>
					</div>
				</div>
			</div><!--TERMINA contenido de NOSOTROS-->
		</div><!--fin contenido derecha abajo-->
	</div><!--contenido derecha-->


