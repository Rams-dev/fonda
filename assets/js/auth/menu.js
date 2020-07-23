(function($){
	$('#form_addMenu').submit(function(ev){
		//var formData = new FormData($('#form_addMenu')[0]);
		$.ajax({
			url: 'admin/menu/addMenu',
			type: 'POST',
			//datatype: 'JSON',
			data: nombre: $('#nombre > input'), descripcion: $('#nombre > input'), precio:$('#precio > input'), archivo:$('#archivo'), categoria:$('#categoria > input'),
			success: function(response){
				var json = JSON.parse(response);

				alertify.success(json.mensaje);
				$('#nombre > input[type="text"]').val('');
					$('#descripcion > input').val('');
					$('#precio > input').val('');

			},
			statusCode:{
				400: function(xhr){
					$('#nombre > input').removeClass('is-invalid');
					$('#descripcion > input').removeClass('is-invalid');
					$('#precio > input').removeClass('is-invalid');
					var json = JSON.parse(xhr.responseText);
					if(json.nombre.length != 0){
						$('#nombre > div').html(json.nombre);
						$('#nombre > input').addClass('is-invalid')
					}
					if(json.descripcion.length != 0){
						$('#descripcion > div').html(json.descripcion);
						$('#descripcion > input').addClass('is-invalid')
					}
					if(json.precio.length != 0){
						$('#precio > div').html(json.precio);
						$('#precio > input').addClass('is-invalid')
					}
					if(json.categoria.length != 0){
						$('#categoria > div').html(json.categoria);
						$('#categoria > input').addClass('is-invalid')
					}

				}

			}

		});
		ev.preventDefault();
	});

})(jQuery);