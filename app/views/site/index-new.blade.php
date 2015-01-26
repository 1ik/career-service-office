
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

    <link rel="stylesheet" href="{{URL::to('assets/css/landing-pages/front.css')}}"/>

  </head>
  <body>

    @include('site.navigation')

  <div class="container-full-width section-a">

    @include('partials.pages.overlay-nav')

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