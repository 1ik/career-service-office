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
    <link rel="stylesheet" type="text/css" href="/assets/css/thumbnails-icons/icons.css" />
    <link rel="stylesheet" type="text/css" href="{{URL::to('/assets/icons/internship_icons/flaticon.css')}}" />

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

    <link rel="stylesheet" href="{{URL::to('assets/css/landing-pages/internships.css')}}"/>

  </head>
  <body>




  @include('site.navigation')





  <div class="container-full-width section-a">

    @include('partials.pages.overlay-nav')

    <div class="slide-show-container">
      <div class="slides">

        <div class="slide">
          <img class="animated fadeInUp" src="{{URL::to('/assets/images/internships.jpg');}}" alt="">
          <div class="slide-content">
                <h1 class="animated fadeInRight">
                    {{$page->overlay_title}}
                </h1>
                <p>
                    {{$page->overlay_text}}
                </p>
            <br><br>
            <a class="animated fadeInUp" href="">Explore <span class="ti-arrow-right"></span></a>
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
    <div class="row">

      <h2 data-sr='enter left over .7s' class="main-title">
        <span class="important">
            {{$page->body_title}}
        </span>
      </h2>


      <div class="col-xs-12 col-md-3 left-points">




        <div class="section-b-thumb" data-sr='enter bottom wait 0.5s' >
            <div class="icon-holder">
              <i class="flaticon-compass69"></i>
            </div>
            <div class="section-content">
                <p class="section-title">{{$page->sections[0]->title}}</p>
                <div class="section-description">
                  <p>
                       {{$page->sections[0]->summery}}
                  </p>
                  <a href="{{URL::to('contents/' . $page->sections[0]->slug )}}" class="btn btn-default btn-xs">More</a>
                </div>
            </div>
        </div>




        <div class="section-b-thumb" data-sr='enter bottom wait 0.5s' >
            <div class="icon-holder">
              <i class="flaticon-affirmative1"></i>
            </div>
            <div class="section-content">
                <p class="section-title">{{$page->sections[1]->title}}</p>
                <div class="section-description">
                  <p>
                       {{$page->sections[1]->summery}}
                  </p>
                  <a href="{{URL::to('contents/' . $page->sections[1]->slug )}}" class="btn btn-default btn-xs">More</a>
                </div>
            </div>
        </div>

        <div class="section-b-thumb" data-sr='enter bottom wait 0.5s' >
            <div class="icon-holder">
              <i class="flaticon-verified9"></i>
            </div>
            <div class="section-content">
                <p class="section-title">{{$page->sections[2]->title}}</p>
                <div class="section-description">
                  <p>
                       {{$page->sections[2]->summery}}
                  </p>
                  <a href="{{URL::to('contents/' . $page->sections[2]->slug )}}" class="btn btn-default btn-xs">More</a>
                </div>
            </div>
        </div>

      </div>

      <div class="col-xs-12 col-md-6">
        <div class="post-item">
            <div class="caption wrapper-lg">
                {{$page->contents}}
            </div>
        </div>
      </div>

      <div class="col-xs-12 col-md-3 right-points">

              <div class="section-b-thumb" data-sr='enter bottom wait 0.5s' >
                  <div class="icon-holder">
                    <i class="flaticon-user3"></i>
                  </div>
                  <div class="section-content">
                      <p class="section-title">{{$page->sections[3]->title}}</p>
                      <div class="section-description">
                        <p>
                             {{$page->sections[3]->summery}}
                        </p>
                        <a href="{{URL::to('contents/' . $page->sections[3]->slug )}}" class="btn btn-default btn-xs">More</a>
                      </div>
                  </div>
              </div>

              <div class="section-b-thumb" data-sr='enter bottom wait 0.5s' >
                  <div class="icon-holder">
                    <i class="flaticon-job"></i>
                  </div>
                  <div class="section-content">
                      <p class="section-title">{{$page->sections[4]->title}}</p>
                      <div class="section-description">
                        <p>
                             {{$page->sections[4]->summery}}
                        </p>
                        <a href="{{URL::to('contents/' . $page->sections[4]->slug )}}" class="btn btn-default btn-xs">More</a>
                      </div>
                  </div>
              </div>

              <div class="section-b-thumb" data-sr='enter bottom wait 0.5s' >
                  <div class="icon-holder">
                    <i class="flaticon-job3"></i>
                  </div>
                  <div class="section-content">
                    <p class="section-title">{{$page->sections[5]->title}}</p>
                    <div class="section-description">
                      <p>
                           {{$page->sections[5]->summery}}
                      </p>
                      <a href="{{URL::to('contents/' . $page->sections[5]->slug )}}" class="btn btn-default btn-xs">More</a>
                    </div>
                </div>
              </div>

        </div>

    </div>
    </div>


    <div class="row footer">
      <div class="row footer-head">
          <p>SUBSCRIBE US TO GET REGULAR UPDATES</p>
          <form class="form-inline" role="form">
              <div class="form-group">
                <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Enter email">
              </div>
              <a href="#modal-form" class="btn btn-success" data-toggle="modal">Subscribe!</a>
          </form>
      </div>


      <div class="row footer-body-wrapper">
          <div class="footer-body">

            <div class="col-md-5" >
              <h3>Recent Posts</h3>
              <div class="post-links">
                <ul>
                  <li>
                    <p><i class="ti-angle-double-right"></i>
                    <a href="">
                      The Career Services Office (CSO), BRAC University Launches a Partnership with Voluntary Service Overseas (VSO) Bangladesh
                    </a>
                    </p>
                  </li>
                  <li>
                    <p>
                    <i class="ti-angle-double-right"></i>
                    <a href="">Career Serfvice office becomes dedicated job
                    partner with BDJobs.</a>
                    </p>
                  </li>
                  <li>
                    <p>
                      <i class="ti-angle-double-right"></i>
                      <a href="">Career Fare in Westin</a>
                    </p>
                  </li>
                  <li>
                    <p>
                      <i class="ti-angle-double-right"></i>
                      <a href="">Loren ipsum dolor sit amet</a>
                    </p>
                  </li>
                </ul>
              </div>
            </div>


            <div class="col-md-4 ">
              <h3>EVENTS</h3>
              <div class="post-links">
                <ul>
                  <li>
                    <p>
                      <a href="">
                        <i class="ti-angle-double-right"></i> Fall 2015 PSDP Registrations
                      </a>
                    </p>
                  </li>
                  <li>
                    <p>
                      <a href="">
                        <i class="ti-angle-double-right"></i>
                        Internship Registrations for 2015 Fall Open
                      </a>
                    </p>
                  </li>
                  <li>
                    <p>
                      <a href="">
                        <i class="ti-angle-double-right"></i> PSDP Registration 2014
                      </a>
                    </p>
                  </li>
                  <li>
                    <p>
                      <a href=""><i class="ti-angle-double-right"></i> Spring 2014 Registrations</a>
                    </p>
                  </li>
                </ul>
              </div>
            </div>

            <div class="col-md-3">
              <h3>HOTLINE </h3>
              <p>
                  We are always eger to listen from you. Please feel free to contact for any purpose in the following address.
              </p>
              <p style="font-size : 14px">
                  <i class="fa fa-mobile" style="font-size:14px"></i> +880 1932 986 985
              </p>
              <p style="font-size : 14px">
                  <i class="fa fa-phone" style="font-size:14px"></i> +880 0292121233
              </p>
              <p style="font-size : 14px">
                  <i class="fa fa-envelope-o" style="font-size:14px"></i> hello[.]cso.bracu.ac.bd
              </p>
            </div>
          </div>
      </div>
    </div>

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

  <script type="text/javascript" src="{{URL::to('assets/js/signup.js')}}"></script>

  </body>
</html>