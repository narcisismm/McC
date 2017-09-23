<?php
session_start();
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
    echo "$img";

