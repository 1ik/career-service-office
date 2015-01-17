<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">Register as a student</h4>
      </div>
      <div class="modal-body">

              <div class="row">
                <div class="col-sm-12">
                  <form id="wizardform" method="get" action="">
                    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                    <div class="panel panel-default">
                      <div class="panel-heading">
                        <ul class="nav nav-tabs font-bold">
                          <li><a href="#step1" data-toggle="tab">Basic </a></li>
                          <li><a href="#step2" data-toggle="tab">Academic </a></li>
                          <li><a href="#step3" data-toggle="tab">Personal</a></li>
                          <li><a href="#step4" data-toggle="tab">Gurdian </a></li>
                          <li><a href="#step5" data-toggle="tab">Finish </a></li>
                        </ul>
                      </div>
                      <div class="panel-body">

                        <div class="tab-content">

                          <!--basic informations -->
                          <div class="tab-pane" id="step1">
                            <div class="row">
                              <div class="col-xs-12">
                                <label for="">Your Name : </label>
                              </div>
                              <div class="col-xs-6">
                                <input type="text" class="form-control" data-trigger="change" data-required="true" placeholder="First Name" id="student_first_name">
                              </div>
                              <div class="col-xs-6">
                                <input type="text" class="form-control" data-trigger="change" data-required="true" placeholder="Last Name" id="student_last_name">
                              </div>

                              <div class="col-xs-12">
                                <div class="form-group">
                                  <label for="gender">Gender </label>
                                  <select style="width:260px" name="student_gender" id="student_gender" class="form-control">
                                    <option value="m">Male</option>
                                    <option value="f">Female</option>
                                    <option selected value="o">Other</option>
                                  </select>
                                </div>
                              </div>

                              <div class="col-xs-12">
                                <div class="row">
                                  <div class="col-xs-12">
                                    <label for="">Contact Information</label>
                                    <input type="text" class="form-control" data-trigger="change" data-required="true" placeholder="Email address" id="student_email" data-type="email">
                                  </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-6 form-group">
                                      <br>
                                      <input type="text" class="form-control" data-trigger="change" data-required="true" placeholder="Cell Phone" id="student_cell_phone" data-type="number">
                                    </div>
                                    <div class="col-xs-6 form-group">
                                    <br>
                                      <input type="text" class="form-control" data-trigger="change" data-required="true" placeholder="Telephone" id="student_telephone" data-type="number">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-xs-6 form-group">
                                      <br>
                                      <input type="password" class="form-control" data-trigger="change" data-required="true" placeholder="Password" id="student_password" >
                                    </div>
                                    <div class="col-xs-6 form-group">
                                    <br>
                                      <input type="password" class="form-control" data-trigger="change" data-required="true" placeholder="Confirm" id="student_password_confirm" data-equalto="#student_password" >
                                    </div>
                                </div>


                              </div>
                            </div>
                          </div>




                          <!--basic informations -->
                          <div class="tab-pane" id="step2">
                            <div class="row">
                              <div class="col-xs-12">
                                <p>Your current Student ID:</p>
                                <input id="student_studentid" type="text" class="form-control" data-trigger="change" data-required="true" data-type="number" placeholder="Student ID">
                              </div>
                              <div class="col-xs-6">
                                <br>
                                <input id="student_cgpa" type="text" class="form-control" data-trigger="change" data-required="true" data-type="number" placeholder="current cgpa" name="current_cgpa">
                              </div>
                              <div class="col-xs-6">
                                <br>
                                <input id="student_credits_completed" type="text" class="form-control" data-trigger="change" data-required="true" data-type="number" placeholder="credits completed" name="credits_completed">
                              </div>

                                <div class="col-xs-12 form-group">
                                  <label for="department">Department : </label>
                                  <select class="form-control" name="department" id="student_department">
                                    @foreach($departments as $department)
                                        <option value="{{$department->id}}">{{$department->name}}</option>
                                    @endforeach
                                  </select>
                                </div>

                                <div class="col-xs-6 form-group">
                                  <label for="major">Major : </label>
                                  <select class="form-control" name="major" id="student_major">
                                    @foreach($courses as $course)
                                        <option value="{{$course->id}}">{{$course->name}}</option>
                                    @endforeach
                                  </select>
                                </div>

                                <div class="col-xs-6 form-group">
                                  <label for="minor">Minor : </label>
                                  <select class="form-control" name="minor" id="student_minor">
                                    @foreach($courses as $course)
                                        <option value="{{$course->id}}">{{$course->name}}</option>
                                    @endforeach
                                  </select>
                                </div>

                                <div class="col-xs-12 form-group">
                                  <label for="semester">Semester : </label>
                                  <select class="form-control" name="minor" id="student_semester">
                                    <option value="s">Second Last</option>
                                    <option value="l">Last</option>
                                  </select>
                                </div>
                            </div>
                          </div>




                          <!-- personal information -->
                          <div class="tab-pane" id="step3">
                            <section class="panel panel-default">
                              <header class="panel-heading">
                                <span class="h4">Your Present address</span>
                              </header>
                              <div class="panel-body">
                                  <div class="form-group">
                                    <textarea id="student_present_address" name="present_address" class="form-control" rows="6" data-minwords="6" data-required="true" placeholder="Address"></textarea>
                                  </div>
                                  <div class="form-group pull-in clearfix">
                                    <div class="col-sm-6">
                                      <input type="text" class="form-control" placeholder="City" data-required="true" name="present_city" id="student_present_city">
                                    </div>
                                    <div class="col-sm-6">
                                      <input type="text" class="form-control" placeholder="Postal Code" data-required="true" name="present_postal_code" id="student_postal_code">
                                    </div>
                                  </div>
                              </div>
                            </section>

                            <section class="panel panel-default">
                              <header class="panel-heading">
                                <span class="h4">Your Permanent address</span>
                              </header>
                              <div class="panel-body">
                                  <div class="form-group">
                                    <textarea id="student_permanent_address" name="permanent_address" class="form-control" rows="6" data-minwords="6" data-required="true" placeholder="Address"></textarea>
                                  </div>
                                  <div class="form-group pull-in clearfix">
                                    <div class="col-sm-6">
                                      <input id="student_permanent_city" class="form-control" placeholder="City" data-required="true" name="permanent_city">
                                    </div>
                                    <div class="col-sm-6">
                                      <input class="form-control" placeholder="Postal Code" data-required="true" name="permanent_postal_code" id="student_permanent_postal_code">
                                    </div>
                                    <br>
                                  </div>
                              </div>
                            </section>
                            <div class="col-sm-12">
                              <input type="url" class="form-control" placeholder="Web Url" data-required="true" name="student_web_url" id="student_web_url">
                            </div>
                            <br><br>
                          </div>


                          <!-- personal information -->
                          <div class="tab-pane" id="step4">

                            <div class="form-group pull-in clearfix">
                              <div class="col-sm-12">
                                <label>Gurdian name</label>
                                <input type="text" class="form-control" data-required="true" name="gurdian_name" id="student_gurdian_name">
                              </div>
                              <div class="col-sm-12">
                                <label>Relationship with Gurdian</label>
                                <input  class="form-control" data-required="true" id="student_gurdian_relation">
                              </div>
                              <div class="col-sm-12">
                                <label>Name of the Institute Gurdian works in</label>
                                <input class="form-control" data-required="true" name="gurdian_work_institute" id="student_gurdian_work_institute">
                              </div>
                              <div class="col-sm-12">
                                <label>Designation of Gurdian in the institute</label>
                                <input class="form-control" data-required="true" name="gurdian_desig" id="student_gurdian_design">
                              </div>
                              <div class="col-sm-12">
                                <label>Gurdian's Contact number. </label>
                                <input class="form-control" data-required="true" name="gurdian_contact" id="student_gurdian_contact">
                              </div>
                              <div class="col-sm-12">
                                <label>Gurdian's Email address </label>
                                <input class="form-control" name="gurdian_email" id="student_gurdian_email">
                              </div>
                            </div>
                          </div>
                          <!--personal information-->


                          <!--finish -->
                            <div class="tab-pane" id="step5">
                            <div class="form-group pull-in clearfix">

                              <div class="col-sm-12">
                                <label>Tell something about yourself</label>
                                <textarea id="student_bio" name="student_bio" class="form-control" rows="6" data-minwords="6" data-required="true" placeholder="Address"></textarea>
                              </div>

                              <div class="col-sm-12">
                                <label>Your Employment status ? </label>
                                <select style="width:260px" name="gender" id="student_employment_status" class="form-control">
                                    <option value="employed">Employed</option>
                                    <option value="unemployed">Unemployed</option>
                                  </select>
                              </div>
                              <div class="col-sm-12">
                                <br/>
                               <div class="alert alert-success hidden" id="form-success-message">
                                <button type="button"  class="close" data-dismiss="alert">×</button>
                                <i class="fa fa-ok-sign"></i><strong>Thank you for signing up!</strong> Please check your email address for further instructions.
                              </div>

                                <a id="student-form-submit-button" href="#" class="btn btn-s-md btn-default btn-rounded">Submit</a>
                              </div>
                            </div>
                          </div>
                          <!--finish -->

                          <ul class="pager wizard m-b-sm">
                            <li class="previous first" style="display:none;"><a href="#">First</a></li>
                            <li class="previous"><a href="#">Previous</a></li>
                            <li class="next last" style="display:none;"><a href="#">Last</a></li>
                            <li class="next"><a href="#">Next</a></li>
                          </ul>
                        </div>

                        <h4>Completed</h4>
                        <div class="progress progress-xs m-t-md">
                          <div class="progress-bar bg-success"></div>
                        </div>

                      </div>
                    </div>
                  </form>
                </div>
              </div>
      </div>
    </div>
  </div>
</div>