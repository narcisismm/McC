<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>写题解</title>
    <script type="text/javascript" src="{{'resources/views/index/js/syntaxhighlighter.js'}}"></script>
    <link type="text/css" rel="stylesheet" href="{{'resources/views/index/css/theme.css'}}">
    <link rel="stylesheet" href="{{'resources/views/index/css/writeanwer.css'}}">
    <link rel="stylesheet" href="{{'resources/views/index/fontawesome-4.2.0/css/font-awesome.css'}}">
</head>
<body>
<div class="root">
    <div class="main">
        <form action="#" method="POST">
            {{csrf_field()}}
            <div class="search-area">
                <!-- 搜索菜单容器 -->
                <div class="SearchBar">
                    <div class="SearchBar-toolWrapper">
                        <!-- 搜索框容器 -->
                        <div class="SearchBar-input">
                            <!-- 搜索框 -->
                            <input type="text" maxlength="100" value autocomplete="off" class="Input" placeholder="搜索题目">
                            <!-- 搜索按钮容器 -->
                            <div class="Input-after">
                                <!-- 搜索按钮 -->
                                <button class="SearchButton" type="button">
                                    <!-- 搜索图标 -->
                                    <i class="fa fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <!-- 提问按钮 -->
                    <button class="QuestionButton">添加新题目</button>
                </div>
            </div>
            <div class="answer-area">
                <h3>题目解析：</h3>
                <div class="edit-area">
                    <textarea name="answer"  cols="30" rows="10" placeholder="请输入题目解析" style="width:100%"></textarea>
                </div>
            </div>
            <div class="code-area">
                <h3>代码：</h3>
                <div class="codeEdit-area">
                    <textarea name="answer"  cols="30" rows="10" placeholder="请输入代码" style="width:100%"></textarea>
                </div>
            </div>
            <div class="submit-area">
                <!--标签区域-->
                <div class="tag-area">
                    <p>标签区域：</p>
                    <span>标签1</span>
                    <span>标签2</span>
                    <span>标签3</span>
                </div>
                <div class="submit-button">
                    <input type="submit" value="提交">
                </div>
            </div>
        </form>
    </div>
</div>
</body>
</html>