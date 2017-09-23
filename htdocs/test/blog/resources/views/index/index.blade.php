@extends('layouts.index')
	@section('content')
	<main role="main" class="App-main">
		<div class="QuestionArea">
			<!-- 主页容器 -->
			<div class="QuestionArea-container">
				<!-- 问题列 -->
				<div class="QuestionArea-mainColumn">
					<!-- 问题列头部 -->
					<div class="QuestionArea-header Card">
						<!-- 问题列头部导航 -->
						<div class="QuestionAreaHeader-nav">
							<!-- 导航项 -->
							<a href="#" class="QuestionAreaHeader-navItem" title="提问">
								<i></i>
								提问
							</a>
							<a href="#" class="QuestionAreaHeader-navItem" title="回答" target="_blank">
								<i></i>
								回答
							</a>
							<a href="#" class="QuestionAreaHeader-navItem" title="写文章" target="_blank">
								<i></i>
								写文章
							</a>
						</div>
						<a href="#" class="QuestionAreaHeader-rightItem" title="草稿" target="_blank">草稿</a>
					</div>
					<!-- 问题列主体 -->
					@foreach($articles as $article)
						<div class="QuestionArea-main">
							<!-- 问题项 -->
							<div class="QuestionAreaItem Card" style="width:100%;border:1px solid #666;box-sizing:border-box;">
								<!-- 问题详情 -->
								<div class="Feed">
									<!-- 标签 -->
									<div class="Feed-title" style="border:1px solid #666">
										<div class="Feed-meta">
										<span class="Feed-meta-item">
											标签:
											<span>
												<a href="#" class="TopicLink">标签1</a>
											</span>
											<span>
												<a href="#" class="TopicLink">标签2</a>
											</span>
										</span>
										</div>
									</div>
									<!-- 作者 -->
									<div class="AuthorInfo" style="border:1px solid #666">
										<!-- 作者头像 -->
										<a href="#" class="UserIconLink">
											<img src="{{asset('resources/images/test.png')}}" alt="" width="24" height="24" style="border:1px solid #666" onclick="location = '{{url('home')}}'">
										</a>
										<!-- 作者内容 -->
										<div class="AuthorInfo-content">
											<!-- 作者昵称 -->
											<div class="AuthorInfo-head">
											<span class="AuthorInfo-name">
												<a href="{{url('home')}}" class="UserNameLink">{{$article->author}}</a>
											</span>
											</div>
											<!-- 作者详情 -->
											<div class="AuthorInfo-detail">
												<div class="AuthorInfo-badge">
													<div class="UserDetailLink">{{$article->introduction}}</div>
												</div>
											</div>
										</div>

									</div>
									<!-- 内容 -->
									<div class="ContentItem" style="border:1px solid #666">
										<!-- 题目 -->
										<h3 class="ContentItem-title">
											<a href="#" target="_blank">{{$article->title}}</a>
										</h3>
										<!-- 答案内容 -->
										<div class="AnswerContent">
											<!-- 答案内部内容 -->
											<div class="AnswerContent-inner">
												<!-- 文本内容 -->
												<span class="AnswerText">
												{{$article->content}}
											</span>
											</div>
											<!-- 板块功能 -->
											<div class="ContentItem-actions">
												<!-- 功能项 -->
												<div class="ContentItem-action">
													<i class="fa fa-thumbs-o-up"></i>
													<span>点赞</span>
												</div>
												<div class="ContentItem-action">
													<i class="fa fa-comments-o"></i>
													<span>评论</span>
												</div>
												<div class="ContentItem-action">
													<i class="fa fa-share-alt-square"></i>
													<span>分享</span>
												</div>
												<div class="ContentItem-action">
													<i class="fa fa-star-o"></i>
													<span>收藏</span>
												</div>
												<div class="ContentItem-action">
													<i class="fa fa-smile-o"></i>
													<span>感谢</span>
												</div>
												<div class="ContentItem-action">
													<i class="fa fa-ellipsis-h"></i>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					@endforeach
				</div>
				<!-- 侧边栏 -->
				<div class="QusetionArea-sideBar">
					<div class="Card" style="height:200px">
						<ul>
							<li><a href="{{url('write')}}">待定</a></li>
							<li><a href="#">待定</a></li>
							<li><a href="#">待定</a></li>
							<li><a href="#">待定</a></li>
						</ul>
					</div>
					<div class="Card" style="height:200px">
						<ul>
							<li><a href="#">待定</a></li>
							<li><a href="#">待定</a></li>
							<li><a href="#">待定</a></li>
						</ul>
					</div>
					<footer class="footer">

					</footer>
				</div>
			</div>
		</div>
	</main>
	@endsection