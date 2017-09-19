<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Models\User;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redis;

require_once 'resources/org/code/Code.class.php';

class LoginController extends Controller {

    public function login () {
        if ($input = Input::except('_token')) {
//            dd($input);
            $code = new \Code();
            $real_code = $code->get();
            $user = User::where('username',$input['username'])->first();
//            if (!session('user')) {
//                if (Redis::get($user->username) !== 1) {
//                    return back()->with('msg','该用户已登录！');
//                }
//                Redis::set($user->username,0);
//                $user->is_loggedin = 0;
//                $user->update();
//            }

//            if ($user->is_loggedin == 1 && session('user')) {
////                dd(session('user'));
//                return back()->with('msg','该用户已登录！');
//            }
            if ($user->username != $input['username'] || Crypt::decrypt($user->password) != $input['password']) {
                return back()->with('msg','用户名或密码错误！');
            }
            if (strtoupper($input['code']) !== $real_code) {
//                echo 233;
                return back()->with('msg','验证码错误！');
            }
//
            session(['user' => $user]);
            Redis::set($user->username,session_id());
//            $user->is_loggedin = 1;
//            $user->update();
//            dd(session('user'));
            return redirect('admin/index');
        }else{
//            dd($_SERVER);

            return view('admin.login');
        }
    }

    public function test()
    {
        dump(session_id()) ;
        echo '<br/>';
        $username = session('user')->username;
        dump(Redis::get($username));
//        if (session('user') !== Redis::get($username)){
//            return 2333;
//        }
    }

    public function logout () {
        session(['user' => null]);
        return redirect('admin/login');
    }

    public function code () {
        $code = new \Code();
        $code->make();
    }
}