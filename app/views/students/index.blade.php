@extends('admin.layouts.master')

@section('header')
<link rel="stylesheet" href="{{URL::to('assets/js/datatables/datatables.css')}}" type="text/css"/>
<link rel="stylesheet" href="{{URL::to('assets/icons/user-icons/flaticon.css')}}" type="text/css"/>
<style type="text/css">
    .panel-heading, h3 {
        text-align: center;
    }
    .blocked {
        color: #E33244;
    }

    tr.blocked > td > a {
        color: #E33244;
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
        <table class="table table-bordered m-b-none"  data-ride="datatables">
          <thead>
            <tr>
              {{--<th>SL.</th>--}}
              <th>Name</th>
              <th>Email</th>
              <th>Student ID</th>
              <th>CGPA</th>
              <th>Phone Number</th>
              <th>Department</th>
              <th>Semester</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
            @foreach($students as $student)
            <tr class="@if( isset($student->user->throttle) && $student->user->throttle->banned == 1) blocked @endif" data-student="{{$student->user->id}}">
                {{--<td>{{$student->id}}</td>--}}
                <td><a href="{{URL::route('student.profile', $student->user->id)}}">{{$student->user->first_name}} {{$student->user->last_name}}</a></td>
                <td>{{$student->user->email}}</td>
                <td>{{$student->student_id}}</td>
                <td>{{$student->current_cgpa}}</td>
                <td>{{$student->user->phone_number}}</td>
                <td>{{$student->department->name}}</td>
                <td>{{$student->semester}}</td>
                <td>
                    <a class="block-user" href=""><i class="flaticon-blocking"></i></a>
                    <a href=""><i class="flaticon-chat23"></i></a>
                    <a data-toggle="modal" data-target="#myModal" href=""><i class="flaticon-email20"></i></a>
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

@include('partials.modals.send_mail');

@stop



@section('footer')
    <script src="{{URL::to('assets/js/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{URL::to('assets/js/datatables/demo.js')}}"></script>
    <script src="{{URL::to('assets/js/user-management.js')}}"></script>

@stop


