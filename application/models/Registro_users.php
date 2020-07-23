<?php

/**
 * 
 */
class Registro_users extends CI_model
{
	
	 function __construct()
	{
		$this->load->database();
	}

	public function addUser($name,$lastp,$lastm,$email,$phone,$pass){
		$data= array('nombre' => $name,
					'apellido_p' => $lastp,
					'apellido_m' => $lastm,
					'correo' => $email,
					'telefono' => $phone,
					'contrasena' => $pass,
					'status' => '1',
					'rango' => '0'
		);
		if(!$sql = $this->db->insert('usuarios',$data)){
			return false;
		}else
		return true;
	}
}