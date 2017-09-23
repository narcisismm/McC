<?php
    session_start();
    require 'conn.php';
    $query="SELECT * FROM contents";
    $result = @mysqli_query($conn,$query) or die('SQL错误'.mysqli_connect_errno());
    $row=mysqli_fetch_array($result,MYSQLI_NUM);
    $contentId=$row[0];
    $ind=array($contentId);
//    print_r($row);
    echo $row[3];
    if (!empty($row[3])){
        $row=mysqli_fetch_array($result,MYSQLI_NUM);
        $contentId=$row[0];
        $_SESSION['contentId']=$contentId;
        array_push($ind,$_SESSION['contentId']);
        $_SESSION['index']=$ind;
//        print_r($_SESSION['index']);
    }else{
        exit;
    }

?>