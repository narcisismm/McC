<?php
namespace App\Http\Controllers\Index;

use App\Models\Students;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;

require_once 'resources/org/code/Code.class.php';

class LoginController extends Controller{
    public function login()
    {
        if ($input = Input::except('token')) {
            $code = new \Code();
            $realCode = $code->get();
            $rules = [
                'username' => 'required',
                'password' => 'required',
            ];
            $message = [
                'username.required' => '用户名不能为空！',
                'password.required' => '密码不能为空！',
            ];
            $validator = Validator::make($input,$rules,$message);
            if ($validator->passes()) {
                if (strtoupper($input['code']) == $realCode) {
                    if ($student = Students::where('username',$input['username'])->orWhere('password', md5($input['password']))->first()) {
                        session(['user' => $student]);
                        return redirect('test');
                    } else {
                        return view('index.login')->with('errors','用户名或密码错误！')->with('msg','');
                    }
                } else {
                    return view('index.login')->with('msg','验证码错误！');
                }
            } else {
                if (strtoupper($input['code']) !== $realCode) {
                    return view('index.login')->withErrors($validator)->with('msg','验证码错误！');
                } else {
                    return back()->withErrors($validator);
                }
            }
        } else {
            return view('index.login')->with('msg','');
        }
    }
    
    public function code () {
        $code = new \Code();
        $code->make();
    }

}