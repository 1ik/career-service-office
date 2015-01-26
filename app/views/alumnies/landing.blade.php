<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">
    <title>Career Service Office</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="<?php echo URL::to("");?>/assets/css/bootstrap.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo URL::to("");?>/assets/css/animate.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo URL::to("");?>/assets/css/font-awesome.min.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo URL::to("");?>/assets/css/icon.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo URL::to("");?>/assets/css/font.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo URL::to("");?>/assets/css/app.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo URL::to("");?>/assets/themify-icons/themify-icons.css" type="text/css" />
    <link rel="stylesheet" type="text/css" href="/assets/icons/alumni_icons/icons.css" />

    <link rel="stylesheet" type="text/css" href="/assets/plugins/owl-carousel/owl.carousel.css" />
    <link rel="stylesheet" type="text/css" href="/assets/plugins/owl-carousel/owl.theme.css" />
    <link rel="stylesheet" type="text/css" href="/assets/plugins/owl-carousel/owl.transitions.css" />

    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:300italic,400italic,700italic,400,700,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Droid+Sans:400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Oswald:400,700,300' rel='stylesheet' type='text/css'>
    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <link rel="stylesheet" href="{{URL::to('assets/css/landing-pages/alumni.css')}}"/>

  </head>
  <body>






    @include('site.navigation')





  <div class="container-full-width section-a">
    <div class="left-navigation">
      <a href="" id="signup-link">Sign up</a> | <a id="login-link" href="/sign-in">Log in</a>
      <div class="signup-extension hidden animated fadeInDown">
        <div class="arrow-up"></div>
          <div class="items">
            <div class="item" data-text="Enlighten yourself with jobs" data-toggle="modal" data-target="#myModal">
              <img src="assets/images/student.png" alt="" width="25px" height="25px">
              <p>students</p>
            </div>
            <div class="item" data-text="Stay Up to Date">
              <img src="assets/images/alumni.png" alt="" width="35px" height="25px">
              <p>alumnies</p>
            </div>
            <div class="item" data-text="Find Great candidates">
              <img src="assets/images/employer.png" alt="" width="25px" height="25px">
              <p>employers</p>
            </div>
          </div>
        <div class="foot">
          <p>Choose the right role for you</p>
        </div>
      </div>
    </div>
    <div class="right-navigation">
      <div class="social-icons">
        <span class="icon fb-icon"></span>
        <span class="icon twitter-icon"></span>
        <span class="icon google-plus-icon"></span>
      </div>
    </div>


    <div class="slide-show-container">
      <div class="slides">

        <div class="slide">
          <img class="animated fadeInUp" src="{{URL::to('/assets/images/alumni.jpg');}}" alt="" width="100%">
          <div class="slide-content">
                <h1 class="animated fadeInRight">
                    {{$page->overlay_title}}
                </h1>
                <p>
                    {{$page->overlay_text}}
                </p>
            <br><br>
          </div>
        </div>

      </div>
    </div>

    <div class="featured-header">
        <div class="row">
          <div class="col-md-3">
            <img
              id="cso_logo"
              src="assets/images/csoicon.png"
              width="200px"
              height: ="120px" />

          </div>
          <div class="col-md-9 navigation-section">
               <div class="row">
                    <div class="col-xs-8 pull-right">
                        <h3>{{$page->title}}</h3>
                    </div>
               </div>
          </div>
        </div>
    </div>


    <div class="container-full-width section-b" style="max-width: 1200px">
        <div class="row section-c">
            <h2 data-sr='enter left over .7s' class="main-title">
                {{$page->body_title}}
            </h2>
            <p data-sr='enter bottom wait .4s'>
                {{$page->contents}}
            </p>
        </div>
    </div>

    <div class="container-full-width section-b " style="max-width: 1400px">
        <div class="row section-d">
            <div class="left-section">
                <p class="title" data-sr='enter left wait .4s' >{{$page->sections[0]->title}}</p>
                <i class="flaticon-communities" data-sr='enter up .4s'></i>
                <p class="description" data-sr='enter up wait .4s'>
                    {{$page->sections[0]->summery}}
                </p>
                <a class="btn btn-default btn-rounded" href="{{URL::to('/contents/' . $page->sections[0]->slug)}}" data-sr='enter bottom wait .4s'>
                    Know More <i class="ti-angle-double-right" style="font-size: 10px"></i>
                </a>
            </div>
            <div class="right-section">
                <p class="title" data-sr='enter right wait .4s' >{{$page->sections[1]->title}}</p>
                <i class="flaticon-books8" data-sr='enter up .4s'></i>
                <p class="description" data-sr='enter up wait .4s'>
                    {{$page->sections[1]->summery}}
                </p>
                <a class="btn btn-default btn-rounded" href="{{URL::to('/contents/' . $page->sections[1]->slug)}}" data-sr='enter bottom wait .4s'>
                    Know More <i class="ti-angle-double-right" style="font-size: 10px"></i>
                </a>
            </div>
        </div>

        <div class="row section-e">
            <div class="" style="margin:0 auto; width:80%">
                    <div class="carousel slide auto panel-body" id="c-slide">
                        <ol class="carousel-indicators out">
                          <li data-target="#c-slide" data-slide-to="0" class="active"></li>
                          <li data-target="#c-slide" data-slide-to="1" class=""></li>
                          <li data-target="#c-slide" data-slide-to="2" class=""></li>
                        </ol>
                        <div class="carousel-inner">
                          <div class="item active">
                            <p class="text-center">
                              <em class="h4 text-mute">{{$page->sections[2]->title}}</em><br>
                              <small class="text-muted">{{$page->sections[2]->summery}}</small><br/>
                              <a class="btn btn-default btn-xs btn-rounded" href="{{URL::to('/contents/' . $page->sections[2]->slug)}}">More <i class="ti-angle-double-right" style="font-size: 10px"></i></a>
                            </p>
                          </div>
                          <div class="item">
                            <p class="text-center">
                              <em class="h4 text-mute">{{$page->sections[3]->title}}</em><br>
                              <small class="text-muted">{{$page->sections[3]->summery}}</small><br/>
                              <a class="btn btn-default btn-xs btn-rounded" href="{{URL::to('/contents/' . $page->sections[3]->slug)}}">More <i class="ti-angle-double-right" style="font-size: 10px"></i></a>
                            </p>
                          </div>
                          <div class="item">
                            <p class="text-center">
                              <em class="h4 text-mute">{{$page->sections[4]->title}}</em><br>
                              <small class="text-muted">{{$page->sections[4]->summery}}</small><br/>
                              <a class="btn btn-default btn-xs btn-rounded" href="{{URL::to('/contents/' . $page->sections[4]->slug)}}">More <i class="ti-angle-double-right" style="font-size: 10px"></i></a>
                            </p>
                          </div>
                        </div>
                        <a class="left carousel-control" href="#c-slide" data-slide="prev">
                          <i class="fa fa-angle-left"></i>
                        </a>
                        <a class="right carousel-control" href="#c-slide" data-slide="next">
                          <i class="fa fa-angle-right"></i>
                        </a>
                    </div>

            </div>

        </div>
    </div>

    <!--footer-->
    @include('site.footer')
    <!--footer-->

  </div>
  <!--container--ful-width-->



        @include('partials.modals.employer_signup')
        @include('partials.modals.alumni_signup')
        @include('partials.modals.student_signup')



    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="<?php echo URL::to("assets/site/bootstrap.min.js");?>"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="<?php echo URL::to("assets/site/ie10-viewport-bug-workaround.js");?>"></script>


    <script type="text/javascript">

      $(function(){

        var windowHeight = $(window).height();
        var sliderHeight = windowHeight * (80/100); // 80%
        var sliderHeightPx = (sliderHeight) + 'px'; //
        var featuredFooterHeight = windowHeight - sliderHeight;
        var featuredFooterHeightPx = featuredFooterHeight + 'px';

        $('.slide-show-container').height(sliderHeightPx);
        $('.featured_footer').height(featuredFooterHeightPx);


        $('.signup-extension .items .item').hover(function(){
          $(this).addClass('active');
          $('.signup-extension .foot p').html(($(this).attr('data-text')));
        },function(){
          $(this).removeClass('active');
        });


        $('body').mousemove(function(ev) {

          var extensionOffset = $('.signup-extension').offset(); //top,left

          var top = parseInt(extensionOffset.top);
          var left = parseInt(extensionOffset.left);

          var bottom = top + $('.signup-extension').height();
          var right = left + $('.signup-extension').width();

            if(ev.pageX < left || ev.pageX > right || ev.pageY > bottom || ev.pageY < (top-40)) {
              $('.signup-extension').addClass('fadeOutDown');
              $('#signup-link').css('color','#ffffff');
            }
        });

        $('#signup-link').mouseover(function(e){
            $('.signup-extension').removeClass('hidden').removeClass('fadeOutDown');
            $(this).css('color','#00415c');
        });

        $('#login-link').mouseover(function(e){
          if( ! $('.signup-extension').hasClass('fadeOutDown') ) {
            $('.signup-extension').addClass('fadeOutDown');
            $('#signup-link').css('color','#ffffff');
          }
        });

        $('.right-navigation .social-icons span.icon').hover(function(){
          $(this).addClass('active');
        },function(){
          $(this).removeClass('active');
        });

        $('.section-b-thumb').hover(function(){
          $(this).addClass('active');
        },function(){
          $(this).removeClass('active');
        });

      });
    </script>
  <script type="text/javascript">

    $('#myModal').on('hidden.bs.modal', function (event) {
      $('input').val('');
      $('textarea').val('');
      $('#student-form-submit-button').removeClass('btn-default').removeClass('fa fa-check btn-success');
    });


    $('#myModal').on('shown.bs.modal', function (event) {

        $('#wizardform').bootstrapWizard('show',0);

        /**
        * handle form submit for student.
        */
        $('#student-form-submit-button').on('click',function(e) {


            if($(this).hasClass('btn-success') || $(this).hasClass('btn-disabled')) {
              return;
            }

            var student = {};
            student.token = $('_token').val();

            student.first_name = $('#student_first_name').val();
            student.last_name = $('#student_last_name').val();
            student.gender = $('#student_gender option:selected').text();
            student.email = $('#student_email').val();
            student.cell_phone = $('#student_cell_phone').val();
            student.phone_number = $('#student_telephone').val();

            student.student_id = $('#student_studentid').val();
            student.current_cgpa = $('#student_cgpa').val();
            student.credits_completed = $('#student_credits_completed').val();
            student.department_id = $('#student_department option:selected').val();
            student.major = $('#student_major option:selected').val();
            student.minor = $('#student_minor option:selected').val();
            student.semester = $('#student_semester option:selected').val();


            student.present_address = $('#student_present_address').val();
            student.present_city = $('#student_present_city').val();
            student.present_postal_code = $('#student_postal_code').val();
            student.permanent_address = $('#student_permanent_address').val();
            student.permanent_city = $('#student_permanent_city').val();
            student.permanent_postal_code = $('#student_permanent_postal_code').val();
            student.web_url = $('#student_web_url').val();

            student.gurdian_name = $('#student_gurdian_name').val();
            student.gurdian_relation = $('#student_gurdian_relation').val();
            student.gurdian_work_institute = $('#student_gurdian_work_institute').val();
            student.gurdian_designation = $('#student_gurdian_design').val();
            student.gurdian_contact = $('#student_gurdian_contact').val();
            student.gurdian_email = $('#student_gurdian_email').val();

            student.password = $('#student_password').val();

            student.bio = $('#student_bio').val();
            student.employment_status = $('#student_employment_status option:selected').val();

            $(this).html('Submitting...');
            var that = $(this);
            $(this).addClass('disabled');
            $.post('/student-register',student, function(response){
              console.log(response);
              if(response.status == 'success') {
                $('#form-success-message').removeClass('hidden').addClass('animated fadeIn');
                that.removeClass('disabled').removeClass('btn-default').addClass('fa fa-check btn-success').html('Success');
              } else {

              }
            });


        });
    });

  </script>

  <script src="assets/js/app.js"></script>
  <script src="assets/js/slimscroll/jquery.slimscroll.min.js"></script>
  <script src="assets/js/parsley/parsley.min.js"></script>
  <script src="assets/js/wizard/jquery.bootstrap.wizard.js"></script>
  <script src="assets/js/wizard/demo.js"></script>
  <script src="assets/js/app.plugin.js"></script>
  <script type="text/javascript" src="assets/js/scrollReveal.js"></script>
  <script type="text/javascript" src="assets/plugins/owl-carousel/owl.carousel.min.js"></script>
  <script type="text/javascript">
    window.sr = new scrollReveal();
  </script>




<script type="text/javascript">
    $(document).ready(function(){
        var winHeight = $(window).height();
        $(window).scroll(function(){
            if($(window).scrollTop() >= winHeight) {
                $(".navbar.sticky").removeClass('hidden fadeOutDown').addClass('animated fadeInUp');
            } else {
                if($('.navbar.sticky').hasClass('animated')) {
                    $(".navbar.sticky").removeClass('fadeInUp').addClass('fadeOutDown hidden');
                }
            }
        });
    });

  </script>




  </body>
</html>