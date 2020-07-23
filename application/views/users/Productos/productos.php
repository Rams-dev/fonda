
<div class="container">
  <h2 class="text-center mb-5"> Menu del día</h2>

    <div class="row mb-2">
    
      <!-- <div class="col-md-4"> -->
        <?php  foreach ($menus as $menu):?>
            <div class="col-md-3"  >
              <div class="card flex-md-row mb-4 h-md-250" style="height: 400px; min-height:350">
                <div class="card-body d-flex flex-column">
                          
                  <div class="d-inline-block mb-4">
                        <p class ="text-primary mt-1"><?= $menu['nombre']; ?></p>                     
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
                        <a href = "<?=base_url('users/Productos/details/'.$menu['id'])?>">
                         <input type="button" class="btn btn-lg btn-block btn-outline-primary" value="Comprar">
                         </a>
                            <!-- <input type="button" class="btn btn-lg btn-block btn-outline-primary align-items-end" value="Comprar"> -->
                      </div>
                    </div>
            </div>  
        <?php endforeach ?>    

      <!-- </div> -->
    </div>
</div>



      
