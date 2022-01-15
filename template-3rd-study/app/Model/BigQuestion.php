<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class BigQuestion extends Model
{
    protected $fillable = ['name'];

    public function questions()
    {
        return $this->hasMany('App\Model\Question');
    }
}
