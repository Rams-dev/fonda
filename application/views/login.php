<div class="container">
		<div class="row justify-content-lg-center">
			<div class="col-lg-6">
					<form action="<?=base_url("login/validate")?>" id="form_login" method="POST">
					  <div class="form-group">
					  	<h1 style="text-align: center;">BIEVENIDO A MI FONDITA</h1><br>
					  	<div class=" mg-top"></div>
					  	<h3 style="text-align: center;" >Login</h3>
					  	</div>
					  	<div class="form-group" id="email">
					  	<label for="exampleInputEmail1">Correo electrónico</label>
					    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
					    <div class="invalid-feedback" id="error">
					    	
					    </div>
					  </div>
					  <div class="form-group" id="password">
					    <label for="exampleInputPassword1">Contraseña</label>
					    <input type="password" name="password" class="form-control" id="exampleInputPassword1">
					  <div class="invalid-feedback">
					    	</div>
					    </div>
					    <div class="form-group">
					  <button type="submit" class="btn btn-primary ">Login</button><br>
					  <span> ¿Aún no tienes cuenta? <a href="<?=base_url('registro')?>"> registrate aquí</a></span>
						</div>
						<div id="alert">
							
						</div>
					</form> 

			</div>
		</div>
	</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> 
<script src="<?=base_url('assets/js/auth/login.js')?>"></script>
