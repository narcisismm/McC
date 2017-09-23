<?php  session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>首页</title>
    <link rel="stylesheet" href="css/icomoon.css">
    <script src="js/jquery.min.js"></script>
    <style>
        *{
            margin: 0;
            padding: 0;
        }
        .alert-box{
            width: 400px;
            height: 50px;
            margin: 0 auto;
            text-align: center;
            line-height:50px;
            /*background-color: blue;*/
            position: absolute;
            left: 30%;
            /*margin-left:30%;*/
        }
        .header{
            width: 100%;
            /*background-color: red;*/
            /*margin-top: 10px;*/
            height: 60px;
            position: fixed;
            top: 0;
            /*z-index: 5;*/
            /*float: left;*/
        }
        .header i{
            transform: scale(1.5);
            color: #C3CACF;
            float: right;
            margin-top: 20px;
            margin-right: 30px;
        }
        .header i:hover{
            color: #5B646A;
            cursor:pointer;
        }
        .container{
            width: 1000px;
            height: auto;
            /*float: left;*/
            margin: 60px auto 0;
            /*background-color: palegreen;*/
        }
        .contLeft{
            width: 700px;
            /*height: 1000px;*/
            float: left;
            /*background-color: palegoldenrod;*/
        }
        .contRight{
            width: 200px;
            height: 500px;
            margin-right: 50px;
            float: right;
            /*background-color: lightblue;*/
        }
        .contLeft .title{
            width: 650px;
            height: 40px;
            /*background-color: green;*/
            float: right;
        }
        .contLeft .content{
            width: 650px;
            height: 150px;
            outline: none;
            /*background-color: yellowgreen;*/
            float: right;
            border: 1px solid #bbb;
        }
        .contLeft .content:empty:before{
            content: attr(placeholder);
            color:#bbb;
        }
        .contLeft .content:focus:before{
            content:none;
        }
        .contLeft .send{
            width: 650px;
            height: 50px;
            /*background-color: palevioletred;*/
            float: right;
        }
        .contLeft .send button{
            float: right;
            height: 30px;
            width: 50px;
        }
        .contLeft .send i{
            float: right;
            margin-top: 10px;
            margin-right: 30px;
            transform: scale(1.5);
        }
        .contLeft .send i:hover{
            color:#36D0AE;
            cursor: pointer;
        }
        .contLeft .comment{
            width: 100%;
            height: 230px;
            float: right;
            /*background-color: papayawhip;*/
        }
        .contLeft .comment img{
            float: left;
            margin-top: 10px;
        }
        .contLeft .comment .mainComment{
            width: 650px;
            height: 200px;
            /*background-color: peru;*/
            float: right;
            margin-top: 10px;
            border: 1px solid #bbb;
            position: relative;
        }
        .contLeft .comment .mainComment .function{
            width: 30px;
            height: 100px;
            float: right;
            /*background-color: palegoldenrod;*/
        }
        .contLeft .comment .mainComment .function .comBtn{
            height: 20px;
            width: 30px;
            /*float: right;*/
            /*position: absolute;*/
            /*right: 0;*/
            /*top: 0;*/
            /*background-color: papayawhip;*/
        }
        .contLeft .comment .mainComment .function .comBtn i{
            float: right;
        }
        .contLeft .comment .mainComment .function .comBtn i:hover{
            cursor: pointer;
            color:#36D0AE;
        }
        .contLeft .comment .mainComment .function .comMenu{
            width: 30px;
            height: 80px;
            /*float: right;*/
            /*background-color: palegreen;*/
            display: none;
        }
        .contLeft .comment .mainComment .function .comMenu .update{
            width: 30px;
            height: 40px;
            text-align: center;
            font-size: 15px;
            line-height: 40px;
        }
        .contLeft .comment .mainComment .function .comMenu .update a{
            text-decoration: none;
            cursor: pointer;
        }
        .contLeft .comment .mainComment .function .comMenu .update a:link{
            color: #000;
        }
        .contLeft .comment .mainComment .function .comMenu .update a:visited{
            color: #000;
        }
        .contLeft .comment .mainComment .function .comMenu .update a:hover{
            color:#36D0AE;
        }
        .contLeft .comment .mainComment .function .comMenu .update a:active{
            color: yellowgreen;
        }
        .contLeft .comment .mainComment .function .comMenu .delete{
            width: 30px;
            height: 40px;
            text-align: center;
            font-size: 15px;
            line-height: 40px;
        }
        .contLeft .comment .mainComment .function .comMenu .delete a{
            text-decoration: none;
            cursor: pointer;
        }
        .contLeft .comment .mainComment .function .comMenu .delete a:link{
            color: #000;
        }
        .contLeft .comment .mainComment .function .comMenu .delete a:visited{
            color: #000;
        }
        .contLeft .comment .mainComment .function .comMenu .delete a:hover{
            color:#36D0AE;
        }
        .contLeft .comment .mainComment .function .comMenu .delete a:active{
            color: yellowgreen;
        }
        .contLeft .reComment{
            width: 550px;
            float: right;
        }
        .contLeft .reComment .oUl_0{
            margin-top: 10px;
            /*position: fixed;*/
        }
        .contLeft .reComment .oDiv1_0{
            width: 100px;
            height:100px;
            background-color: palegoldenrod;
            display: inline-block;
            /*float: left;*/
        }
        .contLeft .reComment .oLi_0{
            list-style-type: none;
            display: inline-block;
            /*width: 500px;*/
            /*height: 30px;*/
            /*margin-bottom: 10px;*/
            /*background-color: palegreen;*/
            /*border: 1px solid #000;*/
            /*line-height: 30px;*/
        }
        .contLeft .reComment .oBtn1_0{
            width: 40px;
            height: 30px;
            display: inline-block;
            /*float: left;*/
            /*position: absolute;*/
        }
        .contLeft .reComment .oDiv2_0{
            width: 517px;
            height: 300px;
            margin: 10px auto;
            display: none;
            border: 1px solid #000;
            /*background-color: peru;*/
        }
        .contLeft .reComment .oBtn2_0{
            width: 40px;
            height: 30px;
            margin-left:90%;
            display: none;
        }
        contLeft .reComment .oUl_1{
            margin-top: 10px;
            margin-left: 50px;
            /*background-color: purple;*/
            /*position: fixed;*/
        }
        .contLeft .reComment .oDiv1_1{
            width: 100px;
            height:100px;
            background-color: palegoldenrod;
            display: inline-block;
            margin-top: 10px;
            margin-left:50px;
            /*float: left;*/
        }
        .contLeft .reComment .oLi_1{
            list-style-type: none;
            display: inline-block;
        }
        .contLeft .reComment .oBtn1_1{
            width: 40px;
            height: 30px;
            display: inline-block;
            /*float: left;*/
            /*position: absolute;*/
        }
        .contLeft .reComment .oDiv2_1{
            width: 517px;
            height: 300px;
            margin: 10px auto;
            display: none;
            border: 1px solid #000;
            /*background-color: peru;*/
        }
        .contLeft .reComment .oBtn2_1{
            width: 40px;
            height: 30px;
            margin-left:90%;
            display: none;
        }
        .contLeft .subComment{
            width: 650px;
            height: 100px;
            /*background-color: papayawhip;*/
            float: right;
        }
        .contLeft .subComment .subComment_0{
            width: 100%;
            height: 50px;
            display: none;
            /*background-color:lightblue;*/
        }
        .contLeft .subComment .subComment_0 img{
            width: 30px;
            height: 30px;
            float: left;
        }
        .contLeft .subComment .subComment_0 button{
            margin-top: 4px;
            width: 40px;
            height: 20px;
            float: right;
        }
        .contLeft .subComment .subComment_0 div{
            /*padding: 1px;*/
            padding-top: 1px;
            padding-left:7px;
            outline: none;
            border: 1px solid #CCD6DE;
            font-size: 15px;
            word-wrap: break-word;
            /*!*overflow-x: hidden;*!*/
            /*overflow-y: auto;*/
            /*_overflow-y: visible;*/
            /*background-color: white;*/
            width: 550px;
            /*height: 18px;*/
            /*max-height: 60px;*/
            /*border: 1px solid #cccccc;*/
            border-radius: 15px;
            margin-top: 3px;
            margin-right: 18px;
            float: right;
        }
        .contLeft .subComment .subComment_0 div:empty:before{
            content: attr(placeholder);
            color:#bbb;
        }
        .contLeft .subComment .subComment_0 div:focus:before{
            content:none;
        }
        .contRight .ltitle{
            margin: 20px 20px;
            font-family:"宋体";
        }
        .contRight .list{
            margin-top: 10px;
            margin-left: 20px;
        }
        .contRight .list:hover{
            color:#36D0AE;
            cursor: pointer;
        }
        .function-list{
            width: 200px;
            height: 500px;
            position: fixed;
            top: 60px;
            right: 30px;
            display: none;
            border: 1px solid #ccc;
            /*background-color: lawngreen;*/
        }
        .function-list .search{
            width: 160px;
            height: 25px;
            /*background-color: palevioletred;*/
            outline: none;
            margin-top: 10px;
            margin-left: 20px;
            border: 1px solid #ccc;
        }
        .function-list .search:empty:before{
            content: attr(placeholder);
            color:#bbb;
        }
        .function-list .search:focus:before{
            content: none;
        }
        .function-list .user-list{
            width: 160px;
            height: 300px;
            /*background-color: palegreen;*/
            margin: 10px auto;
        }
        .function-list .user-list span{
            display: none;
        }
        .function-list .user-list i{
            color: #C3CACF;
            margin-left: 10px;
        }
        .function-list .user-list i:hover{
            color: #5B646A;
            cursor:pointer;
        }
        .footer{
            height: 50px;
            width: 100%;
            /*background-color: peru;*/
            float: left;
        }
        .footer p{
            text-align: center;
        }
    </style>
    <script>
        var timer=null;
        function showHint(str){
//                alert(str);

                var xmlhttp;
                if (str.length==0)
                {
                    document.getElementById("user-list").innerHTML="";
                    return;
                }
                if (window.XMLHttpRequest)
                {// code for IE7+, Firefox, Chrome, Opera, Safari
                    xmlhttp=new XMLHttpRequest();
                }
                else
                {// code for IE6, IE5
                    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
                }
                xmlhttp.onreadystatechange=function()
                {
                    if (xmlhttp.readyState==4 && xmlhttp.status==200)
                    {
                        document.getElementById("user-list").innerHTML=xmlhttp.responseText;
                    }
                }
                xmlhttp.open("GET","templetes/user-list.php?q="+str,true);
                xmlhttp.send();


//                var oSearch=document.getElementById('search-result');
//                var oSpan1= document.getElementById('span-1');
//                var oSpan2= document.getElementById('span-2');

//                oSearch.onmouseover=function () {
//                    alert(oSearch);
//                    oSpan1.style.display='block';
//                    oSpan2.style.display='block';
//                }
//                oSearch.onmouseout=function () {
//                    oSpan1.style.display='none';
//                    oSpan2.style.display='none';
//                }
            }
        function showSpan() {
            timer=setTimeout(function () {
                alert('0');
                var oSearch=document.getElementById('search-result');
                var oSpan1= document.getElementById('span-1');
                var oSpan2= document.getElementById('span-2');
                oSearch.onmouseover=function () {
                    oSpan1.style.display='inline-block';
                    oSpan2.style.display='inline-block';
                }
                oSearch.onmouseout=function () {
                    oSpan1.style.display='none';
                    oSpan2.style.display='none';
                }
                $('#add').click(function () {
                    $.post("addFriends.php", {content: $("#search-result").text()}, function () {
                        $("#alert1").css("background-color", "#36D0AE");
                        newalert("请求已发送");
                    });
                })
            },1000);
        }
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
        function onclick2 (){
            var comment1=document.getElementById("comm2");
            var oCom = document.getElementById('comment2');

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
        function onclick3 (){
            var comment1=document.getElementById("comm3");
            var oCom = document.getElementById('comment3');

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
        function onclick4 (){
            window.location.href='personalPage.php'
        }
        function onmouseover1 (){
            var oMen1= document.getElementById('comMenu1');

            clearTimeout(timer);
            oMen1.style.display='block';
        }
        function onmouseout1() {
            var oMen1= document.getElementById('comMenu1');
            timer=setTimeout(function () {
                oMen1.style.display='none';
            },200);
        }
        function onmouseover2() {
            var oMen2= document.getElementById('comMenu2');

            clearTimeout(timer);
            oMen2.style.display='block';
        }
        function onmouseout2() {
            var oMen2= document.getElementById('comMenu2');
            timer=setTimeout(function () {
                oMen2.style.display='none';
            },200);
        }
        function onmouseover3() {
            var oMen3= document.getElementById('comMenu3');

            clearTimeout(timer);
            oMen3.style.display='block';
        }
        function onmouseout3() {
            var oMen3= document.getElementById('comMenu3');
            timer=setTimeout(function () {
                oMen3.style.display='none';
            },200);
        }
        function newalert(str2) {
            var str1 = "<p>", str3 = "</p>";
            $("#alert1").text("");  //如果存在多次出现alert，要先清除上次append产生的文本
            $("#alert1").append(str1.concat(str2, str3));//js的连接字符串函数
            $("#alert1").fadeIn(500);
            $('#alert1').fadeOut(2000);//注意这里是数字的时候不带引号
        }
        function comment() {
            var oSubtn1=document.getElementById('submit_button');
            var reCom1=document.getElementById('reComment1');
            var comText1=document.getElementById('comment_text1');
            oSubtn1.onclick=function () {
                var oUl=document.createElement('ul');
                oUl.setAttribute('class','oUl_0');

                var oDiv=document.createElement('div');

                var oDiv1=document.createElement('div');
                oDiv1.setAttribute('class','oDiv1_0');

                var oLi=document.createElement('li');
                oLi.setAttribute('class','oLi_0');

                var oBtn1=document.createElement('button');
                oBtn1.setAttribute('class','oBtn1_0');
                oBtn1.setAttribute('value','回复');

                var oDiv2=document.createElement('div');
                oDiv2.setAttribute('class','oDiv2_0');
                oDiv2.setAttribute('contenteditable','true');

                var oBtn2=document.createElement('button');
                oBtn2.setAttribute('class','oBtn2_0');
                oBtn1.setAttribute('value','发表');

                reCom1.appendChild(oUl);
                oUl.appendChild(oDiv);
                oDiv.appendChild(oDiv1);
                oDiv.appendChild(oLi);
                oDiv.appendChild(oBtn1);
                oDiv.appendChild(oDiv2);
                oDiv.appendChild(oBtn2);

                oLi.innerHTML=comText1.innerHTML;
                comText1.innerHTML=null;
            }
            var aBtn1=document.getElementsByClassName('oBtn1_0');
            var aDiv1=document.getElementsByClassName('oDiv2_0');
            var aBtn2=document.getElementsByClassName('oBtn2_0');

            var aBtn1_0=document.getElementsByClassName('oBtn1_1');
            var aDiv1_0=document.getElementsByClassName('oDiv2_1');
            var aBtn2_0=document.getElementsByClassName('oBtn2_1');

            for(var i=0;i<aBtn1.length;i++){
                aBtn1[i].index=i;

                aBtn1[i].onclick=function () {

                    if(aDiv1[this.index].style.display!='none'){
                        aDiv1[this.index].style.display='none';
                        aBtn2[this.index].style.display='none';
                    }else {
                        aDiv1[this.index].style.display='block';
                        aBtn2[this.index].style.display='block';
                    }
                }
            }
            for(var i=0;i<aBtn1_0.length;i++){
                aBtn1_0[i].index=i;

                aBtn1_0[i].onclick=function () {

                    if(aDiv1_0[this.index].style.display!='none'){
                        aDiv1_0[this.index].style.display='none';
                        aBtn2_0[this.index].style.display='none';
                    }else {
                        aDiv1_0[this.index].style.display='block';
                        aBtn2_0[this.index].style.display='block';
                    }
                }
            }
            for(var i=0;i<aBtn2.length;i++){
                aBtn2[i].index=i;
                aBtn2[i].onclick=function () {
                    this.style.display='none';
                    aDiv1[this.index].style.display='none';

                    var oDiv=document.createElement('div');

                    var oDiv1=document.createElement('div');
                    oDiv1.setAttribute('class','oDiv1_1');

                    var oLi=document.createElement('li');
                    oLi.setAttribute('class','oLi_1');

                    var oBtn1=document.createElement('button');
                    oBtn1.setAttribute('class','oBtn1_1');
                    oBtn1.setAttribute('value','回复');

                    var oDiv2=document.createElement('div');
                    oDiv2.setAttribute('class','oDiv2_1');
                    oDiv2.setAttribute('contenteditable','true');

                    var oBtn2=document.createElement('button');
                    oBtn2.setAttribute('class','oBtn2_1');
                    oBtn1.setAttribute('value','发表');

                    var parentDiv=this.parentNode;
                    var parentUl=parentDiv.parentNode;

                    parentUl.appendChild(oDiv);
                    oDiv.appendChild(oDiv1);
                    oDiv.appendChild(oLi);
                    oDiv.appendChild(oBtn1);
                    oDiv.appendChild(oDiv2);
                    oDiv.appendChild(oBtn2);

                    var commentId=this.getAttribute('id');
                    if ($(aDiv1[this.index]).html() != '') {
                        var sds = document.getElementById('reComment1');
                        var option = {
                            target: '#reComment1',
                            url: 'test2.php',
                            type: 'post',
                            data: {content: $(aDiv1[this.index]).text(),commentId:commentId},
                            success: function (data) {
                                $("#alert1").css("background-color", "#36D0AE");
                                newalert("发布成功");
                                $(aDiv1[this.index]).html("");
                                sds.innerHTML = data;
                                comment();
                            }
                        }
                        $.ajax(option);
                        return true;
                    }
                }
            }
            for(var i=0;i<aBtn2_0.length;i++){
                aBtn2_0[i].index=i;
                aBtn2_0[i].onclick=function () {
                    this.style.display='none';
                    aDiv1_0[this.index].style.display='none';

                    var oDiv=document.createElement('div');

                    var oDiv1=document.createElement('div');
                    oDiv1.setAttribute('class','oDiv1_1');

                    var oLi=document.createElement('li');
                    oLi.setAttribute('class','oLi_1');

                    var oBtn1=document.createElement('button');
                    oBtn1.setAttribute('class','oBtn1_1');
                    oBtn1.setAttribute('value','回复');

                    var oDiv2=document.createElement('div');
                    oDiv2.setAttribute('class','oDiv2_1');
                    oDiv2.setAttribute('contenteditable','true');

                    var oBtn2=document.createElement('button');
                    oBtn2.setAttribute('class','oBtn2_1');
                    oBtn1.setAttribute('value','发表');

                    var parentDiv=this.parentNode;
                    var parentUl=parentDiv.parentNode;

                    parentUl.appendChild(oDiv);
                    oDiv.appendChild(oDiv1);
                    oDiv.appendChild(oLi);
                    oDiv.appendChild(oBtn1);
                    oDiv.appendChild(oDiv2);
                    oDiv.appendChild(oBtn2);

                    var commentId=this.getAttribute('id');
                    if ($(aDiv1_0[this.index]).html() != '') {
                        var sds = document.getElementById('reComment1');
                        var option = {
                            target: '#reComment1',
                            url: 'test2.php',
                            type: 'post',
                            data: {content: $(aDiv1_0[this.index]).text(),commentId:commentId},
                            success: function (data) {
                                $("#alert1").css("background-color", "#36D0AE");
                                newalert("发布成功");
                                $(aDiv1_0[this.index]).html("");
                                sds.innerHTML = data;
                                comment();
                            }
                        };
                        $.ajax(option);
                        return true;
                    }
                }
            }
        }
        $(document).ready(function() {
            $("#send").click(function () {
                if ($("#new-text").html() != '') {
                    $.post("send.php", {content: $("#new-text").text()}, function () {
                        $("#alert1").css("background-color", "#36D0AE");
                        newalert("发布成功");
                        $("#new-text").html("");
                    });
                }
                else {
                    $("#alert1").css("background-color", "red");
                    newalert("发布失败");
                    $("#new-text").html("");
                }
            })
        })
        $(document).ready(function() {
            $("#submit_button").click(function () {
                if ($("#comment_text1").html() != '') {
                    var sds=document.getElementById('reComment1');
                    var option={
                        target:'#reComment1',
                        url:'test1.php',
                        type:'post',
                        timeout: 10000,
//                        data-type:'html';
                        data:{content: $("#comment_text1").text()},
                        success: function (data) {
                            $("#alert1").css("background-color", "#36D0AE");
                            newalert("发布成功");
                            $("#comment_text1").html("");
                            sds.innerHTML=data;
                            comment();
//                            $('#reComment1').append(data);
//                            alert(data);
                        }
                    };
                    $.ajax(option);
                    return true;
                }
            })
        })
        window.onload=function () {
            var oAdd=document.getElementById('add-friends');
            var oFunction1=document.getElementById('function-add');
            oAdd.onclick=function () {
                if(oFunction1.style.display=='block'){
                    oFunction1.style.display='none';
                }else {
                    oFunction1.style.display='block';
                }
            };



            var oSubtn1=document.getElementById('submit_button');
            var reCom1=document.getElementById('reComment1');
            var comText1=document.getElementById('comment_text1');
            oSubtn1.onclick=function () {
                var oUl=document.createElement('ul');
                oUl.setAttribute('class','oUl_0');

                var oDiv=document.createElement('div');

                var oDiv1=document.createElement('div');
                oDiv1.setAttribute('class','oDiv1_0');

                var oLi=document.createElement('li');
                oLi.setAttribute('class','oLi_0');

                var oBtn1=document.createElement('button');
                oBtn1.setAttribute('class','oBtn1_0');
                oBtn1.setAttribute('value','回复');

                var oDiv2=document.createElement('div');
                oDiv2.setAttribute('class','oDiv2_0');
                oDiv2.setAttribute('contenteditable','true');

                var oBtn2=document.createElement('button');
                oBtn2.setAttribute('class','oBtn2_0');
                oBtn1.setAttribute('value','发表');

                reCom1.appendChild(oUl);
                oUl.appendChild(oDiv);
                oDiv.appendChild(oDiv1);
                oDiv.appendChild(oLi);
                oDiv.appendChild(oBtn1);
                oDiv.appendChild(oDiv2);
                oDiv.appendChild(oBtn2);

                oLi.innerHTML=comText1.innerHTML;
                comText1.innerHTML=null;
            };
            var aBtn1=document.getElementsByClassName('oBtn1_0');
            var aDiv1=document.getElementsByClassName('oDiv2_0');
            var aBtn2=document.getElementsByClassName('oBtn2_0');

            var aBtn1_0=document.getElementsByClassName('oBtn1_1');
            var aDiv1_0=document.getElementsByClassName('oDiv2_1');
            var aBtn2_0=document.getElementsByClassName('oBtn2_1');

            for(var i=0;i<aBtn1.length;i++){
                aBtn1[i].index=i;

                aBtn1[i].onclick=function () {

                    if(aDiv1[this.index].style.display!=='none'){
                        aDiv1[this.index].style.display='none';
                        aBtn2[this.index].style.display='none';
                    }else {
                        aDiv1[this.index].style.display='block';
                        aBtn2[this.index].style.display='block';
                    }
                }
            }
            for(var i=0;i<aBtn1_0.length;i++){
                aBtn1_0[i].index=i;

                aBtn1_0[i].onclick=function () {

                    if(aDiv1_0[this.index].style.display!='none'){
                        aDiv1_0[this.index].style.display='none';
                        aBtn2_0[this.index].style.display='none';
                    }else {
                        aDiv1_0[this.index].style.display='block';
                        aBtn2_0[this.index].style.display='block';
                    }
                }
            }
            for(var i=0;i<aBtn2.length;i++){
                aBtn2[i].index=i;
                aBtn2[i].onclick=function () {
                    this.style.display='none';
                    aDiv1[this.index].style.display='none';

                    var oDiv=document.createElement('div');

                    var oDiv1=document.createElement('div');
                    oDiv1.setAttribute('class','oDiv1_1');

                    var oLi=document.createElement('li');
                    oLi.setAttribute('class','oLi_1');

                    var oBtn1=document.createElement('button');
                    oBtn1.setAttribute('class','oBtn1_1');
                    oBtn1.setAttribute('value','回复');

                    var oDiv2=document.createElement('div');
                    oDiv2.setAttribute('class','oDiv2_1');
                    oDiv2.setAttribute('contenteditable','true');

                    var oBtn2=document.createElement('button');
                    oBtn2.setAttribute('class','oBtn2_1');
                    oBtn1.setAttribute('value','发表');

                    var parentDiv=this.parentNode;
                    var parentUl=parentDiv.parentNode;

                    parentUl.appendChild(oDiv);
                    oDiv.appendChild(oDiv1);
                    oDiv.appendChild(oLi);
                    oDiv.appendChild(oBtn1);
                    oDiv.appendChild(oDiv2);
                    oDiv.appendChild(oBtn2);

                    var commentId=this.getAttribute('id');
                    if ($(aDiv1[this.index]).html() != '') {
                        var sds = document.getElementById('reComment1');
                        var option = {
                            target: '#reComment1',
                            url: 'test2.php',
                            type: 'post',
                            data: {content: $(aDiv1[this.index]).text(),commentId:commentId},
                            success: function (data) {
                                $("#alert1").css("background-color", "#36D0AE");
                                newalert("发布成功");
                                $(aDiv1[this.index]).html("");
                                sds.innerHTML = data;
                                comment();
                            }
                        };
                        $.ajax(option);

                        return true;
                    }
                }
            }
            for(var i=0;i<aBtn2_0.length;i++){
                aBtn2_0[i].index=i;
                aBtn2_0[i].onclick=function () {
                    this.style.display='none';
                    aDiv1_0[this.index].style.display='none';

                    var oDiv=document.createElement('div');

                    var oDiv1=document.createElement('div');
                    oDiv1.setAttribute('class','oDiv1_1');

                    var oLi=document.createElement('li');
                    oLi.setAttribute('class','oLi_1');

                    var oBtn1=document.createElement('button');
                    oBtn1.setAttribute('class','oBtn1_1');
                    oBtn1.setAttribute('value','回复');

                    var oDiv2=document.createElement('div');
                    oDiv2.setAttribute('class','oDiv2_1');
                    oDiv2.setAttribute('contenteditable','true');

                    var oBtn2=document.createElement('button');
                    oBtn2.setAttribute('class','oBtn2_1');
                    oBtn1.setAttribute('value','发表');

                    var parentDiv=this.parentNode;
                    var parentUl=parentDiv.parentNode;

                    parentUl.appendChild(oDiv);
                    oDiv.appendChild(oDiv1);
                    oDiv.appendChild(oLi);
                    oDiv.appendChild(oBtn1);
                    oDiv.appendChild(oDiv2);
                    oDiv.appendChild(oBtn2);

                    var commentId=this.getAttribute('id');
                    if ($(aDiv1_0[this.index]).html() != '') {
                        var sds = document.getElementById('reComment1');
                        var option = {
                            target: '#reComment1',
                            url: 'test2.php',
                            type: 'post',
                            data: {content: $(aDiv1_0[this.index]).text(),commentId:commentId},
                            success: function (data) {
                                $("#alert1").css("background-color", "#36D0AE");
                                newalert("发布成功");
                                $(aDiv1_0[this.index]).html("");
                                sds.innerHTML = data;
                                comment();
                            }
                        };
                        $.ajax(option);
                        return true;
                    }
                }
            }
        };
    </script>
</head>
<body>
<div class="alert-box" id="alert1"></div>
<div class="header">
    <span class="nav-icon" id="personalPage"><i class="icon-user" onclick="onclick4()"></i></span>
    <span class="nav-icon"><i class="icon-bell"></i></span>
    <span class="nav-icon"><i class="icon-envelope"></i></span>
    <span class="nav-icon"><i class="icon-pencil"></i></span>
    <span class="nav-icon"><i class="icon-user-plus" id="add-friends"></i></span>
</div>
<div class="container">
    <div class="contLeft">
        <div class="title">
            <h2>新动态</h2>
        </div>
        <div id="new-text" class="content" contenteditable="true" placeholder="分享、讨论一下今天的学习内容、课题进展......"></div>
        <div class="send">
            <button id="send" type="submit" value="Submit">发布</button>
            <span class="hover-green" id="camera" ><i class="icon-camera-retro"></i></span>
        </div>
        <div class="comment">
            <img src="images/no-avatar.png">
            <div class="mainComment">
                <?php
                require('conn.php');
                require ('templetes/demo1.php')
                ?>
                <div class="function">
                    <div class="comBtn"><i id="comBtn1" class="icon-arrow-down2" onmouseover="onmouseover1()" onmouseout="onmouseout1()"></i></div>
                    <div class="comMenu" id="comMenu1" onmouseover="onmouseover1()" onmouseout="onmouseout1()">
                        <div class="update"><?php echo'<a href="update.php?contentId=' .$_SESSION["index"][0].'">编辑</a>'  ?></div>
                        <div class="delete"><?php echo'<a id="a1"  href="delete.php?contentId=' .$_SESSION["index"][0].'">删除</a>'  ?></div>
                    </div>
                </div>
            </div>
        </div>
        <div id="reComment1" class="reComment" >
            <?php
                require_once('templetes/comment.php') ;
            ?>
        </div>
        <div class="subComment">
            <img id="comm1" class="img1" src="images/ico_comment@2x.png" onclick="onclick1()">
            <div id="comment1" class="subComment_0">
                <img src="images/no-avatar.png">
                <button id="submit_button">发布</button>
                <div id="comment_text1" contenteditable="true" placeholder="评论..."></div>
            </div>
        </div>
        <div class="comment">
            <img src="images/no-avatar.png">
            <div class="mainComment">
                <?php
                require('conn.php');
                require ('templetes/demo2.php')
                ?>
                <div class="function">
                    <div class="comBtn"><i id="comBtn2" class="icon-arrow-down2" onmouseover="onmouseover2()" onmouseout="onmouseout2()"></i></div>
                    <div class="comMenu" id="comMenu2" onmouseover="onmouseover2()" onmouseout="onmouseout2()">
                        <div class="update"><?php echo'<a href="update.php?contentId=' .$_SESSION["index"][1].'">编辑</a>'  ?></div>
                        <div class="delete"> <?php echo'<a id="a1"  href="delete.php?contentId=' .$_SESSION["index"][1].'">删除</a>'  ?></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="reComment">
            <ul id="reComment2"></ul>
        </div>
        <div class="subComment">
            <img id="comm2" class="img1" src="images/ico_comment@2x.png" onclick="onclick2()">
            <div id="comment2" class="subComment_0">
                <img src="images/no-avatar.png">
                <button id="comment2">发布</button>
                <div contenteditable="true" placeholder="评论..."></div>
            </div>
        </div>
        <div class="comment">
            <img id="1" src="images/no-avatar.png">
            <div class="mainComment">
                <?php
                require('conn.php');
                require ('templetes/demo2.php')
                ?>
                <div class="function">
                    <div class="comBtn"><i id="comBtn3" class="icon-arrow-down2" onmouseover="onmouseover3()" onmouseout="onmouseout3()"></i></div>
                    <div class="comMenu" id="comMenu3" onmouseover="onmouseover3()" onmouseout="onmouseout3()">
                        <div class="update"><?php echo'<a href="update.php?contentId=' .$_SESSION["index"][2].'">编辑</a>'  ?></div>
                        <div class="delete"><?php echo'<a id="a1"  href="delete.php?contentId=' .$_SESSION["index"][2].'">删除</a>'  ?></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="reComment">
            <ul id="reComment3"></ul>
        </div>
        <div class="subComment">
            <img id="comm3" class="img1" src="images/ico_comment@2x.png" onclick="onclick3()">
            <div id="comment3" class="subComment_0">
                <img src="images/no-avatar.png">
                <button id="comment3">发布</button>
                <div contenteditable="true" placeholder="评论..."></div>
            </div>
        </div>
    </div>
    <div class="contRight">
        <h2 class="ltitle">欢迎！</h2>
        <div class="list"><i class="icon-arrow-circle-right"></i>动态</div>
        <div class="list"><i class="icon-arrow-circle-right"></i>小组</div>
        <div class="list"><i class="icon-arrow-circle-right"></i>分享</div>
        <div class="list"><i class="icon-arrow-circle-right"></i>问答</div>
        <div class="list"><i class="icon-arrow-circle-right"></i>朋友列表</div>
    </div>
</div>
<div id="function-add" class="function-list">
        <input type="text" id="search-users" class="search" contenteditable="true" placeholder="搜索" onkeyup="showHint(this.value)" oninput="showSpan()">
    <div id="user-list" class="user-list" ></div>
</div>
<div class="footer">
    <p>&copyCopyright 软件开发实验室</p>
</div>
</body>
</html>