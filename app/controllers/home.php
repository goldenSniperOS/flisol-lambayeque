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
		$asistencia = new Asistencia;
		$asistencia->nombres = $_POST['nombres'];
		$asistencia->apellidos = $_POST['apellidos'];
		$asistencia->email = $_POST['email'];
		$asistencia->cod_insc = $_POST['evento'];
		$asistencia->save();
		echo 'Asistencia registrada correctamente';
	}

	public function shared(){
		echo json_encode(array('algo' => $_POST['status']));
	}

	
}