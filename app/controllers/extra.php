<?php
class extra extends Controller
{
	public function index(){
		echo "<a href='full_ponencia'>Ponencias</a><br>";
		echo "<a href='full_taller'>Talleres</a>";


	}
	public function full_ponencia()
	{
		$ponencia = Evento::where('tipo_evento','=','conferencia')->get();
		$this->view('listados/ad_event',array('ponencia' => $ponencia));
	}
	public function evento_exacto(){
		if(isset($_GET['cod_evento'])){
			$persona = Asistente::join('asistencia','asistente.cod_asistente','=','asistencia.cod_asistente')->
			where('cod_evento','=',$_GET['cod_evento'])->orderBy('asistente.apellidos','asc')->get();
			$this->view('listados/ad_personas',array('persona' => $persona));
		}
	}
	public function full_taller(){
		$ponencia = Evento::where('tipo_evento','=','taller')->get();
		$this->view('listados/ad_event',array('ponencia' => $ponencia));
	}

	public function cambiar_estado(){
		$cod_asistente = $_POST['cod_asistente'];
		$cod_evento = $_POST['cod_evento'];
		$asistente = Asistencia::where('cod_asistente','=',$cod_asistente)->where('cod_evento','=',$cod_evento)->first();
		if($asistente->confirm_asis == 1){
			$asistente->confirm_asis = 0;
		}else{
			$asistente->confirm_asis = 1;
		}
		$asistente->save();
	}
	public function cambiar_estado2(){
		$cod_asistente = $_POST['cod_asistente'];
		$cod_evento = $_POST['cod_evento'];
		$asistente = Asistencia::where('cod_asistente','=',$cod_asistente)->where('cod_evento','=',$cod_evento)->first();
		if($asistente->confirm_pago == 1){
			$asistente->confirm_pago = 0;
		}else{
			$asistente->confirm_pago = 1;
		}
		$asistente->save();
	}

	public function datos_asistente(){
		$cod_asistente = $_POST['cod_asistente'];
		$asistente = Asistente::find($cod_asistente);
		echo json_encode($asistente);
	}

	public function datos_eventos(){
		$cod_evento = $_POST['cod_evento'];
;		$evento = Evento::find($cod_evento);
		echo json_encode($evento);
	}
	public function modificar(){
		$cod_asistente = $_POST['cod_asistente'];
		$nombres = $_POST['nombres'];
		$apellidos = $_POST['apellidos'];
		$email = $_POST['email'];
		$asistente = Asistente::where('cod_asistente','=',$cod_asistente)->first();
		$asistente->nombres = $nombres;
		$asistente->apellidos = $apellidos;
		$asistente->email = $email;
		$asistente->save();
		echo json_encode($asistente);
	}

	public function registrar(){

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

				$cod_evento = $_POST['evento'];
				$asistencia = new Asistencia;
				$asistencia->cod_asistente = $asistente->cod_asistente;
				$asistencia->cod_evento = $cod_evento;
				$asistencia->confirm_asis = 0;
				$asistencia->confirm_pago = 0;
				$asistencia->save();
			}
	}
	echo json_encode(Asistente::orderBy('apellidos','asc')->get());
}
}
?>