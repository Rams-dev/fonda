<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registro extends CI_Controller {

	public function __Construct(){
		parent::__Construct();
		$this->load->model('Registro_users');
		$this->load->helper(array('rules'));
	}
	public function index()
	{
		$this->load->view('template/__head');
		$this->load->view('registro');
		
	}
	public function addUser(){
		$this->form_validation->set_error_delimiters('', '');
		$rules = getRegistroRules();
		$this->form_validation->set_rules($rules);
		if($this->form_validation->run() === false){
			$errors = array(
				'nombre' => form_error('nombre'),
				'apellido_p' => form_error('apellido_p'),
				'apellido_m' => form_error('apellido_m'),
				'correo' => form_error('correo'),
				'telefono' => form_error('telefono'),
				'contrasena' => form_error('contrasena'),
			);
			echo json_encode($errors);
			$this->output->set_status_header(400);
		}else{
			$name = $this->input->post('nombre');
			$lastp = $this->input->post('apellido_p');
			$lastm = $this->input->post('apellido_m');
			$email = $this->input->post('correo');
			$phone = $this->input->post('telefono');
			$pass = $this->input->post('contrasena');
			if(!$this->Registro_users->addUser($name,$lastp,$lastm,$email,$phone,$pass)){
				echo json_encode(array('mensaje' => 'no se pudieron ingrsar tus datos, intentalo de nuevo porfavor'));
				$this->output->set_status_header(401);
				exit;
			}

			echo json_encode(array('mensaje'=>'Registrado con exito, Bienvenido'));
			

			
		}
	}	
}
