<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{

    protected $fillable = ['name'];
    
    public function choice()
    {
        return $this->hasOne('App\Model\Choice');
    }
}
