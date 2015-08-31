<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Choice extends Model
{
    public function comesFrom()
    {
        return $this->hasOne('App\Statement');
    }

    public function goesTo()
    {
        return $this->hasOne('App\Statement');
    }
}
