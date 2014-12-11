
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



    <!-- Custom styles for this template -->
    <link href="<?php echo URL::to("/assets/site/style.css");?>" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <link rel="stylesheet" type="text/css" href="http://localhost/projects/cso-drupal/sites/all/themes/themeversity/libs/bxslider/jquery.bxslider.css">

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
      .slide-show-container {
        width: 100%;
        height: 44em;
        background-color: #33ccaa;
        position: relative;
      }
      .slides .slide img {
        width: 100%;
        position: absolute;
        height: 44em;
        z-index: 22;
      }
      .slides .slide .slide-content {
        z-index: 99999;
        color: white;
        position: absolute;
        bottom: 120px;
        padding: 80px;
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

      .left-navigation a {
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
      
    </style>
  </head>
  <body>
  <div class="container-full-width">
    <div class="left-navigation">
      <a href="" id="signup-link">Sign up</a> | <a id="login-link" href="">Log in</a>
      <div class="signup-extension hidden animated fadeInDown">
        <div class="arrow-up"></div>
          <div class="items">
            <div class="item" data-text="Enlighten yourself with jobs">
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
          <img src="{{URL::to('/assets/images/slides/1.png');}}" alt="">
          <div class="slide-content">
              <h2 class="animated fadeInRight">Get your employer's attention<br/>Get the most hot job.</h2>
              <br><br>
              <a class="animated fadeInRight" href="">APPLY NOW <span class="ti-arrow-right"></span></a>
          </div>
        </div>
        <div class="slide"></div>
        <div class="slide"></div>
      </div>
    </div>
  </div>





    <div class="container">
      <div class="topheader">
        <div class="row">
          <div class="col-sm-4 ">
            <img 
              id="cso_logo" 
              src="http://localhost/projects/cso-drupal/sites/all/themes/themeversity/img/csoicon.png" 
              width="250px" 
              height: ="130px" />
          </div>
          <div class="col-sm-5 col-sm-offset-3 site-info">
              <img 
                id="bracu_logo" 
                src="http://localhost/projects/cso-drupal/sites/all/themes/themeversity/img/bracu.png" 
                width="130px" height="130px"/>
          </div>
        </div>
        <!-- row -->
      </div>
      <!-- topheader -->

      <div class="navbar-inverse">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <!-- navbar-header-->

        <div class="navbar-collapse collapse">
          <nav role="navigation">
            <ul class="menu nav navbar-nav">
              <li class="first leaf active">
                <a href="/projects/cso-drupal/" title="" class="active">Home</a>
              </li>
              <li class="expanded dropdown">
                <a href="/projects/cso-drupal/content/basic-page" 
                  data-target="#" 
                  class="dropdown-toggle" 
                  data-toggle="dropdown">Dropdowns <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li class="first leaf">
                      <a href="/projects/cso-drupal/psdp-events" 
                        title="">Professional Skills Development Program (PSDP)</a>
                    </li>
                    <li class="leaf"><a href="/projects/cso-drupal/content/jobs" title="">Job Circulars</a></li>
                    <li class="leaf"><a href="/projects/cso-drupal/about" title="about us">About us</a></li>
                    <li class="last leaf"><a href="http://localhost/cso/internships" title="">Internships</a></li>
                  </ul>
                </li>
                <li class="leaf">
                  <a href="/projects/cso-drupal/organizations" title="">Organizations</a>
                </li>
                <li class="leaf"><a href="/projects/cso-drupal/video-gallery" title="">Video Gallery</a></li>
                <li class="leaf"><a href="/projects/cso-drupal/contact" title="">Contact us</a></li>
                <li class="leaf"><a href="/projects/cso-drupal/gallery">Image gallery</a></li>
                <li class="last leaf"><a href="/projects/cso-drupal/news-articles">News and articles</a></li>
            </ul>                                                            
            <ul class="navbar-right nav navbar-nav">
              <li> 
                <a 
                href="http://localhost/projects/cso-drupal/people/sign-up" 
                style="background-color : #033F60; padding : 17px 20px 17px 17px;"> 
                  <img src="http://localhost/projects/cso-drupal/sites/all/themes/themeversity/img/icons/sign_in.png">
                </a>  
              </li>
            </ul> 
          </nav>
        </div>
      </div> <!--navbar-inverse-->


      <div class="mainContent">
        <div class="row">
          <div class="col-md-4" id="sidebar-region">
            <div class="sidebar-left">
              <div class="sidebar-left-heading">
                <div class="triangle-r"></div>
                <svg id="latest_news"></svg>
                <h3> Latest updates</h3>
              </div>

            <div class="region region-sidebar-first well">
              <section id="block-views-latest-events-block-1" class="block block-views clearfix">
                <div class="view-content">
                  <div class="views-row views-row-1 views-row-odd views-row-first latest">
                    <div class="views-field views-field-title">
                      <span class="field-content">
                        <a href="/projects/cso-drupal/content/class-routine-fall2013-class">Class Routine of fall2013 class</a>
                      </span>
                    </div>
                    <div class="views-field views-field-body">
                      <div class="field-content latest-detail">
                        <p>some update note about the new class going to be held.</p>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="views-row views-row-1 views-row-odd views-row-first latest">
                    <div class="views-field views-field-title">
                      <span class="field-content">
                        <a href="/projects/cso-drupal/content/class-routine-fall2013-class">Class Routine of fall2013 class</a>
                      </span>
                    </div>
                    <div class="views-field views-field-body">
                      <div class="field-content latest-detail">
                        <p>some update note about the new class going to be held.</p>
                      </div>
                    </div>
                  </div>


                  <div class="views-row views-row-1 views-row-odd views-row-first latest">
                    <div class="views-field views-field-title">
                      <span class="field-content">
                        <a href="/projects/cso-drupal/content/class-routine-fall2013-class">Class Routine of fall2013 class</a>
                      </span>
                    </div>
                    <div class="views-field views-field-body">
                      <div class="field-content latest-detail">
                        <p>some update note about the new class going to be held.</p>
                      </div>
                    </div>
                  </div>
              </section>
            </div>
            <!--Sidebar first contents-->

          </div>
          <!-- sidebar-left -->
          </div>

          <div class="col-md-8" id="content-region">
                <div class="slider">
                <ul class="bxslider">
                  <li>
                    <img src="http://localhost/projects/cso-drupal/sites/default/files/styles/slideshow_image_style/public/20140121_163823.jpg?itok=PPKxK-7f" title="CSO Team" />
                  </li>
                                  <li>
                    <img src="http://localhost/projects/cso-drupal/sites/default/files/styles/slideshow_image_style/public/IMG_7755.JPG?itok=2EiasF-h" title="PSDP Event" />
                  </li>
                                  <li>
                    <img src="http://localhost/projects/cso-drupal/sites/default/files/styles/slideshow_image_style/public/1_2.jpg?itok=UT66ysQA" title="This is a freaking awesome photo gallery" />
                  </li>
                </ul>

            
            <div class="front-page-posts">
              
                <div class="region region-content">
    <section id="block-system-main" class="block block-system clearfix">

      
  <div class="row post-entry">

  <div class="col-md-12  post-teasere">
    <h2> Radio Foorti’s RJ Hunt at BRACU </h2>


              <p class="submit-info">
        <i class="calendar icon"></i> <span property="dc:date dc:created" content="2013-12-08T13:59:30+06:00" datatype="xsd:dateTime" rel="sioc:has_creator">Submitted by <span class="username" xml:lang="" about="/projects/cso-drupal/user/1" typeof="sioc:UserAccount" property="foaf:name" datatype="">admin</span> on Sun, 12/08/2013 - 13:59</span>      </p>
  
    <p>
     </p><div class="field field-name-body field-type-text-with-summary field-label-hidden"><div class="field-items"><div class="field-item even" property="content:encoded"><p class="rtejustify"><img alt="" class="image-thumbnail img-responsive" src="/cso/sites/default/files/styles/thumbnail/public/IMG_9283.JPG?itok=PxNvxiKa" style="height:67px; width:100px"><br><span style="font-size:14px">Radio Foorti, MGH in cooperation with the CSO conducted a RJ Hunt session. Over a 100 students registered and auditioned for the opportunity where they were given a minute each to perform and prove themselves.</span></p>
</div></div></div>    <p></p>

  <a style="" href="/projects/cso-drupal/content/radio-foorti%E2%80%99s-rj-hunt-bracu" targe="_blank" class="link" role="button">Read more</a>
  </div>
</div> 


</section> <!-- /.block -->
  </div>

            </div>


            

          </div>
          <!--content-area-->

        </div>
        <!-- row -->
      </div>
      <!-- mainContent -->
    </div> <!--container -->

    <footer>
        <div class="row">
          <div class="region region-footer">
            <div id="block-block-6" class=" col-md-4 block block-block">
              <div class="footer-block">
                <h2 class="block-title">This is a sample block</h2>
                <p>This is a block.</p>
                <p>we are really pleased to announce the following links.</p>
                <p>
                  <a href="http://www.bracu.ac.bd">We are a great people doing awesome work</a></p>
              </div>
            </div>
            <div id="block-block-4" class=" col-md-4 block block-block">
              <div class="footer-block">
                <p class="rtecenter">We are very pleased to know that our University got First in the world Ranking. We are the best no matter what.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="footer-block">
              <div class="row">
                <a class="PIN_1417442829562_pin_it_button_20 PIN_1417442829562_pin_it_button_en_20_gray PIN_1417442829562_pin_it_button_inline_20 PIN_1417442829562_pin_it_above_20" data-pin-href="//www.pinterest.com/pin/create/button/?guid=6PFFw0_ZUv2w-1&amp;url=http%3A%2F%2Fbracu.ac.bd&amp;media=http%3A%2F%2Ffarm8.staticflickr.com%2F7027%2F6851755809_df5b2051c9_z.jpg&amp;description=Add%20to%20interest" data-pin-log="button_pinit" data-pin-config="above"><span class="PIN_1417442829562_pin_it_button_count" id="PIN_1417442829562_pin_count_0"><i></i>0</span></a>
              </div>
              <div class="row">
                <div id="___plusone_0" style="text-indent: 0px; margin: 0px; padding: 0px; border-style: none; float: none; line-height: normal; font-size: 1px; vertical-align: baseline; display: inline-block; width: 300px; height: 24px; background: transparent;"><iframe frameborder="0" hspace="0" marginheight="0" marginwidth="0" scrolling="no" style="position: static; top: 0px; width: 300px; margin: 0px; border-style: none; left: 0px; visibility: visible; height: 24px;" tabindex="0" vspace="0" width="100%" id="I0_1417442830061" name="I0_1417442830061" src="https://apis.google.com/u/0/se/0/_/+1/fastbutton?usegapi=1&amp;annotation=inline&amp;width=300&amp;origin=http%3A%2F%2Flocalhost&amp;url=http%3A%2F%2Flocalhost%2Fprojects%2Fcso-drupal%2F&amp;gsrc=3p&amp;ic=1&amp;jsh=m%3B%2F_%2Fscs%2Fapps-static%2F_%2Fjs%2Fk%3Doz.gapi.en.7vZiym2o2pQ.O%2Fm%3D__features__%2Fam%3DEQ%2Frt%3Dj%2Fd%3D1%2Ft%3Dzcms%2Frs%3DAGLTcCNSsqcdgsZbh3dCja8xrQoCF9V_kg#_methods=onPlusOne%2C_ready%2C_close%2C_open%2C_resizeMe%2C_renderstart%2Concircled%2Cdrefresh%2Cerefresh%2Conload&amp;id=I0_1417442830061&amp;parent=http%3A%2F%2Flocalhost&amp;pfname=&amp;rpctoken=29158617" data-gapiattached="true" title="+1"></iframe>
                </div>
              </div>
              <div class="row">
                <iframe id="twitter-widget-0" scrolling="no" frameborder="0" allowtransparency="true" src="http://platform.twitter.com/widgets/tweet_button.2dbfc52aff624254c17d0ae518d60e15.en.html#_=1417442830091&amp;count=horizontal&amp;id=twitter-widget-0&amp;lang=en&amp;original_referer=http%3A%2F%2Flocalhost%2Fprojects%2Fcso-drupal%2F&amp;size=m&amp;text=Tweet%20this&amp;url=http%3A%2F%2Flocalhost%2Fprojects%2Fcso-drupal%2F" class="twitter-share-button twitter-tweet-button twitter-share-button twitter-count-horizontal" title="Twitter Tweet Button" data-twttr-rendered="true" style="width: 109px; height: 20px;"></iframe>
                        <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
                    </div>
                </div>
            </div>
        </div> <!--row-->
    </footer>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="<?php echo URL::to("assets/site/bootstrap.min.js");?>"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="<?php echo URL::to("assets/site/ie10-viewport-bug-workaround.js");?>"></script>

    <script type="text/javascript" src="http://localhost/projects/cso-drupal/sites/all/themes/themeversity/libs/bxslider/jquery.bxslider.min.js"></script>

    <script type="text/javascript">

      $(function(){
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

      });
    </script>

  </body>
</html>