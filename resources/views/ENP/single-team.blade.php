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
									<h2 class='title'>Category 1</h2>
									<div class="cont topLists">
										<ul class="topimages">
											<li>
												<figure>
													<div class="topListimages"><a href="single.html"><img alt=" " src="{{ asset('assets/Blog/img/steering.jpg')}}"/></a>
														<a href="single.html"><div class="overlay"></div></a>
														<div class="cap-comment"><i class="fa fa-comment"></i> 3</div>
														<div class="toptitle">
															<div class="cap-date"> 17 Apr 2015</div>
															<div class="clearfix"></div>
															<a href="single.html">Nam detraxit disputando efficiantur cu, nisl.</a>
														</div>
													</div>
													<figcaption>
														<div class="toptext">
															<p>Ei brute deserunt delicata nam, mundi moderatius ex quo. Id per modo molestie lobortis, perfecto corrumpit omittantur nec an. Alb...</p>
														</div>
													</figcaption>
												</figure>
											</li>
											
											
																																
										</ul>
									</div>
								</div><!-- CATEGORY 1 END -->
								
								<!-- CATEGORY 2 START -->
								<div class="widget">
									<h2 class='title'>Category 2</h2>
									<div class="cont topLists">
										<ul class="topimages">	
											<li>
												<figure>
													<div class="topListimages"><a href="single.html"><img alt=" " src="{{ asset('assets/Blog/img/women.jpg')}}"/></a>
														<a href="single.html"><div class="overlay"></div></a>
														<div class="cap-comment"><i class="fa fa-comment"></i> 0</div>
														<div class="toptitle">
															<div class="cap-date"> 12 Apr 2015</div>
															<div class="clearfix"></div>
															<a href="single.html">Albucius intellegam scripserit et cum, no mei porro tantas</a>
														</div>
													</div>
													<figcaption>
														<div class="toptext">
															<p>Ei brute deserunt delicata nam, mundi moderatius ex quo. Id per modo molestie lobortis, perfecto corrumpit omittantur nec an. Alb...</p>
														</div>
													</figcaption>
												</figure>
											</li>
										</ul>
									</div>
								</div><!-- CATEGORY 2 END -->
								
							</div>
						</div>					
					</div><!-- LEFT SIDEBAR END -->
					
					<div id="main-wrapper" class="clearfix">
						<div class="theiaStickySidebar">
						
							<!-- SINGLE POST START -->
							<div class="post clearfix">
							
								<!-- POST IMAGE -->
								<div id="post-header">
									<img alt="" src="{{ asset('images/team/' . $team->image)}}" />
								</div>
								
								<!-- POST TITLE -->
								<h2 class="post-title">
									{{ $team->name }}
								</h2>
								
								<!-- POST META -->
								<div class="meta post-meta">
									<span><i class="fa fa-clock-o"></i> {{ date('M j, Y', strtotime($team->created_at)) }}</span> - 
									<span><i class="fa fa-comments"></i> 5 Comments</span>
								</div>
								
								<!-- TEXT POST -->
								<div class="post-body">
									<p>{{ $team->description }}</p>
								</div>
								
								
								<!-- POST SHARE -->
								<div class="post-share clearfix">
									<ul>
										<li>
											<a class="facebook df-share" data-sharetip="Share on Facebook!" href="{{ $team->facebook }}" rel="nofollow" target="_blank"><i class="fa fa-facebook"></i> Facebook</a>
										</li>
										<li>
											<a class="twitter df-share" data-hashtags="" data-sharetip="Share on Twitter!" href="{{ $team->twitter }}" rel="nofollow" target="_blank"><i class="fa fa-twitter"></i> Tweeter</a>
										</li>

										<li>
											<a class="linkedin df-linkedin" data-sharetip="Pin it" href="{{ $team->linkedin }}" target="_blank"><i class="fa fa-pinterest-p"></i>Linkedin</a>
										</li>
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
							
							
							
							<!-- SIDEBAR SPONSOR START -->
							<div class="widget clearfix">
								<h2 class="title">SPONSOR</h2>
								<div style="width: 300px; height: 250px; background: #ddd; text-align: center; display: inline-block; color: #bbb; font-family: 'Roboto', sans-serif; font-weight: 900; font-size: 1.2rem; white-space: nowrap; padding: 0; overflow: hidden; line-height: 250px;">AD 300X250</div>
							</div><!-- SIDEBAR SPONSOR END -->
							
							<!-- CATEGORY 16 START -->
							<div class="widget">
								<h2 class="title">Category 16</h2>
								<div class='cont topLists'>
									<ul class="topimages">
								
										
										<li>
											<figure>
												<div class="topListimages">
												  <a href="single.html"><img alt=" " src="{{ asset('assets/Blog/img/fiat-500.jpg')}}"/></a>
													<a href="single.html"><div class="overlay"></div></a>
												</div>
												<figcaption>
													<div class="toptext">
														<div class="date-info clearfix">
															<div class="cap-date">  11 Jan 2016</div>
															<div class="cap-comment"> <i class="fa fa-comment"></i> 1</div>
														</div>
														<a href="single.html">Baby brain doesn't exist say scientists</a>
													</div>
												</figcaption>
											</figure>
										</li>
										
										<li>
											<figure>
												<div class="topListimages">
												  <a href="single.html"><img alt=" " src="{{ asset('assets/Blog/img/resort.jpg')}}"/></a>
													<a href="single.html"><div class="overlay"></div></a>
												</div>
												<figcaption>
													<div class="toptext">
														<div class="date-info clearfix">
															<div class="cap-date">  11 Jan 2016</div>
															<div class="cap-comment"> <i class="fa fa-comment"></i> 18</div>
														</div>
														<a href="single.html">Oscar Oscar nominations to be announced</a>
													</div>
												</figcaption>
											</figure>
										</li>
										
										<li>
											<figure>
												<div class="topListimages">
												  <a href="single.html"><img alt=" " src="{{ asset('assets/Blog/img/guitarist.jpg')}}"/></a>
													<a href="single.html"><div class="overlay"></div></a>
												</div>
												<figcaption>
													<div class="toptext">
														<div class="date-info clearfix">
															<div class="cap-date">  10 Jan 2016</div>
															<div class="cap-comment"> <i class="fa fa-comment"></i> 15</div>
														</div>
														<a href="single.html">Friends cast back together for special</a>
													</div>
												</figcaption>
											</figure>
										</li>
										
									</ul>
								</div>
							</div><!-- CATEGORY 16 END -->
							
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