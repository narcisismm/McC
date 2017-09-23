<?php
session_start();
header("Content-type:text/html;charset=utf-8");
include('conn.php');
$id=$_SESSION["id"];
$sql=mysql_query("select * from contents where id='$id' ORDER BY contentId ");
$array=mysql_fetch_array($sql);
while($array)
{
	echo $array['content'];
	echo "<br/>";
}