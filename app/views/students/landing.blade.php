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
    <link rel="stylesheet" type="text/css" href="/assets/icons/student_icons/icons.css" />

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

    <link rel="stylesheet" href="{{URL::to('assets/css/landing-pages/students.css')}}"/>

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
          <img class="animated fadeInUp" src="{{URL::to('/assets/images/students.jpg');}}" alt="" width="100%">
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
                <i class="flaticon-businessman30" data-sr='enter up .4s'></i>
                <p class="description" data-sr='enter up wait .4s'>
                    {{$page->sections[0]->summery}}
                </p>
                <a class="btn btn-default btn-rounded" href="{{URL::to('/contents/' . $page->sections[0]->slug)}}" data-sr='enter bottom wait .4s'>
                    Know More <i class="ti-angle-double-right" style="font-size: 10px"></i>
                </a>
            </div>
            <div class="right-section">
                <p class="title" data-sr='enter right wait .4s' >{{$page->sections[1]->title}}</p>
                <i class="flaticon-cv" data-sr='enter up .4s'></i>
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
                          <em class="h4 text-mu/te">{{$page->sections[4]->title}}</em><br>
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
                                    <option value="5">Architecture</option>
                                    <option value="4">BRAC Business School</option>
                                    <option value="7">Economics and Social Sciences</option>
                                    <option value="6">English</option>
                                    <option value="2">Mathematics and natural science (MNS)</option>
                                    <option value="3">School of Computer Science and Electronic Engineering</option>
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