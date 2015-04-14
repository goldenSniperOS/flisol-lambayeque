<?php

/**
* 
*/
use Illuminate\Database\Eloquent\Model as Eloquent;

class Evento extends Eloquent
{
	
	protected $table = 'evento';
	protected $primaryKey = 'cod_evento';
	protected $fillable = ['nombre','expositor','hora','duracion','lugar','tipo_evento','capacidad'];
	public $timestamps = false;

}