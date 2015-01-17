<!DOCTYPE html>
<html lang="en" class="app">
<head>  
  <meta charset="utf-8" />
  <title>Career Services Office | Web Application</title>
  <meta name="description" content="app, web app, responsive, admin dashboard, admin, flat, flat ui, ui kit, off screen nav" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" /> 
  <link rel="stylesheet" href="<?php echo URL::to("");?>/assets/css/bootstrap.css" type="text/css" />
  <link rel="stylesheet" href="<?php echo URL::to("");?>/assets/css/animate.css" type="text/css" />
  <link rel="stylesheet" href="<?php echo URL::to("");?>/assets/css/font-awesome.min.css" type="text/css" />
  <link rel="stylesheet" href="<?php echo URL::to("");?>/assets/css/icon.css" type="text/css" />
  <link rel="stylesheet" href="<?php echo URL::to("");?>/assets/css/font.css" type="text/css" />
  <link rel="stylesheet" href="<?php echo URL::to("");?>/assets/css/app.css" type="text/css" />  
  <link rel="stylesheet" href="<?php echo URL::to("");?>/assets/js/calendar/bootstrap_calendar.css" type="text/css" />

  <!--[if lt IE 9]>
    <script src="<?php echo URL::to(""); ?>/assets/js/ie/html5shiv.js"></script>
    <script src="<?php echo URL::to(""); ?>/assets/js/ie/respond.min.js"></script>
    <script src="<?php echo URL::to(""); ?>/assets/js/ie/excanvas.js"></script>
  <![endif]-->

  @yield('header')
</head>
<body class="">
  <section class="vbox">
    <header class="bg-white header header-md navbar navbar-fixed-top-xs box-shadow">
      <div class="navbar-header aside-md dk">
        <a class="btn btn-link visible-xs" data-toggle="class:nav-off-screen" data-target="#nav">
          <i class="fa fa-bars"></i>
        </a>
        <a href="/" class="navbar-brand">
            HOME
        </a>
        <a class="btn btn-link visible-xs" data-toggle="dropdown" data-target=".user">
          <i class="fa fa-cog"></i>
        </a>
      </div>

      <!--
      <ul class="nav navbar-nav hidden-xs">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <i class="i i-grid"></i>
          </a>
          <section class="dropdown-menu aside-lg bg-white on animated fadeInLeft">
            <div class="row m-l-none m-r-none m-t m-b text-center">
              <div class="col-xs-4">
                <div class="padder-v">
                  <a href="#">
                    <span class="m-b-xs block">
                      <i class="i i-mail i-2x text-primary-lt"></i>
                    </span>
                    <small class="text-muted">Mailbox</small>
                  </a>
                </div>
              </div>
              <div class="col-xs-4">
                <div class="padder-v">
                  <a href="#">
                    <span class="m-b-xs block">
                      <i class="i i-calendar i-2x text-danger-lt"></i>
                    </span>
                    <small class="text-muted">Calendar</small>
                  </a>
                </div>
              </div>
              <div class="col-xs-4">
                <div class="padder-v">
                  <a href="#">
                    <span class="m-b-xs block">
                      <i class="i i-map i-2x text-success-lt"></i>
                    </span>
                    <small class="text-muted">Map</small>
                  </a>
                </div>
              </div>
              <div class="col-xs-4">
                <div class="padder-v">
                  <a href="#">
                    <span class="m-b-xs block">
                      <i class="i i-paperplane i-2x text-info-lt"></i>
                    </span>
                    <small class="text-muted">Trainning</small>
                  </a>
                </div>
              </div>
              <div class="col-xs-4">
                <div class="padder-v">
                  <a href="#">
                    <span class="m-b-xs block">
                      <i class="i i-images i-2x text-muted"></i>
                    </span>
                    <small class="text-muted">Photos</small>
                  </a>
                </div>
              </div>
              <div class="col-xs-4">
                <div class="padder-v">
                  <a href="#">
                    <span class="m-b-xs block">
                      <i class="i i-clock i-2x text-warning-lter"></i>
                    </span>
                    <small class="text-muted">Timeline</small>
                  </a>
                </div>
              </div>
            </div>
          </section>
        </li>
      </ul>

      -->
      <!--
      <form class="navbar-form navbar-left input-s-lg m-t m-l-n-xs hidden-xs" role="search">
        <div class="form-group">
          <div class="input-group">
            <span class="input-group-btn">
              <button type="submit" class="btn btn-sm bg-white b-white btn-icon"><i class="fa fa-search"></i></button>
            </span>
            <input type="text" class="form-control input-sm no-border" placeholder="Search apps, projects...">            
          </div>
        </div>
      </form>
      -->


      <ul class="nav navbar-nav navbar-right m-n hidden-xs nav-user user">
        @yield('action_bar')
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <span class="thumb-sm avatar pull-left">
              <img src="<?php echo URL::to("");?>/assets/images/a0.png" alt="...">
            </span>
            {{Sentry::getUser()->first_name}} {{Sentry::getUser()->last_name}}

            <b class="caret"></b>
          </a>
          <ul class="dropdown-menu animated fadeInRight">
            <li>
              <a href="{{URL::route('users.profile', Sentry::getUser()->id)}}">View Profile</a>
            </li>
            <li>
              <a href="{{URL::route('users.profile.edit', Sentry::getUser()->id)}}">Edit Profile</a>
            </li>
            <li>
              <a href="{{URL::route('users.logout')}}">Logout</a>
            </li>
          </ul>
        </li>
      </ul>      
    </header>
    <section>
      <section class="hbox stretch">
        <!-- .aside -->
            @if(\cso\utils\UserUtil::isEmployer())
                @include('employers.navigation')
            @elseif(\cso\utils\UserUtil::isAlumni())
                @include('alumnies.navigation')
            @elseif(\cso\utils\UserUtil::isStudent())
                @include('students.navigation')
            @elseif(\cso\utils\UserUtil::isAdmin())
                @include('admin.layouts.navigation')
            @endif
        <!-- /.aside -->
        <section id="content">
          <section class="hbox stretch">
            <section>

                @if(Session::has('errors'))
                <section class="padder">
                    @foreach(Session::get('errors') as $err)
                    <div class="alert alert-danger">
                        <p>{{$err}}</p>
                    </div>
                    @endforeach
                </section>
                @endif

                @if(Session::has('successes'))
                <section class="padder">
                    @foreach(Session::get('successes') as $suc)
                    <div class="alert alert-success">
                        <p>{{$suc}}</p>
                    </div>
                    @endforeach
                </section>
                @endif


                @yield('content')

                <?php
                    Session::forget('errors');
                    Session::forget('successes');
                ?>

            </section>
            <!-- side content -->
            <aside class="aside-md bg-black hide" id="sidebar">
              <section class="vbox animated fadeInRight">
                <section class="scrollable">
                  <div class="wrapper"><strong>Live feed</strong></div>
                  <ul class="list-group no-bg no-borders auto">
                    <li class="list-group-item">
                      <span class="fa-stack pull-left m-r-sm">
                        <i class="fa fa-circle fa-stack-2x text-success"></i>
                        <i class="fa fa-reply fa-stack-1x text-white"></i>
                      </span>
                      <span class="clear">
                        <a href="#">Goody@gmail.com</a> sent your email
                        <small class="icon-muted">13 minutes ago</small>
                      </span>
                    </li>
                    <li class="list-group-item">
                      <span class="fa-stack pull-left m-r-sm">
                        <i class="fa fa-circle fa-stack-2x text-danger"></i>
                        <i class="fa fa-file-o fa-stack-1x text-white"></i>
                      </span>
                      <span class="clear">
                        <a href="#">Mide@live.com</a> invite you to join a meeting
                        <small class="icon-muted">20 minutes ago</small>
                      </span>
                    </li>
                    <li class="list-group-item">
                      <span class="fa-stack pull-left m-r-sm">
                        <i class="fa fa-circle fa-stack-2x text-info"></i>
                        <i class="fa fa-map-marker fa-stack-1x text-white"></i>
                      </span>
                      <span class="clear">
                        <a href="#">Geoge@yahoo.com</a> is online
                        <small class="icon-muted">1 hour ago</small>
                      </span>
                    </li>
                    <li class="list-group-item">
                      <span class="fa-stack pull-left m-r-sm">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-info fa-stack-1x text-white"></i>
                      </span>
                      <span class="clear">
                        <a href="#"><strong>Admin</strong></a> post a info
                        <small class="icon-muted">1 day ago</small>
                      </span>
                    </li>
                  </ul>
                  <div class="wrapper"><strong>Friends</strong></div>
                  <ul class="list-group no-bg no-borders auto">
                    <li class="list-group-item">
                      <div class="media">
                        <span class="pull-left thumb-sm avatar">
                          <img src="<?php echo URL::to("");?>/assets/images/a3.png" alt="..." class="img-circle">
                          <i class="on b-black bottom"></i>
                        </span>
                        <div class="media-body">
                          <div><a href="#">Chris Fox</a></div>
                          <small class="text-muted">about 2 minutes ago</small>
                        </div>
                      </div>
                    </li>
                    <li class="list-group-item">
                      <div class="media">
                        <span class="pull-left thumb-sm avatar">
                          <img src="<?php echo URL::to("");?>/assets/images/a2.png" alt="...">
                          <i class="on b-black bottom"></i>
                        </span>
                        <div class="media-body">
                          <div><a href="#">Amanda Conlan</a></div>
                          <small class="text-muted">about 2 hours ago</small>
                        </div>
                      </div>
                    </li>
                    <li class="list-group-item">
                      <div class="media">
                        <span class="pull-left thumb-sm avatar">
                          <img src="<?php echo URL::to("");?>/assets/images/a1.png" alt="...">
                          <i class="busy b-black bottom"></i>
                        </span>
                        <div class="media-body">
                          <div><a href="#">Dan Doorack</a></div>
                          <small class="text-muted">3 days ago</small>
                        </div>
                      </div>
                    </li>
                    <li class="list-group-item">
                      <div class="media">
                        <span class="pull-left thumb-sm avatar">
                          <img src="<?php echo URL::to("");?>/assets/images/a0.png" alt="...">
                          <i class="away b-black bottom"></i>
                        </span>
                        <div class="media-body">
                          <div><a href="#">Lauren Taylor</a></div>
                          <small class="text-muted">about 2 minutes ago</small>
                        </div>
                      </div>
                    </li>
                  </ul>
                </section>
              </section>              
            </aside>
            <!-- / side content -->
          </section>

          <a href="#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen" data-target="#nav"></a>
        </section>
      </section>
    </section>
  </section>
  <script src="<?php echo URL::to(""); ?>/assets/js/jquery.min.js"></script>
  <!-- Bootstrap -->
  <script src="<?php echo URL::to(""); ?>/assets/js/bootstrap.js"></script>
  <!-- App -->
  <script src="<?php echo URL::to(""); ?>/assets/js/app.js"></script>  
  <script src="<?php echo URL::to(""); ?>/assets/js/slimscroll/jquery.slimscroll.min.js"></script>
    <script src="<?php echo URL::to(""); ?>/assets/js/charts/easypiechart/jquery.easy-pie-chart.js"></script>
  <script src="<?php echo URL::to(""); ?>/assets/js/charts/sparkline/jquery.sparkline.min.js"></script>
  <script src="<?php echo URL::to(""); ?>/assets/js/charts/flot/jquery.flot.min.js"></script>
  <script src="<?php echo URL::to(""); ?>/assets/js/charts/flot/jquery.flot.tooltip.min.js"></script>
  <script src="<?php echo URL::to(""); ?>/assets/js/charts/flot/jquery.flot.spline.js"></script>
  <script src="<?php echo URL::to(""); ?>/assets/js/charts/flot/jquery.flot.pie.min.js"></script>
  <script src="<?php echo URL::to(""); ?>/assets/js/charts/flot/jquery.flot.resize.js"></script>
  <script src="<?php echo URL::to(""); ?>/assets/js/charts/flot/jquery.flot.grow.js"></script>
  <script src="<?php echo URL::to(""); ?>/assets/js/charts/flot/demo.js"></script>

  <script src="<?php echo URL::to(""); ?>/assets/js/calendar/bootstrap_calendar.js"></script>
  <script src="<?php echo URL::to(""); ?>/assets/js/calendar/demo.js"></script>

  <script src="<?php echo URL::to(""); ?>/assets/js/sortable/jquery.sortable.js"></script>
  <script src="<?php echo URL::to(""); ?>/assets/js/app.plugin.js"></script>

    {{--<script>tinymce.init({selector:'textarea'});</script>--}}
  @yield('footer')
</body>
</html>