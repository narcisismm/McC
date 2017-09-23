<?php
    require 'config.php';
    $avatar = null;
    if (is_uploaded_file($_FILES['location']['tmp_name'])) {
       if ( move_uploaded_file($_FILES['location']['tmp_name'],'upload/'.$_FILES['location']['name'])) {
           echo "<script>alert('文件上传成功！');history.back()</script>";
           $avatar='upload/'.$_FILES['location']['name'];

       }else{
           echo "<script>alert('文件上传失败！');history.back()</script>";
       };
    }
    $query = "INSERT INTO users(email,password,userName,gender,birthday,studyArea,avatar,introduce) VALUES ('$email','$password','$userName','$gender','$birthday','$studyArea','$avatar','$introduce')";
    $result = @mysqli_query($conn,$query) or die('新增数据错误'.mysqli_connect_errno());
    mysqli_close($conn);
?>