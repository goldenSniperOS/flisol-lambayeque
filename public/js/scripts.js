jQuery(document).ready(function($) {
	$register_form = $('#register-form');

	$text_nombre = $register_form.find('input[name="nombres"]');
	$text_apellidos = $register_form.find('input[name="apellidos"]');
	$text_email = $register_form.find('input[name="email"]');
	$text_captcha = $register_form.find('input[name="captha-suma"]');
	$email_regex = /^[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,6}$/i;

	//Generamos los numeros para el captha
	if($('.text-captha-suma').length){
		$n1 = generar_numeros_captha(8)['n1'];
		$n2 = generar_numeros_captha(8)['n2'];
		$('.text-captha-suma').html($n1 + ' + ' + $n2 + ' = ');
	}

	$register_form.submit(function(e){
		$form_valid = true;

		//Eliminamos mensajes de errores
		$register_form.find('input[type=text]').focus(function() {
			//alert("Holaa");
			$('.tooltip-form.error').remove();
		});

		if($text_nombre.val().trim() === ''){
			$form_valid = false;
			$text_nombre.closest('.form-group').prepend('<span class="tooltip-form error nombre">Por favor ingresa tu nombre</span>');
			$('.error.nombre').fadeIn('slow');
		}

		if($text_apellidos.val().trim() === ''){
			$form_valid = false;
			$text_apellidos.closest('.form-group').prepend('<span class="tooltip-form error apellidos">Por favor ingresa tus apellidos</span>');
			$('.error.apellidos').fadeIn('slow');
		}

		if( !$email_regex.test($text_email.val().trim()) ){
			$form_valid = false;
			$text_email.closest('.form-group').prepend('<span class="tooltip-form error email">Por favor ingresa un email válido</span>');
			$('.error.email').fadeIn('slow');
		}
		// VALIDAR CAPTCHA
		if( $('.text-captha-suma').length ){
			if( $text_captcha.val() != ($n1 + $n2) ){
				$form_valid = false;
				$text_captcha.closest('.form-group').prepend('<span class="tooltip-form error captha">Suma incorrecta</span>');
				$('.error.captha').fadeIn('slow');
			}
			$n1 = generar_numeros_captha(8)['n1'];
			$n2 = generar_numeros_captha(8)['n2'];
			$('.text-captha-suma').html($n1 + ' + ' + $n2 + ' = ');
			$text_captcha.val('');
		}

		//Si hay errores en los datos no lo enviamos
		if(!$form_valid)
			e.preventDefault();
	});

	function generar_numeros_captha($max){
		if(!$max) $max = 5;
		var $values = new Array(2);
		$values['n1'] = Math.floor (Math.random() * $max + 1);
		$values['n2'] = Math.floor (Math.random() * $max + 1);
		return $values;
	}
});
