<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Es extends CI_Controller {

	function __construct() {
      parent::__construct();
      $this->load->model('M_solicitud');
      $this->load->helper("url");
      $this->output->set_header('Last-Modified:'.gmdate('D, d M Y H:i:s').'GMT');
      $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate');
      $this->output->set_header('Cache-Control: post-check=0, pre-check=0',false);
      $this->output->set_header('Pragma: no-cache');
  }
	public function index(){
    $data['nombre_comple']   = $this->session->userdata('nombre_linke');
    $data['email_link']      = $this->session->userdata('email_linke');
    $data['comp']            = $this->session->userdata('compania') == null ? '' : $this->session->userdata('compania');
    $data['tit']             = $this->session->userdata('titulo') == null ? '' : $this->session->userdata('titulo');
    $data['pais_link']       = $this->session->userdata('pais_linke');
    $data['pantalla1']       = $this->session->userdata('pantalla') == '' ? 0 : $this->session->userdata('pantalla');
    $data['industria']       = $this->session->userdata('industria');
    $data['Factura_anual']   = $this->session->userdata('Factura_anual');
    $data['Tamanio']         = $this->session->userdata('Tamanio');
    $data['Infraestructura'] = $this->session->userdata('Infraestructura');
    $explode                 = explode(",", $this->session->userdata('Prioridad'));
    $data['idIndustria']     = '';
    $data['idIndustria']     = '';
    $html                    = '';
    $data['Industria']       = $this->session->userdata('tipo_industria') == null ? '-' : $this->session->userdata('tipo_industria');
    $data['Factura_anual']   = $this->session->userdata('factura_anual') == null ? '-' : $this->session->userdata('factura_anual');
    $data['Tamanio']         = $this->session->userdata('tamanio') == null ? '-' : $this->session->userdata('tamanio').' empleados';
    $data['Prioridad']       = $this->session->userdata('ayuda') == null ? '-' : $this->session->userdata('ayuda');
    $data['Infraestructura'] = $this->session->userdata('solucion') == null ? '-' : $this->session->userdata('solucion');
    $data['error']           = EXIT_SUCCESS;
    foreach ($explode as $key){ 
      $html .= '<li>'.$key.'</li>';
    }
    $data['priori']        = $html;
    $client_id             = "789a3qdz8kro7w";
    $client_secret         = "g6EEY96bQjbhoCN0";
    $redirect_uri          = "http://www.sap-latam.com/configurators/cloud/callback";
    $csrf_token            = random_int(1111111, 9999999);
    $scopes                = "r_basicprofile%20r_emailaddress";
    $data['client_id']     = $client_id;
    $data['client_secret'] = $client_secret;
    $data['redirect_uri']  = $redirect_uri;
    $data['csrf_token']    = $csrf_token;
    $data['scopes']        = $scopes;
    $data['nombre_linke']  = $this->session->userdata('emailAddress');
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
    }catch(Exception $e){
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
          $contacto        = $this->input->post('contacto');
          $term_cond       = $this->input->post('term_cond');
          $checks          = $this->input->post('checks');
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
                               'fecha_sol'       => date('Y-m-d H:i:s'),
                               'checks'          => $checks,
                               'idioma'          => $this->session->userdata('idioma'),
                               'lugar_aceptacion'=> 'Cloud Configurator');
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
          $data['msj']   = $datoInsert['msj'];
          $data['error'] = $datoInsert['error'];
      }catch(Exception $e){
            $data['msj'] = $e->getMessage();
      }
      echo json_encode($data);
  }
  function sendGmailSap($email){
      $data['error'] = EXIT_ERROR;
      $data['msj']   = null;
      try { 
        if($_SESSION['Contacto'] == '-'){
          $contact = '-';
        }else {
          if($_SESSION['Contacto'] == 3){
            $contact = 'por email y teléfono';
          }else if($_SESSION['Contacto'] == 2){
            $contact = 'por teléfono';
          }else if($_SESSION['Contacto'] == 1){
            $contact = 'por Email';
          }
        }
        $respuestas = $this->M_solicitud->getRespUsuario($_SESSION['id_persona']);
        $this->load->library("email");
        $configGmail = array('protocol'  => 'smtp',
                            'smtp_host' => 'smtpout.secureserver.net',
                            'smtp_port' => 3535,
                            'smtp_user' => 'info@marketinghpe.com',
                            'smtp_pass' => 'hpeinfo18',
                            'mailtype'  => 'html',
                            'charset'   => 'utf-8',
                            'newline'   => "\r\n");
         $this->email->initialize($configGmail);
         $this->email->from('info@sap-latam.com');
         $this->email->to('jhonatanibericom@gmail.com');//Giovanna.bergamo@sap.com,anali.vidal@sap.com,alejandra.hamelink@sap.com 
         $this->email->subject('Estoy interesado en Cloud Configurator para mi negocio.');
         $texto = '<!DOCTYPE html>
                    <html>
                    <head>
                      <title></title>
                    </head>
                    <body style="font-family: "Open Sans",Arial,Helvetica,sans-serif;">
                      <table align="center" cellspacing="0" cellpadding="0" border="0" style="max-width: 500px; width: 100%; margin: auto;border: 1px solid #757575;">
                        <tr>
                          <th>
                            <table cellspacing="0" cellpadding="0" border="0" style="background-color: #000000;">
                              <tbody>
                                <tr>
                                  <th style="width: 425px;text-align: left;padding-left: 20px;">
                                    <table cellspacing="0" cellpadding="0" border="0">
                                      <tbody>
                                        <tr style="text-align: left;">
                                          <th style="text-align: left;"><img width="80" height="40" src="http://www.sap-latam.com/sap_business_one/public/img/logo/logo_favicon.png"></th>
                                          <th><font style="color: #FFFFFF;font-family: arial;font-size:16px">Cloud Configurator</font></th>
                                        </tr>
                                      </tbody>
                                    </table>
                                  </th>
                                  <th style="width: 75px;">
                                    <table cellspacing="0" cellpadding="0" border="0">
                                      <tbody>
                                        <tr>
                                          <td style="height: 100px;width: 25px;background-color: #54442E;"></td>
                                          <td style="height: 100px;width: 25px;background-color: #8D6832;"></td>
                                          <td style="height: 100px;width: 25px;background-color: #E29D2E;"></td>
                                        </tr>
                                      </tbody>
                                    </table>
                                  </th>
                                </tr>
                              </tbody>
                            </table>
                          </th>
                        </tr>
                        <tr>
                          <td>
                            <table style="width: 100%;padding: 10px;">
                              <tbody>
                                <tr style="padding: 25px;margin: 30px;">
                                  <td style="text-align: center;padding: 10px 0;"><font style="font-weight: bold;font-size: 20px;">Datos del Cliente</font></td>
                                </tr>
                                <tr>
                                  <table style="padding: 20px;" cellspacing="0" cellpadding="0" border="0">
                                    <tbody>
                                      <tr style="padding: 0 20px;">
                                        <td><font style="margin: 3px 0;font-size: 18px;font-family: "Open Sans",Arial,Helvetica,sans-serif;font-weight: bold !important;"><strong>Cliente:</strong></font></td>
                                        <td><font style="margin: 3px 0;font-family: "Open Sans",Arial,Helvetica,sans-serif;">'.$_SESSION['nombre_completo'].'</font></td>
                                      </tr>
                                      <tr style="padding: 0 20px;">
                                        <td><font style="margin: 3px 0;font-size: 18px;font-family: "Open Sans",Arial,Helvetica,sans-serif;font-weight: bold;"><strong>Cargo:</strong></font></td>
                                        <td><font  style="margin: 3px 0;font-family: "Open Sans",Arial,Helvetica,sans-serif;">'.$_SESSION['Cargo'].'</font></td>
                                      </tr>
                                      <tr style="padding: 0 20px;">
                                        <td><font style="margin: 3px 0;font-size: 18px;font-family: "Open Sans",Arial,Helvetica,sans-serif;font-weight: bold !important"><strong>Empresa:</strong></font></td>
                                        <td><font style="font-family: "Open Sans",Arial,Helvetica,sans-serif;">'.$_SESSION['Empresa'].'</font></td>
                                      </tr>
                                      <tr style="padding: 0 20px;">
                                        <td><font style="margin: 3px 0;font-size: 18px;font-family: "Open Sans",Arial,Helvetica,sans-serif;font-weight: bold;"><strong>Teléfono:</strong></font></td>
                                        <td><font style="margin: 3px 0;font-family: "Open Sans",Arial,Helvetica,sans-serif;">'.$_SESSION['Telefono'].'</font></td>
                                      </tr>
                                      <tr style="padding: 0 20px;">
                                        <td><font style="margin: 3px 0;font-size: 18px;font-family: "Open Sans",Arial,Helvetica,sans-serif;font-weight: bold;"><strong>Email:</strong></font></td>
                                        <td><font style="margin: 3px 0;font-family: "Open Sans",Arial,Helvetica,sans-serif;">'.$_SESSION['Email'].'</font></td>
                                      </tr>
                                      <tr style="padding: 0 20px;">
                                        <td><font style="margin: 3px 0;font-size: 18px;font-family: "Open Sans",Arial,Helvetica,sans-serif;font-weight: bold;"><strong>Relación con SAP:</strong></font></td>
                                        <td><font style="margin: 3px 0;font-family: "Open Sans",Arial,Helvetica,sans-serif;">'.$_SESSION['Relacion'].'</font></td>
                                      </tr>
                                      <tr style="padding: 0 20px;">
                                        <td><font style="margin: 3px 0;font-size: 18px;font-family: "Open Sans",Arial,Helvetica,sans-serif;font-weight: bold;"><strong>País:</strong></font></td>
                                        <td><font style="margin: 3px 0;font-family: "Open Sans",Arial,Helvetica,sans-serif;">'.$_SESSION['Pais'].'</font></td>
                                      </tr>
                                      <tr style="padding: 0 20px;">
                                        <td><font style="margin: 3px 0;font-size: 18px;font-family: "Open Sans",Arial,Helvetica,sans-serif;font-weight: bold;"><strong>Forma de contacto:</strong></font></td>
                                        <td><font style="margin: 3px 0;font-family: "Open Sans",Arial,Helvetica,sans-serif;">'.$contact.'</font></td>
                                      </tr>
                                    </tbody>
                                  </table>
                                </tr>
                                <tr style="padding: 25px;margin: 30px;">
                                  <td style="text-align: center;"><font style="font-weight: bold;font-size: 20px;">Respuestas</font></td>
                                </tr>
                                <tr>
                                  <td>
                                    <table style="width: 100%;padding: 20px;" cellspacing="0" cellpadding="0">
                                      <tbody>
                                        <tr style="padding: 5px 20px;">
                                          <td rowspan="2"></td>
                                          <td style="text-align: left;"><font style="font-weight: bold;font-size: 14px;">¿En qué industria se desempeña?</font></td>
                                        </tr>
                                        <tr style="padding: 5px 20px;">
                                          <td style="text-align: left;"><font style="margin: 0;font-family: "Open Sans",Arial,Helvetica,sans-serif;">'.$respuestas[0]->tipo_industria.'</font></td>
                                        </tr>
                                        <tr style="padding: 5px 20px;">
                                          <td rowspan="2"></td>
                                          <td style="text-align: left;"><font style="font-weight: bold;font-size: 14px;">¿De qué tamaño es su empresa?</font></td>
                                        </tr>
                                        <tr style="padding: 5px 20px;">
                                          <td style="text-align: left;"><font style="margin: 0;font-family: "Open Sans",Arial,Helvetica,sans-serif;">'.$respuestas[0]->tamanio.' empleados</font></td>
                                        </tr>
                                        <tr style="padding: 5px 20px;">
                                          <td rowspan="2"></td>
                                          <td style="text-align: left;"><font style="margin: 0;font-weight: bold;font-size: 14px;">Su facturación</font></td>
                                        </tr>
                                        <tr style="padding: 5px 20px;">
                                          <td style="text-align: left;"><font style="margin: 0;font-family: "Open Sans",Arial,Helvetica,sans-serif;">'.$respuestas[0]->factura_anual.'</font></td>
                                        </tr>
                                        <tr style="padding: 5px 20px;">
                                          <td rowspan="2"></td>
                                          <td style="text-align: left;"><font style="margin: 0;font-weight: bold;font-size: 14px;">¿Cómo podemos ayudarle?</font></td>
                                        </tr>
                                        <tr style="padding: 5px 20px;">
                                          <td style="text-align: left;"><font style="margin: 0;font-family: "Open Sans",Arial,Helvetica,sans-serif;">'.$respuestas[0]->ayuda.'</font></td>
                                        </tr>
                                        <tr style="padding: 5px 20px;">
                                          <td rowspan="2"></td>
                                          <td style="text-align: left;"><font style="margin: 0;font-weight: bold;font-size: 14px;">¿Qué solución le interesa evaluar?</font></td>
                                        </tr>
                                        <tr style="padding: 5px 20px;">
                                          <td style="text-align: left;"><font style="margin: 0;font-family: "Open Sans",Arial,Helvetica,sans-serif;">'.$respuestas[0]->solucion.'</font></td>
                                        </tr>
                                      </tbody>
                                    </table>
                                  </td>
                                </tr>
                              </tbody>
                            </table>
                          </td>
                        </tr>
                      </table>
                    </body>
                    </html>';
          $this->email->message($texto);
          $this->email->send();
          $data['error'] = EXIT_SUCCESS;
      }catch(Exception $e){
        $data['msj'] = $e->getMessage();
      }
      return json_encode(array_map('utf8_encode', $data));
    }
    function emailClienteSap($email){
      $data['error'] = EXIT_ERROR;
      $data['msj']   = null;
      try {  
        $this->load->library("email");
        $respuestas = $this->M_solicitud->getRespUsuario($_SESSION['id_persona']);
        $configGmail = array('protocol'  => 'smtp',
                             'smtp_host' => 'smtpout.secureserver.net',
                             'smtp_port' => 3535,
                             'smtp_user' => 'info@marketinghpe.com',
                             'smtp_pass' => 'hpeinfo18',
                             'mailtype'  => 'html',
                             'charset'   => 'utf-8',
                             'newline'   => "\r\n");    
        $this->email->initialize($configGmail);
        $this->email->from('info@sap-latam.com');
        $this->email->to($email);
        $this->email->subject('Gracias por su interés en Cloud configurator.');
        $texto = '<!DOCTYPE html>
                    <html>
                    <head>
                      <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
                        <meta name="viewport" content="width=device-width">
                      <title></title>
                      <style type="text/css">
                        table,tbody,tr,td,th{padding: 0;margin: 0;border-spacing: 0;border-collapse: inherit;}
                        body{margin: 0;padding: 0; height: 100vh;}
                        table.body{background-color: #F3F3F3;width: 100%;height: 100%;border:0;}
                        h2,p{font-family: "Open Sans",Arial,Helvetica,sans-serif;margin: 0;}
                      </style>
                    </head>
                    <body>
                      <table class="body" cellspacing="0" cellpadding="0" border="0">
                        <tr>
                          <td>
                            <table align="center" cellspacing="0" cellpadding="0" border="0" style="width: 100%;max-width: 600px;margin: 0 auto;background-color: #000000;text-align: center;float: none;">
                              <tbody>
                                <tr>
                                  <th>
                                    <table cellspacing="0" cellpadding="0" border="0">
                                      <tbody>
                                        <tr>
                                          <th style="width: 525px;text-align: left;padding-left: 20px;">
                                            <table cellspacing="0" cellpadding="0" border="0">
                                              <tbody>
                                                <tr style="text-align: left;">
                                                  <th style="text-align: left;"><img width="80" height="40" src="http://www.sap-latam.com/sap_business_one/public/img/logo/logo_favicon.png"></th>
                                                  <th><font style="color: #FFFFFF;font-family: arial;font-size:16px">Cloud Configurator</font></th>
                                                </tr>
                                              </tbody>
                                            </table>
                                          </th>
                                          <th style="width: 75px;">
                                            <table cellspacing="0" cellpadding="0" border="0">
                                              <tbody>
                                                <tr>
                                                  <td style="height: 100px;width: 25px;background-color: #54442E;"></td>
                                                  <td style="height: 100px;width: 25px;background-color: #8D6832;"></td>
                                                  <td style="height: 100px;width: 25px;background-color: #E29D2E;"></td>
                                                </tr>
                                              </tbody>
                                            </table>
                                          </th>
                                        </tr>
                                      </tbody>
                                    </table>
                                  </th>
                                </tr>
                              </tbody>
                            </table>
                            <table align="center" cellspacing="0" cellpadding="0" style="width: 100%;border:1px solid #000000;max-width: 600px;margin: 5px auto;;text-align: center;float: none;background-color: #FFFFFF;">
                              <tbody>
                                <tr>
                                  <td>
                                    <table align="center" cellspacing="0" cellpadding="0" style="text-align: center;margin: auto;">
                                      <tbody>
                                        <tr>
                                          <td style="padding: 20px 40px 10px 40px;">
                                            <font style="color: #000000;font-weight: bold;font-size: 20px;">¡Gracias por su participación!</font>
                                          </td>
                                        </tr>
                                         <tr>
                                            <td style="padding:10px 40px 20px 40px;">
                                              <font style="color: #000000;font-size:14px;font-family: arial;">Estamos seguros que Cloud Configurator lo ayudará a acelerar la transformación digital en su empresa. Un representante de SAP se pondrá en contacto con Usted para ayudarlo a dar el primer paso.</font>
                                            </td>
                                        </tr>
                                      </tbody>
                                    </table>
                                  </td>
                                </tr>
                                <tr>
                                  <td style="padding: 0 20px 20px 45px;">
                                    <table style="width: 100%;" cellspacing="0" cellpadding="0">
                                      <tbody>
                                        <tr style="padding: 5px 20px;">
                                          <td rowspan="2"></td>
                                          <td style="text-align: left;"><font style="margin: 0;font-weight: bold;font-size: 14px;"><strong>¿En qué industria se desempeña?</strong></font></td>
                                        </tr>
                                        <tr style="padding: 5px 20px;">
                                          <td style="text-align: left;"><font style="margin: 0;font-family: "Open Sans",Arial,Helvetica,sans-serif;">'.$respuestas[0]->tipo_industria.'</font></td>
                                        </tr>
                                        <tr style="padding: 5px 20px;">
                                          <td rowspan="2"></td>
                                          <td style="text-align: left;"><font style="margin: 0;font-weight: bold;font-size: 14px;"><strong>¿De qué tamaño es su empresa?</strong></font></td>
                                        </tr>
                                        <tr style="padding: 5px 20px;">
                                          <td style="text-align: left;"><font style="margin: 0;font-family: "Open Sans",Arial,Helvetica,sans-serif;">'.$respuestas[0]->tamanio.' empleados</font></td>
                                        </tr>
                                        <tr style="padding: 5px 20px;">
                                          <td rowspan="2"></td>
                                          <td style="text-align: left;"><font style="margin: 0;font-weight: bold;font-size: 14px;"><strong>Su facturación</strong></font></td>
                                        </tr>
                                        <tr style="padding: 5px 20px;">
                                          <td style="text-align: left;"><font style="margin: 0;font-family: "Open Sans",Arial,Helvetica,sans-serif;">'.$respuestas[0]->factura_anual.'</font></td>
                                        </tr>
                                        <tr style="padding: 5px 20px;">
                                          <td rowspan="2"></td>
                                          <td style="text-align: left;"><font style="margin: 0;font-weight: bold;font-size: 14px;"><strong>¿Cómo podemos ayudarle?</strong></font></td>
                                        </tr>
                                        <tr style="padding: 5px 20px;">
                                          <td style="text-align: left;"><font style="margin: 0;font-family: "Open Sans",Arial,Helvetica,sans-serif;">'.$respuestas[0]->ayuda.'</font></td>
                                        </tr>
                                        <tr style="padding: 5px 20px;">
                                          <td rowspan="2"></td>
                                          <td style="text-align: left;"><font style="margin: 0;font-weight: bold;font-size: 14px;"><strong>¿Qué solución le interesa evaluar?</strong></font></td>
                                        </tr>
                                        <tr style="padding: 5px 20px;">
                                          <td style="text-align: left;"><font style="margin: 0;font-family: "Open Sans",Arial,Helvetica,sans-serif;">'.$respuestas[0]->solucion.'</font></td>
                                        </tr>
                                      </tbody>
                                    </table>
                                  </td>
                                </tr>
                                <tr>
                                  <td style="padding:10px 40px 20px 40px;">
                                    <font style="color: #000000;font-size:14px;font-family: arial;"><strong>SAP Latinoamérica</strong></font>
                                  </td>
                                </tr>
                              </tbody>
                            </table>
                          </td>
                        </tr>
                      </table>
                    </body>
                    </html>';
        $this->email->message($texto);
        $this->email->send();
        $data['error'] = EXIT_SUCCESS;
      }catch (Exception $e){
        $data['msj'] = $e->getMessage();
      }
      return json_encode(array_map('utf8_encode', $data));
  }
  function mostrarDatos(){
      $data['error'] = EXIT_ERROR;
      $data['msj']   = null;
      try {
          $obtenerDatos            = $this->M_solicitud->datos($this->session->userdata('id_sol'));
          $data['Industria']       = $obtenerDatos[0]->tipo_industria;//$this->session->userdata('tipo_industria') == null ? '-' : $this->session->userdata('tipo_industria');
          $data['Factura_anual']   = $obtenerDatos[0]->factura_anual; //$this->session->userdata('factura_anual') == null ? '-' : $this->session->userdata('factura_anual');
          $data['Tamanio']         = $obtenerDatos[0]->tamanio; //$this->session->userdata('tamanio') == null ? '-' : $this->session->userdata('tamanio').' empleados';
          $data['Prioridad']       = $obtenerDatos[0]->ayuda; //$this->session->userdata('ayuda') == null ? '-' : $this->session->userdata('ayuda');
          $data['Infraestructura'] = $obtenerDatos[0]->solucion; //$this->session->userdata('solucion') == null ? '-' : $this->session->userdata('solucion');
          $data['error']           = EXIT_SUCCESS;
      }catch(Exception $e){
          $data['msj'] = $e->getMessage();
      }
      echo json_encode($data);
  }
  function buttonNext(){
      $data['error'] = EXIT_ERROR;
      $data['msj']   = null;
      try {
          $config      = $this->input->post('config');
          $pantalla    = $this->input->post('pantalla');
          $ayuda       = $this->input->post('ayuda');
          $tipo_ind    = $this->input->post('tipo_ind');
          $solucion    = $this->input->post('solucion');
          $factura     = $this->input->post('factu');
          $tamanio     = $this->input->post('empleados');
          $retos       = $this->input->post('retos');
          if($pantalla == PANT_UNO){
              $arrayInsert   = array('producto' => $config);
              $datoInsert    = $this->M_solicitud->insertarDatos($arrayInsert, 'solicitud');
              $session       = array('producto' => $config,
                                     'id_sol'   => $datoInsert['Id']);
          }else if($pantalla == PANT_DOS){
              $this->session->unset_userdata('ayuda');
              $arrayUpdate = array('ayuda' => $ayuda);
              $this->M_solicitud->updateDatos($arrayUpdate, $this->session->userdata('id_sol'), 'solicitud');
              $session     = array('ayuda' => $ayuda);
          }else if($pantalla == PANT_TRES){
              $arrayUpdate = array('tipo_industria'  => $tipo_ind,
                                    'tamanio'        => $tamanio,
                                    'factura_anual'  => $factura);
              $this->M_solicitud->updateDatos($arrayUpdate, $this->session->userdata('id_sol'), 'solicitud');
              $session     = array('tipo_industria' => $tipo_ind,
                                   'tamanio'        => $tamanio,
                                   'factura_anual'  => $factura);
          }else if($pantalla == PANT_CUATRO){
              $arrayUpdate = array('solucion' => $solucion);
              $this->M_solicitud->updateDatos($arrayUpdate, $this->session->userdata('id_sol'), 'solicitud');
              $session     = array('solucion' => $solucion);
          }
          $this->session->set_userdata($session);
          $data['error'] = EXIT_SUCCESS;
      } catch (Exception $e){
          $data['msj'] = $e->getMessage();
      }
      echo json_encode($data);
  }
  function ConfirmarRespuestas(){
      $data['error'] = EXIT_ERROR;
      $data['msj']   = null;
      try {
        $confirmar = $this->input->post('confirmar');
        $session   = array('confirmar' => $confirmar);
        $this->session->set_userdata($session);
        $data['error'] = EXIT_SUCCESS;
      }catch(Exception $e){
        $data['msj'] = $e->getMessage();
      }
      echo json_encode($data);
  }
}