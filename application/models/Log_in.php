<?php
class Log_in extends CI_model{
	
	 function __construct()
	{
		$this->load->database();
	}

	public function validation($correo,$password){
		$sql = $this->db->get_where('usuarios',array('correo' => $correo, 'contrasena' => $password),1);
		if(!$sql->result()){
			return false;
		}else{
		return $sql->row();
	}}
}