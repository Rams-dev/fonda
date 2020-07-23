<div class="container">
    <div class="navbar d-flex justify-content-end">
        <div class="">
             <a href="<?=base_url('admin/promociones/agregarPromocion')?>" type="button" class="btn btn-success" rel="noopener noreferrer">agregar promocion</a>
        </div>
    </div>
  <h2 class="text-center mb-5">PROMOCIONES</h2>

    <div class="row mb-2">
      <!-- <div class="col-md-4"> -->
        <?php  foreach ($promociones as $promocion):?>
            <div class="col-md-3"  >
              <div class="card flex-md-row mb-4 h-md-250" style="height: 350px; min-height:300">
                <div class="card-body d-flex flex-column">
                <button type="button" onclick="eliminarPromocion(<?=$promocion['id']?>)" class="close d-flex justify-content-end" data-toggle="tooltip" data-placement="right" title="eliminar" data-dismiss="modal" aria-label="Close">
                 <span aria-hidden="true">&times;</span>
                 </button>                
                  <div class="d-inline-block mb-4">
                        <p class ="text-primary mt-1"><?= $promocion['nombre_promocion']; ?></p>                     
                    </div>
                        <img src="<?= base_url('assets/img/menu/' . $promocion['imagen']) ?>" width="100%" height="50%" class="card-img-center flex-auto  d-xs-block d-sm-block d-lg-block mb-2" roundered-lg>
                        <div class="d-inline-block">
                          <p class="text-dark"> <?= $promocion['productos']; ?></p>
                        </div>
                        <div class="mb-1 text-muted"> 
                          <h4 class="card-title pricing-card-title">$ <?= $promocion['precio'];?></h4>
                        </div>   
                      </div>
                    </div>
            </div>  
        <?php endforeach ?>    

      <!-- </div> -->
    </div>


</div>


<script>
function eliminarPromocion(id){
  var id_promocion;
  $.ajax({
    url:'<?=base_url('admin/menu/eliminarPromocion')?>',
    data: {id_promocion: id},
    type: 'post',
    dataType: 'JSON'
  })
  .done(function(response){
    var json = JSON.parse(response);
    alert(json.msg);
    location.reload();

  })
  .fail(function(error){

  })
  .always(function(){
    location.reload();
  })

}
</script>