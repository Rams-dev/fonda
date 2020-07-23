<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __Construct(){
		parent::__Construct();
		$this->load->model('Menus');

	}
	public function index()
	{
		if($this->session->userdata('is_logged')){
			$data['menus'] = $this->Menus->getMenus();

		$this->load->view('template/__head');
		$this->load->view('template/__nav_admin');
		$this->load->view('admin/dashboard',$data);
		$this->load->view('template/__footer');
		}else{
			redirect('login');
		}
		
	}
}