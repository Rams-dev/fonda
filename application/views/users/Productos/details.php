<style>
.qty .count {
    color: #000;
    display: inline-block;
    vertical-align: top;
    font-size: 20px;
    font-weight: 700;
    line-height: 30px;
    padding: 0 2px
    ;min-width: 35px;
    text-align: center;
}
.qty .plus {
    cursor: pointer;
    display: inline-block;
    vertical-align: top;
    color: white;
    width: 20px;
    height: 20px;
    font: 20px/1 Arial,sans-serif;
    text-align: center;
    border-radius: 50%;
    }
.qty .minus {
    cursor: pointer;
    display: inline-block;
    vertical-align: top;
    color: white;
    width: 20px;
    height: 20px;
    font: 20px/1 Arial,sans-serif;
    text-align: center;
    border-radius: 50%;
    background-clip: padding-box;
}
div {
    text-align: center;
}
.minus:hover{
    background-color: #717fe0 !important;
}
.plus:hover{
    background-color: #717fe0 !important;
}
/*Prevent text selection*/
span{
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
}
input{  
    border: 0;
    width: 2%;
}
nput::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
    -webkit-appearance: none;
    margin: 0;
}
input:disabled{
    background-color:white;
}
         
</style>
<?//php var_dump($producto); ?>

<div class="container">
	<div class="text-center mt-4">
		<h2>Detalles del producto</h2>
    <br>
    <br>
	</div>
	<div class="row justify-content-lg-center">
  <?php foreach ($producto as $prod ) :?>
		<div class="col-md mb-6 mt-2 d-ms-block border">
		
  <div class="row no-gutters">
    <div class="col-md-6">
      <img src="<?= base_url()?>assets/img/menu/<?= $prod['imagen'];?>" class="card-img" width="400" heigth="500">
    </div>
    <div class="col-md-6">
      <div class="card-body">
        <h5 class="card-title" style="font-size: 20px"><strong><?php echo $prod['nombre'];?></strong></h5>
        <p class="card-text" style="font-size: 30px"><?php echo $prod['descripcion'];?></p>
        <p class="card-text" style="font-size: 20px"><small class="text-muted">$ <?php echo $prod['precio']?></small></p>
        <div class="qty mt-5" style="font-size: 10px;">
                        <span class="minus bg-dark">-</span>
                        <input type="number" class="count" name="qty" id="qty" value="1">
                        <span class="plus bg-dark">+</span>

                    </div>
      </div>
      <button type="button" class="btn btn-primary" id="info">Agregar a lonche</button>
    </div>
    </div>
		</div>
	</div>
</div>
  <?php endforeach ?>

<style type="text/css" href="<?= base_url()?>assets/css/product_details"></style>

<script>
		$(document).ready(function(){
		    $('.count').prop('disabled', true);
   			$(document).on('click','.plus',function(){
				$('.count').val(parseInt($('.count').val()) + 1 );
    		});
        	$(document).on('click','.minus',function(){
    			$('.count').val(parseInt($('.count').val()) - 1 );
    				if ($('.count').val() == 0) {
						$('.count').val(1);
					}
    	    	});
    });
</script>


<script>

$(document).ready(function(){
  $('#info').click(function(e){
   //     e.preventDefault();
      var ide = "<?php echo $prod['id'];?>"
      var precio = "<?php echo $prod['precio'];?>"
      var total = $('#qty').val();

      $.ajax({
        method: "POST",
        url: '<?php echo base_url('users/productos/addProducto')?>',
        data: {id: ide, cantidad: total, precio:precio },
        dataType: 'JSON'
      })
      .done(function(data) {
        alertify.success(data.mensaje);
      }) 
      .fail(function(error) {
        alertify.error(error.mensaje);
      })
      .always(function(data) {
        //alert( "complete" );
      });

      });
    });
     
</script>