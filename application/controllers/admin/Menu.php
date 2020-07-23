<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu extends CI_Controller {

	public function __Construct(){
		parent::__Construct();
		$this->load->model('Menus');

	}
	public function index()
	{
		if($this->session->userdata('is_logged')){
			$msg='';
		$this->load->view('template/__head');
		$this->load->view('template/__nav_admin');
		$this->load->view('admin/menu',$msg == "");
		$this->load->view('template/__footer');
		}else{
			redirect('login');
		}
		
	}

	public function addMenu(){
		
		$this->form_validation->set_error_delimiters('','');
		$rules = getMenuRules();
		$this->form_validation->set_rules($rules);
		if($this->form_validation->run() === FALSE){
			$errors= array('nombre'=> form_error('nombre'),
							'descripcion' => form_error('descripcion'),
							'precio' => form_error('precio'),
							'categoria' => form_error('categoria'));
			echo json_encode($errors);
			$this->output->set_status_header(400);
		}
			//agregar foto ala carpeta 
		 $config['upload_path'] = "./assets/img/menu";
       		 $config['allowed_types'] = "*";       		
					//$imagen = $this->input->post('archivo');
       		 
        	$this->load->library('upload', $config);
       		if(!$this->upload->do_upload('archivo')) {
            //*** ocurrio un error
            $data['uploadError'] = $this->upload->display_errors();
            echo $this->upload->display_errors();    
            exit;      
        	}
        	$data['uploadSuccess'] = $this->upload->data();
        	
        			$data = array('upload_data' => $this->upload->data());
        				$this->upload->do_upload('archivo');
        				$nombre = $this->input->post('nombre');
						$descripcion = $this->input->post('descripcion');
						$precio = $this->input->post('precio');
						$imagen = $data['upload_data']['file_name'];
						$categoria = $this->input->post('categoria');

						if(!$datos = $this->Menus->addMenu($nombre,$descripcion,$precio,$imagen,$categoria)){
						//	echo json_encode(array('mensaje', 'ups algo salio mal, intenta mas tarde'));
							}
						echo json_encode(array('mensaje' => 'Menu agregado con exito'));
							$msg['mensaje'] = 'Menu agregado con exito';
							//redirect('admin/menu')

	}

	public function eliminarMenu(){
		$postData = $this->input->post();
		if($this->Menus->eliminarProducto($postData['id_menu'])){
			echo json_encode(array('msg' => 'eliminar'));
		}else{
			echo json_encode(array('fail' => 'nose que paso'));
		}
		var_dump($postData);
	}

	public function eliminarPromocion(){
		$data = $this->input->post();
		if($this->Menus->eliminarPromocion($data['id_promocion'])){
			echo json_encode(array('msg' => 'eliminado'));
		}else{
			echo json_encode(array('error' => 'nose que paso bro'));
		}
	}
}
