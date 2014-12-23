<!DOCTYPE html>
<html lang="en" class="app">
<head>  
  <meta charset="utf-8" />
  <title>Career Service Office</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" /> 
  <link rel="stylesheet" href="assets/css/bootstrap.css" type="text/css" />
  <link rel="stylesheet" href="assets/css/animate.css" type="text/css" />
  <link rel="stylesheet" href="assets/css/font-awesome.min.css" type="text/css" />
  <link rel="stylesheet" href="assets/css/icon.css" type="text/css" />
  <link rel="stylesheet" href="assets/css/font.css" type="text/css" />
  <link rel="stylesheet" href="assets/css/app.css" type="text/css" />
    <!--[if lt IE 9]>
    <script src="assets/js/ie/html5shiv.js"></script>
    <script src="assets/js/ie/respond.min.js"></script>
    <script src="assets/js/ie/excanvas.js"></script>
  <![endif]-->
</head>
<body class="">
  <section id="content" class="m-t-lg wrapper-md animated fadeInUp">    
    <div class="container aside-xl">
      <a class="navbar-brand block" href="{{URL::to('/')}}">Career Services Office</a>
      <section class="m-b-lg">
        <header class="wrapper text-center">
          <strong>Please Enter your Login info</strong>
        </header>
        {{Form::open(['url' => URL::to('sign-in'), 'method' => 'post'])}}
          <div class="list-group">
            <div class="list-group-item">
              <input name="email" type="email" placeholder="Email" class="form-control no-border">
            </div>
            <div class="list-group-item">
               <input name="password" type="password" placeholder="Password" class="form-control no-border">
            </div>
          </div>
          <button type="submit" class="btn btn-lg btn-primary btn-block">Sign in</button>
          <div class="text-center m-t m-b"><a href="#"><small>Forgot password?</small></a></div>

            @if($errors->any())
                <div class="alert alert-danger">
                    {{$errors->first()}}
                </div>
            @endif




          <div class="line line-dashed"></div>
          <p class="text-muted text-center"><small>Do not have an account?</small></p>
          <a href="{{URL::to('/#create-account')}}" class="btn btn-lg btn-default btn-block">Create an account</a>
        </form>
      </section>
    </div>
  </section>
  <!-- / footer -->
  <script src="assets/js/jquery.min.js"></script>
  <!-- Bootstrap -->
  <script src="assets/js/bootstrap.js"></script>
  <!-- App -->
  <script src="assets/js/app.js"></script>
  <script src="assets/js/slimscroll/jquery.slimscroll.min.js"></script>
    <script src="assets/js/app.plugin.js"></script>
</body>
</html>