<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Productos extends CI_Controller {

	public function __Construct(){
		parent::__Construct();
		$this->load->model('Menus');
		$this->load->model('Lunche');

	}
	public function index()
	{
		if($this->session->userdata('is_logged')){
		$data['menus'] = $this->Menus->getMenus();
		$this->load->view('template/__head');
		$this->load->view('template/__nav');
		$this->load->view('users/Productos/productos', $data);
		$this->load->view('template/__footer');
	}else{
	redirect('login');
	}
		
	}
	public function details($producto_id){
		$data['producto'] = $this->Menus->getProductoDetails($producto_id);
		$this->load->view('template/__head');
		$this->load->view('template/__nav');
		$this->load->view('users/Productos/details', $data);
		$this->load->view('template/__footer');
	}

	public function addProducto(){
		$cantidad = $this->input->post('cantidad');
		$producto_id = $this->input->post('id');
		$precio = $this->input->post('precio');
	if($this->Lunche->addLonche($producto_id,$cantidad,$precio)){
		echo json_encode(array( 'mensaje' => 'agregado al lonche con exito'));
	}else{
		echo json_encode(array('mensaje' => 'no se agrego tu compra'));
	}
	}

	public function agregarPromocion(){
		$id=$this->input->post();
		$promo = $this->Menus->getPromocionesById($id['id']);
		 foreach ($promo as $valores_promo) {
		 }
		if($this->Lunche->addLonche($id["id"],1,$valores_promo['precio'])){
			echo json_encode(array("msg" =>"agregado con exito"));
		}
		
	}
	
	
}
