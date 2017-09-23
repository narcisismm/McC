<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>写文章</title>
    <link rel="stylesheet" href="css/icomoon.css">
    <style>
        *{
            margin: 0;
            padding: 0;
        }
        .header{
            width: 100%;
            height: 50px;
            background-color: white;
            border-bottom: 1px solid #000;
            position: fixed;
            z-index: 1;
            top: 0;
        }
        .container{
            width: 700px;
            height: 1000px;
            margin: 60px auto 0;
            /*background-color: palegreen;*/
        }
        .container .title{
            width:700px;
            height: 50px;
            /*background-color: palegoldenrod;*/
            border: 1px solid #ccc;
            outline: none;
            /*border-bottom: 1px solid #ccc;*/
            margin-top: 10px;
            font-size:30px;
            line-height:50px;
            /*position: absolute;*/
            /*placeholder="请输入标题";*/
        }
        .container .title:empty:before{
            content: attr(placeholder);
            color:#bbb;
        }
        .container .title:focus:before{
            content: none;
        }
        .container .function{
            width: 700px;
            height: 30px;
            background-color: palevioletred;
            margin-bottom: 5px;
            line-height:30px;
            /*position: fixed;*/
            /*top: 51px;*/
        }
        .container .function i{
            color: #C3CACF;
        }
        .container .function i:hover{
            color: #5B646A;
            cursor:pointer;
        }
        .container .alertBox{
            width: 300px;
            height: 200px;

            float: left;
            position: relative;
            display: none;
        }
        .container .alertBox .link_href{
            width: 299px;
            height: 170px;
            border: 1px solid #000;
            background-color: red;
        }
        .container .alertBox button{
            position: absolute;
            right: 0;
            bottom: 0;
        }
        .container .content{
            width: 700px;
            height: 500px;
            outline: none;
            border: 1px solid #ccc;
            /*background-color: lawngreen;*/
        }
        .container .content:empty:before{
            content: attr(placeholder);
            color:#bbb;
        }
        .container .content:focus:before{
            content: none;
        }
    </style>
    <script>
        function insertHtmlAtCaret(html) {
            var sel, range;
            if (window.getSelection) {
// IE9 and non-IE
                sel = window.getSelection();
                if (sel.getRangeAt && sel.rangeCount) {
                    range = sel.getRangeAt(0);
                    range.deleteContents();
// Range.createContextualFragment() would be useful here but is
// non-standard and not supported in all browsers (IE9, for one)
                    var el = document.createElement("div");
                    el.innerHTML = html;
                    var frag = document.createDocumentFragment(), node, lastNode;
                    while (node = el.firstChild) {
                        lastNode = frag.appendChild(node);
                    }
                    range.insertNode(frag);
// Preserve the selection
                    if (lastNode) {
                        range = range.cloneRange();
                        range.setStartAfter(lastNode);
                        range.collapse(true);
                        sel.removeAllRanges();
                        sel.addRange(range);
                    }
                }
            } else if (document.selection && document.selection.type != "Control") {
// IE < 9
                document.selection.createRange().pasteHTML(html);
            }
        }
        window.onload=function () {

            var link_btn=document.getElementById('insertLink');
            var link_div=document.getElementById('alertBox');
            var submit_link=document.getElementById('submit');
            link_btn.onclick=function () {
                if(link_div.style.display=='none'){
                    link_div.style.display='block';
                }else {
                    link_div.style.display='none';
                }
            }
            submit_link.onclick=function () {
                link_div.style.display='none';
                insertHtmlAtCaret('<a href="link_div.innerHtml"></a>')
            }

        }
        window.onscroll=function () {
            var article_div=document.getElementById('article');
            var oDiv=document.getElementById('function');
//            alert(oDiv.offsetTop);
            if(window.scrollY>60){
                oDiv.style.position='fixed';
                oDiv.style.top=51+'px';
            }
            else{
                oDiv.style.position=null;
                oDiv.style.top=null;
            }
//            console.info(window.scrollY);
        }
    </script>
</head>
<body>
<a href=""></a>
<div class="header"></div>
<div class="container">
    <div class="title" contenteditable="true" placeholder="请输入标题"></div>
    <div id="function" class="function">
        <span><i id="insertLink" class="icon-link"></i></span>
        <span></span>
    </div>
    <div id="alertBox" class="alertBox">
        <div id="link_href" class="link_href" contenteditable="true"></div>
        <button id="submit">确认</button>
    </div>
    <div id="article" class="content" contenteditable="true" placeholder="请输入正文"></div>
</div>

</body>
</html>