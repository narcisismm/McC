<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;

class CommonController extends Controller {
    public function upload() {
        $file = Input::file('Filedata');
//        检查上传文件是否有效
        if ($file -> isValid()) {
//            $realpath = $file->getRealPath();//获取临时文件绝对路径

            $extension = $file->getClientOriginalExtension();//获取文件后缀名

            $newName = date('YmdHis').mt_rand(100,999).'.'.$extension;

            $path = $file->move(base_path().'/uploads',$newName);
            $file_path = 'uploads/'.$newName;
            return $file_path;
        }
    }
}