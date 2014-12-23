@extends('admin.layouts.master')

@section('header')
<style type="text/css">
    .panel-heading, h3 {
        text-align: center;
    }
</style>
@stop

@section('content')

<div class="m-b-md">
</div>
  <div class="row">
    <div class="col-sm-12">
      <section class="panel panel-default">
        <header class="panel-heading">
          PSDP Registration {{$psdp_registration->semester}}, {{$psdp_registration->year}}
        </header>
        <table class="table table-bordered m-b-none">
          <thead>
            <tr>
              <th>SL.</th>
              <th>First Name</th>
              <th>Last Name</th>
              <th>Student ID</th>
              <th>CGPA</th>
              <th>Department</th>
              <th>Email</th>
              <th>Phone Number</th>
              <th width="70"></th>
            </tr>
          </thead>
          <tbody>
            @foreach($psdp_registration->registration->registrants as $applicant)
            <tr>
                <td>{{$applicant->user}}</td>
            </tr>
            @endforeach
          </tbody>
        </table>

      </section>
    </div>
@stop