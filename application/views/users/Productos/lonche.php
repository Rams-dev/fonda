
<div class="container">
	<div class="row justify-content-lg-center">
		<div class="col-md-8 col-xs-12 mt-5">
			<?php
			var_dump($compra);
			foreach ($compra as $compras){
			}
			if($compras['lonche_id'] == null){?>
			
				<h1>Aun no has comprado nada, da click <a href="<?=base_url('users/productos')?>"><span>Aquí</span></a></h1>
			<?php }else{?>
			<table class="table table-bordered">
				<?php foreach ($compra as $compras):?>
				<tr>
				<?php if(empty($compras['imagen_prod'])){?>
					<td class="col-xs-3"><?php echo "<img src=".base_url() ."assets/img/menu/".$compras['imagen_promo']. " width = 300; heigth =  300; > ";?></td>
				<?php }else{?>
					<td class="col-xs-3"><?php echo "<img src=".base_url() ."assets/img/menu/".$compras['imagen_prod']. " width = 300; heigth =  300; > ";?></td>
				<?php }?>	
					<td style="text-align: justify; font-size: 16px; line-height: 1.5">
						<?php
						if(empty($compras['producto'])){
							echo '<strong> Nombre del producto </strong>: '. $compras['nombre_promocion'] . '<br>' ;							
						}else{
							echo '<strong> Nombre del producto </strong>: '. $compras['producto'] . '<br>' ;
						}
						if(empty($compras['descripcion'])){
							echo '<strong> Descripción: </strong>'.  $compras['productos'] . '<br>'; 
						}else{
							echo '<strong> Descripción: </strong>'.  $compras['descripcion'] . '<br>'; 
						}
						if(empty($compras['precio'])){
						echo '<strong> Precio: </strong>' . $compras['precio_promocion'] . '<br>';
						}else{
							echo '<strong> Precio: </strong>' . $compras['precio'] . '<br>';
						}	
						echo '<strong> Cantidad: </strong>' . $compras['cantidad']. '<br>'; 
						echo '<strong>total: </strong>' . $compras['total']. '<br>'; 
						?>
					<button type="buton" class="btn btn-warning float-right quitar" onclick="eliminar_producto(<?= $compras['producto_id']?>,<?=  $compras['cantidad']?>)"  >Quitar</button>
					</td>
				</tr>
				<?php endforeach ?>
			</table>
				<button type="button" class="btn btn-primary float-right mb-5" id="compra">Generar compra</button>
		</div>
		<?php }?>
	</div>
</div>

<script type="text/javascript">

		function eliminar_producto(producto_id, cantidad){
			var ide = producto_id; 
			
					$.ajax({
						url:'<?php echo base_url('users/lonche/update_product')?>',
						type: 'POST',
						data:{ id: ide, cantidad: cantidad},
						dataType: 'JSON'
					})
					.done(function(data){
						window.location.replace(data.url);

					})
					.fail(function(error){
						alertify.error(error.datos);


					})
					.always(function(data){

					});
		}


		$(document).ready(function(){
			$('#compra').click(function(){
					user_id = '<?= $compras['user_id']?>'

					$.ajax({
						type:'post',
						url:'<?php echo base_url('users/lonche/add_compra')?>',
						data: {id:user_id},
						dataType:'JSON'
					})
					.done(function(data){
						alertify.success(data.dato);
					})
					.fail(function(error){
						alertify.error("");

					})
					.always(function(data){

					});
			});


		});
</script>














