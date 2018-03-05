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
		
			<div class="tabs-menu clearfix">
				<div class="left-area">
					Left Sidebar
				</div>
				<div class="left-area-2">
					Left Sidebar
				</div>
				<div class="center-area">
					Featured News
				</div>
				<div class="right-area">
					Right Sidebar
				</div>
				<div class="right-area-2">
					Right Sidebar
				</div>
			</div>
		
			<div id="outer-wrapper" class="clearfix">
			
				<div class="secondary-content clearfix">
				
					<!-- LEFT SIDEBAR START -->
					<div class="left-sidebar">
						<div class="theiaStickySidebar">
							<div class="grid-sidebar">
								
								<!-- CATEGORY 1 START -->
								<div class="widget clearfix">
									<h2 class='title'>Health Section</h2>
									<div class="cont topLists">
										<ul class="topimages">
											@foreach($post as $post)
											<li>
												<figure>
													<div class="topListimages"><a href="{{ url('healthtips/'.$post->id)}}"><img alt=" " src="{{ asset('images/health/' . $post->image)}}"/></a>
														<a href="{{ url('healthtips/'.$post->id)}}"><div class="overlay"></div></a>
														<div class="cap-comment"><i class="fa fa-comment"></i> 3</div>
														<div class="toptitle">
															<div class="cap-date"> {{ date('M j, Y', strtotime($post->created_at)) }}</div>
															<div class="clearfix"></div>
															<a href="{{ url('healthtips/'.$post->id)}}">{!! substr(strip_tags($post->title), 0, 150) !!} {{ strlen(strip_tags($post->title)) > 150 ? "..." : ""  }}</a>
														</div>
													</div>
													<figcaption>
														<div class="toptext">
															<p>{!! substr(strip_tags($post->content), 0, 150) !!} {{ strlen(strip_tags($post->content)) > 150 ? "..." : ""  }}</p>
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
						
							<!-- BLOG POSTS START -->
							<div class="post clearfix">
								
								<div class="latestpost">
									<h2 class="title">Latest Job Search</h2>
								</div>
								<div class="storage">
									<div class="cont topLists">
										<ul class="topimages">
										@foreach($jobs as $job)
											<li>
												<figure>{{---- Make sure you provide a detail links to the main section of the website site where you can visit and get more information -----}}
													<div class="topListimages">
														<a href="{{ url('jobb/'.$job->id)}}"><img alt="" src="{{asset('images/job-thumnail/'.$job->image)}}" /></a>
														<a href="{{ url('jobb/'.$job->id)}}"><div class="overlay"></div></a>
													</div>
													<figcaption>
														<div class="toptext"><a href="{{ url('jobb/'.$job->id)}}">{{ $job->title }}</a>
															<div class="date-info clearfix">
																<div class="cap-author"><i class="fa fa-pencil-square-o"></i> Powered By Quatess</div>
																<div class="cap-date"> {{ date('M j, Y', strtotime($job->created_at)) }}</div>
															</div>
															<p>{!! substr(strip_tags($job->content), 0, 250) !!} {{ strlen(strip_tags($job->content)) > 250 ? "..." : ""  }}</p>
														</div>
													</figcaption>
												</figure>
											</li>
											@endforeach
										</ul>
									</div>
								</div>
								
							</div><!-- BLOG POSTS END -->
							
							<!-- PAGINATION START -->
                            <div class="pagenav">
                                <ul class="pagination">
                                    {{ $jobs->links() }}
                                </ul>
                            </div><!-- PAGINATION END -->
							
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
										  @foreach($last as $last)
											<li>
												<div class="item-content">
													<div class="item-thumbnail">
														<a href="{{ url('entre/'.$last->id)}}"><img alt="" src="{{asset('images/entrepreneur-thumnail/'.$last->image)}}"/></a>
														<a href="{{ url('entre/'.$last->id)}}"><div class="overlay"></div></a>
														<div class="item-title">
															<a href="{{ url('entre/'.$last->id)}}">{!! substr(strip_tags($last->title), 0, 150) !!} {{ strlen(strip_tags($last->title)) > 150 ? "..." : ""  }}</a>
														</div>
													</div>
													<div class="item-snippet">{!! substr(strip_tags($last->content), 0, 150) !!} {{ strlen(strip_tags($last->content)) > 150 ? "..." : ""  }}</div>
												</div>
											</li>
											@endforeach
											
										</ul>
									</div>
								</div>
							</div><!-- POPULAR POSTS END -->
							
							<!-- SIDEBAR SPONSOR START -->
							<div class="widget clearfix">
								<h2 class="title">SPONSOR</h2>
								<div style="width: 300px; height: 250px; background: #ddd; text-align: center; display: inline-block; color: #bbb; font-family: 'Roboto', sans-serif; font-weight: 900; font-size: 1.2rem; white-space: nowrap; padding: 0; overflow: hidden; line-height: 250px;">AD 300X250</div>
							</div><!-- SIDEBAR SPONSOR END -->
							
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