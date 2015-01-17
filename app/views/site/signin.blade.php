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
  <style type="text/css">
    .hidden {
        display:none;
    }
    .signup-extension {
            width: 320px;
            height: 100px;
            margin: 0 auto;
            margin: 20px;
            background: white;
            z-index: 999999999999;
          }

          .signup-extension .foot {
              height: 35px;
              width: 100%;
              background-color: #32425C;
              position: absolute;
              bottom: 0px;
            }


          .signup-extension .items {
            width: 85%;
            margin: 0 auto;
            padding-top: 15px;
          }

          .signup-extension .items .item {
            width: 88px;
            display: inline-block;
            text-align: center;
          }


          .signup-extension .items .item.active {
            cursor: pointer;
          }

          .signup-extension .items .item.active p {
            color: black;
          }

          .signup-extension p {
            color:#00415C;
            text-transform: uppercase;
            font-weight: 700;
            font-size: .9rem;
            font-size: 9px;
            letter-spacing: 1px;
            transition: all .2s;
          }

          .signup-extension .foot p {
            text-align: center;
            font-size: 12px;
            margin-top: 8px;
            color: white;
          }

  </style>
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
          <strong id="message">Please Enter your Login info</strong>
        </header>
        {{Form::open(['url' => URL::to('sign-in'), 'method' => 'post', 'id' => 'form'])}}
          <div class="list-group">
            <div class="list-group-item">
              <input name="email" type="email" id="email" placeholder="Email" class="form-control no-border">
            </div>
            <div class="list-group-item animated" id="pass-container">
               <input name="password" type="password" placeholder="Password" class="form-control no-border">
            </div>
          </div>
          <button id="action-button" type="submit" class="btn btn-lg btn-primary btn-block">Sign in</button>
          <div class="text-center m-t m-b">
            <a id="forgot-pass"><small>Forgot password?</small></a>
            <a class="hidden" id="sign-in" href="{{URL::to('sign-in')}}"><small></small>Sign in</a>
            </div>
            @if($errors->any())
                <div class="alert alert-danger">
                    {{$errors->first()}}
                </div>
            @endif
          <p class="text-muted text-center" id="create-acc-text"><small>Do not have an account?</small></p>
          <div class="row">
                <div class="signup-extension hidden">
                    <div class="items">
                        <div class="item" data-text="Enlighten yourself with jobs" data-toggle="modal" data-target="#myModal">
                            <img src="assets/images/student.png" alt="" width="25px" height="25px">
                            <p>students</p>
                        </div>
                        <div class="item" data-text="Stay Up to Date" data-toggle="modal" data-target="#alumniModal">
                            <img src="assets/images/alumni.png" alt="" width="35px" height="25px">
                            <p>alumnies</p>
                        </div>
                        <div class="item" data-text="Find Great candidates" data-toggle="modal" data-target="#employerModal">
                            <img src="assets/images/employer.png" alt="" width="25px" height="25px">
                            <p>employers</p>
                        </div>
                    </div>
                    <div class="foot">
                        <p>Choose the right role for you</p>
                    </div>
                </div>
          </div>
          <a id="btn-create-account" class="btn btn-lg btn-default btn-block">Create an account</a>
        </form>
      </section>
    </div>
  </section>




  @include('partials.modals.employer_signup')
  @include('partials.modals.alumni_signup')
  @include('partials.modals.student_signup')


  <!-- / footer -->
  <script src="assets/js/jquery.min.js"></script>
  <!-- Bootstrap -->
  <script src="assets/js/bootstrap.js"></script>
  <!-- App -->
  <script src="assets/js/app.js"></script>
  <script src="assets/js/parsley/parsley.min.js"></script>
  <script src="assets/js/slimscroll/jquery.slimscroll.min.js"></script>
  <script src="assets/js/app.plugin.js"></script>
  <script src="assets/js/wizard/jquery.bootstrap.wizard.js"></script>
  <script src="assets/js/wizard/demo.js"></script>
  <script src="assets/js/app.plugin.js"></script>


  <script type="text/javascript">
    $(document).ready(function(){
        $('.signup-extension .items .item').hover(function(){
          $(this).addClass('active');
          $('.signup-extension .foot p').html(($(this).attr('data-text')));
        },function(){
          $(this).removeClass('active');
        });

        $('#btn-create-account').on('click', function(e){
            e.preventDefault();
            $('.signup-extension').removeClass('hidden').addClass('animated fadeInDown');
            $('#create-acc-text').html('Apply for an account as any of the following roles.')
            return false;
        })

        $('#forgot-pass').on('click',function(e){
            $(this).addClass('hidden');
            $('#sign-in').removeClass('hidden').addClass('animated fadeInUp');
            $('#action-button').text("Send!");
            $('#pass-container').addClass('hidden');
            $('#message').html("Please enter your email address. We'll send you further instruction.").addClass('animated fadeInDown');
        });

        $('#form').on('submit',function(e){

            if($('#pass-container').hasClass('hidden')) {
                var email = $('#email').val();
                var token = ($("[name*='_token']").val());
                var object = {
                    "email" : email,
                    "_token" : token
                }
                $('#action-button').text("Sending..");
                $.post('password-reset', object, function(response){
                    if(response.status == 'success') {
                        $('#message').html("Please check your inbox(spam/trash too). We have sent your new password to this email.");
                        $('#pass-container').removeClass('hidden');
                        $('#action-button').text("Sign in");
                    } else {
                        $('#message').html(response.message);
                        $('#action-button').text("Send!");
                    }
                });
                return false;
            }

            return true;
        });
    });
  </script>
  <script type="text/javascript" src="{{URL::to('assets/js/signup.js')}}"></script>
</body>
</html>