<?php

/**
* 
*/
use Illuminate\Database\Eloquent\Model as Eloquent;

class Asistencia extends Eloquent
{
	
	protected $table = 'asistencia';
	protected $primaryKey = 'cod_asistencia';
	protected $fillable = ['cod_asistente','cod_evento','cofirm_asis','confirm_pago'];
	public $timestamps = false;

}