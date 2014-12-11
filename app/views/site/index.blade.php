
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
    <link href="<?php echo URL::to("/assets/site/bootstrap.min.css");?>" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo URL::to("");?>/assets/css/app.css" type="text/css" />  

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
  </head>

  <body>
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
      $(document).ready(function(){
        $('.bxslider').bxSlider({
          mode : 'fade',
          auto : true,
          captions : true,
          autoControls : true
      });
      })

      //   function swapOrder(){
            
      //       $('#content-region').insertBefore($('#sidebar-region'));
      //   }


      // $(function(){
      //     var width = (window.innerWidth > 0) ? window.innerWidth : screen.width;
      //     if(width <= 978) {
      //         swapOrder();
      //     }
      // });


      // $('.ui.accordion').accordion();

      



      // $('ul.nav li.dropdown').hover(function(){
      //     $(this).children('ul.dropdown-menu').stop().slideDown();
      // }, function(){
      //   $(this).children('ul.dropdown-menu').stop().slideUp(); 
      // });

    </script>

  </body>
</html>