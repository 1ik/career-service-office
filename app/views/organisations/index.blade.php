@extends('admin.layouts.master')

@section('content')

<section class="vbox">
    <section class="scrollable padder">


<div class="m-b-md">
    <h3 class="m-b-none">Administer Organisations and OrganisationTypes
        <a class="pull-right btn btn-default btn-sm" href="{{URL::route('organisations.create')}}">Add Organisation</a>

    </h3>
</div>
  <div class="row">
    <div class="col-sm-12 col-md-9">
      <section class="panel panel-default">
        <header class="panel-heading">
          Organisations
        </header>
        <table class="table table-bordered m-b-none">
          <thead>
            <tr>
              <th>SL.</th>
              <th>Name</th>
              <th>Initial</th>
              <th>URL</th>
              <th>Type</th>
              <th width="70"></th>
            </tr>
          </thead>
          <tbody>

            @foreach($organisations as $organisation)
            <tr>
              <td>{{$organisation->id}}</td>
              <td> {{$organisation->name}} </td>
              <td> {{$organisation->initial}} </td>
              <td> {{$organisation->url}}</td>
              <td>{{$organisation->organisation_type->name}}</td>
              <td> <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-pencil"></i></a> </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </section>
    </div>



    <div class="col-sm-12 col-md-3">
          <section class="panel panel-default">
            <header class="panel-heading">
              Organisation types
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

                @foreach($organisationTypes as $type)
                <tr>
                  <td> {{$type->id}} </td>
                  <td> {{$type->name}} </td>
                  <td> <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-pencil"></i></a> </td>
                </tr>
                @endforeach
                <tr>
                    {{ Form::open(['url' => URL::route('organisation_types.store')])}}
                    <td colspan="2">
                       <input type="text" name="name" placeholder="Type" class="form-control"/>
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