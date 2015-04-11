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

	


	function __construct() {
		parent::__construct();
	}
	
}