<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>登陆界面</title>
    <script type="text/javascript" src="{{asset('resources/views/index/js/jquery.js')}}"></script>
</head>
<body>
    <div class="login-body">
        <div class="logo"></div>
        <div class="login-main">
            <div class="login-area">
                <div class="area-header">
                    <h3>登录</h3>
                </div>
                @if ( count($errors) > 0)
                    @if (!is_object($errors))
                        {{$errors}}
                    @endif
                @endif
                <div class="area-body">
                    <form action="{{url('login')}}" method="post">
                        {{ csrf_field() }}
                        <div class="group-inputs">
                            <div class="account input-wrapper">
                                用户名:<input type="text" name="username" aria-label="用户名或邮箱">
                                @if( count($errors) > 0 )
                                    @if(is_object($errors))
                                        @if( array_has($errors->get('username'),0) ) <span>{{$errors->get('username')[0]}}</span>
                                        @endif
                                    @endif
                                @endif
                            </div>
                            <div class="password input-wrapper">
                                密码:<input type="password" name="password" aria-label="密码">
                                @if( count($errors) > 0 )
                                    @if(is_object($errors))
                                        @if( array_has($errors->get('password'),0) ) <span>{{$errors->get('password')[0]}}</span>
                                        @endif
                                    @endif
                                @endif
                            </div>
                            <div class="identification-number input-wrapper">
                                验证码:<input type="text" name="code" aria-label="验证码"><span>{{ $msg }}</span>
                            </div>
                            <div class="identification-area">
                                <div class="identification-img">
                                    <img src="{{url('code')}}" alt="验证码加载失败" width="90" height="30" onclick="this.src ='{{url("code")}}?'+Math.random()">
                                </div>
                                <div class="refresh">
                                    <a href="#"></a>
                                </div>
                            </div>
                        </div>
                        <div class="button-wrapper">
                            <input class="login-button" type="submit" value="登录">
                        </div>
                    </form>
                </div>
            </div>
            <div class="login-description">
                <p>软件开发实验室 XXX.com</p>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="{{asset('resources/views/index/js/jquery.js')}}"></script>
</body>
</html>