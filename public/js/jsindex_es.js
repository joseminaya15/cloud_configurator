var homePage       = $('#home');
var congigurator   = $('#configurator'); 
var firstWindow    = $('.js-window1');
var secondWindow   = $('.js-window2');
var thirdWindow    = $('.js-window3');
var fourWindow     = $('.js-window4');
var fiveWindow     = $('.js-window5');
var sixWindow      = $('.js-window6');
var arr_pant       = [];
var m 			   = 1;
var pant 		   = 0;
var idConfigurator = null;
var confirmar      = null;
var especificar    = '';
function buttonNext(){
	pant++;
	if(pant == 1){
		$('#next').prop("disabled", true);
	}
	if(tipo_ind == 'Otras'){
		especificar = $('#idEspecificar').val();
		if(especificar == null || especificar == ''){
			msj('error', 'Especifique su industria');
			pant = 3;
			return;
		}
	}else {
		especificar = tipo_ind;
	}
	congigurator.removeClass('animated fadeInUp fadeOutUp fadeInDown fadeOutDown');
	homePage.addClass('animated fadeOutUp');
	congigurator.addClass('animated fadeInUp');
	if(pant >= 2){
		var empleados = $('#textOperar').text();
		if(pant == 5){
			mostrarDatos();
		}
		$.ajax({
			data : {config 	  : configurador,
					pantalla  : pant,
				    ayuda 	  : ayuda_negocio,
				    tipo_ind  : especificar,
				    factu     : facturacion,
				    empleados : empleados,
				    solucion  : solucion},
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
	$('#js-carousel--configurator .owl-carousel').owlCarousel({
		lazyLoad : true,
		responsive : {
			0 : {
				items : 1
			},
			600:{
				items : 2
			},
			1200:{
				items : 3
			}
		},
		navigation : false,
		nav : true,
		loop : false,
		dots: false,
		autoplay : false,
		autoplayTimeout : 5000,
		navText: ["<i class='fa fa-chevron-left'></i>", "<i class='fa fa-chevron-right'></i>"]
	});
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
		msj('error', 'Ingrese su país');
		return;
	}
	if(cargo == null || cargo == ''){
		msj('error', 'Ingrese su cargo');
		return;
	}
	if(telefono == null || telefono == ''){
		msj('error', 'Ingrese su teléfono');
		return;
	}
	if(relacion == null || relacion == ''){
		msj('error', 'Seleccione cuál es su relación con SAP');
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
		msj('error', 'Acepte los términos y condiciones');
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
					$('#next').css('display', 'none');
					$('#prev').css('display', 'none');
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
	var buttonSelect = $('#'+id);
	var cardSelected = buttonSelect.parents('.js-card--large__select');
	if(tipo == 2){
		i++;
		if(i == 2){
			$('#textOperar').text('0 - 100');
			$("#facturacion").val('0');
			$('.selectpicker').selectpicker('refresh');
			cardSelected.addClass('js-selected');
		}else if(i == 3){
			$('#textOperar').text('100 - 500');
		}else if(i == 4){
			$('#textOperar').text('500 - 1000');
		}else if(i == 5){
			$('#textOperar').text('más de 1000');
		}else if(i > 5){
			i = 5;
			return;
		}
	}else if(tipo == 1){
		i--;
		if(i == 5){
			$('#textOperar').text('Más de 1000');
		}else if(i == 4){
			$('#textOperar').text('500 - 1000');
		}else if(i == 3){
			$('#textOperar').text('100 - 500');
		}else if(i == 2){
			$('#textOperar').text('0 - 100');
		}else if(i == 1){
			$('#textOperar').text('Seleccione');
			$("#facturacion").val('0');
			$('.selectpicker').selectpicker('refresh');
			cardSelected.removeClass('js-selected');
			$('#facturacion').parents('.js-card--large__select').removeClass('js-selected');
			return;
		}else if(i < 1){
			i = 1;
			return;
		}
	}
	var empleados = $('#textOperar').text();
	if(empleados != 'Seleccione' && facturacion != 'Seleccione') {
		if(tipo_ind != null && empleados != null && facturacion != null){
			$('#next').prop("disabled", false);
		}
	}
}
function mostrarDatos(){
	$.ajax({
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
           	$('#ayuda').append(data.Prioridad);
           	$('#infraestructura').text(solucion);
        }else{
        	return;
        }
      } catch (err){
        msj('error',err.message);
      }
	});
}
var configurador = null;
var ayuda_negocio = null;
function ayudaCard(id,ayuda){
	var idButtonCard = $('#'+id);
	$('.js-button-select').removeClass('js-selected');
	idButtonCard.addClass('js-selected');
	ayuda_negocio = ayuda;
	if(ayuda_negocio != null || ayuda_negocio != ''){
		$('#next').prop("disabled", false);
	}
}
function validarCampos(){
	var $inputs    = $('form .js-input :input');
	var formvalido = true;
	$inputs.each(function(){
		if(isEmpty($(this).val())){
			$(this).css('border-color','red');
			formvalido = false;
		}else{
			$(this).css('border-color','');
		}
	});
	return formvalido;
}
function isEmpty(val){
	if(jQuery.trim(val).length != 0)
    	return false;
		return true;
}
function ConfirmarRespuestas(){
	confirmar = 1;
	$('.js-card-confirmacion').addClass('js-disabled');
	$('.js-formulario').removeClass('js-disabled');
	$('.button-arrow.button-prev').css("display","none");
	$('.mdl-card-confirmacion').addClass('confirmar');
	$('.fp-controlArrow.fp-prev').css("display","none");
	$('.mdl-formulario').removeClass('disabled');
	$('#next').prop("disabled", true);
    $('#prev').prop("disabled", true);
	$.ajax({
		data : {confirmar : confirmar},
		url  : 'es/ConfirmarRespuestas',
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
var solucion = "";
function saveSolucion(id,sol){
	var idButtonSolution = $('#'+id);
	idButtonSolution.addClass('js-selected');
	solucion = sol;
	if(solucion != '' || solucion != null){
		$('#next').prop("disabled", false);
	}
}
function buttonQuestion(direction){
	var empleados = $('#textOperar').text();
	if(direction == 2){
		m++;
		if(m == 2){
			$('.opacity-done').removeClass('animated fadeInUp fadeOutUp fadeInDown fadeOutDown');
			firstWindow.addClass('opacity-done');
			firstWindow.addClass('animated fadeOutUp');
			secondWindow.addClass('animated fadeInUp');
			$('#next').prop("disabled", true);
			if(tipo_ind != null && empleados != null && facturacion != null){
				$('#next').prop("disabled", false);
			}
		}
		else if(m == 3){
			$('.opacity-done').removeClass('animated fadeInUp fadeOutUp fadeInDown fadeOutDown');
			secondWindow.addClass('animated fadeOutUp');
			thirdWindow.addClass('animated fadeInUp');
			$('#next').prop("disabled", true);
		}
		else if(m == 4){
			if(tipo_ind == 'Otras') {
				if($('#idEspecificar').val() == '' || $('#idEspecificar').val() == null) {
					m = 3;
					return;
				}
			}
			$('.opacity-done').removeClass('animated fadeInUp fadeOutUp fadeInDown fadeOutDown');
			thirdWindow.addClass('animated fadeOutUp');
			fourWindow.addClass('animated fadeInUp');
			$('#next').prop("disabled", true);
		}
		else if(m == 5){
			$('.opacity-done').removeClass('animated fadeInUp fadeOutUp fadeInDown fadeOutDown');
			fourWindow.addClass('animated fadeOutUp');
			fiveWindow.addClass('animated fadeInUp');
			$('#next').prop("disabled", true);
		}
	}
	else if(direction == 1){
		m--;
		pant--;
		if(m == 4){
			$('.opacity-done').removeClass('animated fadeInUp fadeOutUp fadeInDown fadeOutDown');
			fourWindow.addClass('animated fadeInDown');
			fiveWindow.addClass('animated fadeOutDown');
		}
		else if(m == 3){
			$('.opacity-done').removeClass('animated fadeInUp fadeOutUp fadeInDown fadeOutDown');
			thirdWindow.addClass('animated fadeInDown');
			fourWindow.addClass('animated fadeOutDown');
			if(tipo_ind != null && empleados != null && facturacion != null){
				$('#next').prop("disabled", false);
			}
		}
		else if(m == 2){
			$('.opacity-done').removeClass('animated fadeInUp fadeOutUp fadeInDown fadeOutDown');
			secondWindow.addClass('animated fadeInDown');
			thirdWindow.addClass('animated fadeOutDown');
			if(ayuda_negocio != null || ayuda_negocio != ''){
				$('#next').prop("disabled", false);
			}
		}
		else if(m == 1){
			$('.opacity-done').removeClass('animated fadeInUp fadeOutUp fadeInDown fadeOutDown');
			firstWindow.addClass('animated fadeInDown');
			secondWindow.addClass('animated fadeOutDown');
			if(configurador != null || configurador != ''){
				$('#next').prop("disabled", false);
			}
		}
		else if(m < 1){
			$('.opacity-done').removeClass('animated fadeInUp fadeOutUp fadeInDown fadeOutDown');
			homePage.removeClass('animated fadeInUp fadeOutUp fadeInDown fadeOutDown');
			homePage.addClass('animated fadeInDown');
			congigurator.addClass('animated fadeOutDown');
			m = 1;
			return;
		}
	}
}
function selectConfigurator(id, dato){
	idConfigurator = id
	configurador = dato;
	secondWindow.find('.js-card--large').css('display','none');
	$('.js-card--large__'+idConfigurator).css('display','block');
	$('.js-question--title').find('strong').text('/ '+idConfigurator);
	$('.js-card-imagen').removeClass('js-card-imagen__static');
	$('#'+id).parents('.js-card-imagen').addClass('js-card-imagen__static');
	// $('.owl-nav').css('display','none');
	if(configurador != null || configurador != ''){
		$('#next').prop("disabled", false);
	}
	$('.js-window3 .owl-carousel').owlCarousel({
		lazyLoad : true,
		responsive : {
			0 : {
				items : 1
			},
			600:{
				items : 2
			},
			1200:{
				items : 3
			},
			1400:{
				items : 4
			}

		},
		navigation : false,
		nav : true,
		loop : false,
		dots: false,
		autoplay : false,
		autoplayTimeout : 5000,
		navText: ["<i class='fa fa-chevron-left'></i>", "<i class='fa fa-chevron-right'></i>"]
	});
	$('.js-window4 .owl-carousel').owlCarousel({
		lazyLoad : true,
		responsive : {
			0 : {
				items : 1
			},
			600:{
				items : 2
			},
			1200:{
				items : 3
			}
		},
		navigation : false,
		nav : true,
		loop : false,
		dots: false,
		autoplay : false,
		autoplayTimeout : 5000,
		navText: ["<i class='fa fa-chevron-left'></i>", "<i class='fa fa-chevron-right'></i>"]
	});
}
$('#ERP').click(function(){
	$('#js-carousel--ERP .owl-nav').css('display','flex');
	$('#js-carousel--ERP .owl-carousel').owlCarousel({
		lazyLoad : true,
		responsive : {
			0 : {
				items : 1
			},
			600:{
				items : 2
			},
			1200:{
				items : 3
			}
		},
		navigation : false,
		nav : true,
		loop : false,
		dots: false,
		autoplay : false,
		autoplayTimeout : 5000,
		navText: ["<i class='fa fa-chevron-left'></i>", "<i class='fa fa-chevron-right'></i>"]
	});
})
$('#CRM').click(function(){
	$('#js-carousel--CRM .owl-nav').css('display','flex');
	$('#js-carousel--CRM .owl-carousel').owlCarousel({
		lazyLoad : true,
		responsive : {
			0 : {
				items : 1
			},
			600:{
				items : 2
			},
			1200:{
				items : 3
			}
		},
		navigation : false,
		nav : true,
		loop : false,
		dots: false,
		autoplay : false,
		autoplayTimeout : 5000,
		navText: ["<i class='fa fa-chevron-left'></i>", "<i class='fa fa-chevron-right'></i>"]
	});
})
$('#HR').click(function(){
	$('#js-carousel--HR .owl-nav').css('display','flex');
	$('#js-carousel--HR .owl-carousel').owlCarousel({
		lazyLoad : true,
		responsive : {
			0 : {
				items : 1
			},
			600:{
				items : 2
			},
			1200:{
				items : 3
			},
			1400:{
				items : 4
			}

		},
		navigation : false,
		nav : true,
		loop : false,
		dots: false,
		autoplay : false,
		autoplayTimeout : 5000,
		navText: ["<i class='fa fa-chevron-left'></i>", "<i class='fa fa-chevron-right'></i>"]
	});
})
var tipo_ind = "";
function tipoTamaño(id,tipo){
	var idButtonSelect = $('#'+id);
	var cardIndustrias = idButtonSelect.parents('.owl-item');
	var cardCarousel   = idButtonSelect.parents('.owl-stage');
	tipo_ind = tipo;
	thirdWindow.find('.js-card--tipo').find('.owl-item').toggleClass('js-card--large__tipo');
	thirdWindow.find('.js-card--tipo').find('.js-card--large').find('js-card--large__button').find('button').removeClass('js-selected');
	cardIndustrias.removeClass('js-card--large__tipo');
	$('.js-card--tipo').toggleClass('js-card--show');
	$('.js-card--empresa').toggleClass('animated fadeInLeft');
	cardCarousel.toggleClass('js-card--transform');
	idButtonSelect.toggleClass('js-selected');
	var empleados = $('#textOperar').text();
	if(empleados != 'Seleccione' && facturacion != 'Seleccione') {
		if(tipo_ind != null && empleados != null && facturacion != null || tipo_ind != '' && empleados != '' && facturacion != ''){
			$('#next').prop("disabled", false);
		}
	}
}
var facturacion = null;
function selectFacturacion(id){
	facturacion = $('#'+id).val();
	var empleados = $('#textOperar').text();
	$('#'+id).parents('.js-card--large__select').addClass('js-selected');
	if(empleados != 'Seleccione' && facturacion != 'Seleccione') {
		if(tipo_ind != null && empleados != null && facturacion != null || tipo_ind != '' && empleados != '' && facturacion != ''){
			$('#next').prop("disabled", false);
		}
	}
}
function EditQuestion(id){
	var windowQestion = $('.js-'+id);
	$('.opacity-done').removeClass('animated fadeInDown fadeOutDown fadeInUp fadeOutUp');
	windowQestion.addClass('animated fadeInDown');
    var res = id.substr(6, 1);
	pant = res;
	m = res;
	/*if(tipo_ind != null || tipo_ind != ''){
		$('#next').prop("disabled", false);
	}
	if(ayuda_negocio != null || ayuda_negocio != ''){
		$('#next').prop("disabled", false);
	}
	if(configurador != null || configurador != ''){*/
		$('#next').prop("disabled", false);
	//}
}
function limpiarCampos(){
	var nombre_completo = $('#nombre_completo').val("");
	var empresa  		= $('#empresa').val("");
	var email 	 		= $('#email').val("");
	var pais 	 		= $('#pais').val("");
	var cargo 	 		= $('#cargo').val("");
	var telefono 		= $('#telefono').val("");
	var relacion		= $('#relacion').val("0");
	$('.selectpicker').selectpicker('refresh');
	var c_email    		= $('#c-email').is(':checked');
	var c_telefono    	= $('#c-telefono').is(':checked');
	var c_ambos    		= $('#c-ambos').is(':checked');
	var terminos		= $('#checkbox-1').is(':checked');
	if(c_email == true){
		$('#c-email').parent().removeClass('is-checked');
	}else if(c_telefono == true){
		$('#c-telefono').parent().removeClass('is-checked');
	}else if(c_ambos == true){
		$('#c-ambos').parent().removeClass('is-checked');
	}
}
function enviarGracias(){
	var windowQestion = $('.js-window6');
    homePage.css('display','none');
    firstWindow.css('display','none');
    $('.opacity-done').removeClass('animated fadeInDown fadeOutDown fadeInUp fadeOutUp');
    windowQestion.addClass('animated fadeInUp');
	$('.button-arrow').css("display","none");
	$('.question').css("display","none");
	setTimeout(function(){ 
		location.reload();
	}, 4000);
}
