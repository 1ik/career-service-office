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
                    {{Form::open(['url' => URL::route('users.profile.update', $user->id), 'method' => 'PUT', 'files' => true])}}
                        <!--user information -->
                        <section class="panel panel-default">
                            <header class="panel-heading font-bold">Edit Profile</header>
                            <div class="panel-body">
                                    <div class="col-xs-6">
                                        <div class="form-group">
                                            <label for="first_name">First Name : </label>
                                            <input type="text" name="first_name" value="{{$user->first_name}}" class="form-control"/>
                                        </div>
                                    </div>
                                    <div class="col-xs-6">
                                        <div class="form-group">
                                            <label for="first_name">Last Name : </label>
                                            <input type="text" name="last_name" value="{{$user->last_name}}" class="form-control"/>
                                        </div>
                                    </div>

                                    <div class="col-xs-6">
                                      <label for="gender">Gender</label>
                                      <div class="form-group">
                                          <select name="gender" id="" class="form-control">
                                            <option value="m" @if($user->gender == 'm') selected @endif> Male </option>
                                            <option value="f" @if($user->gender == 'f') selected @endif> Female </option>
                                          </select>
                                      </div>
                                    </div>

                                    <div class="col-xs-6">
                                      <div class="form-group">
                                          <label for="phone_number">Email : </label>
                                          <input type="text" disabled name="email" value="{{$user->email}}" class="form-control"/>
                                      </div>
                                    </div>

                                    <div class="col-xs-6">
                                      <div class="form-group">
                                          <label for="phone_number">Phone Number : </label>
                                          <input type="text" name="phone_number" value="{{$user->phone_number}}" class="form-control"/>
                                      </div>
                                    </div>

                                    <div class="col-xs-6">
                                      <div class="form-group">
                                          <label for="cell_phone">cell phone Number : </label>
                                          <input type="text" name="cell_phone" value="{{$user->cell_phone}}" class="form-control"/>
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

                                    <div class="col-xs-6">
                                        <label class="">cv</label>
                                        <div class="form-group">
                                            <input type="file" name="cv" class="form-control"/>
                                        </div>
                                    </div>
                            </div>
                        </section>
                        <!--user information -->

                        <!--academic information -->
                        <section class="panel panel-default">
                            <header class="panel-heading font-bold">Academim  information</header>

                            <div class="panel-body">

                                <div class="col-xs-8">
                                    <div class="form-group">
                                        <label for="first_name">Department : </label>
                                        <select name="department_id" id="" class="form-control">
                                            @foreach($departments as $dept)
                                                <option @if($user->student->department_id == $dept->id) selected @endif value="{{$dept->id}}">{{$dept->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xs-4">
                                    <div class="form-group">
                                        <label for="first_name">Semester : </label>
                                        <select name="semester" id="" class="form-control">
                                            <option value="s" @if($user->student->semester == 's') selected @endif >Second Last</option>
                                            <option value="l" @if($user->student->semester == 'l') selected @endif >Last</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xs-6">
                                    <div class="form-group">
                                        <label for="first_name">Major : </label>
                                        <select name="major" id="" class="form-control">
                                            @foreach($courses as $c)
                                                <option @if($user->student->major == $c->id) selected @endif value="{{$c->id}}">{{$c->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-xs-6">
                                    <div class="form-group">
                                        <label for="first_name">Minor : </label>
                                        <select name="minor" id="" class="form-control">
                                            @foreach($courses as $c)
                                                <option @if($user->student->minor == $c->id) selected @endif value="{{$c->id}}">{{$c->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xs-4">
                                    <div class="form-group">
                                        <label for="student_id">Student ID : </label>
                                        <input type="text" name="student_id" value="{{$user->student->student_id}}" class="form-control"/>
                                    </div>
                                </div>

                                <div class="col-xs-4">
                                    <div class="form-group">
                                        <label for="current_cgpa">Current GPA : </label>
                                        <input type="text" name="current_cgpa" value="{{$user->student->current_cgpa}}" class="form-control"/>
                                    </div>
                                </div>

                                <div class="col-xs-4">
                                    <div class="form-group">
                                        <label for="credits_completed">Credits Completed : </label>
                                        <input type="text" name="credits_completed" value="{{$user->student->credits_completed}}" class="form-control"/>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <!--academic information -->

                        <!--academic information -->
                        <section class="panel panel-default">
                            <header class="panel-heading font-bold">Personal  information</header>

                            <div class="panel-body">

                                <div class="col-xs-5">
                                    <div class="form-group">
                                        <label for="first_name">Bio : </label>
                                        <textarea class="form-control" name="bio" id="" cols="30" rows="5">{{$user->student->bio}}</textarea>
                                    </div>
                                </div>
                                <div class="col-xs-5">
                                    <div class="form-group">
                                        <label for="first_name">Web url : </label>
                                        <input type="text" class="form-control" name="web_url" value="{{$user->student->web_url}}"/>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <!--academic information -->


                        <!--present address -->
                        <section class="panel panel-default">
                            <header class="panel-heading font-bold">Personal  Address</header>
                            <div class="panel-body">
                                <div class="col-xs-12">
                                    <div class="form-group">
                                        <label for="present_address">Street Address : </label>
                                        <textarea class="form-control" name="present_address" id="" cols="30" rows="5">{{$user->student->present_address}}</textarea>
                                    </div>
                                </div>
                                <div class="col-xs-6">
                                    <div class="form-group">
                                        <label for="present_city">City : </label>
                                        <input type="text" class="form-control" name="present_city" value="{{$user->student->present_city}}"/>
                                    </div>
                                </div>
                                <div class="col-xs-6">
                                    <div class="form-group">
                                        <label for="present_postal_code">Postal Code : </label>
                                        <input type="text" class="form-control" name="present_postal_code" value="{{$user->student->present_postal_code}}"/>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <!--present address -->

                        <!--permanent address -->
                        <section class="panel panel-default">
                            <header class="panel-heading font-bold">Permanent  Address</header>
                            <div class="panel-body">
                                <div class="col-xs-12">
                                    <div class="form-group">
                                        <label for="permanent_address">Street Address : </label>
                                        <textarea class="form-control" name="permanent_address" id="" cols="30" rows="5">{{$user->student->permanent_address}}</textarea>
                                    </div>
                                </div>
                                <div class="col-xs-6">
                                    <div class="form-group">
                                        <label for="permanent_city">City : </label>
                                        <input type="text" class="form-control" name="permanent_city" value="{{$user->student->permanent_city}}"/>
                                    </div>
                                </div>
                                <div class="col-xs-6">
                                    <div class="form-group">
                                        <label for="permanent_postal_code">Postal Code : </label>
                                        <input type="text" class="form-control" name="permanent_postal_code" value="{{$user->student->permanent_postal_code}}"/>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <!--permanent address -->

                        <!--Gurdian information -->
                        <section class="panel panel-default">
                            <header class="panel-heading font-bold">Gurdian's information</header>
                            <div class="panel-body">
                                <div class="col-xs-6">
                                    <div class="form-group">
                                        <label for="gurdian_name">Name of Gurdian : </label>
                                        <input type="text" class="form-control" name="gurdian_name" value="{{$user->student->gurdian_name}}"/>
                                    </div>
                                </div>
                                <div class="col-xs-6">
                                    <div class="form-group">
                                        <label for="gurdian_relation">Relationship with Gurdian : </label>
                                        <input type="text" class="form-control" name="gurdian_relation" value="{{$user->student->gurdian_relation}}"/>
                                    </div>
                                </div>

                                <div class="col-xs-6">
                                    <div class="form-group">
                                        <label for="gurdian_work_institute">Institude your Guridan works in : </label>
                                        <input type="text" class="form-control" name="gurdian_work_institute" value="{{$user->student->gurdian_work_institute}}"/>
                                    </div>
                                </div>

                                <div class="col-xs-6">
                                    <div class="form-group">
                                        <label for="gurdian_designation">Designation of your Gurdian in the institute : </label>
                                        <input type="text" class="form-control" name="gurdian_designation" value="{{$user->student->gurdian_designation}}"/>
                                    </div>
                                </div>

                                <div class="col-xs-6">
                                    <div class="form-group">
                                        <label for="gurdian_contact">Gurdian's Contact : </label>
                                        <input type="text" class="form-control" name="gurdian_contact" value="{{$user->student->gurdian_contact}}"/>
                                    </div>
                                </div>

                                <div class="col-xs-6">
                                    <div class="form-group">
                                        <label for="gurdian_email">Gurdian's email address (if any) : </label>
                                        <input type="text" class="form-control" name="gurdian_email" value="{{$user->student->gurdian_email}}"/>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <!--Gurdian information -->

                        <input type="submit" class="btn btn-success" value="Submit"/>
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