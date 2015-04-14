<?php

/**
* 
*/
use Illuminate\Database\Eloquent\Model as Eloquent;

class Asistencia extends Eloquent
{
	
	protected $table = 'asistencia';
<<<<<<< HEAD
	protected $primaryKey = 'cod_asistencia';
	protected $fillable = ['cod_asistente','cod_evento','cofirm_asis','confirm_pago'];
=======
	protected $primaryKey = 'id';
	protected $fillable = ['cod_asistente','cod_evento','confir_asis','confirm_pago'];
>>>>>>> origin/master
	public $timestamps = false;

}