<?php

/**
* 
*/
class Controller
{	
	function __construct()
	{	
		$paths = require __DIR__.'/../paths.php';
		$database = require $paths['config']."/database.php";

		//load base template
			

		if($database['database_activate'] == 'true')
		{
			foreach (glob($paths['app']."models/*.php") as $filename)
			{
			    require_once $filename;
			}	
		}
		else
		{
			echo 'No hay Conexion a la Base de Datos';
		}
		//Las Sesiones se Inician para todos los controladores
		session_start();
	}

	private function load_name_file($name){
		$file = explode('.',$name);
		$name = (isset($file[1]))? $name = $name : $name = $name.'.php';
		return $name;
	}

	protected function model($model)
	{
		$paths = require __DIR__.'/../paths.php';
		require_once $this->paths['app'].'/models/'.$model.'.php';
		return new $model();
	}

	protected function view($_view,$_data = [])
	{			

		$paths = require __DIR__.'/../paths.php';
		$view = $this->load_name_file($_view);
		extract($_data, EXTR_PREFIX_SAME, "wddx");
		require_once $paths['app'].'/views/'.$view;
	}

	
}