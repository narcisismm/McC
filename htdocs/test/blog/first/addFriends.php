<?php
session_start();
require 'conn.php';
$content=$_POST['content'];
$id=$_SESSION['id'];
$time=date("y-m-d H:i:s");
$query="select * from users  where id='$id'";
$result=@mysqli_query($conn,$query);
$row = mysqli_fetch_array($result,MYSQLI_NUM);
if($content==$row[1]){
    echo "<scipt>alert('不能添加自己为好友')</scipt>";
}else{
    $sql=mysqli_query($conn,"insert into friends(ToUser,FromUser,IsAgree,AddDate)values('$content','$row[1]',0,'$time')");
}



?>