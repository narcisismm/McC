<?php
require 'conn.php';
$a=array();
$query="SELECT userName FROM users";
$result = @mysqli_query($conn,$query) or die('SQL错误'.mysqli_connect_errno());
while (!!$row = mysqli_fetch_array($result,MYSQLI_NUM)){
    array_push($a,$row[0]);
}

$q=$_GET["q"];
//$hint="";
//如果 q 大于 0，则查找数组中的所有提示

if (strlen($q) > 0) {
    $hint="";
    for($i=0; $i<count($a); $i++)
    {
        if (strtolower($q)==strtolower(substr($a[$i],0,strlen($q))))
        {
            if ($hint=="")
            {
                $hint=$a[$i];
            }
            else
            {
                $hint=$hint." , ".$a[$i];
            }
        }
    }
}
if ($hint == "")
{
    $response="no suggestion";
}
else
{
    $response="<div id='search-result'>$hint<span id='span-1' class=\"nav-icon\" style='display: none'><i class=\"icon-file-text\"></i></span><span id='span-2' class=\"nav-icon\" style='display: none'><i class=\"icon-plus\" id='add'></i></span></div>";
}
echo $response;
echo '<script>alert(666)</script>'

// 如果未找到提示，则把输出设置为 "no suggestion"
// 否则设置为正确的值

//输出响应


?>