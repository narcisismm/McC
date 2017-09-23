@extends('layouts.index')
        @section('content')
            <main role="main" class="App-main">
                <div class="UserArea">
                    <!-- 主页容器 -->
                    <div class="UserArea-container">
                        <!-- 用户内容列 -->
                        <div class="UserArea-mainColumn">
                            <!--头部区域-->
                            <div class="header-area">
                                <!--头像-->
                                <div class="header-photo">
                                    <p class="photo-wrap">
                                        <a href="#" title="更换头像">
                                            <img src="images/test.png" class="photo">
                                        </a>
                                    </p>
                                </div>
                                <!--用户名-->
                                <div class="header-username">
                                    <h1 class="username">用户名</h1>
                                    <div class="header-intro" title="用户的个人简介">
                                        用户的个人简介用户的个人简介用户的个人简介用户的个人简介用户的个人简介
                                    </div>
                                </div>
                            </div>
                            <!--主要区域-->
                            <div class="body-area">
                                <div class="profile-head">
                                    <h2 class="head-title">
                                        <span class="title-name">我的个人简介</span>
                                    </h2>
                                    <a href="#" class="back">返回我的主页</a>
                                </div>
                                <div class="profile-editfields">
                                    <form action="#" method="post">
                                        <div class="field">
                                            <h3 class="field-lable">用户名</h3>
                                            <div class="field-content">
                                                <div class="show">
                                                    <span class="field-text">挖掘机之神</span>
                                                    <span class="modify">
                                                <i class="fa fa-edit" style="margin-right: 5px"></i>修改
                                            </span>
                                                </div>
                                                <div class="hide">
                                                    <div class="input-wrapper email">
                                                        <input type="text" value="挖掘机之神" class="input">
                                                    </div>
                                                    <div class="edit-button">
                                                        <div class="buttons">
                                                            <span class="button save">确定</span>
                                                            <span class="button cancle">取消</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="field">
                                            <h3 class="field-lable">邮箱</h3>
                                            <div class="field-content">
                                                <div class="show">
                                                    <span class="field-text">23333@qq.com</span>
                                                    <span class="modify">
                                                <i class="fa fa-edit" style="margin-right: 5px"></i>修改
                                            </span>
                                                </div>
                                                <div class="hide">
                                                    <div class="input-wrapper email">
                                                        <input type="text" value="23333@qq.com" class="input">
                                                    </div>
                                                    <div class="edit-button">
                                                        <div class="buttons">
                                                            <span class="button save">确定</span>
                                                            <span class="button cancle">取消</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="field">
                                            <h3 class="field-lable">学校</h3>
                                            <div class="field-content">
                                                <div class="show">
                                                    <span class="field-text">中国山东蓝翔技术学院</span>
                                                    <span class="modify">
                                                <i class="fa fa-edit" style="margin-right: 5px"></i>修改
                                            </span>
                                                </div>
                                                <div class="hide">
                                                    <div class="input-wrapper email">
                                                        <input type="text" value="中国山东蓝翔技术学院" class="input">
                                                    </div>
                                                    <div class="edit-button">
                                                        <div class="buttons">
                                                            <span class="button save">确定</span>
                                                            <span class="button cancle">取消</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="field">
                                            <h3 class="field-lable">年级</h3>
                                            <div class="field-content">
                                                <div class="show">
                                                    <span class="field-text">初中毕业</span>
                                                    <span class="modify">
                                                <i class="fa fa-edit" style="margin-right: 5px"></i>修改
                                            </span>
                                                </div>
                                                <div class="hide">
                                                    <div class="input-wrapper email">
                                                        <input type="text" value="初中毕业" class="input">
                                                    </div>
                                                    <div class="edit-button">
                                                        <div class="buttons">
                                                            <span class="button save">确定</span>
                                                            <span class="button cancle">取消</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="submit">
                                            <button type="submit" class="submit-button">保存</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        @endsection
