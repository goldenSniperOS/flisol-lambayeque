<?php
class extra extends Controller
{
	protected $layout_base = 'home/ad_event';
	public function index(){
		echo "<a href='full_ponencia'>Ponencias</a><br>";
		echo "<a href='full_taller'>Talleres</a>";
	}
	public function full_ponencia()
	{
		$ponencia = Evento::where('tipo_evento','=','ponencia')->get();
		$this->view('home/ad_event.php',array('ponencia' => $ponencia));
	}
	public function evento_exacto(){
		if(isset($_GET['cod_evento'])){
			$asist = Asistencia::where('cod_evento','=',$_GET['cod_evento'])->get();
			foreach ($asist as $asistencia) {
				$persona[]= Asistente::where('cod_asistente','=',$asistencia->cod_asistente)->first();
			}
			$this->view('home/ad_personas');
		}
	}
	public function full_taller(){
		$ponencia = Evento::where('tipo_evento','=','taller')->get();
		$this->view('home/ad_event',array('ponencia' => $ponencia));
	}
}
?>