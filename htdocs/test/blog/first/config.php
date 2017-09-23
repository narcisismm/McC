<?php
//    定义基本常量
    $email = $_POST['email'];
    $password = $_POST['password'];
    $userName = $_POST['name'];
    $gender = null;
    if ($_POST['gender']==0){
        $gender = "男";
    }else{
        $gender = "女";
    }
    $birthday = $_POST['year'].'-'.$_POST['month'].'-'.$_POST['day'];
    $studyArea = $_POST['field'];
    $introduce = $_POST['introduce'];
    define('DB_HOST','localhost');
    define('DB_USER','root');
    define('DB_PWD','mysql158699');
    define('DB_NAME','sds');
    //    第一步：连接数据库
    $conn= @mysqli_connect(DB_HOST,DB_USER,DB_PWD) or die('数据库连接失败！'.mysqli_connect_errno());
    //    第二步：选择而制定的数据库，设置字符集
    mysqli_select_db($conn,DB_NAME) or die('数据库错误：'.mysqli_connect_errno());
    mysqli_set_charset($conn,'UTF8') or die('字符集设置错误：'.mysqli_connect_errno());


?>