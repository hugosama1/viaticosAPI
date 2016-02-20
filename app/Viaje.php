<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Viaje extends Model
{
    public $timestamps = false;

    protected $fillable = [
    	'descripcion'
    ];

    
    public function user() {
    	return $this->belongsTo('App\User');
    }    

    public function viaticos() {
    	return $this->hasMany('App\Viatico');
    }
}
