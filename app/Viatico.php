<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Viatico extends Model
{
    public $timestamps = false;
    protected $fillable = [
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
