<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class concepto extends Model
{

     public $timestamps = false;

     protected $fillable = [
     	'descripcion'
     ];
}
