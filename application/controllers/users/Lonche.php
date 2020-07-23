<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lonche extends CI_Controller {

	public function __Construct(){
		parent::__Construct();
		$this->load->model('Lunche');
	}
	public function index()
	{	
		$data['compra']= $this->Lunche->getLunche();
		$this->load->view('template/__head');
		$this->load->view('template/__nav');
		$this->load->view('users/Productos/lonche', $data);
		$this->load->view('template/__footer');

	}

	public function update_product(){
		$id=$this->input->post('id');
		$cantidad=$this->input->post('cantidad');
		if(!$this->Lunche->editar_compra($id,$cantidad)){
			echo json_encode(array('datos' => "Los datos no pudieron modificarse"));
		}else{
			echo json_encode(array('url' => "lonche"));
		}	

	}

	public function add_compra(){
		$user_id=$this->input->post('id');
		if($this->Lunche->addCompra('user_id')){
			echo json_encode(array('dato' => $user_id));
		}else{
			echo json_encode(array('dato' => 'no se pudo agregar la compra'));
		}
		

	}

}