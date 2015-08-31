<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Statement extends Model
{
    public function options()
    {
        return $this->hasMany('App\Choice');
    }
}
