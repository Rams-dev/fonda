<div class="container">
	<div class="col-md-6">
	<form action="<?= base_url('admin/menu/addMenu')?>" method="POST" id="form_addMenu" enctype="multipart/form-data"> 
	<div class="form-group">
				<h2>Agrega un nuevo menu</h2>
				</div>
				<div class="form-group" id="nombre">
					<label for="nombre">Nombre</label>
					<input type="text" name="nombre" id="nombre" class="form-control" placeholder="torta">
					<div class="invalid-feedback" id="error">
						
					</div>
				</div>
				<div class="form-group" id="descripcion">
					<label for="descripcion">Descripcion</label>
					<input type="text" name="descripcion" id="descripcion" class="form-control" placeholder="quesillo con jamon">
					<div class="invalid-feedback" id="error">

					</div>					
				</div>
				<div class="form-group" id="precio">
					<label for="precio">Precio</label>
					<input type="number" name="precio" id="precio" class="form-control" placeholder="20">
					<div class="invalid-feedback" id="error">
						
					</div>
				</div>
				<div class="form-group" id="categoria">
					<label >Categoria</label>
					<input type="text" class="form-control" placeholder="refresco/comida/dulce/etc." name="categoria" id="categoria"><br>
				</div>
				<div class="form-group" id="imagen">
					<label >Agregar foto</label>
					<input type="file" name="archivo" id="archivo"><br>
				</div>
				
				<div class="form-group">
					<input  type="submit" class="btn btn-primary" id="agregar" value="Agregar">
				</div>
				<div id="alert">
							
				</div>

			</form>
	
		</div>
	</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> 
<script src="<?=base_url('assets/js/auth/menu.js')?>"></script>
