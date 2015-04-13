<?php

/**
* 
*/
use Illuminate\Database\Eloquent\Model as Eloquent;

class Pago extends Eloquent
{
	
	protected $table = 'pago';
	protected $primaryKey = 'cod_pago';
	protected $fillable = ['pago','cod_asistencia'];
	public $timestamps = false;

}