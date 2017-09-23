<?php
namespace App\Http\Controllers\Index;

use App\Http\Controllers\Controller;

class HomePageController extends Controller{
    public function edit()
    {
        return view('index.edit');
    }
}