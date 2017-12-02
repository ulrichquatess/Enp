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
                                            
                                            <li>
                                                <figure>
                                                    <div class="topListimages"><a href="single.html"><img alt=" " src="{{ asset('assets/Blog/img/antique.jpg')}}"/></a>
                                                        <a href="single.html"><div class="overlay"></div></a>
                                                        <div class="cap-comment"><i class="fa fa-comment"></i> 3</div>
                                                        <div class="toptitle">
                                                            <div class="cap-date"> 12 Apr 2015</div>
                                                            <div class="clearfix"></div>
                                                            <a href="single.html">Nostro suavitate intellegam id mei, mea ex agam.</a>
                                                        </div>
                                                    </div>
                                                    <figcaption>
                                                        <div class="toptext">
                                                            <p>Lorem ipsum eu usu assum liberavisse, ut munere praesent complectitur mea. Sit an option maiorum principes. Ne per probo magna id...</p>
                                                        </div>
                                                    </figcaption>
                                                </figure>
                                            </li>
                                            
                                            <li>
                                                <figure>
                                                    <div class="topListimages"><a href="single.html"><img alt=" " src="{{ asset('assets/Blog/img/guitar.jpg')}}"/></a>
                                                        <a href="single.html"><div class="overlay"></div></a>
                                                        <div class="cap-comment"><i class="fa fa-comment"></i> 3</div>
                                                        <div class="toptitle">
                                                            <div class="cap-date"> 11 Apr 2015</div>
                                                            <div class="clearfix"></div>
                                                            <a href="single.html">Et eum aliquip iuvaret dignissim, dicant epicurei.</a>
                                                        </div>
                                                    </div>
                                                    <figcaption>
                                                        <div class="toptext">
                                                            <p>Nisl malis veritus pro no, pro an enim admodum mediocritatem. Ei his graeci option officiis, no oratio vocent efficiendi vix. Eu ...</p>
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
                                                    <div class="topListimages"><a href="single.html"><img alt=" " src="{{ asset('assets/Blog/img/pretty-woman.jpg')}}"/></a>
                                                        <a href="single.html"><div class="overlay"></div></a>
                                                        <div class="cap-comment"><i class="fa fa-comment"></i> 13</div>
                                                        <div class="toptitle">
                                                            <div class="cap-date"> 18 Apr 2015</div>
                                                            <div class="clearfix"></div>
                                                            <a href="single.html">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a>
                                                        </div>
                                                    </div>
                                                    <figcaption>
                                                        <div class="toptext">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut e...</p>
                                                        </div>
                                                    </figcaption>
                                                </figure>
                                            </li>
                                            
                                            <li>
                                                <figure>
                                                    <div class="topListimages"><a href="single.html"><img alt=" " src="{{ asset('assets/Blog/img/underwear.jpg')}}"/></a>
                                                        <a href="single.html"><div class="overlay"></div></a>
                                                        <div class="cap-comment"><i class="fa fa-comment"></i> 3</div>
                                                        <div class="toptitle">
                                                            <div class="cap-date"> 17 Apr 2015</div>
                                                            <div class="clearfix"></div>
                                                            <a href="single.html">This Is Going To Be A Decent Length Title With Little Text.</a>
                                                        </div>
                                                    </div>
                                                    <figcaption>
                                                        <div class="toptext">
                                                            <p>Lorem ipsum no has veniam elaboraret constituam, ne nibh posidonium vel. Has ad quaeque omittantur, malis abhorreant eam no, qui...</p>
                                                        </div>
                                                    </figcaption>
                                                </figure>
                                            </li>
                                            
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
                            
                            <!-- BLOG POSTS START -->
                            <div class="post clearfix">
                                
                                <div class="latestpost">
                                    <h2 class="title">Business Blog</h2>
                                </div>
                                
                                <div class="post-summary clearfix">
                                @foreach($businesses as $business)
                                    <div class="image-thumbnail">
                                        <a href="{{ url('bussi/'.$business->id)}}"><img alt="" src="{{ asset('images/business/' . $business->image)}}" /></a>
                                    </div>
                                    <div class="clain"><a href="{{ url('bussi/'.$business->id)}}"><h2 class="post-title">{{ $business->title }}.</h2></a>
                                        <div class="meta">{{ date('M j, Y', strtotime($business->created_at)) }} -By the Nameof the person who spoke about it - 0 Comments</div>
                                        <div class="post-excerpt">
                                            <div class="post-excerpt-content">{!! substr(strip_tags($business->content), 0, 350) !!} {{ strlen(strip_tags($business->content)) > 350 ? "..." : ""  }}</div>
                                            <div class="read-more-link"><a href="{{ url('bussi/'.$business->id)}}">Read More</a></div>
                                        </div>
                                    </div>
                                   @endforeach 
                                </div> 
                            </div><!-- BLOG POSTS END -->
                            
                            <!-- PAGINATION START -->
                            <div class="pagenav">
                                <ul class="pagination">
                                    {{ $businesses->links() }}
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
                                        
                                            <li>
                                                <div class="item-content">
                                                    <div class="item-thumbnail">
                                                        <a href="single.html"><img alt="" src="img/mobility.jpg"/></a>
                                                        <a href="single.html"><div class="overlay"></div></a>
                                                        <div class="item-title">
                                                            <a href="single.html">What to do Between Training Cycles</a>
                                                        </div>
                                                    </div>
                                                    <div class="item-snippet">You have two options. The first (and easiest) would be to use this period between marathon training cycles for active rest. Continue to trai...</div>
                                                </div>
                                            </li>
                                            
                                            <li>
                                                <div class="item-content">
                                                    <div class="item-thumbnail">
                                                        <a href="single.html"><img alt="" src="img/child.jpg" /></a>
                                                        <a href="single.html"><div class="overlay"></div></a>
                                                        <div class="item-title">
                                                            <a href="single.html">Ei his graeci option officiis, no oratio vocent efficiendi vix.</a>
                                                        </div>
                                                    </div>
                                                    <div class="item-snippet">Lorem ipsum eu usu assum liberavisse, ut munere praesent complectitur mea. Sit an option maiorum principes. Ne per probo magna idque, est ve...</div>
                                                </div>
                                            </li>

                                            <li>
                                                <div class="item-content">
                                                    <div class="item-thumbnail">
                                                        <a href="single.html"><img alt="" src="img/office.jpg" /></a>
                                                        <a href="single.html"><div class="overlay"></div></a>
                                                        <div class="item-title">
                                                            <a href="single.html">Ei his graeci option officiis, no oratio vocent efficiendi vix.</a>
                                                        </div>
                                                    </div>
                                                    <div class="item-snippet">Lorem ipsum eu usu assum liberavisse, ut munere praesent complectitur mea. Sit an option maiorum principes. Ne per probo magna idque, est ve...</div>
                                                </div>
                                            </li>
                                            
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
                                <h2 class="title">Category 16</h2>
                                <div class='cont topLists'>
                                    <ul class="topimages">
                                    
                                        <li>
                                            <figure>
                                                <div class="topListimages">
                                                  <a href="single.html"><img alt=" " src="img/ship.jpg"/></a>
                                                    <a href="single.html"><div class="overlay"></div></a>
                                                </div>
                                                <figcaption>
                                                    <div class="toptext">
                                                        <div class="date-info clearfix">
                                                            <div class="cap-date">  14 Jan 2016</div>
                                                            <div class="cap-comment"> <i class="fa fa-comment"></i> 3</div>
                                                        </div>
                                                        <a href="single.html">Women in Hollywood, according to new study</a></div>
                                                </figcaption>
                                            </figure>
                                        </li>
                                        
                                        <li>
                                            <figure>
                                                <div class="topListimages">
                                                  <a href="single.html"><img alt=" " src="img/kayak.jpg"/></a>
                                                    <a href="single.html"><div class="overlay"></div></a>
                                                </div>
                                                <figcaption>
                                                    <div class="toptext">
                                                        <div class="date-info clearfix">
                                                            <div class="cap-date">  13 Jan 2016</div>
                                                            <div class="cap-comment"> <i class="fa fa-comment"></i> 13</div>
                                                        </div>
                                                        <a href="single.html">The age of first-time mothers is rising faster in the US</a></div>
                                                </figcaption>
                                            </figure>
                                        </li>
                                        
                                        <li>
                                            <figure>
                                                <div class="topListimages">
                                                  <a href="single.html"><img alt=" " src="img/fiat-500.jpg"/></a>
                                                    <a href="single.html"><div class="overlay"></div></a>
                                                </div>
                                                <figcaption>
                                                    <div class="toptext">
                                                        <div class="date-info clearfix">
                                                            <div class="cap-date">  11 Jan 2016</div>
                                                            <div class="cap-comment"> <i class="fa fa-comment"></i> 1</div>
                                                        </div>
                                                        <a href="single.html">Baby brain doesn't exist say scientists</a></div>
                                                </figcaption>
                                            </figure>
                                        </li>
                                        
                                        <li>
                                            <figure>
                                                <div class="topListimages">
                                                  <a href="single.html"><img alt=" " src="img/resort.jpg"/></a>
                                                    <a href="single.html"><div class="overlay"></div></a>
                                                </div>
                                                <figcaption>
                                                    <div class="toptext">
                                                        <div class="date-info clearfix">
                                                            <div class="cap-date">  11 Jan 2016</div>
                                                            <div class="cap-comment"> <i class="fa fa-comment"></i> 18</div>
                                                        </div>
                                                        <a href="single.html">Oscar Oscar nominations to be announced</a></div>
                                                </figcaption>
                                            </figure>
                                        </li>
                                        
                                        <li>
                                            <figure>
                                                <div class="topListimages">
                                                  <a href="single.html"><img alt=" " src="img/guitarist.jpg"/></a>
                                                    <a href="single.html"><div class="overlay"></div></a>
                                                </div>
                                                <figcaption>
                                                    <div class="toptext">
                                                        <div class="date-info clearfix">
                                                            <div class="cap-date">  10 Jan 2016</div>
                                                            <div class="cap-comment"> <i class="fa fa-comment"></i> 15</div>
                                                        </div>
                                                        <a href="single.html">Friends cast back together for special</a></div>
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