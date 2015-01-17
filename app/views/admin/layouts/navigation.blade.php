<aside class="bg-black aside-md hidden-print" id="nav">
<section class="vbox">
<section class="w-f scrollable">
<div class="slim-scroll" data-height="auto" data-disable-fade-out="true" data-distance="0" data-size="10px" data-railOpacity="0.2">
<div class="clearfix wrapper dk nav-user hidden-xs">
  <div class="dropdown">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
      <span class="thumb avatar pull-left m-r">
        <img src="<?php echo URL::to("");?>/assets/images/a0.png" class="dker" alt="...">
        <i class="on md b-black"></i>
      </span>
      <span class="hidden-nav-xs clear">
        <span class="block m-t-xs">
          <strong class="font-bold text-lt">John.Smith</strong>
          <b class="caret"></b>
        </span>
        <span class="text-muted text-xs block">Art Director</span>
      </span>
    </a>
    <ul class="dropdown-menu animated fadeInRight m-t-xs">
      <li>
        <span class="arrow top hidden-nav-xs"></span>
        <a href="#">Settings</a>
      </li>
      <li>
        <a href="profile.html">Profile</a>
      </li>
      <li>
        <a href="#">
          <span class="badge bg-danger pull-right">3</span>
          Notifications
        </a>
      </li>
      <li>
        <a href="docs.html">Help</a>
      </li>
      <li class="divider"></li>
      <li>
        <a href="modal.lockme.html" data-toggle="ajaxModal" >Logout</a>
      </li>
    </ul>
  </div>
</div>


<nav class="nav-primary hidden-xs">
  <div class="text-muted text-sm hidden-nav-xs padder m-t-sm m-b-sm">Administration</div>
  <ul class="nav nav-main" data-ride="collapse">
    <li  class="active">
      <a href="" class="auto">
        <i class="i i-statistics icon">
        </i>
        <span class="font-bold">Overview</span>
      </a>
    </li>
    <li >
      <a href="#" class="auto">
        <span class="pull-right text-muted">
          <i class="i i-circle-sm-o text"></i>
          <i class="i i-circle-sm text-active"></i>
        </span>
        <i class="i i-stack icon">
        </i>
        <span class="font-bold">Contents</span>
      </a>
      <ul class="nav dk">
        <li >
          <a href="{{URL::route('news_updates.index')}}" class="auto">
            <i class="i i-dot"></i>

            <span>News and Event updates</span>
          </a>
        </li>
        <li >
          <a href="{{URL::route('psdp_registrations.index')}}" class="auto">
            <i class="i i-dot"></i>

            <span>PSDP Registrations</span>
          </a>
        </li>
        <li >
          <a href="layout-boxed.html" class="auto">
            <i class="i i-dot"></i>

            <span>Internships</span>
          </a>
        </li>
        <li >
          <a href="{{URL::route('jobs.index')}}" class="auto">
            <i class="i i-dot"></i>

            <span>Jobs</span>
          </a>
        </li>
        <li >
          <a href="{{URL::route('organisations.index')}}" class="auto">
            <i class="i i-dot"></i>

            <span>Organisations</span>
          </a>
        </li>
        <li >
          <a href="{{URL::route('courses.index')}}" class="auto">
            <i class="i i-dot"></i>
            <span>Courses and Departments</span>
          </a>
        </li>
        <li >
          <a href="layout-fluid.html" class="auto">
            <i class="i i-dot"></i>

            <span>Page Main Blocks</span>
          </a>
        </li>
        <li >
          <a href="layout-fluid.html" class="auto">
            <i class="i i-dot"></i>
            <span>Slideshows</span>
          </a>
        </li>
      </ul>
    </li>
    <li >
      <a href="#" class="auto">
        <span class="pull-right text-muted">
          <i class="i i-circle-sm-o text"></i>
          <i class="i i-circle-sm text-active"></i>
        </span>
        <i class="i i-lab icon">
        </i>
        <span class="font-bold">Pages</span>
      </a>



      <ul class="nav dk">
          <?php foreach(Page::all() as $page) { ?>
          <li>
            <a href="{{URL::to('pages/edit/' . $page->id)}}" class="auto">
              <i class="i i-dot"></i>
              <span>{{$page->slug}}</span>
            </a>
          </li>
          <?php } ?>

        </ul>
    </li>
    <li >
      <a href="#" class="auto">
        <span class="pull-right text-muted">
          <i class="i i-circle-sm-o text"></i>
          <i class="i i-circle-sm text-active"></i>
        </span>
        <i class="i i-docs icon">
        </i>
        <span class="font-bold">Users</span>
      </a>
      <ul class="nav dk">
        <li >
          <a href="{{URL::to('admin/users/administrators')}}" class="auto">
            <i class="i i-dot"></i>

            <span>Administrators</span>
          </a>
        </li>
        <li >
          <a href="{{URL::route('alumni.index')}}" class="auto">
            <i class="i i-dot"></i>

            <span>Alumnies</span>
          </a>
        </li>
        <li >
          <a href="{{URL::route('students.index')}}" class="auto">
            <i class="i i-dot"></i>

            <span>Students</span>
          </a>
        </li>
        <li >
          <a href="{{URL::route('employers.index')}}" class="auto">
            <i class="i i-dot"></i>
            <span>Employers</span>
          </a>
        </li>
      </ul>
    </li>
  </ul>
  <!--
  <div class="line dk hidden-nav-xs"></div>
  <div class="text-muted text-xs hidden-nav-xs padder m-t-sm m-b-sm">Lables</div>
  <ul class="nav">
    <li>
      <a href="mail.html#work">
        <i class="i i-circle-sm text-info-dk"></i>
        <span>Work space</span>
      </a>
    </li>
    <li>
      <a href="mail.html#social">
        <i class="i i-circle-sm text-success-dk"></i>
        <span>Connection</span>
      </a>
    </li>
    <li>
      <a href="mail.html#projects">
        <i class="i i-circle-sm text-danger-dk"></i>
        <span>Projects</span>
      </a>
    </li>
  </ul>
  <div class="text-muted text-xs hidden-nav-xs padder m-t-sm m-b-sm">Circles</div>
  <ul class="nav">
    <li>
      <a href="#">
        <i class="i i-circle-sm-o text-success-lt"></i>
        <span>College</span>
      </a>
    </li>
    <li>
      <a href="#">
        <i class="i i-circle-sm-o text-warning"></i>
        <span>Social</span>
      </a>
    </li>
  </ul>
</nav>
-->
</div>
</section>

<footer class="footer hidden-xs no-padder text-center-nav-xs">
<a href="modal.lockme.html" data-toggle="ajaxModal" class="btn btn-icon icon-muted btn-inactive pull-right m-l-xs m-r-xs hidden-nav-xs">
<i class="i i-logout"></i>
</a>
<a href="#nav" data-toggle="class:nav-xs" class="btn btn-icon icon-muted btn-inactive m-l-xs m-r-xs">
<i class="i i-circleleft text"></i>
<i class="i i-circleright text-active"></i>
</a>
</footer>
</section>
</aside>