<?php
date_default_timezone_set("PRC");
session_start();
include_once("conn.php");
$id=$_SESSION['id'];
$date=date("Y-m-d");
$content=$_POST['content'];

if($content!=null){
    $sql=mysqli_query($conn,"insert into contents(id,date,content)values('$id','$date','$content')");
}else{
}


?>