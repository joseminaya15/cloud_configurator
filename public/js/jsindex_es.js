var homePage     = $('#home');
var congigurator = $('#configurator'); 
var pant 		 = 0;
var arr_pant     = [];
function buttonNext(){
	pant++;
	homePage.addClass('animated fadeOutUp');
	congigurator.addClass('animated fadeInDown');
	if(pant >= 2){
		$.ajax({
			data : {config 	  : configurador,
					pantalla  : pant,
				    ayuda 	  : ayuda_negocio},
			url  : 'es/buttonNext',
			type : 'POST'
		}).done(function(data){
			try{
	        data = JSON.parse(data);
	        if(data.error == 0){
	        }else{
	        	return;
	        }
	      } catch (err){
	        msj('error',err.message);
	      }
		});
	}
}
function cambiarIdioma(){
	var idioma = $('#IdiomaHome').val();
	if(idioma == 'Español'){
		location.href = 'Es';
	}else if(idioma == 'Inglés'){
		location.href = 'En';
	}else if(idioma == 'Portugués'){
		location.href = 'Pt';
	}
	$.ajax({
		data : {idioma : idioma},
		url  : 'es/cambiarIdioma',
		type : 'POST'
	}).done(function(data){
		try{
        data = JSON.parse(data);
        if(data.error == 0){
        }else{
        	return;
        }
      } catch (err){
        msj('error',err.message);
      }
	});
}
function solicitarEstimacion(){
	var nombre_completo = $('#nombre_completo').val(); 
	var empresa  		= $('#empresa').val();
	var email 	 		= $('#email').val();
	var pais 	 		= $('#pais').val();
	var cargo 	 		= $('#cargo').val();
	var telefono 		= $('#telefono').val();
	var relacion		= $('#relacion').val();
	var c_email    		= $('#c-email').is(':checked');
	var c_telefono    	= $('#c-telefono').is(':checked');
	var c_ambos    		= $('#c-ambos').is(':checked');
	var terminos		= $('#checkbox-1').is(':checked');
	var term_cond		= null;
	var contacto		= null;
	if(nombre_completo == '' && empresa == '' && email == '' && pais == '' && cargo == '' && telefono == '' && c_email == false && terminos == false){
		validarCampos();
	}
	if(nombre_completo == null || nombre_completo == ''){
		msj('error', 'Ingrese su nombre completo');
		return;
	}
	if(empresa == null || empresa == ''){
		msj('error', 'Ingrese su empresa');
		return;
	}
	if(email == null || email == ''){
		msj('error', 'Ingrese su email');
		return;
	}
	if (!validateEmail(email)){
		$('#email').css('border-color','red');
		return;
	}
	if(pais == null || pais == ''){
		msj('error', 'Ingrese su pa&iacute;s');
		return;
	}
	if(cargo == null || cargo == ''){
		msj('error', 'Ingrese su cargo');
		return;
	}
	if(telefono == null || telefono == ''){
		msj('error', 'Ingrese su tel&eacute;fono');
		return;
	}
	if(relacion == null || relacion == ''){
		msj('error', 'Seleccione cu&aacute;l es su relaci&oacute;n con SAP');
		return;
	}
	if(c_email == true){
		contacto = 1;
	}else if(c_telefono == true){
		contacto = 2;
	}else if(c_ambos == true){
		contacto = 3;
	}
	if(c_email == null || c_email == ''){
		contacto = '-';
	}
	if(terminos == true){
		term_cond = 1
	}else{
		term_cond = 0;
	}
	if(terminos == false){
		msj('error', 'Acepte los t&eacute;rminos y condiciones');
		return;
	}
	$('.button-confirmar').prop("disabled", true);
	$.ajax({
		data : {nombre_completo : nombre_completo,
				empresa 	    : empresa,
				email 		  	: email,
				pais 			: pais,
				cargo 		  	: cargo,
				telefono 		: telefono,
				relacion 		: relacion,
				contacto 		: contacto,
				term_cond       : term_cond},
		url  : 'es/solicitarEstimacion',
		type : 'POST'
	}).done(function(data){
		try{
        	data = JSON.parse(data);
        	if(data.error == 0){
				if(confirmar == 1){
					limpiarCampos();
					enviarGracias();
				}
        	}else{
        		return;
        	}
      } catch (err){
        msj('error',err.message);
      }
	});
}
function soloLetras(e){
    key 	   	   = e.keyCode || e.which;
    tecla 	   	   = String.fromCharCode(key).toLowerCase();
    letras     	   = " áéíóúabcdefghijklmnñopqrstuvwxyz";
    especiales 	   = "8-37-39-46";
    tecla_especial = false
    for(var i in especiales){
         if(key == especiales[i]){
             tecla_especial = true;
             break;
         }
     }
     if(letras.indexOf(tecla)==-1 && !tecla_especial){
         return false;
     }
 }
 function valida(e){
    tecla = (document.all) ? e.keyCode : e.which;
    if (tecla==8){
        return true;
    }
    patron 		=/[0-9]/;
    tecla_final = String.fromCharCode(tecla);
    return patron.test(tecla_final);
}
function validateEmail(email){
    var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(email);
}
var i = 1;
function operar(id,tipo){
	var buttonSelect = $('#'+id+'.select-one');
	var cardSelec    = $('#'+id+'.select-one').parents('.content-card').find('.contenido');
	var divIncrement = $('#'+id+'.select-one').parent();
	var cardHidden   = $('.mdl-card-question.visi-hidden');
	var modal        = $('#ModalQuestion');
	if(tipo == 2){
		i++;
		if(i == 2){
			$('#textOperar').text('1 - 50');
			divIncrement.addClass('select-increment');
			cardSelec.addClass('aparecer');
			cardHidden.fadeIn(400);
			$("#facturacion").val('0');
			$('.selectpicker').selectpicker('refresh');
			if (window.matchMedia("(max-width: 1200px)").matches){
			    var card    = buttonSelect.closest('.mdl-card-question');
			    var img     = card.find('.contenido-left').find('img');
			    var content = card.find('.contenido-right').find('p');
			    var small   = card.find('.contenido-right').find('small');
			    modal.find('.mdl-card__title').find('img').attr({
			        "alt"   : img.attr('alt'),
			        "src"   : img.attr('src')
			    });
			    modal.find('.mdl-card__supporting-text').find('p').text(content[0].innerText);
			    modal.find('.mdl-card__supporting-text').find('small').text(small[0].innerText);
				modal.modal('show');
			}
		//será máximo de 1000 a 2500
		}else if(i == 3){
			$('#textOperar').text('50 - 100');
		}else if(i == 4){
			$('#textOperar').text('100 - 500');
		}else if(i == 5){
			$('#textOperar').text('500 - 1000');
		}else if(i == 6){
			$('#textOperar').text('1000 - 2500');
		}else if(i == 7){
			$('#textOperar').text('2500 - 5000');
		}else if(i == 8){
			$('#textOperar').text('5000 a más');
		}else if(i > 8){
			i = 8;
			return;
		}
	}else if(tipo == 1){
		i--;
		if(i == 7){
			$('#textOperar').text('2500 - 5000');
		}else if(i == 6){
			$('#textOperar').text('1000 - 2500');
		}else if(i == 5){
			$('#textOperar').text('500 - 1000');
		}else if(i == 4){
			$('#textOperar').text('100 - 500');
		}else if(i == 3){
			$('#textOperar').text('50 - 100');
		}else if(i == 2){
			$('#textOperar').text('1 - 50');
		}else if(i == 1){
			$('#textOperar').text('Seleccione');
			divIncrement.removeClass('select-increment');
			$('.mdl-tablet').find('.mdl-select').removeClass('select-increment');
			cardSelec.removeClass('aparecer');
			$('.contenido').removeClass('aparecer');
			cardHidden.fadeOut(400);
			$("#facturacion").val('0');
			$('.selectpicker').selectpicker('refresh');
			return;
		}else if(i < 1){
			i = 1;
			return;
		}
	}
}
function mostrarDatos(){
	$.ajax({
		data : {array_ids   : array_ids,
				array_3pant : array_3pant},
		url  : 'es/mostrarDatos',
		type : 'POST'
	}).done(function(data){
		try{
        data = JSON.parse(data);
        if(data.error == 0){
        	$("#relacion").val('0');
			$('.selectpicker').selectpicker('refresh');
          	$('#industria').text(data.Industria);
          	$('#factura').text(data.Factura_anual)
           	$('#tamanio').text(data.Tamanio);
           	$('#prioridad').find('li').remove();
           	$('#prioridad').append(data.Prioridad);
           	$('#infraestructura').text(data.Infraestructura);
        }else{
        	return;
        }
      } catch (err){
        msj('error',err.message);
      }
	});
}
var configurador = null;
function clickCard(dato){
	configurador = dato;
	arr_pant.push(dato);
}
var ayuda_negocio = null;
function ayudaCard(ayuda){
	ayuda_negocio = ayuda;
	arr_pant.push(ayuda);
}