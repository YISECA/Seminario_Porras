<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Localidad extends Model
{
    //
  protected $table = 'localidad';
  protected $primaryKey = 'id_localidad';
  protected $fillable = ['localidad'];
    
    public function forms(){
   		return $this->hasMany('App\Form','localidad');
   }
}
