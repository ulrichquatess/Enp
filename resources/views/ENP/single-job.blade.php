@extends('layouts.main')
@section('content')
	
	<!-- RESPONSIVE AD START -->
	<div class="container">
		<div class="row">
			<div style="margin: 30px 0 0; padding: 0;">
				<div style="background: #ddd; color: #bbbbbb; display: inline-block; font-family: &quot;roboto&quot; , sans-serif; font-size: 1.2rem; font-weight: 900; height: 30px; overflow: hidden; padding: 22px 0 15px; text-align: center; white-space: nowrap; width: 100%;">RESPONSIVE AD AREA</div>
			</div>
		</div>
	</div><!-- RESPONSIVE AD END -->
	
	<div class="container">
		<div class="row">	
		
			<div id="outer-wrapper" class="clearfix">
			
				<div class="secondary-content clearfix">
				
					<!-- LEFT SIDEBAR START -->
					<div class="left-sidebar">
						<div class="theiaStickySidebar">
							<div class="grid-sidebar">
								
								<!-- CATEGORY 1 START -->
								<div class="widget clearfix">
									<h2 class='title'>Celebrities Tips</h2>
									<div class="cont topLists">
										<ul class="topimages">
											@foreach($artist as $artist)
											<li>
												<figure>
													<div class="topListimages"><a href="{{ url('celebrities/'.$artist->id)}}"><img alt=" " src="{{ asset('assets/Blog/img/steering.jpg')}}"/></a>
														<a href="single.html"><div class="overlay"></div></a>
														<div class="cap-comment"><i class="fa fa-comment"></i> 3</div>
														<div class="toptitle">
															<div class="cap-date">{{ date('M j, Y', strtotime($artist->created_at)) }}</div>
															<div class="clearfix"></div>
															<a href="{{ url('celebrities/'.$artist->id)}}">{{ $artist->title }}</a>
														</div>
													</div>
													<figcaption>
														<div class="toptext">
															<p>{{ substr(strip_tags($artist->content), 0, 150) }} {{ strlen(strip_tags($artist->content)) > 200 ? "..." : ""  }}</p>
														</div>
													</figcaption>
												</figure>
											</li>
											@endforeach
										</ul>
									</div>
								</div><!-- CATEGORY 1 END -->
							</div>
						</div>					
					</div><!-- LEFT SIDEBAR END -->
					
					<div id="main-wrapper" class="clearfix">
						<div class="theiaStickySidebar">
						
							<!-- SINGLE POST START -->
							<div class="post clearfix">
							
								<!-- POST IMAGE -->
								<div id="post-header">
									<img alt="" src="{{asset('images/job/'.$jop->image)}}" />
								</div>
								
								<!-- POST TITLE -->
								<h2 class="post-title">
									{{ $jop->title }}
								</h2>
								
								<!-- POST META -->
								<div class="meta post-meta">
									<span><i class="fa fa-clock-o"></i> {{ date('M j, Y', strtotime($jop->created_at)) }}</span>
								</div>
								
								<!-- TEXT POST -->
								<div class="post-body">
									<p>{!! $jop->content !!}</p>
								</div>
								
								
								<!-- RELATED POST -->
								<div class="related-posts clearfix">
									<h3><i class='fa fa-pencil-square-o'></i> Similar Articles</h3>
									<ul>
										@foreach($last as $last)
										<li>
											<div class="thumbR clearfix">
												<a href="{{ url('jobb/'.$last->id)}}"><img alt="" src="{{ asset('images/job-thumnail/' . $last->image)}}" /></a>
											</div>
											<div class="title">
												<h4><a href="{{ url('jobb/'.$last->id)}}">{{ $last->title}}</a></h4>
												
											</div>
										</li>
										@endforeach
									</ul>
								</div>
							</div><!-- SINGLE POST END -->
							
						</div>
					</div>
					
				</div>
				
				<!-- RIGHT SIDEBAR START -->
				<div id="sidebar-wrapper">
					<div class="theiaStickySidebar">
						<div class="sidebar clearfix">
							
							<!-- POPULAR POSTS START -->
							<div class="widget clearfix">
								<div id="PopularPosts1" class="PopularPosts on">
									<h2 class="title">POPULAR POSTS</h2>
									<div class="widget-content popular-posts">
										<ul>
										@foreach($post as $post)
											<li>
												<div class="item-content">
													<div class="item-thumbnail">
														<a href="{{ url('entre/'.$post->id)}}"><img alt="" src="{{asset('images/entrepreneur-thumnail/'.$post->image)}}"/></a>
														<a href="single.html"><div class="overlay"></div></a>
														<div class="item-title">
															<a href="{{ url('entre/'.$post->id)}}">{{$post->title}}</a>
														</div>
													</div>
													<div class="item-snippet">{{ substr(strip_tags($post->content), 0, 150) }} {{ strlen(strip_tags($post->content)) > 200 ? "..." : ""  }}</div>
												</div>
											</li>
										@endforeach
										</ul>
									</div>
								</div>
							</div><!-- POPULAR POSTS END -->
							
						</div>
					</div>
				</div><!-- RIGHT SIDEBAR END -->
				
			</div>
		</div>
	</div>
	
	<!-- RESPONSIVE AD START -->
	<div class="container">
		<div class="row">
			<div style="margin: 15px 0 10px; padding: 0;">
				<div style="background: #ddd; color: #bbbbbb; display: inline-block; font-family: &quot;roboto&quot; , sans-serif; font-size: 1.2rem; font-weight: 900; height: 30px; overflow: hidden; padding: 22px 0 15px; text-align: center; white-space: nowrap; width: 100%;">RESPONSIVE AD AREA</div>
			</div>
		</div>
	</div><!-- RESPONSIVE AD END -->

@endsection