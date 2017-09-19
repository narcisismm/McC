<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Hash;
use Request;

class User extends  Model {


    public $timestamps = false;
    public function signUp () {
//        $username = 'llp';
//        $password = Crypt::encrypt('123456');
//        $this->username = $username;
//        $this->password = $password;
//        if ($this->save()){
//            return ['status' => 1,'id' => $this->id];
//        }
//        $username = Request::get('name');
//        $password = Request::get('password');

//        if (!($username && $password)) {
//            return ['status' => 0,'msg' => '用户名和密码不可为空'];
//        }
//        $user_exists = $this
//            -> where('username', $username)
//            -> exists();
//        if ($user_exists) {
//            return ['status' => '0','msg' => '用户名已存在'];
//        }
//        $hashed_password = Hash::make($password);
//        $this->password = $hashed_password;
//        $this->username = $username;
//        if ($this->save()){
//            return ['status' => 1,'id' => $this->id];
//        } else {
//            return ['status' => '0','msg' => '数据存入失败'];
//        }

    }
//    public function login () {
//        $username = Request::get('name');
//        $password = Request::get('password');
//
//        if (!($username && $password)) {
//            return ['status' => 0,'msg' => '用户名和密码不可为空'];
//        }
//
////        判断用户是否存在
//        $user = $this
//            -> where('username', $username)
//            -> first();
//        if (!$user) {
//            return ['status' => '0','msg' => '用户名不存在'];
//        }
//
////        判断密码是否有误
//        $hashed_password = $user->password;
//        if (!Hash::check($password, $hashed_password)) {
//            return ['status' => 0,'msg' => '密码有误'];
//        }
//
////        将用户信息写入session
//        session()->put('username', $user->username);
//        session()->put('user_id', $user->id);
//        return ['status' => '1','user_id' => $user->id];
//
//    }
//    public function logout() {
////        session()->flush();清除所有session
//        if ($this->is_logged_in()){
//            session()->forget('username');
//            session()->forget('user_id');
//            return ['status' => '1'];
////            dd(session()->all());
//        }
//        return ['status' => '0'];
//
//    }
//    public function is_logged_in() {
//        return session('user_id')?:false;
//    }
}
