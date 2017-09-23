<?php 
session_start();  
$_SESSION['id']=$_POST['id'];
//$contentId=mysqli_fetch_array($sql,MYSQLI_NUM);
header("Content-type:text/html;charset=utf-8");
?>
<!doctype html>
<html>
<meta charset="utf-8">
<title>首页</title>
<style type="text/css">
	li{
		padding-bottom: 10px;
	}
	ul{
		padding: 0px; 
		list-style-type:none;
		color: #5B646A;
	}
	h3{
		color: #5B646A;
		margin-bottom: 5px;
	}
	details summary::-webkit-details-marker{display:none;}
	summary{outline:none;}
	#header{
		height: 60px;
		width: 100%;
		background-color: #FFFFFF;
		text-align: center;
		border-width: 0px 0px 1px 0px;
		border-style: solid;
		border-color: #EFF2F5;	
		position:fixed;/*固定作用*/
		z-index: 2;
        top:0px;
	}
	#sider{
		text-align: left;
		padding-left: 20px;
		padding-top: 6px;
		width:220px;
		height:300px;
		border-style: solid;
		border-width: 1px;
		border-color: #EFF2F5;
		float:left;
		margin-top: 50px;
		margin-left: 40px;
		background-color: white;
	}
	#container{
		width: 750px;
		float:left;
		margin-left: 160px;
		margin-top:50px;
	}
	#footer{
		height: 50px;
		width: 100%;
		background-color: white;
		float:left;
		padding-left: 100px;
	}
	#camera{
		float: right;
		transform: scale(1.3);
		margin-right: 5px;
		margin-top: 10px;
	}
	#send{
		margin-top: 8px;
		float:right;
		font-size: 15px;
	}
	#news{
		margin-top: 50px;
		margin-left: 30px;
	}
	.news-icon{
		float:left; 
		position: absolute;  
        bottom:5px;
		left:5px;
		width: 100%;
		overflow: auto;
	}
	#new-text{
		width: 660px;
		min-height: 120px;
        max-height: 300px;
        _height: 120px;
		float:right;
	}
	.text-menu{
		float: right;
		width:20px;
		height: auto;
		margin-right: 10px;
	}
	.menu-list{
		display: none;
		width: 20px;
		height: auto;
	
	}
	.text-menu:hover .menu-list{display:block;} 
	</style>
<head>
<link rel="stylesheet" href="css/icomoon.css">
<link rel="stylesheet" href="css/alert.css">
<link rel="stylesheet" href="css/base.css">
<script src="js/jquery.min.js"></script>
<script src="js/alert.js"></script>
    <script language="javascript">
var friends_exist=0;
$(document).ready(function(){
  $("#friends-list").click(function(){
	$('#first-page').toggle();
	$('.icon-reply').toggle();
	  if(friends_exist==0){
       $('#second-page').load('templetes/friends-list.html');
	   friends_exist=1;
	  }
	  else{
		   $('#second-page').toggle();
	  }
  })
})
$(document).ready(function(){
  $(".icon-reply").click(function(){
	$('#first-page').toggle();
    $('#second-page').toggle();
	$(".icon-reply").toggle();
  })
})
$(document).ready(function(){
  $("#send").click(function(){
    $.post("send.php",{content:$("#new-text").text()},function(){
        $("#alert1").css("background-color","#36D0AE");
        newalert("发布成功");
        $("#new-text").html("");
    });
//	  $("#alert1").css("background-color","#36D0AE");
//	  newalert("发布成功");
//	  $("#new-text").html("");
  });
});	
</script>

<script>
	function login(){
		window.location="personalpage.php"
	}
	
</script>
</head>
<body id="home">
<div  class="alert-box" id="alert1"></div>


	<div id="header">
		<span class="nav-icon"><i class="icon-user" onClick="login()"></i></span>
		<span class="nav-icon"><i class="icon-bell"></i></span>
		<span class="nav-icon"><i class="icon-envelope"></i></span>
	</div>
    <div id="container">
        <h3 style="margin-left: 78px;">新动态</h3>
        <div class="test_box" id="new-text" contenteditable="true" placeholder="分享、讨论一下今天的学习内容、课题进展......"></div>
          
          <div style="float: right;width:100%;height:30px;margin-bottom: 20px">
          <button class="first-button" id="send" type="submit" value="Submit" ><strong>发布</strong></button>
          <span class="hover-green" id="camera" ><i class="icon-camera-retro"></i></span>
		  </div>
		  
             <?php include("templetes/news1.php"); ?>
             <?php include("templetes/news2.php"); ?>
             <?php include("templetes/news3.php"); ?>
	</div>
	      <div id="sider">
	      <h3>欢迎!<i class="icon-reply" style="display: none;"></i></h3>
	 <ul style="color:black;" id="first-page">
	  <li class="hover-green2"><i class="icon-arrow-circle-o-right"></i>动态</li>
	  <li class="hover-green2"><i class="icon-arrow-circle-o-right"></i>团队</li>
	  <li class="hover-green2"><i class="icon-arrow-circle-o-right"></i>分享</li>
	  <li class="hover-green2"><i class="icon-arrow-circle-o-right"></i>论文</li>
	  <li class="hover-green2" id="friends-list"><i class="icon-arrow-circle-o-right"></i>朋友列表</li>
	</ul>
     <div id="second-page"></div>
    </div>
    <div style="width: 1200px;text-align: center;" id="footer">© Copyright 软件开发实验室</div> <!--这里如果用p标签，则会造成存在左右滑动槽-->
</body>
</html>
<script>
$("#mytest").load("showContent.php");


</script>


