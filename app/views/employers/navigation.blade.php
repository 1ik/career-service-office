<aside class="bg-black aside-md hidden-print" id="nav">
<section class="vbox">
<section class="w-f scrollable">
<div class="slim-scroll" data-height="auto" data-disable-fade-out="true" data-distance="0" data-size="10px" data-railOpacity="0.2">
<nav class="nav-primary hidden-xs">
  <div class="text-muted text-sm hidden-nav-xs padder m-t-sm m-b-sm">Administration</div>
  <ul class="nav nav-main" data-ride="collapse">
    <li  class="@if(!isset($jobs)) {{'active'}} @endif">
      <a href="{{URL::route('users.profile', Sentry::getUser()->id)}}" class="auto">
        <i class="i i-statistics icon">
        </i>
        <span class="font-bold">Profile</span>
      </a>
    </li>
    <li  class="@if(isset($jobs)) {{'active'}} @endif">
      <a href="{{URL::route('jobs.index');}}" class="auto">
        <i class="fa fa-briefcase icon">
        </i>
        <span class="font-bold">My Job posts</span>
      </a>
    </li>
  </ul>
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