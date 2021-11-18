<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    public function choice()
    {
        return $this->hasOne('App\Model\Choice');
    }
}
