<?php
namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model {
    protected $table = 'article';
    public $timestamps = false;
    protected $guarded = [];
}