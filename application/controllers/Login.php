<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct() {
        parent::__construct();
        $this->load->model('M_usuario');
        $this->load->helper("url");//BORRAR CACHÉ DE LA PÁGINA
        $this->output->set_header('Last-Modified:'.gmdate('D, d M Y H:i:s').'GMT');
        $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate');
        $this->output->set_header('Cache-Control: post-check=0, pre-check=0',false);
        $this->output->set_header('Pragma: no-cache');
    }

	public function index() {
		$this->session->unset_userdata('user');
	    $this->session->unset_userdata('Id_user');
		$this->load->view('v_login');
	}

	function ingresar(){
		$data['error'] = EXIT_ERROR;
        $data['msj']   = null;
         try {
			$usuario  = $this->input->post('usuario');
			$password = $this->input->post('password');
			$username = $this->M_usuario->verificarUsuario($usuario, $password);
			if(count($username) != 0){
				if(strtolower($username[0]->usuario) == strtolower($usuario)){
					if($usuario == 'prueba'){
						$session = array('usuario' => $usuario,
								 		 'Id_user' => $username[0]->Id,
								 		 'Idioma'  => 'Todos');
					}else if($usuario == 'sapadmin'){
						$session = array('usuario' => $usuario,
								 		 'Id_user' => $username[0]->Id,
								 		 'Idioma'  => 'Todos');
					}else if($usuario == 'iradmin'){
						$session = array('usuario' => $usuario,
								 		 'Id_user' => $username[0]->Id,
								 		 'Idioma'  => 'Sueco');
					}
					$data['Id'] = $username[0]->Id;
					$data['Nombre'] = 'juanito';
					$data['Pais'] = 1;
					$this->session->set_userdata($session);
		          	$data['error'] = EXIT_SUCCESS;
				}
			}
        }catch(Exception $e) {
           $data['msj'] = $e->getMessage();
        }
        echo json_encode($data);
	}
}
