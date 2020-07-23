

<div class="container">
	<div class="row justify-content-lg-center">
		<div class="col-lg-6">
			<form action="<?=base_url('registro/addUser')?>" method="post" id="form_registro">
				<div class="form-group">
				<h2>Bienvenido al registro de mi tiendita</h2>
				</div>
				<div class="form-group" id="nombre">
					<label for="nombre">Nombres</label>
					<input type="text" name="nombre" id="nombre" class="form-control" placeholder="Ramiro">
					<div class="invalid-feedback" id="error">
						
					</div>
				</div>
				<div class="form-group" id="apellido_p">
					<label for="apellido_p">Apellido Paterno</label>
					<input type="text" name="apellido_p" id="apellido_p" class="form-control" placeholder="Altamirnao">
					<div class="invalid-feedback" id="error">

					</div>					
				</div>
				<div class="form-group" id="apellido_m">
					<label for="apellido_m">Apellido materno</label>
					<input type="text" name="apellido_m" id="apellido_m" class="form-control" placeholder="López">
					<div class="invalid-feedback" id="error">
						
					</div>
				</div>
				<div class="form-group" id="correo">
					<label for="correo">Correo electrónico</label>
					<input type="email" name="correo" id="correo" class="form-control" placeholder="Example@mail.com">
					<div class="invalid-feedback" id="error">
				
					</div>	
				</div>
				<div class="form-group" id="telefono">
					<label for="telefono">Número telefónico</label>
					<input type="tel" name="telefono" id="telefono" class="form-control" placeholder="(951) 366 79 29"> 
					<div class="invalid-feedback" id="error">
						
					</div>					
				</div>
				<div class="form-group" id="contrasena">
					<label for="contrasena">Contraseña</label>
					<input type="password" name="contrasena" id="contrasena" class="form-control" placeholder="Contraseña">
					<div class="invalid-feedback" id="error">
						
					</div>
				</div>
				<div class="form-group">
					<button type="submit" class="btn btn-primary" id="Registrar"> Registrarse </button>
					
				</div>
				<div id="alert">
							
				</div>

			</form>
		</div>
	</div>
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> 
<script src="<?=base_url('assets/js/auth/registro.js')?>"></script>