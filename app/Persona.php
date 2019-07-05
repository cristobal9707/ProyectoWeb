<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    public function atencion(){
        return $this->hasMany('App\Atencion', 'persona_id', 'id');
    }
}
