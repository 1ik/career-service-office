@extends('admin.layouts.master')

@section('content')


<section class="scrollable padder">
              <div class="m-b-md">
              </div>
              <div class="row">
                <div class="col-sm-12">
                  <section class="panel panel-default">
                    <header class="panel-heading font-bold">Create an administrator</header>
                    <div class="panel-body">
                      {{Form::open(['url' => 'admin/users/administrators/store', 'method' => 'post'])}}

                        <div class="col-xs-6">
                            <div class="form-group">
                              <label>First Name</label>
                              <input name="first_name" type="first_name" class="form-control" placeholder="">
                            </div>
                        </div>

                        <div class="col-xs-6">
                            <div class="form-group">
                              <label>Last Name</label>
                              <input name="last_name" type="text" class="form-control" placeholder="">
                            </div>
                        </div>

                        <div class="col-xs-12">
                            <div class="form-group">
                              <label>Email address</label>
                              <input type="email" name="email" class="form-control" placeholder="Enter email">
                            </div>
                        </div>


                        <div class="col-xs-6">
                            <div class="form-group">
                              <label>Phone</label>
                              <input name="phone_number" type="text" class="form-control" placeholder="">
                            </div>
                        </div>

                        <div class="col-xs-6">
                            <div class="form-group">
                              <label>Cell Phone</label>
                              <input name="cell_phone" type="text" class="form-control" placeholder="">
                            </div>
                        </div>

                        <div class="col-xs-6">
                            <div class="form-group">
                              <label>Password</label>
                              <input name="password" type="password" class="form-control" placeholder="Password">
                            </div>
                        </div>

                        <div class="col-xs-6">
                            <div class="form-group">
                              <label>Gender</label>
                              <select name="gender" class="form-control">
                                <option value="m">Male</option>
                                <option value="f">Female</option>
                              </select>
                            </div>
                        </div>

                        <div class="col-xs-12">
                            <div class="checkbox i-checks">
                              <label>
                                <input name="activated" type="checkbox" checked> <i></i> Activated
                              </label>
                            </div>
                            <button type="submit" class="btn btn-sm btn-default">Submit</button>
                        </div>
                      {{Form::close();}}
                    </div>
                  </section>
                </div>

              </div>

</section>








@stop