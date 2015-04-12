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
		$user = Asistencia::find(1);
		var_dump($user);
	}

	public function talleres(){
		
	}

	public function shared(){
		echo json_encode(array('algo' => $_POST['status']));
	}

	
}