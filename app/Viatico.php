<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Viatico extends Model
{
    protected $fillable = [
    	'descripcion',
    	'cantidad',
    	'iva',
    	'concepto_id'
    ];


	public function viaje() {
		return $this->belongsTo('App\Viaje');
	}

	public function concepto() {
		return $this->hasOne('App\Concepto');
	}
}
