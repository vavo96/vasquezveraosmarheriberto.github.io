<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class detalle_poliza extends Model
{
    protected $table ='detalle_poliza';
    protected $primaryKey = 'id';
	public $timestamps=false;

	 protected $fillable =[
        'id_poliza',
        'cuenta_contable',
        'cargo',
        'abono'
    ];
}
