<?php

/**
* 
*/
use Illuminate\Database\Eloquent\Model as Eloquent;

class Evento extends Eloquent
{
	
	protected $table = 'evento';
	protected $primaryKey = 'cod';
	protected $fillable = ['nombre','speaker','tiempo','duracion','lugar','min_asis','tipo_evento'];
	public $timestamps = false;

}