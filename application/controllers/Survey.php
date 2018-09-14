<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Survey extends CI_Controller {

	function __construct() {
        parent::__construct();
        $this->load->model('M_reporte');
        $this->output->set_header('Last-Modified:'.gmdate('D, d M Y H:i:s').'GMT');
        $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate');
        $this->output->set_header('Cache-Control: post-check=0, pre-check=0',false);
        $this->output->set_header('Pragma: no-cache');
    }

	public function index() {
		$this->load->view('v_survey');
	}

	function ingresarEncuesta(){
		$data['error'] = EXIT_ERROR;
        $data['msj']   = null;
         try {
			$usuario   = $this->input->post('usuario');
			$validaUser= $this->M_reporte->verificaUsuario($usuario);
			$registro  = count($validaUser);
			if ($registro > 0) {
				$session    = array('id_negocio' => $validaUser[0]->id_negocio);
            	$this->session->set_userdata($session);
				$data['error'] = EXIT_SUCCESS;
			} else {
				$data['msj'] = 'Este usuario no ha sido registrado';
			}
        }catch(Exception $e) {
           $data['msj'] = $e->getMessage();
        }
        echo json_encode($data);
	}
	function guardarEncuesta() {
		$data['error'] = EXIT_ERROR;
        $data['msj']   = null;
         try {
			$preg1   = $this->input->post('preg1');
			$preg2   = $this->input->post('preg2');
			$preg3   = $this->input->post('preg3');
			$preg4   = $this->input->post('preg4');
			$preg5   = $this->input->post('preg5');
			$preg6   = $this->input->post('preg6');
			$preg7   = $this->input->post('preg7');
			$preg8   = $this->input->post('preg8');
			$preg9   = $this->input->post('preg9');
			$preg10   = $this->input->post('preg10');
			$preg11   = $this->input->post('preg11');
			$preg12   = $this->input->post('preg12');
			$preg13   = $this->input->post('preg13');
			$preg14   = $this->input->post('preg14');
			$preg15   = $this->input->post('preg15');
			$preg16   = $this->input->post('preg16');
			$preg17   = $this->input->post('preg17');
			$arrayInsert = array('preg1' => $preg1,
								'preg2' => $preg2,
								'preg3' => $preg3,
								'preg4' => $preg4,
								'preg5' => $preg5,
								'preg6' => $preg6,
								'preg7' => $preg7,
								'preg8' => $preg8,
								'preg9' => $preg9,
								'preg10' => $preg10,
								'preg11' => $preg11,
								'preg12' => $preg12,
								'preg13' => $preg13,
								'preg14' => $preg14,
								'preg15' => $preg15,
								'preg16' => $preg16,
								'preg17' => $preg17);
			$this->M_reporte->guardarEncuesta($arrayInsert, 'encuesta');
			$data['error'] = EXIT_SUCCESS;
        }catch(Exception $e) {
           $data['msj'] = $e->getMessage();
        }
        echo json_encode($data);
	}
}
