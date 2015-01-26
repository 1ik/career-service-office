@extends('admin.layouts.master')

@section('header')
<link rel="stylesheet" href="<?php echo URL::to("");?>/assets/themify-icons/themify-icons.css" type="text/css" />
@stop

@section('action_bar')

@if(\cso\registrations\JobRepository::isJobPoster(Sentry::getUser()->id, $job->id) || \cso\utils\UserUtil::isAdmin())
    <li class="hidden-xs">
      <a href="{{URL::route('jobs.edit', $job->id)}}">
        <i style="font-weight: 800; color:green" class="ti-pencil"></i>
      </a>
    </li>
@endif


@if(\cso\utils\UserUtil::isAdmin() && $job->approver_id < 0)
<li class="hidden-xs">
  <a href="{{URL::route('jobs.approve', $job->id)}}">
    <i style="font-weight: 800; color:green" class="ti-check"></i>
  </a>
</li>
@endif

@stop



@section('content')
<section class="vbox">
    <section class="scrollable padder">


<div class="m-b-md">
    <h3 class="m-b-none">
        {{$job->title }} - {{$job->organisation->name}}
        <a class="pull-right btn btn-default btn-sm" href="{{URL::route('jobs.index')}}">Jobs list</a>
        
        @if($job->registration->open == 1)
            @if($job->applicant == null && \cso\utils\UserUtil::isStudent() || \cso\utils\UserUtil::isAlumni())
                <a class="pull-right btn btn-default btn-sm" href="{{URL::route('jobs.apply', $job->id)}}">Apply</a>
            @endif
            @if(\cso\utils\UserUtil::isAdmin())
                <a class="pull-right btn btn-default btn-sm" href="{{URL::route('jobs.close_registration', $job->id)}}">Close Registration</a>
            @endif
        @else
            <a class="pull-right btn btn-default btn-sm" href="{{URL::route('jobs.open_registration', $job->id)}}">Open Registration</a>
        @endif

    </h3>
</div>
  <div class="row">
    <div class="col-sm-12 col-md-4">
      <section class="panel panel-default">
        <section class="panel-body">
            <p class="">Responsibility: <em>{{$job->responsibility}}</em> </p>
            <p class="">Salary: <em>{{$job->salary}}</em> </p>
            <p class="">Category: <em>{{$job->category == "pt" ? "Part time" : "Full time"}}</em> </p>
            <p class="">URL: <em><a href="{{$job->url}}">{{$job->url}}</a></em> </p>
            <p class="">Salary: <em>{{$job->salary}}</em> </p>
        </section>
      </section>
    </div>
  </div>



  @if(\cso\utils\UserUtil::isAdmin() || \cso\registrations\JobRepository::isJobPoster(Sentry::getUser()->id, $job->id))
  <div class="row">
    <div class="padder">
    <section class="panel panel-default">
            <header class="panel-heading">
              People applied to this job <span class="pull-right"><a href="{{URL::route('jobs.export', $job->id)}}" ><i style="color: #1AAE88" class="fa fa-cloud-download"></i></a></span>
            </header>
            <div class="table-responsive">
              <table class="table table-bordered m-b-none">
                <thead>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email Address</th>
                    <th>Phone number</th>
                    <th>Cell Phone</th>
                    <th>Gender</th>
                </thead>
                <tbody>
                    @foreach($job->registration->registrants as $registrant)
                    <tr>
                        <td>{{$registrant->user->first_name}}</td>
                        <td>{{$registrant->user->last_name}}</td>
                        <td>{{$registrant->user->email}}</td>
                        <td>{{$registrant->user->phone_number}}</td>
                        <td>{{$registrant->user->cell_phone}}</td>
                        <td>{{$registrant->user->gender == 'm' ? "Male" : "Female"}}</td>
                    </tr>
                    @endforeach
                </tbody>
              </table>
            </div>
      </section>
    </div>
  </div>
  @endif
  </section>



</section>









@stop