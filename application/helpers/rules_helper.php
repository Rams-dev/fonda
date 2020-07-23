<?php

 function getRegistroRules(){
 	return array(
      
        array(
                'field' => 'nombre',
                'label' => 'Nombre',
                'rules' => 'required|trim',
                'errors' => array(
                	'required' => '%s es obligatorio'),	
        ),    array(
                'field' => 'apellido_p',
                'label' => 'Apellido paterno',
                'rules' => 'required|trim',
                'errors' => array(
                        'required' => '%s es obligatorio'),    
        ),    array(
                'field' => 'apellido_m',
                'label' => 'Apellido materno',
                'rules' => 'required|trim',
                'errors' => array(
                        'required' => '%s es obligatorio'), 

        ), 
          array(
                'field' => 'correo',
                'label' => 'Correo electronico',
                'rules' => 'required|trim',
                'errors' => array(
                        'required' => '%s es obligatio' ),
        ),   array(
                'field' => 'telefono',
                'label' => 'Numero de telefono',
                'rules' => 'required|trim',
                'errors' => array(
                        'required' => '%s es obligatorio'),    
        ),    array(
                'field' => 'contrasena',
                'label' => 'Contrasena',
                'rules' => 'required|trim',
                'errors' => array(
                        'required' => '%s es obligatoria'),    
        ),
	);

 }

 function getLoginRules(){
    return array(
        array(
                'field' => 'email',
                'label' => 'correo electronico',
                'rules' => 'required|trim',
                'errors' => array(
                    'required' => 'el %s es obligatorio' ),
        ),
        array(
                'field' => 'password',
                'label' => 'contraseña',
                'rules' => 'required|trim',
                'errors' => array(
                    'required' => 'la %s es obligatorio'),    
        ),
    );

 }

  function getMenuRules(){
    return array(
        array(
                'field' => 'nombre',
                'label' => 'nombre del producto',
                'rules' => 'required|trim',
                'errors' => array(
                    'required' => 'el %s es obligatorio' ),
        ),
        array(
                'field' => 'descripcion',
                'label' => 'descripcion',
                'rules' => 'required|trim',
                'errors' => array(
                    'required' => 'la %s es obligatorio'),    
        ),
        array(
                'field' => 'precio',
                'label' => 'precio del producto',
                'rules' => 'required|trim',
                'errors' => array(
                    'required' => 'el %s es obligatorio'),    
        ),
        array(
                'field' => 'categoria',
                'label' => 'categoria',
                'rules' => 'required|trim',
                'errors' => array(
                    'required' => 'la %s es obligatoria'),    
        ),
    );
}

    function getPromocionesRules(){
        return array(
            array(
                    'field' => 'nombre',
                    'label' => 'nombre de la promocion',
                    'rules' => 'required|trim',
                    'errors' => array(
                        'required' => 'el %s es obligatorio' ),
            ),
            array(
                    'field' => 'productos',
                    'label' => 'productos',
                    'rules' => 'required|trim',
                    'errors' => array(
                        'required' => 'los %s son obligatorios'),    
            ),
            array(
                    'field' => 'precio',
                    'label' => 'precio de la promocion',
                    'rules' => 'required|trim',
                    'errors' => array(
                        'required' => 'el %s es obligatorio'),    
            ),
        
  );

 }