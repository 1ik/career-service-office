<!DOCTYPE html>
<html lang="en" class="bg-dark">
<head>
  <meta charset="utf-8" />
  <title>Content not found</title>
  <meta name="description" content="app, web app, responsive, admin dashboard, admin, flat, flat ui, ui kit, off screen nav" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
  <link rel="stylesheet" href="{{URL::to('assets/css/bootstrap.css')}}" type="text/css" />
  <link rel="stylesheet" href="{{URL::to('assets/css/animate.css')}}" type="text/css" />
  <link rel="stylesheet" href="{{URL::to('assets/css/font-awesome.min.css')}}" type="text/css" />
  <link rel="stylesheet" href="{{URL::to('assets/css/icon.css')}}" type="text/css" />
  <link rel="stylesheet" href="{{URL::to('assets/css/font.css')}}" type="text/css" />
  <link rel="stylesheet" href="{{URL::to('assets/css/app.css')}}" type="text/css" />
    <!--[if lt IE 9]>
    <script src="{{URL::to('assets/js/ie/html5shiv.js')}}"></script>
    <script src="{{URL::to('assets/js/ie/respond.min.js')}}"></script>
    <script src="{{URL::to('assets/js/ie/excanvas.js')}}"></script>
  <![endif]-->
</head>
<body class="">
    <section id="content">
    <div class="row m-n">
      <div class="col-sm-4 col-sm-offset-4">
        <div class="text-center m-b-lg">
          <h1 class="h text-white animated fadeInDownBig">404</h1>
        </div>
        <div class="text-center padder clearfix">
              <p>
                <small>The content you have requested, it either doesn't exist or you don't have access to that content.</small>
              </p>
            </div>
        <div class="list-group ">
          <a href="/" class="list-group-item">
            <i class="fa fa-chevron-right icon-muted"></i>
            <i class="fa fa-fw fa-home icon-muted"></i> Home
          </a>

          @if(Sentry::check())
          <a href="{{URL::route('users.home')}}" class="list-group-item">
              <i class="fa fa-chevron-right icon-muted"></i>
              <i class="fa fa-fw fa-question icon-muted"></i> Profile
            </a>
          @else
          <a href="{{URL::to('sign-in')}}" class="list-group-item">
            <i class="fa fa-chevron-right icon-muted"></i>
            <i class="fa fa-fw fa-question icon-muted"></i> Sign in
          </a>
          @endif

          <a href="#" class="list-group-item">
            <i class="fa fa-phone" style="font-size:14px"></i> + 04478444073
          </a>
          <a href="#" class="list-group-item">
            <i class="fa fa-envelope-o" style="font-size:14px"></i> csoadmin@bracu.ac.bd
          </a>
        </div>
      </div>
    </div>
  </section>
  <!-- footer -->
  <footer id="footer">
    <div class="text-center padder clearfix">
      <p>
        <small>Office of Career Services & Alumni Relations [OCSAR]<br>&copy; 2015</small>
      </p>
    </div>
  </footer>
  <!-- / footer -->
  <script src="{{URL::to('assets/js/jquery.min.js')}}"></script>
  <!-- Bootstrap -->
  <script src="{{URL::to('assets/js/bootstrap.js')}}"></script>
  <!-- App -->
  <script src="{{URL::to('assets/js/app.js')}}"></script>
  <script src="{{URL::to('assets/js/slimscroll/jquery.slimscroll.min.js')}}"></script>
    <script src="{{URL::to('assets/js/app.plugin.js')}}"></script>
</body>
</html>