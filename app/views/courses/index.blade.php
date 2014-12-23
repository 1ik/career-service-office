@extends('admin.layouts.master')

@section('content')

<section class="vbox">
    <section class="scrollable padder">



<div class="m-b-md">
    <h3 class="m-b-none">Administer Courses and departments</h3>
</div>
  <div class="row">
    <div class="col-sm-6">
      <section class="panel panel-default">
        <header class="panel-heading">
          Courses
        </header>
        <table class="table table-bordered m-b-none">
          <thead>
            <tr>
              <th>SL.</th>
              <th>Name</th>
              <th width="70"></th>
            </tr>
          </thead>
          <tbody>

            @foreach($courses as $course)
            <tr>
              <td>{{$course->id}}</td>
              <td> {{$course->name}} </td>
              <td> <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-pencil"></i></a> </td>
            </tr>
            @endforeach
            <tr>
                {{ Form::open(['url' => URL::route('courses.store')])}}
                <td colspan="2">
                   <input type="text" name="name" placeholder="Course Name" class="form-control"/>
                </td>
                <td>
                    <input type="submit" class="btn btn-sm btn-default"/>
                </td>
                {{ Form::close(); }}
            </tr>
          </tbody>
        </table>
      </section>
    </div>



    <div class="col-sm-6">
          <section class="panel panel-default">
            <header class="panel-heading">
              Departments
            </header>
            <table class="table table-bordered m-b-none">
              <thead>
                <tr>
                  <th>SL.</th>
                  <th>Name</th>
                  <th width="70"></th>
                </tr>
              </thead>
              <tbody>

                @foreach($departments as $d)
                <tr>
                  <td> {{$d->id}} </td>
                  <td> {{$d->name}} </td>
                  <td> <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-pencil"></i></a> </td>
                </tr>
                @endforeach
                <tr>
                    {{ Form::open(['url' => URL::route('departments.store')])}}
                    <td colspan="2">
                       <input type="text" name="name" placeholder="Department Name" class="form-control"/>
                    </td>
                    <td>
                        <input type="submit" class="btn btn-sm btn-default"/>
                    </td>
                    {{ Form::close(); }}
                </tr>
              </tbody>
            </table>
          </section>
        </div>

  </div>

</section>
</section>


@stop