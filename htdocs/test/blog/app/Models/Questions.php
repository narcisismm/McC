<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Questions extends Model
{
    protected $table = 'Questions';

    public $timestamps = false;

    protected $guarded = [];

    public function followUsers()
    {
        return $this->belongsToMany('App\Models\Students', 'QuestionFollows', 'questionId','userId');
    }
}