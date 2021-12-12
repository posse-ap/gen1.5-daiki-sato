<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class BigQuestion extends Model
{
    public function questions()
    {
        return $this->hasOne('App\Model\Question');
    }
}
