@extends('admin.layouts.master')

@section('header')
<link rel="stylesheet" href="{{URL::to('assets/js/datatables/datatables.css')}}" type="text/css"/>
<link rel="stylesheet" href="<?php echo URL::to("");?>/assets/themify-icons/themify-icons.css" type="text/css" />
<style type="text/css" >
    .saved {
        color: #1AAE88;
    }
</style>

@stop

@section('action_bar')

@if( ! \cso\utils\UserUtil::isEmployer())
<li class="hidden-xs">
  <a href="{{URL::route('users.saved_jobs.index', Sentry::getUser()->id)}}">
    <i style="font-weight: 800; color:green" class="ti-bookmark-alt"></i>
  </a>
</li>
@endif

@stop



@section('content')
<section class="vbox">
    <section class="scrollable padder">
      <div class="m-b-md">
          <h3 class="m-b-none">Jobs Posted
            @if(\cso\utils\UserUtil::isAdmin() || \cso\utils\UserUtil::isEmployer())
              <a class="btn btn-default btn-circle pull-right" href="{{URL::route('jobs.create')}}">Post a job</a>
            @endif
          </h3>
      </div>

      <section class="panel panel-default">
        <header class="panel-heading">
          Job List
        </header>
        <div class="table-responsive">
          <table class="table table-striped m-b-none" data-ride="datatables">
            <thead>
              <tr>
                {{--<th width="20%">Rendering engine</th>--}}
                {{--<th width="25%">Browser</th>--}}
                {{--<th width="25%">Platform(s)</th>--}}
                {{--<th width="15%">Engine version</th>--}}
                {{--<th width="15%">CSS grade</th>--}}
                <th>SL.</th>
                <th>Title</th>
                <th>Organisation</th>
                <th>Category</th>
                <th>Salary</th>
                {{--<th>Vacancies</th>--}}
                @if(\cso\utils\UserUtil::isAdmin())
                <th>Status</th>
                @endif
                <th>Deadline</th>
                @if(\cso\utils\UserUtil::isAdmin())
                <th>Poster</th>
                <th>Approved By</th>
                @endif
                <th style="width: 12%">
                    Actions
                </th>
              </tr>
            </thead>
            <tbody>
                @foreach($jobs as $job)
                <tr>
                    <td>{{$job->id}}</td>
                    <td> {{$job->title}} </td>
                    <td>{{$job->organisation->initial}}</td>
                    <td> {{ $job->category == 'pt' ? "Part time" : "Full time" }} </td>
                    <td>{{$job->salary}}</td>
{{--                                <td>{{$job->vacancy}}</td>--}}
                    @if(\cso\utils\UserUtil::isAdmin())
                    <td>{{$job->registration->open? "Open" : "Close"}}</td>
                    @endif
                    <?php $end = new DateTime ($job->registration->ends_on); ?>
                    <td>{{$end->format('m/d/Y')}}</td>
                    @if(\cso\utils\UserUtil::isAdmin())
                        <td>{{$job->poster['first_name'] . ' '. $job->poster['last_name']}} </td>
                        <td>
                            @if($job->approver)
                                {{$job->approver->first_name . ' '. $job->approver->last_name}}
                            @else
                                Unapproved
                                (<a href="{{URL::route('jobs.approve', $job->id)}}"> <i class="fa fa-check"></i> </a>)
                            @endif
                        </td>
                    @endif
                    <td>
                        <a href="{{URL::route('jobs.show', $job->id)}}" class="dropdown-toggle"><i  class="fa fa-eye"></i></a>


                        @if(! \cso\utils\UserUtil::isEmployer())

                            @if($job->saved_jobs == null)
                              <a href="{{URL::route('users.saved_jobs.save', [Sentry::getUser()->id, $job->id])}}"><i style="padding-left: 10px" class="fa fa-bookmark"></i></a>
                            @else
                              <i style="padding-left: 10px" class="fa fa-bookmark saved"></i>
                            @endif
                        @endif

                        @if(\cso\utils\UserUtil::isAdmin())
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i style="padding-left: 10px" class="fa fa-pencil"></i></a>
                        @endif
                    </td>
                </tr>
                @endforeach
            </tbody>
          </table>
        </div>
      </section>
    </section>





</section>
@stop

@section('footer')
<script src="{{URL::to('assets/js/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{URL::to('assets/js/datatables/demo.js')}}"></script>

@stop