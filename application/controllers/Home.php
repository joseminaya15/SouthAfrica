<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct() {
        parent::__construct();
        $this->load->helper("url");//BORRAR CACHÉ DE LA PÁGINA
        $this->load->model('M_Solicitud');
        $this->output->set_header('Last-Modified:'.gmdate('D, d M Y H:i:s').'GMT');
        $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate');
        $this->output->set_header('Cache-Control: post-check=0, pre-check=0',false);
        $this->output->set_header('Pragma: no-cache');
  	}

	public function index(){
		$data['nombre'] = '';
		$this->load->view('v_home', $data);
	}

	function register() {
      	$data['error'] = EXIT_ERROR;
      	$data['msj']   = null;
		try {
			//Tabla Negocio
			$primerNombre 	= $this->input->post('primerNombre');
			$segundoNombre  = $this->input->post('segundoNombre');
			$apellidos 		= $this->input->post('apellidos');
			$empresa 		= $this->input->post('empresa');
			$cargo	 		= $this->input->post('cargo');
			$telefono 		= $this->input->post('telefono');
			$correo 		= $this->input->post('correo');
			$ciudad 		= $this->input->post('ciudad');
			$pais			= $this->input->post('pais');
			//tabla persona
			$nuPasaporte 	= $this->input->post('nuPasaporte');
			$fechaEmision 	= implode("-", array_reverse(explode("/", $this->input->post('fechaEmision'))));
			$fechaExpiro 	= implode("-", array_reverse(explode("/", $this->input->post('fechaExpiro'))));
			$paisEmisor 	= $this->input->post('paisEmisor');
			$genero 		= $this->input->post('genero');
			$fechaCumple 	= implode("-", array_reverse(explode("/", $this->input->post('fechaCumple'))));
			$nacionalidad 	= $this->input->post('nacionalidad');
			$ciudadReferen 	= $this->input->post('ciudadReferen');
			$flgInvitacion 	= $this->input->post('flgInvitacion');
			$asientoPrefere = $this->input->post('asientoPrefere');
			$tallaPolo 		= $this->input->post('tallaPolo');
			$foto 		    = $this->input->post('foto');
			$page 		    = $this->input->post('page');
			//Tabla Contacto Emergencia
			$nombreContacto = $this->input->post('nombreContacto');
			$telefonoContac = $this->input->post('telefonoContac');
			$relacion 		= $this->input->post('relacion');
			$especificacion = $this->input->post('especificacion');

			$insertNegocio = array('primer_nombre' 	=> $primerNombre,
								   'segundo_nombre' => $segundoNombre,
								   'apellidos' 		=> $apellidos,
								   'empresa' 		=> $empresa,
								   'cargo' 			=> $cargo,
								   'telefono' 		=> $telefono,
								   'correo' 		=> $correo,
								   'ciudad' 		=> $ciudad,
								   'pais' 			=> $pais,
								   'fecha_registro' => date("Y-m-d"));
			$datoInsert  = $this->M_Solicitud->insertarDatos($insertNegocio, 'negocio');
			$insertPersona = array('nu_pasaporte' 		=> $nuPasaporte,
								   'fecha_emision'		=> $fechaEmision,
								   'fecha_expiro'		=> $fechaExpiro,
								   'pais_emisor'		=> $paisEmisor,
								   'genero'				=> $genero,
								   'fecha_cumple'		=> $fechaCumple,
								   'nacionalidad'		=> $nacionalidad,
								   'ciudad_referencia'	=> $ciudadReferen,
								   'flg_invitacion'		=> $flgInvitacion,
								   'asiento_preferencia'=> $asientoPrefere,
								   'talla_polo'			=> $tallaPolo,
								   'page'				=> $page,
								   'imagen'				=> $foto,
								   '_id_negocio'		=> $datoInsert['id_negocio']);
			$insertContacto = array('nombre' 	 => $nombreContacto, 
									'telefono' 	 => $telefonoContac,
									'relacion' 	 => $relacion,
									'adicional'  => $especificacion,
									'_id_negocio'=> $datoInsert['id_negocio']);
			$this->M_Solicitud->insertarDemasDatos($insertPersona, 'persona', $insertContacto, 'contacto_emergencia');
			$session    = array('id_negocio' => $datoInsert['id_negocio']);
            $this->session->set_userdata($session);
      		$data['msj']   = $datoInsert['msj'];
      		$data['error'] = $datoInsert['error'];
		}catch(Exception $ex) {
			$data['msj'] = $ex->getMessage();
		}
      	echo json_encode($data);
	}
	function subirPassport(){
        $respuesta = new stdClass();
        $respuesta->error = EXIT_ERROR;
        $respuesta->mensaje = "";
        if(count($_FILES) == 0){
            $respuesta->mensaje = 'Seleccione su factura';
        }else {
            $tipo = $_FILES['archivo']['type']; 
            $tamanio = $_FILES['archivo']['size']; 
            $archivotmp = $_FILES['archivo']['tmp_name'];
            $namearch = $_FILES['archivo']['name'];
            $nuevo = explode(".",$namearch);
            $contador = count($nuevo);
            if($tamanio > '2000000'){
                $respuesta->mensaje = 'Photo Passport must be less than 2MB';
            }else {
                if($nuevo[$contador-1] == 'svg' || $nuevo[$contador-1] == 'jpeg' || $nuevo[$contador-1] == 'jpg' || $nuevo[$contador-1] == 'png'){
                    $target = getcwd().DIRECTORY_SEPARATOR.'public'.DIRECTORY_SEPARATOR.'archivos'.DIRECTORY_SEPARATOR.basename($_FILES['archivo']['name']);
                    if(move_uploaded_file($archivotmp, $target) ){
                       // $respuesta->mensaje = 'Su logo se subió correctamente';
                    	$respuesta->error = EXIT_SUCCESS;
                    } else {
                       $respuesta->mensaje = 'Hubo un problema en la subida de su logo';
                    }
                }else {
                    $respuesta->mensaje = 'El formato de la imagen es incorrecta';
                }
            }
            echo json_encode($respuesta);
        }
    }
}