<link rel="stylesheet" href="css/base.css">
<script type="text/javascript" src="js/jquery.min.js"></script>
<?php  session_start(); ?>
<style type="text/css">

	#comm:hover{
		cursor: pointer;
		
	}
</style>
<script language="javascript">
	$(document).ready(function(){
		$("#a1").click(function(){
			$("#news").remove();
		});
		
	});
</script>

<div class="news"  id="news">
		  	<div class="pastnews-text" style="margin-bottom: 20px;">
		  	    <div class="text-menu"><i class="icon-arrow-down2" style="float:right;color: #CCD6DE;"></i>
		  	    <ul class="menu-list">
					<li class="second-button"><?php echo'<a id="a1"  href="delete.php?contentId=' .$_SESSION["contentId"].'">删除信息</a>'  ?></li>
		  	    <li class="second-button"><?php echo'<a href="update.php?contentId=' .$_SESSION["contentId"].'">修改信息</a>'  ?></li>
		  	    </ul>     
		  	    </div>
		  		<div class="mytest" style="height: 150px;  ">
 <?php
include('conn.php');
     $query="SELECT * FROM contents";
     $result = @mysqli_query($conn,$query) or die('SQL错误'.mysqli_connect_errno());
     $row=mysqli_fetch_array($result,MYSQLI_NUM);
     $contentId=$row[0];
     echo $row[3];
     if (!empty($row[3])){
         $row=mysqli_fetch_array($result,MYSQLI_NUM);
         $contentId=$row[0];
     }
//					if(mysqli_num_rows($result)==1)
//					{
////						$array=mysql_fetch_array($result);
//                        echo $row[3];
//                        $contentId++;
////						$_SESSION["contentId"]++;
//					//echo "asd";
//					}
//					else {echo("无法获取到文本信息");
//                        $contentId++;
////						  $_SESSION["contentId"]++;
//						 }
						  
						
?>
</div>
		  		<div class="news-icon">
		  		<details>
		  		<summary><img id="comm" style="float: left;" src="images/ico_comment@2x.png" onClick="onclick1();"></summary>
		  		<div style="width: 100%; float:left; margin-top: 5px;">
		  		<div style="float: left"><img src="images/no-avatar.png"></div>
		  		<div class="test_box common-text" contenteditable="true" placeholder="评论......"></div>
		  		</div>
		  		</details>
		  		</div>
		  	</div>
		  	<div style="float:right;"><img src="images/no-avatar.png"></div>
		  </div>