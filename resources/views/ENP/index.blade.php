@extends('layouts.main')
@section('content')
    <!-- BIG SLIDER START -->
    <div class="container">
        <div class="row">
            <div class="fp-slider">
                <div class="fp-slides-container">
                    <div class="fp-slides slider-area" id="slider-area">
                        
                       <!-- FIRST SLIDER AREA START -->
						<div class="fp-slides-items">
							<div class="fp-thumbnail">
								<div class="wrapper">
									 @foreach($entrepreneurs as $entrepreneur)
									<div class="large-section">
										<a href="single.html"><img alt="" src="{{asset('images/entrepreneur-thumnail/'.$entrepreneur->image)}}" style="background-size: cover; background-position: center;"/></a>
										<a href="{{ url('entre/'.$entrepreneur->id)}}"><div class="overlay"></div></a>
										<div class="top-comment"> <i class="fa fa-comment"></i> 3</div>
										<div class="feat-cap">
											<ul class="cap-meta">
												<li class="cap-date"> {{ date( 'M j Y ', strtotime( $entrepreneur->updated_at ))}}</li>
											</ul>
											<div class="clearfix"></div>
											<a href="{{ url('entre/'.$entrepreneur->id)}}"><h3 class="post-title">{{ substr(strip_tags($entrepreneur->title), 0, 100) }} {{ strlen(strip_tags($entrepreneur->title)) > 1200 ? "..." : ""  }}</h3></a>
										</div>
									</div>
									@endforeach
								</div>
							
							</div>
							
							<div class="fp-content-wrap">
								<div class="fp-prev-next-wrap">
									<a class="fp-next" href="#fp-next"></a>
									<a class="fp-prev" href="#fp-prev"></a>
								</div>
							</div>
						</div><!-- FIRST SLIDER AREA END -->

						<!-- FIRST SLIDER AREA START -->
						<div class="fp-slides-items">
							<div class="fp-thumbnail">
								<div class="wrapper">
									 @foreach($update as $update)
									<div class="large-section">
										<a href="{{ url('entre/'.$update->id)}}"><img alt="" src="{{asset('images/entrepreneur-thumnail/'.$update->image)}}" style="background-size: cover; background-position: center;"/></a>
										<a href="{{ url('entre/'.$update->id)}}"><div class="overlay"></div></a>
										<div class="top-comment"> <i class="fa fa-comment"></i> 3</div>
										<div class="feat-cap">
											<ul class="cap-meta">
												<li class="cap-date"> {{ date( 'M j Y ', strtotime( $entrepreneur->updated_at ))}}</li>
											</ul>
											<div class="clearfix"></div>
											<a href="{{ url('entre/'.$update->id)}}"><h3 class="post-title">{{ substr(strip_tags($entrepreneur->title), 0, 100) }} {{ strlen(strip_tags($entrepreneur->title)) > 1200 ? "..." : ""  }}</h3></a>
										</div>
									</div>
									@endforeach
								</div>
							
							</div>
							
							<div class="fp-content-wrap">
								<div class="fp-prev-next-wrap">
									<a class="fp-next" href="#fp-next"></a>
									<a class="fp-prev" href="#fp-prev"></a>
								</div>
							</div>
						</div><!-- FIRST SLIDER AREA END -->
                    </div>
                </div>
            </div>          
        </div>
    </div><!-- BIG SLIDER END -->


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
                            
                            <!-- FEATURED POSTS START -->
                            <div class="featured-posts">
                            
                                <div class="slide-wrapper clearfix">
                                    <div class="slide">
                                        
                                        <!-- CATEGORY 3 START -->
                                        <div class="widget">
                                            <h2 class="title">Entrepreneur</h2>
                                            
                                            <div class="news_pictures">
                                                <ul class="news_pictures_list clearfix">
                                                  @foreach($entre as $entre)
                                                    <li>
                                                        <div class="thumb">
                                                            <a href="{{ url('entre/'.$entre->id)}}"><img alt=" " src="{{asset('images/entrepreneur-thumnail/'.$entre->image)}}"/></a>
                                                            <a href="{{ url('entre/'.$entre->id)}}"><div class="overlay"></div></a>
                                                            <div class="cap-comment"><i class="fa fa-comment"></i> 4</div>
                                                        </div>
                                                        <div class="clear"></div>
                                                        <a class="title-section" href="{{ url('entre/'.$entre->id)}}">
                                                            <div class="cap-date "> 11 Nov 2015</div>
                                                            <div class="clearfix"></div>
                                                            <div class="title">{{ substr(strip_tags($entre->title), 0, 100) }} {{ strlen(strip_tags($entre->title)) > 1200 ? "..." : ""  }}
                                                        </a>
                                                    </li>
                                                     @endforeach
                                                </ul>
                                               
                                            </div>
                                        </div><!-- CATEGORY 3 END -->

                                        <!-- RESPONSIVE AD START -->
                                <div style="margin-top: 25px; padding-bottom: 5px;">
                                    <div style="background: #ddd; color: #bbbbbb; display: inline-block; font-family: &quot;roboto&quot; , sans-serif; font-size: 1.2rem; font-weight: 900; height: 30px; overflow: hidden; padding: 22px 5% 15px; text-align: center; white-space: nowrap; width: 90%;">RESPONSIVE AD AREA</div>
                                </div><!-- RESPONSIVE AD END -->
                                        
                                        <!-- CATEGORY 4 START -->
                                        <div class="widget">
                                            <h2 class='title'> Entrepreneur & Bussiness</h2>
                                            <div class="magstyle clearfix">
                                                <div class="magstyle_wide left">
                                                    @foreach($singlebusiness as $singlebusiness)
                                                    <div class="thumb">
                                                        <a href="{{ url('bussi/'.$singlebusiness->id)}}"><img alt=" " src="{{asset('images/business/'.$singlebusiness->image)}}" /></a>
                                                        <a href="{{ url('bussi/'.$singlebusiness->id)}}"><div class="overlay"></div></a>
                                                    </div>
                                                    <div class="featuredPost lastPost">
                                                        <h3 class="postTitle"><a href="{{ url('bussi/'.$singlebusiness->id)}}">{{ substr(strip_tags($singlebusiness->title), 0, 50) }} {{ strlen(strip_tags($singlebusiness->title)) > 70 ? "..." : ""  }}</a></h3>
                                                        <div class="date-info clearfix">
                                                            <div class="cap-date">{{ date( 'M j Y ', strtotime( $singlebusiness->updated_at ))}}</div>
                                                            <div class="cap-comment"><i class="fa fa-comment"></i> 2</div>
                                                        </div>
                                                        <p>{{ substr(strip_tags($singlebusiness->content), 0, 190) }} {{ strlen(strip_tags($singlebusiness->content)) > 200 ? "..." : ""  }}</p>
                                                    </div>
                                                    @endforeach
                                                </div>
                                                <div class="magstyle_narrow right">
                                                    <div class="magstyle_narrow">
                                                        <ul>

                                                @foreach($business as $business)
                                                            <li>
                                                                <div class="thumb">
                                                                    <a href="{{ url('bussi/'.$business->id)}}"><img alt=" " src="{{ asset('images/business/' .$business->image) }}" /></a>
                                                                    <a href="{{ url('bussi/'.$business->id)}}"><div class="overlay"></div></a>
                                                                </div>
                                                                <div class="date-info clearfix">
                                                                    <div class="cap-date">{{ date( 'M j Y ', strtotime( $business->updated_at ))}}</div>
                                                                    <div class="cap-comment"><i class="fa fa-comment"></i> 1</div>
                                                                </div>
                                                                <div class="featuredTitle"><a href="{{ url('bussi/'.$business->id)}}">{{ substr(strip_tags($business->title), 0, 60) }} {{ strlen(strip_tags($business->title)) > 100 ? "..." : ""  }}</a></div>
                                                            </li>
                                                            
                                                           
                                                      @endforeach                                                                  
            				<!-- The Part Above Is use to add the businnes logic  -->
                                                            
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- CATEGORY 4 END -->
                                        
                                         <!-- RESPONSIVE AD START -->
                                <div style="padding: 5px 0 25px;">
                                    <div style="background: #ddd; color: #bbbbbb; display: inline-block; font-family: &quot;roboto&quot; , sans-serif; font-size: 1.2rem; font-weight: 900; height: 30px; overflow: hidden; padding: 22px 5% 15px; text-align: center; white-space: nowrap; width: 90%;">RESPONSIVE AD AREA</div>
                                </div><!-- RESPONSIVE AD END -->

                                       <!-- LATEST UPDATES START -->
                                        <div class="widget">
                                            <h2 class="title">Technology Updates</h2>
                                            <div id="featuredContent">
                                                <!-- FEATURED SLIDER BIG START -->
                                                <div class="sliderwrapper" id="featured-slider">
                                                    @foreach($techno as $techno)
                                                    <div class="contentdiv">
                                                        <div class="img-thumb">
                                                            <a href="{{ url('tech/'.$techno->id)}}"><img class="alignnone" alt=" " src="{{asset('images/technology/'.$techno->image)}}" /></a>
                                                            <a href="{{ url('tech/'.$techno->id)}}"><div class="overlay"></div></a>
                                                            <div class="cap-comment"> <i class="fa fa-comment"></i> 3</div>
                                                        </div>
                                                        <div class="sliderPostInfo">
                                                            <div class="featuredTitle">
                                                                <div class="cap-category">Entertainment</div>
                                                                <div class="clearfix"></div>
                                                                <a href="{{ url('tech/'.$techno->id)}}">{{ substr(strip_tags($techno->title), 0, 60) }} {{ strlen(strip_tags($techno->title)) > 100 ? "..." : ""  }}</a>
                                                            </div>
                                                        </div>
                                                    </div>  
                                                    @endforeach                                                  
                                                </div><!-- FEATURED SLIDER BIG END -->
                                                
                                                <!-- FEATURED SLIDER THUMBS START -->
                                                <div id="paginate-featured-slider" class="clearfix">
                                                    <ul>
                                                        @foreach($smalltechno as $smalltechno)
                                                        <li>
                                                            <div class="small-thumb">
                                                                <a class="toc" href="{{ url('tech/'.$smalltechno->id)}}"><img class="alignnone" alt="" src="{{asset('images/technology/'.$smalltechno->image)}}" /></a>
                                                            </div>
                                                        </li>
                                                        @endforeach
                                                    </ul>
                                                </div><!-- FEATURED SLIDER THUMBS END -->
                                                
                                            </div>
                                        </div><!-- LATEST UPDATES END -->
                                        
                                    </div>
                                </div>
                                
                                <!-- CATEGORY 5 START 
                                <div class="grid-left" id="col-1">
                                    <div class="widget clearfix">
                                        <h2 class="title">Category 5</h2>
                                        <div class='cont topLists'>
                                            <ul class="topimages">
                                            
                                                <li>
                                                    <figure>
                                                        <div class="topListimages">
                                                          <a href="single.html"><img alt=" " src="img/urban.jpg"/></a>
                                                            <a href="single.html"><div class="overlay"></div></a>
                                                        </div>
                                                        <figcaption>
                                                            <div class="toptext">
                                                                <div class="date-info clearfix">
                                                                    <div class="cap-date"> 2 Sep 2015</div>
                                                                    <div class="cap-comment"> <i class="fa fa-comment"></i> 2</div>
                                                                </div>
                                                                <a href="single.html">Ne per probo magna idque, est veniam exerci appareat no.</a>
                                                            </div>
                                                        </figcaption>
                                                    </figure>
                                                </li>
                                                
                                                <li>
                                                    <figure>
                                                        <div class="topListimages">
                                                          <a href="single.html"><img alt=" " src="img/taxi.jpg"/></a>
                                                            <a href="single.html"><div class="overlay"></div></a>
                                                        </div>
                                                        <figcaption>
                                                            <div class="toptext">
                                                                <div class="date-info clearfix">
                                                                    <div class="cap-date"> 7 May 2015</div>
                                                                    <div class="cap-comment"> <i class="fa fa-comment"></i> 13</div>
                                                                </div>
                                                                <a href="single.html">Albucius intellegam scripserit et cum, no mei porro tantas menandri.</a>
                                                            </div>
                                                        </figcaption>
                                                    </figure>
                                                </li>
                                                
                                                <li>
                                                    <figure>
                                                        <div class="topListimages">
                                                          <a href="single.html"><img alt=" " src="img/fresh.jpg"/></a>
                                                            <a href="single.html"><div class="overlay"></div></a>
                                                        </div>
                                                        <figcaption>
                                                            <div class="toptext">
                                                                <div class="date-info clearfix">
                                                                    <div class="cap-date"> 17 Apr 2015</div>
                                                                    <div class="cap-comment"> <i class="fa fa-comment"></i> 1</div>
                                                                </div>
                                                                <a href="single.html">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a>
                                                            </div>
                                                        </figcaption>
                                                    </figure>
                                                </li>
                                                
                                                <li>
                                                    <figure>
                                                        <div class="topListimages">
                                                          <a href="single.html"><img alt=" " src="img/demonstration.jpg"/></a>
                                                            <a href="single.html"><div class="overlay"></div></a>
                                                        </div>
                                                        <figcaption>
                                                            <div class="toptext">
                                                                <div class="date-info clearfix">
                                                                    <div class="cap-date"> 17 Apr 2015</div>
                                                                    <div class="cap-comment"> <i class="fa fa-comment"></i> 8</div>
                                                                </div>
                                                                <a href="single.html">Nam detraxit disputando efficiantur cu, nisl.</a>
                                                            </div>
                                                        </figcaption>
                                                    </figure>
                                                </li>
                                                
                                                <li>
                                                    <figure>
                                                        <div class="topListimages">
                                                          <a href="single.html"><img alt=" " src="img/beach.jpg"/></a>
                                                            <a href="single.html"><div class="overlay"></div></a>
                                                        </div>
                                                        <figcaption>
                                                            <div class="toptext">
                                                                <div class="date-info clearfix">
                                                                    <div class="cap-date"> 15 Apr 2015</div>
                                                                    <div class="cap-comment"> <i class="fa fa-comment"></i> 15</div>
                                                                </div>
                                                                <a href="single.html">Ei brute deserunt delicata nam, mundi moderatius ex quo.</a>
                                                            </div>
                                                        </figcaption>
                                                    </figure>
                                                </li>
                                                
                                            </ul>
                                        </div>
                                    </div>
                                </div>< CATEGORY 5 END -->
                                
                                <!-- CATEGORY 6 START 
                                <div class="grid-right" id="col-2">
                                    <div class="widget clearfix">
                                        <h2 class="title">Category 6</h2>
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
                                                                <a href="single.html">Women in Hollywood, according to new study</a>
                                                            </div>
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
                                                                <a href="single.html">The age of first-time mothers is rising faster in the US</a>
                                                            </div>
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
                                                                <a href="single.html">Oscar Oscar nominations to be announced</a>
                                                            </div>
                                                        </figcaption>
                                                    </figure>
                                                </li>
                                                
                                                <li>
                                                    <figure>
                                                        <div class="topListimages">
                                                          <a href="single.html"><img alt=" " src="img/taxi.jpg"/></a>
                                                            <a href="single.html"><div class="overlay"></div></a>
                                                        </div>
                                                        <figcaption>
                                                            <div class="toptext">
                                                                <div class="date-info clearfix">
                                                                    <div class="cap-date"> 7 May 2015</div>
                                                                    <div class="cap-comment"> <i class="fa fa-comment"></i> 13</div>
                                                                </div>
                                                                <a href="single.html">Albucius intellegam scripserit et cum, no mei porro tantas menandri.</a>
                                                            </div>
                                                        </figcaption>
                                                    </figure>
                                                </li>
                                                
                                                <li>
                                                    <figure>
                                                        <div class="topListimages">
                                                          <a href="single.html"><img alt=" " src="img/fresh.jpg"/></a>
                                                            <a href="single.html"><div class="overlay"></div></a>
                                                        </div>
                                                        <figcaption>
                                                            <div class="toptext">
                                                                <div class="date-info clearfix">
                                                                    <div class="cap-date"> 17 Apr 2015</div>
                                                                    <div class="cap-comment"> <i class="fa fa-comment"></i> 1</div>
                                                                </div>
                                                                <a href="single.html">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a>
                                                            </div>
                                                        </figcaption>
                                                    </figure>
                                                </li>
                                                
                                            </ul>
                                        </div>
                                    </div>
                                </div> CATEGORY 6 END -->
                                
                                <!-- CATEGORY 7 START 
                                <div class="news_pictures">
                                    <div class="widget">
                                        <h2 class="title">Category 7</h2>
                                        <ul class="news_pictures_list clearfix">
                                            <li>
                                                <a href="single.html"><img alt="" src="img/child.jpg" /></a>
                                                <a href="single.html"><div class="overlay"></div></a>
                                                <div class="cap-comment"><i class="fa fa-comment"></i> 2</div>
                                                <a class="title-section" href="single.html">
                                                    <div class="cap-date"> 5 Feb 2015</div>
                                                    <div class="clearfix"></div>
                                                    <div class="title">Ei his graeci option officiis, no oratio vocent efficiendi vix.</div>
                                                </a>
                                            </li>
                                            
                                            <li>
                                                <a href="single.html"><img alt="" src="img/work-boots.jpg" /></a>
                                                <a href="single.html"><div class="overlay"></div></a>
                                                <div class="cap-comment"><i class="fa fa-comment"></i> 1</div>
                                                <a class="title-section" href="single.html">
                                                    <div class="cap-date"> 5 Feb 2015</div>
                                                    <div class="clearfix"></div>
                                                    <div class="title">Nam iusto delicata ne, eam dolore singulis maiestatis ex.</div>
                                                </a>
                                            </li>
                                            
                                            <li>
                                                <a href="single.html"><img alt="" src="img/pretty-woman.jpg" /></a>
                                                <a href="single.html"><div class="overlay"></div></a>
                                                <div class="cap-comment"><i class="fa fa-comment"></i> 13</div>
                                                <a class="title-section" href="single.html">
                                                    <div class="cap-date"> 5 Feb 2016</div>
                                                    <div class="clearfix"></div>
                                                    <div class="title">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</div>
                                                </a>
                                            </li>
                                            
                                            <li>
                                                <a href="single.html"><img alt="" src="img/artisan.jpg" /></a>
                                                <a href="single.html"><div class="overlay"></div></a>
                                                <div class="cap-comment"><i class="fa fa-comment"></i> 16</div>
                                                <a class="title-section" href="single.html">
                                                    <div class="cap-date"> 17 Apr 2015</div>
                                                    <div class="clearfix"></div>
                                                    <div class="title">Lorem ipsum no has veniam elaboraret constituam.</div>
                                                </a>
                                            </li>
                                            
                                            <li>
                                                <a href="single.html"><img alt="" src="img/underwear.jpg" /></a>
                                                <a href="single.html"><div class="overlay"></div></a>
                                                <div class="cap-comment"><i class="fa fa-comment"></i> 3</div>
                                                <a class="title-section" href="single.html">
                                                    <div class="cap-date"> 17 Apr 2015</div>
                                                    <div class="clearfix"></div>
                                                    <div class="title">This Is Going To Be A Decent Length Title With Little Text.</div>
                                                </a>
                                            </li>
                                            
                                            <li>
                                                <a href="single.html"><img alt="" src="img/boy.jpg" /></a>
                                                <a href="single.html"><div class="overlay"></div></a>
                                                <div class="cap-comment"><i class="fa fa-comment"></i> 6</div>
                                                <a class="title-section" href="single.html">
                                                    <div class="cap-date"> 6 Jan 2015</div>
                                                    <div class="clearfix"></div>
                                                    <div class="title">Et eum aliquip iuvaret dignissim, dicant epicurei vituperata vim eu.</div>
                                                </a>
                                            </li>
                                            
                                        </ul>
                                    </div>
                                </div> CATEGORY 7 END -->
                                
                                <!-- CATEGORY 8 START 
                                <div class="widget">
                                    <h2 class="title">Category 8</h2>
                                    <div class="magstyle clearfix">
                                    
                                        <div class="magstyle_wide left">
                                            <div class="thumb">
                                                <a href="single.html"><img alt=" " src="img/fresh.jpg" /></a>
                                                <a href="single.html"><div class="overlay"></div></a>
                                            </div>
                                            <div class="featuredPost lastPost">
                                                <h3 class="postTitle"><a href="single.html">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a></h3>
                                                <div class="date-info clearfix">
                                                    <div class="cap-author"><i class="fa fa-pencil-square-o"></i> FBTemplates</div>
                                                    <div class="cap-date"> 17 Apr 2015</div>
                                                    <div class="cap-comment"><i class="fa fa-comment"></i> 2</div>
                                                </div>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut...</p>
                                            </div>
                                        </div>
                                        <div class="magstyle_narrow right">
                                            <ul>
                                            
                                                <li>
                                                    <div class="thumb">
                                                        <a href="single.html"><img alt=" " src="img/drip.jpg" /></a>
                                                        <a href="single.html"><div class="overlay"></div></a>
                                                    </div>
                                                    <div class="date-info clearfix">
                                                        <div class="cap-date"> 16 Apr 2015</div>
                                                        <div class="cap-comment"><i class="fa fa-comment"></i> 1</div>
                                                    </div>
                                                    <div class="featuredTitle"><a href="single.html">Ad pro erat quaeque suscipiantur, vis alia pertinacia.</a></div>
                                                </li>
                                                
                                                <li>
                                                    <div class="thumb">
                                                        <a href="single.html"><img alt=" " src="img/breakfast.jpg" /></a>
                                                        <a href="single.html"><div class="overlay"></div></a>
                                                    </div>
                                                    <div class="date-info clearfix">
                                                        <div class="cap-date"> 15 Apr 2015</div>
                                                        <div class="cap-comment"><i class="fa fa-comment"></i> 3</div>
                                                    </div>
                                                    <div class="featuredTitle"><a href="single.html">Mea ei solet decore quaestio, nam an dolores.</a></div>
                                                </li>
                                                
                                                <li>
                                                    <div class="thumb">
                                                        <a href="single.html"><img alt=" " src="img/dessert.jpg" /></a>
                                                        <a href="single.html"><div class="overlay"></div></a>
                                                    </div>
                                                    <div class="date-info clearfix">
                                                        <div class="cap-date"> 14 Apr 2015</div>
                                                        <div class="cap-comment"><i class="fa fa-comment"></i> 10</div>
                                                    </div>
                                                    <div class="featuredTitle"><a href="single.html">Albucius intellegam scripserit et cum, no mei porro tantas</a></div>
                                                </li>
                                                
                                                <li>
                                                    <div class="thumb">
                                                        <a href="single.html"><img alt=" " src="img/christmas.jpg" /></a>
                                                        <a href="single.html"><div class="overlay"></div></a>
                                                    </div>
                                                    <div class="date-info clearfix">
                                                        <div class="cap-date"> 13 Apr 2015</div>
                                                        <div class="cap-comment"><i class="fa fa-comment"></i> 1</div>
                                                    </div>
                                                    <div class="featuredTitle"><a href="single.html">Keeping The Title Length Equal For Home</a></div>
                                                </li>
                                                
                                            </ul>
                                        </div>
                                    </div>
                                </div> CATEGORY 8 END -->
                                
                                
                                
                                <div class="2-column clearfix">
                                
                                    <!-- CATEGORY 9 START 
                                    <div class="grid-left om" id="col-3">
                                        <div class="widget">
                                            <div class="magstyle clearfix">
                                                <h2 class="title">Category 9</h2>
                                                <div class="magstyle_wide left">
                                                    <div class="thumb">
                                                        <a href="single.html"><img alt="" src="img/resort.jpg" /></a>
                                                        <a href="single.html"><div class="overlay"></div></a>
                                                        <h3 class="postTitle"><a href="single.html">Oscar Oscar nominations to be announced</a></h3></div>
                                                    <div class="featuredPost lastPost">
                                                        <div class="date-info clearfix">
                                                            <div class="cap-author"><i class="fa fa-pencil-square-o"></i> FBTemplates</div>
                                                            <div class="cap-date"> 14 Jan 2016</div>
                                                            <div class="cap-comment"><i class="fa fa-comment"></i> 10</div>
                                                        </div>
                                                        <p>Ei brute deserunt delicata nam, mundi moderatius ex quo. Id per modo molestie lobortis, perfecto corrumpit omittantur nec an. Albucius intellegam scripserit et cum, no mei porro tantas menandri...</p>
                                                    </div>
                                                </div>
                                                <div class="magstyle_narrow right">
                                                    <ul>
                                                        <li>
                                                            <div class="thumb">
                                                                <a href="single.html"><img alt=" " src="img/hotel.jpg" /></a>
                                                                <a href="single.html"><div class="overlay"></div></a>
                                                            </div>
                                                            <div class="date-info clearfix">
                                                                <div class="cap-date"> 16 Apr 2015</div>
                                                                <div class="cap-comment"><i class="fa fa-comment"></i> 2</div>
                                                            </div>
                                                            <div class="featuredTitle"><a href="single.html">Ei brute deserunt delicata nam, mundi moderatius ex quo.</a></div>
                                                        </li>

                                                        <li>
                                                            <div class="thumb">
                                                                <a href="single.html"><img alt=" " src="img/pool.jpg" /></a>
                                                                <a href="single.html"><div class="overlay"></div></a>
                                                            </div>
                                                            <div class="date-info clearfix">
                                                                <div class="cap-date"> 15 Apr 2015</div>
                                                                <div class="cap-comment"><i class="fa fa-comment"></i> 3</div>
                                                            </div>
                                                            <div class="featuredTitle"><a href="single.html">Nostro suavitate intellegam id mei, mea ex agam.</a></div>
                                                        </li>

                                                        <li>
                                                            <div class="thumb">
                                                                <a href="single.html"><img alt=" " src="img/beach.jpg" /></a>
                                                                <a href="single.html"><div class="overlay"></div></a>
                                                            </div>
                                                            <div class="date-info clearfix">
                                                                <div class="cap-date"> 14 Apr 2015</div>
                                                                <div class="cap-comment"><i class="fa fa-comment"></i> 4</div>
                                                            </div>
                                                            <div class="featuredTitle"><a href="single.html">Ei brute deserunt delicata nam, mundi moderatius ex quo.</a></div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div> CATEGORY 9 END -->
                                    
                                    <!-- CATEGORY 10 START 
                                    <div class="grid-right om" id="col-4">
                                        <div class="widget">
                                            <div class="magstyle clearfix">
                                                <h2 class="title">Category 10</h2>
                                                <div class="magstyle_wide left">
                                                    <div class="thumb">
                                                        <a href="single.html"><img alt="" src="img/office.jpg" /></a>
                                                        <a href="single.html"><div class="overlay"></div></a>
                                                        <h3 class="postTitle"><a href="single.html">Ei his graeci option officiis, no oratio vocent efficiendi vix.</a></h3></div>
                                                    <div class="featuredPost lastPost">
                                                        <div class="date-info clearfix">
                                                            <div class="cap-author"><i class="fa fa-pencil-square-o"></i> FBTemplates</div>
                                                            <div class="cap-date"> 5 Feb 2015</div>
                                                            <div class="cap-comment"><i class="fa fa-comment"></i> 7</div>
                                                        </div>
                                                        <p>Lorem ipsum eu usu assum liberavisse, ut munere praesent complectitur mea. Sit an option maiorum principes. Ne per probo magna idque, est veniam exerci appareat no...</p>
                                                    </div>
                                                </div>
                                                <div class="magstyle_narrow right">
                                                    <ul>
                                                        <li>
                                                            <div class="thumb">
                                                                <a href="single.html"><img alt=" " src="img/ipad.jpg" /></a>
                                                                <a href="single.html"><div class="overlay"></div></a>
                                                            </div>
                                                            <div class="date-info clearfix">
                                                                <div class="cap-date"> 4 Feb 2015</div>
                                                                <div class="cap-comment"><i class="fa fa-comment"></i> 1</div>
                                                            </div>
                                                            <div class="featuredTitle"><a href="single.html">Pro hinc aperiri fabulas ut, probo tractatos euripidis an vis, ignota oblique ut nec.</a></div>
                                                        </li>

                                                        <li>
                                                            <div class="thumb">
                                                                <a href="single.html"><img alt=" " src="img/work.jpg" /></a>
                                                                <a href="single.html"><div class="overlay"></div></a>
                                                            </div>
                                                            <div class="date-info clearfix">
                                                                <div class="cap-date"> 3 Feb 2015</div>
                                                                <div class="cap-comment"><i class="fa fa-comment"></i> 19</div>
                                                            </div>
                                                            <div class="featuredTitle"><a href="single.html">Nam iusto delicata ne, eam dolore singulis maiestatis ex.</a></div>
                                                        </li>

                                                        <li>
                                                            <div class="thumb">
                                                                <a href="single.html"><img alt=" " src="img/mac.jpg" /></a>
                                                                <a href="single.html"><div class="overlay"></div></a>
                                                            </div>
                                                            <div class="date-info clearfix">
                                                                <div class="cap-date"> 1 Feb 2015</div>
                                                                <div class="cap-comment"><i class="fa fa-comment"></i> 0</div>
                                                            </div>
                                                            <div class="featuredTitle"><a href="single.html">Duo ex velit vocibus, lucilius quaestio his eu.</a></div>
                                                        </li>
                                                    </ul>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div> CATEGORY 10 END -->
                                    
                                </div>
                                
                                <!-- CATEGORY 11 START 
                                <div class="widget clearfix">
                                    <div id="small-slider-area" class="small-slider-area clearfix">
                                        <h2 class="title">Category 11</h2>
                                        
                                        <div id="small-large-section">
                                            <a href="single.html"><img alt="" src="img/girl.jpg" /></a>
                                            <a href="single.html"><div class="overlay"></div></a>
                                            <div class="cap-comment"><i class="fa fa-comment"></i> 3</div>
                                            <div class="small-feat-cap">
                                                <ul class="cap-meta">
                                                    <li class="cap-date">13 Jan 2016</li>
                                                </ul>
                                                <div class="clearfix"></div>
                                                <a href="single.html"><h3 class="post-title">How can Build a Better Connection Between the Mind and Body</h3></a>
                                            </div>
                                        </div>
                                        
                                        <div id="small-small-section-wrap">
                                        
                                            <div class="small-small-section small-top-small">
                                                <a href="single.html"><img alt="" src="img/woman.jpg" /></a>
                                                <a href="single.html"><div class="overlay"></div></a>
                                                <div class="cap-comment"><i class="fa fa-comment"></i> 2</div>
                                                <div class="small-feat-cap">
                                                    <ul class="cap-meta">
                                                        <li class="cap-date">12 Jan 2016</li>
                                                    </ul>
                                                    <div class="clearfix"></div>
                                                    <a href="single.html"><h4 class="post-title">How Triathletes Can Maximize Their Swim Block Training</h4></a>
                                                </div>
                                            </div>
                                            
                                            <div class="small-small-section small-top-small">
                                                <a href="single.html"><img alt="" src="img/mobility.jpg" /></a>
                                                <a href="single.html"><div class="overlay"></div></a>
                                                <div class="cap-comment"><i class="fa fa-comment"></i> 3</div>
                                                <div class="small-feat-cap">
                                                    <ul class="cap-meta">
                                                        <li class="cap-date">11 Jan 2016</li>
                                                    </ul>
                                                    <div class="clearfix"></div>
                                                    <a href="single.html"><h4 class="post-title">What to do Between Training Cycles</h4></a>
                                                </div>
                                            </div>
                                            
                                            <div class="small-small-section small-top-small">
                                                <a href="single.html"><img alt="" src="img/bodybuilder.jpg" /></a>
                                                <a href="single.html"><div class="overlay"></div></a>
                                                <div class="cap-comment"><i class="fa fa-comment"></i> 12</div>
                                                <div class="small-feat-cap">
                                                    <ul class="cap-meta">
                                                        <li class="cap-date">10 Jan 2016</li>
                                                    </ul>
                                                    <div class="clearfix"></div>
                                                    <a href="single.html"><h4 class="post-title">Experiencing three types of autonomous driving in three weeks</h4></a>
                                                </div>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div> CATEGORY 11 END -->
                                
                        
                                
                                <!-- CATEGORY 12 START 
                                <div class="storage om">
                                    <div class="widget">
                                        <h2 class="title">Category 12</h2>
                                        <div class="cont topLists clearfix">
                                            <ul class="topimages">
                                        
                                                <li>
                                                    <figure>
                                                        <div class="topListimages">
                                                            <a href="single.html"><img alt="" src="img/guitarist.jpg" /></a>
                                                            <a href="single.html"><div class="overlay"></div></a>
                                                        </div>
                                                        <figcaption>
                                                            <div class="toptext"><a href="single.html">Friends cast back together for special</a>
                                                                <div class="date-info clearfix">
                                                                    <div class="cap-author"><i class="fa fa-pencil-square-o"></i> FBTemplates</div>
                                                                    <div class="cap-date"> 14 Jan 2016</div>
                                                                    <div class="cap-comment"><i class="fa fa-comment"></i> 2</div>
                                                                </div>
                                                                <p>Ei brute deserunt delicata nam, mundi moderatius ex quo. Id per modo molestie lobortis, perfecto corrumpit omittantur nec an. Albucius intellegam scripserit et cum, no mei porro tantas menandri. Nam detraxit disputando efficiantur cu, nisl petentium...</p>
                                                            </div>
                                                        </figcaption>
                                                    </figure>
                                                </li>
                                                
                                                <li>
                                                    <figure>
                                                        <div class="topListimages">
                                                            <a href="single.html"><img alt="" src="img/guitar-1.jpg" /></a>
                                                            <a href="single.html"><div class="overlay"></div></a>
                                                        </div>
                                                        <figcaption>
                                                            <div class="toptext"><a href="single.html">Lorem ipsum eu usu assum liberavisse, ut munere praesent complectitur mea.</a>
                                                                <div class="date-info clearfix">
                                                                    <div class="cap-author"><i class="fa fa-pencil-square-o"></i> FBTemplates</div>
                                                                    <div class="cap-date"> 13 Jan 2016</div>
                                                                    <div class="cap-comment"><i class="fa fa-comment"></i> 1</div>
                                                                </div>
                                                                <p>Lorem ipsum eu usu assum liberavisse, ut munere praesent complectitur mea. Sit an option maiorum principes. Ne per probo magna idque, est veniam exerci appareat no. Sit at amet propriae intellegebat, natum iusto forensibus duo ut. Pro hinc aperiri...</p>
                                                            </div>
                                                        </figcaption>
                                                    </figure>
                                                </li>
                                                
                                                <li>
                                                    <figure>
                                                        <div class="topListimages">
                                                            <a href="single.html"><img alt="" src="img/guitar.jpg" /></a>
                                                            <a href="single.html"><div class="overlay"></div></a>
                                                        </div>
                                                        <figcaption>
                                                            <div class="toptext"><a href="single.html">Et eum aliquip iuvaret dignissim, dicant epicurei.</a>
                                                                <div class="date-info clearfix">
                                                                    <div class="cap-author"><i class="fa fa-pencil-square-o"></i> FBTemplates</div>
                                                                    <div class="cap-date"> 10 Jan 2016</div>
                                                                    <div class="cap-comment"><i class="fa fa-comment"></i> 7</div>
                                                                </div>
                                                                <p>Nisl malis veritus pro no, pro an enim admodum mediocritatem. Ei his graeci option officiis, no oratio vocent efficiendi vix. Eu prima eleifend volutpat ius, mel atomorum omittantur te, quo debet possim habemus no. Et eum aliquip iuvaret dignissim...</p>
                                                            </div>
                                                        </figcaption>
                                                    </figure>
                                                </li>
                                                
                                            </ul>
                                        </div>
                                    </div>
                                </div> CATEGORY 12 END -->
                                
                                <!-- CATEGORY 13 START 
                                <div class="grid-left om" id="col-5">
                                    <div class="widget">
                                        <div class="magstyle clearfix">
                                            <h2 class="title">Category 13</h2>
                                            <div class="magstyle_wide left">
                                                <div class="thumb">
                                                    <a href="single.html"><img alt="" src="img/fresh.jpg" /></a>
                                                    <a href="single.html">
                                                        <div class="overlay"></div>
                                                    </a>
                                                    <h3 class="postTitle"><a href="single.html">Oscar Oscar nominations to be announced</a></h3></div>
                                                <div class="featuredPost lastPost">
                                                    <div class="date-info clearfix-1">
                                                        <div class="cap-author"><i class="fa fa-pencil-square-o"></i> FBTemplates</div>
                                                        <div class="cap-date"> 14 Jan 2016</div>
                                                        <div class="cap-comment"><i class="fa fa-comment"></i> 10</div>
                                                    </div>
                                                    <p>Ei brute deserunt delicata nam, mundi moderatius ex quo. Id per modo molestie lobortis, perfecto corrumpit omittantur nec an. Albucius intellegam scripserit et cum, no mei porro tantas menandri...</p>
                                                </div>
                                            </div>
                                            <div class="magstyle_narrow right">
                                                <ul>
                                                    <li>
                                                        <div class="thumb">
                                                            <a href="single.html"><img alt=" " src="img/hotel.jpg" /></a>
                                                            <a href="single.html">
                                                                <div class="overlay"></div>
                                                            </a>
                                                        </div>
                                                        <div class="date-info clearfix-1">
                                                            <div class="cap-date"> 16 Apr 2015</div>
                                                            <div class="cap-comment"><i class="fa fa-comment"></i> 2</div>
                                                        </div>
                                                        <div class="featuredTitle"><a href="single.html">Ei brute deserunt delicata nam, mundi moderatius ex quo.</a></div>
                                                    </li>

                                                    <li>
                                                        <div class="thumb">
                                                            <a href="single.html"><img alt=" " src="img/pool.jpg" /></a>
                                                            <a href="single.html">
                                                                <div class="overlay"></div>
                                                            </a>
                                                        </div>
                                                        <div class="date-info clearfix-1">
                                                            <div class="cap-date"> 15 Apr 2015</div>
                                                            <div class="cap-comment"><i class="fa fa-comment"></i> 3</div>
                                                        </div>
                                                        <div class="featuredTitle"><a href="single.html">Nostro suavitate intellegam id mei, mea ex agam.</a></div>
                                                    </li>

                                                    <li>
                                                        <div class="thumb">
                                                            <a href="single.html"><img alt=" " src="img/beach.jpg" /></a>
                                                            <a href="single.html">
                                                                <div class="overlay"></div>
                                                            </a>
                                                        </div>
                                                        <div class="date-info clearfix-1">
                                                            <div class="cap-date"> 14 Apr 2015</div>
                                                            <div class="cap-comment"><i class="fa fa-comment"></i> 4</div>
                                                        </div>
                                                        <div class="featuredTitle"><a href="single.html">Ei brute deserunt delicata nam, mundi moderatius ex quo.</a></div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div> CATEGORY 13 END -->
                                
                                <!-- CATEGORY 14 START 
                                <div class="grid-right om" id="col-6">
                                    <div class="widget clearfix">
                                        <div class="magstyle clearfix">
                                            <h2 class="title">Category 14</h2>
                                            <div class="magstyle_wide left">
                                                <div class="thumb">
                                                    <a href="single.html"><img alt="" src="img/breakfast.jpg" /></a>
                                                    <a href="single.html">
                                                        <div class="overlay"></div>
                                                    </a>
                                                    <h3 class="postTitle"><a href="single.html">Ei his graeci option officiis, no oratio vocent efficiendi vix.</a></h3></div>
                                                <div class="featuredPost lastPost">
                                                    <div class="date-info clearfix">
                                                        <div class="cap-author"><i class="fa fa-pencil-square-o"></i> FBTemplates</div>
                                                        <div class="cap-date"> 5 Feb 2015</div>
                                                        <div class="cap-comment"><i class="fa fa-comment"></i> 7</div>
                                                    </div>
                                                    <p>Lorem ipsum eu usu assum liberavisse, ut munere praesent complectitur mea. Sit an option maiorum principes. Ne per probo magna idque, est veniam exerci appareat no...</p>
                                                </div>
                                            </div>
                                            <div class="magstyle_narrow right">
                                                <ul>
                                                    <li>
                                                        <div class="thumb">
                                                            <a href="single.html"><img alt=" " src="img/ipad.jpg" /></a>
                                                            <a href="single.html">
                                                                <div class="overlay"></div>
                                                            </a>
                                                        </div>
                                                        <div class="date-info clearfix">
                                                            <div class="cap-date"> 4 Feb 2015</div>
                                                            <div class="cap-comment"><i class="fa fa-comment"></i> 1</div>
                                                        </div>
                                                        <div class="featuredTitle"><a href="single.html">Pro hinc aperiri fabulas ut, probo tractatos euripidis an vis, ignota oblique ut nec.</a></div>
                                                    </li>

                                                    <li>
                                                        <div class="thumb">
                                                            <a href="single.html"><img alt=" " src="img/work.jpg" /></a>
                                                            <a href="single.html">
                                                                <div class="overlay"></div>
                                                            </a>
                                                        </div>
                                                        <div class="date-info clearfix">
                                                            <div class="cap-date"> 3 Feb 2015</div>
                                                            <div class="cap-comment"><i class="fa fa-comment"></i> 19</div>
                                                        </div>
                                                        <div class="featuredTitle"><a href="single.html">Nam iusto delicata ne, eam dolore singulis maiestatis ex.</a></div>
                                                    </li>

                                                    <li>
                                                        <div class="thumb">
                                                            <a href="single.html"><img alt=" " src="img/mac.jpg" /></a>
                                                            <a href="single.html">
                                                                <div class="overlay"></div>
                                                            </a>
                                                        </div>
                                                        <div class="date-info clearfix">
                                                            <div class="cap-date"> 1 Feb 2015</div>
                                                            <div class="cap-comment"><i class="fa fa-comment"></i> 0</div>
                                                        </div>
                                                        <div class="featuredTitle"><a href="single.html">Duo ex velit vocibus, lucilius quaestio his eu.</a></div>
                                                    </li>
                                                </ul>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div> CATEGORY 14 END -->
                                
                                <!-- CATEGORY 15 START 
                                <div id="carousel-wrapper" class="clearfix">
                                    <div class="car">
                                        <div class="widget">
                                            <div id="carousel">
                                                <h2 class="title">Category 15</h2>
                                                <div id="previous_button"></div>
                                                <div id="next_button"></div>
                                                <div class="widget-content">
                                                    <div class="content">
                                                        <ul>
                                                            <li>
                                                                <div class="thumb">
                                                                    <a href="single.html"><img class="Thumbnail thumbnail carousel" alt="" src="img/child.jpg" /></a>
                                                                    <a class="slider_title" href="single.html">Ei his graeci option officiis, no oratio vocent efficiendi vix.</a>
                                                                    <a href="single.html"><div class="overlay"></div></a>
                                                                </div>
                                                                <div class="feat-cap clearfix">
                                                                    <div class="date-info">
                                                                        <div class="cap-date"> 5 Feb 2016</div>
                                                                        <div class="cap-comment"> <i class="fa fa-comment"></i> 3</div>
                                                                    </div>
                                                                    <div class="clearfix"></div>
                                                                    <p>Lorem ipsum eu usu assum liberavisse, ut munere praesent complectitur mea. Sit an option maiorum...</p>
                                                                </div>
                                                            </li>
                                                            
                                                            <li>
                                                                <div class="thumb">
                                                                    <a href="single.html"><img class="Thumbnail thumbnail carousel" alt="" src="img/work-boots.jpg" /></a>
                                                                    <a class="slider_title" href="single.html">Nam iusto delicata ne, eam dolore singulis maiestatis ex.</a>
                                                                    <a href="single.html"><div class="overlay"></div></a>
                                                                </div>
                                                                <div class="feat-cap clearfix">
                                                                    <div class="date-info">
                                                                        <div class="cap-date"> 4 Feb 2016</div>
                                                                        <div class="cap-comment"> <i class="fa fa-comment"></i> 11</div>
                                                                    </div>
                                                                    <div class="clearfix"></div>
                                                                    <p>Lorem ipsum eu usu assum liberavisse, ut munere praesent complectitur mea. Sit an option maiorum...</p>
                                                                </div>
                                                            </li>
                                                            
                                                            <li>
                                                                <div class="thumb">
                                                                    <a href="single.html"><img class="Thumbnail thumbnail carousel" alt="" src="img/pretty-woman.jpg" /></a>
                                                                    <a class="slider_title" href="single.html">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a>
                                                                    <a href="single.html"><div class="overlay"></div></a>
                                                                </div>
                                                                <div class="feat-cap clearfix">
                                                                    <div class="date-info">
                                                                        <div class="cap-date"> 3 Feb 2016</div>
                                                                        <div class="cap-comment"> <i class="fa fa-comment"></i> 1</div>
                                                                    </div>
                                                                    <div class="clearfix"></div>
                                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labor...</p>
                                                                </div>
                                                            </li>
                                                            
                                                            <li>
                                                                <div class="thumb">
                                                                    <a href="single.html"><img class="Thumbnail thumbnail carousel" alt="" src="img/artisan.jpg" /></a>
                                                                    <a class="slider_title" href="single.html">Lorem ipsum no has veniam elaboraret constituam.</a>
                                                                    <a href="single.html"><div class="overlay"></div></a>
                                                                </div>
                                                                <div class="feat-cap clearfix">
                                                                    <div class="date-info">
                                                                        <div class="cap-date"> 2 Feb 2016</div>
                                                                        <div class="cap-comment"> <i class="fa fa-comment"></i> 5</div>
                                                                    </div>
                                                                    <div class="clearfix"></div>
                                                                    <p>Ei brute deserunt delicata nam, mundi moderatius ex quo. Id per modo molestie lobortis, perfecto corrumpit...</p>
                                                                </div>
                                                            </li>
                                                            
                                                            <li>
                                                                <div class="thumb">
                                                                    <a href="single.html"><img class="Thumbnail thumbnail carousel" alt="" src="img/underwear.jpg" /></a>
                                                                    <a class="slider_title" href="single.html">This Is Going To Be A Decent Length Title With Little Text.</a>
                                                                    <a href="single.html"><div class="overlay"></div></a>
                                                                </div>
                                                                <div class="feat-cap clearfix">
                                                                    <div class="date-info">
                                                                        <div class="cap-date"> 2 Feb 2016</div>
                                                                        <div class="cap-comment"> <i class="fa fa-comment"></i> 9</div>
                                                                    </div>
                                                                    <div class="clearfix"></div>
                                                                    <p>Lorem ipsum no has veniam elaboraret constituam, ne nibh posidonium vel. Has ad quaeque omittantur...</p>
                                                                </div>
                                                            </li>
                                                            
                                                            <li>
                                                                <div class="thumb">
                                                                    <a href="single.html"><img class="Thumbnail thumbnail carousel" alt="" src="img/boy.jpg" /></a>
                                                                    <a class="slider_title" href="single.html">Et eum aliquip iuvaret dignissim, dicant epicurei vituperata vim eu.</a>
                                                                    <a href="single.html"><div class="overlay"></div></a>
                                                                </div>
                                                                <div class="feat-cap clearfix">
                                                                    <div class="date-info">
                                                                        <div class="cap-date"> 1 Feb 2016</div>
                                                                        <div class="cap-comment"> <i class="fa fa-comment"></i> 3</div>
                                                                    </div>
                                                                    <div class="clearfix"></div>
                                                                    <p>Lorem ipsum no has veniam elaboraret constituam, ne nibh posidonium vel. Has ad quaeque omittantur...</p>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div> CATEGORY 15 END -->
                                
                            </div><!-- FEATURED POSTS END -->
                            
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
                            <div class="widget clearfix om">
                                <h2 class="title">SPONSOR</h2>
                                <div style="width: 300px; height: 250px; background: #ddd; text-align: center; display: inline-block; color: #bbb; font-family: 'Roboto', sans-serif; font-weight: 900; font-size: 1.2rem; white-space: nowrap; padding: 0; overflow: hidden; line-height: 250px;">AD 300X250</div>
                            </div><!-- SIDEBAR SPONSOR END -->
                            
                            <!-- CATEGORY 16 START 
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
                                                        <a href="single.html">Women in Hollywood, according to new study</a>
                                                    </div>
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
                                                        <a href="single.html">The age of first-time mothers is rising faster in the US</a>
                                                    </div>
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
                                                        <a href="single.html">Baby brain doesn't exist say scientists</a>
                                                    </div>
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
                                                        <a href="single.html">Oscar Oscar nominations to be announced</a>
                                                    </div>
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
                                                        <a href="single.html">Friends cast back together for special</a>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                        </li>
                                        
                                    </ul>
                                </div>
                            </div> CATEGORY 16 END -->
                            
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
    
    <!-- FOOTER START -->
@endsection        