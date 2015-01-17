@extends('admin.layouts.master')

@section('header')
<link rel="stylesheet" href="<?php echo URL::to("");?>/assets/themify-icons/themify-icons.css" type="text/css" />
@stop

@section('action_bar')

@if($employer->user->activated == 0)
<li class="hidden-xs">
  <a href="{{URL::to('activate-user/' . $employer->user->id . '/' . $employer->user->activation_code)}}">
    <i style="font-weight: 800; color:green" class="ti-check"></i>
  </a>
</li>
@endif






<li class="hidden-xs">
  <a href="{{URL::route('users.profile.edit', $employer->user->id)}}">
    <i style="font-weight: 800; color:green" class="ti-pencil"></i>
  </a>
</li>



@stop

@section('content')

<section class="vbox">
    <section class="scrollable padder">
        <div class="row">
            <div class="col-xs-5">
                <div class="wrapper">
                    <section class="panel panel-default">
                        <h4 class="padder">{{$employer->user->first_name}} {{$employer->user->last_name}}</h4>
                        <ul class="list-group">
                            <li class="list-group-item">
                                Gender : {{$employer->user->gender == 'm' ? "Male" : "Female"}}
                            </li>
                            <li class="list-group-item">
                                <i class="fa fa-envelope-o"></i> : <em>{{$employer->user->email}}</em>
                            </li>
                            <li class="list-group-item">
                                <i class="fa fa-mobile-phone"></i> : <em>{{$employer->user->cell_phone}}</em>
                            </li>
                            <li class="list-group-item">
                                <i class="fa fa-phone-square"></i> : <em>{{$employer->user->phone_number}}</em>
                            </li>
                            <li class="list-group-item">
                                 <em>{{$employer->organisation->name}}</em>
                            </li>
                        </ul>
                    </section>
                </div>
            </div>
            <div class="col-xs-4">
                <div class="wrapper ">
                    <img class="thumbnail" width="200px" height="180px" src="{{URL::to('files/users/pp/' . $employer->user->profile_image )}}" alt="" />
                </div>
            </div>
        </div>
    </section>
</section>

@stop