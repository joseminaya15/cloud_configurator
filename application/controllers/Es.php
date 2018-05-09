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

	public function index(){
    $data['nombre_comple'] = $this->session->userdata('nombre_linke');
    $data['email_link']      = $this->session->userdata('email_linke');
    $data['comp']            = $this->session->userdata('compania') == null ? '' : $this->session->userdata('compania');
    $data['tit']             = $this->session->userdata('titulo') == null ? '' : $this->session->userdata('titulo');
    $data['pais_link']       = $this->session->userdata('pais_linke');
    $data['pantalla1']        = $this->session->userdata('pantalla') == '' ? 0 : $this->session->userdata('pantalla');
    $data['industria']       = $this->session->userdata('industria');
    $data['Factura_anual']   = $this->session->userdata('Factura_anual');
    $data['Tamanio']         = $this->session->userdata('Tamanio');
    $data['Infraestructura'] = $this->session->userdata('Infraestructura');
    $explode                 = explode(",", $this->session->userdata('Prioridad'));
    $data['idIndustria']     = '';
    $html                    = '';
    foreach ($explode as $key){
      $html .= '<li>'.$key.'</li>';
    }
    $data['priori']        = $html;
    $client_id             = "864xp2wdu9eghe";
    $client_secret         = "M6NxoP4EWlaADF2U";
    $redirect_uri          = "http://www.sap-latam.com/sap_business_one/callback";
    $csrf_token            = random_int(1111111, 9999999);
    $scopes                = "r_basicprofile%20r_emailaddress";
    $data['client_id']     = $client_id;
    $data['client_secret'] = $client_secret;
    $data['redirect_uri']  = $redirect_uri;
    $data['csrf_token']    = $csrf_token;
    $data['scopes']        = $scopes;
    $data['nombre_linke']  = $this->session->userdata('emailAddress');
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

  function solicitarEstimacion(){
      $data['error']  = EXIT_ERROR;
      $data['msj']    = null;
      try {
          $nombre_completo = $this->input->post('nombre_completo');
          $empresa         = $this->input->post('empresa');
          $email           = $this->input->post('email');
          $pais            = $this->input->post('pais');
          $cargo           = $this->input->post('cargo');
          $telefono        = $this->input->post('telefono');
          $relacion        = $this->input->post('relacion');
          $contacto        = $this->input->post('contacto');//
          $term_cond       = $this->input->post('term_cond');
          if($contacto == '-'){
            $contacto = 0;
          }
          $arrayInsert = array('nombre_completo' => $nombre_completo,
                               'Empresa'         => $empresa,
                               'Email'           => $email,
                               'Pais'            => $pais,
                               'Cargo'           => $cargo,
                               'Telefono'        => $telefono,
                               'Terminos'        => $term_cond,
                               'Relacion'        => $relacion,
                               'Contactado'      => $contacto,
                               'Id_solicitud'    => $_SESSION['id_sol'],
                               'fecha_sol'       => date('Y-m-d H:i:s'));
          $datoInsert = $this->M_solicitud->insertarDatos($arrayInsert, 'usuario');
          $session    = array('nombre_completo' => $nombre_completo,
                              'Empresa'         => $empresa,
                              'Email'           => $email,
                              'Pais'            => $pais,
                              'Cargo'           => $cargo,
                              'Telefono'        => $telefono,
                              'Relacion'        => $relacion,
                              'Contacto'        => $contacto,
                              'pantalla'        => 0,
                              'id_persona'      => $datoInsert['Id']);
          $this->session->set_userdata($session);
          $this->session->unset_userdata('nombre_linke');
          $this->session->unset_userdata('email_linke');
          $this->session->unset_userdata('universidad');
          $this->session->unset_userdata('pais_linke');
          $this->session->unset_userdata('titulo');
          $this->session->unset_userdata('compania');
          $this->session->unset_userdata('Industria');
          $this->session->unset_userdata('Infraestructura');
          $this->session->unset_userdata('Factura_anual');
          $this->session->unset_userdata('Tamanio');
          $this->session->unset_userdata('Prioridad');
          $this->session->unset_userdata('idioma');
          $this->sendGmailSap($email);
          $this->emailClienteSap($email);
          $data['msj']  = $datoInsert['msj'];
          $data['error'] = $datoInsert['error'];
      }catch(Exception $e){
            $data['msj'] = $e->getMessage();
      }
      echo json_encode($data);
  }
}