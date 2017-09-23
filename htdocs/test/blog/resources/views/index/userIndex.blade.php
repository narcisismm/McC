@extends('layouts.index')
		@section('content')
			<main role="main" class="App-main">
				<div class="UserArea">
					<!-- 主页容器 -->
					<div class="UserArea-container">
						<!-- 用户内容列 -->
						<div class="UserArea-mainColumn">
							<!-- 用户头部 -->
							<div class="UserArea-header">
								<!-- 用户头像 -->
								<div class="UserArea-header-image">
									<!-- 头像 -->
									<div class="photo">
										<a href="#">
											<img src="{{asset('resources/images/test.png')}}" alt="用户头像">
										</a>
									</div>
								</div>
								<!-- 用户个人 信息 -->
								<div class="UserArea-header-personal">
									<!-- 用户昵称 -->
									<h2 class="UserArea-header-name">
										<a href="#">用户昵称</a>
									</h2>
									<!-- 用户年级 -->
									<h3 class="UserArea-header-grade">
										用户年级(大一)
									</h3>
									<!-- 用户个人简介 -->
									<div class="UserArea-header-introduce">
										<span>用户的个人简介啊啊啊啊啊啊啊<!-- 啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊 --></span>
									</div>
								</div>
							</div>
							<!-- 用户信息主要简介列 -->
							<div class="Profile-mainColumn">
								<!-- 主要简介 -->
								<div class="ProfileMain Card">
									<!-- 简介列表 -->
									<div class="ProfileMain-header">
										<ul class="ProfileMain-list">
											<li class="list-item">
												<a href="#" class="item-link">
													<i class="fa fa-info-circle"></i>
													动态</a>
											</li>
											<li class="list-item">
												<a href="#" class="item-link">
													<i class="fa fa-file-text-o"></i>
													待定</a>
											</li>
											<li class="list-item">
												<a href="#" class="item-link">
													<i class="fa fa-calendar-o"></i>
													总结</a>
											</li>
											<li class="list-item">
												<a href="#" class="item-link">
													<i class="fa fa-star-o"></i>
													收藏</a>
											</li>
											<li class="list-item">
												<a href="#" class="item-link">
													<i class="fa fa-exclamation"></i>
													关注</a>
											</li>
										</ul>
									</div>
									<!-- 简介列表菜单项 -->
									<div class="List">
										<!-- 菜单项内容列表 -->
										<div class="List-items">
											<!-- 内容项 -->
											<div class="List-item">
												<!-- 动态标签 -->
												<div class="List-itemMeta">
													<div class="ActivityItem-meta">
													<span class="ActivityItem-metaTitle">
														回答了题目
													</span>
														<span>2017-09-06</span>
													</div>
												</div>
												<!-- 动态内容 -->
												<div class="ContentItem">
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
																<img src="{{asset('resources/images/test.png')}}" alt="" width="24" height="24" style="border:1px solid #666">
															</a>
															<!-- 作者内容 -->
															<div class="AuthorInfo-content">
																<!-- 作者昵称 -->
																<div class="AuthorInfo-head">
																<span class="AuthorInfo-name">
																	<a href="#" class="UserNameLink">用户昵称</a>
																</span>
																</div>
																<!-- 作者详情 -->
																<div class="AuthorInfo-detail">
																	<div class="AuthorInfo-badge">
																		<div class="UserDetailLink">用户个人详情(描述)</div>
																	</div>
																</div>
															</div>

														</div>
														<!-- 内容 -->
														<div class="ContentItem" style="border:1px solid #666">
															<!-- 题目 -->
															<h3 class="ContentItem-title">
																<a href="#" target="_blank">这道题的问题?</a>
															</h3>
															<!-- 答案内容 -->
															<div class="AnswerContent">
																<!-- 答案内部内容 -->
																<div class="AnswerContent-inner">
																	<!-- 文本内容 -->
																	<span class="AnswerText">
																	“黑暗效应” 有一位男子钟情于一位女子，但每次约会，他总觉得双方谈话不投机。有一天晚上，他约那位女子到一家光线比较暗的酒吧，结果这次谈话融洽投机。从此以后，这位男子将约会的地点都选择在光线比较暗的酒吧。几次约会之后，他俩终于决定结下百年之好。 在正常情况下，一般的人都能根据对方和外界条件来决定自己应该掏出多少心里话，特别是…
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
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</main>
		@endsection
