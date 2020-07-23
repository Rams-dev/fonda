<div class="container-fluid">
  <div class="nav-item" style=" float: left; margin-top: 0px;">
    <img src="<?= base_url()?>/assets/img/logo.png" whith ="150px" height="60px;">
  </div>
  <ul class="nav nav-pills mb-6 justify-content-end py-4" id="pills-tab" role="tablist">
    <li class="nav">
    <a class="nav " role="tab" ><b>Nombre: </b><?php echo $this->session->userdata('nombre'). " ". $this->session->userdata('apellido_p'). " ". $this->session->userdata('apellido_m')?></a>
  </li>
  <li class="nav-item">
    <a class="nav-link <?= $this->uri->segment(2) == 'promociones' ? 'active' : '';?>" href="<?=base_url('users/promociones')?>" role="button" aria-controls="pills-home" aria-selected="true">Promociones</a>
  </li>
  <li class="nav-item">
    <a class="nav-link <?= $this->uri->segment(2) == 'productos' ? 'active' : '';?>" href="<?=base_url('users/productos')?>" role="button" aria-controls="pills-profile" aria-selected="false">Productos</a>
  </li>  <li class="nav-item">
    <a class="nav-link <?= $this->uri->segment(2) == 'lonche' ? 'active' : '';?>" href="<?=base_url('users/lonche')?>" role="button" aria-controls="pills-profile" aria-selected="false">Mi Lonche</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="<?=base_url('login/logout')?>" role="button" aria-controls="pills-profile" aria-selected="false">Salir</a>
  </li>
  </div>
