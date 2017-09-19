@extends('layouts.admin')
        @section('content')
            <!--面包屑导航 开始-->
            <div class="crumb_warp">
                <!--<i class="fa fa-bell"></i> 欢迎使用登陆网站后台，建站的首选工具。-->
                <i class="fa fa-home"></i> <a href="{{url('admin/info')}}">首页</a> &raquo; 添加文章
            </div>
            <!--面包屑导航 结束-->

            <!--结果集标题与导航组件 开始-->
            <div class="result_wrap">
                <div class="result_title">
                    <h3>文章管理</h3>
                    @if( count($errors) > 0 )
                        <div class="mark">
                            @if(is_object($errors))
                                @foreach( $errors->all() as $error)
                                    <p>{{$error}}</p>
                                @endforeach
                            @else
                                <p>{{$errors}}</p>
                            @endif
                        </div>
                    @endif
                </div>
                <div class="result_content">
                    <div class="short_wrap">
                        <a href="{{url('admin/article/create')}}"><i class="fa fa-plus"></i>添加文章</a>
                        <a href="{{url('admin/article')}}"><i class="fa fa-recycle"></i>全部文章</a>
                    </div>
                </div>
            </div>
            <!--结果集标题与导航组件 结束-->

            <div class="result_wrap">
                <form action="{{url('admin/article/'.$field->id)}}" method="post">
                    <input type="hidden" name="_method" value="put">
                    {{csrf_field()}}
                    <table class="add_tab">
                        <tbody>
                        <tr>
                            <th width="120"><i class="require">*</i>分类：
                            </th>
                            <td>
                                <select name="cate_id">
                                    <option value="">请选择...</option>
                                    @foreach ($data as $v)
                                    <option value="{{$v->id}}" @if ($field->cate_id == $v->id) selected @endif>{{$v->_name}}</option>
                                    @endforeach
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <th>文章标题：</th>
                            <td>
                                <input type="text" class="lg" name="title" value="{{$field->title}}">
                            </td>
                        </tr>
                        <tr>
                            <th>编辑人：</th>
                            <td>
                                <input type="text" class="sm" name="editor" value="{{$field->editor}}">
                            </td>
                        </tr>
                        <tr>
                            <th>缩略图：</th>
                            <td>
                                <input type="text" class="lg" name="thumb" value="{{$field->thumb}}">
                                <input id="file_upload" name="file_upload" type="file" multiple="true">
                                {{--引入缩略图上传附件--}}
                                <script src="{{asset('resources/org/uploadify/jquery.uploadify.min.js')}}" type="text/javascript"></script>
                                <link rel="stylesheet" type="text/css" href="{{asset('resources/org/uploadify/uploadify.css')}}">
                                <script type="text/javascript">
                                    <?php $timestamp = time();?>
                                    $(function() {
                                        $('#file_upload').uploadify({
                                            'buttonText' : '选择图片',
                                            'formData'     : {
                                                'timestamp' : '<?php echo $timestamp;?>',
                                                '_token'     : "{{csrf_token()}}"
                                            },
                                            'swf'      : "{{asset('resources/org/uploadify/uploadify.swf')}}",
                                            'uploader' : "{{url('admin/upload')}}",
                                            'onUploadSuccess' : function(file, data, response) {
                                                $('input[name = thumb]').val(data);
                                                $('#thumb_img').attr('src','/'+data)
                                            }
                                        });
                                    });
                                </script>
                                <style>
                                    .uploadify{display:inline-block;}
                                    .uploadify-button{border:none; border-radius:5px; margin-top:8px;}
                                    table.add_tab tr td span.uploadify-button-text{color: #FFF; margin:0;}
                                </style>
                            </td>
                        </tr>
                        <tr>
                            <th></th>
                            <td>
                                {{--src需注意，若从根目录开始查找，需加“/”--}}
                                <img src="/{{$field->thumb}}" id="thumb_img" style="max-width: 350px; min-width: 100px;">
                            </td>
                        </tr>
                        <tr>
                            <th>关键词：</th>
                            <td>
                                <textarea name="tag">{{$field->tag}}</textarea>
                            </td>
                        </tr>
                        <tr>
                            <th>描述：</th>
                            <td>
                                <textarea class="lg" name="description">{{$field->description}}</textarea>
                            </td>
                        </tr>
                        <tr>
                            <th>文章内容：</th>
                            <td>
                                {{--引入编辑器附件--}}
                                {{--<div id="div1" name="content"></div>--}}
                                {{--<script type="text/javascript" src="{{asset('resources/views/admin/style/js/wangEditor.js')}}"></script>--}}
                                {{--<script type="text/javascript">--}}
                                    {{--var E = window.wangEditor;--}}
                                    {{--var editor = new E('#div1');--}}
                                    {{--editor.create()--}}
                                {{--</script>--}}

                                <script type="text/javascript" charset="utf-8" src="{{asset('resources/org/ueditor/ueditor.config.js')}}"></script>
                                <script type="text/javascript" charset="utf-8" src="{{asset('resources/org/ueditor/ueditor.all.min.js')}}"> </script>
                                <script type="text/javascript" charset="utf-8" src="{{asset('resources/org/ueditor/lang/zh-cn/zh-cn.js')}}"></script>
                                <script id="editor" name="content" type="text/plain" style="width:860px;height:500px;">{!! $field->content !!}</script>
//                                去掉标签，原样输出
                                <script type="text/javascript">

                                var ue = UE.getEditor('editor');
                                </script>
                                <style>
                                    .edui-default{line-height: 28px;}
                                    div.edui-combox-body,div.edui-button-body,div.edui-splitbutton-body
                                    {overflow: hidden; height:20px;}
                                    div.edui-box{overflow: hidden; height:22px;}
                                </style>
                            </td>
                        </tr>
                        <tr>
                            <th></th>
                            <td>
                                <input type="submit" value="提交">
                                <input type="button" class="back" onclick="history.go(-1)" value="返回">
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </form>
            </div>
        @endsection
