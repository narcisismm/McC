<?php
require 'conn.php';
//$sql="SELECT id,comment,commentId FROM comments_1 ORDER BY commentId";
//$result=mysqli_query($conn,$sql);
//$commentArray=array();
//while (!!$row=mysqli_fetch_array($result,MYSQLI_NUM)){
//    array_push($commentArray,$row);
//}
//print_r($commentArray);
//function findId(&$a,$id){
//    foreach($a as $k=>$t){
//        if(in_array($id,$t))
//            return $k;
//    }
//    return FALSE;
//}
function showComment($row){
    define('DB_HOST', 'localhost');
    define('DB_USER', 'root');
    define('DB_PWD', 'mysql158699');
    define('DB_NAME', 'sds');
//    第一步：连接数据库
    $conn = mysqli_connect(DB_HOST, DB_USER, DB_PWD) or die('数据库连接失败！');
//    第二步：选择而制定的数据库，设置字符集
    mysqli_select_db($conn, DB_NAME) or die('数据库错误：');
    mysqli_set_charset($conn, 'UTF8') or die('字符集设置错误：');

    $query = "SELECT * FROM comments_1 where commentId='$row[0]'";
    $result = mysqli_query($conn, $query);

//    $row = mysqli_fetch_array($result,MYSQLI_NUM);
//    print_r($row);

    if($result){
//        echo '0';
        while ($row = mysqli_fetch_array($result,MYSQLI_NUM)){
//            echo '1';
            echo "<ul class='oUl_1'><div><div class='oDiv1_1'></div>
<li class='oLi_1'>$row[1]</li>
<button class='oBtn1_1' id='$row[0]_asd'>回复</button>
<div contenteditable=\"true\" class='oDiv2_1' style='display: none'></div>
<button class='oBtn2_1' id='$row[0]' style='display: none'>发表</button></div></ul>";
            showComment($row);
        }
    }
    else
}
//$a=array(157);
//showComment($a)
require 'conn.php';
$query="SELECT * FROM comments";
$result = @mysqli_query($conn,$query) or die('SQL错误'.mysqli_connect_errno());
while (!!$row = mysqli_fetch_array($result,MYSQLI_NUM)) {
    echo "<ul class='oUl_0'><div><div class='oDiv1_0'></div>
<li class='oLi_0'>$row[1]</li>
<button class='oBtn1_0' id='$row[0]_asd'>回复</button>
<div contenteditable=\"true\" class='oDiv2_0' style='display: none'></div>
<button class='oBtn2_0' id='$row[0]' style='display: none'>发表</button></div></ul>";
    showComment($row);
}
?>