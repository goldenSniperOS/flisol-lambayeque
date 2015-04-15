<?php
/**
* 
*/
class Home extends Controller
{
	public function index()
	{
		$eventos = Evento::orderBy('tipo_evento','asc')->get();

		if(isset($_POST['nombres'])
		&& isset($_POST['apellidos'])
		&& isset($_POST['email']) )
		{	
			$asis = Asistente::where('email','=',$_POST['email'])->first();
			if(!$asis){
				$asistente = new Asistente;
				$asistente->nombres = $_POST['nombres'];
				$asistente->apellidos = $_POST['apellidos'];
				$asistente->email = $_POST['email'];
				$asistente->save();

				$eventos = $_POST['evento'];
				foreach ($eventos as $evento) {
					$asistencia = new Asistencia;
					$asistencia->cod_asistente = $asistente->cod_asistente;
					$asistencia->cod_evento = $evento;
					$asistencia->confirm_asis = 0;
					$asistencia->confirm_pago = 0;
					$asistencia->save();
				}
				
				$mensaje = array('mensaje' => 'Gracias por ser parte de FLISOL 2015.','success'=>'success');
				$this->view('home/index',array('mensaje' => $mensaje,'eventos' => $eventos));
			}else{
				$mensaje = array('mensaje' => 'Ya tenemos un asistente con este correo, gracias por participar.','success'=>'warning');
				$this->view('home/index',array('mensaje' => $mensaje,'eventos' => $eventos));
			}
		}else{
			$this->view('home/index.php',array('eventos' => $eventos));
		}
	}
}