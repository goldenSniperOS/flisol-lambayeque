<?php
/**
* 
*/
class Home extends Controller
{
	public function index()
	{
		$this->view('home/index');
	}

	public function conferencias()
	{

	}

	public function talleres(){
		
	}


	function __construct() {
		parent::__construct();
	}
	
}