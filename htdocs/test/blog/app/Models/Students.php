<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Students extends Model
{
    protected $table = 'Students';

    public $timestamps = false;

    protected $guarded = [];

    public function followQuestions()
    {
        return $this->belongsToMany('App\Models\Questions', 'QuestionFollows','userId','questionId');
    }

    public static function checkRegister($registerInfo)
    {
        $checkExist = self::where('username',$registerInfo['username'])->first();
        return $checkExist;
    }
}
