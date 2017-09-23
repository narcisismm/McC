<?php
namespace App\Http\Controllers\Index;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Questions;
use App\Models\Students;
use Illuminate\Support\Facades\Cookie;
use Torann\GeoIP\GeoIP;

class TestController extends Controller{
    public function test(Request $request)
    {
//        $follow = Students::find(3);
//        $question = $follow->followQuestions()->get();
//        dd($question);
//
//        $question = Questions::find(1);
//        dd($question);
//        $follow = $question->followUsers()->get();
//        dd($follow);

//        Cookie::queue('test','hello world',10);
//        $cookie = $request->cookie('test');
//        echo $cookie;
//        return view('test');
//        GeoIP::

        $location = \Torann\GeoIP\Facades\GeoIP::getLocation('192.168.2.142');
        dd($location);
    }
}