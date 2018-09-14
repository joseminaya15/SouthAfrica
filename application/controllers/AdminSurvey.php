<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminSurvey extends CI_Controller {

	function __construct() {
        parent::__construct();
        $this->load->model('M_reporte');
        $this->load->helper("url");//BORRAR CACHÉ DE LA PÁGINA
        $this->output->set_header('Last-Modified:'.gmdate('D, d M Y H:i:s').'GMT');
        $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate');
        $this->output->set_header('Cache-Control: post-check=0, pre-check=0',false);
        $this->output->set_header('Pragma: no-cache');
    }
	public function index(){
        if($this->session->userdata('usuario') == '') {
            header("location: Login");
        } else {
            $datos = $this->M_reporte->getDatosEncuesta();
            $html  ='';
            foreach ($datos as $key) {
                $html .= '<tr class="">
                              <td class="text-left">'.$key->primer_nombre.' '.$key->apellidos.'</td>
                              <td class="text-left">'.$key->preg_1.'</td>
                              <td class="text-left">'.$key->preg_2.'</td>
                              <td class="text-left">'.$key->preg_3.'</td>
                              <td class="text-left">'.$key->preg_4.'</td>
                              <td class="text-left">'.$key->preg_5.'</td>
                              <td class="text-left">'.$key->preg_6.'</td>
                              <td class="text-left">'.$key->preg_7.'</td>
                              <td class="text-left">'.$key->preg_8.'</td>
                              <td class="text-left">'.$key->preg_9.'</td>
                              <td class="text-left">'.$key->preg_10.'</td>
                              <td class="text-left">'.$key->preg_11.'</td>
                              <td class="text-left">'.$key->preg_12.'</td>
                              <td class="text-left">'.$key->preg_13.'</td>
                              <td class="text-left">'.$key->preg_14.'</td>
                              <td class="text-left">'.$key->preg_15.'</td>
                              <td class="text-left">'.$key->preg_16.'</td>
                              <td class="text-left">'.$key->preg_17.'</td>
                              <td class="text-left" style="display:none"></td>
                          </tr>';
            }
            $data['bodyTabla'] = $html;
            $this->load->view('v_admin_survey', $data);
        }
	}
    function cerrarCesion(){
        $data['error'] = EXIT_ERROR;
        $data['msj']   = null;
        try {
            $this->session->unset_userdata('usuario');
            $data['error'] = EXIT_SUCCESS;
        } catch (Exception $e){
            $data['msj'] = $e->getMessage();
        }
        echo json_encode($data);
    }
}
