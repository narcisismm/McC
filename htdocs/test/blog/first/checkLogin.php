<?php
session_start();
header("Content-type:text/html;charset=utf-8");
include('conn.php');
$email = $_POST["email"];
$password =$_POST["password"];
if($password&&$email)
{
$sql=mysqli_query($conn,"select * from users where email='$email' and password='$password'");
if(mysqli_num_rows($sql)==1)//获取$sql里面email，password集中行的数目,使得能够匹配人数只有一个
{
	$array=mysqli_fetch_array($sql);
	echo $array['id'];
}
else
{
     echo "账号或密码错误";	
}
$_SESSION['id']=$array['id'];
}
?>