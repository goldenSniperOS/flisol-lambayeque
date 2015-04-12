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

	}

	public function talleres(){
		
	}

	public function shared(){
		echo json_encode(array('algo' => $_POST['status']));
	}

	
}