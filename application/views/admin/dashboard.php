<?php if($dato = $this->session->flashdata('mensaje')){
	echo '<p style ="text-aling: center;">'. $dato .'</p>';
}
	?>
<div class="container">
  <h2 class="text-center mb-5"> Menu del día</h2>

    <div class="row mb-2">
    
      <!-- <div class="col-md-4"> -->
        <?php  foreach ($menus as $menu):?>
            <div class="col-md-3"  >
              <div class="card flex-md-row mb-4 h-md-250" style="height: 350px; min-height:300;">
                <div class="card-body d-flex flex-column">
                <button type="button" onclick="quitarMenu(<?=$menu['id'];?>)" class="close d-flex justify-content-end" data-toggle="tooltip" data-placement="right" title="eliminar" data-dismiss="modal" aria-label="Close">
                 <span aria-hidden="true">&times;</span>
                 </button>                
                  <div class="d-inline-block">
                        <p class ="text-primary mt-0"><?= $menu['nombre']; ?></p>                     
                    </div>
                        <img src="<?= base_url('assets/img/menu/' . $menu['imagen']) ?>" width="100%" height="50%" class="card-img-center flex-auto  d-xs-block d-sm-block d-lg-block mb-2" roundered-lg>
                        <div class="d-inline-block">
                        <div class="my-3">
                          <p class="text-dark"> <?= $menu['descripcion']; ?></p>
                        </div>
                        </div>
                        <div class="mb-1 text-muted"> 
                          <h4 class="card-title pricing-card-title text-success">$ <?= $menu['precio'];?></h4>
                        </div>   
                      </div>
                    </div>
            </div>  
        <?php endforeach ?>    

      <!-- </div> -->
    </div>
</div>

<script>
  function quitarMenu(id){
    var id_menu;
    $.ajax({
      url: '<?=base_url('admin/menu/eliminarMenu')?>',
      type: 'post',
      data: {id_menu: id},
      dataType: "JSON",
    })
    .done(function(response){
    alert(response);
    })
    .fail(function(error){

    })
    .always(function(){
      location.reload();
    })
  }

</script>

