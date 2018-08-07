<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

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
		if($this->session->userdata('usuario') == null){
			header("location: Login");
		}
        $datos = $this->M_reporte->getDatosUser();
        $html  = '';
        $cont  = 1;
        $invitado = '';
        $seguro = '';
        if(count($datos) == 0) {
            $html = '';
        }else {
            foreach ($datos as $key){
                $invitado = $key->flg_invitacion == 1 ? 'Si' : 'No';
                $seguro = $key->flg_seguro == 1 ? 'Si' : 'No';
                $html .= '<tr class="tr-cursor-pointer" data-idSolicitud="'.$cont.'">
                            <td class="text-left">'.$key->primer_nombre.' '.$key->apellidos.'</td>
                            <td class="text-left">'.$key->empresa.'</td>
                            <td class="text-left">'.$key->correo.'</td>
                            <td class="text-left">'.$key->page.'</td>
                            <td class="text-center">
                                <button class="mdl-button mdl-js-button mdl-button--icon" onclick="openModalPassport('.$key->id_negocio.')">
                                    <i class="mdi mdi-collections"> </i>
                                </button>
                                <a style="display:none">'.RUTA_ARCHIVOS.$key->imagen.'</a>
                            </td>
                            <td class="text-center">
                                <button class="mdl-button mdl-js-button mdl-button--icon" onclick="openModalBlankPassport('.$key->id_negocio.')">
                                    <i class="mdi mdi-collections"> </i>
                                </button>
                                <a style="display:none">'.RUTA_ARCHIVOS.$key->imagen2.'</a>
                            </td>
                            <td class="text-center">'.$key->fecha_registro.'</td>
                            <td class="text-left" style="display: none;">'.$key->cargo.'</td>
                            <td class="text-center" style="display: none;">'.$key->phone.'</td>
                            <td class="text-left" style="display: none;">'.$key->ciudad.'</td>
                            <td class="text-left" style="display: none;">'.$key->pais.'</td>
                            <td class="text-center" style="display: none;">'.$key->nu_pasaporte.'</td>
                            <td class="text-center" style="display: none;">'.$key->fecha_emision.'</td>
                            <td class="text-center" style="display: none;">'.$key->fecha_expiro.'</td>
                            <td class="text-left" style="display: none;">'.$key->pais_emisor.'</td>
                            <td class="text-left" style="display: none;">'.$key->genero.'</td>
                            <td class="text-center" style="display: none;">'.$key->fecha_cumple.'</td>
                            <td class="text-left" style="display: none;">'.$key->direccion.'</td>
                            <td class="text-left" style="display: none;">'.$key->estado.'</td>
                            <td class="text-left" style="display: none;">'.$key->codigo_estado.'</td>
                            <td class="text-left" style="display: none;">'.$seguro.'</td>
                            <td class="text-left" style="display: none;">'.$key->nacionalidad.'</td>
                            <td class="text-left" style="display: none;">'.$key->ciudad_referencia.'</td>
                            <td class="text-left" style="display: none;">'.$invitado.'</td>
                            <td class="text-left" style="display: none;">'.$key->asiento_preferencia.'</td>
                            <td class="text-left" style="display: none;">'.$key->talla_polo.'</td>
                            <td class="text-left" style="display: none;">'.$key->nombre.'</td>
                            <td class="text-center" style="display: none;">'.$key->telefono.'</td>
                            <td class="text-left" style="display: none;">'.$key->relacion.'</td>
                            <td class="text-left" style="display: none;">'.$key->adicional.'</td>
                        </tr>';
                $cont++;
            }
        }
		$data['html'] = $html;
		$this->load->view('v_admin', $data);
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
    function muestraPasaporte() {
        $data['error'] = EXIT_ERROR;
        $data['msj']   = null;
        try {
            $id  = $this->input->post('id');
            $img = $this->M_reporte->getDocumento($id);
            if($img[0]->imagen != null) {
                $data['imagen'] = RUTA_ARCHIVOS.$img[0]->imagen;
            } else {   
                $data['imagen'] = "";
            }
            $data['error'] = EXIT_SUCCESS;
        }
        catch (Exception $ex){
            $data['msj'] = $ex->getMessage();
        }
        echo json_encode($data);
    }
    function muestraBlankPasaporte() {
        $data['error'] = EXIT_ERROR;
        $data['msj']   = null;
        try {
            $id  = $this->input->post('id');
            $img = $this->M_reporte->getBlankDocumento($id);
            if($img[0]->imagen2 != null) {
                $data['imagen'] = RUTA_ARCHIVOS.$img[0]->imagen2;
            } else {   
                $data['imagen'] = "";
            }
            $data['error'] = EXIT_SUCCESS;
        }
        catch (Exception $ex){
            $data['msj'] = $ex->getMessage();
        }
        echo json_encode($data);
    }
}
