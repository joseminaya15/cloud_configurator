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
var returnEdit     = 0;
function buttonNext(){
	pant++;
	if(pant == 1){
		$('#next').css('display', 'none');
		$('#prev').css('display', 'none');
		if(idConfigurator != null){
			$('#next').prop("disabled", false);
			$('#next').addClass('active');
		} else {
			$('#next').prop("disabled", true);
			$('#next').removeClass('active');
		}
		firstWindow.removeClass('opacity-done');
	}
	if(tipo_ind == 'Otras'){
		especificar = $('#idEspecificar').val();
		if(especificar == null || especificar == ''){
			msj('error', 'Specify your industry');
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
		var empleados = $('#empleados').val();
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
			url  : 'en/buttonNext',
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
		responsiveClass:true,
		responsive : {
			0 : {
				items : 1
			},
			500:{
				items : 2
			},
			770:{
				items : 3
			}
		},
		navigation : false,
		mouseDrag: false,
		touchDrag:  false,
		nav : true,
		loop : false,
		margin: 30,
		dots: false,
		autoplay : false,
		autoplayTimeout : 5000,
		navText: ["<i class='fa fa-chevron-left'></i>", "<i class='fa fa-chevron-right'></i>"]
	});
}
function cambiarIdioma(){
	var idioma = $('#IdiomaHome').val();
	if(idioma == 'Español'){
		location.href = 'es';
	}else if(idioma == 'Inglés'){
		location.href = 'en';
	}else if(idioma == 'Portugués'){
		location.href = 'pt';
	}
	$.ajax({
		data : {idioma : idioma},
		url  : 'en/cambiarIdioma',
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
var checks = '';
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
	var check_2 		= $('#checkbox-2').is(':checked');
	var share   		= $('#checkbox-3').is(':checked');
	var term_cond		= null;
	var contacto		= null;
	if(nombre_completo == '' && empresa == '' && email == '' && pais == '' && cargo == '' && telefono == '' && c_email == false && terminos == false){
		validarCampos();
	}
	if(nombre_completo == null || nombre_completo == ''){
		msj('error', 'Enter your full name');
		return;
	}
	if(empresa == null || empresa == ''){
		msj('error', 'Enter your company');
		return;
	}
	if(email == null || email == ''){
		msj('error', 'Enter your email');
		return;
	}
	if (!validateEmail(email)){
		$('#email').css('border-color','red');
		return;
	}
	if(pais == null || pais == ''){
		msj('error', 'Enter your country');
		return;
	}
	if(cargo == null || cargo == ''){
		msj('error', 'Enter your position');
		return;
	}
	if(telefono == null || telefono == ''){
		msj('error', 'Enter your phone');
		return;
	}
	if(relacion == null || relacion == ''){
		msj('error', 'Select what is your relationship with SAP');
		return;
	}
	// if(c_email == true){
	// 	contacto = 1;
	// }else if(c_telefono == true){
	// 	contacto = 2;
	// }else if(c_ambos == true){
	// 	contacto = 3;
	// }
	// contacto = glob_contacto;
	if(terminos == true){
		term_cond = 1
	}else{
		term_cond = 0;
	}
	/*if(terminos == false){
		msj('error', 'Accept the terms and conditions');
		return;
	}*/
	if(check_2 == true){
		checks = 'General Marketing';
	}
	if(share == true){
		checks = 'Sharing data';
	}
	if(check_2 == true && share == true){
		checks = 'General Marketing, Sharing data';
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
				term_cond       : term_cond,
				checks 			: checks},
		url  : 'en/solicitarEstimacion',
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
var empleados = '';
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
			$('#textOperar').text('more 1000');
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
			$('#textOperar').text('Select');
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
	empleados = $('#empleados').val();
	if(empleados != 'Select' && facturacion != 'Select') {
		if(tipo_ind != null && empleados != null && facturacion != null){
			$('#next').prop("disabled", false);
		}
	}
}
function mostrarDatos(){
  	$('#industria').text('');
  	$('#factura').text('')
   	$('#tamanio').text('');
   	$('#ayuda').text('');
   	$('#infraestructura').text('');
	$.ajax({
		url  : 'en/mostrarDatos',
		type : 'POST'
	}).done(function(data){
		try{
        data = JSON.parse(data);
        if(data.error == 0){
        	$("#relacion").val('0');
			$('.selectpicker').selectpicker('refresh');
          	$('#industria').text(especificar);
          	$('#factura').text(facturacion)
           	$('#tamanio').text(empleados+" employees");
           	$('#ayuda').append(ayuda_negocio);
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
var arr_ayuda = [];
function ayudaCard(id,ayuda){
	var idButtonCard = $('#'+id);
	var indice = arr_ayuda.indexOf(ayuda);
	if( arr_ayuda.indexOf(ayuda) == -1 ) {
		arr_ayuda.push(ayuda);
		idButtonCard.addClass('js-selected');
		idButtonCard.text('Deselect');
		idButtonCard.css('color', '#000000');
	} else {
		arr_ayuda.splice(indice, 1);
		idButtonCard.removeClass('js-selected');
		idButtonCard.text('Select');
		idButtonCard.css('color', '#FFFFFF');
	}
	ayuda_negocio = arr_ayuda.toString().replace(/,/g, ' ');
	if(ayuda_negocio.length != 0){
		$('#next').prop("disabled", false);
		$('#next').addClass('active');
	} else {
		$('#next').prop("disabled", true);
		$('#next').removeClass('active');
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
	$('.mdl-card-confirmacion').addClass('confirmar');
	$('.mdl-formulario').removeClass('disabled');
	$('.js-button-next').css('display','none');
	$('#step5').addClass('active');
	$('.js-progress').find('span').css('width','100%');
	$.ajax({
		data : {confirmar : confirmar},
		url  : 'en/ConfirmarRespuestas',
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
	$('.js-window4').find('.js-button-select').removeClass('js-selected');
	idButtonSolution.addClass('js-selected');
	solucion = sol;
	if(solucion != '' || solucion != null){
		$('#next').addClass('active');
		$('#next').prop("disabled", false);
	}
}
function buttonQuestion(direction){
	var empleados = $('#empleados').val();
	if(returnEdit == 1) {
		$('#prev').prop("disabled", true);
		mostrarDatos();
		if(direction == 2){
			$('.opacity-done').removeClass('animated fadeInUp fadeOutUp fadeInDown fadeOutDown');
			fiveWindow.addClass('animated fadeInUp');
			$('#next').prop("disabled", true);
			$('#next').removeClass('active');
		}
	} else {
		$('#prev').prop("disabled", false);
		if(direction == 2){
			m++;
			if(m == 1){
				$('.opacity-done').removeClass('animated fadeInUp fadeOutUp fadeInDown fadeOutDown');
				configurator.addClass('animated fadeInDown');
				firstWindow.addClass('animated fadeOutDown');
				if(configurador != null || configurador != ''){
					$('#next').prop("disabled", false);
					$('#next').addClass('active');
				}
			}
			else if(m == 2){
				$('.opacity-done').removeClass('animated fadeInUp fadeOutUp fadeInDown fadeOutDown');
				firstWindow.addClass('opacity-done');
				firstWindow.addClass('animated fadeOutUp');
				secondWindow.addClass('animated fadeInUp');
				$('#step1').addClass('active');
				$('.js-progress').find('span').css('width','20%');
				$('#next').prop("disabled", true);		
				$('#next').removeClass('active');
				if(ayuda_negocio != null){
					$('#next').prop("disabled", false);
					$('#next').addClass('active');
				}
			}
			else if(m == 3){
				$('.opacity-done').removeClass('animated fadeInUp fadeOutUp fadeInDown fadeOutDown');
				secondWindow.addClass('animated fadeOutUp');
				thirdWindow.addClass('animated fadeInUp');
				$('#step2').addClass('active');
				$('#next').removeClass('active');
				$('.js-progress').find('span').css('width','40%');
				if(empleados != 'Select' && facturacion != 'Select') {
					if(tipo_ind != null && empleados != null && facturacion != null || tipo_ind != '' && empleados != '' && facturacion != ''){
						$('#next').prop("disabled", false);
						$('#next').addClass('active');
					} else {
						$('#next').removeClass('active');	
					}
				}else {
					$('#next').prop("disabled", true);
				}
			}
			else if(m == 4){
				if(tipo_ind == 'Otras') {
					if($('#idEspecificar').val() == '' || $('#idEspecificar').val() == null) {
						m = 3;
						$('#next').removeClass('active');
						return;
					}
				}
				$('.opacity-done').removeClass('animated fadeInUp fadeOutUp fadeInDown fadeOutDown');
				thirdWindow.addClass('animated fadeOutUp');
				fourWindow.addClass('animated fadeInUp');
				$('#step3').addClass('active');
				$('#next').removeClass('active');
				$('.js-progress').find('span').css('width','60%');
				if(solucion != ''){
					$('#next').prop("disabled", false);
					$('#next').addClass('active');
				}
			}
			else if(m == 5){
				$('.opacity-done').removeClass('animated fadeInUp fadeOutUp fadeInDown fadeOutDown');
				fourWindow.addClass('animated fadeOutUp');
				fiveWindow.addClass('animated fadeInUp');
				$('#next').prop("disabled", true);
				$('#next').removeClass('active');
				$('#step4').addClass('active');
				$('.js-progress').find('span').css('width','80%');
			}
		}
		else if(direction == 1){
			m--;
			pant--;
			//$('#next').addClass('active');
			if(m == 4){
				$('.opacity-done').removeClass('animated fadeInUp fadeOutUp fadeInDown fadeOutDown');
				fourWindow.addClass('animated fadeInDown');
				fiveWindow.addClass('animated fadeOutDown');
				if(solucion != ''){
					$('#next').prop("disabled", false);
					$('#next').addClass('active');
				}

			}
			else if(m == 3){
				$('.opacity-done').removeClass('animated fadeInUp fadeOutUp fadeInDown fadeOutDown');
				thirdWindow.addClass('animated fadeInDown');
				fourWindow.addClass('animated fadeOutDown');
				if(tipo_ind != null && empleados != null && facturacion != null){
					$('#next').prop("disabled", false);
					$('#next').addClass('active');
				}
			}
			else if(m == 2){
				$('.opacity-done').removeClass('animated fadeInUp fadeOutUp fadeInDown fadeOutDown');
				secondWindow.addClass('animated fadeInDown');
				thirdWindow.addClass('animated fadeOutDown');
				if(ayuda_negocio != null || ayuda_negocio != ''){
					$('#next').prop("disabled", false);
					$('#next').addClass('active');
				}
			}
			else if(m == 1){
				$('#next').css('display', 'none');
				$('#prev').css('display', 'none');
				$('.opacity-done').removeClass('animated fadeInUp fadeOutUp fadeInDown fadeOutDown');
				firstWindow.addClass('animated fadeInDown');
				secondWindow.addClass('animated fadeOutDown');
				if(configurador != null || configurador != ''){
					$('#next').prop("disabled", false);
					$('#next').addClass('active');
				}
			}
			else if(m < 1){
				$('.opacity-done').removeClass('animated fadeInUp fadeOutUp fadeInDown fadeOutDown');
				homePage.removeClass('animated fadeInUp fadeOutUp fadeInDown fadeOutDown');
				homePage.addClass('animated fadeInDown');
				congigurator.addClass('animated fadeOutDown');
				$('#next').addClass('active');
				m = 1;
				return;
			}
		}
	}
}
function selectConfigurator(id, dato){
	if  (idConfigurator != id) {
		ayuda_negocio = null;
		arr_ayuda     = [];
		secondWindow.find('.js-card--large__button').find('button').removeClass('js-selected');
		secondWindow.find('.js-card--large__button').find('button').text('Select');
		secondWindow.find('.js-card--large__button').find('button').text('Select');
		secondWindow.find('.js-card--large__button').find('button').css('color', '#FFFFFF');
	}
	idConfigurator = id
	configurador = dato;
	$('#next').css('display', '');
	$('#prev').css('display', '');
	secondWindow.find('.js-card--large').css('display','none');
	$('.js-card--large__'+idConfigurator).css('display','block');
	$('.js-question--title').find('strong').text('/ '+idConfigurator);
	$('#title-configurator').text(idConfigurator);
	$('.js-card-imagen').removeClass('js-card-imagen__static');
	$('#'+id).parents('.js-card-imagen').addClass('js-card-imagen__static');
	// $('.owl-nav').css('display','none');
	$('.js-window3 .owl-carousel').owlCarousel({
		lazyLoad : true,
		autoWidth: true,
		responsive : {
			0 : {
				items : 1
			},
			550:{
				items : 2
			},
			770:{
				items : 3
			},
			1000:{
				items : 4
			},
			1200:{
				items : 5
			}
		},
		navigation : false,
		mouseDrag: false,
		touchDrag:  false,
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
			500:{
				items : 2
			},
			770:{
				items : 3
			}
		},
		navigation : false,
		mouseDrag: false,
		touchDrag:  false,
		nav : true,
		loop : false,
		dots: false,
		margin: 10,
		autoplay : false,
		autoplayTimeout : 5000,
		navText: ["<i class='fa fa-chevron-left'></i>", "<i class='fa fa-chevron-right'></i>"]
	});
}
$('#ERP').click(function(){
	$('.js-nav-none .owl-nav').css('display','none');
	$('#js-carousel--ERP .owl-nav').css('display','flex');
	$('#js-carousel--ERP .owl-carousel').owlCarousel({
		lazyLoad : true,
		responsive : {
			0 : {
				items : 1
			},
			550:{
				items : 2
			},
			770:{
				items : 3
			}
		},
		navigation : false,
		mouseDrag: false,
		touchDrag:  false,
		nav : true,
		loop : false,
		dots: false,
		autoplay : false,
		margin: 10,
		autoplayTimeout : 5000,
		navText: ["<i class='fa fa-chevron-left'></i>", "<i class='fa fa-chevron-right'></i>"]
	});
})
$('#CRM').click(function(){
	$('.js-nav-none .owl-nav').css('display','none');
	$('#js-carousel--CRM .owl-nav').css('display','flex');
	$('#js-carousel--CRM .owl-carousel').owlCarousel({
		lazyLoad : true,
		responsive : {
			0 : {
				items : 1
			},
			550:{
				items : 2
			},
			770:{
				items : 3
			}
		},
		navigation : false,
		mouseDrag: false,
		touchDrag:  false,
		nav : true,
		loop : false,
		dots: false,
		autoplay : false,
		margin: 10,
		autoplayTimeout : 5000,
		navText: ["<i class='fa fa-chevron-left'></i>", "<i class='fa fa-chevron-right'></i>"]
	});
})
$('#HR').click(function(){
	$('.js-nav-none .owl-nav').css('display','none');
	$('#js-carousel--HR .owl-nav').css('display','flex');
	$('#js-carousel--HR .owl-carousel').owlCarousel({
		lazyLoad : true,
		responsive : {
			0 : {
				items : 1
			},
			500:{
				items : 2
			},
			770:{
				items : 3
			},
			1000:{
				items : 4
			},
			1200:{
				items : 5
			}
		},
		navigation : false,
		mouseDrag: false,
		touchDrag:  false,
		nav : true,
		loop : false,
		dots: false,
		margin: 10,
		autoplay : false,
		autoplayTimeout : 5000,
		navText: ["<i class='fa fa-chevron-left'></i>", "<i class='fa fa-chevron-right'></i>"]
	});
})
var tipo_ind = "";
var idButtonSelect = "";
function tipoTamaño(id,tipo){
	idButtonSelect     = $('#'+id);
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
	if(idButtonSelect.hasClass('js-selected')){
		idButtonSelect.text('Deselect');
		idButtonSelect.css('color', '#000000');
	}else {
		idButtonSelect.text('Select');
		idButtonSelect.css('color', '#FFFFFF');
	}
	$('.js-nav-toggle .owl-nav').toggleClass('dnone');
	var empleados = $('#empleados').val();
	if(empleados != 'Select' && facturacion != 'Select') {
		if(tipo_ind != null && empleados != null && facturacion != null || tipo_ind != '' && empleados != '' && facturacion != ''){
			$('#next').prop("disabled", false);
			$('#next').addClass('active');
		} else {
			$('#next').prop("disabled", true);
			$('#next').removeClass('active');
		}
	}
}
// $('html').click(function() {
// 	if( $('#facturacion').parents('.bootstrap-select').hasClass('open') != true ){
// 		$('#facturacion').parents('.bootstrap-select').addClass('open');
// 		$('.js-fixed--top').css('z-index', '0');
// 	} else{
// 		$('#facturacion').parents('.bootstrap-select').removeClass('open');
// 		$('.js-fixed--top').css('z-index', '2');
// 	}
// 	$('.js-fixed--top').css('z-index', '2');
// });
$('[data-id="facturacion"]').click(function(e){
	if( $('#facturacion').parents('.bootstrap-select').hasClass('open') != true ){
		$('#facturacion').parents('.bootstrap-select').addClass('open');
		$('.js-fixed--top').css('z-index', '0');
	} else{
		$('#facturacion').parents('.bootstrap-select').removeClass('open');
		$('.js-fixed--top').css('z-index', '2');
	}
	e.stopPropagation();
})
var facturacion = null;
function selectFacturacion(id){
	facturacion = $('#'+id).val();
	var factu = $('#facturacion').val();
	empleados = $('#empleados').val();
	$('#'+id).parents('.js-card--large__select').addClass('js-selected');
	if(empleados != '' && factu != '') {
		if((tipo_ind != null && empleados != null && factu != null) || (tipo_ind != '' && empleados != '' && facturacion != '')) {
			// $('#next').prop("disabled", false);
			// $('#next').addClass('active');
			buttonQuestion(2);
			buttonNext();
		}
	}else {
		return;
	}
	$('.js-fixed--top').css('z-index', '2');
}
function EditQuestion(id){
	returnEdit = 1;
	var windowQestion = $('.js-'+id);
	$('.opacity-done').removeClass('animated fadeInDown fadeOutDown fadeInUp fadeOutUp');
	windowQestion.addClass('animated fadeInDown');
	$('#next').addClass('active');
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
}
function closePoliticas(){
	$('#ModalPoliticas').modal('hide');
}
var glob_contacto = '';
function acceptPoliticas(){
	var check_2    = $('#checkbox-2').is(':checked');
	var share      = $('#checkbox-3').is(':checked');
	var c_email    = $('#c-email').is(':checked');
	var c_telefono = $('#c-telefono').is(':checked');
	var c_ambos    = $('#c-ambos').is(':checked');
	if(c_email == true){
		glob_contacto = 1;
	}else if(c_telefono == true){
		glob_contacto = 2;
	}else if(c_ambos == true){
		glob_contacto = 3;
	}
	if(check_2 == true){
		checks = 'General Marketing';
	}
	if(share == true){
		checks = 'Sharing data';
	}
	if(check_2 == true && share == true){
		checks = 'General Marketing, Sharing data';
	}
	$('#checkbox-1').prop('checked', true);
	$('#checkbox-1').parent().addClass('is-checked');
	$('#ModalPoliticas').modal('hide');
}
// $('#checkbox-1').change(function(){
// 	$('#ModalPoliticas').modal('show');
// })
$('#checkbox-3').change(function(){
	var share   = $('#checkbox-3').is(':checked');
	if(share == true){
		$('.js-modal').find('.mdl-card__supporting-text').find('p').css('display','block');
		$('.js-modal').find('.js-contact-label').css('display','flex');
	}else{
		$('.js-modal').find('.mdl-card__supporting-text').find('p').css('display','none');
		$('.js-modal').find('.js-contact-label').css('display','none');
	}
})
$( "#btnpant1" ).on( "click", function() {
	selectConfigurator('ERP', 'ERP');
	cambiar();
	buttonNext();
  	$('.js-nav-none .owl-nav').css('display','none');
	$('#js-carousel--ERP .owl-nav').css('display','flex');
	$('#js-carousel--ERP .owl-carousel').owlCarousel({
		lazyLoad : true,
		responsive : {
			0 : {
				items : 1
			},
			550:{
				items : 2
			},
			770:{
				items : 3
			}
		},
		navigation : false,
		mouseDrag: false,
		touchDrag:  false,
		nav : true,
		loop : false,
		dots: false,
		autoplay : false,
		margin: 10,
		autoplayTimeout : 5000,
		navText: ["<i class='fa fa-chevron-left'></i>", "<i class='fa fa-chevron-right'></i>"]
	});
});
$( "#btnpant2" ).on( "click", function() {
	selectConfigurator('CRM', 'CRM');
	cambiar();
	buttonNext();
  	$('.js-nav-none .owl-nav').css('display','none');
	$('#js-carousel--CRM .owl-nav').css('display','flex');
	$('#js-carousel--CRM .owl-carousel').owlCarousel({
		lazyLoad : true,
		responsive : {
			0 : {
				items : 1
			},
			550:{
				items : 2
			},
			770:{
				items : 3
			}
		},
		navigation : false,
		mouseDrag: false,
		touchDrag:  false,
		nav : true,
		loop : false,
		dots: false,
		autoplay : false,
		margin: 10,
		autoplayTimeout : 5000,
		navText: ["<i class='fa fa-chevron-left'></i>", "<i class='fa fa-chevron-right'></i>"]
	});
});
$( "#btnpant3" ).on( "click", function() {
	selectConfigurator('HR', 'HR');
	cambiar();
	buttonNext();
  	$('.js-nav-none .owl-nav').css('display','none');
	$('#js-carousel--HR .owl-nav').css('display','flex');
	$('#js-carousel--HR .owl-carousel').owlCarousel({
		lazyLoad : true,
		responsive : {
			0 : {
				items : 1
			},
			500:{
				items : 2
			},
			770:{
				items : 3
			},
			1000:{
				items : 4
			},
			1200:{
				items : 5
			}
		},
		navigation : false,
		mouseDrag: false,
		touchDrag:  false,
		nav : true,
		loop : false,
		dots: false,
		margin: 10,
		autoplay : false,
		autoplayTimeout : 5000,
		navText: ["<i class='fa fa-chevron-left'></i>", "<i class='fa fa-chevron-right'></i>"]
	});
});
function cambiar(){
	m = 2;
	pant = 1;
	$('.opacity-done').removeClass('animated fadeInUp fadeOutUp fadeInDown fadeOutDown');
	firstWindow.addClass('opacity-done');
	firstWindow.addClass('animated fadeOutUp');
	secondWindow.addClass('animated fadeInUp');
	$('#step1').addClass('active');
	$('.js-progress').find('span').css('width','20%');

	if(ayuda_negocio != null){
		$('#next').prop("disabled", false);
		$('#next').addClass('active');
	} else {
		$('#next').prop("disabled", true);		
		$('#next').removeClass('active');
	}
}