<?php
require 'conn.php';
session_start();
$contentId=$_SESSION['contentId'];
//    echo $contentId;
//    echo '<br>';
$query="SELECT * FROM contents WHERE contentId='$contentId'";

$result = mysqli_query($conn,$query) or die('SQL错误');

$row=mysqli_fetch_array($result,MYSQLI_NUM);
//    print_r($row);

echo $row[3];
if (!empty($row[3])){
    $query="SELECT min('$contentId' ) FROM contents where contentId>'$contentId'";
    $result = @mysqli_query($conn,$query) or die('SQL错误'.mysqli_connect_errno());
    $row=mysqli_fetch_array($result,MYSQLI_NUM);
//        print_r($row);
    $contentId=$row[0];
    $_SESSION['contentId']=$contentId;
//        echo $_SESSION['contentId'];
}else{
    exit;
}


?>