<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::group(['namespace' => 'Index'], function () {
    Route::get('/test', 'TestController@test');
    Route::get('/mail','MailController@send');
    Route::get('/index', 'IndexController@index');
    Route::get('/home', 'IndexController@homePage');
    Route::get('/code', 'RegisterController@code');
    Route::get('/logout', 'LoginController@logout');
    Route::get('/write', 'AnswerController@index');
    Route::get('/edit', 'HomePageController@edit');
    Route::post('/checkUsernameExist', 'RegisterController@checkUsernameExist');
    Route::post('/checkEmailExist', 'RegisterController@checkEmailExist');
    Route::match(['get', 'post'], '/register','RegisterController@register');
    Route::match(['get', 'post'], '/login','LoginController@login');
});


