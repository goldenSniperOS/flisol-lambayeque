<?php

/**
* 
*/
use Illuminate\Database\Eloquent\Model as Eloquent;

class Asistencia extends Eloquent
{
	
	protected $table = 'asistencia';
	protected $primaryKey = 'cod_asistencia';
	protected $fillable = ['nombres','apellidos','email','cod_insc','confir_asis'];

}