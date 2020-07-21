<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class catalogo extends Model
{
    protected $table ='catalogos';
	public $timestamps=false;

	 protected $fillable =[
        'id',
        'catalogoscol',
        'nivel',
        'descripcion',
        'id_padre1',
        'descripcion_padre1',
        'id_padre2',
        'descripcion_padre2',
        'id_padre3',
        'descripcion_padre3'
    ];
}
