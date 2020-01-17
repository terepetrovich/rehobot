<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    public function maquinas()
    {
        return $this->hasMany('App\Maquina');
    }
}
