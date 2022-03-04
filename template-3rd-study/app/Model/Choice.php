<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Choice extends Model
{
    protected $fillable = ['name' , 'question_id' , 'valid'];

    public function questions()
    {
        return $this->hasMany('App\Model\Question');
    }
}
