<?php
    require 'conn.php';
    session_start();
    $ind=$_SESSION['index'];
    $contentId=$_SESSION['contentId'];
    $query="SELECT * FROM contents WHERE contentId='$contentId'";

    $result = mysqli_query($conn,$query) or die('SQL错误');

    $row=mysqli_fetch_array($result,MYSQLI_NUM);
//    print_r($row);

    echo $row[3];
    if (!empty($row[3])){
        $query="SELECT min( contentId ) FROM contents where contentId>'$contentId'";
        $result = @mysqli_query($conn,$query) or die('SQL错误'.mysqli_connect_errno());
        $row=mysqli_fetch_array($result,MYSQLI_NUM);
//        print_r($row);
        $contentId=$row[0];
        $_SESSION['contentId']=$contentId;
        array_push($ind,$_SESSION['contentId']);
        $_SESSION['index']=$ind;


//        print_r($_SESSION['index'][0]);
    }else{
        exit;
    }


?>