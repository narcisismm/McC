<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .header{
            height: 100px;
            background-color: palegreen;
        }
        .container{
            height: 200px;
            background-color: lightblue;
        }
        .footer{
            height: 100px;
            background-color: palevioletred;
        }
    </style>
</head>
<body>
<div class="header">公共头部</div>
@yield ('content')
<div class="footer">公共底部</div></body>
</html>