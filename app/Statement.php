<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Statement extends Model
{
    protected $fillable = ['title', 'content', 'summary'];
    public function options()
    {
        return $this->hasMany('App\Choice', 'statementFrom_id', 'id');
    }
}
