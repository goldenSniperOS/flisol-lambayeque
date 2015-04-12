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
		$this->view('home/conferencias.php');
	}

	public function talleres(){
		$this->view('home/talleres.php');
	}

	public function shared(){
		echo json_encode(array('algo' => $_POST['status']));
	}

	
}