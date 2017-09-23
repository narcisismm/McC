<?php
session_start();
header("Content-type:text/html;charset:utf-8");
include("conn.php");
//$change_avatar=$_POST["change_avatar"];
$id=$_SESSION['id'];
$avatar = null;
if (is_uploaded_file($_FILES['change_avatar']['tmp_name'])) {
    if ( move_uploaded_file($_FILES['change_avatar']['tmp_name'],'upload/'.$_FILES['change_avatar']['name'])) {
        echo "<script>alert('文件上传成功！');
        window.location.href='personalPage.php';</script>";
        $avatar='upload/'.$_FILES['change_avatar']['name'];

    }else{
        echo "<script>alert('文件上传失败！');history.back()</script>";
    };
}
$query = "update users set avatar='$avatar' where id='$id'";
$result = @mysqli_query($conn,$query) or die('新增数据错误'.mysqli_connect_errno());
mysqli_close($conn);
?>