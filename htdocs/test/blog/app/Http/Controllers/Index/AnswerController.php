<?php
namespace App\Http\Controllers\Index;

use App\Http\Controllers\Controller;

class AnswerController extends Controller{
    public function index()
    {
        return view('index.writeAnswer');
    }
}