<?php
namespace App\Http\Controllers\Index;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller{
    public function send()
    {
        $name = 'llp';
        $flag = Mail::send('test',['name'=>$name],function($message){
            $to = '471630097@qq.com';
            $message ->to($to)->subject('hello world!');
        });
        if($flag){
            echo '发送邮件成功，请查收！';
        }else{
            echo '发送邮件失败，请重试！';
        }
    }
}