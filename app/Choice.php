<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Choice extends Model
{
    public function comesFrom()
    {
        return $this->hasOne('App\Statement', 'id', 'statementFrom_id');
    }

    public function goesTo()
    {
        return $this->hasOne('App\Statement', 'id', 'statementTo_id');
    }
}
