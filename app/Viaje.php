<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Viaje extends Model
{
    protected $fillable = [
    	'descripcion',
    	'fecha_inicio',
    	'fecha_fin',
        'mobile_id'
    ];

    
    public function user() {
    	return $this->belongsTo('App\User');
    }    

    public function viaticos() {
    	return $this->hasMany('App\Viatico');
    }

}
