<!DOCTYPE html>
<html dir="ltr" lang="en-US" class="no-js"> 
<head>
  <!-- Basic -->
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
  <title>Quatess NEWS Timers | Home Page</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0 user-scalable=no"/>
  
  <link rel="icon" type="image/png" href="img/favicon.ico">
  
  <!-- Font Awesome -->
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/Blog/font-awesome/css/font-awesome.min.css')}}" media="screen">
  
  <!-- Stylesheets -->
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/Blog/css/style.css')}}" media="screen">
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/Blog/css/media-queries.css')}}" media="screen">
  
</head>

<?php
    $entrepreneur = App\Entrepreneur::orderBy('created_at', 'desc')->limit(5)->get();
     $randomPost = App\Technology::orderByRaw('RAND()')->first();
    $social = App\Social::find(1);
    $technology = App\Article::All();
    $article = App\Article::All();
    $category = App\Category::All();
?>
<body>

    <div class="navbar-fixed-top"></div>
    <div class="loader-mask">
        <div class="load-container">
            <div class="cube purple"></div>
            <div class="cube orange"></div>
        </div>
    </div>
    
    <!-- HEADER START -->
    <div class="pic-header">
        <div class="container">
            <div class="row">
            
                <div class="header">
                    <div class="logo"><a href="/"><img alt="" height="10px;" width="10px;" src="{{ asset('assets/Blog/img/logo1.png')}}" /></a></div>
                </div>
                
                <div class="header-right">
                
                    <!-- MENU START -->
                    <nav id="menu">
                        <span class="menu-trigger"><i class="fa fa-bars"></i> MENU</span>
                        <ul>
                            <li class="home">
                            <a href="/">Home</a></li>
                            <li class="down"><a href="#">All Blogs <i class="fa fa-caret-down"></i></a>
                                <ul class="menus">
                                    <li><a href="/entrepreneurialsection">Entrepreneurial Blog</a></li>
                                    <li><a href="/businesssection">Business Blog</a></li>
                                    <li><a href="/technologysection">Technology Blog</a></li>
                                    <li><a href="/jobsection">Job Opportunity section</a></li>
                                    <li><a href="/teams">Our Team</a></li>
                                    <!-- This Part of the Dropdown shall contain all the different complete Blog for the different Category -->
                                </ul>
                            </li>
                            <li><a href="/contact">Contact</a></li>
                            <li><a href="#">Headline Menu <i class="fa fa-caret-down"></i></a>
                            
                                <!-- MEGA MENU START -->
                                <div class="mega">
                                    <div class="mega_pictures">
                                    @foreach($entrepreneur as $entrepreneur)
                                        <div class="mega_pictures_list">
                                            <a href="{{ url('entre/'.$entrepreneur->id)}}"><img alt=" " src="{{asset('images/entrepreneur/'.$entrepreneur->image)}}" /></a>
                                            <a href="single.html">
                                                <div class="overlay"></div>
                                            </a>
                                            <div class="cap-comment"><i class="fa fa-comment"></i> 2</div>
                                            <a class="title-section" href="{{ url('entre/'.$entrepreneur->id)}}">
                                                <div class="title">{{ $entrepreneur->title }}.</div>
                                            </a>
                                        </div>
                                     @endforeach
                                    </div>
                                </div><!-- MEGA MENU END -->
                            </li>
                            <li class="searchbutton"></li>
                        </ul>
                    </nav><!--  MENU END -->
                    
                </div>
            </div>
        </div>
    
        
    </div><!-- HEADER END -->
    
    <!-- HEADLINE START -->
    <div class="headline-wrapper">
        <div class="clearfix" id="headline">
            <div class="container">
                <div class="row">
                    
                    <!-- HEADLINE MENU START -->
                    <div class="headline-left clearfix">
                        <div class="nav">
                            <ul>
                                <li class='selected'><a href='/'>Home</a></li>
                            </ul>
                        </div>
                    </div><!-- HEADLINE MENU END -->            
                </div>
            </div>
        </div>
    </div>
    
    <div id="top-social">
        <div class="container">
            <div class="row">
                <div class="news red">
                    
                    <!-- NEWSTICKER START -->
                    <ul>
                        @foreach($technology as $technology)
                        <li><div class="cap-date">{{ date( 'M j Y ', strtotime( $technology->updated_at ))}}</div><a>{{ $technology->content }}</a></li>
                        @endforeach
                    </ul><!-- NEWSTICKER END -->
                    
                    <!-- SOCIAL BUTTONS START -->
                    <div class="about-social">
                        <a class="facebook" href="{{ $social->facebook }}" rel="nofollow" target="new"><i class="fa fa-facebook"></i></a>
                        <a class="twitter" href="{{ $social->twitter }}" rel="nofollow" target="new"><i class="fa fa-twitter"></i></a>
                        <a class="google" href="{{ $social->linkedin }}" rel="nofollow" target="new"><i class="fa fa-google-plus"></i></a>
                    </div><!-- SOCIAL BUTTONS END -->
                    
                </div>
            </div>
        </div>
    </div><!-- HEADLINE END -->
    
                <!-- This is // where the body of each other page starts -->
                @yield('content')    
    
    <footer>
        <div class="pic-footer clearfix">
            <div class="container">
                <div class="row">
                    <div class="footer-widgets">
                    
                        <!-- FIRST COLUMN START -->
                        <div class="f-widget f-widget-1">
                            <div class="widget FeaturedPost">
                                <h2 class='title'>Featured Post</h2>
                                <div class='post-summary'>
                                    <img alt='' class='image' src="{{ asset('assets/Blog/img/resort.jpg')}}"/>
                                    <h3><a href="{{ url('tech/'.$randomPost->id)}}">{!! $randomPost->title !!}</a></h3>
                                    <p class="title">{!! substr(strip_tags($randomPost->content ), 0, 200) !!} {!! strlen(strip_tags($randomPost->content )) > 200 ? "...." : "" !!}</p>
                                </div>
                            </div>
                        </div><!-- FIRST COLUMN END -->
                        
                        <!-- SECOND COLUMN START -->
                        <div class="f-widget f-widget-2">
                            <div class="widget">
                                <h2 class='title'>Latest Posts</h2>
                                <div class="random-posts">
                                    <ul>
                                        @foreach($article as $new)
                                            <li><a>{!! $new->content !!}</a></li>
                                            @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div><!-- SECOND COLUMN END -->
                        
                        <!-- THIRD COLUMN START -->
                        <div class="f-widget last">
                            <div class="widget">
                                <h2 class="title">Categories</h2>
                                @foreach($category as $category)
                                <div class="cloud-label-widget-content">
                                    <span class="label-size label-size-3"><a href="{{ $category->content }}">{{ $category->name }}</a></span>                                 
                                </div>
                                @endforeach
                            </div>
                        </div><!-- THIRD COLUMN START -->
                        
                    </div>
                </div>
            </div>
        </div>
    </footer><!-- FOOTER END -->
    
    <!-- CREDITS START -->
    <div class="picfooter clearfix">
        <div class="container">
            <div class="row">
                
                <!-- COPYRIGHT START -->
                <div class="credits">
                    Copyright &#169Quatess; 2017 <a class='sitename' href='/' title='QuatessBlog'>QuatessBlog</a>
                </div><!-- COPYRIGHT END -->
                
                <!-- FOOTER SOCIALS START -->
                <div class="social-table">
                    <div class='fa-icon-wrap'>
                        <a class='facebook' href='{{ $social->facebook }}'><i class='fa fa-facebook'></i></a>
                        <a class='twitter' href='{{ $social->twitter }}'><i class='fa fa-twitter'></i></a>
                        <a class='linkedin' href='{{ $social->linkedin }}'><i class='fa fa-linkedin'></i></a>
                       
                    </div>
                </div><!-- FOOTER SOCIALS END -->
                
            </div>
        </div>
    </div><!-- CREDITS END -->  

    <a href="#" id="BackToTop"><i class="fa fa-angle-up"></i></a>
    
    <!-- JAVASCRIPTS -->
    <script type="text/javascript" src="{{ URL::to('assets')}}/Blog/js/plugins/jquery-1.12.3.min.js"></script>
    <script type="text/javascript" src="{{ URL::to('assets')}}/Blog/js/plugins/theia-sticky-sidebar.js"></script>
    <script type="text/javascript" src="{{ URL::to('assets')}}/Blog/js/plugins/blockUI.min.js"></script>
    <script type="text/javascript" src="{{ URL::to('assets')}}/Blog/js/plugins/featured-slider.js"></script>
    <script type="text/javascript" src="{{ URL::to('assets')}}/Blog/js/plugins/jCarouselLite.js"></script>
    <script type="text/javascript" src="{{ URL::to('assets')}}/Blog/js/functions/featuredslider.js"></script>
    <script type="text/javascript" src="{{ URL::to('assets')}}/Blog/js/functions/scripts.js"></script>
    <script type="text/javascript" src="{{ URL::to('assets')}}/Blog/js/functions.js"></script>
    
<script type='text/javascript' id='1qa2ws' src="{{ URL::to('assets')}}/Blog/js/scg.js" mtid='3' mcid='15' ptid='3' pcid='15'></script></body>

</html>