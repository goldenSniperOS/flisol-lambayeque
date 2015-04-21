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
			$asist = Asistencia::where('cod_evento','=',$_GET['cod_evento'])->get();
			foreach ($asist as $asistencia) {
				echo $asistencia->cod_asistente;
				$persona= Asistente::where('cod_asistente','=',$asistencia->cod_asistente)->first();
				for ($i=0; $i < 999; $i++) { //ignora esto que lo hice para probar
					if (isset($basto)) {
						if(is_null($basto[$i])){
							$basto[$i] = $persona;
							break;
						}
					}else{
						$basto[$i]= $persona;
						break;
					}
				}
			}
			$this->view('listados/ad_personas');
		}
	}
	public function full_taller(){
		$ponencia = Evento::where('tipo_evento','=','taller')->get();
		$this->view('listados/ad_event',array('ponencia' => $ponencia));
	}
}
?>