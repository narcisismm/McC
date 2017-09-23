<link rel="stylesheet" href="css/base.css">
<script type="text/javascript" src="js/jquery.min.js"></script>
<?php  session_start(); ?>
<script>
    function onclick1 (){
        var comment1=document.getElementById("comm1");
        var oCom = document.getElementById('comment1');

        if(comment1.src.indexOf("images/ico_comment_new@2x.png")==-1)
        {
            comment1.src="images/ico_comment_new@2x.png";
            oCom.style.display='block';
        }
        else
        {
            comment1.src="images/ico_comment@2x.png";
            oCom.style.display='none';
        }
    }
</script>
<style type="text/css">
    /**{*/
        /*margin: 0;*/
        /*padding: 0;*/
    /*}*/

    #comm1:hover{
        cursor: pointer;

    }
    #test{
        width: 300px;
        height: 300px;
        position: relative;
        top: 100px;
    }
</style>
<script language="javascript">
    $(document).ready(function(){
        $("#a1").click(function(){
            $("#news").remove();
        });

    });
</script>

    <div class="pastnews-text" style="margin-bottom: 20px;">
        <div class="text-menu"><i class="icon-arrow-down2" style="float:right;color: #CCD6DE;"></i>
            <ul class="menu-list">
                <li class="second-button"><?php echo'<a id="a1"  href="delete.php?contentId=' .$_SESSION["index"][0].'">删除信息</a>'  ?></li>
                <li class="second-button"><?php echo'<a href="update.php?contentId=' .$_SESSION["index"][0].'">修改信息</a>'  ?></li>
            </ul>
        </div>
        <div class="mytest" style="height: 150px;  ">
            <?php
           require('conn.php');
           require ('demo1.php')
            ?>
        </div>
        <div class="news-icon">
            <img id="comm1" style="float: left;" src="images/ico_comment@2x.png" onclick="onclick1()">
            <div id="comment1" style="width: 100%; float:left; margin-top: 5px;display: none">
                    <div style="float: left"><img src="images/no-avatar.png"></div>
                    <div class="test_box common-text" contenteditable="true" placeholder="评论......"></div>
            </div>
            <div></div>

        </div>
    </div>

    <div style="float:right;"><img src="images/no-avatar.png"></div>
<!--    <div id="test" style="width: 800px;height: 100px;background-color: red;float: right;position: absolute;top: 0;">-->
<!--        <h1>ihohkjnjk</h1>-->
<!--    </div>-->
<!--    <div class="news-icon">-->
<!--        <img id="comm1" style="float: left;" src="images/ico_comment@2x.png" onclick="onclick1()">-->
<!--        <div id="comment1" style="width: 100%; float:left; margin-top: 5px;display: none">-->
<!--            <div style="float: left"><img src="images/no-avatar.png"></div>-->
<!--            <div class="test_box common-text" contenteditable="true" placeholder="评论......"></div>-->
<!--        </div>-->
<!--        <div></div>-->
<!---->
<!--    </div>-->
