<?php
class extra extends Controller
{
	protected $layout_base = 'home/ad_event';
	public function full_ponencia()
	{
		$ponencia = Evento::where('tipo_evento','=','ponencia')->get();
		$this->view('home/ad_event.php',array('ponencia' => $ponencia));
	}
	public function evento_exacto(){
		if(isset($_POST['nombre'])){
			$event = Evento::where('nombre','=',$_POST['nombre'])->first();
			$cevento = $event->cod_evento;
			$this->view('home/ad_event');
		}
	}
	public function full_taller(){
		$taller = Evento::where('tipo_evento','=','taller')->get();
		$this->view('home/ad_event',array('taller' => $taller));
	}
}
?>