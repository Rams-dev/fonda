(function($){
	$('#form_login').submit(function(ev){
		$.ajax({
			url: 'login/validate',
			datatype: 'JSON',
			type: 'POST',
			data: $(this).serialize(),
			success: function(response){
				var json = JSON.parse(response);

				window.location.replace(json.url);

			},
			statusCode: {
				400: function(xhr){
					$('#email > input').removeClass('is-invalid');
					$('#password > input').removeClass('is-invalid');
					var json = JSON.parse(xhr.responseText);
					console.log(json)
					if(json.email.length != 0){
						$('#email > div').html(json.email)
						$('#email > input').addClass('is-invalid');
					}
					if(json.password.length != 0){
						$('#password > div').html(json.password)
						$('#password > input').addClass('is-invalid');
					}

				},
				401: function(xhr){
					var json = JSON.parse(xhr.responseText);
					console.log(json);
					$('#alert').html('<div class="alert alert-danger" role="alert"> '+ json.mensaje + '</div>');
				}

			}

		});
		ev.preventDefault();

	});

})(jQuery);