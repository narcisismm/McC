<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="{{url('/')}}/resources/views/index/fontawesome-4.2.0/css/font-awesome.css">
    <link rel="stylesheet" href="{{asset('resources/views/index/css/index.css')}}">
    <link rel="stylesheet" href="{{url('/')}}/resources/views/index/css/userInterface.css">
    <link rel="stylesheet" href="{{asset('resources/views/index/css/edit.css')}}">
    <script type="text/javascript" src="{{asset('resources/views/index/js/jquery.js')}}"></script>
    <script type="text/javascript" src="{{asset('resources/views/index/js/edit.js')}}"></script>
</head>
<body>
<div id="root">
    <div>
        <!-- 导航栏 -->
        <header class="AppHeader">
            <!-- 导航栏内部 -->
            <div class="AppHeader-inner">
                <!-- 网站logo -->
                <a href="#">
                    <div class="logo">logo</div>
                </a>
                <!-- 导航菜单 -->
                <nav class="AppHeader-nav">
                    <!-- 导航项目 -->
                    <a href="#" class="AppHeader-navItem" style="padding-left:0">首页</a>
                    <a href="#" class="AppHeader-navItem">查看</a>
                    <a href="#" class="AppHeader-navItem">分类</a>
                </nav>
                <!-- 搜索菜单容器 -->
                <div class="SearchBar">
                    <div class="SearchBar-toolWrapper">
                        <form action="#" method="GET">
                            <!-- 搜索框容器 -->
                            <div class="SearchBar-input">
                                <!-- 搜索框 -->
                                <input type="text" maxlength="100" value autocomplete="off" class="Input" placeholder="搜索">
                                <!-- 搜索按钮容器 -->
                                <div class="Input-after">
                                    <!-- 搜索按钮 -->
                                    <button class="SearchButton" type="button">
                                        <!-- 搜索图标 -->
                                        <i class="fa fa-search"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- 提问按钮 -->
                    <button class="QuestionAskButton">提问</button>
                </div>
                <!-- 用户菜单 -->
                <div class="AppHeader-userMenu">
                    <!-- 用户菜单项 -->
                    <div class="AppHeader-messages user-item">
                        <!-- 用户菜单项按钮 -->
                        <button class="button">
                            <!-- 用户菜单项图标 -->
                            <i class="fa fa-envelope-o"></i>
                        </button>
                    </div>
                    <div class="AppHeader-notifications user-item">
                        <button class="button">
                            <i class="fa fa-bell"></i>
                        </button>
                    </div>
                    <div class="AppHeader-homepage user-item">
                        <button class="button">
                            <i class="fa fa-user"></i>
                        </button>
                    </div>
                </div>
            </div>
        </header>
        <!-- 导航栏位置支撑盒子 -->
        <div class="AppHeader-holder"></div>
    </div>
    <!-- 主页 -->
    @section('content')
    @show
</div>
</body>
</html>