@extends('admin.layouts.master')

@section('header')

@stop

@section('content')

<section class="hbox stretch">
    <section>
        <section class="vbox">
            <section class="scrollable padder">
                <section class="row m-b-md">
                    <div class="col-sm-12">
                        {{Form::open(['url' => URL::route('users.profile.update', $alumni->user->id), 'method' => 'PUT', 'files' => true])}}

                        <!--basic info -->
                        <section class="panel panel-default">
                            <header class="panel-heading font-bold">Edit Profile</header>
                            <div class="panel-body">
                                <div class="col-xs-6">
                                    <div class="form-group">
                                        <label for="first_name">First Name : </label>
                                        <input type="text" name="first_name" value="{{$alumni->user->first_name}}" class="form-control"/>
                                    </div>
                                </div>
                                <div class="col-xs-6">
                                    <div class="form-group">
                                        <label for="first_name">Last Name : </label>
                                        <input type="text" name="last_name" value="{{$alumni->user->last_name}}" class="form-control"/>
                                    </div>
                                </div>

                                <div class="col-xs-6">
                                  <label for="gender">Gender</label>
                                  <div class="form-group">
                                      <select name="gender" id="" class="form-control">
                                        <option value="m" @if($alumni->user->gender == 'm') selected @endif> Male </option>
                                        <option value="f" @if($alumni->user->gender == 'f') selected @endif> Female </option>
                                      </select>
                                  </div>
                                </div>

                                <div class="col-xs-6">
                                  <div class="form-group">
                                      <label for="phone_number">Email : </label>
                                      <input type="text" disabled name="email" value="{{$alumni->user->email}}" class="form-control"/>
                                  </div>
                                </div>

                                <div class="col-xs-6">
                                  <div class="form-group">
                                      <label for="phone_number">Phone Number : </label>
                                      <input type="text" name="phone_number" value="{{$alumni->user->phone_number}}" class="form-control"/>
                                  </div>
                                </div>

                                <div class="col-xs-6">
                                  <div class="form-group">
                                      <label for="cell_phone">cell phone Number : </label>
                                      <input type="text" name="cell_phone" value="{{$alumni->user->cell_phone}}" class="form-control"/>
                                  </div>
                                </div>

                                <div class="col-xs-6">
                                  <div class="form-group">
                                      <label for="password">Password (Leave blank if you don't want to change) : </label>
                                      <input type="password" name="password" class="form-control"/>
                                  </div>
                                </div>

                                <div class="col-xs-6">
                                    <label class="">Profile picture</label>
                                    <div class="form-group">
                                        <input name="profile_picture" type="file" class="filestyle" data-icon="false" data-classbutton="btn btn-default" data-classinput="form-control inline v-middle input-s" id="filestyle-0" style="position: fixed; left: -500px;"><div class="bootstrap-filestyle" style="display: inline;"><input type="text" class="form-control inline v-middle input-s" disabled=""> <label for="filestyle-0" class="btn btn-default"><span>Choose file</span></label></div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <!--basic info -->

                        <!-- professional profile -->
                        <section class="panel panel-default">
                            <header class="panel-heading font-bold">Professional Profile</header>
                            <div class="panel-body">
                                <div class="col-xs-12">
                                    <div class="form-group">
                                        <label for="first_name">URL : </label>
                                        <input type="text" name="url" value="{{$alumni->url}}" class="form-control"/>
                                    </div>
                                </div>
                                <div class="col-xs-6">
                                    <div class="form-group">
                                        <label for="designation">Employment Organisation : </label>
                                        <input type="text" name="organisation" value="{{$alumni->organisation}}" class="form-control"/>
                                    </div>
                                </div>
                                <div class="col-xs-6">
                                    <div class="form-group">
                                        <label for="designation">Post in the Organisation : </label>
                                        <input type="text" name="designation" value="{{$alumni->designation}}" class="form-control"/>
                                    </div>
                                </div>
                                <div class="col-xs-6">
                                    <div class="form-group">
                                        <label for="designation">I am Currently Unemployed :
                                            <input type="checkbox" name="employment_status" @if($alumni->employment_status == "on") checked @endif />
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <!-- professional profile -->

                        <button type="submit" class="btn btn-lg btn-default">Submit</button>
                        {{Form::close();}}
                    </div>
                </section>
            </section>
        </section>
    </section>
</section>

@stop

@section('footer')

@stop