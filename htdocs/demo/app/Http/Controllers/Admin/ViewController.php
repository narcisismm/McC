<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class ViewController extends Controller {
    public function index () {
        //        三种传参方式：
//        ->with('name',$name)
//        return view('test',$data);
//        compact('data','title')
        $data = [
            'name' => 'llp',
            'age' => 233,
        ];
        $title = 'hello world!';
        return view('test',compact('data','title'));
//        return view('test',$data);
//            ->with('name',$name)
//            ->with('age',$age);

    }
    public function view () {
        return view('view');
    }
    public function article () {
        return view('article');
    }
}