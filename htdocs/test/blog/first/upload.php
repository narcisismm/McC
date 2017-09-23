<?php
    $avatar="location.png";
    if (is_uploaded_file($_FILES['location']['tmp_name'])) {
        if (strpos($_FILES['location']['tmp_name'],"jpg")==true){
         move_uploaded_file($_FILES['location']['tmp_name'],'upload/'.$_FILES['location']['name']);
         $avatar=$_FILES['location']['name'];
         echo "<script>alert('文件上传成功！');history.back()</script>";
        }
    }

?>