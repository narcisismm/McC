<?php

namespace App\Http\Controllers\Index;

use App\Models\Articles;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redis;

class IndexController extends Controller
{
    public function index()
    {
        $articles = Articles::orderBy('id','desc')->get();
        foreach ($articles as $data){
            foreach ($data->author()->get() as $author){
                $data->author = $author->username;
                $data->introduction = $author->introduction;
            };
//            $data->setAuthor();
//            $data->setIntroduction();
        };
//        dd($articles);
        return view('index.index',compact('articles'));
//        dd($authors);
    }

    public function homePage()
    {
        return view('index.userIndex');
    }

}
