//$('.scroll_modal').mCustomScrollbar({
//    theme:"rounded"
//});
$(document).ready(function(){

	//PARA EL MENU EN DISOSITIVOS MOVILES
	$(window).resize(function(){
		if($(window).width()>768){
			$('.menu').show();
			$('.logo').show();
			$('.menu-cabecera').css({'background':'#fff'});
		}
	})
	$('#menu_xs_ramiro').on('click', function(){
		var cabecera=$('.menu-cabecera');
		$(this).toggleClass('icon-list2');
		$(this).toggleClass('icon-cross');
		if ($(this).hasClass('icon-cross')) {
			cabecera.css({'background':'transparent','-webkit-box-shadow':'none','-moz-box-shadow':'none','box-shadow':'none','border-bottom':'none'});
			$('.logo').hide();
			$('.menu').show();
		}else{
			$('.menu-cabecera').css({'background':'#fff'});
			cabecera.css({'background':'#fff','-webkit-box-shadow':'0px 0px 15px 5px rgba(0,0,0,0.3)','-moz-box-shadow':'0px 0px 15px 5px rgba(0,0,0,0.3)','box-shadow':'0px 0px 15px 5px rgba(0,0,0,0.3)','border-bottom':'3px solid #eeeeee'});
			$('.logo').show();
			$('.menu').hide();
		}
		
	})





	//oculta el formulario de Login cuando esta abierta
	$('#ocultar_login_modal').on('click', function(){
		$('.modal_login_of').hide(400);
	});


	$('#login').on('click', function(){
		$('.modal_login_of').show(400);
	});

	///////////////////////////////
	//////ENVIAMOS LOS DATOS SDWL FORMULARIO DE LOGUEO PARA 
	/////INICIAR SESSION
	$('.session_start_user',this).submit(function(event){
		event.preventDefault();
		$.ajax({
			url:$(this).attr('action'),
			type:$(this).attr('method'),
			data:$(this).serialize(),
			beforeSend:function(){
				//alert('Antes de enviar');
			},
			error:function(){
				alert('ocurió un problema');
			},
			success:function(resp){
				if (resp==="error") {
					alert("Los datos no son correctos");
				}else{
					window.location.href=base_url+"admin";
				}

			}
		});
	});


	//oculta el formulario de convenio cuando esta abierta
	$('#ocultar_convenio_modal').on('click', function(){
		$('#modal_convenio').toggleClass('modal_convenio_on');
		$('#modal_convenio').toggleClass('modal_convenio_of');		
		$('#nombre_convenio').html("");
		$('#objetivo_convenio').html("");
		$('#nombre_carrera').html("");
		$('#fecha_publicacion').html("");
		$('#entidad').html("");
	});								

	//$('.detalles_convenio2',(this)).submit(function(event){
		/////////////////////////////////////DETALLES DE CONVENIOS DESPUES DE QUE SE HACE UNA CBUSQUEDA//////////////////////////////////
	$(document,this).on('submit', '.detalles_convenio', function(event){
		event.preventDefault();			
		$.ajax({
			url:$(this).attr('action'),
			type:$(this).attr('method'),
			data:$(this).serialize(),
			beforeSend:function(){
				//alert('Antes de enviar');
			},
			error:function(){
				alert('ocurió un problema al buscar convenio');
			},
			success:function(datos){
				var newdata="";
				for(var i=1; i<datos.length;i++){
					newdata=newdata+datos[i];
				}
				var json= JSON.parse(newdata);
				$.each(json, function(i, item){
					//alert(item.id_convenios+'---'+item.nombre_convenio);
					
						$('#id_convenios').val(item.id_convenios);
						$('#nombre_convenio').html(item.nombre_convenio);
						$('#objetivo_convenio').html(item.objetivo_convenio);
						$('#fecha_publicacion').html(item.fecha_publicacion);
						$('#entidad').html(item.entidad);
						$('#img_convenio').attr('src',item.img_convenio);	
						if(item.estado == "Activo"){
							$('#preinscripcion-convenio').attr('disabled', false);
							$('#preinscripcion-convenio').addClass('preinscripcion-convenio');		
							$('#preinscripcion-convenio').removeClass('preinscripcion-convenio-of');
						}else{
							$('#preinscripcion-convenio').attr('disabled', true);
							$('#preinscripcion-convenio').removeClass('preinscripcion-convenio');		
							$('#preinscripcion-convenio').addClass('preinscripcion-convenio-of');
						}
					
					
				});

			}
		});
		$.ajax({
			url:base_url+'client/controller_carrera/mostrar_carrera_asignada',
			type:$(this).attr('method'),
			data:$(this).serialize(),
			beforeSend:function(){
				//alert('Antes de enviar');
			},
			error:function(){
				alert('ocurió un problema al buscar carreras asignadas');
			},
			success:function(datos){
				var newdata="";
				for(var i=1; i<datos.length;i++){
					newdata=newdata+datos[i];
				}
				var contenido='';
				var json= JSON.parse(newdata);
				$.each(json, function(i, item){
					contenido+=item.nom_carrera+'<br>';
				});
				$('#nombre_carrera').html(contenido).css({'font-size':'12px','text-align':'justify'});
			}
		})


		$('#modal_convenio').toggleClass('modal_convenio_of');		
		$('#modal_convenio').toggleClass('modal_convenio_on');
	});
	
	
	/////////////////////////////////////BUSCADROR DE CONVENIOS///////////////////////////////////
	$('#dato-buscar-convenios').keyup(function(){	
		var id_convenio=$(this).val();
		$.ajax({
			url:base_url+'client/Controller_convenios/buscar_convenios',
			type:'POST',
			data:{id_convenio:id_convenio},
			beforeSend:function(){
				//alert('Antes de enviar');
			},
			error:function(){
				alert('ocurió un problema');
			},
			success:function(datos){
				$('#tabla-convenios').remove();
					
					var newdata="";
					for(var i=1; i<datos.length;i++){
						newdata=newdata+datos[i];
					}
					var html='';
					var json= JSON.parse(newdata);
					$.each(json, function(i, item){
					html+='	<div class="col-sm-5 col-md-6 blog_post">';
                    html+=            '<div class="list-inline">';
                                    html+='<div class="col-sm-4 col-xs-6">';
                                     html+='<div>';
                                            html+='<img class="img-responsive" src="'+base_url+item.img_convenio+'" alt="gallery 1" />';
                                        html+='</div>';
                                        html+='<span>Entidad: <br><div class="link_orange"><span class="txt_orange">'+item.entidad+'</span></div></span>';
                                        html+='<br>';
                                        html+='<div class="descargar_pdf">Descargar</div>';
                                        html+='<span class="tipo_convenio_cost">'+item.nombre_tipo_convenio+'</span>';
                                    html+='</div>';
                                    html+='<div  class="col-sm-8  col-xs-6">';
                                        html+='<div class="pull-left">';
                                            html+='<span class="blog_header">'+item.nombre_convenio+'</span><br/>';
                                            html+='<span>Fecha publicación: <br><div class="link_orange"><span class="txt_orange">'+item.fecha_publicacion+'</span></div></span>';
                                            html+='<div class="pull-right">';
                                                html+='<form class="detalles_convenio" method="POST" action="'+base_url+'client/Controller_convenios/detalle_convenio">';
                                                    html+='<input type="hidden" name="id_convenios" value="'+item.id_convenios+'">';
                                                    html+='<input type="submit" value="Más detalles" name="" class="btn btn-orange"/>';
                                                html+='</form>';            
                                            html+='</div>';
                                        html+='</div>';
                                        html+='<div class="clearfix"> </div>';
                                        html+='<p class="blog_text">'+item.objetivo_convenio+'</p>';
                                    html+='</div>';
                                html+='</div>';
                            html+='</div>';

                            });
					$('#crear-tabla-convenios').html(html);
			}
		});
	});




	////////////////BUSCAR CONTACTO CON EL KEY DEL TECLADO
	$('#dato-buscar-contacto').keyup(function(){
		var id_contacto=$(this).val();
		$.ajax({
			url:base_url+'client/Controller_contactos/buscar_contactos',
			type:'POST',
			data:{id_contacto:id_contacto},
			beforeSend:function(){
				//alert('Antes de enviar');
			},
			error:function(){
				alert('ocurió un problema');
			},
			success:function(datos){
				$('#tabla-contactos').hide();

					var html='<table class="cont-tabla table table-responsive" id="tabla-contactos">';
                                html+='<tr>';
                                 	html+='<th>Carrera</th>';
                                 	html+='<th>Encargado</th>';
                                    html+='<th>Teléfono</th>';
                                    html+='<th>Email</th>';
                                    html+='<th>Tipo</th>';
                                    html+='<th>Estado</th>';
                                html+='</tr>';
					var newdata="";
					for(var i=1; i<datos.length;i++){
						newdata=newdata+datos[i];
					}
					
					var json= JSON.parse(newdata);
					$.each(json, function(i, item){
						html+='<tr>';
							html+='<td>'+item.carrera+'</td>';
							html+='<td>'+item.nombre_c+'</td>';
							html+='<td>'+item.telefonos_c+'</td>';
							html+='<td>'+item.email_c+'</td>';
							html+='<td>'+item.tipo+'</td>';

							if (item.activo=='Inactivo') {
								html+='<td class="contacto-inactivo">'+item.activo+'</td>';
							}else{
								html+='<td>'+item.activo+'</td>';
							}

						html+='</tr>';
					});

					$('#crear-tabla-contactos').html(html);

			}
		});
	});

	//AQUI SE VA MOSTRAR EL MODAL DE PREINSCRIPCION Y TABMIEN SE LLENA LOS COMBOS DE CATEGORIA
	$('#preinscripcion-convenio').on('click', function() {
		
		//llena el combo de las categorias
		$.ajax({
			url:base_url+'client/Controller_categoria/mostrar_categoria',
			beforeSend:function(){
				//alert('Antes de enviar');
			},
			error:function(){
				alert('ocurió un problema categoria');
			},
			success:function(datos){
					var newdata="";
					for(var i=1; i<datos.length;i++){
						newdata=newdata+datos[i];
					}
					$('#pre_categoria').html('<option></option>');
					var json= JSON.parse(newdata);
					$.each(json, function(i, item){
						$('#pre_categoria').append('<option value="'+item.id_categoria+'">'+item.nom_categoria+'</option>');
					});
			}
		});
		var id_convenios=$('#id_convenios').val();

		//////////////LLENAMNOS LAS CARRERAS QUE ESTAN ASIGNADAS
		$.ajax({
			url:base_url+'client/controller_carrera/mostrar_carrera_asignada',
			type:'POST',
			data: {id_convenios:id_convenios},
			beforeSend:function(){
				//alert('Antes de enviar');
			},
			error:function(){
				alert('ocurió un problema en carreras asignadas');
			},
			success:function(datos){
					var newdata="";
					for(var i=1; i<datos.length;i++){
						newdata=newdata+datos[i];
					}
					$('#pre_carrera').html('<option></option>');
					var json= JSON.parse(newdata);
					$.each(json, function(i, item){
						$('#pre_carrera').append('<option value="'+item.id_carrera+'">'+item.nom_carrera+'</option>');
					});
			}
		});

		
		//llena el combo de las gestiones
		$.ajax({
			url:base_url+'client/Controller_gestion/mostrar_gestion',
			type:'POST',
			data: {id_convenios:id_convenios},
			beforeSend:function(){
				//alert('Antes de enviar');
			},
			error:function(){
				alert('ocurió un problema gestion');
			},
			success:function(datos){
					var newdata="";
					for(var i=1; i<datos.length;i++){
						newdata=newdata+datos[i];
					}
					$('#pre_gestion').html('<option></option>');
					var json= JSON.parse(newdata);
					$.each(json, function(i, item){
						$('#pre_gestion').append('<option value="'+item.id_gestion+'">'+item.nombre+'</option>');
					});
			}
		});
		
		$('.preinscripcion_carreras').hide();
		$('#pre_id_convenio').val($('#id_convenios').val());
		$('#pre-nombre-convenio').html($('#nombre_convenio').html());
		$('#pre-nombre-carrera').html($('#nombre_carrera').html());
		$('.modal_preinscripcion_of').show(400);
	});
	/////////muestra las carreas si es un tipo de estudiante
	$('#pre_categoria').on('change', function(){
		if ($(this).val()==1) {
			$('.preinscripcion_carreras').show(400);
			$('#pre_carrera').attr('required', 'required');
		}else{
			$('.preinscripcion_carreras').hide(400);
			$('#pre_carrera').removeAttr('required');
		}
	})

	//oculta el formulario de Login cuando esta abierta
	$('#ocultar_preinscripcion_modal').on('click', function(){
		$('.modal_preinscripcion_of').hide(400);	
	});
	//DESCE AQUI HACEMOS QUE LOS DETALLES AL LABEL SE MUESTREN 
	//entrada RU
	$('#pre_ru').on('focusin', function(){
		$('#lab_ru').hide(0, function(){
			$(this).slideDown('slow', function() {
				$(this).html(' Reg. universitario').css({'color':'#e43270'});
			});
		});
	});
	$('#pre_ru').on('focusout', function(){
				$('#lab_ru').html('').css({'color':'#aaa'});
	});

	//entrada CI
	$('#pre_ci').on('focusin', function(){
		$('#lab_ci').hide(0, function(){
			$(this).slideDown('slow', function() {
				$(this).html(' Ced. identidad').css({'color':'#e43270'});
			});
		});
	});
	$('#pre_ci').on('focusout', function(){
				$('#lab_ci').html('').css({'color':'#aaa'});
	});
	//entrada nombres
	$('#pre_nombres').on('focusin', function(){
		$('#lab_nombres').hide(0, function(){
			$(this).slideDown('slow', function() {
				$(this).html(' Nombres').css({'color':'#e43270'});
			});
		});
	});
	$('#pre_nombres').on('focusout', function(){
				$('#lab_nombres').html('').css({'color':'#aaa'});
	});
	//entrada PATERNO
	$('#pre_paterno').on('focusin', function(){
		$('#lab_paterno').hide(0, function(){
			$(this).slideDown('slow', function() {
				$(this).html(' Ap. paterno').css({'color':'#e43270'});
			});
		});
	});
	$('#pre_paterno').on('focusout', function(){
				$('#lab_paterno').html('').css({'color':'#aaa'});
	});
//entrada MATERNO
	$('#pre_materno').on('focusin', function(){
		$('#lab_materno').hide(0, function(){
			$(this).slideDown('slow', function() {
				$(this).html(' Ap. materno').css({'color':'#e43270'});
			});
		});
	});
	$('#pre_materno').on('focusout', function(){
				$('#lab_materno').html('').css({'color':'#aaa'});
	});
	//entrada correo
	$('#pre_email').on('focusin', function(){
		$('#lab_email').hide(0, function(){
			$(this).slideDown('slow', function() {
				$(this).html(' Email').css({'color':'#e43270'});
			});
		});
	});
	$('#pre_email').on('focusout', function(){
				$('#lab_email').html('').css({'color':'#aaa'});
	});
	//entrada telefono
	$('#pre_telefono').on('focusin', function(){
		$('#lab_telefono').hide(0, function(){
			$(this).slideDown('slow', function() {
				$(this).html(' telefono').css({'color':'#e43270'});
			});
		});
	});
	$('#pre_telefono').on('focusout', function(){
				$('#lab_telefono').html('').css({'color':'#aaa'});
	});

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////CON EL CODIGO QUE SIGUE SE VALIDAN Y GUARDAN LOS DATOS DEL MODAL PREINSCRIPCION///////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	$('#guardar_preinscripcion').submit(function(event){
		event.preventDefault();
		$.ajax({
			url:$(this).attr('action'),
			type:$(this).attr('method'),
			data:$(this).serialize(),
			beforeSend:function(){
				$('#alert_preinscripcion').html('Enviando información....').css({'color':'#ed7a1d'});
			},
			error:function(){
				$('#alert_preinscripcion').html('Ocurrió un problema en el servidor').css({'color':'#ed2139'});
			},
			success:function(datos){				
				
				$('#ocultar_preinscripcion_modal').html('Cerrar');
				$('#alert_preinscripcion').html($('#pre_nombres').val()+' tu código de preinscripción es: '+datos+' felicidades.').css({'color':'#1f9464'});
				$('#pre_ru').val('');
				$('#pre_ci').val('');
				$('#pre_nombres').val('');
				$('#pre_paterno').val('');
				$('#pre_materno').val('');
				$('#pre_email').val('');
				$('#pre_telefono').val('');
			}
		});
	});
///////////////////////////////////////////
//////////ENVIA EL CORREO
$('#form_correo').submit(function(event){
		event.preventDefault();
		$.ajax({
			url:$(this).attr('action'),
			type:$(this).attr('method'),
			data:$(this).serialize(),
			beforeSend:function(){
				$('#alert_correo').html('Enviando información....').css({'color':'#ed7a1d'});
			},
			error:function(){
				$('#alert_correo').html('Ocurrió un problema en el servidor').css({'color':'#ed2139'});
			},
			success:function(datos){				
				$('#alert_correo').html(datos).css({'color':'#17a05d'});
				
			}
		});
	});


});

//////////////////////////////////////////////////////////////////////////////////////////////////



////////////////////////////////////////////////////////////////////////////////
//////////////////////OTRAS ANIMACIONES////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////
///pequeña animacion para la preinscripcion
$(document).ready(parpadear);
function parpadear(){
	$('.pre-bing').fadeIn(0).fadeOut(0).fadeIn(1500).delay(1000).fadeOut(500,parpadear);
	$('.pre-medium').fadeIn(0).fadeOut(0).fadeIn(1000).delay(1500).fadeOut(500,parpadear);
}







