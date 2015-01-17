
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">
    <title>Office of Career Services & Alumni Relations</title>
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="<?php echo URL::to("");?>/assets/css/bootstrap.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo URL::to("");?>/assets/css/animate.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo URL::to("");?>/assets/css/font-awesome.min.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo URL::to("");?>/assets/css/icon.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo URL::to("");?>/assets/css/font.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo URL::to("");?>/assets/css/app.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo URL::to("");?>/assets/themify-icons/themify-icons.css" type="text/css" />
    <link rel="stylesheet" type="text/css" href="/assets/css/thumbnails-icons/icons.css" />

    <link rel="stylesheet" type="text/css" href="/assets/plugins/owl-carousel/owl.carousel.css" />
    <link rel="stylesheet" type="text/css" href="/assets/plugins/owl-carousel/owl.theme.css" />
    <link rel="stylesheet" type="text/css" href="/assets/plugins/owl-carousel/owl.transitions.css" />


    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style type="text/css">
      .container-full-width {
        width: 100%;
        margin:0 auto;
        position: relative;
      }

      .section-a {
        background-color: #f9f9f9;
      }

      .slide-show-container {
        width: 100%;
        height: 40em;
        background-color: transparent;
        position: relative;
      }
      .slides .slide img {
        width: 100%;
        position: absolute;
        height: 100%;
        z-index: 22;
      }
      .slides .slide .slide-content {
        z-index: 99999;
        color: white;
        position: absolute;
        bottom: 120px;
        padding: 80px;
        z-index: 9999;
      }
      .slides .slide .slide-content h2 {
        font-size: 40px;
        font-weight: 200;
      }

      .slides .slide .slide-content a {
        padding:13px;
        text-transform: uppercase;
        background-color: transparent;
        border: 2px solid #ffffff;
        color: white;
        font-weight: 700;
        border-radius: 4px;
        border-width: 2px;
        letter-spacing: 1px;
        transition: all .5s;
      }

      .slides .slide .slide-content a:hover {
        color: black;
        background-color: #ffffff;
      }

      .left-navigation {
        left: 80px;
        top:20px;
        color: white;
        position: absolute;
        font-size: 15px;
        z-index: 99999;
      }

      .left-navigation a, .footer-head {
        color: white;
        font-weight: 700;
      }

      .left-navigation a:hover {
        color : #00415c;
      }

      .signup-extension {
        width: 300px;
        height: 100px;
        background-color: white;
        border-radius: 10px;
        position: relative;
        left: -60px;
        margin: 20px;
        z-index: 999999999999;
      }

      .modal-backdrop, .modal {
        position: fixed;
        z-index: 99999999;
      }
      

      .signup-extension .arrow-up {
        width: 0; 
        height: 0; 
        border-top: 15px solid white;
        border-left: 15px solid transparent;
        border-right: 15px solid white;
        border-bottom: 15px solid transparent;
        border-radius: 2px 2px 2px 2px;
        -webkit-transform: rotate(-45deg);
        -moz-transform: rotate(-45deg);
        left: 50px;
        top : -7px;
        position: absolute;
      }
      

      .signup-extension .foot {
        height: 35px;
        width: 100%;
        background-color: #32425C;
        position: absolute;
        bottom: 0px;
        border-radius: 0px 0px 10px 10px;
      }

      .signup-extension .items {
        width: 85%;
        margin: 0 auto;
        padding-top: 15px;
      }

      .signup-extension .items .item {
        width: 80px;
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

      .hidden {
        display: hidden;
      }

      .right-navigation {
        right: 80px;
        top:20px;
        position: absolute;
        font-size: 15px;
        z-index: 99999;
      }

      .right-navigation .social-icons span.icon {
          display: inline-block;
          width: 35px;
          background-repeat: no-repeat;
          height: 35px;
          margin:5px;
          background-size: 35px 73px;
          transition: all .3s;
      }
      
      .right-navigation .social-icons span.icon.fb-icon {
        background-image: url(assets/images/social/fb.png);  
      }
      .right-navigation .social-icons span.icon.twitter-icon {
        background-image: url(assets/images/social/twitter.png);  
      }

      .right-navigation .social-icons span.icon.google-plus-icon {
        background-image: url(assets/images/social/google-plus.png);  
      }
      
      
      .right-navigation .social-icons span.icon:hover {
        cursor: pointer;
      }


      .right-navigation .social-icons span.icon.active {
        background-position: 0px -39px;
      }

      #slide2 > .slide-content > a {
        background-color: transparent;
        color: white;
      }
      #slide2 > .slide-content > a:hover {
        background-color: #21AB9B;
        border: 2px solid #21AB9B;
        color: white;
      }

      .modal-dialog {
        z-index: 99999999999;
      }

      .featured-header {
        height: 10em;
        background-color: #ffffff;
        padding-bottom: 10px;
      }

      .featured-header a.title-link  {
        color: #163546;
        text-transform: uppercase;
        background-color: transparent;
        font-weight: 700;
        font-size: 1.5rem;
        font-size: 15px;
        top: 20px;
        letter-spacing: 1px;
      }

      .featured-header .navigation-section .row .item {
        padding:10px;
      }
      .featured-header .navigation-section .row .item ul {
        padding : 0px;
        list-style-type: none;
      }
      i {
        font-size: 12px;
      }

      #cso_logo {
        margin : 1.6em 0em 0em 3em;
      }

      .section-b {
        width: 90%;
        max-width: 1400px;
        margin : 0 auto;
        background-color: #f9f9f9;
        margin-top: 50px;
      }

      .section-b-thumb {
        border: 2px solid #F2F2F2;
        display: inline-block;
        margin : 15px;
        width: 30%;
        height: 300px;
        margin-top: 50px;
        position: relative;
        transition : all .4s;
      }

      .section-b-thumb.active {
        border: 2px solid #788288;
      }

      .section-b-thumb.active .icon-holder {
        /*-webkit-transform: scaleX(1.8);
        -webkit-transform: scaleY(1.2);*/
        width: 140px;
      }

      .section-b-thumb .icon-holder {
        width: 100px;
        height: 100px;
        background-color: #F9F9F9;
        position: relative;
        top: -35px;
        text-align: center;
        margin: 0 auto;
        transition : all .4s;
      }

      .icon-holder i {
        font-size : 4.5em;
      }


      .section-b-wrapper {
        background-color: #ffffff;  
      }
      .section-b h2 {
        text-align: center;
        padding : 20px;
      }
      


      .section-b-thumb .section-content {
          height: auto;
          position: absolute;
          top:0;
          text-align: center;
          width: 100%;
          padding-top: 50px;
      } 

      .section-b-thumb .section-content p.section-title {
        transition: all .9s;
        padding:5px;
        text-transform: uppercase;
        /*background-color: transparent;*/
        /*border: 2px solid #ffffff;*/
        /*color: white;*/
        font-weight: 900;
        /*border-radius: 4px;*/
        /*border-width: 2px;*/
        letter-spacing: 2px;
        /*transition: all .5s;*/
      }

      .section-b-thumb .section-content div.section-description {
        padding:10px;
      }

      div.section-description p {
        color: #788288;
        font-size: 13px;
        letter-spacing: 1px;
      }
      div.section-description a {
        margin-top: 10px;
      } 
      
    
      .footer {
        margin-top: 100px;
      }
      
      .footer-head {
        background-color: #1D4355;
        text-align: center;
        padding:25px;

      }

      .footer-body-wrapper {
        background-color: #163546;
        min-height: 300px;
        padding-top: 30px;
      }

      .footer-body-wrapper .footer-body {
        max-width: 1400px;
        margin: 0 auto;
        padding-left:50px;
        padding-right:50px;
        background-color: white;
        color: white;
      }
      .footer-body h3 {
        font-weight: 700;
      }

      .footer-body ul li p a {
        font-weight: 500;
        font-size: 14px;
        color: white;
      }

      .footer-body ul {
        list-style-type: none;
        padding-left: 0px;
      }

      .footer .social-feed {
        height: 240px;
        overflow-y : scroll;
        background-color: transparent;
        border:none;
      }

      .panel-default {
        background-color: none;
      }

      .navbar.sticky {
        position: fixed;
        z-index : 99999999;
        background : white;
        width: 100%;
      }

    </style>
  </head>
  <body>

@include('site.navigation')

  <div class="container-full-width section-a">
    <div class="left-navigation">
      <a id="signup-link">Sign up</a> | <a id="login-link" href="/sign-in">Log in</a>
      <div class="signup-extension hidden animated fadeInDown">
        <div class="arrow-up"></div>
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
          <img class="animated fadeInUp" src="{{URL::to('/files/slider/slide1.JPG');}}" alt="">
          <div class="slide-content">
            <h2 class="animated fadeInRight">We have great offer going on in our campus. <br/> So what are you waiting for.</h2>
            <br><br>
            <a class="animated fadeInUp" href="">APPLY NOW <span class="ti-arrow-right"></span></a>
          </div>
        </div>

        <div class="slide hidden" id="slide2">
          <img class="animated fadeInRight" src="{{URL::to('/files/slider/slide2.JPG');}}" alt="">
          <div class="slide-content">
            <h2 class="animated fadeInRight">Interviews has changed the way it used be.</h2>
            <p style="font-size : 1.9rem" class="animated fadeInRight">Loren ipsum dolor sit amet .Loren ipsum dolor sit amet .Loren ipsum dolor sit amet .Loren ipsum dolor sit amet .</p>
            <br><br>
            <a class="animated flipInX" href="">INTERVIEW Skills <span class="ti-arrow-right"></span></a>
          </div>
        </div>
        
        <div class="slide hidden">
          <img class="animated fadeInLeft" src="{{URL::to('/files/slider/slide3.JPG');}}" alt="">
          <div class="slide-content">
              <h2 class="animated fadeInDown">Loren ipsum dolor sit amet. <br/> shell wef wef w wefwef.</h2>
              <br><br>
              <a class="animated flipInY" href="">ROCK NOW <span class="ti-arrow-right"></span></a>
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
                <div class="col-xs-5 item">
                  <a href="" class="title-link">{{$page->sections[0]->title}}</a>
                  <p>{{$page->sections[0]->summery}}</p>
                  <a href="{{URL::to('/contents/' . $page->sections[0]->slug )}}" class="btn btn-default btn-xs btn-rounded">more <i class="ti-angle-double-right"></i></a>
                </div>
                <div class="col-xs-4 item">
                  <a href="" class="title-link">Recent updates</a>
                  <ul>
                    @foreach($recent_updates as $update)
                    <li>
                      <i class="ti-angle-double-right"></i> <a href="{{URL::route('news_update.show', $update->slug)}}"> {{$update->title}}</a>
                    </li>
                    @endforeach

                  </ul>
                  <a href="" class="btn btn-default btn-xs btn-rounded">more <i class="ti-angle-double-right"></i></a>
                </div>
                <div class="col-xs-3 item">
                  <a href="" class="title-link">FIND MORE</a>
                  <ul>
                    <li>
                      <i class="ti-angle-double-right"></i> <a href="">Internships</a>
                    </li>
                    <li>
                      <i class="ti-angle-double-right"></i><a href=""> Professional Skill Development</a>
                    </li>
                    <li>
                      <i class="ti-angle-double-right"></i><a href=""> Employers</a>
                    </li>
                    <li>
                      <i class="ti-angle-double-right"></i><a href=""> JOBS</a>
                    </li>
                  </ul>
                </div>
              </div>
          </div>
        </div>
    </div>


    <div class="row section-b">
      <h2 data-sr='enter left over .7s'>
        {{$page->body_title}}
      </h2>
      <div class="section-b-thumb" data-sr='enter bottom wait 0.5s' >
        <div class="icon-holder">
          <i class="flaticon-directional8"></i>
        </div>
        <div class="section-content">
            <p class="section-title">
                {{$page->sections[1]->title}}
            </p>
            <div class="section-description">
              <p>
                   {{$page->sections[1]->summery}}
              </p>
              <a href="{{URL::to('/contents/' . $page->sections[1]->slug)}}" class="btn btn-default btn-sm btn-rounded">Find More <i class="ti-angle-double-right"></i></a>
            </div>
        </div>
      </div>
      <div class="section-b-thumb" data-sr='enter bottom wait 1.0s'>
        <div class="icon-holder">
          <i class="flaticon-job3"></i>
        </div>
        <div class="section-content">
            <p class="section-title">
                {{$page->sections[2]->title}}
            </p>
            <div class="section-description">
              <p>
                    {{$page->sections[2]->summery}}
              </p>

              <a href="{{URL::to('/contents/' . $page->sections[2]->slug)}}" class="btn btn-default btn-sm btn-rounded">Find More <i class="ti-angle-double-right"></i></a>
            </div>
        </div>
      </div>
      <div class="section-b-thumb" data-sr='enter bottom wait 1.5s'>
        <div class="icon-holder">
          <i class="flaticon-seo10"></i>
        </div>
        <div class="section-content">
            <p class="section-title">
                {{$page->sections[3]->title}}
            </p>
            <div class="section-description">
              <p>
                {{$page->sections[3]->summery}}
              </p>
              <a href="{{URL::to('/contents/' . $page->sections[3]->slug)}}" class="btn btn-default btn-sm btn-rounded">Find More <i class="ti-angle-double-right"></i></a>
            </div>
        </div>
      </div>
    </div>


    <!--
    <div class="section-b row">
      <h2 data-sr='enter up over 2s'>WE HAVE PARTNERED WITH THE LEGENDS </h2>
                <div class="col-sm-12">
                      <div class="panel b-a">
                        <div class="row m-n">
                          
                          <div class="col-md-3 col-xs-6 b-b b-r">
                            <a href="#" class="block padder-v hover">
                              <span class="i-s i-s-2x pull-left m-r-sm">
                                <i class="i i-hexagon2 i-s-base text-danger hover-rotate"></i>
                                <i class="i i-plus2 i-1x text-white"></i>
                              </span>
                              <span class="clear">
                                <span class="h3 block m-t-xs text-danger">2,000</span>
                                <small class="text-muted text-u-c">New Visits</small>
                              </span>
                            </a>
                          </div>
                          <div class="col-md-3 col-xs-6 b-b b-r">
                            <a href="#" class="block padder-v hover">
                              <span class="i-s i-s-2x pull-left m-r-sm">
                                <i class="i i-hexagon2 i-s-base text-info hover-rotate"></i>
                                <i class="i i-location i-sm text-white"></i>
                              </span>
                              <span class="clear">
                                <span class="h3 block m-t-xs text-info">25 <span class="text-sm">m</span></span>
                                <small class="text-muted text-u-c">location</small>
                              </span>
                            </a>
                          </div>
                          <div class="col-md-3 col-xs-6 b-b b-r">
                            <a href="#" class="block padder-v hover">
                              <span class="i-s i-s-2x pull-left m-r-sm">
                                <i class="i i-hexagon2 i-s-base text-info hover-rotate"></i>
                                <i class="i i-location i-sm text-white"></i>
                              </span>
                              <span class="clear">
                                <span class="h3 block m-t-xs text-info">25 <span class="text-sm">m</span></span>
                                <small class="text-muted text-u-c">location</small>
                              </span>
                            </a>
                          </div>
                          <div class="col-md-3 col-xs-6 b-b b-r">
                            <a href="#" class="block padder-v hover">
                              <span class="i-s i-s-2x pull-left m-r-sm">
                                <i class="i i-hexagon2 i-s-base text-primary hover-rotate"></i>
                                <i class="i i-alarm i-sm text-white"></i>
                              </span>
                              <span class="clear">
                                <span class="h3 block m-t-xs text-primary">9:30</span>
                                <small class="text-muted text-u-c">Meeting</small>
                              </span>
                            </a>
                          </div>
                          <div class="col-md-3 col-xs-6 b-b b-r">
                            <a href="#" class="block padder-v hover">
                              <span class="i-s i-s-2x pull-left m-r-sm">
                                <i class="i i-hexagon2 i-s-base text-danger hover-rotate"></i>
                                <i class="i i-plus2 i-1x text-white"></i>
                              </span>
                              <span class="clear">
                                <span class="h3 block m-t-xs text-danger">2,000</span>
                                <small class="text-muted text-u-c">New Visits</small>
                              </span>
                            </a>
                          </div>
                          <div class="col-md-3 col-xs-6 b-b b-r">
                            <a href="#" class="block padder-v hover">
                              <span class="i-s i-s-2x pull-left m-r-sm">
                                <i class="i i-hexagon2 i-s-base text-info hover-rotate"></i>
                                <i class="i i-location i-sm text-white"></i>
                              </span>
                              <span class="clear">
                                <span class="h3 block m-t-xs text-info">25 <span class="text-sm">m</span></span>
                                <small class="text-muted text-u-c">location</small>
                              </span>
                            </a>
                          </div>
                          <div class="col-md-3 col-xs-6 b-b b-r">
                            <a href="#" class="block padder-v hover">
                              <span class="i-s i-s-2x pull-left m-r-sm">
                                <i class="i i-hexagon2 i-s-base text-info hover-rotate"></i>
                                <i class="i i-location i-sm text-white"></i>
                              </span>
                              <span class="clear">
                                <span class="h3 block m-t-xs text-info">25 <span class="text-sm">m</span></span>
                                <small class="text-muted text-u-c">location</small>
                              </span>
                            </a>
                          </div>
                          <div class="col-md-3 col-xs-6 b-b b-r">
                            <a href="#" class="block padder-v hover">
                              <span class="i-s i-s-2x pull-left m-r-sm">
                                <i class="i i-hexagon2 i-s-base text-primary hover-rotate"></i>
                                <i class="i i-alarm i-sm text-white"></i>
                              </span>
                              <span class="clear">
                                <span class="h3 block m-t-xs text-primary">9:30</span>
                                <small class="text-muted text-u-c">Meeting</small>
                              </span>
                            </a>
                          </div>

                        </div>
                      </div>
              </div>
    </div>

    -->

    <div class="row section-b">
      <h2 data-sr='enter up over 2s'>SOME OF THE ORGANISATIONS WE HAVE PARTNERED WITH </h2>

      <div id="owl-demo">
        @foreach($coolest_orgs as $org)
            <div class="item"><img width="200px" height="" src="{{URL::to('/files/orgs/' . $org->image)}}" alt="{{$org->initial}}"></div>
        @endforeach
        <!--
        <div class="item"><img src="http://placehold.it/200x180" alt="Owl Image"></div>
        -->
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



        (function(){
          var s = $('.slide');
          var current = 0;
          var next = current + 1;
          setInterval(function(){
            $(s[current]).addClass('hidden');
            $(s[next]).removeClass('hidden').addClass('fadeIn');
            current = next;
            next++;
            if(next == s.length) next = 0;
          }, 5000);

          

        })();

      });
    </script>



  <script src="assets/js/app.js"></script>  
  <script src="assets/js/slim/jquery.slimscroll.min.js"></script>
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
      
      $(document).ready(function() {

        $("#owl-demo").owlCarousel({
          navigation:true,
          responsive: true
        });

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