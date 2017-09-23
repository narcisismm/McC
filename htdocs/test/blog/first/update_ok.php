<?php
session_start();
include('conn.php');
$content=$_POST['pastnews_text'];
$contentId=$_POST['contentId'];
$sql=mysqli_query($conn,"update contents set content='$content' where contentId='$contentId'");
if($sql){
	echo "<script> alert('编辑成功!');</script>";
	$url="NewMain.php";
    header("location:$url");
}
else{
	echo "<script> alert('编辑失败');history.back();window.location.href='main.php?contentId=$contentId';</script>";
}
?>