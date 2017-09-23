<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Articles extends Model
{
    protected $table = 'Articles';

    protected $guarded = [];

    public $author;

    public $introduction;

    public function articleLabels()
    {
        return $this->hasMany('App\Models\ArticleLabels','articleId');
    }

    public function comments()
    {
        return $this->hasMany('App\Models\Comments','articleId');
    }

    public function author()
    {
        return $this->belongsTo('App\Models\Students','userId');
    }

    public function setAuthor()
    {
        return $this->author = $this->author();
    }
//
//    public function setIntroduction()
//    {
//        $this->introduction = $this->author()->introduction;
//    }
}