@extends('admin.layouts.master')

@section('content')

<section class="vbox">
    <section class="scrollable padder">



<div class="m-b-md">
    <h3 class="m-b-none">Administer Courses and departments</h3>
</div>
  <div class="row">
    <div class="col-sm-12">
      <section class="panel panel-default">
        <header class="panel-heading">
          Administrators
        </header>
        <table class="table table-bordered m-b-none">
          <thead>
            <tr>
              <th>SL.</th>
              <th>First Name</th>
              <th>Last Name</th>
              <th>Email address</th>
              <th>Phone Number</th>
              <th>Cell Phone Number</th>
              <th>Gender</th>
              <th>Activated</th>
              <th width="70"></th>
            </tr>
          </thead>
          <tbody>

            @foreach($admins as $admin)
            <tr>
              <td>{{$admin->id}}</td>
              <td> {{$admin->first_name}} </td>
              <td> {{$admin->last_name}} </td>
              <td> {{$admin->email}} </td>
              <td> {{$admin->phone_number}} </td>
              <td> {{$admin->cell_phone}} </td>
              <td> {{$admin->gender}} </td>
              <td> {{$admin->activated ? "Active" : "Inactive"}} </td>
              <td> <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-pencil"></i></a> </td>
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