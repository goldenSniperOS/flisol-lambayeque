<?php

/**
* 
*/
use Illuminate\Database\Eloquent\Model as Eloquent;

class Asistente extends Eloquent
{
	
	protected $table = 'asistente';
	protected $primaryKey = 'cod_asistente';
	protected $fillable = ['nombres','apellidos','email'];
	public $timestamps = false;

}