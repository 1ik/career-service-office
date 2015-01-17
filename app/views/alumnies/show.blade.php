@extends('admin.layouts.master')

@section('header')
<link rel="stylesheet" href="<?php echo URL::to("");?>/assets/themify-icons/themify-icons.css" type="text/css" />
@stop

@section('action_bar')

@if($alumni->user->activated == 0)
<li class="hidden-xs">
  <a href="{{URL::to('activate-user/' . $alumni->user->id . '/' . $alumni->user->activation_code)}}">
    <i style="font-weight: 800; color:green" class="ti-check"></i>
  </a>
</li>
@endif

@stop

@section('content')

<section class="vbox">
    <section class="scrollable padder">
        <div class="row">
            <div class="col-xs-5">
                <div class="wrapper">
                    <section class="panel panel-default">
                        <h4 class="padder">{{$alumni->user->first_name}} {{$alumni->user->last_name}}</h4>
                        <ul class="list-group">
                            <li class="list-group-item">
                                Gender : {{$alumni->user->gender == 'm' ? "Male" : "Female"}}
                            </li>
                            <li class="list-group-item">
                                <i class="fa fa-envelope-o"></i> : <em>{{$alumni->user->email}}</em>
                            </li>
                            <li class="list-group-item">
                                <i class="fa fa-mobile-phone"></i> : <em>{{$alumni->user->cell_phone}}</em>
                            </li>
                            <li class="list-group-item">
                                <i class="fa fa-phone-square"></i> : <em>{{$alumni->user->phone_number}}</em>
                            </li>
                            <li class="list-group-item">
                                <i class="fa fa-globe"></i> : <em>{{$alumni->url}}</em>
                            </li>
                        </ul>
                    </section>
                    <section class="panel panel-default">
                        <h4 class="padder">Employment information</h4>
                        <ul class="list-group">
                            @if($alumni->employment_status == "on")
                                <li class="list-group-item">
                                    Unemployed
                                </li>
                            @else
                                <li class="list-group-item">
                                    <em>{{$alumni->organisation}}</em>
                                </li>
                                <li class="list-group-item">
                                    {{$alumni->designation}}
                                </li>
                            @endif
                        </ul>
                    </section>
                </div>
            </div>
            <div class="col-xs-4">
                <div class="wrapper ">
                    <img class="thumbnail" width="200px" height="180px" src="{{URL::to('files/users/pp/' . $alumni->user->profile_image )}}" alt="" />
                </div>
            </div>
        </div>
    </section>
</section>

@stop