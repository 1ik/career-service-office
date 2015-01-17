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


@stop



@section('content')
<section class="vbox">
    <section class="scrollable padder">
      <div class="m-b-md">
          <h3 class="m-b-none">Your Job application and registrations
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
                <th>Registration ID.</th>
                <th>Application ID.</th>
                <th>Application Type</th>
                <th>Application detail</th>
                <th>Applied on</th>
              </tr>
            </thead>
            <tbody>
                @foreach($applications as $app)
                    <tr>
                        <td>{{$app->registration_id}}</td>
                        <td>{{$app->id}}</td>
                        <td>
                            @if($app->registration->job != null)
                                Job
                            @elseif($app->registration->psdp_registration != null)
                                PSDP Registration
                            @endif
                        </td>
                        <td>
                            @if($app->registration->job != null)
                                <a href="{{URL::route('jobs.show', $app->registration->job->id)}}">{{$app->registration->job->title}}</a>
                            @elseif($app->registration->psdp_registration != null)
                                FOR {{$app->registration->psdp_registration->semester}}, {{$app->registration->psdp_registration->year}}
                            @endif
                        </td>
                        <td>
                            {{$app->created_at}}
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