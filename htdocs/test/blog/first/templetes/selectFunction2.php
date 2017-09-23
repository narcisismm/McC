<?php
function select($conn,$row){
    if(!$_SESSION){
        $query="SELECT * FROM comments_1 where commentId='$row[0]'";
        $result = @mysqli_query($conn,$query) or die('SQL错误'.mysqli_connect_errno());
        while (!!$row = mysqli_fetch_array($result,MYSQLI_NUM)) {
            echo "<ul class='oUl_1'><div><div class='oDiv1_1'></div>
    <li class='oLi_1'>$row[1]</li>
    <button class='oBtn1_1' id='$row[0]_asd'>回复</button>
    <div contenteditable=\"true\" class='oDiv2_1' style='display: none'></div>
    <button class='oBtn2_1' id='$row[0]' style='display: none'>发表</button></div></ul>";
            $_SESSION=true;
        }
    }else{
        $_SESSION=false;
    }
}
?>