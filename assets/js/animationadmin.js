$(document).ready(function(){
	$('.mostrar_titulo').focus(function(){
		var titulo=$(this).prop('placeholder');
		$(this).parent('div').find('label').html(titulo).css({'color':'#ffa500'});
	})
	$('.mostrar_titulo').focusout(function(){
		var titulo=$(this).prop('placeholder');
		$(this).parent('div').find('label').html('').css({'color':'#898989'});
	})
	///para todos los checkbox
	$('input[type=checkbox]').on('click', function(){
		if(($(this).is(':checked'))){
			$(this).parent('div').find('.txtimportant').html('Activo');
		}else{
			$(this).parent('div').find('.txtimportant').html('Inactivo');
		}
	});
	//oculta el formulario de Login cuando esta abierta
	$('#logueo-oculta').on('click', function(){
		$('#logueo-muestra').show(400, function(){
			$('#logueo').hide(200);	
		});

	});
	$('#logueo-muestra').on('click', function(){
		$('#logueo').show(400, function(){
			$('#logueo-muestra').hide(200);
		});
	});

	////////////////////////////////////////////////////////////////////////////////
//////////////////////ANIMACION PARA LOS SUBMENUS DE CONVENIOS////////////////////////////////////////
	$('#menu-convenios').on('click',function(evento){
		$('#con-nac').toggle(200, function(){
			$('#con-int').toggle(200);
		});
		$(this).toggleClass('actual');
	});
////////////////////////////////////////////////////////////////////////////////
//////////////////////PROGRAMACION DE MODAL NUEVO CONVENIO/////////////////////
///////////////////////////////////////////////////////////////////////////////
$('.nuevo-convenio').on('click', function(){
	$('#edit_id_convenios').html('');
	$('#mod-conv-cebecera').html('<p>NUEVO</p>');
	//llenamos los combos
	llenaTiposConvenios();
	$('#modal_nuevo_convenio').show(300);
});
//CERRAR Y LIMPIAR EL MODAL DE CONVENIO
	$('#cerrar-modal-convenios').on('click', function(){
		$('#modal_nuevo_convenio').hide(350);
		$('#guardar_convenios_serv')[0].reset();
		$('.temp-gest').remove();
		$('.temp_conv_carre').remove();
		$('.edicion').html('');
		$('#alert_convenio').html('');
		$('#imagen_edit_conv').css({'background':'none'})
		$('.datos').html('<div id="primero">Arrastre aquí...</div>');
		$('.lista-carreras-asignadas').html('<div id="primero_carrera">Arrastre aquí...</div>');
	});
//LIMPIA DEL BOTON CANCELAR
	$('#cancel_conv_nuevo').on('click',function(){
        $('#modal_nuevo_convenio').hide(350);
		$('#guardar_convenios_serv')[0].reset();
		$('.temp-gest').remove();
		$('.temp_conv_carre').remove();
		$('.edicion').html('');
		$('.datos').html('<div id="primero">Arrastre aquí...</div>');
		$('.lista-carreras-asignadas').html('<div id="primero_carrera">Arrastre aquí...</div>');
	});
//AQUI SE RECOGE TODO DEL FORMJULARIO Y SE ENVIA TODA LA INFORMACION PARA GUARDAR CONVENIOS Y SUS DEPENDENCIAS
$('#guardar_convenios_serv').submit(function(event){
	event.preventDefault();
	var direccion='';
	if($('.id_convenio_for_edition').length>0){
		direccion=base_url+'client/Controller_convenios/actualizar_convenios';
	}else{
		direccion=base_url+'client/Controller_convenios/insertar_convenios';
	}
	var formData= new FormData($('#guardar_convenios_serv')[0]);
	$.ajax({
		url:direccion,
		type:$(this).attr('method'),
		data:formData,
		cache: false,
		contentType:false,
		processData:false,
		beforeSend:function(){
			//alert('Antes de enviar');
		},
		error:function(){
			alert('ocurió un problema insertar convenios');
		},
		success:function(datos){
			/*$('#alert_convenio').html(datos).css({'color':'#1f9464','font-size':'12px'});
			$('#guardar_convenios_serv')[0].reset();
			$('.temp-gest').remove();
			$('.temp_conv_carre').remove();
			$('.edicion').html('');
			$('.datos').html('<div id="primero">Arrastre aquí...</div>');
			$('.lista-carreras-asignadas').html('<div id="primero_carrera">Arrastre aquí...</div>');*/
            //alert(datos.length);
			if (datos.length>=3) {
					window.location.href=base_url+"admin";
				}else{
					$('#alert_convenio').html('Algo salió mal');
				}
		}
	});
});

////////////////////////////////////////////////////////////////////////////////
//////////////////////PROGRAMACION DE MODAL GESTIONES PARA GESTIONES//////////////////////////
///////////////////////////////////////////////////////////////////////////////
$(document,this).on('click', '#lab-conv-gestiones', function(event){
	$('#cabecera_gestiones').html('GESTIONES');
	llenaItemsGestiones();
	$('#modal_gestiona_gestiones').show(300);
});

	////elimina lo arrastrado
	$(document,this).on('click', '.accion', function(){
		$(this).parent('.ids').remove();
		var sw=false;
		$('.ids').each(function (){
			sw=true;
		});
		if (!sw) {$('.datos').html('<div id="primero">Arrastre aquí...</div>');}
	});
	////elimina las gestiones
	$(document,this).on('click', '.accion', function(){
		$(this).parent('.todo').remove();
	});
	//agrega al formulario
	$('#guardar-items2').on('click', function(){
		$('.temp-gest').remove();
		var i=0;
		$('.ids').each(function (){
			i++;
			$('#input_gestiones_conv').append("<input class='temp-gest' type='hidden' name='gestion[]' value='"+$(this).data('variables')+"'/>");
		});
		if(i!=0){
			//$('#input_gestiones_conv').append("<input class='temp-gest' type='hidden' name='gestionTop' value='"+i+"'/>");
			$('#carga_gestiones_conv').html('+'+i);
			$(this).find('span').html(' +'+i);
		}else{
			$(this).find('span').html('');
		}		
	});
	//doble click para editar una gestion
	$(document,this).on('dblclick', '.todo', function(){
		$('#id_conv_gestiona').val($(this).data('item'));
		$('#nombre_conv_gestiona').val($(this).text());
	});
	//CERRAR Y LIMPIAR EL MODAL DE GESTIONES
	$('#cerrar-modal-gestiones').on('click', function(){
		$('#modal_gestiona_gestiones').hide(350);
		$('#guardar_conv_gestiones')[0].reset();
		$('#id_conv_gestiona').val(0);
		$('.todo').remove();
	});
	///GUARDA EN LA BASE DE DATOS NUEVAS GESTIONES Y LOS MUESTRA EN SU MODAL
	$(document,this).on('submit', '#guardar_conv_gestiones', function(event){
	//$('#guardar_conv_gestiones').submit(function(event){
		event.preventDefault();
		$.ajax({
		url:base_url+'client/Controller_gestion/insertar_gestion',
		type:$(this).attr('method'),
		data:$(this).serialize(),
		beforeSend:function(){
			//alert('Antes de enviar');
		},
		error:function(){
			alert('ocurió un problema gestiones');
		},
		success:function(){
			llenaItemsGestiones();
			$('#guardar_conv_gestiones')[0].reset();
			$('#id_conv_gestiona').val(0);
		}
	});
	});

////////////////////////////////////////////////////////////////////////////////
//////////////////////PROGRAMACION DE MODAL GESTION DE TIPO DE /////////////////////
///////////////////////////////////////////////////////////////////////////////
$('#carga_tipo_conv').on('click',function(){
	llenaConvenioTipo();
	$('#modal_gestiona_tipo').show(300);
});
////PARA ELIMINAR
$(document,this).on('click', '.accion', function(){
		$(this).parent('.lista_tipo_conv').remove();
	});

////////CERRAR Y LIMPIAR EL MODAL
	$('#cerrar-modal-tipo').on('click', function(){
		llenaTiposConvenios();
		$('#modal_gestiona_tipo').hide(350);
		$('#guardar_conv_tipo')[0].reset();
		$('#id_conv_tipo').val(0);
		$('.lista_tipo_conv').remove();
	});
	///PARA EDITAR
	$(document,this).on('dblclick', '.lista_tipo_conv', function(){
		$('#id_conv_tipo').val($(this).data('item'));
		$('#nombre_conv_tipo').val($(this).text());
	});
	///////////////GUARDA EN LA BASE DE DATOS
	$(document,this).on('submit', '#guardar_conv_tipo', function(event){
	//$('#guardar_conv_gestiones').submit(function(event){
		event.preventDefault();
		$.ajax({
		url:base_url+'client/Controller_tipo_conv/insertar_tipo',
		type:$(this).attr('method'),
		data:$(this).serialize(),
		beforeSend:function(){
			//alert('Antes de enviar');
		},
		error:function(){
			alert('ocurió un problema tipo de cvonvenios');
		},
		success:function(){
			llenaConvenioTipo();
			$('#guardar_conv_tipo')[0].reset();
			$('#id_conv_tipo').val(0);
		}
	});
	});
	
	////////////////////////////////////////////////////////////////////////////////
//////////////////////PROGRAMACION DE MODAL GESTION DE CARRERAS /////////////////////
///////////////////////////////////////////////////////////////////////////////
$('#lab-conv-carreras').on('click',function(){
	llenaConvenioCarreras();
	$('#modal_gestiona_carreras').show(300);
});
////elimina lo arrastrado
	$(document,this).on('click', '.accion', function(){
		$(this).parent('.idss').remove();
		var sw=false;
		$('.idss').each(function (){
			sw=true;
		});
		if (!sw) {$('.lista-carreras-asignadas').html('<div id="primero_carrera">Arrastre aquí...</div>');}
	});
	////elimina las carreras
	$(document,this).on('click', '.accion', function(){
		$(this).parent('.lista-conv-carrera').remove();
	});
//doble click para editar una carrera
	$(document,this).on('dblclick', '.lista-conv-carrera', function(){
		$('#id_conv_carreras').val($(this).data('item'));
		$('#nombre_conv_carreras').val($(this).text());
	});

	///GUARDA EN LA BASE DE DATOS NUEVAS CARRERAS Y LOS MUESTRA EN SU MODAL
	$(document,this).on('submit', '#guardar_conv_carreras', function(event){
		event.preventDefault();
		$.ajax({
		url:base_url+'client/Controller_carrera/insertar_carrera',
		type:$(this).attr('method'),
		data:$(this).serialize(),
		beforeSend:function(){
			//alert('Antes de enviar');
		},
		error:function(){
			alert('ocurió un problema CARRERAS');
		},
		success:function(){
			llenaConvenioCarreras();
			$('#guardar_conv_carreras')[0].reset();
			$('#id_conv_carreras').val(0);
		}
	});
	});
	//agrega al formulario
	$('#guardar_items2_carrera').on('click', function(){
		$('.temp_conv_carre').remove();
		var r=0;
		$('.idss').each(function (){
			r++;
			$('#asignar_conv_carreras').append("<input class='temp_conv_carre' type='hidden' name='carrera[]' value='"+$(this).data('variables')+"'/>");
		});
		if(r!=0){
			$('#carga_carreras_conv').html('+'+r);
			$(this).find('span').html(' +'+r);
		}else{
			$(this).find('span').html('');
		}		
	});
	//CERRAR Y LIMPIAR EL MODAL DE CARRERAS
	$('#cerrar-modal-carreras').on('click', function(){
		$('#modal_gestiona_carreras').hide(350);
		$('#guardar_conv_carreras')[0].reset();
		$('#id_conv_carreras').val(0);
		$('.lista-conv-carrera').remove();
	});
	

////////////////////////////////////////////////////////////////////////////////
//////////////////////DATA TABLE PARA CONVENIOS NACIONALES/////////////////////
///////////////////////////////////////////////////////////////////////////////
$('#tabla-convenios-nacionales').DataTable();
////////////////////////////////////////////////////////////////////////////////
//////////////////////DATA TABLE PARA CONVENIOS INTERNACIONALES////////////////
///////////////////////////////////////////////////////////////////////////////
$('#tabla-convenios-internacionales').DataTable();
////////////////////////////////////////////////////////////////////////////////
//////////////////////DATA TABLE PARA TABLA PREINSCRIPCIONES////////////////
///////////////////////////////////////////////////////////////////////////////
$('#tabla_preinscripciones').DataTable();
////////////////////////////////////////////////////////////////////////////////
//////////////////////DATA TABLE PARA TABLA COODINADORES////////////////
///////////////////////////////////////////////////////////////////////////////
$('#tabla_coordinadores').DataTable();





////////////////////////////////////////////////////////////////////////////////
//////////////////////actualizar CONVENIOS/////////////////////
///////////////////////////////////////////////////////////////////////////////
	$(document,this).on('submit', '.btn_actualizar_convenios', function(event){
		event.preventDefault();
		//alert($('.inp_id_convenio',this).val());
		$('#mod-conv-cebecera').html('<p>EDICIÓN</p>');
		$('#edit_id_convenios').html('<input type="hidden" class="id_convenio_for_edition" name="id_convenios" value="'+$('.inp_id_convenio',this).val()+'">');
		$('#modal_nuevo_convenio').show(300);
		var id_convenios=$('.id_convenio_for_edition').val();
		llenaGestionesAsignadas(id_convenios);
		llenaTiposConvenios();
		llenaDatosConvenioAsignadas(id_convenios);
		llenaCarrerasAsignadas(id_convenios);
	});


////////////////////////////////////////////////////////////////////////////////
//////////////////////habilita edicion FILA DE PREINSCRIPCION/////////////////////
///////////////////////////////////////////////////////////////////////////////
	$(document,this).on('click', '.editar_fila', this, function(){
	//$('.editar_fila',this).on('click', function(){
		var fila=$(this).parent('.pre_caja').parent('td').parent('tr');
		if($(this).hasClass('icon-unlocked')){
			fila.find('td').each(function(){
				$(this).find('.editable').removeAttr('readonly').css({'border':'solid 1px #aaa'});
				$(this).find('.editable_options').removeAttr('disabled');
				$(this).find('button').removeAttr('disabled');
			});
			var id=fila.find('td').find('.pre_caja').find('.id_convenios_pre').val();
			var adicionar=fila.find('td').find('.pre_caja').find('.addgestiones');
			llenaGestionesSelect(adicionar,id);
		}
		if($(this).hasClass('icon-lock')){
			fila.find('td').each(function(){
				$(this).find('.editable').attr('readonly','readonly').css({'border':'none'});
				$(this).find('.editable_options').attr('disabled','disabled');
				$(this).find('button').attr('disabled','disabled');
			});
		}
		$(this).toggleClass('icon-lock');
		$(this).toggleClass('icon-unlocked');
	});
////////////////////////////////////////////////////////////////////////////////
//////////////////////GUARDA LA EDICION DE UNA FILA DE PREINSCRIPCION/////////////////////
///////////////////////////////////////////////////////////////////////////////
	$(document,this).on('submit', '.form_pre_edit', function(event){
		event.preventDefault();
		$.ajax({
			url:$(this).attr('action'),
			type:$(this).attr('method'),
			data:$(this).serialize(),
			beforeSend:function(){
				//alert('Antes de enviar');
			},
			error:function(){
				alert('ocurió un problema al actualizar PREINSCRIPCION');
			},
			success:function(datos){
					
			}
		});
	});
////////////////////////////////////////////////////////////////////////////////
//////////////////////elimina PREINSCRIPCION de una fila/////////////////////
///////////////////////////////////////////////////////////////////////////////
	$(document,this).on('submit', '.form_pre_del', function(event){
		var eliminar=$(this).parent('td').parent('tr');
		event.preventDefault();
		$.ajax({
			url:$(this).attr('action'),
			type:$(this).attr('method'),
			data:$(this).serialize(),
			beforeSend:function(){
				//alert('Antes de enviar');
			},
			error:function(){
				alert('ocurió un problema al eliminar PREINSCRIPCION');
			},
			success:function(){
				eliminar.remove();
			}
		});
	});





	////////////////////////////////////////////////////////////////////////////////
//////////////////////MODAL ADICIONA PERSONAL/////////////////////
///////////////////////////////////////////////////////////////////////////////
	$('.nuevo_personal', this).on('click',function(){
		llenaGrupoPermisos();
		$('#modal_nuevo_personal').show(300);
	});
	//////////////CERRAR Y LIMPIAR EL MODAL
	$('#cerrar-modal-usuario-per').on('click', function(){
		$('#modal_nuevo_personal').hide(300);
		$('#guardar_personal_serv')[0].reset();
		$('#alert_personal').html('');
	});

//////////////////////guarda nuevo personal/////////////////////
///////////////////////////////////////////////////////////////////////////////
	$(document,this).on('submit', '#guardar_personal_serv',this, function(event){
		event.preventDefault();
		//var cambiar=$(this).find('.pre_caja').find('.txtimportant');
		$.ajax({
			url:$(this).attr('action'),
			type:$(this).attr('method'),
			data:$(this).serialize(),
			beforeSend:function(){
				//alert('Antes de enviar');
			},
			error:function(){
				alert('ocurió un problema al actualizar PREINSCRIPCION');
			},
			success:function(datos){
				if (datos.length===3) {
					window.location.href=base_url+"admin";
				}else{
					$('#alert_personal').html('Algo salió mal');
				}
			}
		});
	});
	////////////////////////////////////////////////////////////////////////////////
//////////////////////GUARDA LA EDICION DE UNA FILA DE PERSONAL/////////////////////
///////////////////////////////////////////////////////////////////////////////
	$(document,this).on('submit', '.form_personal_edit',this, function(event){
		event.preventDefault();
		//var cambiar=$(this).find('.pre_caja').find('.txtimportant');
		$.ajax({
			url:$(this).attr('action'),
			type:$(this).attr('method'),
			data:$(this).serialize(),
			beforeSend:function(){
				//alert('Antes de enviar');
			},
			error:function(){
				alert('ocurió un problema al actualizar PREINSCRIPCION');
			},
			success:function(datos){
					
			}
		});
	});
	

	/////////bloquealos inputs despues de acutaliar 
	$(document,this).on('click', '.solo_lectura', this, function(){
		$(this).parent('td').find('.pre_caja').find('.editar_fila').removeClass('icon-lock');
		$(this).parent('td').find('.pre_caja').find('.editar_fila').addClass('icon-unlocked');

		$(this).parent('td').parent('tr').find('td').each(function(){
				$(this).find('.editable').attr('readonly','readonly').css({'border':'none'});
				//$(this).find('.editable_options').attr('disabled','disabled');
		});
	});



//////////////////////elimina personal usuario de una fila/////////////////////

	$(document,this).on('submit', '.form_personal_del', function(event){
		event.preventDefault();
		var objeto=$(this).parent('td').parent('tr');
		$.ajax({
			url:$(this).attr('action'),
			type:$(this).attr('method'),
			data:$(this).serialize(),
			beforeSend:function(){
				//alert('Antes de enviar');
			},
			error:function(){
				alert('ocurió un problema al eliminar PREINSCRIPCION');
			},
			success:function(datos){
				objeto.remove();
			}
		});
	});



	////////////////////////////////////////////////////////////////////////////////
//////////////////////MODAL PARA AGREGAR NUEVOS COORDINADORES/////////////////////
///////////////////////////////////////////////////////////////////////////////
	$('.nuevo_coordinador', this).on('click',function(){
		$('#modal_nuevo_coordinador').show(300);
	});
	//////////////CERRAR Y LIMPIAR EL MODAL
	$('#cerrar-modal-coordinador').on('click', function(){
		$('#modal_nuevo_coordinador').hide(300);
		$('#guardar_coordinador_serv')[0].reset();
	});

	//////////////////////guarda nuevo coordinador/////////////////////
///////////////////////////////////////////////////////////////////////////////
	$(document,this).on('submit', '#guardar_coordinador_serv',this, function(event){
		event.preventDefault();
		//var cambiar=$(this).find('.pre_caja').find('.txtimportant');
		$.ajax({
			url:$(this).attr('action'),
			type:$(this).attr('method'),
			data:$(this).serialize(),
			beforeSend:function(){
				//alert('Antes de enviar');
			},
			error:function(){
				alert('ocurió un problema en el servidor al guardar coordinador');
			},
			success:function(datos){
				if (datos.length===3) {
					window.location.href=base_url+"admin";
				}else{
					$('#alert_coordinador').html('Algo salió mal');
				}
			}
		});
	});

///////////////////ACTUALIZA LOS DATOS LOS COORDINADORES
	$(document,this).on('submit', '.form_coor_edit',this, function(event){
		event.preventDefault();
		var cambiar=$(this).find('.pre_caja').find('.txtimportant');
		var recorre=$(this).find('.pre_caja');
		$.ajax({
			url:$(this).attr('action'),
			type:$(this).attr('method'),
			data:$(this).serialize(),
			beforeSend:function(){
				//alert('Antes de enviar');
			},
			error:function(){
				alert('ocurió un problema al actualizar PREINSCRIPCION');
			},
			success:function(){
				cambiar.removeClass('icon-lock');
				cambiar.addClass('icon-unlocked');
				
				recorre.each(function(){
						$(this).find('.editable').attr('readonly','readonly').css({'border':'none'});
						$(this).find('.editable_options').attr('readonly','readonly').css({'border':'none'});
						//$(this).find('.editable_options').attr('disabled','disabled');
				});
			}
		});
	});
//////////////////////elimina Elimina datos de los coordinadorseds/////////////////////

	$(document,this).on('submit', '.form_coor_del', function(event){
		event.preventDefault();
		var objeto=$(this).parent('td').parent('tr');
		$.ajax({
			url:$(this).attr('action'),
			type:$(this).attr('method'),
			data:$(this).serialize(),
			beforeSend:function(){
				//alert('Antes de enviar');
			},
			error:function(){
				alert('ocurió un problema al eliminar PREINSCRIPCION');
			},
			success:function(datos){
				objeto.remove();
			}
		});
	});
	


	////////////////////////////////////////////////////////////////////////////////
//////////////////////habilita edicion del formulario nosotros/////////////////////
///////////////////////////////////////////////////////////////////////////////
	$(document,this).on('click', '.editar_nosotros', this, function(){		
		var obj=$(this).find('.txtimportant');
		var recorre=$(this).parent('.caja_nosotros').parent('form').find('.caja_nosotros');
		if(obj.hasClass('icon-unlocked')){
			recorre.each(function(){
				recorre.find('input').removeAttr('readonly').css({'border':'dashed 2px #aaa'});
				recorre.find('button').removeAttr('disabled');
			});
		}
		if(obj.hasClass('icon-lock')){
			recorre.each(function(){
				recorre.find('input').attr('readonly','readonly').css({'border':'none'});
				recorre.find('button').attr('disabled','disabled');
			});
		}
		obj.toggleClass('icon-lock');
		obj.toggleClass('icon-unlocked');
	});
///////////////////ACTUALIZA LOS DATOS DE LA TABLA NOSOTROS
	$(document,this).on('submit', '.form_nosotros_edit',this, function(event){
		event.preventDefault();
		var cambiar=$(this).find('.caja_nosotros').find('.editar_nosotros').find('.txtimportant');
		var recorre=$(this).find('.caja_nosotros');
		$.ajax({
			url:$(this).attr('action'),
			type:$(this).attr('method'),
			data:$(this).serialize(),
			beforeSend:function(){
				//alert('Antes de enviar');
			},
			error:function(){
				alert('ocurió un problema al actualizar PREINSCRIPCION');
			},
			success:function(datos){
				cambiar.removeClass('icon-lock');
				cambiar.addClass('icon-unlocked');
				
				recorre.each(function(){
						$(this).find('.editable').attr('readonly','readonly').css({'border':'none'});
						//$(this).find('.editable_options').attr('disabled','disabled');
				});
			}
		});
	});



	////////////////////////////////////////////////////////////////
/////////////////MODAL PARA LA EDICION DE USUARIOS Q INICIAN SESSION
////////////////////////////////////////////////////////////////////
$('#avatar').find('img').on('click', function(){
	$('#modal_edit_user').slideDown(400);
})
//////////7cierra el modal edicion de ususario
$('#close-modal-user').on('click', function(){
	$('#modal_edit_user').slideUp(400);
	$('#edit_user_serv')[0].reset();
	$('.set_paswwords').slideUp();
	$('.set_paswwords').find('.columna').find('input').removeAttr('required');
	$('#alert_user').html('');
})

///////////////////////////////(///)
/////////////////CIERRA SESSION
////////////////////////////////////
$('#cierra_session').on('click', function(){
	$.ajax({
		url: base_url+'client/Controller_logueo/cerrarsession',
		beforeSend:function(){
				//alert('Antes de enviar');
			},
			error:function(){
				alert('ocurió un problema al cerrar session');
			},
			success:function(datos){
			 window.location.href= base_url;
		}
	});
});
///////////////////////////////////////////////////
/////////////////CONTROLA LA OPCION DE CAMNBIAR O NO LA CONTRASEÑA DE LOS USUARIOS
$('#user-set-pass').on('click', function(){
		if(($(this).is(':checked'))){
			$('.set_paswwords').slideDown(400);
			$('.set_paswwords').find('.columna').find('input').attr('required','required');
		}else{
			$('.set_paswwords').slideUp(400);
			$('.set_paswwords').find('.columna').find('input').removeAttr('required');
		}
	});


//////////////////////////////////////////
//////verifica que la nueva contraseña se confirme
$('#new_user_password2').keyup(function(){
	if($('#new_user_password').val()===$('#new_user_password2').val()){
		$('#alert_user').html('').css({'color':'#000'});
	}else{
		$('#alert_user').html('Las contraseñas nuevas no son iguales').css({'color':'red'});
	}
})
///////////////////////////////////////////////////
/////////////GUARDA LA EDICION DE LOS USUARIOS
$('#edit_user_serv').on('submit', function(event){
	event.preventDefault();
	var formData= new FormData($('#edit_user_serv')[0]);
	$.ajax({
			url:$(this).attr('action'),
			type:$(this).attr('method'),
			data:formData,
			cache: false,
			contentType:false,
			processData:false,
			beforeSend:function(){
				//alert('Antes de enviar');
			},
			error:function(){
				alert('problema para conectarse al servidor (actualizar usuario)');
			},
			success:function(datos){
				$('#alert_user').html(datos).css({'color':'red'});
			}
		});
})


});//termina el ready



////////////////////////////////////////////////////////////////////////////////
//////////////////////OTRAS ANIMACIONES////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////
///pequeña animacion para la preinscripcio
$(document).ready(parpadear);
function parpadear(){
	
	$('#logo-menu').fadeOut(1500).fadeIn(1500,parpadear);
}

///FUNCION LLENA COMBO CATEGORIA
function llenaTiposConvenios(){
	$.ajax({
		url:base_url+'client/Controller_tipo_conv/mostrar_tipo',
		beforeSend:function(){
			//alert('Antes de enviar');
		},
		error:function(){
			alert('ocurió un problema Tipo de Convenio');
 		},
		success:function(datos){
				var newdata="";
				for(var i=1; i<datos.length;i++){
					newdata=newdata+datos[i];
				}
				$('#conv-tipo').html('<option></option>');
				var json= JSON.parse(newdata);
				$.each(json, function(i, item){
					$('#conv-tipo').append('<option value="'+item.id_tipo_convenio+'">'+item.nombre_tipo_convenio+'</option>');
				});
		}
	});
}
 function llenaItemsGestiones(){
 	$('#items-lista-gestion').html('');
 		$.ajax({
			url:base_url+'client/Controller_gestion/mostrar_todo_gestion',
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
				var html='';
				var json= JSON.parse(newdata);
				$.each(json, function(i, item){
					html+='<div class="todo" data-item="'+item.id_gestion+'">'+item.nombre+'<span class="icon-bin accion"></span></div>';
				});
				$('#items-lista-gestion').html(html).slideUp(5).slideDown(500);
				////////////aigna para ser draggaable
				$('#items-lista-gestion').find('.todo').draggable({
						helper:'clone',
						apendTo:'.items-guardar-gestion'
					});
			//////asigna para ser droppable
				$('#items-guardar-gestion').find('.datos').droppable({
					drop: function (event, ui){
						$(this).find('#primero').remove();
						$(this).append('<div class="ids" data-variables="'+ui.draggable.data('item')+'">'+ui.draggable.text()+'<span class="icon-bin accion"></span></div>');
						$(this).find('#primero').remove();
					}
				});
			}
	});	
 }



 function llenaConvenioTipo(){
 	$('#items-lista-tipo').html('');
 		$.ajax({
			url:base_url+'client/Controller_tipo_conv/mostrar_tipo',
			beforeSend:function(){
				//alert('Antes de enviar');
			},
			error:function(){
				alert('ocurió un problema mostrar tipo');
			},
			success:function(datos){
				var newdata="";
				for(var i=1; i<datos.length;i++){
					newdata=newdata+datos[i];
				}
				var html='';
				var json= JSON.parse(newdata);
				$.each(json, function(i, item){
					html+='<div class="lista_tipo_conv" data-item="'+item.id_tipo_convenio+'">'+item.nombre_tipo_convenio+'<span class="icon-bin accion"></span></div>';
				});
				$('#items-lista-tipo').html(html).slideUp(5).slideDown(500);
			}
	});
 }

 function llenaConvenioCarreras(){
 	$('#items-lista1-carreras').html('');
 		$.ajax({
			url:base_url+'client/Controller_carrera/mostrar_carrera',
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
				var texto='';
				var json= JSON.parse(newdata);
				$.each(json, function(i, item){
					texto+='<div class="lista-conv-carrera" data-item="'+item.id_carrera+'">'+item.nom_carrera+'<span class="icon-bin accion"></span></div>';
				});
				$('#items-lista1-carreras').html(texto).slideUp(5).slideDown(500);
				////////////aigna para ser draggaable
				$('#items-lista1-carreras').find('.lista-conv-carrera').draggable({
						helper:'clone',
						apendTo:'.lista-carreras-asignadas',
					});
			//////asigna para ser droppable
				$('#items-guardar-carreras').find('.lista-carreras-asignadas').droppable({
					drop: function (event, ui){
						$('#primero_carrera').remove();
						$(this).append('<div class="idss" data-variables="'+ui.draggable.data('item')+'">'+ui.draggable.text()+'<span class="icon-bin accion"></span></div>');
						$('#primero_carrera').remove();
					}
				});
			}
	});	
 }



 ///FUNCION LLENA COMBO CATEGORIA
function llenaGestionesAsignadas(id_convenios){
	$.ajax({
		url:base_url+'client/Controller_gestion/mostrar_gestion',
		type:'POST',
		data:{id_convenios:id_convenios},
		beforeSend:function(){
			//alert('Antes de enviar');
		},
		error:function(){
			alert('ocurió un problema Tipo de Convenio');
		},
		success:function(datos){
				var newdata="";
				for(var i=1; i<datos.length;i++){
					newdata=newdata+datos[i];
				}
				var json= JSON.parse(newdata);
				var ind=0;
				$(this).find('#primero').remove();
				$.each(json, function(i, item){
					$('#items-guardar-gestion').find('.datos').append('<div class="ids" data-variables="'+item.id_gestion+'">'+item.nombre+'<span class="icon-bin accion"></span></div>');
					$('#input_gestiones_conv').append("<input class='temp-gest' type='hidden' name='gestion[]' value='"+item.id_gestion+"'/>");
					ind++;
				});
				$('#carga_gestiones_conv').html('+'+ind);
		}
	});
}
///////////funcion llena todos los datso para ser actualizados o ver los detalles
function llenaDatosConvenioAsignadas(id_convenios){
	$.ajax({
		url:base_url+'client/Controller_convenios/buscar_convenios_actualizar',
		type:'POST',
		data:{id_convenios:id_convenios},
		beforeSend:function(){
			//alert('Antes de enviar');
		},
		error:function(){
			alert('ocurió un problema al llenar los datos de convenio');
		},
		success:function(datos){
				var newdata="";
				for(var i=1; i<datos.length;i++){
					newdata=newdata+datos[i];
				}
				var json= JSON.parse(newdata);
				var ind=0;
				$(this).find('#primero').remove();
				$.each(json, function(i, item){
					llenaOptionDefectoTipoConvenio(item.id_tipo_convenio);
					$('#conv-nombre').val(item.nombre_convenio);
					$('#conv-objetivo').val(item.objetivo_convenio);
					$('#conv-objetivo').val(item.objetivo_convenio);
					$('#imagen_edit_conv').css({'background':'url("'+base_url+item.img_convenio+'")','background-position':'center center',
					'background-repeat':'no-repeat','background-attachment':'fixed','background-size':'cover'});
					$('#conv-pdf_name').append(item.pdf_convenio);
					$('#conv-duracion').val(item.tiempo_duracion);
					$('#conv-firma').val(item.fecha_firma);
					$('#conv-finalizacion').val(item.fecha_finalizacion);
					$('#conv-direccion').val(item.direccion);
					$('#conv-entidad').val(item.entidad);
					$('#conv-telefono').val(item.telefono);
					$('#conv-email').val(item.email);
					if(item.estado=='Activo'){
						$('#conv-estadov').prop('checked',true);
					}else if(item.estado=='Concluido'){
						$('#conv-estadov').prop('checked',false);
					}
                    if(item.estado=='Inactivo'){
						$('#conv-estado').prop('checked',false);
					}else{
						$('#conv-estado').prop('checked',true);
					}
				});
		}
	});
}
/*
background-position: center center;
	background-repeat: no-repeat;
	background-attachment: fixed;
	background-size: cover;
*/
function llenaOptionDefectoTipoConvenio(id_tipo_convenio){
	$.ajax({
		url:base_url+'client/Controller_tipo_conv/buscar_tipo_actualizar',
		type:'POST',
		data:{id_tipo_convenio:id_tipo_convenio},
		beforeSend:function(){
			//alert('Antes de enviar');
		},
		error:function(){
			alert('ocurió un problema Tipo de Convenio');
		},
		success:function(datos){
				var newdata="";
				for(var i=1; i<datos.length;i++){
					newdata=newdata+datos[i];
				}
				var json= JSON.parse(newdata);
				var ind=0;
				//$(this).find('#primero').remove();
				$('#conv-tipo').append('<option id="Tipo_default" selected></option>');
				$.each(json, function(i, item){
					$('#Tipo_default').val(item.id_tipo_convenio).html(item.nombre_tipo_convenio);
				});
		}
	});
}



/////////////va llenar las carreras que se han asignado a un determinado convenio
function llenaCarrerasAsignadas(id_convenios){
	$.ajax({
		url:base_url+'client/Controller_carrera/mostrar_carrera_asignada',
		type:'POST',
		data:{id_convenios:id_convenios},
		beforeSend:function(){
			//alert('Antes de enviar');
		},
		error:function(){
			alert('ocurió un problema carreras asignadas');
		},
		success:function(datos){
				var newdata="";
				for(var i=1; i<datos.length;i++){
					newdata=newdata+datos[i];
				}
				var json= JSON.parse(newdata);
				var ind=0;
				$(this).find('#primero').remove();
				$.each(json, function(i, item){
					$('#items-guardar-carreras').find('.lista-carreras-asignadas').append('<div class="idss" data-variables="'+item.id_carrera+'">'+item.nom_carrera+'<span class="icon-bin accion"></span></div>');
					$('#asignar_conv_carreras').append("<input class='temp_conv_carre' type='hidden' name='carrera[]' value='"+item.id_carrera+"'/>");
					
					ind++;
				});
				$('#carga_carreras_conv').html('+'+ind);
		}
	});
}
/////////////llena las gestiones asignadas a un convenio para su edicion
function llenaGestionesSelect(adicionar,id_convenios){
	$.ajax({
		url:base_url+'client/Controller_gestion/mostrar_gestion',
		type:'POST',
		data:{id_convenios:id_convenios},
		beforeSend:function(){
			//alert('Antes de enviar');
		},
		error:function(){
			alert('ocurió un problema carreras asignadas');
		},
		success:function(datos){
				var newdata="";
				for(var i=1; i<datos.length;i++){
					newdata=newdata+datos[i];
				}
				var json= JSON.parse(newdata);
				$.each(json, function(i, item){
					adicionar.append('<option value="'+item.id_gestion+'">'+item.nombre+'</option>')
				});
		}
	});
}
function llenaGrupoPermisos(){
	$('#per-permiso').html('');
 		$.ajax({
			url:base_url+'client/Controller_grupo/mostrar_grupo',
			beforeSend:function(){
				//alert('Antes de enviar');
			},
			error:function(){
				alert('ocurió un problema en grupo');
			},
			success:function(datos){
				var newdata="";
				for(var i=1; i<datos.length;i++){
					newdata=newdata+datos[i];
				}
				$('#per-permiso').append('<option></option>');
				var json= JSON.parse(newdata);
				$.each(json, function(i, item){
					$('#per-permiso').append('<option value="'+item.id_grupo+'">'+item.nom_grupo+'</option>');
				});
			}
	});
}























////////////////////////////////////////////////////////////////////////////////
//////////////////////PROGRAMACION DE publicaciones/////////////////////
///////////////////////////////////////////////////////////////////////////////
	$('.nuevo_publicaciones', this).on('click',function(){
		$('#modal_nuevo_publicaciones').show(300);
	});
	
	/*
$('.nuevo_publicaciones').on('click', function(){
	$('#edit_id_convenios').html('');
	$('#mod-conv-cebecera').html('<p>NUEVO</p>');
	//llenamos los combos
	llenaTiposConvenios();
	$('#modal_nuevo_publicaciones').show(300);
});*/






