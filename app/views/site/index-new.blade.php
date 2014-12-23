
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


<header class="hidden sticky navbar navbar-static-top bs-docs-nav" id="top" role="banner">
  <div class="container">
    <div class="navbar-header">
      <button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a href="../" class="navbar-brand">
        CAREER SERVICES OFFICE
      </a>
    </div>
    <nav class="collapse navbar-collapse bs-navbar-collapse" role="navigation">
      <ul class="nav navbar-nav">
        <li>
          <a href="internships-program">INTERNSHIPS</a>
        </li>
        <li>
          <a href="psdp-program">PSDP Programs</a>
        </li>
        <li>
          <a href="searching-jobs">JOBS</a>
        </li>
        <li>
          <a href="services-for-students">Students</a>
        </li>
        <li>
          <a href="alumnies">Alumnies</a>
        </li>
        <li>
          <a href="affiliated-organisations">Organisations</a>
        </li>
        <li>
          <a href="../customize/">Contact us</a>
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="http://expo.getbootstrap.com" onclick="ga('send', 'event', 'Navbar', 'Community links', 'Expo');">Expo</a></li>
        <li><a href="http://blog.getbootstrap.com" onclick="ga('send', 'event', 'Navbar', 'Community links', 'Blog');">Blog</a></li>
      </ul>
    </nav>
  </div>
</header>



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
          <img class="animated fadeInUp" src="{{URL::to('/assets/images/slides/1.png');}}" alt="">
          <div class="slide-content">
            <h2 class="animated fadeInRight">We have great offer going on in our campus. <br/> So what are you waiting for.</h2>
            <br><br>
            <a class="animated fadeInUp" href="">APPLY NOW <span class="ti-arrow-right"></span></a>
          </div>
        </div>

        <div class="slide hidden" id="slide2">
          <img class="animated fadeInRight" src="{{URL::to('/assets/images/slides/2.png');}}" alt="">
          <div class="slide-content">
            <h2 class="animated fadeInRight">Interviews has changed the way it used be.</h2>
            <p style="font-size : 1.9rem" class="animated fadeInRight">People are no longer dumbass like they used to be. So to compete with them skills are are essentials.</p>
            <br><br>
            <a class="animated flipInX" href="">INTERVIEW Skills <span class="ti-arrow-right"></span></a>
          </div>
        </div>
        
        <div class="slide hidden">
          <img class="animated fadeInLeft" src="{{URL::to('/assets/images/slides/3.png');}}" alt="">
          <div class="slide-content">
              <h2 class="animated fadeInDown">Know your shit. <br/> ROCK THE WORLD.</h2>
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
                  <a href="" class="title-link">What we are doing with internships?</a>
                  <p>We are taking the lead of giving the students corporate grade internships. Teaching them how to be the Leader of all.</p>
                  <a href="" class="btn btn-default btn-xs btn-rounded">more <i class="ti-angle-double-right"></i></a>
                </div>
                <div class="col-xs-4 item">
                  <a href="" class="title-link">Recent updates</a>
                  <ul>
                    <li>
                      <i class="ti-angle-double-right"></i> <a href=""> Hello world this is an upadte.</a>
                    </li>
                    <li>
                      <i class="ti-angle-double-right"></i><a href=""> Another cool update from CSO.</a>
                    </li>
                    <li>
                      <i class="ti-angle-double-right"></i><a href=""> We have launched an awesome blog</a>
                    </li>
                  </ul>
                  <a href="" class="btn btn-default btn-xs btn-rounded">more <i class="ti-angle-double-right"></i></a>
                </div>
                <div class="col-xs-3 item">
                  <a href="" class="title-link">FIND MORE</a>
                  <ul>
                    <li>
                      <i class="ti-angle-double-right"></i> <a href="">BLOG</a>
                    </li>
                    <li>
                      <i class="ti-angle-double-right"></i><a href=""> SCHEDUELS</a>
                    </li>
                    <li>
                      <i class="ti-angle-double-right"></i><a href=""> GALLERIES</a>
                    </li>
                  </ul>
                </div>
              </div>
          </div>
        </div>
    </div>


    <div class="row section-b">
      <h2 data-sr='enter left over .7s'>We are the <span class="important">League of Lengends</span> in your Job Searching </h2>
      <div class="section-b-thumb" data-sr='enter bottom wait 0.5s' >
        <div class="icon-holder">
          <i class="flaticon-directional8"></i>
        </div>
        <div class="section-content">
            <p class="section-title">WE GUIDE THE SUPERMEN</p>
            <div class="section-description">
              <p>
                  Whether you need help writing a CV, or
structuring a cover letter; require a better understanding of the ‘market’, 'corporate structures' or any other (possibly strange sounding) 
              </p>
              <a href="" class="btn btn-default btn-sm btn-rounded">HOW WE GUIDE <i class="ti-angle-double-right"></i></a>
            </div>
        </div>
      </div>
      <div class="section-b-thumb" data-sr='enter bottom wait 1.0s'>
        <div class="icon-holder">
          <i class="flaticon-job3"></i>
        </div>
        <div class="section-content">
            <p class="section-title">PREPARING YOUR CV</p>
            <div class="section-description">
              <p>
                  Whether you need help writing a CV, or
structuring a cover letter; require a better understanding of the ‘market’, 'corporate structures' or any other (possibly strange sounding) 
              </p>

              <a href="" class="btn btn-default btn-sm btn-rounded">KNOW MORE <i class="ti-angle-double-right"></i></a>
            </div>
        </div>
      </div>
      <div class="section-b-thumb" data-sr='enter bottom wait 1.5s'>
        <div class="icon-holder">
          <i class="flaticon-seo10"></i>
        </div>
        <div class="section-content">
            <p class="section-title">BUILD COMMUNICATION SKILLS</p>
            <div class="section-description">
              <p>
                  Whether you need help writing a CV, or
structuring a cover letter; require a better understanding of the ‘market’, 'corporate structures' or any other (possibly strange sounding) 
              </p>
              <a href="" class="btn btn-default btn-sm btn-rounded">I AM INTERESTED <i class="ti-angle-double-right"></i></a>
            </div>
        </div>
      </div>
    </div>



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

    <div class="row section-b">
      <h2 data-sr='enter up over 2s'>SOME OF THE ORGANISATIONS WE HAVE PARTNERED WITH </h2>
      <div id="owl-demo">
        <div class="item"><img src="http://placehold.it/200x180" alt="Owl Image"></div>
        <div class="item"><img src="http://placehold.it/200x180" alt="Owl Image"></div>
        <div class="item"><img src="http://placehold.it/200x180" alt="Owl Image"></div>
        <div class="item"><img src="http://placehold.it/200x180" alt="Owl Image"></div>
        <div class="item"><img src="http://placehold.it/200x180" alt="Owl Image"></div>
        <div class="item"><img src="http://placehold.it/200x180" alt="Owl Image"></div>
        <div class="item"><img src="http://placehold.it/200x180" alt="Owl Image"></div>
        <div class="item"><img src="http://placehold.it/200x180" alt="Owl Image"></div>
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






















  <!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">Register as a student</h4>
      </div>
      <div class="modal-body">

              <div class="row">
                <div class="col-sm-12">
                  <form id="wizardform" method="get" action="">
                    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                    <div class="panel panel-default">
                      <div class="panel-heading">
                        <ul class="nav nav-tabs font-bold">
                          <li><a href="#step1" data-toggle="tab">Basic </a></li>
                          <li><a href="#step2" data-toggle="tab">Academic </a></li>
                          <li><a href="#step3" data-toggle="tab">Personal</a></li>
                          <li><a href="#step4" data-toggle="tab">Gurdian </a></li>
                          <li><a href="#step5" data-toggle="tab">Finish </a></li>
                        </ul>
                      </div>
                      <div class="panel-body">
                        
                        <div class="tab-content">

                          <!--basic informations -->
                          <div class="tab-pane" id="step1">
                            <div class="row">
                              <div class="col-xs-12">
                                <label for="">Your Name : </label>
                              </div>
                              <div class="col-xs-6">
                                <input type="text" class="form-control" data-trigger="change" data-required="true" placeholder="First Name" id="student_first_name">
                              </div>
                              <div class="col-xs-6">
                                <input type="text" class="form-control" data-trigger="change" data-required="true" placeholder="Last Name" id="student_last_name">
                              </div>

                              <div class="col-xs-12">
                                <div class="form-group">
                                  <label for="gender">Gender </label>
                                  <select style="width:260px" name="student_gender" id="student_gender" class="form-control">
                                    <option value="m">Male</option>
                                    <option value="f">Female</option>
                                    <option selected value="o">Other</option>
                                  </select>
                                </div>
                              </div>
                              
                              <div class="col-xs-12">
                                <div class="row">
                                  <div class="col-xs-12">
                                    <label for="">Contact Information</label>
                                    <input type="text" class="form-control" data-trigger="change" data-required="true" placeholder="Email address" id="student_email" data-type="email">
                                  </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-6 form-group">
                                      <br>
                                      <input type="text" class="form-control" data-trigger="change" data-required="true" placeholder="Cell Phone" id="student_cell_phone" data-type="number">
                                    </div>
                                    <div class="col-xs-6 form-group">
                                    <br>
                                      <input type="text" class="form-control" data-trigger="change" data-required="true" placeholder="Telephone" id="student_telephone" data-type="number">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-xs-6 form-group">
                                      <br>
                                      <input type="password" class="form-control" data-trigger="change" data-required="true" placeholder="Password" id="student_password" >
                                    </div>
                                    <div class="col-xs-6 form-group">
                                    <br>
                                      <input type="password" class="form-control" data-trigger="change" data-required="true" placeholder="Confirm" id="student_password_confirm" data-equalto="#student_password" >
                                    </div>
                                </div>


                              </div>
                            </div>
                          </div>




                          <!--basic informations -->
                          <div class="tab-pane" id="step2">
                            <div class="row">
                              <div class="col-xs-12">
                                <p>Your current Student ID:</p>
                                <input id="student_studentid" type="text" class="form-control" data-trigger="change" data-required="true" data-type="number" placeholder="Student ID">
                              </div>
                              <div class="col-xs-6">
                                <br>
                                <input id="student_cgpa" type="text" class="form-control" data-trigger="change" data-required="true" data-type="number" placeholder="current cgpa" name="current_cgpa">
                              </div>
                              <div class="col-xs-6">
                                <br>
                                <input id="student_credits_completed" type="text" class="form-control" data-trigger="change" data-required="true" data-type="number" placeholder="credits completed" name="credits_completed">
                              </div>

                                <div class="col-xs-12 form-group">
                                  <label for="department">Department : </label>
                                  <select class="form-control" name="department" id="student_department">
                                    @foreach($departments as $department)
                                        <option value="{{$department->id}}">{{$department->name}}</option>
                                    @endforeach
                                  </select>
                                </div>

                                <div class="col-xs-6 form-group">
                                  <label for="major">Major : </label>
                                  <select class="form-control" name="major" id="student_major">
                                    @foreach($courses as $course)
                                        <option value="{{$course->id}}">{{$course->name}}</option>
                                    @endforeach
                                  </select>
                                </div>

                                <div class="col-xs-6 form-group">
                                  <label for="minor">Minor : </label>
                                  <select class="form-control" name="minor" id="student_minor">
                                    @foreach($courses as $course)
                                        <option value="{{$course->id}}">{{$course->name}}</option>
                                    @endforeach
                                  </select>
                                </div>

                                <div class="col-xs-12 form-group">
                                  <label for="semester">Semester : </label>
                                  <select class="form-control" name="minor" id="student_semester">
                                    <option value="s">Second Last</option>
                                    <option value="l">Last</option>
                                  </select>
                                </div>
                            </div>
                          </div>
                          
                        


                          <!-- personal information -->
                          <div class="tab-pane" id="step3">
                            <section class="panel panel-default">
                              <header class="panel-heading">
                                <span class="h4">Your Present address</span>
                              </header>
                              <div class="panel-body">
                                  <div class="form-group">
                                    <textarea id="student_present_address" name="present_address" class="form-control" rows="6" data-minwords="6" data-required="true" placeholder="Address"></textarea>
                                  </div>
                                  <div class="form-group pull-in clearfix">
                                    <div class="col-sm-6">
                                      <input type="text" class="form-control" placeholder="City" data-required="true" name="present_city" id="student_present_city">
                                    </div>
                                    <div class="col-sm-6">
                                      <input type="text" class="form-control" placeholder="Postal Code" data-required="true" name="present_postal_code" id="student_postal_code">
                                    </div>
                                  </div>
                              </div>
                            </section>

                            <section class="panel panel-default">
                              <header class="panel-heading">
                                <span class="h4">Your Permanent address</span>
                              </header>
                              <div class="panel-body">
                                  <div class="form-group">
                                    <textarea id="student_permanent_address" name="permanent_address" class="form-control" rows="6" data-minwords="6" data-required="true" placeholder="Address"></textarea>
                                  </div>
                                  <div class="form-group pull-in clearfix">
                                    <div class="col-sm-6">
                                      <input id="student_permanent_city" class="form-control" placeholder="City" data-required="true" name="permanent_city">
                                    </div>
                                    <div class="col-sm-6">
                                      <input class="form-control" placeholder="Postal Code" data-required="true" name="permanent_postal_code" id="student_permanent_postal_code">
                                    </div>
                                    <br>
                                  </div>
                              </div>
                            </section>
                            <div class="col-sm-12">
                              <input type="url" class="form-control" placeholder="Web Url" data-required="true" name="student_web_url" id="student_web_url">
                            </div>
                            <br><br>
                          </div>


                          <!-- personal information -->
                          <div class="tab-pane" id="step4">
                            
                            <div class="form-group pull-in clearfix">
                              <div class="col-sm-12">
                                <label>Gurdian name</label>
                                <input type="text" class="form-control" data-required="true" name="gurdian_name" id="student_gurdian_name">
                              </div>
                              <div class="col-sm-12">
                                <label>Relationship with Gurdian</label>
                                <input  class="form-control" data-required="true" id="student_gurdian_relation">
                              </div>
                              <div class="col-sm-12">
                                <label>Name of the Institute Gurdian works in</label>
                                <input class="form-control" data-required="true" name="gurdian_work_institute" id="student_gurdian_work_institute">
                              </div>
                              <div class="col-sm-12">
                                <label>Designation of Gurdian in the institute</label>
                                <input class="form-control" data-required="true" name="gurdian_desig" id="student_gurdian_design">
                              </div>
                              <div class="col-sm-12">
                                <label>Gurdian's Contact number. </label>
                                <input class="form-control" data-required="true" name="gurdian_contact" id="student_gurdian_contact">
                              </div>
                              <div class="col-sm-12">
                                <label>Gurdian's Email address </label>
                                <input class="form-control" name="gurdian_email" id="student_gurdian_email">
                              </div>
                            </div>
                          </div>
                          <!--personal information-->

                          
                          <!--finish -->
                            <div class="tab-pane" id="step5">
                            <div class="form-group pull-in clearfix">
                              
                              <div class="col-sm-12">
                                <label>Tell something about yourself</label>
                                <textarea id="student_bio" name="student_bio" class="form-control" rows="6" data-minwords="6" data-required="true" placeholder="Address"></textarea>
                              </div>

                              <div class="col-sm-12">
                                <label>Your Employment status ? </label>
                                <select style="width:260px" name="gender" id="student_employment_status" class="form-control">
                                    <option value="employed">Employed</option>
                                    <option value="unemployed">Unemployed</option>
                                  </select>
                              </div>
                              <div class="col-sm-12">
                                <br/>
                               <div class="alert alert-success hidden" id="form-success-message">
                                <button type="button"  class="close" data-dismiss="alert">×</button>
                                <i class="fa fa-ok-sign"></i><strong>Thank you for signing up!</strong> Please check your email address for further instructions.
                              </div>

                                <a id="student-form-submit-button" href="#" class="btn btn-s-md btn-default btn-rounded">Submit</a>
                              </div>
                            </div>
                          </div>
                          <!--finish -->

                          <ul class="pager wizard m-b-sm">
                            <li class="previous first" style="display:none;"><a href="#">First</a></li>
                            <li class="previous"><a href="#">Previous</a></li>
                            <li class="next last" style="display:none;"><a href="#">Last</a></li>
                            <li class="next"><a href="#">Next</a></li>
                          </ul>
                        </div>

                        <h4>Completed</h4>
                        <div class="progress progress-xs m-t-md">
                          <div class="progress-bar bg-success"></div>
                        </div>

                      </div>
                    </div>
                  </form>
                </div>
              </div> 
      </div>
    </div>
  </div>
</div>








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
  </body>
</html>