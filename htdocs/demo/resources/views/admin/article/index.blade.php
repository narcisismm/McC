@extends('layouts.admin')
    @section('content')
        <!--面包屑导航 开始-->
        <div class="crumb_warp">
            <!--<i class="fa fa-bell"></i> 欢迎使用登陆网站后台，建站的首选工具。-->
            <i class="fa fa-home"></i> <a href="{{url('admin/info')}}">首页</a> &raquo; 全部文章
        </div>
        <!--面包屑导航 结束-->

        {{--<!--结果页快捷搜索框 开始-->--}}
        {{--<div class="search_wrap">--}}
            {{--<form action="" method="post">--}}
                {{--<table class="search_tab">--}}
                    {{--<tr>--}}
                        {{--<th width="120">选择分类:</th>--}}
                        {{--<td>--}}
                            {{--<select onchange="javascript:location.href=this.value;">--}}
                                {{--<option value="">全部</option>--}}
                                {{--<option value="http://www.baidu.com">百度</option>--}}
                                {{--<option value="http://www.sina.com">新浪</option>--}}
                            {{--</select>--}}
                        {{--</td>--}}
                        {{--<th width="70">关键字:</th>--}}
                        {{--<td><input type="text" name="keywords" placeholder="关键字"></td>--}}
                        {{--<td><input type="submit" name="sub" value="查询"></td>--}}
                    {{--</tr>--}}
                {{--</table>--}}
            {{--</form>--}}
        {{--</div>--}}
        {{--<!--结果页快捷搜索框 结束-->--}}

        <!--搜索结果页面 列表 开始-->
        <form action="#" method="post">
            <div class="result_wrap">
                <div class="result_title">
                    <h3>分类管理</h3>
                </div>
                <!--快捷导航 开始-->
                <div class="result_content">
                    <div class="short_wrap">
                        <a href="{{url('admin/article/create')}}"><i class="fa fa-plus"></i>添加文章</a>
                        <a href="{{url('admin/article')}}"><i class="fa fa-recycle"></i>全部文章</a>
                    </div>
                </div>
                <!--快捷导航 结束-->
            </div>

            <div class="result_wrap">
                <div class="result_content">
                    <table class="list_tab">
                        <tr>
                            <th class="tc" width="5%">ID</th>
                            <th>文章标题</th>
                            <th>编辑人</th>
                            <th>发布时间</th>
                            <th>查看次数</th>
                            <th>操作</th>
                        </tr>

                        @foreach($data as $v)
                        <tr>
                            <td class="tc">{{$v->id}}</td>
                            <td>
                                <a href="#">{{$v->title}}</a>
                            </td>
                            <td>{{$v->editor}}</td>
                            <td>{{$v->time}}</td>
                            <td>{{$v->view}}</td>
                            <td>
                                <a href="{{url('admin/article/'.$v->id.'/edit')}}">修改</a>
                                <a href="javascript:;" onclick="delArticle({{$v->id}})">删除</a>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                    <div class="page_list">
                        {{$data->links()}}
                    </div>
                </div>
            </div>
        </form>

        <style>
            .result_content ul li span {
                font-size: 15px;
                padding: 6px 12px;
            }
        </style>
        <!--搜索结果页面 列表 结束-->
        <script>
            function changeOrder(obj,cate_id) {
                var cate_order = $(obj).val();
                $.post("{{url('admin/cate/changeorder')}}",{'_token':'{{csrf_token()}}','cate_id':cate_id,'cate_order':cate_order},function (data) {
                    layer.msg(data.msg);
                });
            }
            
            function delArticle($id) {
                layer.confirm('确定要删除该文章吗？', {
                    btn: ['确定','取消'] //按钮
                }, function(){
                    $.post("{{url('admin/article')}}/"+$id,{'_token':'{{csrf_token()}}','_method':'delete'},function (data) {
                        if (data.status === 1) {
                            layer.msg(data.msg);
                            location.href = location.href;
//                            alert(data.msg)
                        }else {
                            layer.msg(data.msg);
                        }
                    });
//                    layer.msg('的确很重要', {icon: 1});
                }, function(){
//                    layer.msg('也可以这样', {
//                        time: 20000, //20s后自动关闭
//                        btn: ['明白了', '知道了']
                    });
                }

        </script>
    @endsection

