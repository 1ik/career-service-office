@extends('admin.layouts.master')

@section('header')
<style type="text/css">
    .panel-heading, h3 {
        text-align: center;
    }
    .btn {
        margin: 10px;
    }
</style>
@stop

@section('content')
<section class="vbox">
<section class="scrollable padder">

<div class="m-b-md">
</div>
  <div class="row">
    <div class="col-sm-12">
        <a class="btn btn-success pull-right" href="{{URL::route('psdp.export', $psdp_registration->id)}}">
          <i class="fa fa-cloud-download text"></i>
          <span class="text">Excel</span>
        </a>

        <a class="btn btn-default pull-right" href="{{URL::route('psdp_registrations.index')}}">
          <i class="fa fa-backward text"></i>
          <span class="text">Psdp Registrations</span>
        </a>

    </div>
    <div class="col-sm-12">
      <section class="panel panel-default">
        <header class="panel-heading">
          PSDP Registration {{$psdp_registration->semester}}, {{$psdp_registration->year}}
        </header>
        <table class="table table-bordered m-b-none">
          <thead>
            <tr>
              <th>SL.</th>
              <th>Name</th>
              <th>Student ID</th>
              <th>CGPA</th>
              <th>Department</th>
              <th>Major</th>
              <th>Minor</th>
              <th>Email</th>
              <th>Phone Number</th>
              <th width="70" colspan="2"></th>
            </tr>
          </thead>
          <tbody>
            @foreach($psdp_registration->registration->registrants as $applicant)
            <tr>
                <td>{{$applicant->id}}</td>
                <td>
                    <a href="{{URL::route('student.profile', $applicant->user->id)}}">
                        {{$applicant->user->first_name}} {{$applicant->user->last_name}}
                    </a>
                </td>
                <td>{{$applicant->user->student->student_id}}</td>
                <td>{{$applicant->user->student->current_cgpa}}</td>
                <td>{{$applicant->user->student->department->name}}</td>
                <td>{{$applicant->user->student->major_course->name}}</td>
                <td>{{$applicant->user->student->minor_course->name}}</td>
                <td>{{$applicant->user->email}}</td>
                <td>{{$applicant->user->phone_number}}</td>
                <td>
                    cancel
                </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </section>
    </div>

</div>

    </section>
    </section>
@stop