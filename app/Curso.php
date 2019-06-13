<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    protected $table = 'curso';

   //Relacion One to Many
    public function profesor(){
	return $this->hasMany('App\Profesor'); 
    }
   //Relacion Many to One
    public function Usuariocurso(){
    	return $this->belongsTo('App\Usuariocurso','idcurso');
    }
}
