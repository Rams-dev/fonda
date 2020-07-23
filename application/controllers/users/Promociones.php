<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Promociones extends CI_Controller {

	public function __Construct(){
		parent::__Construct();
		$this->load->model('Menus');

	}
	public function index()
	{
		if($this->session->userdata('is_logged')){
			$data['promociones'] = $this->Menus->getPromociones();

		$this->load->view('template/__head');
		$this->load->view('template/__nav');
		$this->load->view('users/productos/promociones',$data);
		$this->load->view('template/__footer');	
	}else{
		redirect ('login');
	}

		
		
	}
}
