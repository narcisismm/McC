<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>注册界面</title>
</head>
<body>
<div></div>
	<div class="register-body">
		<div class="logo"></div>
		<div class="register-main">
			<div class="register-area">
				<div class="area-header">
					<h3>欢迎注册</h3>
				</div>
				<div class="area-body">
					<form action="{{url('register')}}" method="post">
						{{ csrf_field() }}
						<div class="group-inputs">
							<div class="name input-wrapper">
								用户名：<input type="text" id="username" name="username" aria-label="用户名" onchange="checkUsernameExist(this)"><span id="checkUsername"></span>
								@if( count($errors) > 0 )
									@if(is_object($errors))
										@if( array_has($errors->get('username'),0) ) <span>{{$errors->get('username')[0]}}</span>
										@endif
									@else
										<span>{{$errors}}</span>
									@endif
								@endif
							</div>
							<div class="email input-wrapper">
								邮箱：<input type="text" id="email" name="email" aria-label="邮箱" onchange="checkEmailExist(this)"><span id="checkEmail"></span>
								@if( count($errors) > 0 )
									@if(is_object($errors))
										@if( array_has($errors->get('email'),0) ) <span>{{$errors->get('email')[0]}}</span>
										@endif
									@endif
								@endif
							</div>
							<div class="password input-wrapper">
								密码：<input type="password" name="password" aria-label="密码" >
								@if( count($errors) > 0 )
									@if(is_object($errors))
										@if( array_has($errors->get('password'),0) ) <span>{{$errors->get('password')[0]}}</span>
										@endif
									@endif
								@endif
							</div>
							<div class="comfirmpassword input-wrapper">
								确认密码：<input type="password" name="password_confirmation" aria-label="确认密码" >
								@if( count($errors) > 0 )
									@if(is_object($errors))
										@if( array_has($errors->get('password'),1) ) <span>{{$errors->get('password')[1]}}</span>
										@endif
									@endif
								@endif
							</div>
							<div class="school input-wrapper">
								学校：<input type="text" name="school" aria-label="学校" >
							</div>
							<div class="grade input-wrapper">
								年级：<input type="text" name="grade" aria-label="年级" >
							</div>
							<div class="identification-number input-wrapper">
								验证码：<input type="text" name="code" aria-label="验证码" ><span>{{ $msg }}</span>
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
							<input type="submit">
						</div>
					</form>
				</div>
			</div>
			<div class="register-description">
				<p>软件开发实验室 XXX.com</p>
			</div>
		</div>
	</div>
	<script>
        function checkUsernameExist(obj) {
            var username = $(obj).val();
//            wangEditor-3.0.8
			$.post("{{url('checkUsernameExist')}}",{'_token':'{{csrf_token()}}','username':username},function (data) {
				$("#checkUsername").html(data.msg);
	//			alert(data.msg);
			});
        }
        function checkEmailExist(obj) {
            var email = $(obj).val();
            $.post("{{url('checkEmailExist')}}",{'_token':'{{csrf_token()}}','email':email},function (data) {
                $("#checkEmail").html(data.msg);
            });
        }
	</script>
<script type="text/javascript" src="{{asset('resources/views/index/js/jquery.js')}}"></script>
</body>
</html>