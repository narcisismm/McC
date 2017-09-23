<?php
include_once("conn.php");
$result = mysql_query("SELECT * FROM contents");
$row = mysql_fetch_array($result);
echo $row['content'];
?>