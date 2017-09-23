<?php
namespace App\Http\Controllers\Index;

use App\Http\Controllers\Controller;
use App\Models\Students;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;

require_once 'resources/org/code/Code.class.php';

class RegisterController extends Controller{
    public function register()
    {
        if ($input = Input::except('_token')) {
//            dd($input);
            $code = new \Code();
            $realCode = $code->get();
            $rules = [
                'username' => 'required | between:8,20',
                'password' => 'required | between:6,20 | confirmed',
                'email' => 'required',
            ];
            $message = [
                'password.required' => '密码不能为空！',
                'username.required' => '用户名不能为空！',
                'email.required' => '邮箱不能为空！',
                'password.between' => '密码长度必须在6到20位！',
                'username.between' => '用户名必须在8到20位！',
                'password.confirmed' => '两次输入的密码不一致！',
            ];
            $validator = Validator::make($input,$rules,$message);
            if ($validator->passes()) {
                if (strtoupper($input['code']) == $realCode) {
                    $checked = Students::checkRegister($input);
                    if (!$checked) {
                        $student = new Students();
                        $student->username = $input['username'];
                        $student->email = $input['email'];
                        $student->password = md5($input['password']);
                        $student->school = $input['school'];
                        $student->grade = $input['grade'];
                        $student->save();
                        return redirect('index');
                    } else {
                       return view('index.register')->with('errors','该用户名已存在！')->with('msg','');
                    }
                } else {
                    return view('index.register')->with('msg','验证码错误！');
                }
            } else {
                if (strtoupper($input['code']) !== $realCode) {
                    return view('index.register')->withErrors($validator)->with('msg','验证码错误！');
                } else {
                    return back()->withErrors($validator);
                }
            }
        } else {
            return view('index.register')->with('msg','');
        }
    }

    public function checkUsernameExist()
    {
        $input = Input::all();
        if ($student = Students::where('username',$input['username'])->first()) {
            $data = [
                'msg' => '该用户名已存在！',
            ];
        } else {
            $data = [
                'msg' => '该用户名可用',
            ];
        }
        return $data;
    }

    public function checkEmailExist()
    {
        $input = Input::except('token');
        if ($student = Students::where('email',$input['email'])->first()) {
            $data = [
                'msg' => '该邮箱已注册！',
            ];
        } else {
            $data = [
                'msg' => '该邮箱可用',
            ];
        }
        return $data;
    }

    public function code () {
        $code = new \Code();
        $code->make();
    }
}