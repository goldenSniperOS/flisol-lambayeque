<?php
class extra extends Controller
{
	public function index(){
		echo "<a href='full_ponencia'>Ponencias</a><br>";
		echo "<a href='full_taller'>Talleres</a>";
	}
	public function full_ponencia()
	{
		$ponencia = Evento::where('tipo_evento','=','ponencia')->get();
		$this->view('listados/ad_event.php',array('ponencia' => $ponencia));
	}
	public function evento_exacto(){
		if(isset($_GET['cod_evento'])){
			$persona = Asistente::join('Asistencia','Asistente.cod_asistente','=','Asistencia.cod_asistente')->
			where('cod_evento','=',$_GET['cod_evento'])->get();
			$this->view('listados/ad_personas',array('persona' => $persona));
		}
	}
	public function full_taller(){
		$ponencia = Evento::where('tipo_evento','=','taller')->get();
		$this->view('listados/ad_event',array('ponencia' => $ponencia));
	}
}
?>