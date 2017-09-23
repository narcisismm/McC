<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
</head>
<style type="text/css">
	#header{
		height: 100px;
		width: 100%;
		border-style: solid;
		border-color: #EFF2F5;
		background-color: white;
		border-width: 0px 0px 1px 0px;
		position: fixed;
		top:0px;
	}
	#text{
		float: left;
		width: 750px;
		margin-left: 100px;
		margin-top: 100px;
	}
	#nav{
		float: left;
		width: 220px;
		height: 300px;
		margin-left: 20px;
		margin-top: 100px;
		padding-left: 10px;
		padding-top: 10px;
		border-style: solid;
		border-color: #EFF2F5;
		border-width: 1px;
	}
	#new-text{
		width: 660px;
		min-height: 120px;
        max-height: 300px;
        height: 120px;
		float:right;
	}
	body{
		background-color: white;
		width: 1350px;
	}
	.test_box:empty:before{
		content: attr(placeholder);
	}
	.test_box{
		width: 300px;
		border: 2px solid #EFF2F5 ;
		float: left;
	}
	.test_box:focus:before{
		content: none;
	}
	h3{
		margin-left: 87px;
	}
	img{
		float: right;
		margin-left: 10px;
		position: relative;
		right: 40px;
		padding-top: 5px;
	}
	#footer{
		text-align: center;
		width: 1000px;
		padding-left: 100px;
		height: 20px;
		float: left;
	}
	
	</style>
<body>
<div id="header">
	<img src="images/ico_comment_new@2x.png"/>
		<img src="images/ico_comment_new@2x.png"/>
		<img src="images/no-avatar.png"/>	
</div>
<div id="text">
<h3>新动态</h3>
<div class="test_box" id="new-text" contenteditable="true" placeholder="分享、讨论一下今天的学习内容、课题进展......"></div>
	
	</div>
<div id="nav">
<ul>                        
			<li>动态</li>
			<li>团队</li>
			<li>分享</li>
			<li>论文</li>
			<li>朋友</li>
		</ul>
	</div>
	<div id="footer">© Copyright 软件开发实验室</div>
</body>
</html>
