<div class="container">
    <?php if($dato = $this->session->flashdata('mensaje')){
        echo '<h2 class="text-center">' . $dato.'</h2>';
    }?>
    <div class="row my-5">
      <!-- <div class="col-md-4"> -->
        <?php  foreach ($promociones as $promocion):?>
            <div class="col-md-3"  >
              <div class="card flex-md-row mb-4 h-md-250" style="height: 350px; min-height:300">
                <div class="card-body d-flex flex-column">
                  <div class="d-inline-block">
                        <p class ="text-primary mt-1"><?= $promocion['nombre_promocion']; ?></p>
                    </div>
                        <img src="<?= base_url('assets/img/menu/' . $promocion['imagen']) ?>" width="100%" height="50%" class="card-img-center flex-auto  d-xs-block d-sm-block d-lg-block mb-2" roundered-lg>
                        <div class="d-inline-block">
                        <div class="my-3">
                          <p class="text-dark"> <?= $promocion['productos']; ?></p>
                        </div>
                        </div>
                        <div class="mb-1 text-muted">
                          <h4 class="card-title pricing-card-title">$ <?= $promocion['precio'];?></h4>
                        </div>

                        <a >
                         <input type="button" onclick="comprarPromocion(<?=$promocion['id']?>)" class="btn btn-lg btn-block btn-outline-primary" id="comprarPromocion" value="Comprar">
                         </a>
                      </div>

                    </div>
            </div>
        <?php endforeach ?>

      <!-- </div> -->
    </div>
</div>

<script>
function comprarPromocion(id){
    // alert(id);
    $.ajax({
        type: 'post',
        data:{id:id},
        dataType:"JSON",
        url:"<?=base_url('users/productos/agregarPromocion')?>",

    })
    .done(function(response){
        var json = JSON.parse(response)
        alertify.success(json.msg);
    })
    .fail(function(fail){

    })

}



</script>