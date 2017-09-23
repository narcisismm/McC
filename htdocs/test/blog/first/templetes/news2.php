<link rel="stylesheet" href="css/base.css">
<script type="text/javascript" src="js/jquery.min.js"></script>
<?php  session_start(); ?>
<script>
    function onclick2 (){
//        var source = document.getElementsByClassName("pastnews-text");
        var comment2=document.getElementById("comm2");
        if(comment2.src.indexOf("images/ico_comment_new@2x.png")==-1)
        {
            comment2.src="images/ico_comment_new@2x.png";
            //source.style.height ="500px";
        }
        else
        {
            comment2.src="images/ico_comment@2x.png";
            // source.style.height ="300px";
        }


    }
</script>
<style type="text/css">

    #comm2:hover{
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
                <li class="second-button"><?php echo'<a id="a1"  href="delete.php?contentId=' .$_SESSION["index"][1].'">删除信息</a>'  ?></li>
                <li class="second-button"><?php echo'<a href="update.php?contentId=' .$_SESSION["index"][1].'">修改信息</a>'  ?></li>
            </ul>
        </div>
        <div class="mytest" style="height: 150px;  ">
            <?php
            require('conn.php');
            require ('demo2.php');

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

                <img id="comm2" style="float: left;" src="images/ico_comment@2x.png" onClick="onclick2();">
                <div style="width: 100%; float:left; margin-top: 5px;">
                    <div style="float: left"><img src="images/no-avatar.png"></div>
                    <div class="test_box common-text" contenteditable="true" placeholder="评论......"></div>
                </div>

        </div>
    </div>
    <div style="float:right;"><img src="images/no-avatar.png"></div>
</div>