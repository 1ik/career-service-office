@extends('admin.layouts.master')

@section('header')
<style type="text/css">
    .panel-heading, h3 {
        text-align: center;
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
      <section class="panel panel-default">
        <header class="panel-heading">
          Students
        </header>
        <table class="table table-bordered m-b-none">
          <thead>
            <tr>
              <th>SL.</th>
              <th>Name</th>
              <th>Email</th>
              <th>Student ID</th>
              <th>CGPA</th>
              <th>Phone Number</th>
              <th>Department</th>
              <th>Semester</th>
            </tr>
          </thead>
          <tbody>
            @foreach($students as $student)
            <tr>
                <td>{{$student->id}}</td>
                <td><a href="{{URL::to('profile/student/' . $student->user->id . '/' . $student->user->first_name . '-' . $student->user->last_name)}}">{{$student->user->first_name}} {{$student->user->last_name}}</a></td>
                <td>{{$student->user->email}}</td>
                <td>{{$student->student_id}}</td>
                <td>{{$student->current_cgpa}}</td>
                <td>{{$student->user->phone_number}}</td>
                <td>{{$student->department->name}}</td>
                <td>{{$student->semester}}</td>
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