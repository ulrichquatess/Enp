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
    
    <!-- HOMEPAGE CATEGORIES START -->
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
                                
                                <div class="widget clearfix">
                                    <h2 class='title'>Health Section</h2>
                                    <div class="cont topLists">
                                        <ul class="topimages">
                                            @foreach($health as $health)
                                            <li>
                                                <figure>
                                                    <div class="topListimages"><a href="{{ url('healthtips/'.$health->id)}}"><img alt=" " src="{{ asset('images/health/' . $health->image)}}"/></a>
                                                        <a href="{{ url('healthtips/'.$health->id)}}"><div class="overlay"></div></a>
                                                        <div class="toptitle">
                                                            <div class="cap-date"> {{ date('M j, Y', strtotime($health->created_at)) }}</div>
                                                            <div class="clearfix"></div>
                                                            <a href="{{ url('healthtips/'.$health->id)}}">{!! substr(strip_tags($health->title), 0, 90) !!} {{ strlen(strip_tags($health->title)) > 90 ? "..." : ""  }}.</a>
                                                        </div>
                                                    </div>
                                                    <figcaption>
                                                        <div class="toptext">
                                                            <p>{!! substr(strip_tags($health->content), 0, 150) !!} {{ strlen(strip_tags($health->content)) > 150 ? "..." : ""  }}</p>
                                                        </div>
                                                    </figcaption>
                                                </figure>
                                            </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div><!-- CATEGORY 1 END -->
                                
                                 <!-- CATEGORY 2 START -->
                                <div class="widget">
                                    <h2 class='title'>Technology Section</h2>
                                    <div class="cont topLists">
                                        <ul class="topimages">
                                            @foreach($teck as $teck)
                                            <li>
                                                <figure>
                                                    <div class="topListimages"><a href="{{ url('tech/'.$teck->id)}}"><img alt=" " src="{{ asset('images/technology/' . $teck->image)}}"/></a>
                                                        <a href="{{ url('tech/'.$teck->id)}}"><div class="overlay"></div></a>
                                                        <div class="toptitle">
                                                            <div class="cap-date"> {{ date('M j, Y', strtotime($teck->created_at)) }}</div>
                                                            <div class="clearfix"></div>
                                                            <a href="{{ url('tech/'.$teck->id)}}">{!! substr(strip_tags($teck->title), 0, 90) !!} {{ strlen(strip_tags($teck->title)) > 90 ? "..." : ""  }}</a>
                                                        </div>
                                                    </div>
                                                    <figcaption>
                                                        <div class="toptext">
                                                            <p>{!! substr(strip_tags($teck->content), 0, 150) !!} {{ strlen(strip_tags($teck->content)) > 150 ? "..." : ""  }}</p>
                                                        </div>
                                                    </figcaption>
                                                </figure>
                                            </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div><!-- CATEGORY 2 END -->
                                
                            </div>
                        </div>                  
                    </div><!-- LEFT SIDEBAR END -->
                    
                    <div id="main-wrapper" class="clearfix">
                        <div class="theiaStickySidebar">
                            
                            <!-- BLOG POSTS START -->
                            <div class="post clearfix">
                                
                                <div class="latestpost">
                                    <h2 class="title">Technology Blog</h2>
                                </div>
                                
                                <div class="post-summary clearfix">
                                @foreach($technologys as $technology)
                                    <div class="image-thumbnail">
                                        <a href="{{ url('tech/'.$technology->id)}}"><img alt="" src="{{ asset('images/technology/' . $technology->image)}}" /></a>
                                    </div>
                                    <div class="clain"><a href="{{ url('tech/'.$technology->id)}}"><h2 class="post-title">{{ $technology->title }}.</h2></a>
                                        <div class="meta">{{ date('M j, Y', strtotime($technology->created_at)) }} -By the Nameof the person who spoke about it - 0 Comments</div>
                                        <div class="post-excerpt">
                                            <div class="post-excerpt-content">{!! substr(strip_tags($technology->content), 0, 350) !!} {{ strlen(strip_tags($technology->content)) > 350 ? "..." : ""  }}</div>
                                            <div class="read-more-link"><a href="{{ url('tech/'.$technology->id)}}">Read More</a></div>
                                        </div>
                                    </div>
                                   @endforeach 
                                </div> 
                            </div><!-- BLOG POSTS END -->
                            
                            <!-- PAGINATION START -->
                            <div class="pagenav">
                                <ul class="pagination">
                                    {{ $technologys->links() }}
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
                                        @foreach($post as $post)
                                            <li>
                                                <div class="item-content">
                                                    <div class="item-thumbnail">
                                                        <a href="{{ url('celebrities/'.$post->id)}}"><img alt="" src="{{ asset('images/artist/' . $post->image)}}"/></a>
                                                        <a href="{{ url('celebrities/'.$post->id)}}"><div class="overlay"></div></a>
                                                        <div class="item-title">
                                                            <a href="{{ url('celebrities/'.$post->id)}}">{!! substr(strip_tags($post->title), 0, 90) !!} {{ strlen(strip_tags($post->title)) > 90 ? "..." : ""  }}</a>
                                                        </div>
                                                    </div>
                                                    <div class="item-snippet">{!! substr(strip_tags($post->content), 0, 150) !!} {{ strlen(strip_tags($post->content)) > 150 ? "..." : ""  }}</div>
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
                                                  <a href="{{ url('jobb/'.$job->id)}}"><img alt=" " src="{{ asset('images/job/' . $job->image)}}"/></a>
                                                    <a href="{{ url('jobb/'.$job->id)}}"><div class="overlay"></div></a>
                                                </div>
                                                <figcaption>
                                                    <div class="toptext">
                                                        <div class="date-info clearfix">
                                                            <div class="cap-date">  14 Jan 2016</div>
                                                        </div>
                                                        <a href="{{ url('jobb/'.$job->id)}}">{!! substr(strip_tags($job->title), 0, 90) !!} {{ strlen(strip_tags($job->title)) > 90 ? "..." : ""  }}</a></div>
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
    </div><!-- HOMEPAGE CATEGORIES END -->
    
    <!-- RESPONSIVE AD START -->
    <div class="container">
        <div class="row">
            <div style="margin: 15px 0 10px; padding: 0;">
                <div style="background: #ddd; color: #bbbbbb; display: inline-block; font-family: &quot;roboto&quot; , sans-serif; font-size: 1.2rem; font-weight: 900; height: 30px; overflow: hidden; padding: 22px 0 15px; text-align: center; white-space: nowrap; width: 100%;">RESPONSIVE AD AREA</div>
            </div>
        </div>
    </div><!-- RESPONSIVE AD END -->    
@endsection