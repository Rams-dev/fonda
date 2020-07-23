(function($){
	$('#form_registro').submit(function(ev){
		$.ajax({
			url: 'registro/addUser',
			type: 'POST',
			datatype: 'JSON',
			data: $(this).serialize(),
			success: function(response){
				var json = JSON.parse(response);
				alertify.success(json.mensaje);
					
			},
			statusCode:{
				400: function(xhr){
					$('#nombre > input').removeClass('is-invalid');
					$('#apellido_p > input').removeClass('is-invalid');
					$('#apellido_m > input').removeClass('is-invalid');
					$('#correo > input').removeClass('is-invalid');
					$('#telefono > input').removeClass('is-invalid');
					$('#contrasena > input').removeClass('is-invalid');
					var json = JSON.parse(xhr.responseText);
					if(json.nombre.length != 0){
						$('#nombre > div').html(json.nombre);
						$('#nombre > input').addClass('is-invalid');
					}
					if(json.apellido_p.length != 0){
						$('#apellido_p > div').html(json.apellido_p);
						$('#apellido_p > input').addClass('is-invalid');
					}
					if(json.apellido_m.length != 0){
						$('#apellido_m > div').html(json.apellido_m);
						$('#apellido_m > input').addClass('is-invalid');
					}
					if(json.correo.length != 0){
						$('#correo > div').html(json.correo);
						$('#correo > input').addClass('is-invalid');
					}
					if(json.telefono.length != 0){
						$('#telefono > div').html(json.telefono);
						$('#telefono > input').addClass('is-invalid');
					}
					if(json.contrasena.length != 0){
						$('#contrasena > div').html(json.contrasena);
						$('#contrasena > input').addClass('is-invalid');
					}

				},
				401: function(xhr){
					var json = JSON.parse(xhr.responseText);
					$('#alert').html('<div class="alert alert-danger" role="alert">'+ json.mensaje + '</div>');
				}

			}


		});
				ev.preventDefault();

	});

	})(jQuery);