<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class poliza extends Model
{
    protected $table= 'polizas';
	protected $primaryKey = 'id';
	public $timestamps=false;

	 protected $fillable =[
        'encabezado',
        'fecha',
        'periodo',
        'ejercicio'
    ];
}
