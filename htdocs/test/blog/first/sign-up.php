<?php
date_default_timezone_set("PRC");       //一定要加上
session_start();                         /////////
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if($_SESSION["check"]!=intval($_POST["captchaField"])){
        echo "验证码不正确";
    }
else{
header("Content-type:text/html;charset=utf-8");
include_once("conn.php");
$name=$_POST["name"];
$password=$_POST["password"];
$email=$_POST["email"];
$gender=$_POST["gender"];
$day=$_POST["day"];
$month=$_POST["month"];
$year=$_POST["year"];
$birthday=date("Y-m-d",mktime(0,0,0,$month,$day,$year)); //要存入数据库，必须是y-m-d的格式
$studyArea=$_POST["studyArea"];
$avatar="images/no-avatar.png";
if(!empty($_FILES['avatar']['tmp_name']))
{
	if(strpos($_FILES['avatar']['tmp_name'],".jpg")==true)
	{   
		move_uploaded_file($_FILES["avatar"]["tmp_name"],"upload/" .$email.".jpg" );//$_FILES["avatar"]["name"]
		$avatar="upload/".$email.".jpg";
	}
	else  
	{	
		move_uploaded_file($_FILES["avatar"]["tmp_name"],"upload/" .$email.".png" );
		$avatar="upload/".$email.".png";
	}
}//把上传照片存入指定的文件夹，格式为jpg或png
$introduce=$_POST["introduce"];
/*$sql=mysql_query("select name from where email='$email'");
if($resutl=mysql_fetch_array($sql))
{
echo "<script>alert('该邮箱已经被注册！')</script>";
exit;
}*/
if($sql=mysqli_query($conn,"insert into users(userName,password,email,gender,studyArea,birthday,avatar,introduce)values('$name','$password','$email','$gender','$studyArea','$birthday','$avatar','$introduce')"))
{
	echo "<script>alert('注册成功')</script>";
	$url="NewMain.php";
    header("Location: $url"); 
}
else
{
	echo "注册失败";
}
}
}
?>