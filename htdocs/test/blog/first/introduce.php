<?php
session_start();
include_once("conn.php");
$id=$_SESSION['id'];
$sql=mysqli_query($conn,"select * from users  where id='$id' ");
if(mysqli_num_rows($sql)==1)
					{
						$array=mysqli_fetch_array($sql);
                        echo $array['userName'].'</br>';
						if($array['gender']==0)
						{
							echo  "男".'</br>';
						}
						else{
							echo "女".'</br>';
						}
						echo $array['birthday'].'</br>';
						echo $array['studyArea'].'</br>';
						echo $array['introduce'].'</br>';
					}
else{
	echo("无法获取到文本信息");
	echo $id.'asd';
}
					