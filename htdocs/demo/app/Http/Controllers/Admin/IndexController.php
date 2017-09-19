<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Models\User;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;

class IndexController extends Controller {
    public function index() {
        return view('admin.index');
    }

    public function info() {
        return view('admin.info');
    }

    public function change () {
        if ($input = Input::all()) {
            $rules = [
              'password' => 'required | between:6,20 | confirmed',
            ];
            //密码确认表单name值需为password_confirmation
            $message = [
              'password.required' => '新密码不能为空！',
              'password.between' => '新密码必须在6到20位！',
              'password.confirmed' => '两次输入的密码不一致！',
            ];
            $validator = Validator::make($input,$rules,$message);
            if ($validator->passes()) {
                $user = User::first();
                if (Crypt::decrypt($user->password) == $input['password_o']) {
                    $user->password = Crypt::encrypt($input['password']);
                    $user->update();
                    return back()->with(['errors' => '密码修改成功！']);
                }else {
                    return back()->with(['errors' => '原密码错误！']);
                }
            }else {
                return back()->withErrors($validator);
            }
        }else {
            return view('admin.pass');
        }

    }

}