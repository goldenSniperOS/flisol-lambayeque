<?php
/**
* 
*/
class Home extends Controller
{
	protected $layout_base = 'home/index';

	public function index()
	{
		$this->view('home/index.php');
	}

	public function conferencias()
	{
		$eventos = Evento::all();
		$this->view('home/conferencias.php',array('eventos' => $eventos));
	}

	public function talleres(){
		$eventos = Evento::all();
		$this->view('home/talleres.php',array('eventos' => $eventos));
	}

	public function registrarevento(){
		if(isset($_POST['nombres']) 
			&& isset($_POST['apellidos'])
			&& isset($_POST['email']) )
			{
				$asistente = new Asistente;
				$asistente->nombres = $_POST['nombres'];
				$asistente->apellidos = $_POST['apellidos'];
				$asistente->email = $_POST['email'];
				$asistente->save();

				$eventos = $_POST['eventos'];
				foreach ($eventos as $evento) {
					$asistencia = new Asistencia;
					$ult_asistente = Asistente::orderBy('cod_asistente', 'desc')->first();
					$asistencia->cod_asistente = $ult_asistente->cod_asistente;
					$asistencia->cod_evento = $evento;
					$asistencia->confirm_asis = 0;
					$asistencia->confirm_pago = 0;
				}
			}
		echo 'Asistencia registrada correctamente';
	}

	public function shared(){
		echo json_encode(array('algo' => $_POST['status']));
	}

	
}