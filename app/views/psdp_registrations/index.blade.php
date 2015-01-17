@extends('admin.layouts.master')

@section('header')
<style type="text/css">
    #psdpform {
        margin-top:14px;
    }
</style>
@stop

@section('content')
<section class="vbox">
<section class="scrollable padder">


<div class="m-b-md">
    <div class="row">
        <div class="col-xs-5">
            <h3 class="m-b-none">
                Psdp Registrations
            </h3>
        </div>
        <div class="col-xs-7 pull-right">
            <form id="psdpform" class="form-inline pull-right" role="form" action="{{URL::route('psdp_registrations.store')}}" method="post">
                <div class="form-group">
                    <input autocomplete="off" type="text" name="semester" placeholder="semester" class="form-control"/>
                </div>
                <div class="form-group">
                    <input autocomplete="off" type="text" name="year" placeholder="year" class="form-control"/>
                </div>
                <div class="checkbox m-l m-r-xs">
                    <input type="submit" class="btn btn-sm btn-default" value="create"/>
                </div>
            </form>
        </div>
    </div>
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
            </tr>
          </thead>

          <tbody>
            @foreach($psdps as $psdp)
            <tr>
              <td>{{$psdp->id}}</td>
              <td> {{$psdp->semester}} </td>
              <td> {{$psdp->year}} </td>
              <td> {{$psdp->status }}

                @if($psdp->status == 'enrolled')
                    (<a href="{{URL::route('psdp_registration.complete', $psdp->id)}}">
                        <i class="fa fa-check"></i>
                    </a>)
                @endif
              </td>
              <td>
                {{ $psdp->registration->open ? "Open" : "Close" }}
                @if($psdp->registration->open)
                    (<a href="{{URL::route('psdp_registration.close', $psdp->id)}}">close</a>)
                @endif
              </td>
              <td>
                <a href="{{URL::route('psdp_registrations.registrants', $psdp->id)}}">Registrants ({{count($psdp->registrants)}})</a>
              </td>
              <td> <a href="{{URL::route('psdp.export', $psdp->id)}}" ><i style="color: #1AAE88" class="fa fa-cloud-download"></i></a> </td>
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