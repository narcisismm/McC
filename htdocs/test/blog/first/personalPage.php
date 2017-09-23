<!doctype html>
<?php 
session_start();  
include_once("conn.php");
?>
<html>
<head>
<script>
	
	</script>
<meta charset="utf-8">
<title>个人主页</title>
<link rel="stylesheet" href="css/base.css">
<style type="text/css">
	body{
		background-color: #F7F8FA;
	}
	#header{
		width:1000px;
		height: 250px;
		background-color: gray;
		margin-left: 175px;
	}
	#top{
		width: 100%;
		height: 60%;
		background-color: #96A1A9;
	}
	#bottom{
		width: 100%;
		height: 40%;
		background-color: white;
	}
	#on-avatar{
		opacity: 0;
		background-color: #8A8A8A;
		z-index:251;
		text-align: center;  /*可使文字在div中垂直居中*/
		line-height: 160px;  
		color: white;
	}
	#on-avatar input{
	position: absolute;
	width: 169px;
	height: 3px;
	z-index: 251;
	opacity: 0;
	left: 1px;
	top: -5px;
	}
	#on-avatar:hover{
		cursor: pointer;
		opacity: 0.8;
		display: block;
	}
	
	#nav{
		height:50px;
		padding-left: 20px;
		border-bottom: solid 1px #F0F2F7;
	}
	.nav-bar{
		 float: left;
		 font-size: 20px;
	     margin-right: 30px;
		 margin-top: 15px;
	}
	.nav-bar:hover{
		cursor: pointer;
		color: springgreen;
	}
	#sider{
		margin-left: 175px;
		margin-top: 15px;
		width: 300px;
		height: 300px;
		border-style: solid;
		border-width: 1px;
		border-color:#E7EAF1;
		background-color: white;
		float: left;
	}
	#introduce{
		border-color: aquamarine;
		height: auto;
		float: left;
	}
	#container{
		width:690px;
		height: 500px;
		border-style: solid;
		border-width: 1px;
		border-color:#E7EAF1;
		background-color: white;
		float:left;
		margin-left:7px;
		margin-top: 15px;
	}
	#footer{
		height: 20px;
		width: 1000px;
		float: left;
		margin-left: 200px;
		text-align: center;
	}
	</style>
	<link rel="stylesheet" href="css/icomoon.css">
	<script>
	function main(){
		window.location.href='NewMain.php';//这种方法不会刷新页面
		//window.location="main.php"；//这种可以
	}
	function submit1() {
        document.getElementById('submit_avatar').click();
    }
	
	</script>
</head>
<body>
    <div class="avatar"><img src="<?php session_start();
        date_default_timezone_set("PRC");       //一定要加上
        header("Content-type:text/html;charset=utf-8");
        include_once("conn.php");
        $id=$_SESSION['id'];
        $sql=mysqli_query($conn,"select * from users where id='$id' ");
        if(mysqli_num_rows($sql)==1)//获取$sql里面email，password集中行的数目,使得能够匹配人数只有一个
        {
            $array=mysqli_fetch_array($sql);
            $img=$array['avatar'];


        }
        echo "$img";?>" style="width: 100%;height: 100%;border-radius: 20px;"/></div>
	<div  class="avatar" id="on-avatar" onClick="document.getElementById('change_avatar').click();">修改头像
 <!-- " -->
 <form  method="post"  action="change_avatar.php" enctype="multipart/form-data">
  <input type="file" id="change_avatar" name="change_avatar"  onchange="submit1()" style="display: none" />
  <input type="submit" id="submit_avatar" name="submit_avatar" value="提交"/>
  </form>
   </div>
    <div id="header">
    	<div id="top"></div>
    	<div id="bottom">  <span class="nav-icon"><i class="icon-home" onClick="main();"></i></span>   </div>
    </div>
<div id="sider">
<p>个人介绍</p>
		<?php include_once("introduce.php");?>
	
</div>
<div id="container">
	<div id="nav">
		<div class="nav-bar">动态</div>
		<div class="nav-bar">文章</div>
		<div class="nav-bar">推荐信息</div>
		<div class="nav-bar">小组</div>
	</div> 
</div>
<div id="footer">© Copyright 软件开发实验室
</div>
</body>
</html>
