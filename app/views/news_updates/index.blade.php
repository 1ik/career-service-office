@extends('admin.layouts.master')

@section('header')
<link rel="stylesheet" href="{{URL::to('assets/js/datatables/datatables.css')}}" type="text/css"/>
@stop

@section('action_bar')
@stop

@section('content')
<section class="vbox">
    <section class="scrollable padder">
      <div class="m-b-md">
          <h3 class="m-b-none">News update and events
            @if(\cso\utils\UserUtil::isAdmin() )
              <a class="btn btn-default btn-circle pull-right" href="{{URL::route('news_updates.create')}}">New news update or event</a>
            @endif
          </h3>
      </div>
            <section class="panel panel-default">
              <header class="panel-heading">
                Events and News updates
              </header>
              <div class="table-responsive">
                <table class="table table-striped m-b-none" data-ride="datatables">
                  <thead>
                    <tr>
                      <th>SL.</th>
                      <th>Title</th>
                      <th>Summery</th>
                      <th>Category</th>
                      <th>Published</th>
                      <th>Posted by</th>
                      <th>Approved by</th>
                      <th>Created on</th>
                    </tr>
                  </thead>
                  <tbody>
                      @foreach($news_updates as $update)
                          <tr>
                              <td>{{$update->id}}</td>
                                  <td><a href="{{URL::route('news_updates.edit', $update->id)}}">{{substr($update->title,0,20)}}</a></td>
                              <td>{{substr($update->summery,0,30)}}</td>
                              <td>{{$update->category == 'update' ? "News Update" : "Event" }}</td>
                              <td>{{$update->published == 1 ? "Published" : "Unpublished"}}</td>
                              <td>{{$update->poster->first_name}} {{$update->poster->last_name}}</td>
                              <td>{{$update->approver->first_name}} {{$update->approver->last_name}}</td>
                              <td>{{$update->created_at}}</td>
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

