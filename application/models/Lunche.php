<?php
class Lunche extends CI_model
{
	
	 function __construct()
	{
		$this->load->database();
	}
	public function addLonche($producto_id,$cantidad,$precio){
		$datos = array('usuario_id' => $this->session->userdata('id'),
						'producto_id' => $producto_id,
						'cantidad' => $cantidad,
						'precio' => $precio,
						'total' => $precio * $cantidad);	
		$sql = $this->db->insert('lonche',$datos);
		if($sql){
			return true;
		}else
		return false;
	}

	public function getLunche(){
		$this->db->select('lonche.id as lonche_id, usuarios.id as user_id, usuarios.nombre, apellido_p, apellido_m, correo, telefono, producto_id, cantidad, lonche.precio, total, comida.nombre as producto, descripcion,comida.imagen as imagen_prod, promociones.id as promocion_id, nombre_promocion, productos, promociones.precio as precio_promocion, promociones.imagen as imagen_promo');
		//$this->db->from('usuar as ios');
		$this->db->join('lonche','usuarios.id = lonche.usuario_id','left');
		$this->db->join('comida','comida.id = lonche.producto_id','left');
		$this->db->join('promociones','promociones.id = lonche.producto_id','left');
		$this->db->where('usuarios.id',$this->session->userdata('id'));
		$query = $this->db->get('usuarios');
		return $query->result_array();
		
	}

	public function addCompra($user_id){
		$this->db->set('status',2);
		$this->db->where('usuario_id',$user_id);
		$query = $this->db->update('lonche');
		if(query){
			return true;
		}else{
			return false;
		}
	}

	public function editar_compra($producto_id, $cantidad){
		if($cantidad == 1){
			$sql = $this->db->delete('lonche', array('usuario_id' => $this->session->userdata('id'), 'producto_id' => $producto_id));
		}else{
				$data = array(
					'cantidad'=> $cantidad-1
				);
			$this->db->where('producto_id', $producto_id);	
			$sql = $this->db->update('lonche', $data);
			
			}
		if($sql){
			return true;
		}else{
				return false;
			}
		

	}
}