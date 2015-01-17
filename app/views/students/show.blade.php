@extends('admin.layouts.master')


@section('header')
<link rel="stylesheet" href="<?php echo URL::to("");?>/assets/themify-icons/themify-icons.css" type="text/css" />
<link rel="stylesheet" href="<?php echo URL::to("");?>/assets/icons/student_icons/icons.css" type="text/css" />
<style type="text/css">

    .section-a {
        text-align: center;
    }
    .section-a h4 {
        font-size: 25px;
        font-weight: 200;
    }

    .scrollable {
        padding-bottom: 100px;
    }

    .panel-heading p {
        text-transform: uppercase;
        letter-spacing: 1px;
        font-weight: 800;
    }

    .section-a img {
        text-align: center;
        border-radius: 50%;
        width: 130px;
        height: 130px;
        margin-top: 10px;
        margin-bottom: 30px;
    }
    .user-info {
        font-size: 14px;
        font-weight: 300;
    }

    div.divider {
        border-bottom: 1px solid #A7ADB1;
        min-width: 100px;
        width: 70%;
        height: 2px;
        margin: 0 auto;
        margin-bottom: 20px;
    }

    .user-info p i {
        margin-right: 10px;
        font-weight: 100;
    }
    .user-info #present-address {
        font-size: 13px;
        font-weight: 400;;
    }
    .user-info #present-city {
        font-weight: 700;
    }

    .addresses .panel-heading {
        text-align: center;
    }

</style>
@stop


@section('action_bar')

@if($user->activated == 0)
<li class="hidden-xs">
  <a href="{{URL::to('activate-user/' . $user->id . '/' . $user->activation_code)}}">
    <i style="font-weight: 800; color:green" class="ti-check"></i>
  </a>
</li>
@endif


<li class="hidden-xs">
  <a href="{{URL::route('users.profile.edit', $user->id)}}">
    <i style="font-weight: 800; color:green" class="ti-pencil"></i>
  </a>
</li>

<li class="hidden-xs">
  <a style="font-weight: 800; color:green" href="{{URL::route('users.applications', $user->id)}}"><i class="fa fa-inbox"></i></a>
</li>




@stop



@section('content')
<section id="content">
  <section class="hbox stretch">
    <!-- .aside -->
    <aside class="aside-lg bg-white b-r" id="aside">
      <div class="wrapper section-a">
        <h4 class="m-t-none">{{$user->first_name}} {{$user->last_name}}</h4>
        <img style="text-align: center" class="" src="{{URL::to("files/users/pp/" . $user->profile_image)}}" alt=""/>

        <div class="user-info">
            <p id="bio">{{$user->student->bio}}</p>
            <div class="divider"></div>
            <p id="email"> <i class="fa fa-envelope-o"></i> {{$user->email}}</p>
            <p id="cell_phone"> <i class="fa fa-mobile"></i> {{$user->cell_phone}}</p>
            <p id="department"> {{$user->student->department->name}}</p>
            <div class="divider"></div>
            <p class="location-marker"><i style="font-size: 35px; margin-top: 10px" class="fa fa-map-marker"></i></p>
            <p id="present-address">{{$user->student->present_address}}</p>
            <p id="present-city">{{$user->student->present_city}}, {{$user->student->present_postal_code}}</p>
            <p>
                <a target="_blank" href="{{URL::to('files/users/cv/' . $user->cv)}}"><i style="font-size: 30px" class="flaticon-cv"></i></a>
            </p>
        </div>
      </div>
    </aside>
    <!-- /.aside -->
    <!-- .aside -->
    <aside>
      <section class="vbox">
        <section class="scrollable wrapper">
            <div class="row padder">
                <section class="panel panel-default portlet-item">
                    <header class="panel-heading">
                      <p>Academic Information</p>
                    </header>
                    <section class="panel-body">
                      <article class="media">
                        <div class="media-body">
                          <div class="pull-right media-xs text-center text-muted">
                            <br/>
                            <strong class="h4">CGPA <b>{{$user->student->current_cgpa}}</b></strong>
                            <small class="block">Credits Completed : <b>{{$user->student->credits_completed}}</b></small>
                            <small class="block">Semester : <b>{{$user->student->semester == 'l' ? "Last" : "Second Last"}}</b></small>
                          </div>
                          <p class="h4">
                            {{$user->student->department->name}}
                          </p>
                          <br/>
                          <small>Student ID: <strong>{{$user->student->student_id}}</strong></small>
                          <small class="block">Major : <b>{{$user->student->major_course->name}}</b></small>
                          <small class="block">Minor : <b>{{$user->student->minor_course->name}}</b></small>
                        </div>
                      </article>
                    </section>
                 </section>
            </div>


            <div class="row padder">
                <section class="panel panel-default portlet-item">
                    <header class="panel-heading">
                      <p>Personal Information</p>
                    </header>
                    <section class="panel-body">
                      <article class="media">
                        <div class="media-body">
                          <div class="pull-right media-xs text-center text-muted">
                            <br/>
                            <strong class="h4">CGPA <b>{{$user->student->current_cgpa}}</b></strong>
                            <small class="block">Credits Completed : <b>{{$user->student->credits_completed}}</b></small>
                            <small class="block">Semester : <b>{{$user->student->semester == 'l' ? "Last" : "Second Last"}}</b></small>
                          </div>
                          <p class="h4">
                            {{$user->first_name}} {{$user->last_name}}
                          </p>
                          <br/>
                          <small class="block">Gender : <b>{{$user->gender == 'm' ? "Male" : "Female"}}</b></small>
                          <small class="block">Phone : <b>{{$user->phone_number}}</b></small>
                        </div>
                      </article>
                    </section>
                 </section>
            </div>

            <div class="row padder addresses">
                <section class="panel panel-default portlet-item col-xs-6" style="padding:0">
                    <header class="panel-heading">
                      <p>Present Address</p>
                    </header>
                    <section class="panel-body">
                      <article class="media">
                        <div class="media-body">
                            <p class="h6">{{$user->student->present_address}}</p>
                            <br/>
                            <p class="h6"><b>{{$user->student->present_city}},{{$user->student->present_postal_code}}</b></p>
                        </div>
                      </article>
                    </section>
                 </section>
                 <section class="panel panel-default portlet-item col-xs-6" style="padding:0">
                     <header class="panel-heading">
                       <p>Permanent Address</p>
                     </header>
                     <section class="panel-body">
                       <article class="media">
                         <div class="media-body">
                             <p class="h6">{{$user->student->permanent_address}}</p>
                             <br/>
                             <p class="h6"><b>{{$user->student->permanent_city}},{{$user->student->permanent_postal_code}}</b></p>
                         </div>
                       </article>
                     </section>
                  </section>
            </div>





            <div class="row padder addresses">
                <section class="panel panel-default portlet-item col-xs-12" style="padding:0">
                    <header class="panel-heading">
                      <p>Gurdian's information</p>
                    </header>
                    <section class="panel-body">
                      <article class="media">
                        <div class="media-body">
                            <p class="h6">Name : <b>{{$user->student->gurdian_name}}</b></p>
                            <p class="h6">
                                Relationship : <b>{{$user->student->gurdian_relation}}</b>
                            </p>
                            <p>
                                Institute Gurdian works in : <b>{{$user->student->gurdian_work_institute}}</b>
                            </p>
                            <p>
                                Designation in the institute : <b>{{$user->student->gurdian_designation}}</b>
                            </p>
                            <p>
                                Gurdian's contact : <b>{{$user->student->gurdian_contact}}</b>
                            </p>
                            <p>
                                Gurdian's contact : <b>{{$user->student->gurdian_contact}}</b>
                            </p>
                        </div>
                      </article>
                    </section>
                 </section>

            </div>


        </section>
      </section>
    </aside>
    <!-- /.aside -->
  </section>
  <a href="#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen" data-target="#nav"></a>
</section>
@stop

@section('footer')
<script type="text/javascript">
    $(document).ready(function(){
        $('#aside').height($(window).height());
    });
</script>

@stop