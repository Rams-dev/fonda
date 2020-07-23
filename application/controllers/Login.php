<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __Construct(){
		parent::__Construct();
		$this->load->model('Log_in');
		$this->load->helper(array('rules'));
	}
	public function index()
	{
		$this->load->view('template/__head');
		$this->load->view('login');
		
	}
	public function validate(){
		$this->form_validation->set_error_delimiters('','');
		$rules =  getLoginRules();
		$this->form_validation->set_rules($rules);
		if($this->form_validation->run()===FALSE){
			$errors = array(
				'email' => form_error('email'),
				'password' => form_error('password')
			);
			echo json_encode($errors);
			$this->output->set_status_header(400);
		}else{
			$correo = $this->input->post('email');
			$password = $this->input->post('password');
			if(!$datos = $this->Log_in->validation($correo,$password)){
				echo json_encode(array('mensaje' => 'usuario o contraseña incorrectos'));
				$this->output->set_status_header(401);
				exit;
			}
	
			$data= array(
				'id' => $datos->id,
				'nombre' => $datos->nombre,
				'apellido_p' => $datos->apellido_p,
				'apellido_m' => $datos->apellido_m,
				'telefono' => $datos->telefono,
				'status' => $datos->status,
				'rango' => $datos->rango,

				'is_logged' => TRUE,
			);
			if($data['rango'] == '0'){
			$this->session->set_userdata($data);
			$this->session->set_flashdata('mensaje', 'Bienvenido a mi fondita ' . $data['nombre']);
			echo json_encode(array("url" => base_url('users/productos')));
			}elseif($data['rango'] == '1'){
				$this->session->set_userdata($data);
			$this->session->set_flashdata('mensaje', 'Bienvenido a mi fondita ' . $data['nombre']);
			echo json_encode(array("url" => base_url('admin/dashboard')));
			}

		}

	}


	public function logout(){
		$vars = array('id','rango','status','nombre','apellido_p','apellido_p','is_logged');
		$this->session->unset_userdata($vars);
		$this->session->sess_destroy();

		redirect('login');
	}

}
