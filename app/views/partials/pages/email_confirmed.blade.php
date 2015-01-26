<!DOCTYPE html>
<html lang="en" class="app">
<head>
  <meta charset="utf-8" />
  <title>Career Service Office</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" /> 
  <link rel="stylesheet" href="{{URL::to('assets/css/bootstrap.css'); }}" type="text/css" />
  <link rel="stylesheet" href="{{URL::to('assets/css/animate.css'); }}" type="text/css" />
  <link rel="stylesheet" href="{{URL::to('assets/css/font-awesome.min.css'); }}" type="text/css" />
  <link rel="stylesheet" href="{{URL::to('assets/css/icon.css'); }}" type="text/css" />
  <link rel="stylesheet" href="{{URL::to('assets/css/font.css'); }}" type="text/css" />
  <link rel="stylesheet" href="{{URL::to('assets/css/app.css'); }}" type="text/css" />
    <!--[if lt IE 9]>
    <script src="assets/js/ie/html5shiv.js"></script>
    <script src="assets/js/ie/respond.min.js"></script>
    <script src="assets/js/ie/excanvas.js"></script>

  <![endif]-->
</head>
<body class="">
  <section id="content" class="m-t-lg wrapper-md animated fadeInUp">    
    <div class="container aside-xl">
      <section class="m-b-lg">
        <header class="wrapper text-center">
          <strong id="message">Your email has been confirmed!</strong>
        </header>
          <div class="list-group">
            <div class="list-group-item">
                <p style="text-align: center">
                    Thanks for applying. Your application has been taken for review. If you are accepted, you'll be notified to this email address.
                </p>
            </div>
            <p style="text-align: center">
                <a href="{{URL::to('/')}}">Home</a>
            </p>

          </div>
      </section>

      <div class="text-center padder clearfix">
        <p>
          <small>Office of Career Services & Alumni Relations [OCSAR]<br>&copy; 2015</small>
        </p>
      </div>
    </div>
  </section>

</body>
</html>