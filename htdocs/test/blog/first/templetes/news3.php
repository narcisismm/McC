<link rel="stylesheet" href="css/base.css">
<script type="text/javascript" src="js/jquery.min.js"></script>
<?php  session_start(); ?>
<script>
    function onclick3 (){
//        var source = document.getElementsByClassName("pastnews-text");
        var comment3=document.getElementById("comm3");
        if(comment3.src.indexOf("images/ico_comment_new@2x.png")==-1)
        {
            comment3.src="images/ico_comment_new@2x.png";
            //source.style.height ="500px";
        }
        else
        {
            comment3.src="images/ico_comment@2x.png";
            // source.style.height ="300px";
        }

    }
</script>
<style type="text/css">

    #comm3:hover{
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
                <li class="second-button"><?php echo'<a id="a1"  href="delete.php?contentId=' .$_SESSION["index"][2].'">删除信息</a>'  ?></li>
                <li class="second-button"><?php echo'<a href="update.php?contentId=' .$_SESSION["index"][2].'">修改信息</a>'  ?></li>
            </ul>
        </div>
        <div class="mytest" style="height: 150px;  ">
            <?php
            require('conn.php');
            require ('demo2.php');
            ?>
        </div>
        <div class="news-icon">

                <img id="comm3" style="float: left;" src="images/ico_comment@2x.png" onClick="onclick3();">
                <div style="width: 100%; float:left; margin-top: 5px;">
                    <div style="float: left"><img src="images/no-avatar.png"></div>
                    <div class="test_box common-text" contenteditable="true" placeholder="评论......"></div>
                </div>

        </div>
    </div>
    <div style="float:right;"><img src="images/no-avatar.png"></div>
</div>