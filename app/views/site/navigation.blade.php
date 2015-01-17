<?php
    $user = Sentry::getUser();
?>

<header class="hidden sticky navbar navbar-static-top bs-docs-nav" id="top" role="banner">
<div class="container">
  <div class="navbar-header" style="width: 100%; background: #F2F2F2; text-align: center">
    <button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a href="../" class="navbar-brand">
        OFFICE OF CAREER SERVICES & ALUMNI RELATIONS
    </a>
  </div>

  <nav class="collapse navbar-collapse bs-navbar-collapse" role="navigation">
    <ul class="nav navbar-nav">
      <li class="@if($page->id == 2) {{'active'}} @endif">
        <a href="internships-program">INTERNSHIPS</a>
      </li>

      <li class="@if($page->id == 3) {{'active'}} @endif">
        <a href="psdp-program">PSDP Programs</a>
      </li>
      <li class="@if($page->id == 4) {{'active'}} @endif">
         <a href="searching-jobs">JOBS</a>
      </li>
      <li class="@if($page->id == 5) {{'active'}} @endif">
        <a href="services-for-students">Students</a>
      </li>
      <li class="@if($page->id == 6) {{'active'}} @endif">
        <a href="alumnies">Alumnies</a>
      </li>
      <li class="@if($page->id == 7) {{'active'}} @endif">
        <a href="affiliated-organisations">Organisations</a>
      </li>
      <li>
        <a href="../customize/">Contact us</a>
      </li>

    </ul>
    <ul class="nav navbar-nav navbar-right">
        @if(! Sentry::check())
            <li>
                <a href="">Join Us</a>
            </li>
            <li>
                <a href="{{URL::to('sign-in')}}">Sign in</a>
            </li>
        @else
            <li>
                <?php $user = Sentry::getUser(); ?>
                <a href="{{URL::route('users.profile' , $user->id)}}">{{$user->first_name}} {{$user->last_name}}</a>
            </li>
            <li>
                <a href="{{URL::to('sign-out')}}">
                    <i class="fa fa-power-off"></i>
                </a>
            </li>
        @endif
    </ul>
  </nav>
</div>
</header>