<html>
<head>
<meta charset="utf-8">
<title>登录界面</title>
<link rel="stylesheet" href="css/alert.css">
<style>
	body{
		text-align: center;
	}
	table{
		width:100%;
	    padding:0px;
		margin: 0px;
	
	}
	input[type=text],
	input[type=password]{
		width: 99%;
		height: 50px;
		margin: 0px;	
		padding: 0px;
	}
	#sign-btn{
		border:none;
		width:100%;
		height: 40px;
		margin:0 auto;
	}
	#container{
		margin-left: 525px;
		margin-right: 525px;
		margin-top: 65px;
		text-align: center;
		width:300px;
		padding: 0px;
	}
	#title{
		color: #4C5358;
		font-size: 50px;
		margin: 0 auto;
	}
	</style>
<script src="js/jquery.min.js"></script>
<script src="js/jquery.form.js"></script>
<script src="js/alert.js"></script>
	<!--这里用到的是ajaxsubmit（）提交的方法 进行异步处理不用再页面跳转直接进入主页
	最后一定要return false 否则页面就会进入action里面
	ajaxsubmit（）方法其实不需要点击submit按钮，可以使它通过点击其他button实现该功能比如一张图片或是一个链接
	ajaxform（）需要一个submit按钮实现提交-->
<script>
	$(document).ready(function() 
            {
                $('#form1').submit(function()//提交表单
                {
					if($("#email").val()=="") newalert("请输入邮箱地址!");
					else if($("#password").val()=="") newalert("请输入密码！");
				    else 
					{ 	
					  	var options = { 
                        target:'#receive', //后台将把传递过来的值赋给该元素
                        url:'checkLogin.php', //提交给哪个执行
                        type:'POST', 
                        success: function(data){
							if($('#receive').text()!="账号或密码错误")
							{	
								$("#alert1").css("background-color","#36D0AE");  //修改alert颜色
								newalert("登录成功");
								document.getElementById("id").value=($('#receive').text());
								setTimeout("document.getElementById('form2').submit()",1000);
								 var id=data;
							}
						    else 
							{
								$("#alert1").css("background-color","#DC3C56");
							    newalert($('#receive').text());
							}
						} //显示操作提示
                       };
                        $('#form1').ajaxSubmit(options); 
					}
					return false;//为了不刷新页面,返回false，反正都已经在后台执行完了，没事！ 
                });  
            }
         );
</script>
</head>
<body>
<form id="form2" name="form2" method="post" action="NewMain.php" >
     <input type="hidden"  name="id" id="id">
</form>
<div  class="alert-box" id="alert1"></div>
<div id="receive" style="display: none;"></div>


<div id="container">
   <div id="title"><strong>软件开发实验室</strong></div>
	<h3>php协同学习团体</h3>
  <form id="form1" method="post" action="checkLogin.php">
   <table id="sign-up">
	   <tr><td><input placeholder="邮箱" type="text" name="email" id="email"></td></tr>
	   <tr><td><input placeholder="密码" type="password" name="password" id="password"></td></tr>
   </table>
   <input id="sign-btn" type="submit" value="登录"/>
  </form>
</div>
</body>
</html>

