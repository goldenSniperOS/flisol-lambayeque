<?php

/**
* 
*/
use Illuminate\Database\Eloquent\Model as Eloquent;

class Asistente extends Eloquent
{
	
	protected $table = 'asistente';
	protected $primaryKey = 'cod_asistente';
	protected $fillable = ['nombre','ap_paterno','ap_materno','email'];
	public $timestamps = false;

}