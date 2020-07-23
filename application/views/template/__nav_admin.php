<div class="container-fluid">
    <!-- <div class="nav-boton">
  <img src="<?= base_url()?>/assets/img/menu.png" whith ="60" height="60">
  </div> -->
  <div class="nav-item " style=" float: left; margin-top: 0px;">
    <img src="<?= base_url()?>/assets/img/logo.png" whith ="150px" height="60px;">
  </div>
  <ul class="nav nav-pills mb-6 justify-content-end " id="pills-tab" role="tablist" style="margin-top: 10px;">
    <li class="nav">
    <a class="nav " role="tab" ><b>Nombre: </b><?php echo $this->session->userdata('nombre'). " ". $this->session->userdata('apellido_p'). " ". $this->session->userdata('apellido_m')?></a>
  </li>
  
  <li class="nav-item">
    <a class="nav-link <?= $this->uri->segment(2) == 'dashboard' ? 'active' : '';?>" href="<?=base_url('admin/dashboard')?>" role="button" aria-controls="pills-home" aria-selected="true">Menu</a>
  </li>
  <li class="nav-item">
    <a class="nav-link <?= $this->uri->segment(2) == 'menu' ? 'active' : '';?>" href="<?=base_url('admin/menu')?>" role="button" aria-controls="pills-profile" aria-selected="false">Agregar menu</a>
  </li>
  <li class="nav-item">
    <a class="nav-link <?= $this->uri->segment(2) == "promociones" ? "active" : "";?>"  href="<?=base_url('admin/promociones')?>" role="button" aria-controls="pills-profile" aria-selected="false">Promociones</a>
  </li>
 
  <li class="nav-item">
    <a class="nav-link"  href="<?=base_url('login/logout')?>" role="button" aria-controls="pills-profile" aria-selected="false">Salir</a>
  </li>
  
   <!-- <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"><span>Session</span></a>
    <div class="dropdown-menu">
      <a class="dropdown-item" href="<?=base_url('users/compras')?>">lonche</a>
      <a class="dropdown-item" href="<?=base_url('users/productos')?>">productos</a>
      <a class="dropdown-item" href="#">Something else here</a>
      <div class="dropdown-divider"></div>
      <a class="dropdown-item" href="<?=base_url('login/logout')?>">Cerrar session</a>
    </div>
  </li> -->
</ul>
<!-- <div class="tab-content" id="pills-tabContent">
  <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">...</div>
  <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">...</div>
  <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">...</div>
</div> -->
<!-- <button class="btn btn-primary">hey</button> -->
<!-- </div> -->
</div>
