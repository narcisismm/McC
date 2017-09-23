<?php
session_start();
include('conn.php');
//echo $_SESSION['contentId'];
//_session[contentid]=3
$contentId=$_GET['contentId'];
// $contentId=$_SESSION['contentId'];;
$del="delete from contents where contentId='$contentId'";
$sql=mysqli_query($conn,$del);
//if($sql){
//	echo 'yes';
//}
//else{
//	echo 'defeat';
//}
//echo 'asd';
$url="NewMain.php";
header("location:$url");
?>