@extends('admin.layouts.master')

@section('content')
<section class="vbox">
<section class="scrollable padder">


<div class="m-b-md">
    <h3 class="m-b-none">Psdp Registrations</h3>
</div>
  <div class="row">
    <div class="col-sm-12">
      <section class="panel panel-default">
        <header class="panel-heading">
          Organisations
        </header>
        <table class="table table-bordered m-b-none">
          <thead>
            <tr>
              <th>SL.</th>
              <th>Semester</th>
              <th>Year</th>
              <th>Status</th>
              <th>Registration Status</th>
              <th width="70"></th>
            </tr>
          </thead>
          <tbody>

            @foreach($psdps as $psdp)
            <tr>
              <td>{{$psdp->id}}</td>
              <td> {{$psdp->semester}} </td>
              <td> {{$psdp->year}} </td>
              <td> {{$psdp->status }} </td>
              <td> {{ $psdp->registration->open ? "Open" : "Close" }} </td>
              <td></td>
              <td> <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-pencil"></i></a> </td>
            </tr>
            @endforeach
            <tr>
                {{ Form::open(['url' => URL::route('psdp_registrations.store')])}}

                <td colspan="2">
                   <input type="text" name="semester" placeholder="semester" class="form-control"/>
                </td>
                <td>
                    <input type="text" name="year" placeholder="year" class="form-control"/>
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