<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Es extends CI_Controller {

	function __construct() {
        parent::__construct();
        $this->load->helper("url");//BORRAR CACHÉ DE LA PÁGINA
        $this->output->set_header('Last-Modified:'.gmdate('D, d M Y H:i:s').'GMT');
        $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate');
        $this->output->set_header('Cache-Control: post-check=0, pre-check=0',false);
        $this->output->set_header('Pragma: no-cache');
    }

	public function index()
	{
		$data['nombre'] = '';
		$this->load->view('v_es', $data);
	}

	function cambiarIdioma(){
    $data['error'] = EXIT_ERROR;
      $data['msj'] = null;
      try {
        $idioma  = $this->input->post('idioma');
        $session = array('idioma' => $idioma);
        $this->session->set_userdata($session);
        $data['error'] = EXIT_SUCCESS;
      }catch(Exception $e) {
        $data['msj'] = $e->getMessage();
      }
      echo json_encode($data);
  }
}