<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Promociones extends CI_Controller {

	public function __Construct(){
		parent::__Construct();
		$this->load->model('Menus');

    }

    public function index(){
        if($this->session->userdata('is_logged')){
			$data['promociones'] = $this->Menus->getPromociones();

            $this->load->view('template/__head');
            $this->load->view('template/__nav_admin');
            $this->load->view('admin/promociones',$data);
            $this->load->view('template/__footer');
		}else{
			redirect('login');
		}
    }

    public function agregarPromocion(){
        if($this->session->userdata('is_logged')){
			$data['menus'] = $this->Menus->getMenus();

            $this->load->view('template/__head');
            $this->load->view('template/__nav_admin');
            $this->load->view('admin/agregarPromociones',$data);
            $this->load->view('template/__footer');
		}else{
			redirect('login');
		}

    }

    public function agregar(){
        $this->form_validation->set_error_delimiters('','');
		$rules = getPromocionesRules();
		$this->form_validation->set_rules($rules);
		if($this->form_validation->run() === FALSE){
			$errors= array('nombre'=> form_error('nombre'),
							'productos' => form_error('productos'),
                            'precio' => form_error('precio')
                        );
			echo json_encode($errors);
            $this->output->set_status_header(400);
            exit;
		}
			//agregar foto ala carpeta 
		 $config['upload_path'] = "./assets/img/menu";
       		 $config['allowed_types'] = "*";       		
					//$imagen = $this->input->post('archivo');
       		 
        	$this->load->library('upload', $config);
       		if(!$this->upload->do_upload('imagen')) {
            //*** ocurrio un error
            $data['uploadError'] = $this->upload->display_errors();
            echo $this->upload->display_errors();    
            exit;      
        	}
        	$data['uploadSuccess'] = $this->upload->data();
        	
        			$data = array('upload_data' => $this->upload->data());
        				$this->upload->do_upload('imagen');
        				$nombre = $this->input->post('nombre');
						$productos = $this->input->post('productos');
						$precio = $this->input->post('precio');
						$imagen = $data['upload_data']['file_name'];
						if(!$datos = $this->Menus->agPromocion($nombre,$productos,$precio,$imagen)){
							echo json_encode(array('mensaje', 'ups algo salio mal, intenta mas tarde'));
							}
						echo json_encode(array('mensaje' => 'Menu agregado con exito'));
							$msg['mensaje'] = 'Menu agregado con exito';
							//redirect('admin/menu');

        $formdata = $this->input->post();
        echo json_encode($formdata["nombre"]);
    }

    public function promociones(){
        
    }
    
    
}