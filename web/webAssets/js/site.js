/**
 * JS standar para micrositio de registro
 *
 * # author      2 Geeks one Monkey
 * # copyright   Copyright (c) 2017, 2 Geeks one Monkey
 * # website     www.2gom.com.mx
 * # contact     contacto@2gom.com.mx
 */

var contenedorRegistro = '.js-registro-contenedor';
var contenedorPremio = '.js-premio-contenedor';
var contenedorGracias = '.js-gracias-contenedor';
var contenedorTarjetas = '.js-tarjetas-contenedor';
var contenedorGlobal = '.container';

function step1() {
	$(contenedorPremio).hide();
	$(contenedorTarjetas).show();
	$(contenedorGlobal).addClass('container-home');
	$(contenedorGlobal).removeClass('container-ribbon');

	$('img.logo').hide();
}

function step2() {
	$(contenedorTarjetas).hide();
	$(contenedorRegistro).show();
	$(contenedorGlobal).removeClass('container-premio');
	$(contenedorGlobal).removeClass('container-home');
	$(contenedorGlobal).addClass('container-ribbon');
	$('img.logo').attr('src', 'webAssets/images/logo-fa.png');
	$('img.logo').show();
}

function step3() {
	$(contenedorRegistro).hide();
	$(contenedorPremio).show();
	$('img.logo').attr('src', 'webAssets/images/logo-giro.png');
	$(contenedorGlobal).removeClass('container-ribbon');
	$(contenedorGlobal).addClass('container-premio');
}




$(document).ready(function(){
	console.log("Jquery Running");

	// Muestra el aviso de privacidad
	$('.terminos-wrapper .message').on('click', function () {
		showOverlay(overlayIsShowing)
	});

	// Aceptar aviso de privacidad
	$('.js-btn-aceptar-aviso').on('click', function (e) {
		e.preventDefault();

		$('.js-check-box-aviso').css('background', '#D98C34');

		$('.js-check-box-aviso').addClass('js-check-box-aviso-checked');
		showOverlay(overlayIsShowing)
	});

	$('.js-check-box-aviso').on('click', function (e) {
		e.preventDefault();
		var elemento = $(this);

		if (elemento.hasClass('js-check-box-aviso-checked')) {
			$('.js-check-box-aviso').css('background', 'white');

			$('.js-check-box-aviso').removeClass('js-check-box-aviso-checked');
		} else {
			showOverlay(overlayIsShowing)
		}
	});

	// Cerrar aviso de privacidad
	$('.js-btn-cerrar-aviso').on('click', function (e) {
		e.preventDefault();
		cerrarAviso();
	});

	$('.js-next-step').on('click', function (e) {
		//e.preventDefault();
		//step2();

		var l = Ladda.create(this);
			l.start();
	});

	// Al campo de texto número validara solo numeros
	$('#entusuarios-txt_telefono_celular').keydown(function (e) {
		validarSoloNumeros(e);
	});

	$("#entusuarios-num_edad").keydown(function (e){
		validarSoloNumeros(e);
	})

	// Al campo de texto número validara solo numeros
	$('#entusuarios-txt_cp').keydown(function (e) {
		validarSoloNumeros(e);
	});

	// Al campo de texto número validara solo numeros
	$('#entusuarios-num_edad').keydown(function (e) {
		validarSoloNumeros(e);
	});


	// Al campo de texto número validara solo numeros
	$('#entusuarios-num_patos').keydown(function (e) {
		validarSoloNumeros(e);
	});

	$('.js-boton-inicio').on('click', function (e) {
		e.preventDefault();
		step1();
	});
	
	$('#form-usuario-participar').on('afterValidate', function (e, messages, errorAttributes) {
        if(errorAttributes.length > 0){
            shake();
            return false;
        }
        
    });

	$('body').on(
		'beforeSubmit',
		'#form-usuario-participar',
		function () {
			var form = $(this);

			// return false if form still have some validation errors
			if (form.find('.has-error').length) {
				shake();
				return false;
			}

			if(!$('.js-check-box-aviso').hasClass('js-check-box-aviso-checked')){
				sweetAlert("Espera", "Debes aceptar el aviso de privacidad", "warning");
				return false;
			}

			

			var l = Ladda.create(document.getElementById('js-btn-guardar-informacion'));
			l.start();

			//var data = form.serialize();

			// $.ajax({
			// 	url: 'site/guardar-informacion',// url para peticion
			// 	type: 'post', // Metodo en el que se enviara la informacion
			// 	data: data, // La informacion a mandar
			// 	dataType: 'HTML',  // Tipo de respuesta
			// 	success: function (response) { // Cuando la peticion sea exitosamente se ejecutara la funcion
			// 		$('.js-premio-ajax').html(response);
			// 		step3();
			// 		// Reseteamos el modal
			// 		document.getElementById("form-usuario-participar").reset();

			// 		l.stop();
			// 		$('.js-check-box-aviso').css('background', 'white');

			// 		$('.js-check-box-aviso').removeClass('js-check-box-aviso-checked');
			// 	},
			// 	error: function () {
			// 		l.stop();
			// 	},
			// 	statusCode: {
			// 		404: function () {
			// 			//alert( "page not found" );
			// 		}
			// 	}
			// });
			//return false;
		});




	// Modal Show & Dismiss
	  var overlayIsShowing = false

	  function showOverlay(overlayState){
	    if (overlayState) {
	      $('.overlay').removeClass('visible');
	      $('.overlay').css('position','absolute');
	      overlayIsShowing = false
	    } else {
	      $('.overlay').addClass('visible');
	      $('.overlay').css('position','fixed');
	      overlayIsShowing = true
	    }
	  }

	  // $('.js-modal-trigger').click(function(){
	  //   showOverlay(overlayIsShowing)
	  // });

	  $('.js-dismiss-modal').click(function(e){
	    console.log(this);
	    e.preventDefault();
	    showOverlay(overlayIsShowing)
	  });

	  $('.overlay').click(function(e){
	    console.log(this);
	    e.preventDefault();
	    if (e.target === this){
	      showOverlay(overlayIsShowing)
	    }
	  });

	// Flipping panel Toggle via BUTTON CLICK
	var isFlipped = false
	$('.js-flip-panel').click(function(e){
		e.preventDefault();
		console.log("Fliping panel");
		if (isFlipped) {
			$('.flip-panel').removeClass('flip');
			isFlipped = false
		} else {
			$('.flip-panel').addClass('flip');
			isFlipped = true
		}
	});

	$('.js-shake-panel').click(function(e){ 
		e.preventDefault();
		shake();
	});



});



function shake(){
	$('.form-wrapper').addClass('shake');
	setTimeout(removeShakeClass, 500);
}

function removeShakeClass(){
	$('.form-wrapper').removeClass('shake');
}

/**
 * Valida que cuando se aprieta un boton sea solo números
 *
 * @param e
 */
function validarSoloNumeros(e) {
	// Allow: backspace, delete, tab, escape, enter and .
	if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110]) !== -1 ||
		// Allow: Ctrl+A, Command+A
		(e.keyCode === 65 && (e.ctrlKey === true || e.metaKey === true)) ||
		// Allow: home, end, left, right, down, up
		(e.keyCode >= 35 && e.keyCode <= 40)) {
		// let it happen, don't do anything
		return;
	}
	// Ensure that it is a number and stop the keypress
	if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57))
		&& (e.keyCode < 96 || e.keyCode > 105)) {
		e.preventDefault();
	}
}
