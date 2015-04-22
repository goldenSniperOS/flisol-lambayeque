<?php
class extra extends Controller
{
	public function index(){
		echo "<a href='extra/full_ponencia'>Ponencias</a><br>";
		echo "<a href='extra/full_taller'>Talleres</a>";

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


}
?>