<?php

/**
* 
*/
use Illuminate\Database\Eloquent\Model as Eloquent;

class Asistencia extends Eloquent
{
	
	protected $table = 'asistencia';
	protected $primaryKey = 'id';
	protected $fillable = ['cod_asistente','cod_evento','confir_asis','confirm_pago'];
	public $timestamps = false;

}