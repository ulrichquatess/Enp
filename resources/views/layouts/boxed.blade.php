<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>{{ config('', 'Entrepreneurs Bloggers') }}</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="{{asset('assets/Health/bower_components/bootstrap/dist/css/bootstrap.min.css')}}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('assets/Health/bower_components/font-awesome/css/font-awesome.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{asset('assets/Health/bower_components/Ionicons/css/ionicons.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('assets/Health/dist/css/AdminLTE.min.css')}}">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="{{asset('assets/Health/dist/css/skins/_all-skins.min.css')}}">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<!-- ADD THE CLASS layout-boxed TO GET A BOXED LAYOUT -->
<body class="hold-transition skin-blue layout-boxed sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="/dashboard" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>E</b>NP</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>{{ config('', 'Entrepreneurs Bloggers') }}</b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a  class="dropdown-toggle" data-toggle="dropdown">
              <img src="{{asset('assets/Health/dist/img/ulrich.jpg')}}" class="user-image" alt="User Image">
              <span class="hidden-xs">{{ Auth::user()->name }}</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="{{asset('assets/Health/dist/img/ulrich.jpg')}}" class="img-circle" alt="User Image">

                <p>
                  {{ Auth::user()->name }}
                  <small>{{ Auth::user()->created_at }}</small>
                </p>
              </li>

              <li class="user-footer">
                <div class="pull-right">
                  <a href="{{ route('logout') }}" class="btn btn-default btn-flat">Log out</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                          {{ csrf_field() }}
                </form>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
        </ul>
      </div>
    </nav>
  </header>

  <!-- =============================================== -->

  <!-- Left side column. contains the sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{asset('assets/Health/dist/img/ulrich.jpg')}}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>{{ Auth::user()->name }}</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        
        <li class="treeview">
          <a>
            <i class="fa fa-edit"></i> <span>Entrepreneur</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('entrepreneur.create')}}"><i class="fa fa-circle-o"></i>Create a New Entrepreneur</a></li>
            <li><a href="{{ route('entrepreneur.index')}}"><i class="fa fa-circle-o"></i>Visit All Entrepreneur</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a>
            <i class="fa fa-edit"></i> <span>Business Topics</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('business.create')}}"><i class="fa fa-circle-o"></i>Create New Business Topic</a></li>
            <li><a href="{{ route('business.index')}}"><i class="fa fa-circle-o"></i>Visit All Health Topic</a></li>
          </ul>
        </li>

         <li class="treeview">
          <a>
            <i class="fa fa-edit"></i> <span>Technology Topics</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('technology.create')}}"><i class="fa fa-circle-o"></i>Create New Technology Topic</a></li>
            <li><a href="{{ route('technology.index')}}"><i class="fa fa-circle-o"></i>Visit All Tech Topic</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a>
            <i class="fa fa-edit"></i> <span>Latest News Topics</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('new.create')}}"><i class="fa fa-circle-o"></i>Create New Slide Topic</a></li>
            <li><a href="{{ route('new.index')}}"><i class="fa fa-circle-o"></i>Visit All Slide </a></li>
          </ul>
        </li>

        <li class="treeview">
          <a>
            <i class="fa fa-edit"></i> <span>Team Members</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('team.create')}}"><i class="fa fa-circle-o"></i>Create a New Team</a></li>
            <li><a href="{{ route('team.index')}}"><i class="fa fa-circle-o"></i>Visit All Team</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a>
            <i class="fa fa-edit"></i> <span>Paramètres</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('profile.index')}}"><i class="fa fa-circle-o"></i>Manage User Profile</a></li>
            <li><a href="{{ route('social.index')}}"><i class="fa fa-circle-o"></i>Create Websites Social Icons</a></li>
          </ul>
        </li>

      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper"> 
    <!--The content Found Here-->
    @yield('content');
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <strong>Copyright &copy; 2017 <a>Entrepreneurs Bloggers</a>.</strong> All rights
    reserved.
    <input type="hidden" name="UlrichQuatess">
  </footer>


  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="{{URL::to('assets')}}/Health/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="{{URL::to('assets')}}/Health/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="{{URL::to('assets')}}/Health/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="{{URL::to('assets')}}/Health/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="{{URL::to('assets')}}/Health/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{URL::to('assets')}}/Health/dist/js/demo.js"></script>
</body>
</html>
