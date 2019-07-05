<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RecursosHumano extends Model
{
    public function atencion(){
        return $this->hasMany('App\Atencion', 'recursoshumano_id', 'id');
    }
}
