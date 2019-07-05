<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Atencion extends Model
{
    public function persona(){
        return $this->belongsTo('App\Persona', 'persona_id', 'id');
    }
    public function recurso(){
        return $this->belongsTo('App\RecursosHumano', 'recursoshumano_id', 'id');
    }
}
