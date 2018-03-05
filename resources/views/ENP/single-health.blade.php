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
									<h2 class='title'>Health Tips</h2>
									<div class="cont topLists">
										<ul class="topimages">
											@foreach($artist as $artist)
											<li>
												<figure>
													<div class="topListimages"><a href="single.html"><img alt=" " src="{{ asset('assets/Blog/img/steering.jpg')}}"/></a>
														<a href="single.html"><div class="overlay"></div></a>
														<div class="cap-comment"><i class="fa fa-comment"></i> 3</div>
														<div class="toptitle">
															<div class="cap-date"> 17 Apr 2015</div>
															<div class="clearfix"></div>
															<a href="single.html">{{ $artist->title }}</a>
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
									<img alt="" src="{{asset('images/health/'.$health->image)}}" />
								</div>
								
								<!-- POST TITLE -->
								<h2 class="post-title">
									{{ $health->title }}
								</h2>
								
								<!-- POST META -->
								<div class="meta post-meta">
									<span><i class="fa fa-clock-o"></i> {{ date('M j, Y', strtotime($health->created_at)) }}</span> - 
									<span><i class="fa fa-comments"></i>{{ $health->healthcomments()->count() }} Comment</span>
								</div>
								
								<!-- TEXT POST -->
								<div class="post-body">
									<p>{!! $health->content !!}</p>
								</div>
								
								
								<!-- RELATED POST -->
								<div class="related-posts clearfix">
									<h3><i class='fa fa-pencil-square-o'></i> Similar Articles</h3>
									<ul>
										@foreach($last as $last)
										<li>
											<div class="thumbR clearfix">
												<a href="{{ url('entre/'.$last->id)}}"><img alt="" src="{{ asset('images/entrepreneur-thumnail/' . $last->image)}}" /></a>
											</div>
											<div class="title">
												<h4><a href="{{ url('entre/'.$last->id)}}">{{ $last->title}}</a></h4>
												
											</div>
										</li>
										@endforeach
									</ul>
								</div>
								
								
								<!-- COMMENTS -->
								<div id="comments" class="clearfix">
									<h2><i class='fa fa-comments-o'></i>{{ $health->healthcomments()->count() }} Comment </h2>
									<div class="title-border"></div>
									
									<ol class="comments_list">
										@forelse($health->healthcomments as $comment)
										 <?php if ($comment->approve == 1) { ?> 
										<li class="comment">
											<article-reply>
												<div class="comment_avatar">
													<img src="{{ asset('assets/Health/dist/img/avatar.png')}}" alt="Avatar">
												</div>
												<div class="comment_content">
													<div class="meta">
														<span class="comment_author"><a href="#">{{ $comment->name }}</a></span>
														<span class="comment_date">{{ date( 'M j Y h:ia ', strtotime( $comment->created_at ))}}</span>
													</div>
													<p>{{ $comment->comment }} </p>
										
												</div>
											</article-reply>
											<ul class="children">
												<li class="comment">
													<article-reply>
														<div class="comment_avatar">
															<img src="{{ asset('assets/Health/dist/img/avatar04.png')}}" alt="Avatar">
														</div>
														<div class="comment_content">
															<div class="meta">
																<span class="comment_author"><a href="#">{{ $comment->reply_name }}</a></span>
																<span class="comment_date">{{ date( 'M j Y h:ia ', strtotime( $comment->updated_at ))}}</span>
															</div>
															<p>{{ $comment->reply }}</p>
														</div>
													</article-reply>
												</li><?php }?>
												 @empty
		                                        <h4>No Comments</h4>
		                                        @endforelse
									</ol>
									
									<!-- COMMENT FORM -->
								<div class="comment-form clearfix">
										<h3><i class="fa fa-pencil"></i> Leave a Replay</h3>
										
										<div class="comments_form">
											{{ Form::open(['route' => ['healthcomments.store', $health->id], 'method' => 'POST']) }}
												<div class="inp_blocks">
													<input id="name" name="name" type="text" placeholder="Your Name *" required/>
													@if ($errors->has('name'))
							                        <p class="help is-danger">{{$errors->first('name')}} </p>
							                       @endif
							                    
													<input id="email" name="email" type="text" placeholder="Your Email *" required/>
													@if ($errors->has('email'))
								                        <p class="help is-danger">{{$errors->first('email')}} </p>
								                     @endif
												</div>

												<textarea cols="30" rows="10" name="comment" placeholder="Comment"></textarea>
												 @if ($errors->has('comment'))
							                        <p class="help is-danger">{{$errors->first('comment')}} </p>
							                     @endif
												<input type="submit" value="Send Message" />
											{{ Form::close()}}
										</div>
									</div> 
								
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
							
							<!-- SIDEBAR SPONSOR START -->
							<div class="widget clearfix">
								<h2 class="title">SPONSOR</h2>
								<div style="width: 300px; height: 250px; background: #ddd; text-align: center; display: inline-block; color: #bbb; font-family: 'Roboto', sans-serif; font-weight: 900; font-size: 1.2rem; white-space: nowrap; padding: 0; overflow: hidden; line-height: 250px;">AD 300X250</div>
							</div><!-- SIDEBAR SPONSOR END -->
							
							<!-- CATEGORY 16 START -->
							<div class="widget">
								<h2 class="title">Job Section</h2>
								<div class='cont topLists'>
									<ul class="topimages">
									  @foreach($job as $job)
										<li>
											<figure>
												<div class="topListimages">
												  <a href="single.html"><img alt=" " src="{{ asset('assets/Blog/img/ship.jpg')}}"/></a>
													<a href="single.html"><div class="overlay"></div></a>
												</div>
												<figcaption>
													<div class="toptext">
														<div class="date-info clearfix">
															<div class="cap-date"> {{ date( 'M j Y h:ia ', strtotime( $job->created_at ))}}</div>
															<div class="cap-comment"> <i class="fa fa-comment"></i> 3</div>
														</div>
														<a href="single.html">{{ substr(strip_tags($job->title), 0, 100) }} {{ strlen(strip_tags($job->title)) > 100 ? "..." : ""  }}</a>
													</div>
												</figcaption>
											</figure>
										</li>
										@endforeach
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